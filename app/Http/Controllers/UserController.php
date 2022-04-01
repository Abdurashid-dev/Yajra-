<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index()
    {
//        $users = DataTables::of(User::query())->make(true);
        return view('welcome');
    }

    /**
     * @throws Exception
     */
    public function getUsers()
    {
       return DataTables::of(User::query())
           ->rawColumns(['action', 'actions'])
           ->make(true);
    }
}
