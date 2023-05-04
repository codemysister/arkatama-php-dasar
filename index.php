<?php


function triangelUpsetLeft($baris=5, $simbol='*'){
    for($i = 1; $i <= $baris; $i++){
        for($j = 1; $j <= $i; $j++){
            echo $simbol;
        }
        echo "<br>";
    }
}   


function triangelDownsideLeft($baris=5, $simbol='*')
{
    for($i = $baris; $i >= 1; $i--){
        for($j = 1; $j <= $i; $j++){
            echo $simbol;
        }
        echo "<br>";
    }
}


function triangelUpsetRight($baris=5, $simbol='*'){
    for($i = $baris; $i >= 1; $i--){
        for($j = 1; $j <= $baris; $j++){
           
            if($i <= $j){
                echo $simbol;
            }else{
                echo "&nbsp&nbsp";
            }
            
        }
        echo "<br>";
    }
}


function triangelDownsideRight($baris=5, $simbol='*'){

    for($i = 1; $i <= $baris; $i++){
        for($j = 1; $j <= $baris; $j++){
            if($j < $i){
                echo "&nbsp&nbsp";
            }else{
                echo $simbol;
            }
        }

        echo "<br>";
    }
}

// triangelUpsetLeft();
// echo "<br>";
// triangelDownsideLeft();
// echo "<br>";
// triangelUpsetRight();
// echo "<br>";
// triangelDownsideRight();




function pattern($namaFungsi, $baris=5, $simbol='*'){
    if($namaFungsi === 'triangelUpsetLeft'){
        triangelUpsetLeft($baris, $simbol);
    }else if($namaFungsi === 'triangelDownsideLeft'){
        triangelDownsideLeft($baris, $simbol);
    }else if($namaFungsi === 'triangelUpsetRight'){
        triangelUpsetRight($baris, $simbol);
    }else{
        triangelDownsideRight($baris, $simbol);
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Looping, Percabangan, dan Fungsi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <section>
        <div class="flex mb-4 w-1/2 mx-auto">
            <div class="mx-auto">
                <?php triangelUpsetLeft() ?>
            </div>
            <div class="mx-auto">
                <?php triangelUpsetRight() ?>
            </div>
        </div>

        <div class="flex mb-4 w-1/2 mx-auto">
            <div class="mx-auto">
                <?php triangelDownSideLeft() ?>
            </div>
            <div class="mx-auto">
                <?php triangelDownSideRight() ?>
            </div>
        </div>
    </section>

    <section>
        <div class="flex mb-4 w-1/2 mx-auto">
            <div class="mx-auto">
                <?php pattern('triangelUpsetLeft', 5, '$'); ?>
            </div>
            <div class="mx-auto">
                <?php pattern('triangelUpsetRight', 5, '#'); ?>
            </div>
        </div>

        <div class="flex mb-4 w-1/2 mx-auto">
            <div class="mx-auto">
                <?php pattern('triangelDownSideLeft', 5, '@'); ?>
            </div>
            <div class="mx-auto">
                <?php pattern('triangelDownSideRight', 5); ?>
            </div>
        </div>
    </section>
    

</body>
</html>