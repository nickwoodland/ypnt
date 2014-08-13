
<div class="container above-the-fold">
    <div class="counter-wrapper">
        <div class="row">
            <div class="ypnt-holder counter col-md-6">
                <div>
                    <?php $nt = get_post_ul_meta($post->ID,"dislike"); ?>
                    <figure class="inf inf-1">
                        <h1>
                            <?php echo $nt; ?>
                        </h1> 
                    </figure>  
                    <?php //if(function_exists('dislike_counter_p')) { dislike_counter_p('text for un-like'); } ?>
                    <span class='btn btn-nt' onclick="wp_ypnt_ajax_script(this,'<?php echo $post->ID; ?>','dislike')">No Thanks</span>
                </div>
            </div>
            <div class="ypnt-holder counter col-md-6">
                <div>
                    <?php $yp = get_post_ul_meta($post->ID,"like"); ?>
                    <figure class="inf inf-2">
                        <h1>
                            <?php echo $yp; ?>
                        </h1>
                    </figure> 
                    <?php // if(function_exists('like_counter_p')) { like_counter_p('text for like'); } ?>
                    <span class='btn btn-yp' onclick="wp_ypnt_ajax_script(this,'<?php echo $post->ID; ?>','like')">Yes Please</span>
                </div>
            </div>

        </div>

    </div>
</div>
<a class="hero-more js-smooth-scroll" href="#intro"><span>Find Out More</span></a>
