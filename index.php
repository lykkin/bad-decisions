<?php include_once("header.php") ?>
<?php
    $entry_paths = glob('entry/*', GLOB_ONLYDIR);
    echo '<ul>';
    foreach ($entry_paths as $entry_path) {
        $entry_title = $entry_path . "/title.html";
        echo '<a href="' . $entry_path . '">';
        echo '<li>';
        include_once($entry_title);
        echo '</li>';
        echo '</a>';
    }
    echo '</ul>';
?>
<?php include_once("footer.php") ?>
