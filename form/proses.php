<?php

//HANDLING POST DATA
if(isset($_POST['bilangan1']) && isset($_POST['bilangan2'])){
    $bil1 = $_POST['bilangan1'];
    $bil2 = $_POST['bilangan2'];
    echo 'Hasil Perkalian '. $bil1 . ' x '. $bil2 . ' = '. ($bil1*$bil2);
}

//HANDLING GET DATA
if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    echo 'Hasil pencarian dengan kata kunci : '. $keyword;
}

//HANDLING MULTIPLE INPUT DATA
if(isset($_POST['nama'])&& isset($_POST['dari'])){
    echo 'Nama : '. $_POST['nama']. '<br/>';
    $dari = $_POST['dari'];
    // var_dump($dari);
    echo 'Kenal MDP dari : ';
    // menggunakan foreach untuk menampilkan data array
    foreach($dari as $value){
        echo '<li>'.$value . '</li>';
    }
}