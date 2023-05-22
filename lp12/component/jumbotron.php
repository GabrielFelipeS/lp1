<?php 

/**
 * Cria um jumbotron fluido.
 * 
 * @param array associativo | dados do jumbotron 
 * (['titulo' => string, 'subtitulo' => string])
 * @return string | código HTML
 */
function jumbotron_fluido($data){
    $html = '
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-4">'.$data['titulo'].'</h2>
            <p class="lead">'.$data['subtitulo'].'.</p>
        </div>
    </div>';
    return $html;
}