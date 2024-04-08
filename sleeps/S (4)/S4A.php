<?php
class emp{
    private $eid;
    private $ename;
    private $dep;
    private $salary;
    function __construct($ei,$en,$de,$sa){
        $this->eid = $ei;
        $this->ename = $en;
        $this->dep = $de;
        $this->salary = $sa;
    }

}
class mang extends emp{
    private $bonus = 10;
    private $salary = 1000;
    public function total(){
        return $this->salary+$this->bonus;
    }
}
$cal = new mang(1,'s','f',10000);
echo $cal->total();
?>