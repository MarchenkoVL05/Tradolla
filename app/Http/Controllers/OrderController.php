<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function index() 
    {
        return Inertia::render('Orders');
    }

    public function show()
    {
        return Inertia::render('OrderDetails');
    }

    public function create() 
    {
        return Inertia::render('RespondToPosting');
    }
}
