<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        switch ($name) {
            case 'fin':
                # code...
                break;
            case 'tech':
                # code...
                break;
            case 'fintech':
                # code...
                break;
            case 'fin':
                # code...
                break;    
            default:
                # code...
                break;
        }
        return view('tables.index');
    }

     public function show($name,$year)
    {
        switch ($name) {
            case 'fin':
                # code...
                break;
            case 'tech':
                # code...
                break;
            case 'fintech':
                # code...
                break;
            case 'fin':
                # code...
                break;    
            default:
                # code...
                break;
        }
        return view('tables.show');
    }

}
