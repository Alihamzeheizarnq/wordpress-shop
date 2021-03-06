<div class="boxed-area blocks-spacer">
    <div class="container">

        <!--  ==========  -->
        <!--  = Title =  -->
        <!--  ==========  -->
        <div class="row">
            <div class="span12">
                <div class="main-titles lined">
                    <h2 class="title"><span class="light">محصولات</span> جدید فروشگاه</h2>
                </div>
            </div>
        </div> <!-- /title -->

        <div class="row popup-products blocks-spacer">


			<?php
			$wp_query = new WP_Query([
				'post_type' => 'product'
			]);
			?>

			<?php if ( $wp_query->have_posts() ): ?>

				<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>


                    <div class="span3">
                        <div class="product">
                            <div class="product-img">
                                <div class="picture">
                                    <img src="<?php image('dummy/products/product-6.jpg'); ?>" alt="" width="540" height="374"/>
                                    <div class="img-overlay">
                                        <a href="<?php echo get_the_permalink() ?>" class="btn more btn-primary">توضیحات
                                            بیشتر</a>
                                        <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">$32</h4>
                                <h5 class="no-margin"><?php echo get_the_title() ?></h5>
                            </div>
                            <p class="desc"><?php echo get_the_excerpt() ?></p>
                            <p class="center-align stars">
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star stars-clr"></span>
                                <span class="icon-star"></span>

                            </p>
                        </div>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
            <div class="clearfix"></div>


        </div>
    </div>
</div> <!-- /new products -->
