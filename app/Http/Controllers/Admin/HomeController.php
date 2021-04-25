<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','role:admin']);
    }
    public function index()
    {
        return view('admin.dashboard');
    }
}
