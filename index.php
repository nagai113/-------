<?php get_header(); ?> 


              <ul class="mcol">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
              	<li class="article">
                
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
            <div id="main">
                <h1><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            </div>
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
