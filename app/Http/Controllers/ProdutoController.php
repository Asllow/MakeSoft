<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('products');

        if ($request->filled('search')) {
            $query->where('nome_produto', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('subcategoria')) {
            $query->where('subcategoria', $request->subcategoria);
        }

        if ($request->filled('min_price')) {
            $query->where('preco_produto', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('preco_produto', '<=', $request->max_price);
        }

        // Se o usuário escolher uma ordenação, aplica; caso contrário, embaralha os produtos
        if ($request->filled('sort')) {
            if ($request->sort == 'nome') {
                $query->orderBy('nome_produto');
            } elseif ($request->sort == 'preco') {
                $query->orderBy('preco_produto');
            } else {
                $query->orderBy('created_at', 'desc');
            }
        } else {
            $query->inRandomOrder(); // <- ordem aleatória
        }

        $subcategorias = DB::table('products')->select('subcategoria')->distinct()->pluck('subcategoria');
        $produtos = $query->get();

        // Corrigir links do Dropbox para exibição direta de imagem
        foreach ($produtos as $produto) {
            if (isset($produto->img_produto)) {
                $produto->img_produto = str_replace('?dl=0', '?raw=1', $produto->img_produto);
                if (str_contains($produto->img_produto, 'www.dropbox.com')) {
                    $produto->img_produto = str_replace('www.dropbox.com', 'dl.dropboxusercontent.com', $produto->img_produto);
                    $produto->img_produto = str_replace('?raw=1', '', $produto->img_produto);
                }
            }
        }

        return view('makesoft.catalogo', compact('produtos', 'subcategorias'));
    }

    public function show($id)
    {
        $produto = DB::table('products')->where('id_produto', $id)->first();
        if (!$produto) abort(404);

        $imagens = DB::table('product_images')
            ->where('produto_id', $produto->id_produto)
            ->pluck('imagem_url');

        $imagensCorrigidas = $imagens->map(function ($imagem_url) {
            $imagem_url = str_replace('?dl=0', '', $imagem_url);
            if (str_contains($imagem_url, 'www.dropbox.com')) {
                return str_replace('www.dropbox.com', 'dl.dropboxusercontent.com', $imagem_url);
            }
            return $imagem_url;
        });

        return view('makesoft.produto', compact('produto', 'imagensCorrigidas'));
    }
}
