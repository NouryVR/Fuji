<?php

namespace App\Http\Controllers\Perms;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function __construct()
    {
        //$this->middleware("permission:manage-roles-permissions");
    }

    public function index() {
        return Role::all();
    }
}
