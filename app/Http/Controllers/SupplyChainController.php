<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendors;
use App\Rfq;

class SupplyChainController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vendor()
    {
        //

        $vendors = Vendors::all();    

        return(view('vendor.index')->with('vendors',$vendors));

        // return(view('invoice')->with('produks',$produks)->with('carts',$carts)->with('count',$count));
    }

     //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vendorcreate()
    {
        //

        // $produks = Produk::all();        

        // $carts = DB::table('carts')
        // ->select('produks.nama_produk','produks.id as produk_id','carts.id','carts.jumlah','carts.harga','total','produks.gambar')
        // ->join('produks', 'carts.produk_id', '=', 'produks.id')
        // ->orderBy('carts.created_at', 'desc')
        // ->take(4)
        // ->get();    

        // $count = DB::table('carts')->count();

        return(view('vendor.create'));

        // return(view('invoice')->with('produks',$produks)->with('carts',$carts)->with('count',$count));
    }

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rfq()
    {
        //
        $rfq = Rfq::all();      
        
        return(view('rfq.index')->with('rfq',$rfq));

        // return(view('invoice')->with('produks',$produks)->with('carts',$carts)->with('count',$count));
    }



     //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchase()
    {
        //

        // $produks = Produk::all();        

        // $carts = DB::table('carts')
        // ->select('produks.nama_produk','produks.id as produk_id','carts.id','carts.jumlah','carts.harga','total','produks.gambar')
        // ->join('produks', 'carts.produk_id', '=', 'produks.id')
        // ->orderBy('carts.created_at', 'desc')
        // ->take(4)
        // ->get();    

        // $count = DB::table('carts')->count();

        return(view('purchase.index'));

        // return(view('invoice')->with('produks',$produks)->with('carts',$carts)->with('count',$count));
    }
     
}
