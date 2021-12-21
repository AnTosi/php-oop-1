<?php

function dd(...$params)
{
    foreach($params as $param) {
        #code...
        echo '<pre>';
        var_dump($param);
        echo'</pre>';
    }
    die();
}


class Movie
{
    public $title;
    public $release_year;
    public $director;
    public $producer;

    function __construct($title, $release_year, $director, $producer)
    {
        $this->title = $title;
        $this->release_year = $release_year;
        $this->director = $director;
        $this->producer = $producer;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getRelease_year()
    {
        return $this->release_year;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getProducer()
    {
        return $this->producer;
    }

    public function getVote()
    {
        return $this->vote;
    }

    public function setVote(Float $vote)
    {
        $this->vote = $vote;
    }


}

$movie_1 = new Movie('It', 2017, 'Andy Muschietti', 'Warner Bros');
$movie_2 = new Movie('Dune: Part One', 2021, 'Denis Villeneuve', 'Legendary Pictures');
$movie_3 = new Movie('Blade Runner 2049', 2017, 'Denis Villeneuve', 'Columbia Pictures');

$movie_2->setVote(9.5);
$movie_3->setVote(10.0);

dd($movie_1, $movie_2, $movie_3);