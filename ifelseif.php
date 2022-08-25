<?php
/*sebuah sistem penilaian 
90-100=>sangat memuaskan
75-89=>memuaskan
65-74=>Baik
50-64=>cukup
<50=>kurang*/
    $nilai=80;
    if($nilai>=90){
        $ket="Sangat Memuaskan";
    }else if($nilai>=75){
        $ket="Memuaskan";
    }else if($nilai>=65){
        $ket="Baik";
    }else if($nilai>=50){
        $ket="Cukup";
    }else{
        $ket="Kurang";
    }
    echo "$ket";
?>