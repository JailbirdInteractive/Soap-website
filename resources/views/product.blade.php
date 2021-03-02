@extends('layouts/header')


@section('content')
            <div id="Subheader" style="padding:100px 0;">
                <div class="container">
                    <div class="column one">
                        <h2 class="title">{{$name}}</h2>
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
                                    <div itemscope itemtype="http://schema.org/Product" id="product-73" class="post-73 product type-product has-post-thumbnail product_cat-eye-vision product_cat-nervous-system first instock sale shipping-taxable purchasable product-type-simple">
                                        <a class="fixed-nav fixed-nav-prev " href="{{url('/shop')}}"><span class="arrow"><i class="icon-left-open-big"></i></span>
											<div class="photo"><img width="80" height="80" src="../content/herbal/images/home_herbal_product4-80x80.jpg" class="attachment-blog-navi size-blog-navi wp-post-image" alt="home_herbal_product4"  />
											</div>
											<div class="desc">
												<h6>Etiam sit amet</h6><span class="date"><i class="icon-clock"></i>June 7, 2013</span>
											</div></a><a class="fixed-nav fixed-nav-next " href="{{url('/shop')}}"><span class="arrow"><i class="icon-right-open-big"></i></span>
											<div class="photo"><img width="80" height="80" src="../content/herbal/images/home_herbal_product2-80x80.jpg" class="attachment-blog-navi size-blog-navi wp-post-image" alt="home_herbal_product2"  />
											</div>
											<div class="desc">
												<h6>Cras mauris</h6><span class="date"><i class="icon-clock"></i>June 7, 2013</span>
											</div></a>
                                        <div class="column one post-nav minimal">
                                            <a class="prev" href="{{url('/shop')}}"><i class="icon icon-left-open-big"></i></a>
                                            </li><a class="next" href="{{url('/shop')}}"><i class="icon icon-right-open-big"></i></a>
                                            </li>
                                            <a class="home" href="{{url('/shop')}}">
                                                <svg class="icon" width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7,2v5H2V2H7 M9,0H0v9h9V0L9,0z" />
                                                    <path d="M20,2v5h-5V2H20 M22,0h-9v9h9V0L22,0z" />
                                                    <path d="M7,15v5H2v-5H7 M9,13H0v9h9V13L9,13z" />
                                                    <path d="M20,15v5h-5v-5H20 M22,13h-9v9h9V13L22,13z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product_wrapper clearfix">
                                            <div class="column one-second product_image_wrapper">
                                                <span class="onsale"><i class="icon-star"></i></span>
                                                <div class="images">
                                                    <div class="image_frame scale-with-grid" ontouchstart="this.classList.toggle('hover');">
                                                        <div class="image_wrapper">
                                                            <a href="../content/herbal/images/home_herbal_product3.jpg" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                                                <div class="mask"></div><img width="600" height="600" src="https://soapshoppics.s3.amazonaws.com/products/charcoal/IMG_0442-Edit.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product3" title="home_herbal_product3" />
                                                            </a>
                                                            <div class="image_links">
                                                                <a href="https://soapshoppics.s3.amazonaws.com/products/charcoal/IMG_0442-Edit.jpg" class="woocommerce-main-image zoom" title=""><i class="icon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumbnails columns-3">
                                                        <div class="image_frame scale-with-grid" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="image_wrapper">
                                                                <a href="../content/herbal/images/home_herbal_product2.jpg" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                                                    <div class="mask"></div><img width="180" height="180" src="../content/herbal/images/home_herbal_product2-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="home_herbal_product2" title="home_herbal_product2" caption="" url="../../../content/herbal/images/home_herbal_product2.jpg" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="image_frame scale-with-grid" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="image_wrapper">
                                                                <a href="../content/herbal/images/home_herbal_product5.jpg" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                                                    <div class="mask"></div><img width="180" height="180" src="../content/herbal/images/home_herbal_product5-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="home_herbal_product5" title="home_herbal_product5" caption="" url="../../../content/herbal/images/home_herbal_product5.jpg" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column one-second summary entry-summary">
                                                <h1 itemprop="name" class="product_title entry-title">{{$name}}</h1>
                                                <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                    <div class="star-rating" title="Rated 2 out of 5">
                                                        <span style="width:40%"> <strong itemprop="ratingValue" class="rating">2</strong> out of <span itemprop="bestRating">5</span> based on <span itemprop="ratingCount" class="rating">2</span> customer ratings </span>
                                                    </div>
                                                    <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span itemprop="reviewCount" class="count">2</span> customer reviews)</a>
                                                </div>
                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                    <p class="price">
                                                        <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$price}} </span></del><ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$price}}</span></ins>
                                                    </p>
                                                    <meta itemprop="price" content="{{$price}}" />
                                                    <meta itemprop="priceCurrency" content="USD" />
                                                    <link itemprop="availability" href="http://schema.org/InStock" />
                                                </div>
                                                <br style="clear:both;" />
                                                <div itemprop="description">
                                                    <p>
                                                        {{$description}}
                                                    </p>
                                                </div>
                                                <form class="cart" method="post" enctype='multipart/form-data'>
                                                    <div class="quantity">
                                                        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" />
                                                    </div>
                                                    <input type="hidden" name="add-to-cart" value="73" />
                                                    <button type="submit" class="single_add_to_cart_button button alt">
                                                        Add to cart
                                                    </button>
                                                </form>
                                                <div class="product_meta">
                                                    <span class="posted_in">Categories: <a href="product_category.html" rel="tag">Eye / Vision</a>, <a href="product_category.html" rel="tag">Nervous System</a>.</span>
                                                </div>
                                                <div class="accordion">
                                                    <div class="mfn-acc accordion_wrapper open1st">
                                                        <div class="question">
                                                            <div class="title">
                                                                <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Description
                                                            </div>
                                                            <div class="answer">
                                                                <p>
                                                                    {{$description}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="question">
                                                            <div class="title">
                                                                <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Reviews (2)
                                                            </div>
                                                            <div class="answer">
                                                                <div id="reviews" class="woocommerce-Reviews">
                                                                    <div id="comments">
                                                                        <h2 class="woocommerce-Reviews-title">2 reviews for <span>{{$name}}</span></h2>
                                                                        <ol class="commentlist">
                                                                            <li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-6">
                                                                                <div id="comment-6" class="comment_container"><img alt='' src='http://1.gravatar.com/avatar/dcd1ef25e108ae391338cb43b56ba8e6?s=60&amp;d=mm&amp;r=g' class='avatar avatar-60 photo' height='60' width='60' />
                                                                                    <div class="comment-text">
                                                                                        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 3 out of 5">
                                                                                            <span style="width:60%"><strong itemprop="ratingValue">3</strong> out of 5</span>
                                                                                        </div>
                                                                                        <p class="meta">
                                                                                            <strong itemprop="author">Dan</strong> &ndash;
                                                                                            <time itemprop="datePublished" datetime="2013-06-07T12:39:04+00:00">
                                                                                                June 7, 2013
                                                                                            </time>
                                                                                            :
                                                                                        </p>
                                                                                        <div itemprop="description" class="description">
                                                                                            <p>
                                                                                                I thought I was buying a man holding a poster, but when it arrived it was just the poster. Cool poster though, so I&#8217;ll give it 3 stars!
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-7">
                                                                                <div id="comment-7" class="comment_container"><img alt='' src='http://2.gravatar.com/avatar/59c82b1d2c60537f900fb191b3cb611b?s=60&amp;d=mm&amp;r=g' class='avatar avatar-60 photo' height='60' width='60' />
                                                                                    <div class="comment-text">
                                                                                        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 1 out of 5">
                                                                                            <span style="width:20%"><strong itemprop="ratingValue">1</strong> out of 5</span>
                                                                                        </div>
                                                                                        <p class="meta">
                                                                                            <strong itemprop="author">Maria</strong> &ndash;
                                                                                            <time itemprop="datePublished" datetime="2013-06-07T15:55:29+00:00">
                                                                                                June 7, 2013
                                                                                            </time>
                                                                                            :
                                                                                        </p>
                                                                                        <div itemprop="description" class="description">
                                                                                            <p>
                                                                                                I didn&#8217;t expect this poster to arrive folded. Now there are lines on the poster and one sad Ninja.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                    <div id="review_form_wrapper">
                                                                        <div id="review_form">
                                                                            <div id="respond" class="comment-respond">
                                                                                <h3 id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="product.html#respond" style="display:none;">Cancel reply</a></small></h3>
                                                                                <p class="must-log-in">
                                                                                    You must be <a href="#">logged in</a> to post a review.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="share_wrapper">
                                                <span class='st_facebook_vcount' displayText='Facebook'></span><span class='st_twitter_vcount' displayText='Tweet'></span><span class='st_pinterest_vcount' displayText='Pinterest'></span>
                                                <script src="file:///Macintosh HD/Users/alegzandra/Desktop/w.sharethis.com/button/buttons.js"></script>
                                                <script>
                                                    stLight.options({
                                                        publisher: "1390eb48-c3c3-409a-903a-ca202d50de91",
                                                        doNotHash: false,
                                                        doNotCopy: false,
                                                        hashAddressBar: false
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="related products">
                                            <h2>Related Products</h2>
                                            <div class="products_wrapper isotope_wrapper">
                                                <ul class="products ">
                                                    <li class="isotope-item post-76 product type-product has-post-thumbnail product_cat-eye-vision product_cat-weight-loss first instock shipping-taxable purchasable product-type-simple">
                                                        <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="image_wrapper">
                                                                <a href="product.html">
                                                                    <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product2-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product2" />
                                                                </a>
                                                                <div class="image_links double">
                                                                    <a rel="nofollow" href="product.html" data-quantity="1" data-product_id="76" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product.html"><i class="icon-link"></i></a>
                                                                </div>
                                                            </div><a href="product.html"><span class="product-loading-icon added-cart"></span></a>
                                                        </div>
                                                        <div class="desc">
                                                            <h4><a href="product.html">Cras mauris</a></h4>
                                                            <div class="star-rating" title="Rated 4 out of 5">
                                                                <span style="width:80%"><strong class="rating">4</strong> out of 5</span>
                                                            </div>
                                                            <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="isotope-item post-79 product type-product has-post-thumbnail product_cat-hair-health product_cat-nervous-system  instock shipping-taxable purchasable product-type-simple">
                                                        <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="image_wrapper">
                                                                <a href="product.html">
                                                                    <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product1-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product1" />
                                                                </a>
                                                                <div class="image_links double">
                                                                    <a rel="nofollow" href="product.html" data-quantity="1" data-product_id="79" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product.html"><i class="icon-link"></i></a>
                                                                </div>
                                                            </div><a href="product.html"><span class="product-loading-icon added-cart"></span></a>
                                                        </div>
                                                        <div class="desc">
                                                            <h4><a href="product.html">Nullam euismod</a></h4><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="isotope-item post-87 product type-product has-post-thumbnail product_cat-nervous-system product_cat-weight-loss  instock featured downloadable shipping-taxable purchasable product-type-simple">
                                                        <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="image_wrapper">
                                                                <a href="product.html">
                                                                    <div class="mask"></div><img width="600" height="600" src="../content/herbal/images/home_herbal_product4-600x600.jpg" class="scale-with-grid wp-post-image" alt="home_herbal_product4" />
                                                                </a>
                                                                <div class="image_links double">
                                                                    <a rel="nofollow" href="product.html" data-quantity="1" data-product_id="87" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="product.html"><i class="icon-link"></i></a>
                                                                </div>
                                                            </div><a href="product.html"><span class="product-loading-icon added-cart"></span></a>
                                                        </div>
                                                        <div class="desc">
                                                            <h4><a href="product.html">Cras in dictum</a></h4>
                                                            <div class="star-rating" title="Rated 4 out of 5">
                                                                <span style="width:80%"><strong class="rating">4</strong> out of 5</span>
                                                            </div>
                                                            <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>9.00</span>
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
            </div>
        </div>
       @endsection