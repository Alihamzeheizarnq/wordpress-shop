<div class="navbar navbar-static-top" id="stickyNavbar">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!--  ==========  -->
                    <!--  = Menu =  -->
                    <!--  ==========  -->
                    <div class="nav-collapse collapse">
                        <ul class="nav" id="mainNavigation">
                            <li class="dropdown active">
                                <a href="index.html" class="dropdown-toggle"> خانه <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="index.html"><i class="icon-caret-left pull-right visible-desktop"></i> رنگ های پوسته</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">پوسته پیش فرض</a></li>
                                            <li><a href="index-grass-green.html">پوسته سبز چمنی</a></li>
                                            <li><a href="index-oil-green.html">پوسته سبز روغنی</a></li>
                                            <li><a href="index-gray.html">پوسته خاکستری</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown active">
                                        <a href="index-boxed-solid.html"><i class="icon-caret-left pull-right visible-desktop"></i> ورژن boxed</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-boxed-solid.html">Boxed - با رنگ پس زمینه ثابت</a></li>
                                            <li class="active"><a href="index-boxed-pattern.html">Boxed - با پس زمینه الگو</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="shop.html" class="dropdown-toggle"> فروشگاه <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop.html">قالب بندی پیش فرض</a></li>
                                    <li><a href="shop-no-sidebar.html">تمام صفحه</a></li>
                                    <li><a href="product.html">محصول تکی</a></li>
                                    <li><a href="shop-search.html">نتایج جستجو</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="blog.html" class="dropdown-toggle">بلاگ <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">قالب بندی پیش فرض</a></li>
                                    <li><a href="blog-single.html">تک نوشته</a></li>
                                    <li><a href="blog-search.html">نتایج جستجو</a></li>
                                    <li><a href="404.html">صفحه 404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="features.html" class="dropdown-toggle">امکانات <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="icons.html">آیکن ها</a></li>
                                    <li class="dropdown">
                                        <a href="features.html" class="dropdown-toggle"><i class="icon-caret-left pull-right visible-desktop"></i> همه امکانات</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="features.html#headings">سرخط ها</a></li>
                                            <li><a href="features.html#alertBoxes">جعبه های هشدار</a></li>
                                            <li><a href="features.html#tabs">تب ها</a></li>
                                            <li><a href="features.html#buttons">دکمه ها</a></li>
                                            <li><a href="features.html#toggles">تاگل ها</a></li>
                                            <li><a href="features.html#quotes">نقل قول ها</a></li>
                                            <li><a href="features.html#gallery">گرید های گالری</a></li>
                                            <li><a href="features.html#code">کد</a></li>
                                            <li><a href="features.html#columns">ستون ها</a></li>
                                            <li><a href="features.html#maps">نقشه ها</a></li>
                                            <li><a href="features.html#progress">نوار های پیشرفت</a></li>
                                            <li><a href="features.html#tables">جداول</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">درباره ما</a></li>
                            <li><a href="contact.html">تماس با ما</a></li>
                        </ul>

                        <!--  ==========  -->
                        <!--  = Search form =  -->
                        <!--  ==========  -->
                        <form class="navbar-form pull-right" action="#" method="get">
                            <button type="submit"><span class="icon-search"></span></button>
                            <input type="text" class="span1" name="search" id="navSearchInput">
                        </form>
                    </div><!-- /.nav-collapse -->
                </div>

                <!--  ==========  -->
                <!--  = Cart =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="cart-container" id="cartContainer">
                        <div class="cart">
                            <p class="items">سبد خرید <span class="dark-clr">(3)</span></p>
                            <p class="dark-clr hidden-tablet">$1816.90</p>
                            <a href="checkout-step-1.html" class="btn btn-danger">
                                <!-- <span class="icon icons-cart"></span> -->
                                <i class="icon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="open-panel">

                            <div class="item-in-cart clearfix">
                                <div class="image">
                                    <img src="<?php image('dummy/cart-items/cart-item-1.jpg'); ?>" width="124" height="124" alt="cart item" />
                                </div>
                                <div class="desc">
                                    <strong><a href="product.html">کلاه زمستانی</a></strong>
                                    <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                </div>
                                <div class="price">
                                    <strong>$3222</strong>
                                </div>
                            </div>

                            <div class="item-in-cart clearfix">
                                <div class="image">
                                    <img src="<?php image('dummy/cart-items/cart-item-2.jpg'); ?>" width="124" height="124" alt="cart item" />
                                </div>
                                <div class="desc">
                                    <strong><a href="product.html">کمربند اسپورت</a></strong>
                                    <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                </div>
                                <div class="price">
                                    <strong>$4333</strong>
                                </div>
                            </div>

                            <div class="item-in-cart clearfix">
                                <div class="image">
                                    <img src="<?php image('dummy/cart-items/cart-item-3.jpg'); ?>" width="124" height="124" alt="cart item" />
                                </div>
                                <div class="desc">
                                    <strong><a href="product.html">کیف پول مردانه</a></strong>
                                    <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                </div>
                                <div class="price">
                                    <strong>$5135</strong>
                                </div>
                            </div>

                            <div class="summary">
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span6">هزینه ارسال :</div>
                                        <div class="span6 align-right">$4.99</div>
                                    </div>
                                </div>
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span6">جمع کل :</div>
                                        <div class="span6 align-right size-16">$357.81</div>
                                    </div>
                                </div>
                            </div>
                            <div class="proceed">
                                <a href="checkout-step-1.html" class="btn btn-danger pull-right bold higher">تصویه حساب <i class="icon-shopping-cart"></i></a>
                                <small>هزینه ارسال بر اساس منطقه جغرافیایی محاسبه میشود. <a href="#">اطلاعات بیشتر</a></small>
                            </div>
                        </div>
                    </div>
                </div> <!-- /cart -->
            </div>
        </div>
    </div>
</div>

     
    