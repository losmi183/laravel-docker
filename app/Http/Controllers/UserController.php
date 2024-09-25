<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        // User::factory()->count(20)->create();

        return User::find(1);
    }
}
