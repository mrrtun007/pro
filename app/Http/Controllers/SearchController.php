<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    function search(Request $request){
    
        if (isset($_GET['query'])) {
            
            $search_text = $_GET['query'];
            $products = DB::table('products')->where('storename','LINK','%'. $search_text.'%')->paginate(5);
            return view('products.index',['products'=>$products]);
    }else{
        return view('products.index');
    }
    }
}
