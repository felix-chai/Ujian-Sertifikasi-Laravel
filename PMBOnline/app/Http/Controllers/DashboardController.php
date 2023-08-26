<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Assuming you have the user's data available after login
        $user = Auth::user(); // Get the authenticated user
        
        return view('dashboard', compact('user'));
    }
}