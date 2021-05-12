<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodotti = Product::all();

        return Inertia::render('Prodotti/Index', [
            'prodotti' => $prodotti
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Prodotti/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $prodotti)
    {
        $data = $request->validate([
            'nome' => 'required|max:40',
            'ingredienti' => 'required'
        ]);

        $prodotti->fill($data);
        $prodotti->save();

        return redirect()->route('prodotti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $prodotti)
    {
        $data = [
            'prodotti' => $prodotti
        ];
        return Inertia::render('Prodotti/Show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $prodotti)
    {
        return Inertia::render('Prodotti/Edit', [
            'prodotti' => $prodotti
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $prodotti)
    {
        $request->validate([
            'nome' => 'required|max:40',
            'ingredienti' => 'required'
            ]);

        $prodotti->update([
            'nome' => $request->nome,
            'ingredienti' => $request->ingredienti
        ]);

        $prodotti->save();

        return redirect()->route('prodotti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $prodotti)
    {
        $prodotti->delete();
        return redirect()->route('prodotti.index');
    }
}
