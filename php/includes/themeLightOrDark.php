<?php
    $themeClass = 'dark-theme';
    if(isset($_GET['theme']) && $_GET['theme'] === 'light') {
        $themeClass = 'light-theme';
    }
?>