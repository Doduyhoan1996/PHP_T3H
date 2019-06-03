<?php
class BasePhone {
    public $name;
    public $model;
    public $manufature;

    public function __construct($name,$model,$manufature)
    {
        $this->name =$name;
        $this->model=$model;
        $this->manufature=$manufature;
    }
    /**
     * gửi tin nhắn sms
     * @param $phone
     */
    public function sendSms($phone){
        echo "<br>" .__METHOD__." ".$phone;
    }

    /**
     * nhận tin nhắn sms
     * @param $phone
     */
    public function receiveSms($phone){
        echo "<br>" . __METHOD__ . " " . $phone;

    }

    /**
     * gọi điện
     * @param $phone
     */

    public function callNumber($phone) {
        echo "<br>" . __METHOD__ . " " . $phone;
    }

    /**
     * nhận cuộc gọi
     * @param $phone
     */

    public function receiveNumber($phone){
        echo "<br>" . __METHOD__ . " " . $phone;
    }

}

/**
 * class Smartphone kế thừa từ class BasePhone
 * extends == kế thừa từ 1 class cha
 * khi 1 class kế thừa từ 1 class cha
 * class con sẽ tự động có tất cả các thuộc tính và phương thức public hay protected của class cha
 * Class Smartphone
 */

class Smarthphone extends BasePhone {
    public function __construct($name, $model, $manufacture)
    {
        // gọi đến hàm khởi tạo của class cha
        parent::__construct($name, $model, $manufacture);
    }
    public function sendEmail($address_email) {
        echo "<br>" . __METHOD__ . " " . $address_email;
    }
    public function facebook($account) {
        echo "<br>" . __METHOD__ . " " . $account;
    }
    public function playGame($game_name) {
        echo "<br>" . __METHOD__ . " " . $game_name;
    }
}

$iphone7Plus =new Smarthphone('iphone 7 Plus','7 Plus','iphone');
$iphone7Plus->callNumber('0918207170');
$iphone7Plus->playGame('PUBGM');

echo "<pre>";
print_r($iphone7Plus);
echo "</pre>";

