<?php

namespace App\Http\Controllers;


class QuizController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function mysql()
    {
        return view('mysql');
    }

    public function sqlserver()
    {
        return view('sqlserver');
    }

    public function oracle()
    {
        return view('oracle');
    }

    public function postgresql()
    {
        return view('postgresql');
    }
}
