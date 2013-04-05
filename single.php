<?php get_header(); ?> 

<?php get_sidebar(); ?> 

            <div id="main-inner">
  
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                <div class="article" id="post-<?php the_ID(); ?>">
                      <h1><?php the_title(); ?></h1>
                      <br>
                <?php the_tags(''); ?>
                      <div class="postmetadata">
                          <?php the_time(__('Y年m月d日(D)')) ?>&nbsp;&nbsp;<?php printf(__('カテゴリー: %s'), get_the_category_list(', ')); ?>&nbsp;&#721;&nbsp;
                      </div>
                      <br>
                      <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
            
                <div id="nav">
                    <div id="navleft"><?php next_post_link('%link', '最近のコピー'); ?></div>
                    <div id="navright"><?php previous_post_link('%link', '過去のコピー'); ?></div>
                </div>
                
<!--この行にコメントタグあった-->            
            <?php else : ?>
                <h1><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>
            
            </div>
        

<?php get_footer(); ?>
