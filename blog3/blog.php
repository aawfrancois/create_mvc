<?php
session_start();
include_once("blog_template.php");
include_once("blog_function.php");

while ($donnees = showArticles()->fetch()){

    echo "</br>";
    echo '
    <div class="card">
        <div class="card-header">';
    echo "$donnees[title] ";
    echo '</div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>';
    echo "$donnees[description]";
    echo '</p><footer class="blockquote-footer">';
    echo "$donnees[creation_date]";
    echo '<cite title="Source Title"></cite></footer>
            </blockquote>
        </div>
    </div>
    ';
}
?>