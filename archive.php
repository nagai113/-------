<?php get_header(); ?> 
                  <?php /* If this is a category archive */ if (is_category()) { ?>
                    <div class="pagetitle"><?php printf(__('&#8216;%s&#8217;'), single_cat_title('', false)); ?></div>
                  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <div class="pagetitle"><?php printf(__('&#8216;%s&#8217;'), single_tag_title('', false) ); ?></div>
                  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <div class="pagetitle"><?php printf(_c('%s|Daily archive page'), get_the_time(__('F jS, Y'))); ?></div>
                  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <div class="pagetitle"><?php printf(_c('%s|Monthly archive page'), get_the_time(__('F, Y'))); ?></div>
                  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <div class="pagetitle"><?php printf(_c('%s|Yearly archive page'), get_the_time(__('Y'))); ?></div>
                  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <div class="pagetitle"><?php _e('Author Archive'); ?></div>
                  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <div class="pagetitle"><?php _e('Blog Archives'); ?></div>
                  <?php } ?>

              <ul class="mcol">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
              	<li class="article" id="post-<?php the_ID(); ?>">

                    	<?php
                    	if ( has_post_thumbnail() ) { ?>
                    	<?php 
                    	$imgsrcparam = array(
						'alt'	=> trim(strip_tags( $post->post_excerpt )),
						'title'	=> trim(strip_tags( $post->post_title )),
						);
                    	$thumbID = get_the_post_thumbnail( $post->ID, 'background', $imgsrcparam ); ?>
                        <div><a href="<?php the_permalink() ?>" class="preview"><?php echo "$thumbID"; ?></a></div>
                    	<?php } ?>

                                        <?php the_tags(''); ?>
                    <div class="postmetadata">
                        <?php the_time(__('Y年m月d日(D)')) ?>&nbsp;&nbsp;
                    </div>
                </li>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            
                </ul>

            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php endwhile; ?>
            <?php else : ?>
                <h1 id="error"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>

            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php endwhile; ?>
                <div id="nav">
                    <div id="navleft"><?php previous_posts_link(__('最近のコピー&nbsp;')) ?></div>
                    <div id="navright"><?php next_posts_link(__('過去のコピー&nbsp;')) ?></div>
                </div>
            <?php else : ?>
            <?php endif; ?>
<?php get_footer(); ?>
