<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class CustomerController extends Controller
{
    public static function index()
    {
        $customers=DB::table('customers as  c')
                        ->select(
                            'c.id',
                            DB::raw("CONCAT(c.firstname, ' ', c.lastname) AS fullname"),
                            'c.email',
                            'c.telephone',
                            'c.status',
                            DB::raw("COUNT(o.id) AS total_orders")
                        )
                        ->leftJoin('orders as o', 'o.customer_id', '=', 'c.id')
                        ->groupBy('c.id', 'c.firstname', 'c.lastname', 'c.email', 'c.telephone', 'c.status')
                        ->get()
                        ->toArray();
        return view('admin.customer',compact('customers'));
    }
}
