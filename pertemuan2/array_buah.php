<?php
    $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu", "Apel"];
    //Menampilkan buah index ke 1
    echo $ar_buah[1]; 
    //Menampilkan jumlah buah
    echo "<br/>Jumlah buah " . count($ar_buah);
    //Menampilkan seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>". $buah ."</li>";
    } echo "</ol>";

    //Menambahkan buah
    $ar_buah[] = "Rambutan";

    //Mengubah index ke 2 menjadi manggis
    $ar_buah[1] = "Manggis";

    //Menampilkan seluruh buah dengan index nya
    echo "<ul>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li>Buah index - " .$buah ." adalah ". $v . "</li>";
    } 
    echo "</ul>";

    echo "<ul>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li>Buah index - " .$buah ." adalah ". $v . "</li>";
    }
    echo "</ul>"; 
?>