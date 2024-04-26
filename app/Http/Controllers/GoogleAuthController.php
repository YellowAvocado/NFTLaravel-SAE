<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
          $googleUser = Socialite::driver('google')->user();

          $user = User::where('google_id', $googleUser->getId())->first();

          if (!$user) {

              $new_user = User::create([
                  'name' => $googleUser->getName(),
                  'email' => $googleUser->getEmail(),
                  'google_id' => $googleUser->getId(),
              ]);

              Auth::login($new_user);

              return redirect()->intended('dashboard');

          }
          else {
              Auth::login($user);

              return redirect()->intended('dashboard');
          }
        } catch (\Throwable $th) {
            dd("Something went wrong!" . $th->getMessage());
        }
    }
}
