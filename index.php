<?php 
$array = [];
$data = ['string',true,2.4,2,$array];

foreach ($data as $value){
    echo 'De waarde is ' . gettype($value) . '.' . PHP_EOL;
}
