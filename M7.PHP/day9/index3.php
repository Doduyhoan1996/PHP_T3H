<?php
class ClassicPhone{
    /**
     * Gọi điện
     */
    public function callVoice() {
        echo "<br>" . __METHOD__;
    }
    /**
     * Nhận cuộc gọi
     */
    public function receiveVoice() {
        echo "<br>" . __METHOD__;
    }
}

/*
 * Khai baos trait
 * Trait ipod
 */
trait Ipod{
    public function listenMusic(){
        echo "<br>" . __METHOD__;
    }
}

trait Radio {
    public function listenRadio() {
        echo "<br>" . __METHOD__;
    }
}
trait Computer{
    public function sendEmail(){
        echo "<br>" . __METHOD__;
    }
    public function playGame(){
        echo "<br>" . __METHOD__;
    }
    public function wordOffice(){
        echo "<br>" . __METHOD__;
    }
}

class smartPhone extends ClassicPhone{

    /**
     * Nhúng trait vào trong class
     * để sử dụng đa kế thừa
     */
    use Ipod,Radio,Computer;
}

/**
 * Khởi tạo đối tượng smartphone
 */
$samsung = new smartPhone();
$samsung->callVoice();
$samsung->receiveVoice();
$samsung->playGame();
$samsung->listenMusic();
$samsung->listenRadio();
$samsung->sendEmail();

