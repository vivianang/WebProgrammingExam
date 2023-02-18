<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class DashboardController extends Controller
{
    public function index(){
        $news = News::all();
        return view('admin.dashboard', compact('news'));
        
    }
}
