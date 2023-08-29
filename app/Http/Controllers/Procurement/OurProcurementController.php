<?php

namespace App\Http\Controllers\Procurement;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Inertia\Inertia;

class OurProcurementController extends Controller
{
    public function index() 
    {
        return Inertia::render('OurOffers');
    }

    public function create() 
    {
        echo 'Create procurement form';
    }

    public function store() 
    {
        echo 'procurement created';
    }
}
