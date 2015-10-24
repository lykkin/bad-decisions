<?php
    $posts = glob('before_posts/*');
    if (count($posts) > 0) {
        echo "<h1>Predecessor posts</h1>";
        echo "<div>";
        echo '<ul>';
        foreach($posts as $post) {
            echo '<a href="/entry/' . array_pop(explode('/', $post)) . '">';
            echo '<li>';
            include_once($post . '/title.html');
            echo '</li>';
            echo '</a>';
        }
        echo '</ul>';
        echo "</div>";
    }
?>
