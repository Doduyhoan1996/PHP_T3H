<?php
class Hinhtron{
    public static $r;
    public static function daBankinhr($r){
        /**
         * Khi mà truy cập vào thuộc tính hay phương thức không có từ khoá static
         * thì ta dùng $this->tenthuoctinh va $this->tenphuongthuc
         * Khi mà truy cập vào thuộc tính hay phương thức có từ khoá static
         * thì dùng từ khoá self thay cho $this
         * và sẽ viết là self::tenphuongthuc() và self::tenthuoctinh;
         */
        self::$r =$r;
        return self::$r;
    }

    /**
     * $r là bán hình của hình tròn
     * @param $r
     */
    public static function tinhchuvi($r){
        $cv=$r*2*3.14;
        return $cv;
    }
    /**
     * $r là bán hình của hình tròn
     * @param $r
     */
    public static function tinhdientich($r){
        $s=$r*$r*3.14;
        return $s;
    }

}

/**
 * khi khởi tạo đối tượng thông thường
 * $doituong = new TenClass();
 * gọi đến thuộc tính hay phương thức của class
 * thì sẽ phải gọi qua đối tượng
 * $doituong->tenthuoctinh;
 * $doituong->tenphuongthuc();
 */
/**
 * khi class có các thuộc tính hay phương thức có từ khoá static
 * thì không cần khởi tạo đối tượng bằng từ khoá new
 * gọi đến thuộc tính statuc bằng cách
 * TenClass::TenThuocTinh;
 * gọi đến phương thức static bằng cách
 * TenClass::TenPhuongThuc();
 *
 *
 */

$bankinh=Hinhtron::daBankinhr(5);
echo "<br> Bán kính: ".$bankinh;

$chuvi=Hinhtron::tinhchuvi(5);
echo "<br> Bán kính: ".$chuvi;

$dientich=Hinhtron::tinhdientich(5);
echo "<br> Bán kính: ".$dientich;