<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Admin;
class AdminController extends Controller
{
    public function index(): View
    {
        $data['title'] = "Admin | Login";
        return view('admin.index', $data);
    }


public function verify(Request $request)
{
    // Laravel Form Validation
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    $password = $request->input('password');
    $username = $request->input('username');

    // Check if admin exists
    $admin = Admin::userExists($username);
    if (!$admin) {
        // Redirect back with custom error message
        return redirect()->back()->withErrors([
            'username' => 'The username you entered does not exist.',
        ])->withInput();
    }
    // password checking
    $valid_password=Hash::check($password,$admin['password']);
    if($valid_password){
        session(['auth' => 'Yes', 'username' => $admin['username'],'password'=>$admin['password']]);
        return redirect('admin/dashboard');
    }else{
        return redirect()->back()->withErrors(['password'=>'Invalid password !'])->withInput();
    }








}



}


