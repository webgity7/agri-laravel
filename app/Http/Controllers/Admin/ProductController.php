<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function index()
    {
        $products = DB::table('product as p')
            ->select('p.id', 'p.name', 'p.price', 'p.availability', 'c.name as category_name', 'sc.name as subcategory_name')
            ->leftJoin('category as c', 'p.category_id', '=', 'c.id')
            ->leftJoin('subcategory as sc', 'p.subcategory_id', '=', 'sc.id')
            ->where('deleted', '!=', 'Yes')
            ->get()
            ->toArray();
        return view('admin.product',compact('products'));
    }
}
