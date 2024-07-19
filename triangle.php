<?php

function drawTriangle($row)
{

    $tempRow=0;
    while ($tempRow<=$row){
        $tempRow++;
        for ($i=0; $i<$tempRow; $i++) {
            echo 0;
        }
        echo '<br>';
    }
}

drawTriangle(10);