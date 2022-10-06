<?php
class No2{
    public $name;
    public $id_machine;
    public $type;

    public function __construct($name, $id_machine, $type = "Automatic")
    {
        $this->name = $name;
        $this->id_machine = $id_machine;
        $this->type = $type;
    }
}
$obj = new No2('vario' , 1245);
echo 'Nama: ' . $obj->name  . "<br>";
echo 'ID Mesin: ' . $obj->id_machine . "<br>";
echo 'Type Motor: ' . $obj->type;
echo '<hr>';
$obj1 = new No2('CB 250' , 3421);
echo 'Nama: ' . $obj1->name . '<br>';
echo 'ID Mesin: ' . $obj1->id_machine . '<br>';
echo 'Type Motor: ' . $obj1->type = 'Sport';
/* Output:
Nama: Andrew
ID Mesin: 1245
Type Motor: Automatic
Nama: CB 250
ID Mesin: 3421
Type Motor: Sport 
*/