@extends('layouts/header')


@section('content')
            <div id="Subheader" style="padding:100px 0;">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Shop</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="section">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <div class="column one woocommerce-content">
                                    <div class="shop-filters">
                                        <p class="woocommerce-result-count">
                                            Showing all 9 results
                                        </p>
                                        <form class="woocommerce-ordering" method="get">
                                            <select name="orderby" class="orderby">
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="rating">Sort by average rating</option>
                                                <option value="date" selected='selected'>Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="products_wrapper isotope_wrapper">
                                        <ul class="products grid">
                                            <li class="isotope-item post-96 product type-product has-post-thumbnail product_cat-eye-vision product_cat-hair-health first instock downloadable shipping-taxable purchasable product-type-simple">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="/product/{{"1"}}">
                                                            <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product1-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product1" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a rel="nofollow" href="shop.html" data-quantity="1" data-product_id="96" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="{{url('/product')}}"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div><a href="{{url('/product')}}"><span class="product-loading-icon added-cart"></span></a>
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{url('/product')}}">Sed fringilla tempus</a></h4>
                                                    <div class="star-rating" title="Rated 5 out of 5">
                                                        <span style="width:100%"><strong class="rating">5</strong> out of 5</span>
                                                    </div>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>9.00</span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="isotope-item post-93 product type-product has-post-thumbnail product_cat-hair-health product_cat-headache-and-migraine  instock downloadable shipping-taxable purchasable product-type-simple">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="{{url('/product')}}">
                                                            <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product2-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product2" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a rel="nofollow" href="" data-quantity="1" data-product_id="93" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="{{url('/product')}}"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div><a href="{{url('/product')}}"><span class="product-loading-icon added-cart"></span></a>
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{url('/product')}}">Aliquam tempus</a></h4><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>3.00</span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="isotope-item post-90 product type-product has-post-thumbnail product_cat-headache-and-migraine product_cat-nervous-system last instock downloadable shipping-taxable purchasable product-type-simple">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="{{url('/product')}}">
                                                            <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product3-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product3" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a rel="nofollow" href="shop.html" data-quantity="1" data-product_id="90" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="{{url('/product')}}"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div><a href="{{url('/product')}}"><span class="product-loading-icon added-cart"></span></a>
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{url('/product')}}">Nullam imperdiet</a></h4>
                                                    <div class="star-rating" title="Rated 3 out of 5">
                                                        <span style="width:60%"><strong class="rating">3</strong> out of 5</span>
                                                    </div>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>9.00</span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="isotope-item post-87 product type-product has-post-thumbnail product_cat-nervous-system product_cat-weight-loss first instock featured downloadable shipping-taxable purchasable product-type-simple">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="{{url('/product')}}">
                                                            <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product4-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product4" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a rel="nofollow" href="shop.html" data-quantity="1" data-product_id="87" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="{{url('/product')}}"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div><a href="{{url('/product')}}"><span class="product-loading-icon added-cart"></span></a>
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{url('/product')}}">Cras in dictum</a></h4>
                                                    <div class="star-rating" title="Rated 4 out of 5">
                                                        <span style="width:80%"><strong class="rating">4</strong> out of 5</span>
                                                    </div>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>9.00</span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="isotope-item post-83 product type-product has-post-thumbnail product_cat-eye-vision product_cat-headache-and-migraine  instock downloadable shipping-taxable purchasable product-type-simple">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="{{url('/product')}}">
                                                            <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product5-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product5" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a rel="nofollow" href="shop.html" data-quantity="1" data-product_id="83" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="{{url('/product')}}"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div><a href="{{url('/product')}}"><span class="product-loading-icon added-cart"></span></a>
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{url('/product')}}">Vestibulum quis</a></h4><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>9.00</span>
                                                    </span>
                                                </div>
                                            </li>
                                            {{--@include('layouts.item',['itemName'=>$itemname])--}}
                                            <li class="isotope-item post-79 product type-product has-post-thumbnail product_cat-hair-health product_cat-nervous-system last instock shipping-taxable purchasable product-type-simple">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="{{url('/product')}}">
                                                            <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product1-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product1" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a rel="nofollow" href="shop.html" data-quantity="1" data-product_id="79" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="{{url('/product')}}"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div><a href="{{url('/product')}}"><span class="product-loading-icon added-cart"></span></a>
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{url('/product')}}">Nullam euismod</a></h4><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="isotope-item post-76 product type-product has-post-thumbnail product_cat-eye-vision product_cat-weight-loss first instock shipping-taxable purchasable product-type-simple">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="{{url('/product')}}">
                                                            <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product2-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product2" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a rel="nofollow" href="shop.html" data-quantity="1" data-product_id="76" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="{{url('/product')}}"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div><a href="{{url('/product')}}"><span class="product-loading-icon added-cart"></span></a>
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{url('/product')}}">Cras mauris</a></h4>
                                                    <div class="star-rating" title="Rated 4 out of 5">
                                                        <span style="width:80%"><strong class="rating">4</strong> out of 5</span>
                                                    </div>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="isotope-item post-73 product type-product has-post-thumbnail product_cat-eye-vision product_cat-nervous-system  instock sale shipping-taxable purchasable product-type-simple">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="{{url('/product')}}">
                                                            <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product3-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product3" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a rel="nofollow" href="shop.html" data-quantity="1" data-product_id="73" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="{{url('/product')}}"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div><span class="onsale"><i class="icon-star"></i></span><a href="{{url('/product')}}"><span class="product-loading-icon added-cart"></span></a>
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{url('/product')}}">Aliquam fermentum</a></h4>
                                                    <div class="star-rating" title="Rated 2 out of 5">
                                                        <span style="width:40%"><strong class="rating">2</strong> out of 5</span>
                                                    </div>
                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
                                                    </del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="isotope-item post-70 product type-product has-post-thumbnail product_cat-hair-health product_cat-weight-loss last instock sale shipping-taxable purchasable product-type-simple">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="{{url('/product')}}">
                                                            <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product4-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product4" />
                                                        </a>
                                                        <div class="image_links double">
                                                            <a rel="nofollow" href="shop.html" data-quantity="1" data-product_id="70" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="{{url('/product')}}"><i class="icon-link"></i></a>
                                                        </div>
                                                    </div><span class="onsale"><i class="icon-star"></i></span><a href="{{url('/product')}}"><span class="product-loading-icon added-cart"></span></a>
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{url('/product')}}">Etiam sit amet</a></h4>
                                                    <div class="star-rating" title="Rated 4 out of 5">
                                                        <span style="width:80%"><strong class="rating">4</strong> out of 5</span>
                                                    </div>
                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
                                                    </del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection