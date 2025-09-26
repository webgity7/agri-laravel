<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public static function index()
    {
        $discounts=Db::table('discount as d')
                      ->select('d.id','d.name','d.valid_form','d.valid_to','d.amount','d.status')
                      ->toSql();
        var_dump($discounts);
        exit;


        return view('admin.discount',compact('discounts'));
    }
}
