<?php
$array=array(0,5,8);
foreach( $array as $val){
    printf( "値は、%dです。\n",$val);
    if( $val > 5 ){
        print "5より大きいです\n";
    } else {
        print "5以下です\n";
    }
}
//値は、0です。
//5以下です
//値は、5です。
//5以下です
//値は、8です。
//5より大きいです
