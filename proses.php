<?php
    $a1=$_POST['angka1'];
    $a2=$_POST['angka2'];
    $hasil=$a1+$a2;
    print ("Hasil penjumlahan $a1 dengan $a2=".($a1+$a2)."<br>");
    print ("Hasil penjumlahan $a1 dengan $a2=$hasil<hr>");
    $hasil=$a1*$a2;
    echo "Hasil Perkalian $a1 dengan $a2=".($a1*$a2)."<br>";
    echo "Hasil Perkalian $a1 dengan $a2=$hasil<hr>";
    $hasil=$a1-$a2;
    print("Hasil pengurangan $a1 dengan $a2=".($a1-$a2)."<br>");
    print("Hasil pengurangan $a1 dengan $a2=$hasil<br>");
    
?>