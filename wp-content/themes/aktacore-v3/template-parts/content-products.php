<?php
$post_id = get_the_ID();
?>
<section class="products" id="products">
    <div class="products__container main-container">
        <div class="products__list">
            <?php
            if( have_rows('produkty', $post_id) ):
                while( have_rows('produkty' ,$post_id) ) : the_row();
                    $title = get_sub_field('nazvanie_produkta');
                    $lnk = get_sub_field('ssylka_na_straniczu');
                    $img = get_sub_field('kartinka_na_fon');
                    if($lnk){
                        ?>
                            <a href="<?php echo $lnk?>" class="products__item">
                        <?php
                    } else {
                        ?>
                            <div class="products__item">
                        <?php
                    }
                    ?>
                        <span class="products__item-img">
                            <?php
                            if ($img){
                                ?>
                                <img src="<?php echo $img?>" alt="<?php echo $title?>">
                                <?php
                            }
                            ?>
                        </span>
                        <h3 class="products__item-title">
                            <?php echo $title?>
                        </h3>
                <?php
                    if($lnk){
                        ?>
                            </a>
                        <?php
                    } else {
                        ?>
                            </div>
                        <?php
                    }
                endwhile;
            endif;
            ?>
        </div>
        <div class="products__content">
            <h2 class="products__title section-title">
                <?php the_field('zagolovok_bloka_2' , $post_id);?>
            </h2>
            <div class="products__desc">
                <?php the_field('opisanie_bloka_2' , $post_id);?>
            </div>
        </div>
    </div>
</section>
