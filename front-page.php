<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>
<title><?php the_title(); ?> </title>


<div class="cuerpoInicio" >
    
    <div class="cuerpoDerecho">
        <div class="divCentrado" >  
                     
           <p style="color:white;" > <?php echo the_content(); ?> </p> 
            <br>
            <p style="color:white;"> ¡Let's Go!</p>
        </div>
    </div>
    
    <div  class="cuerpoIzquierdo">
                   
    </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>