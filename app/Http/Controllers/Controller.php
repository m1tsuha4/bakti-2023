<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showProfile()
    {
        $currentPage = 'edit-profile';

        return view('user.profile', compact('currentPage'));
    }

//    public function showDashboard()
//    {
//        $currentPage = 'dashboard';
//
//        return view('user.dashboard', compact('currentPage'));
//    }

//    public function showPenugasan()
//    {
//        $currentPage = 'penugasan';
//
//        return view('user.penugasan', compact('currentPage'));
//    }

    public function showBukuPanduan(Request $request)
    {
        $currentPage = 'buku-panduan';
        $user = Auth::user();
        return view('user.panduan', compact('currentPage','user'));
    }

    public function showPengenalanUKM(Request $request)
    {
        $currentPage = 'pengenalan-ukm';
        $user = Auth::user();
        return view('user.ukm', compact('currentPage','user'));
    }

    public function showSertifikat(Request $request)
    {
        $currentPage = 'sertifikat';
        $user = Auth::user();
        return view('user.sertifikat', compact('currentPage','user'));
    }

    
}
