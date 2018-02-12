<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Restaurant;

class DashboardController  extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getIndex()
    {
        return view('admin.dashboard.index');
    }
    public function Resdisplay()
    {
        $user = Auth::User();
        $userId = $user->id;
        $res = Restaurant::all()->where('usr_id', '=', $userId)->toArray();
        return view('admin.dashboard.index', compact('res'));
    }
}
