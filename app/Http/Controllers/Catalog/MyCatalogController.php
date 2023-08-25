<?php

namespace App\Http\Controllers\Catalog;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MyCatalogController extends Controller
{
    public function index() 
    {
        echo 'Our products';
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
