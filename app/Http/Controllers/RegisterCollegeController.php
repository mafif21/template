<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Models\RegisterCollege;

class RegisterCollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provincies = Province::all();
        $regencies = Regency::all();
        return view('user.registercollege.index', compact('provincies', 'regencies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
}
