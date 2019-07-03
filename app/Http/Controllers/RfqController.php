<?php

namespace App\Http\Controllers;

use App\Rfq;
use App\Product;
use App\Vendors;
use Illuminate\Http\Request;

class RfqController extends Controller
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
        $vendors = Vendors::all();     
        $produk = Product::all();    

        
        

        return(view('rfq.create')->with('vendors',$vendors)->with('produk',$produk));
        
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
        $s = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvyxyz',5)),0,5);
        $awal = 'INV';
        $nomoriv = $awal.$s.date('dmYHis');

        $rfq =  new Rfq;
        $rfq -> vendor = $request -> vendors;
        $rfq -> scheduledate = $request -> orderdate;
        $rfq -> qty = $request -> qty;
        
        
        $rfq -> save();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rfq  $rfq
     * @return \Illuminate\Http\Response
     */
    public function show(Rfq $rfq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rfq  $rfq
     * @return \Illuminate\Http\Response
     */
    public function edit(Rfq $rfq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rfq  $rfq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rfq $rfq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rfq  $rfq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rfq $rfq)
    {
        //
    }
}
