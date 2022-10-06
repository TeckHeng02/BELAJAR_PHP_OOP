<?php

class Human
{
   
    public $name;
    public $umur;
    public $jurusan;
    public $active;
}


$obj = new Human();
$obj->name = "arief";
$obj->umur = 16;
$obj->jurusan ="rpl";
$obj->active ="true";


echo "Nama: " . $obj->name . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "jurusan:". $obj->jurusan . "<br>";
echo "active:". $obj->active;