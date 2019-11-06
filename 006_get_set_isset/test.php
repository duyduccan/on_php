<?php
/**
 * phương thức __get() và set() giúp ta khai báo các giá trị thích hợp cho các thuộc tính không dc khai báo của 1 class
 *
 */
class Test{
    protected $members = array();
    public function __get($arg){
        if(array_key_exists($arg, $this->members)){
            return($this->members[$arg]);
        }else{
            return("No such luck!\n");
        }
    }
    public function __set($key, $var){
        $this->members[$key] = $var;
    }
    public function __isset($arg)
    {
        return(isset($this->members[$arg]));
    }
}
$x = new Test();
print $x->speed_limit;
$x->speed_limit = "65 MPH\n";
if (isset($x->speed_limit)) {
    printf("Speed limit is set to %s\n", $x->speed_limit);
}
$x->speed_limit = NULL;
if (empty($x->speed_limit)) {
    print "The method __isset() was called.\n";
} else {
    print "The __isset() method wasn't called.\n";
}