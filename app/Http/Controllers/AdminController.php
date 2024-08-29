<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login() {
        return view('admin.admin-login');

    }
    public function register() {
        return view('admin.admin-register');
    }
    public function admin() {

        $rentals = Rental::all();

        $users = User::get();
        
        return view('admin.admin', ['rentals' => $rentals, 'users' => $users]);
    }

    public function enter(Request $req): RedirectResponse {
        // dump($req);
        $credentials = $req->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect()->route('show.admin');
        }

        return back()->withErrors([
            'login' => 'Ошибка ввода логина',
        ])->onlyInput('login');

    }

    public function create(Request $req): RedirectResponse {
        $req->validate([
            'name' => 'required',
            'job' => 'required',
            'login' => 'required',
            'password' => 'required'
        ]);

        $admin = new Admin;

        $admin->fio = $req->name;
        $admin->job = $req->job;
        $admin->login = $req->login;
        $admin->password = Hash::make($req->password);

        $admin->save();

        return redirect()->route('show.admin');


    }

    public function update(Request $req)
    {
        dump($req);
    }


}
