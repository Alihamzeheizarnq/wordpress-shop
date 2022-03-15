<div class="darker-stripe">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">وبمارکت</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="shop.html">فروشگاه</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="#">محصول ویژه</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="product.html">تی شرت مردانه کلاه دار</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="push-up top-equal blocks-spacer">

        <!--  ==========  -->
        <!--  = Product =  -->
        <!--  ==========  -->
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): the_post(); ?>
                <div class="row blocks-spacer">

                    <!--  ==========  -->
                    <!--  = Preview Images =  -->
                    <!--  ==========  -->
                    <div class="span5">
                        <div class="product-preview">
                            <div class="picture">
                                <img src="<?php image('dummy/products/shirt-1.jpg'); ?>" alt="" width="940" height="940" id="mainPreviewImg">
                            </div>
                            <div class="thumbs clearfix">
                                <div class="thumb active">
                                    <a href="#mainPreviewImg"><img src="<?php image('dummy/products/shirt-1.jpg'); ?>" alt="" width="940" height="940"></a>
                                </div>
                                <div class="thumb">
                                    <a href="#mainPreviewImg"><img src="<?php image('dummy/products/shirt-2.jpg'); ?>" alt="" width="940" height="940"></a>
                                </div>
                                <div class="thumb">
                                    <a href="#mainPreviewImg"><img src="<?php image('dummy/products/shirt-3.jpg'); ?>" alt="" width="940" height="940"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  ==========  -->
                    <!--  = Title and short desc =  -->
                    <!--  ==========  -->
                    <div class="span7">
                        <div class="product-title">
                            <h1 class="name"><span class="light"></span><?php the_title() ?></h1>
                            <div class="meta">
                                <span class="tag"><?php echo number_format(get_post_meta(get_the_ID(), 'price_product', true)) ?> تومان</span>
                                <span class="stock">
                                <span class="btn btn-success">موجود</span>
                                <span class="btn btn-danger">اتمام موجودی</span>
                                <span class="btn btn-warning">تماس بگیرید</span>
                            </span>
                            </div>
                        </div>
                        <div class="product-description">
                            <p>
                                <?php echo get_the_content() ?>
                            </p>
                            <hr>

                            <!--  ==========  -->
                            <!--  = Add to cart form =  -->
                            <!--  ==========  -->
                            <form action="#" class="form form-inline clearfix">
                                <div class="numbered">
                                    <input type="text" name="num" value="1" class="tiny-size">
                                    <span class="clickable add-one icon-plus-sign-alt"></span>
                                    <span class="clickable remove-one icon-minus-sign-alt"></span>
                                </div>
                                &nbsp;
                                <select name="color" class="span2">
                                    <option value="-1">انتخاب رنگ</option>
                                    <option value="blue">آبی</option>
                                    <option value="orange">نارنجی</option>
                                    <option value="black">مشکی</option>
                                </select>
                                &nbsp;
                                <select name="size" class="span2">
                                    <option value="-1">انتخاب سایز</option>
                                    <option value="XS">خیلی کوچک</option>
                                    <option value="S">کوچک</option>
                                    <option value="M">متوسط</option>
                                    <option value="L">بزرگ</option>
                                    <option value="XL">خیلی بزرگ</option>
                                    <option value="XXL">خیلی خیلی بزرگ</option>
                                </select>
                                <button class="btn btn-danger pull-right"><i class="icon-shopping-cart"></i> اضافه به
                                    سبد خرید
                                </button>
                            </form>

                            <hr>

                            <!--  ==========  -->
                            <!--  = Share buttons =  -->
                            <!--  ==========  -->
                            <div class="share-item">
                                <div class="pull-right social-networks">
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_pinterest_pinit"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                    </div>
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-517459541beb3977"></script>
                                    <!-- AddThis Button END -->
                                </div>
                                با دوستان خود به اشتراک بگذارید :
                            </div>

                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
        <!--  ==========  -->
        <!--  = Tabs with more info =  -->
        <!--  ==========  -->
        <div class="row">
            <div class="span12">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab-1" data-toggle="tab">جزئیات</a>
                    </li>
                    <li>
                        <a href="#tab-2" data-toggle="tab">جدول اندازه</a>
                    </li>
                    <li>
                        <a href="#tab-3" data-toggle="tab">نظرات</a>
                    </li>
                    <li>
                        <a href="#tab-4" data-toggle="tab">جزئیات ارسال</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="fade in tab-pane active" id="tab-1">
                        <h3>توضیحات محصول</h3>
                        <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی
                            شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات
                            زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و
                            کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.
                            حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج
                            درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این
                            ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود. </p>
                        <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی
                            شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات
                            زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و
                            کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.
                            حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج
                            درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بل</p>
                        <h1>سرخط H1 30px</h1>
                        <h2>سرخط H2 26px</h2>
                        <h3>سرخط H3 20px</h3>
                        <h4>سرخط H4 18px</h4>
                        <h5>سرخط H5 15px</h5>
                        <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی
                            شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات
                            زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و
                            کمی در سالهای دور لازم است. </p>
                    </div>
                    <div class="fade tab-pane" id="tab-2">
                        <p>
                            لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی
                            شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات
                            زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و
                            کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.
                            حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج
                            درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این
                            ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود.
                        </p>
                    </div>
                    <div class="fade tab-pane" id="tab-3">
                        <p>
                            لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی
                            شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات
                            زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و
                            کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.
                            حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج
                            درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این
                            ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود.
                        </p>
                    </div>
                    <div class="fade tab-pane" id="tab-4">
                        <p>
                            لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی
                            شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات
                            زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و
                            کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.
                            حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج
                            درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این
                            ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php view('partials.other-product') ?>