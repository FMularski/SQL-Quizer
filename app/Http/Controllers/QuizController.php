<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
        $mysql_tasks_ids_all = DB::select('SELECT Id FROM Tasks WHERE Category = ?', ['mysql']);
        $mysql_tasks_answers_all = DB::select('SELECT Answer FROM Tasks WHERE Category = ?', ['mysql']);

        $indexes = array();

        while ( count($indexes) < 5)
        {
            $index = rand(0, 9);
            if ( in_array($index, $indexes))
                continue;
            array_push($indexes, $index);
        }

        $ids = array();
        $texts = array();
        $paths = array();
        $correct = array();

        for ( $i = 0; $i < count($indexes); $i++)
        {
            array_push($ids, $mysql_tasks_ids_all[$indexes[$i]]->Id);
            array_push($texts, $mysql_tasks_texts_all[$indexes[$i]]->Text);
            array_push($paths, $mysql_tasks_img_paths_all[$indexes[$i]]->ImgPath);
            array_push($correct, $mysql_tasks_answers_all[$indexes[$i]]->Answer);
        }

        return view('mysql', ['ids' => $ids, 'texts' => $texts, 'paths' => $paths, 'correct' => $correct]);
    }

    public function check(Request $request)
    {
        $answers = [
                    $request->input('answer1'),
                    $request->input('answer2'),
                    $request->input('answer3'),
                    $request->input('answer4'),
                    $request->input('answer5')
        ];

        $corrects = [
            $request->input('correct_1'),
            $request->input('correct_2'),
            $request->input('correct_3'),
            $request->input('correct_4'),
            $request->input('correct_5')
        ];

        $points = 0;
        $correct_flags = [0, 0, 0, 0, 0];

        for ( $i = 0; $i < 5; $i++)
        {
            if ( strcmp( strtolower(trim($answers[$i])), strtolower(trim($corrects[$i]))) == 0)
            {
                $points++;
                $correct_flags[$i] = 1;
            } 
        }

        return view('results', ['answers' => $answers, 'corrects' => $corrects, 'flags' => $correct_flags]);
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
