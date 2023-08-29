<?php
    $post_id = get_the_ID();
?>
<section class="banner" id="banner">
    <div class="banner__container">
        <div class="banner__left padding-left-part">
            <div class="banner__title section-title">
                <?php the_field('zagolovok_bloka' , $post_id)?>
            </div>
            <div class="banner__desc">
                <?php the_field('opisanie_bloka' , $post_id)?>
            </div>
        </div>
        <div class="banner__right">
            <div class="swiper banner__swiper">
                <div class="swiper-wrapper banner__wrapper">
                    <?php
                        if( have_rows('slajder', $post_id) ):
                            while( have_rows('slajder' ,$post_id) ) : the_row();
                                $image = get_sub_field('kartinka_dlya_slajda');
                                $alt = get_sub_field('opisanie_slajda');
                                ?>
                                <div class="swiper-slide banner__slide">
                                    <img src="<?php echo $image?>" alt="<?php echo $alt?>">
                                </div>
                                <?php
                            endwhile;
                        endif;
                    ?>
                </div>
                <div class="banner__nav">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>