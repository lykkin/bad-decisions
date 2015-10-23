<?php
    $categories = glob('categories/*');
    if (count($categories) > 0) {
        echo "<h1>Categories</h1>";
        echo "<div>";
        foreach($categories as $category) {
            echo '<a href="/category/' . array_pop(explode('/', $category)) . '">';
            include_once($category . '/title.html');
            echo '</a>';
        }
        echo "</div>";
    }
?>
