<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\ProdutoTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('produtos.form', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:product,name'
        ]);
        $body = $request->all();
        $produto = new Produto;
        var_dump(json_encode($body));
        $produto = Produto::create($body);
        $produto->save();

        $bodyTag = $request->input('tags');
        $bodyProduto = $produto->id;

        foreach ($bodyTag as $key) {
            $produtoTag = new ProdutoTag;
            $produtoTag->tag_id = (int) $key;
            $produtoTag->product_id = $bodyProduto;
            $produtoTag->save();
        }
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.form', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $request->validate([
            'name' => 'required'
        ]);
        $input = $request->all();
        $produto->fill($input)->save();

        $bodyTag = $request->input('tags');
        $bodyProduto = $produto->id;

        foreach ($bodyTag as $key) {
            $produtoTag = new ProdutoTag;
            $produtoTag->tag_id = (int) $key;
            $produtoTag->product_id = $bodyProduto;
            $produtoTag->save();

            return redirect('/produtos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect('/produtos');
    }
}
