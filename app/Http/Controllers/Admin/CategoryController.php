<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public static function index()
    {

        $categories = DB::table('category as c')
            ->leftJoin('subcategory as sc', 'sc.category_id', '=', 'c.id')
            ->select('c.id', 'c.name', 'c.order', 'c.status', DB::raw('COUNT(sc.id) as subcategory_count'))
            ->groupBy('c.id', 'c.name', 'c.order', 'c.status')
            ->get();
        return view('admin.category', compact('categories'));
    }

    public static function add(){
        return view('admin.add_category');
    }
}
