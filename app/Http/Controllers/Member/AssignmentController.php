<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    public function showPenugasan(Request $request)
    {
        $currentPage = 'penugasan';
        $user = Auth::user();
        return view('user.penugasan', compact('currentPage','user'));
    }
}
