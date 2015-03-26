<?php
$object = new Tiger;
echo "У тигров есть ... <br />";
echo "Мех: " . $object->fur . "<br />";
echo "Полосы: " . $object->stripes;
class Wildcat
{
    public $fur;
    function __construct()
    {
        $this->fur = "TRUE";
    }
    
}
class Tiger extends Wildcat
{
    public $stripes;
    function __construct() {
        parent::__construct();
        $this->stripes = "TRUE";
    }
}

?>