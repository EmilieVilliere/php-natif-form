<?php 

require "Model.php";

if(!empty($_POST)) {
    
    if(empty($_FILES['m_image'])) {

        $hasImage = "0";
        
    } else {

        $bdd = getBdd();

        $hasImage = "1";
        $lastId = $bdd->query('SELECT MAX(id) FROM t_movies');
        $lastId = $lastId->fetch();
        $lastId = $lastId[0] + 1;
        $image_name ="image-" . $lastId . ".jpg";

        move_uploaded_file($_FILES['m_image']['tmp_name'], "images/" . $image_name);
    }
    
}

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
        $image_name,
        $hasImage
    );
    
    // var_dump($data);
    // // die();

    setMovie($data);            
}

$movies = getMovies();

require "viewHome.php";