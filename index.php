<?php

include "model/PersegiPanjang.php";
include 'helper/PersegiPanjang.php';


// Create objects
$persegiPanjang = new \BaliDwipa\Model\PersegiPanjang(100, 40);
$persegiPanjang->luas();


// // // create helper objects
$persegiPanjangHelper = new \Helper\PersegiPanjang();
// echo $persegiPanjangHelper->info();

