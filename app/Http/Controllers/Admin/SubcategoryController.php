<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public static function index()
    {
    $subcategories = DB::table('subcategory as s')
            ->leftJoin('category as c', 's.category_id', '=', 'c.id')
            ->select('s.id', 's.name', 's.order', 's.status', 'c.name as category_name')
            ->groupBy('s.id', 's.name', 's.order', 's.status')
            ->get()
            ->toArray();
        return view('admin.subcategory',compact('subcategories'));
    }

    public static function add(){
        return view('admin.add_subcategory');       
    }


}
