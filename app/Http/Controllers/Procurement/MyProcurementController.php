<?php

namespace App\Http\Controllers\Procurement;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MyProcurementController extends Controller
{
    public function index() 
    {
        echo 'Our procurements';
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
