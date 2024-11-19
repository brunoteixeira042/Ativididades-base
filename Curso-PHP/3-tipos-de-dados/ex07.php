
<?php

$arr = [
"nome"=>"Antônio",
"idade"=>25,
"altura"=>1.75,
];

print_r($arr);
echo "<br>";

if($arr['idade']>=18){
   echo "$arr[nome] é maior de idade"; 
}