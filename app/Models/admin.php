<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

use App\Models\Product;
use App\Models\Category;
use App\Models\Customers;
use App\Models\Discount;
use App\Models\Subcategory;


class Admin extends Model
{
    protected $table = 'admin';


    public static function userExists(string $username): ?array
    {
        $user = self::where('username', $username)->first();

        return $user ? $user->toArray() : null;
    }

    public static function dashbord(){
     return [
        'product' => Product::count(),
        'category' => Category::count(),
        'customer' => Customers::count(),
        'discount' => Discount::count(),
        'subcategory' => Subcategory::count(),
        'orders'=>orders::count()
    ];
    }



}
