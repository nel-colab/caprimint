<?php get_header(); ?>
<?php if (have_posts() ) : ?>
<?php while (have_posts() ): the_post();  ?>

<div class="cuerpoNominados" >
    <div  class="backgroundNominados" style="background-image: url(<?php bloginfo('template_url')?>/images/zayra.jpg")>
        
        <div class="TituloAwards">
            <h1 class="tituloPg"> Nominados Awards </h1>
            <h3 > Elije a tu favorito </h3>
        </div>
        
        
        <div class="nomnadosPadre"> 
            <div class="nominados"> 
                
                <div class="cuadroNominado">
                
                </div>
                <div class="cuadroNominado">
                
                </div>
                <div class="cuadroNominado">
                
                </div>
                
            </div>
        </div>
        <div class="nomnadosPadre"> 
            <div class="nominados"> 
                
                <div class="cuadroNominado">
                
                </div>
                <div class="cuadroNominado">
                
                </div>
                <div class="cuadroNominado">
                
                </div>
                
            </div>
        </div>
        
        <div class="nomnadosPadre"> 
            <div class="nominados"> 
                
                <div class="cuadroNominado">
                
                </div>
                <div class="cuadroNominado">
                
                </div>
                <div class="cuadroNominado">
                
                </div>
                
            </div>
        </div>
        
         <div class="nomnadosPadre"> 
            <div class="nominados"> 
                
                <div class="cuadroNominado">
                
                </div>
                <div class="cuadroNominado">
                
                </div>
                <div class="cuadroNominado">
                
                </div>
                
            </div>
        </div>
        
          
    </div>
    
</div>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>


