 <?php
 $instance = new Fiala;
class Fiala {
    public $audi1 = 10; 
    public $audi2 = 3;
    public $audi3 = 50;
    public $audi4 = 11;
    public $audi5 = 29 ;
    protected $audi6 = 26;
    protected $audi7 = 31; 
    protected $audi8 = 36;
    private $audi9 = 189;
    private $audi10 = 65;

    public function getaudi1 () {
       return $this-> audi1;
    }
    public function getaudi2 () {
       return $this-> audi2;
    }
    public function getaudi3 () {
       return $this-> audi3;
    }
    public function getaudi4 () {
       return $this-> audi4;
    }
    public function getaudi5 () {
       return $this-> audi5;
    }

    private function setaudi9 () {
       return $this-> audi9; 
    }
    private function setaudi10 () {
        return $this-> audi10;
    }
    public function _construct () {

    }

} 
var_dump ($instance);
$cisla = new Fiala();
$cisla-> getaudi1('10');
echo $cisla-> getaudi1();
echo '<br>';
$cisla-> getaudi2('3');
echo $cisla-> getaudi2();
echo '<br>';
$cisla-> getaudi3('50');
echo $cisla-> getaudi3();
echo '<br>';
$cisla-> getaudi4('11');
echo $cisla-> getaudi4();
echo '<br>';
$cisla-> getaudi5('29');
echo $cisla-> getaudi5();
?>;