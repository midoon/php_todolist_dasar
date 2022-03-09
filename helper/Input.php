<?php
function input(string $info): string{
    
    echo $info. " : " ;
    $resault = fgets(STDIN);
    return $resault;
}