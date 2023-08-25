<?php

namespace App\Http\Controllers\Catalog;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CatalogController extends Controller
{
    public function index() 
    {
        return Inertia::render('Catalog');
    }
}
