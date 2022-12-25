<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <h1>Class Segitiga</h1>

<?php
class __Segitiga{
    public $alas;
    public $tinggi;
    
    

    public function Luas(){
        $luas=($this->alas*$this->tinggi)/2;
        return "luas :" .$luas;
    }


    public function setTinggi ($tinggi){
        return $this->tinggi=$tinggi;
    }

    public function setAlas ($alas){
        return $this->alas=$alas;
    }


}

$LuasSegitiga=new __Segitiga();
echo "Diketahui sebuah Segitiga berukuran: ";
echo "<br>";
echo "Alas :" .$LuasSegitiga -> setAlas(5);
echo "<br>";
echo "Tinggi :" .$LuasSegitiga-> setTinggi(10);
echo "<br>";
echo "<br>";
echo "Maka Luasnya Adalah: ";
echo "<br>";
echo $LuasSegitiga -> Luas();
echo "<br>";


?>
    
</body>
</html>


