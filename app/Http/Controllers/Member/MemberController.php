<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function showDashboard(Request $request)
    {
        $currentPage = 'dashboard';
        $user = Auth::user();
        return view('user.dashboard', compact('currentPage', 'user'));
    }
}

