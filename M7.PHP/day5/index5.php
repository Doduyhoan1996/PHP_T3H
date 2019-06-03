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

class Test1 extends Test {
    public function truycapvao_public_cha(){
        echo "<br>" . __METHOD__ . " " . $this->a;
    }
    public function truycapvao_protected_cha(){
        // chỉ Có thể truy cập vào thuộc tính hoặc phương thức có giới hạn là protected
        // từ các class kế thừa của class cha
        // không thể truy cập từ bên ngoài class cha hoặc class kế thừa từ class cha
        echo "<br>" . __METHOD__ . " " . $this->b;
    }
    public function truycapvao_private_cha(){
       // echo "<br>" . __METHOD__ . " " . $this->c;
    }

}
$t =new  Test1();
$t->truycapvao_public_cha();
$t->truycapvao_protected_cha();
$t->truycapvao_private_cha();
