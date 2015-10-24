<?php
    $categories = glob('categories/*');
    if (count($categories) > 0) {
        echo "<h1>Categories</h1>";
        echo "<div>";
        echo '<ul>';
        foreach($categories as $category) {
            echo '<a href="/category/' . array_pop(explode('/', $category)) . '">';
            echo '<li>';
            include_once($category . '/title.html');
            echo '</li>';
            echo '</a>';
        }
        echo '</ul>';
        echo "</div>";
    }
?>
