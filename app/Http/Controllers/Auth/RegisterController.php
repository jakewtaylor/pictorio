<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {
    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct () {
        $this->middleware('guest');
    }

    protected function validator (array $data) {
        return Validator::make($data, [
            'username' => 'required|string|max:60',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create (array $data) {
        return User::create([
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
