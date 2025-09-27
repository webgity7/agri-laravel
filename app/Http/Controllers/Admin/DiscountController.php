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
                      ->select(
                        'd.id',
                        'd.name',
                         DB::raw("DATE_FORMAT(d.valid_form, '%d-%m-%Y') as valid_form "),
                         DB::raw("DATE_FORMAT(d.valid_to, '%d-%m-%Y') as valid_to "),
                        'd.amount',
                        'd.status',
                        'd.type'
                        )
                      ->get()
                      ->toArray();
        // var_dump($discounts);
        return view('admin.discount',compact('discounts'));
    }
}
