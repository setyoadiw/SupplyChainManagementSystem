<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Image;
use File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        

        $produk =  new Product;
        $produk -> name = $request -> name;
        $produk -> harga = $request -> price;
        $produk -> qty = $request -> qty;

        if ($request->hasFile('photo')) {
			// Mengambil file yang diupload
			$uploaded_cover = $request->file('photo');
			// Mengambil extension file
			$extension = $uploaded_cover->getClientOriginalExtension();
			// Membuat nama file random dengan extension
            $filename = md5(time()) . "." . $extension;
            $filesave = 'photo/produk/'.$filename;
			// Menyimpan cover ke folder public/gambar
            // $destinationPath = storage_path() . DIRECTORY_SEPARATOR . 'storage'. DIRECTORY_SEPARATOR . 'users';
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'photo'. DIRECTORY_SEPARATOR . 'produk';
            
			$uploaded_cover->move($destinationPath, $filename);
			// Mengisi field gambar di artikel dengan filename yang baru dibuat
			$produk->photo = $filesave;
            $produk->save();
		    }
        $produk -> save();

        return redirect()->route('rfq');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
