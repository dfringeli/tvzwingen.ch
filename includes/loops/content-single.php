<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2><?php the_title()?></h2>
            <p class="text-muted" style="margin-bottom: 30px;">
                <i class="fa fa-calendar" aria-hidden="true"></i> <time datetime="<?php the_time('d-m-Y')?>"><?php the_time('j. F Y') ?></time>
                <span class="left10"><i class="fa fa-user" aria-hidden="true"></i></span> <span><?php the_author() ?></span>
            </p>
        </header>
        <section>
            <?php the_excerpt(); ?>
            <div class="post-thumbnail">
              <?php
                $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                echo '<img src="' . $image_src[0]  . '" class="img-responsive" />';
              ?>
            </div>
            <?php the_content()?>
            <br />
            <?php wp_link_pages(); ?>
        </section>
    </article>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
