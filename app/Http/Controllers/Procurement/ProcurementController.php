<?php

namespace App\Http\Controllers\Procurement;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProcurementController extends Controller
{
    public function index() 
    {
        return Inertia::render('Offers');
    }

    public function show()
    {
        return Inertia::render('OfferDetails');
    }
}
