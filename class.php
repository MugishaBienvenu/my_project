
<!-- <?php
class calculation{
    public $b;
    public $d;
    function multiply(){
   $this->b=2;
   $this->d=5;
   echo $this->b*$this->d;

    }
}
$s=new calculation();
echo $s->multiply();
?> -->
<?php
class family{

    public $name;
    public $member;
    function set_name($name){

   $this->name=$name;
    }
   function get_name($member){
    return $this->name;
   }
}
$member1=new family();
$member2=new family();

$member1 -> set_name('mugisha');
$member2-> set_name('mukamugisha');

echo $member1->get_name($member1);
echo "<br>";
echo $member2->get_name($member2);
?>