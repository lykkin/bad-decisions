<?php
    $posts = glob('*', GLOB_ONLYDIR);
    if (count($posts) > 0) {
        echo "<h1>Category posts</h1>";
        echo "<div>";
        foreach($posts as $post) {
            echo '<a href="/entry/' . $post . '">';
            include_once($post . '/title.html');
            echo '</a>';
        }
        echo "</div>";
    }
?>
