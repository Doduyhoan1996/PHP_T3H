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

}

$t= new Test();

echo "<br>" . $t->a;
// truy cập vào thuộc tính có giới hạn truy cập là protected
// Cannot access protected property

echo "<br>" . $t->b;
