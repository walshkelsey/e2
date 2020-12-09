<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {
        $outcome = $this->app->old('outcome');

        return $this->app->view('index', [
            'outcome' => $outcome
        ]);
    }
    
    public function history()
    {
        return $this->app->view('history', [
        ]);
    }

    public function round()
    {
        return $this->app->view('round', [
        ]);
    }

    public function play()
    {
        $move = $this->app->input('move');

        #Save results to database

        $moves = ['rock', 'paper', 'scissors'];
        $compMove = $moves[rand(0,2)];


        if ($move =='rock' and $compMove=='paper') {
            $result ='Computer wins :(';
        } elseif ($move =='rock' and $compMove=='scissors') {
            $result ='You win!';
        } elseif ($move =='rock' and $compMove=='rock') {
            $result = "It's a tie!";
        } elseif ($move =='paper' and $compMove=='rock') {
            $result ='You win!';
        } elseif ($move =='paper' and $compMove=='scissors') {
            $result = 'Computer wins :(';
        } elseif ($move =='paper' and $compMove='paper') {
            $result = "It's a tie!";
        } elseif ($move =='scissors' and $compMove=='paper') {
            $result ='You win!';
        } elseif ($move =='scissors' and $compMove=='rock') {
            $result = 'Computer wins :(';
        } else {
            $result ="It's a tie!";
        }

        $data = [
            'move' => $move,
            'compMove' => $compMove,
            'result' => $result,
            'time' => date('Y-m-d H:i:s'),
        ];

        $this->app->db()->insert('rounds', $data);

       #Redirect user to homepage
        $this->app->redirect('/', [
            'outcome' => [
                'move' => $move,
                'compMove' => $compMove,
                'result' => $result,
            ]
        ]);
    }
}