<?php
/*
Template Name: homePage
*/
get_header();
?>

<div class="cuscc_main_container">

	<div id="cuscc_banner"></div>
    <div id="cuscc_updates">
    <div id="cuscc_lastest_news" class="left">
        <div id="cuscc_lastest_news_title">Latest News</div>
        <div><?php
            $posts = query_posts(array(
                    'category_name' => 'cuscc,others',
                    'posts_per_page' =>7
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
        <div id="userip" style="display:none;"><?php echo $_SERVER["REMOTE_ADDR"]?></div>
        <div id="cuscc_videos_title">CUSCC in Timeline</div>
        <div class="cuscc_video_holder cuscc_intro_video_youku">
                <iframe height=315 width=560 src="http://player.youku.com/embed/XOTAxMjY3ODI0" frameborder=0 allowfullscreen></iframe>
        </div>
        <div class="cuscc_video_holder cuscc_intro_video_youtube">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/hPCtdVQu98E" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="cuscc_video_holder cuscc_intro_video_youku">
                <iframe height=315 width=560 src="http://player.youku.com/embed/XNjc1NzM5NDAw" frameborder=0 allowfullscreen></iframe>
        </div>
        <div class="cuscc_video_holder cuscc_intro_video_youtube">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/n5vU0QtfLDM" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="clear"></div>
    </div>
    <div id="cuscc_latest_members">
        <div class="left" id="cuscc_latest_members_side">
            <p>Latest Members</p>
            <p>Checkout our latest members, you can also submit your information and become a registered member.</p>
            <button>View Business Members</button>
        </div>
        <div class="left" id="cuscc_latest_members_post">
        <?php echo do_shortcode('[lastest_members]');?>
        </div>
        <div class="clear"></div>
    </div>
    <div id="cuscc_membership_campaign">
        <div class="left slogan slogan_left">Have a business? Join China-U.S. Chamber of Commerce!</div>
        <div class="left slogan slogan_right">Join Us!</div>
        <div class="clear"></div>
    </div>
    <div id="cuscc_latest_strategic_partners">
    
    </div>
    <div id="cuscc_strategic_partner_campaign">
        <div class="left slogan slogan_left">We are currently looking for strategic partners</div>
        <div class="left slogan slogan_right">Join Us!</div>
        <div class="clear"></div>
    </div>

</div>


<?php get_footer(); ?>