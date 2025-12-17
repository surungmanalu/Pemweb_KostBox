<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deposit;

class AdminController extends Controller
{
    public function index()
    {
        $deposits = Deposit::latest()->get();
        return view('admin.dashboard', compact('deposits'));
    }
}
