<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Socialite;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
class SocialController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function loginWithGoogle()
    {
        try {
    
            $user = Socialite::driver('google')->stateless()->user();
            $existingUser = User::where('google_id', $user->id)->first();
     
            if ($existingUser) {
                Auth::login($existingUser);
                return redirect('/home');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);
    
                Auth::login($createUser);
                return redirect('/home');
            }
    
        } catch (\Throwable $th) {
          throw $th;
       }
    }
}