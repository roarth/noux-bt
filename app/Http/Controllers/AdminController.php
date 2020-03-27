<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $contestants = Contestant::all();
        return view('admin', [
            'contestants' => $contestants
        ]);
    }
}
