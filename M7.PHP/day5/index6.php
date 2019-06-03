<?php
class Test{
    /**
     * Những thuộc tính được khai báo giới hạn truy cập là public
     * thì có thể truy cập ở mọi nơi
     * @var int
     */
    public $a=9;
    protected $b=7;
    private $c= 6;

    public function getC(){
        echo "<br>".__METHOD__." " .$this->c;
    }

}

$t= new Test();
$t->getC();
