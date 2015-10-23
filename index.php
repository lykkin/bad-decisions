<?php include_once("header.php") ?>
<?php
    $entry_indices = glob('entry/**/index.php');
    foreach ($entry_indices as $entry_index) {
        $entry_path = implode('/', array_slice(explode('/', $entry_index), 0, -1));
        $entry_title = $entry_path . "/title.html";
        echo '<a href="' . $entry_path . '">';
        include_once($entry_title);
        echo '</a>';
    }
?>
<?php include_once("footer.php") ?>
