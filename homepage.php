<?php
/*
Template Name: homePage
*/
get_header();
?>

<div class="cuscc_main_container">

	<div id="cuscc_banner"></div>
    <div id="cuscc_lastest_news" class="left">
        <div id="cuscc_lastest_news_title">Latest News</div>
        <div><?php
            $posts = query_posts(array(
                    'category_name' => 'cuscc,others',
                    'posts_per_page' =>6
                ) );?>
           
                <ul class="cuscc_posts_list">
                    <?php  foreach ( $posts as $post ) { 
                        the_post(); ?>
                    <div class="cuscc_post_container">
                    <li>
                        <a href="<?php the_permalink(); ?>" class="cuscc_post_title"><?php the_title(); ?></a>
                        <p>
                        <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200," ...<a href='".get_permalink()."' target='_blank'>查看详情 &gt;&gt;</a><br>");?>
                        </p>
                    </li>
                    </div>
                    <?php } wp_reset_query(); ?>	
                </ul>
        </div>
    </div>
    <div id="cuscc_videos" class="left">
    
    </div>
    <div class="clear"></div>
    <div id="cuscc_latest_members">
    
    </div>
    <div id="cuscc_membership_campaign">
    
    </div>
    <div id="cuscc_latest_strategic_partners">
    
    </div>
    <div id="cuscc_strategic_partner_campaign">
    
    </div>

</div>


<?php get_footer(); ?>