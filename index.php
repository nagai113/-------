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
                
                
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php $title= mb_substr($post->post_title,0,15); echo $title; ?></h2>
                    <?php echo mb_substr(get_the_excerpt(), 0, 50); ?></a>
                    <div class="postmetadata">
                        <?php the_time(__('F jS, Y', 'kubrick')) ?>&nbsp;&#721;&nbsp;
                        <?php printf(__('カテゴリー: %s'), get_the_category_list(', ')); ?>
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
                    <div id="navleft"><?php next_posts_link(__('前回の記事&nbsp;')) ?></div>
                    <div id="navright"><?php previous_posts_link(__('次の記事&nbsp;')) ?></div>
                </div>
            <?php else : ?>
            <?php endif; ?>
        

        
        
        
<?php get_footer(); ?>
