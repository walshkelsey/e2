<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'move' => 'varchar(10)',
            'compMove' => 'varchar(10)',
            'result' => 'varchar(4)',
            'time' => 'timestamp'
        ]);
    }

    public function seed()
    {# Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

    # Use a loop to create 10 past rounds
     for ($i = 0; $i < 10; $i++) {

        $move = ['rock', 'paper', 'scissors'];
        $randomMove = array_rand($move);
    # Set up a round
    $round = [
        'move' => $move[$randomMove],
        'compMove' => $move[$randomMove],
        'result' => rand(0,2),
        'time' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
    ];

    # Insert the round
    $this->app->db()->insert('rounds', $round);
}}
}