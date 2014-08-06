
<div class="container">
    <div class="counter-wrapper">
        <div class="row">
            <div class="ypnt-holder col-md-6">
                <?php $yp = get_post_ul_meta($post->ID,"like"); ?>
                <h1>
                    <?php echo $yp; ?>
                </h1>   
                <?php // if(function_exists('like_counter_p')) { like_counter_p('text for like'); } ?>
                <span class='btn btn-yp' onclick="wp_ypnt_ajax_script(this,'<?php echo $post->ID; ?>','like')">YES PLEASE</span>

            </div>
            <div class="ypnt-holder col-md-6">
                <?php $nt = get_post_ul_meta($post->ID,"dislike"); ?>
                <h1>
                    <?php echo $nt; ?>
                </h1>   
                <?php //if(function_exists('dislike_counter_p')) { dislike_counter_p('text for un-like'); } ?>
                <span class='btn btn-nt' onclick="wp_ypnt_ajax_script(this,'<?php echo $post->ID; ?>','dislike')">NO THANKS</span>
            </div>
        </div>
    </div>
</div>
