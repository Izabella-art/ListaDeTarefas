<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::anything()->get();
        return $users;
    }
    public function test(Request $request)
    {


           DB::transaction(function() {
                User::create([
                    'name' => 'ricardo',
                    'email' => 'ricardo@gmail.com',
                    'votes' => '1',
                    'password' => 'Senac@123',
                ]);

                Post::create([
                    'title' => 'Post 10',
                    'description' => 'Laravel post',
                    'is_publish' => 0,
                ]);

            });

            return 'success';

    }
}
