<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        height: 90px;
        width: 90px;
        border: 1px solid red;
    }
</style>

<body>
    <table>
        <?php
        // function num($x)
        // {
        //     $y = 3;
        //     $z = 4;
        //     if ($x <= 10) {
        //         echo $y . " x " . $x . " = " . $x * $y . "<br>";

        //         num($x + 1);
        //     }
        // }
        // num(1);
        // num(1);
        // $a = array(1, 2, 3, 4, 5, 6);
        // $b = array(4, 1, 8, 10, 10, 16);
        // for ($i = 0; $i < 5; $i++) {
        //     echo $a[$i] + $b[$i] . "<br>";
        // }
        // $a = array("kinza", "khushboo", "dua", "fatima");


        // echo "<pre>";

        // var_dump($a);
        // echo "</pre>";


        $a = array(
            array(
                "name" => "khushboo",
                "Student Id" => "1",
                "course" => "php"

            ),
            array(
                "name" => "dua",
                "Student Id" => "2",
                "course" => "html"

            ),
            array(
                "name" => "kinza",
                "Student Id" => "3",
                "course" => "css"

            ),
            array(
                "name" => "sumaima",
                "Student Id" => "4",
                "course" => "php"

            )
        );

     
        // for ($i = 0; $i < 3; $i++) {
        //     echo "<tr>";
        //     print_r($a);
        //     for ($col = 0; $col < 2; $col++) {
        //         echo "<td>" . $i . "</td>";
        //     }
        //     echo "</tr>";
        // }

        ?>
    </table>
</body>

</html>