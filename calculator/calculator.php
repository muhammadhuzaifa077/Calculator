<?php
$result="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    function calcu()
    {
        if(isset($_POST["add"])){
            $add1=$_POST["value1"];
            $add2=$_POST["value2"];
            $sum=$_POST["answer"]=$add1+$add2;
            return $sum;
        }
        elseif(isset($_POST["sub"])){
            $sub1=$_POST["value1"];
            $sub2=$_POST["value2"];
            $sub=$_POST["answer"]=$sub1-$sub2;
            return $sub;
        }
        elseif(isset($_POST["mul"])){
            $mul1=$_POST["value1"];
            $mul2=$_POST["value2"];
            $mul=$_POST["answer"]=$mul1*$mul2;
            return $mul;
        }
        elseif(isset($_POST["div"])){
            $div1=$_POST["value1"];
            $div2=$_POST["value2"];
            $div=$_POST["answer"]=$div1/$div2;
            return $div;
        }
        elseif(isset($_POST["mod"])){
            $mod1=$_POST["value1"];
            $mod2=$_POST["value2"];
            $mod=$_POST["answer"]=$mod1%$mod2;
            return $mod;
        }
        elseif(isset($_POST["abs"])){
            $abs1=$_POST["value1"];
            $abs2=$_POST["value2"];
            $abs=$_POST["answer"]=$abs1 .$abs2;
            return abs($abs);
        }
        elseif(isset($_POST["sqrt"])){
            $sqr1=$_POST["value1"];
            $sqr2=$_POST["value2"];
            $square=$_POST["answer"]=$sqr1 .$sqr2;
            return sqrt($square);
        }
        elseif(isset($_POST["sqrt"])){
            $sqr1=$_POST["value1"];
            $sqr2=$_POST["value2"];
            $square=$_POST["answer"]=$sqr1 .$sqr2;
            return sqrt($square);
        }
    }

    $result=calcu();
}    
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <center><h1>Calculator.</h1></center>

    <div class="container" style="border:2px solid darkgray; padding:10px;">
        <form action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"]));?>" method="POST">
            <div class="form-group">
                <input type="text" name="value1" class="form-control">
                <br>
                <input type="text" name="value2" class="form-control">
                <br>
                <input type="submit" name="add" value="+" class="btn btn-success">
                <input type="submit" name="sub" value="-" class="btn btn-success">
                <input type="submit" name="mul" value="*" class="btn btn-success">
                <input type="submit" name="div" value="/" class="btn btn-success">
                <input type="submit" name="mod" value="%" class="btn btn-success">
                <input type="submit" name="abs" value="absolute" class="btn btn-success">
                <input type="submit" name="sqrt" value="sqrt" class="btn btn-success">
                <br>
                <br>
                Result : <input type="text" name="answer" value="<?php echo($result)?>" class="form-control">
            </div>
        </form>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>