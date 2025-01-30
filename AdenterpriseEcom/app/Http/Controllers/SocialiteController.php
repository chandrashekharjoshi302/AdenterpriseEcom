<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleAuthentication()
    {
        try {
            // Retrieve user details from Google
            $socialUser = Socialite::driver('google')->user();

            // Debugging: Check if user details are retrieved


            // Check if the user already exists in your database
            $user = User::where('auth_provider_id', $socialUser->id)->first();

            dd($user);
            if ($user) {
                // Log in the existing user
                Auth::login($user);
            } else {
                // Create a new user
                $userData = User::create([
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    'password' => Hash::make('Password@1234'), // Dummy password
                    'auth_provider_id' => $socialUser->id,
                ]);

                if ($userData) {
                    Auth::login($userData);
                }
            }

            // Redirect to the dashboard after successful login
            return redirect()->route('dashboard');
        } catch (Exception $e) {
            // Debugging: Check the exception message
            dd($e->getMessage());
        }
    }
}
