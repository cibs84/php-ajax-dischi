<?php
    require __DIR__ . '/database.php';

    // header('Content-Type: application/json');
    // echo json_encode($database);

    // echo $_GET['genre'];

    if ($_GET['genre'] === 'all' || empty($_GET['genre'])) {
        header('Content-Type: application/json');
        echo json_encode($database);
    } else {

        $filteredArray = [];

        foreach ($database as $album) {
            if ($_GET['genre'] === $album['genre']) {
                $filteredArray[] = $album;
            }
        }
        
        header('Content-Type: application/json');
        echo json_encode($filteredArray);
    }
    
?>