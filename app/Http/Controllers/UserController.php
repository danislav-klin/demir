<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function create(CreateUserRequest $request):RedirectResponse
    {
        $validated = $request->validated();
        $validated = $request->safe()->all();

        $validated = new User();

        $validated->name = $request->name_person;
        $validated->email = $request->email;
        $validated->telephon = $request->phone;
        $validated->pasport = $request->pasport;
        $validated->login = $request->login;
        $validated->password = Hash::make($request->password);

        Auth::login($validated, $remember = true);

        $validated->save();

        return redirect('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function show(Request $req) {

        $auto = $req;

        return view('profile.profile', compact('auto'));

    }

    public function enterUser(Request $request) {
        $credentials = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'login' => 'Ошибка ввода логина',
        ])->onlyInput('login');
    }

    public function addAutotoRental(Request $req) 
    {
        $req->validate([
            'brand_name' => 'required',
            'run_auto' => 'required',
            'price_auto' => 'required',
            'days' => 'required',
            'total_price' => 'required'
        ]);

        $rental = new Rental;

        $rental->brand_name = $req->brand_name;
        $rental->run = $req->run_auto;
        $rental->price = $req->price_auto;
        $rental->days = $req->days;
        $rental->user_id = Auth::user()->id;
        $rental->total_price = $req->total_price;

        $rental->save();

        return redirect('/');

    }


}
