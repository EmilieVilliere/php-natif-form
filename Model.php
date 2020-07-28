<?php

function getBdd() {

    $bdd = new PDO('mysql:host=localhost;dbname=movies;charset=utf8', 'root', '');
    return $bdd;

}

function getMovies() {

    $bdd = getBdd();

    $movies = $bdd->query('SELECT * FROM t_movies');
    return $movies; 

}

function setMovie($data) {

    $bdd = getBdd();

    $req = $bdd->prepare("INSERT INTO t_movies (m_title, m_category, m_duree, m_real, m_actors, m_year, m_studio, m_grade, m_image, m_actif) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $req->execute($data);

}