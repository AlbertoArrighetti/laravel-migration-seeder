<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();

        $today = Date::today();

        return view('home', compact('trains', 'today'));
    }
}
