 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Fiala_Jan{

    protected $napeti_Fiala_Jan;
    //nastavení napeti
    public function setNapeti_Fiala_Jan($napeti_Fiala_Jan){
        $this->napeti_Fiala_Jan = $napeti_Fiala_Jan;
    }
    //precteni napeti
    public function getNapeti_Fiala_Jan() {
        return $this-> napeti_Fiala_Jan;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Fiala_Jan extends ustredny_Fiala_Jan{
   public $Napeti_Fiala_Jan= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
interface iustredna_Fiala_Jan extends ustredny_Fiala_Jan{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Fiala_Jan);
}

//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Fiala_Jan::TYPE);
 var_dump ($Napeti_Fiala_Jan);
?>