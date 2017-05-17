<div class="blog-post">
 <h2 class="blog-post-it <h2 class="blog-post-itle"></h2>
  <p>________________________________________________________________________________________________________________________________________________________</p>
</br></br><h6>Titre de l’ouvrage :</h6></br></br>


<center><?php the_title();?></center>


  <center><?php the_content(); ?></center>

<?php

$meta_auteur=get_post_meta($post->ID , 'meta-Auteur' , true);
echo $meta_auteur; ?> </br><?php
$meta_maison=get_post_meta($post->ID , 'meta-Maison' , true);
echo $meta_maison ; ?> </br><?php
$meta_Date=get_post_meta($post->ID , 'meta-Date' , true);
echo $meta_Date;?> </br><?php
$meta_Nombre=get_post_meta($post->ID , 'meta-Nombre' , true);
echo $meta_Nombre ; ?> </br><?php
?>
</div><!-- /.blog-post -->
