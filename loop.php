<?php

//=========Menggunakan for panjangfor($x=1;$x<=10;$x++){
    // for($x=1;$x<=7;$x++){
    // if($x==1){
    //     echo $x."a";
    //         continue;
    //     }elseif($x==2){
    //         echo $x."b";
    //         continue;
    //     }elseif($x==3){
    //         echo $x."a";
    //         continue;
    //     }elseif($x==4){
    //         echo $x."b";
    //         continue;
    //     }
    //     echo $x."  ";
    // }
    
    // //nomer1
    //for panjang
    // for($x=1;$x<=10;$x++){
    //     if($x==4){
    //         continue;
    //     }elseif($x==5){
    //         continue;
    //     }elseif($x==6){
    //         continue;
    //     }elseif($x==7){
    //         continue;
    //     }
    //     echo $x."  ";
    // }


// echo $x." ";
// echo PHP_EOL;
// //=======NOMOR 1=======
// //=========Menggunakan for pendek
function satu(){
for($x=1;$x<=10;$x++){
    if($x==4 || $x==5 || $x==6 || $x==7){
        echo "";
        continue;
    }
    echo $x."  ";
}
}
satu();
echo PHP_EOL;
//========NOMOR 2=======
//=========Menggunakan for pendek
function dua(){
for($x=5;$x>=1;$x--){
    if($x==2 || $x==1){
        echo "*  ";
        continue;
    }
    echo $x."  ";
}
}
dua();
echo PHP_EOL;
// // //=====NOMOR 3=====
//Menggunakan for pendek
function tiga(){
    for($x=1;$x<=4;$x++){
        if($x==1 || $x==3){
            echo $x."A  ";
        }else{
            echo $x."B  ";
        }
    }
    }
    tiga();
    echo PHP_EOL;


    //NOMOR 4==
    // function empat(){
            for($x=1;$x<=7;$x++){
                if($x>3 && $x<7){
                    echo "A";
                }else{
                    echo $x." ";
                }
            }
            echo PHP_EOL;
            
  
  
  
    //=======NOMOR 5==-===
//=========Menggunakan for pendek
function lima(){
for($x=4;$x>=0;$x--){
    if($x==0 || $x==2){
        echo "A  ";
        continue;
    }else{
    echo $x." ";
    }
}
}
lima();
echo PHP_EOL;
//=====NOMOR 6=====
//=========Menggunakan for pendek
function enam(){
    for($x=0;$x<=4;$x++){
        if($x==0 || $x==1){
            echo "A  ";
            continue;
        }
        echo $x."  ";
    }
    }
    enam();
    echo PHP_EOL;
    

//=========Menggunakan for pendek
// for($x=1;$x<=7;$x++){
//     if($x==4 || $x==5 || $x==6){
//         echo "A  ";
//         continue;
//     }
//     echo $x."  ";
// }
// for($x=1;$x<=8;$x++){
// if($x==5 ||$x==6 ||$x==7){
//     echo "a ";
//     continue;
// }
// echo $x." ";
// }



// //=========Menggunakan while pendek
// $number=0;
// while($number<=6){
//     $number++;
//     if($number==4 || $number==5 || $number==6)
//     {
//         echo "A  ";
//         continue;
//     }
//     echo $number."  ";
// }



// //==========Menggunakan While Panjang
// $number=0;
// while($number<=6){
//     $number++;
//     if($number==4){
//       echo "A  ";
//       continue;
//     }
//     if($number==5){
//         echo "A  ";
//         continue;
//     }
//     if($number==6){
//         echo "A  ";
//         continue;
//     }
//     echo $number."  ";
// }


// //Menggunakan Do While panjang
// $number=0;
// do{
//     $number++;
//     if($number==4){
//        echo "A  ";
//        continue;
//     }
//     if($number==5){
//         echo "A  ";
//         continue;
//     }
//     if($number==6){
//         echo "A  ";
//         continue;
//     }
//     echo $number."  ";
// }while($number<=6);


// //========Menggunakan do while pendek
// function whilepanjang(){
// $number=0;
// do{
//     $number++;
//     if($number==4 || $number==5 || $number==6)
//     {
//         echo "A  ";
//         continue;
//     }
//     echo $number."  ";
// }while($number<=6);
// }
// whilepanjang();




// //=========Menggunakan for panjang else if
// function whilependek(){
// for($x=1;$x<=7;$x++){
//     if($x==4){
//         echo "A  ";
//         continue;
//     }elseif($x==5){
//         echo "A  ";
//         continue;
//     }elseif($x==6){
//         echo "A  ";
//         continue;
//     }else
//     {
//         echo $x."  ";
//     }
// }
// }
// whilependek();








// // for($x=1;$x<=10;$++){
// //     if($x=4 || $x=5 || $x=6 || $x=7){
// //         echo ." ";
// //     }
// // }







?>