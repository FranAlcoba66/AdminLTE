<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    private $role;

    public function __construct(Role $role = null)
    {
        $this->role = $role;
    }

    public function addRole(Request $request): View
    {
        dd( $request);
        $search = $request->get('search');
        $users = $this->user->getUsersWithRoles($search);

        return view('users', compact('users'));
    }
}
