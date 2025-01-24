<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Role;

class UserController extends Controller
{
    private $user;
    private $userService;

    public function __construct(
        User $user,
        UserService $userService
    ) {
        $this->user = $user;
        $this->userService = $userService;
    }

    public function index(Request $request): View
    {
        $search = $request->get('search');
        $users = $this->user->getUsersWithRoles($search);
        $roles = Role::all();

        return view('users', compact('users', 'roles'));
    }

    public function editUser(Request $request)
    {
        $this->userService->editUser($request);
    }
}
