<?php get_header(); ?>
<hr>

<div class="product-type-header">

<h1>Hello</h1>

<p>lorem ipsum</p>

</div>

<hr class="dashed">

<section class="taxonomy-products-grid">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<figure class="archive-products">

    <?php the_post_thumbnail('large');?>

    <div class="grey-space"></div>

    <figcaption>
    <hr class="dotted">
    <a href="<?php echo get_permalink();?>">
    <div>
        <p><?php the_title();?></p>
        <p><?php echo " $" . get_field('price');?></p>
    </div>
    
    </a>

    </figcaption>
   
   </figure>  
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>


    
<?php get_footer();?>