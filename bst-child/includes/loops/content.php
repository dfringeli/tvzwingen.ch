<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the <!--more--> line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the section tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/bst.css style the different formats in different ways.
*/
?>

<h1>News</h1>
<br />
<?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post_<?php the_ID()?>">
        <header>
            <h2><?php the_title()?></h2>
            <p class="text-muted">
                <i class="fa fa-calendar" aria-hidden="true"></i> <time datetime="<?php the_time('d-m-Y')?>"><?php the_time('j. F Y') ?></time>
                <span class="left10"><i class="fa fa-user" aria-hidden="true"></i></span> <span><?php the_author() ?></span>
            </p>
        </header>
        <section>
            <div class="container-fluid no-padding">
                <div class="row">
                    <div class="col-md-2">
                        <a href="<?php the_permalink(); ?>" class="opacity-fade">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <div class="col-md-10 top10">

                        <?php the_excerpt(); ?>
                        <br/>
                        <p>
                            <a href="<?php the_permalink(); ?>" class="opacity-fade">Weiterlesen <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <hr />
        </footer>
    </article>
<?php endwhile; ?>

<?php if ( function_exists('bst_pagination') ) { bst_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bst')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'bst') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else: get_template_part('includes/loops/content', 'none'); endif; ?>
