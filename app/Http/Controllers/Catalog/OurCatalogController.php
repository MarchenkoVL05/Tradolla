<?php

namespace App\Http\Controllers\Catalog;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Inertia\Inertia;

class OurCatalogController extends Controller
{
    public function index() 
    {
        return Inertia::render('OurProducts');
    }

    public function create() 
    {
        echo 'Create product form';
    }

    public function store() 
    {
        echo 'product created';
    }
}
