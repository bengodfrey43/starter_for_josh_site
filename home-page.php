<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->

    <section class="container-fluid about-bg text-center">
        <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

            <div class="blocker"></div>
            
        </div><!-- container -->
    </section><!-- container-fluid -->





    <section class="container-fluid articles-bg">
        <div class="container">

            <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>

            <div class="row">
                <div class="col-md-4">

                    <img class="img-fluid" src="<?php the_field('articleimage1'); ?>" alt="warrior woman">

                    <h4 class="article-title"><?php the_field('articletitle1'); ?></h4>
                    <p class="date" ><?php the_field('articledate1'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt1'); ?> </p>
                    <a href="<?php the_field('readmore1'); ?>" class="readmore">CONTINUE READING</a>

                </div>
                <div class="col-md-4">

                    <img class="img-fluid" src="<?php the_field('articleimage2'); ?>" alt="warrior woman">

                    <h4 class="article-title"><?php the_field('articletitle2'); ?></h4>
                    <p class="date" ><?php the_field('articledate2'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt2'); ?> </p>
                    <a href="<?php the_field('readmore2'); ?>" class="readmore">CONTINUE READING</a>

                </div>
                <div class="col-md-4">

                    <img class="img-fluid" src="<?php the_field('articleimage3'); ?>" alt="warrior woman">

                    <h4 class="article-title"><?php the_field('articletitle3'); ?></h4>
                    <p class="date" ><?php the_field('articledate3'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt3'); ?> </p>
                    <a href="<?php the_field('readmore3'); ?>" class="readmore">CONTINUE READING</a>

                </div>
            </div><!-- row -->

        </div><!-- container -->
    </section><!-- container-fluid -->

    <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->