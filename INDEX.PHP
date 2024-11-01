<?php
    // echo "<h1>hello world</h1>";
    // $nama="lesta dwi adifta";
    // $kelas="Xpplg1"; 
    // $absen="21"; 
    // echo "nama = $nama "," <br> kelas = $kelas "," <br> absen = $absen <br> saya sedang belajar php";
    
    // echo'nama : ';
    // echo'eko kurniawan';
    // echo "\n";

    // echo"nama : ";
    // echo"eko\t kurniawan\t khannedy\n";
    

    // echo <<<EKO
    // ini adalah contoh string  yang sangat panjang,dan juga gak perlu ngetik enter secara manual,"bisa qoute" juga
    // EKO;

    // echo"decimal : ";
    // var_dump(1234);
    // echo"octal : ";
    // var_dump(0123);
    // echo "hexadecimal";
    // var_dump(0x1A);
    // echo "binary : ";
    // var_dump(0b111111111);
    // echo "underscore di number : ";
    // var_dump(1_234_567);

    // method array
    // array_unique untuk mengambil array yang unik 
    // _reverse untuk membalik array 
    // shuffley untuk mengacak array
    // count untuk menghitung jumlah array
    // start untuk mengurutkan huruf atau angka
    // $counter = 100;
    // do {
    //     echo"Hello While Loop : " . $counter;
    //     $counter ++; 
    // }While ($counter < 10);

    // $nilai = "b";
    // switch ($nilai) {
    //     case "a":
    //         echo"anda lulus  dengan sangat baik";
    //         break;
    //     case "b":
    //     case"c":                                                     
    //         echo "anda lulus ";
    //         break;
    //     case "0":
    //         echo "anda tidak lulus";
    //         break;
    //     default:
    //         echo "mungkin anda salah jurusan";
    // }


    // // function return
    // function menghitung(int $frist , int $last)
    //  {
    //     $z = $frist + $last;
    //     return $z;
    // }
    // echo"hasil dari penjumlahan".menghitung("20","20");

    // soal
//    function umur($usia){
//     if ($usia <=0)  {
//         echo"kamu belum lahir";
//     }elseif($usia <=12){
//         echo"kamu adalah anak";
//     } elseif ($usia <= 19){
//         echo "kamu adalah remaja";
//     }else {
//     echo "kamu adalah dewasa";
//    }
// }
// umur(-10);

// function discond($belanja){
//     if ($belanja > 100){
//         $total = $belanja - ($belanja*1/10);
//         echo"total belanja anda : $" . $belanja . "anda mendapatkan discond 10% jadi;<br>
//         yang harus di bayar sebesar : $" . $belanja . " - $" . ($belanja*1/10) ." = $" . $total;
//     }elseif ($belanja <= 100){
//         echo "total belanja anda : " . $belanja;
//     }else{
//         echo "masukan total uang belanja dengan benar";
//     }
// }
// discond(1000);









function discond($belanja){
    if($belanja >"100"){
        $discond = $belanja * 0.1;
        $total = $belanja - $discond;
        echo"total belanja anda adalah" . $belanja . "anda mendapatkan discond 10% <br>
        maka yang harus di bayar adalah :" . $belanja . " - $" .$discond . "$" . $total;
            }elseif($belanja <= "100"){
                echo"total belanja anda adalah : $belanja";
            }else{
                echo "masukan total belanja yang benar";
            }
    };

discond(200);


















?>