<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $theme;

    public function __construct()
    {
        $this->theme = 'backend';
    }

    public function index()
    {
        return view($this->theme.'.dashboard');
    }
}
