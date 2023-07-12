<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function showProfile()
    {
        $currentPage = 'edit-profile';
        
        return view('user.profile', compact('currentPage'));
    }
    
    public function showDashboard()
    {
        $currentPage = 'dashboard';
        
        return view('user.dashboard', compact('currentPage'));
    }
    
    public function showPenugasan()
    {
        $currentPage = 'penugasan';
        
        return view('user.penugasan', compact('currentPage'));
    }
    
    public function showBukuPanduan()
    {
        $currentPage = 'buku-panduan';
        
        return view('user.panduan', compact('currentPage'));
    }
    
    public function showPengenalanUKM()
    {
        $currentPage = 'pengenalan-ukm';
        
        return view('user.ukm', compact('currentPage'));
    }
    
    public function showSertifikat()
    {
        $currentPage = 'sertifikat';
        
        return view('user.sertifikat', compact('currentPage'));
    }
}
