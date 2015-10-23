<?php
    $posts = glob('after_posts/*');
    if (count($posts) > 0) {
        echo "<h1>Successor posts</h1>";
        echo "<div>";
        foreach($posts as $post) {
            echo '<a href="/entry/' . array_pop(explode('/', $post)) . '">';
            include_once($post . '/title.html');
            echo '</a>';
        }
        echo "</div>";
    }
?>
