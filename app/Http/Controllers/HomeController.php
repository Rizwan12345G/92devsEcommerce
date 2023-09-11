<?php

namespace App\Http\Controllers;

use App\Models\Product;
use auth;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function redirect()
    {
        if (auth()->check()) {
            if (auth()->user()->usertype == 1) {
                return view('Admin.index');
            } else {
                // dd('here');
                return view('dashboard');
            }
        } else {
            return '/'; // Default path when user is not authenticated
        }
    }
    public function index()
    {
        $products=Product::all();
        return view('Frontend.index',compact('products'));
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
