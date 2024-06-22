<?php

namespace App\Http\Controllers;

use App\Book;
use App\IssuedBooks;
use App\RenewRequest;
use App\RequestedBooks;
use App\ReservedRequest;
use App\User;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }
}
