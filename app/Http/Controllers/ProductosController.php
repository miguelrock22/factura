<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Productos;

class ProductosController extends Controller
{
    public function index()
    {
        return view('productos');
    }
}
