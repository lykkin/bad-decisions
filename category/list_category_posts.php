<?php
    $posts = glob('*', GLOB_ONLYDIR);
    if (count($posts) > 0) {
        echo "<div>";
        echo '<ul>';
        foreach($posts as $post) {
            echo '<a href="/entry/' . $post . '">';
            echo '<li>';
            include_once($post . '/title.html');
            echo '</li>';
            echo '</a>';
        }
        echo '</ul>';
        echo "</div>";
    }
?>
