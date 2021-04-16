<?php 

echo '<hr>';
echo 'Trabalhando com PDO';
echo '<hr>'; 

$link = new PDO("mysql:host=localhost;dbname=3762240_library", "root", ""); 
$link->exec("SET CHARACTER SET utf8"); 

$query = $link->prepare("SELECT * FROM curso"); 
$query->execute(); 
$res = $query->fetchAll(PDO::FETCH_ASSOC); 

foreach ( $res as $lista) 
{ 
    echo '<br>'; 
    echo $lista['NOME']; 
}