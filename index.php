<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
        <?php
        
        $name = 'Eshan is a good student';
        $income = 45000;
        echo "<h3>My name is $name and I earn $income taka </h3>";

        $friends = array('eshan','simi','moyna',12,'alu',89);
        echo "$friends[1]";
        echo "<br>";
        echo "$friends[3]";
        $hasHouse = true;
        $hasCar = false;
        echo "<br>";
        echo var_dump($hasHouse);
        echo var_dump($hasCar);
        echo "<br>";
        echo strlen($name);
        echo "<br>";
        echo str_word_count($name);
        echo "<br>";
        echo strrev($name);
        echo "<br>";
        echo strpos($name,'is');

        

        $number = 99;
        if($number != 99){
            echo "Not close to hundred!!";
        }

        if($number > 50 && $number <70){
            echo "He got minimal grade with ". $number;
        }
        elseif($number >=71 && $number <90){
            echo "He got average grade with ". $number;
        }
        elseif($number >= 90){
            echo "He got nice grade with ". $number;
        }

    
        ?>
       
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>