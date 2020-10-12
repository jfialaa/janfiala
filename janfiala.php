<?php
declare (strict_types = 1);
namespace Fiala;
final class UserFiala {
    /** Vrátí zvuk
     * @author Jan Fiala
     * @param string $zvuk
     * @return string
     */
    public function reproduktor(string $zvuk): string {
        $reproduktor_zvuk = $this->ts->reproduktor($zvuk);
        /**
         * komentar
         * nebo viceradkovy
         */
        return $reproduktor_zvuk;
    }
    private $username = 'Jan';
    private $password = '1234';
    protected $firstName = 'Jan';
    protected $lastName = 'Fiala';
    protected $phone = 123456789;
    public $street = 'Cukrovarská';
    public $zip = 19600; // psc
    public $invoiceId = 19600; // ico
    public $loginCount = 0;
    public $bornDate = 2002;
    public function __construct() {
    }
    /**
     * komentar
     * @param string $username
     */
    function setUsernameFiala(string $username) {
        $this->username = $username;
    }
    /**
     * komentar
     * @param string $password
     */
    function setPasswordFiala(string $password) {
        $this->password = $password;
    }
    /**
     * komentar
     * @return string
     */
    function getStreetFiala(): string {
        return $this->street;
    }
    /**
     * komentar
     * @return int
     */
    function getZipFiala(): int {
        return $this->zip;
    }
    /**
     * komentar
     * @return int
     */
    function getInvoiceIdFiala(): int {
        return $this->invoiceId;
    }
    /**
     * komentar
     * @return int
     */
    function getLoginCountFiala(): int {
        return $this->loginCount;
    }
    /**
     * komentar
     * @return int
     */
    function getBornDateFiala(): int {
        return $this->bornDate;
    }
}
$Jan = new UserFiala;
$Jan->setUsernameFiala("Jan");
echo $Jan->getStreetFiala();
echo $Jan->getZipFiala();
echo $Jan->getInvoiceIdFiala();
echo $Jan->getLoginCountFiala();
echo $Jan->getBornDateFiala();

echo var_dump($Jan);