<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function check(Request $request)
    {

        echo 'De gevens zijn opglagen in "/storage/app/users.txt"';
        Storage::disk('local')->put('users.txt', 'Username: ' . $request->input('uname') . ' Password: ' . $request->input('psw'));



    }
}
