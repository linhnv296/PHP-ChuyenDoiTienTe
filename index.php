<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $arr =["1"=>"USD","23000"=>"VND","1.1428"=>"EU","106.38"=>"JPY","2500"=>"NDT"];
    if ($_SERVER["REQUEST_METHOD"]=="GET"){
        $input = $_GET["input"];
        $output = $_GET["output"];
        $selectinput = $_GET["selectinput"];
        $selectoutput = $_GET["selectoutput"];
        if($input ==""||$input=="e"){
             $result = "";
        }else{
             $result = ($input*$selectoutput)/$selectinput;
        }
    }
?>
<form action="" method="get">
    <input type="number" name="input">
    <select name="selectinput" id="">
        <option value="1">USD</option>
        <option value="23000">VND</option>
        <option value="1.1428">EU</option>
        <option value="106.38">JPY</option>
        <option value="2500">NDT</option>
    </select>
    <select name="selectoutput" id="">
        <option value="1">USD</option>
        <option value="23000">VND</option>
        <option value="1.1428">EU</option>
        <option value="106.38">JPY</option>
        <option value="2500">NDT</option>
    </select>
    <?php echo $input ." ".$arr[$selectinput]." = ".$result." ".$arr[$selectoutput];?>
    <br>
    <input type="submit" value="Quy doi">
</form>
</body>
</html>
