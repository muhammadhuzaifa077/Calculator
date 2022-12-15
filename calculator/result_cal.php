<?php
$result="";

if(isset($_POST)){
    function calcu()
    {
        if(isset($_POST["add"])){
            $add1=$_POST["value1"];
            $add2=$_POST["value2"];
            $sum=$add1+$add2;
            return $sum;
        }
        elseif(isset($_POST["sub"])){
            $sub1=$_POST["value1"];
            $sub2=$_POST["value2"];
            $sub=$sub1-$sub2;
            return $sub;
        }
        elseif(isset($_POST["mul"])){
            $mul1=$_POST["value1"];
            $mul2=$_POST["value2"];
            $mul=$mul1*$mul2;
            return $mul;
        }
        elseif(isset($_POST["div"])){
            $div1=$_POST["value1"];
            $div2=$_POST["value2"];
            $div=$div1/$div2;
            return $div;
        }
        elseif(isset($_POST["mod"])){
            $mod1=$_POST["value1"];
            $mod2=$_POST["value2"];
            $mod=$mod1%$mod2;
            return $mod;
        }
        elseif(isset($_POST["abs"])){
            $abs1=$_POST["value1"];
            $abs2=$_POST["value2"];
            $abs=$abs1 .$abs2;
            return abs($abs);
        }
        elseif(isset($_POST["sqrt"])){
            $sqr1=$_POST["value1"];
            $sqr2=$_POST["value2"];
            $square=$sqr1 .$sqr2;
            return sqrt($square);
        }
        elseif(isset($_POST["sqrt"])){
            $sqr1=$_POST["value1"];
            $sqr2=$_POST["value2"];
            $square=$sqr1 .$sqr2;
            return sqrt($square);
        }
    }

    $result=calcu();
}    
?>

<h1>Result.</h1>
<?php echo("Result of your calcutlation = $result" );?>