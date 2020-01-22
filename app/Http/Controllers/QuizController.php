<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function mysql()
    {
        $mysql_tasks_texts_all = DB::select('SELECT Text FROM Tasks WHERE Category = ?', ['mysql']);
        $mysql_tasks_img_paths_all = DB::select('SELECT ImgPath FROM Tasks WHERE Category = ?', ['mysql']);

        $indexes = array();

        while ( count($indexes) < 5)
        {
            $index = rand(0, 9);
            if ( in_array($index, $indexes))
                continue;
            array_push($indexes, $index);
        }

        $texts = array();
        $paths = array();

        for ( $i = 0; $i < count($indexes); $i++)
        {
            array_push($texts, $mysql_tasks_texts_all[$indexes[$i]]->Text);
            array_push($paths, $mysql_tasks_img_paths_all[$indexes[$i]]->ImgPath);
        }

        return view('mysql', ['texts' => $texts, 'paths' => $paths]);
    }

    public function sqlserver()
    {
        $sqlserver_tasks_texts_all = DB::select('SELECT Text FROM Tasks WHERE Category = ?', ['sqlserver']);
        $sqlserver_tasks_img_paths_all = DB::select('SELECT ImgPath FROM Tasks WHERE Category = ?', ['sqlserver']);

        $indexes = array();

        while ( count($indexes) < 5)
        {
            $index = rand(0, 9);
            if ( in_array($index, $indexes))
                continue;
            array_push($indexes, $index);
        }

        $texts = array();
        $paths = array();

        for ( $i = 0; $i < count($indexes); $i++)
        {
            array_push($texts, $sqlserver_tasks_texts_all[$indexes[$i]]->Text);
            array_push($paths, $sqlserver_tasks_img_paths_all[$indexes[$i]]->ImgPath);
        }

        return view('sqlserver', ['texts' => $texts, 'paths' => $paths]);
    }

    public function oracle()
    {
        $oracle_tasks_texts_all = DB::select('SELECT Text FROM Tasks WHERE Category = ?', ['oracle']);
        $oracle_tasks_img_paths_all = DB::select('SELECT ImgPath FROM Tasks WHERE Category = ?', ['oracle']);

        $indexes = array();

        while ( count($indexes) < 5)
        {
            $index = rand(0, 9);
            if ( in_array($index, $indexes))
                continue;
            array_push($indexes, $index);
        }

        $texts = array();
        $paths = array();

        for ( $i = 0; $i < count($indexes); $i++)
        {
            array_push($texts, $oracle_tasks_texts_all[$indexes[$i]]->Text);
            array_push($paths, $oracle_tasks_img_paths_all[$indexes[$i]]->ImgPath);
        }

        return view('oracle', ['texts' => $texts, 'paths' => $paths]);
    }

    public function postgresql()
    {
        $postgresql_tasks_texts_all = DB::select('SELECT Text FROM Tasks WHERE Category = ?', ['postgresql']);
        $postgresql_tasks_img_paths_all = DB::select('SELECT ImgPath FROM Tasks WHERE Category = ?', ['postgresql']);

        $indexes = array();

        while ( count($indexes) < 5)
        {
            $index = rand(0, 9);
            if ( in_array($index, $indexes))
                continue;
            array_push($indexes, $index);
        }

        $texts = array();
        $paths = array();

        for ( $i = 0; $i < count($indexes); $i++)
        {
            array_push($texts, $postgresql_tasks_texts_all[$indexes[$i]]->Text);
            array_push($paths, $postgresql_tasks_img_paths_all[$indexes[$i]]->ImgPath);
        }

        return view('postgresql', ['texts' => $texts, 'paths' => $paths]);
    }

    
}
