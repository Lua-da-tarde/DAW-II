<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media HTML</title>
    <style>
        #reprovado{
            color: red;
        }

        #dependencia{
            color: orange;
        }

        #aprovado{
            color: green;
        }
    </style>
</head>
<body>
<?php

$media = 2.0;

if($media >= 6.0){
    echo "<span id='aprovado'>Aprovado!</span>";
} else if(($media > 3.0) && ($media < 6.0)){
    echo "<span id='dependencia'>Dependencia!</span>";
} else{
    echo "<span id='reprovado'>Reprovado!</span>";
}

?>
</body>
</html>