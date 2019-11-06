
 <div class="footerPage">
<footer >
   
        <?php
        // check if the repeater field has rows of data
        if( have_rows('footer') ):  while ( have_rows('footer') ) : the_row();

                // display a sub field value
               ?>
                <?php $image = get_sub_field('sponsors');  ?>
            <img class="cssSponsors" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  />
        <?php  endwhile; endif;  ?>
    


</footer>   
</div>