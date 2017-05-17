<?php


$meta_auteur=get_post_meta($post->ID , 'meta-Auteur' , true);

$meta_maison=get_post_meta($post->ID , 'meta-Maison' , true);

$meta_Date=get_post_meta($post->ID , 'meta-Date' , true);

$meta_Nombre=get_post_meta($post->ID , 'meta-Nombre' , true);


header('Content-Type: application/json');


$title = get_the_title();

$arr = array('Auteur' => $meta_auteur, 'Maison d’édition' => $meta_maison,'Date d’édition' => $meta_Date, 'Nombre d’exemplaires' => $meta_Nombre);

$myJSON = json_encode($arr);

echo $myJSON;
?>