<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Productos;
use Illuminate\Support\Facades\View;

class ProductosController extends Controller
{
    public function index()
    {
        return view('productos');
    }

    public function getData()
    {
        $prod = Productos::select(['id', 'name', 'code', 'price']);
        $array = Datatables::of($prod)
        ->addColumn('action', function($p){
            return view('partials/buttons',['id' => $p->id]);
        })
        ->make(true);
        return $array;
    }

    public function show($id){
        return Productos::where('id',$id)->get();
    }
}
