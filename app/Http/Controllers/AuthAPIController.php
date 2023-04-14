<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;

class AuthAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return response()->json($user, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(LoginRequest $request)
    {
        $request->authenticate();
        
        $user = Auth::User();

        $token = $user->createToken("tinyCore");

        $returnData = [
            "user"  => $user,
            "token" => $token
        ];

        return response()->json($returnData, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
