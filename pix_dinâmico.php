<?php
include "phpqrcode/qrlib.php";
include "funcoes_pix.php";

@$pagina = $_GET['b'];

$servername = "localhost";
$username = "u683874167_XGGN0";
$password = "^ejYM@;sB0|";
$dbname = "u683874167_VZXgk";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão " . $conn->connect_error);
}

$sql = "SELECT * FROM products where id_produto = $pagina";
$result = $conn->query($sql);
$conn->close();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $preco = $row['preco_produto'];
    $px[00]="01";
    $px[26][00]="BR.GOV.BCB.PIX"; //Indica arranjo específico; “00” (GUI) obrigatório e valor fixo: br.gov.bcb.pix
    $px[26][01]="53471409000152"; // CNPJ somente numeros.
    $px[52]="0000"; //Merchant Category Code “0000” ou MCC ISO18245
    $px[53]="986"; //Moeda, “986” = BRL: real brasileiro - ISO4217
    $px[54]="$preco"; //Valor da transação, se comentado o cliente especifica o valor da transação no próprio app. Utilizar o . como separador decimal. Máximo: 13 caracteres.
    $px[58]="BR"; //“BR” – Código de país ISO3166-1 alpha 2
    $px[59]="MAKESOFT SOLUTIONS"; //Nome do beneficiário/recebedor. Máximo: 25 caracteres.
    $px[60]="DIVINOPOLIS"; //Nome cidade onde é efetuada a transação. Máximo 15 caracteres.
    $px[62][05]="***"; //Identificador de transação, quando gerado automaticamente usar ***. Limite 25 caracteres. Vide nota abaixo.
    $pix=montaPix($px);
    $pix.="6304";
    $pix.=crcChecksum($pix);

    ob_start();
    QRCode::png($pix, null,'M',5);
    $imageString = base64_encode( ob_get_contents() );
    ob_end_clean();

    echo "
    <div class='container'>
        <div class='pix-item'>
            <img src='data:image/png;base64,$imageString' alt='PIX'>
            <h5>R$$preco</h5>
            <p style='width:100vh;'>$pix</p>
        </div>
    </div>";
}