<?php
    $posts = glob('before_posts/*');
    if (count($posts) > 0) {
        echo "<h1>Predecessor posts</h1>";
        echo "<div>";
        foreach($posts as $post) {
            echo '<a href="/entry/' . array_pop(explode('/', $post)) . '">';
            include_once($post . '/title.html');
            echo '</a>';
        }
        echo "</div>";
    }
?>
