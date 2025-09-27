<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public static function index()
    {
        $orders = DB::table('orders as o')
            ->select('o.id', 'o.total',  DB::raw("DATE_FORMAT(o.orderdate, '%d-%m-%Y') as orderdate "), DB::raw("SUBSTRING_INDEX(a.fullname, ' ', 1) AS fullname"),  DB::raw("CONCAT(a.address1, ', ', a.city, ', ', a.states) AS delivery"), 'o.status')
            ->leftJoin('address as a', 'o.shippingaddress', '=', 'a.id')
            ->orderBy('o.id', 'desc')
            ->get()
            ->toArray();
        return view('admin.order', compact('orders'));
    }
}
