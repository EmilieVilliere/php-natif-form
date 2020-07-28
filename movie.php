<?php 

require "Model.php";


if(isset($_POST["m_title"])) {

    $data = array(
        $_POST["m_title"],
        $_POST["m_category"],
        $_POST["m_duree"],
        $_POST["m_real"],
        $_POST["m_actors"],
        $_POST["m_year"],
        $_POST["m_studio"],
        $_POST["m_grade"],
        $_POST["m_image"]
    );
    
    // var_dump($data);
    // // die();

    setMovie($data);            
}

$movies = getMovies();

require "viewHome.php";