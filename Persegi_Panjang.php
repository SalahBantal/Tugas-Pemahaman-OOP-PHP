<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>
    <h1>Class Persegi Panjang</h1>

<?php
class __persegipanjang{
    public $panjang;
    public $lebar;

    public function Luas(){
        $luas=$this->panjang*$this->lebar;
        return "luas :" .$luas;
    }

    public function Keliling (){
        $keliling=2*($this->panjang+$this->lebar);
        return "keliling :" .$keliling;
    }

    public function setLebar ($lebar){
        return $this->lebar=$lebar;
    }

    public function setPanjang ($panjang){
        return $this->panjang=$panjang;
    }


}

$LuasPersegi=new __persegipanjang();
echo "Diketahui sebuah persegi panjang berukuran: ";
echo "<br>";
echo "Panjang :" .$LuasPersegi -> setPanjang(50);
echo "<br>";
echo "Lebar :" .$LuasPersegi-> setLebar (25);
echo "<br>";
echo "<br>";

echo "Maka: ";
echo "<br>";
echo $LuasPersegi -> Luas();
echo "<br>";
echo $LuasPersegi -> Keliling();

?>
    
</body>
</html>


