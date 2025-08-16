<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterUserRequest $request): RedirectResponse
    {



        $data = $request->validated();
        if ($request->hasFile('tezis') && $request->file('tezis')->isValid()) {
            // Faylni saqlash va storage ichidagi yo'lni olish
            $path = $request->file('tezis')->store('tezis_files', 'public');

            $data['tezis'] = $path;
        }



        $data['password'] = Hash::make($data['password']);
        $data['hotel'] = $request->boolean('hotel');
        $data['tour'] = $request->boolean('tour');


        $user = User::create($data);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
