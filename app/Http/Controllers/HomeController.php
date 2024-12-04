<?php

namespace App\Http\Controllers;

use App\Models\Product;
use chillerlan\QRCode\Data\QRMatrix;
use chillerlan\QRCode\Output\QRMarkupSVG;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Throwable;

class HomeController extends Controller
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('product'));
    }

    public function pix(string $id)
    {
        $product = Product::findOrFail($id);
        $px = [];
        $px[00] = "01";
        $px[26][00] = "BR.GOV.BCB.PIX"; //Indica arranjo específico; “00” (GUI) obrigatório e valor fixo: br.gov.bcb.pix
        $px[26][01] = "53471409000152"; // CNPJ somente numeros.
        $px[52] = "0000"; //Merchant Category Code “0000” ou MCC ISO18245
        $px[53] = "986"; //Moeda, “986” = BRL: real brasileiro - ISO4217
        $px[54] = "$product->preco_produto"; //Valor da transação, se comentado o cliente especifica o valor da transação no próprio app. Utilizar o . como separador decimal. Máximo: 13 caracteres.
        $px[58] = "BR"; //“BR” – Código de país ISO3166-1 alpha 2
        $px[59] = "MAKESOFT SOLUTIONS"; //Nome do beneficiário/recebedor. Máximo: 25 caracteres.
        $px[60] = "DIVINOPOLIS"; //Nome cidade onde é efetuada a transação. Máximo 15 caracteres.
        $px[62][05] = "***"; //Identificador de transação, quando gerado automaticamente usar ***. Limite 25 caracteres. Vide nota abaixo.
        $pix = $this->montaPix($px);
        $pix .= "6304";
        $pix .= $this->crcChecksum($pix);

        $out = (new QRCode())->render($pix);

        return view('makesoft.pix', compact('out', $product->preco_produto, $pix));
    }

    private function montaPix($px): string
    {
        $ret = "";
        foreach ($px as $k => $v) {
            if (!is_array($v)) {
                if ($k == 54) {
                    $v = number_format($v, 2, '.', '');
                } // Formata o campo valor com 2 digitos.
                else {
                    $v = $this->remove_char_especiais($v);
                }
                $ret .= $this->c2($k) . $this->cpm($v) . $v;
            } else {
                $conteudo = $this->montaPix($v);
                $ret .= $this->c2($k) . $this->cpm($conteudo) . $conteudo;
            }
        }
        return $ret;
    }

    private function remove_char_especiais($txt): string
    {
        return preg_replace('/\W /', '', $this->remove_acentos($txt));
    }

    private function remove_acentos($texto): string
    {
        $search = explode(",", "à,á,â,ä,æ,ã,å,ā,ç,ć,č,è,é,ê,ë,ē,ė,ę,î,ï,í,ī,į,ì,ł,ñ,ń,ô,ö,ò,ó,œ,ø,ō,õ,ß,ś,š,û,ü,ù,ú,ū,ÿ,ž,ź,ż,À,Á,Â,Ä,Æ,Ã,Å,Ā,Ç,Ć,Č,È,É,Ê,Ë,Ē,Ė,Ę,Î,Ï,Í,Ī,Į,Ì,Ł,Ñ,Ń,Ô,Ö,Ò,Ó,Œ,Ø,Ō,Õ,Ś,Š,Û,Ü,Ù,Ú,Ū,Ÿ,Ž,Ź,Ż");
        $replace = explode(",", "a,a,a,a,a,a,a,a,c,c,c,e,e,e,e,e,e,e,i,i,i,i,i,i,l,n,n,o,o,o,o,o,o,o,o,s,s,s,u,u,u,u,u,y,z,z,z,A,A,A,A,A,A,A,A,C,C,C,E,E,E,E,E,E,E,I,I,I,I,I,I,L,N,N,O,O,O,O,O,O,O,O,S,S,U,U,U,U,U,Y,Z,Z,Z");
        return $this->remove_emoji(str_replace($search, $replace, $texto));
    }

    private function remove_emoji(string $string): string
    {
        return preg_replace('%\xF0[\x90-\xBF][\x80-\xBF]{2}      # planes 1-3
             | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
             | \xF4[\x80-\x8F][\x80-\xBF]{2}%x', '  ', $string);
    }

    private function cpm($tx): string
    {
        if (strlen($tx) > 99) {
            die("Tamanho máximo deve ser 99, inválido: $tx possui " . strlen($tx) . " caracteres.");
        }
        return $this->c2(strlen($tx));
    }

    private function c2($input): string
    {
        return str_pad($input, 2, "0", STR_PAD_LEFT);

    }

    private function crcChecksum($str): string
    {
        function charCodeAt($str, $i): int
        {
            return ord(substr($str, $i, 1));
        }

        $crc = 0xFFFF;
        $strlen = strlen($str);
        for ($c = 0; $c < $strlen; $c++) {
            $crc ^= charCodeAt($str, $c) << 8;
            for ($i = 0; $i < 8; $i++) {
                if ($crc & 0x8000) {
                    $crc = ($crc << 1) ^ 0x1021;
                } else {
                    $crc = $crc << 1;
                }
            }
        }
        $hex = $crc & 0xFFFF;
        $hex = dechex($hex);
        $hex = strtoupper($hex);
        return str_pad($hex, 4, '0', STR_PAD_LEFT);
    }
}
