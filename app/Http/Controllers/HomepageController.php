<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $contestants = Contestant::all();
        return view('homepage', [
            'contestants' => $contestants
        ]);
    }
}
