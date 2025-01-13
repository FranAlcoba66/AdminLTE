<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user = null)
    {
        $this->user = $user;
    }

    public function index(Request $request): View
    {
        $search = $request->get('search');
        $users = $this->user->getUsersWithRoles($search);

        return view('users', compact('users'));
    }
}
