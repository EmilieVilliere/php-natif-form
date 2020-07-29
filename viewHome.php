<?php

$title= "Movizz - Liste";

ob_start(); 

foreach($movies as $movie) : ?>

    <div class="container">

        <h2> <?= $movie['m_title'] ?> </h2>
        <div class="mt-3">
            <p> <?= $movie['m_category'] . ' - ' . $movie['m_duree'] ?> minutes. </p>
            <span> <?= $movie['m_real'] ?> </span>

            <ul>
                <li>
                    <?= $movie['m_actors'] ?>
                </li>
            </ul>
            
            <div class="movie-img">
                <img src="<?= 'images/' . $movie['m_image'] ?>" id="movie-img">
            </div>

            <span> <?= $movie['m_studio'] ?></span>
            <span> <?= $movie['m_grade'] ?> / 5 étoiles </span>

        </div>

<?php endforeach; ?>

        <hr>
        <div id="form-movie">
            <form action="movie.php" method="post" enctype="multipart/form-data">

                <label for="m_title">Titre du film</label><br>
                <input class="form-items" type="text" name="m_title" id="m_title">
                <br>

                <label for="m_real">Réalisateur :</label><br>
                <input class="form-items" type="text" name="m_real" id="m_real">
                <br>

                <label for="m_actors">Acteurs :</label><br>
                <textarea type="text" name="m_actors" id="m_actors" class="form-items"></textarea>
                <br>

                <label for="m_category">Catégorie :</label><br>
                <select name="m_category" id="m_category" class="form-items">
                    <option value="sciencefiction">Science Fiction</option>
                    <option value="action">Action</option>
                    <option value="comedie">Comédie</option>
                    <option value="romance">Romance</option>
                    <option value="dessinanime">Dessin Animé</option>
                    <option value="thriller">Thriller</option>
                </select>
                <br>

                <label for="m_duree">Durée (en minutes) :</label><br>
                <input class="form-items" type="number" name="m_duree" id="m_duree" min="1" max="500">
                <br>

                <label for="m_year">Année de sortie :</label><br>
                <input class="form-items" type="number" name="m_year" id="m_year" min="1900" max="2020">
                <br>

                <label for="m_studio">Studio :</label><br>
                <input class="form-items" type="text" name="m_studio" id="m_studio">
                <br>

                <label for="m_grade">Note du film :</label><br>
                <select name="m_grade" id="m_grade" class="form-items">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>

                <label for="m_image">Titre de l'affiche:</label><br>
                <input class="form-items" type="file" name="m_image" id="m_image" accept="image/png, image/jpeg, text/pdf application/pdf>
                <br>

                <button type="submit" class="form-items"> go !</button>

            </form>
        </div>

    </div>

<?php 

$content = ob_get_clean(); 

require "template.php"; ?>

<!--  
    nom                                          
    catégorie (5/6 choix possibles)              
    durée (en minutes)                           
    réalisateurs (input type text)               
    acteurs principaux (input type text)         
    année de sortie (select de 1900 - 2020)      
    studio (input type text)                     
    note (input type range avec curseur 0 - 5)   
    affiche du film (facultatif - nom de l'image)
    z-actif (boolean)                            m_actif
-->
