@extends('layouts.header')

@section('content')
<div id="Subheader" style="padding:100px 0;">
    <div class="container">
        <div class="column one">
            <h1 class="title">Contact us</h1>
        </div>
    </div>
</div>
</div>
<div id="Content">
<div class="content_wrapper clearfix">
    <div class="sections_group">
        <div class="entry-content">
            <div class="section mcb-section" style="padding-top:0px; padding-bottom:40px;">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one  valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_image ">
                                <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid" src="images/home_herbal_pic5.png" alt="home_herbal_pic5" width="278" height="154" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one  valign-top clearfix" style="padding:40px 0 0">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one-third column_column ">
                                <div class="column_attr clearfix align_center" style=" padding:40px 5% 0;">
                                    <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="images/home_herbal_logo_small.png" alt="home_herbal_logo_small" width="84" height="34" />
                                        </div>
                                    </div>
                                    <hr class="no_line" style="margin: 0 auto 10px;" />
                                    <h2 style="margin-bottom: 4px;">Herbal</h2>
                                    <h5>Original natural herbs</h5>
                                    <hr class="no_line" style="margin: 0 auto 25px;" />
                                    <p>
                                        Suspendisse justo euismod venenatis convallis aliquam blandit tempus vitae pede.
                                    </p>
                                    <h6>Level 13, 2 Elizabeth St,
                                        <br>
                                        Melbourne, Victoria 3000
                                        <br>
                                        Australia</h6>
                                </div>
                            </div>
                            <div class="column mcb-column two-third column_map ">

                                <div class="google-map-wrapper no_border">
                                    <div class="google-map" id="google-map-area-5800b0d195498" style="width:100%; height:400px;">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one column_divider ">
                                <hr class="no_line" style="margin: 0 auto 40px;" />
                            </div>
                            <div class="column mcb-column one column_column ">
                                <div class="column_attr clearfix align_center" style=" padding:50px 30px 35px; border: 1px solid #c4ccc0;">
                                    <h4>Cum sociis natoque penatibus <span class="themecolor">+61 (0) 3 8376 6284</span> cursus vitae facilisis sagittis</h4>
                                </div>
                            </div>
                            <div class="column mcb-column one column_divider ">
                                <hr class="no_line" style="margin: 0 auto 40px;" />
                            </div>
                            <div class="column mcb-column two-third column_column ">
                                <div class="column_attr clearfix">
                                    <div role="form" class="wpcf7" id="wpcf7-f140-p18-o1" lang="en-US" dir="ltr">
                                        <div id="contactWrapper">
                                            <form id="contactform">
                                                <div class="column one-second">
                                                    <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one-second">
                                                    <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                </div>
                                                <div class="column one">
                                                    <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one-third column_column ">
                                <div class="column_attr clearfix">
                                    <h4>Etiam fringilla</h4>
                                    <p>
                                        Fusce facilisis diam elit, gravida gravida feugiat in, iaculis ornare. Etiam fringilla gravida. Pellentesque eu lorem. Nam posuere. Quisque vestibulum. Nulla venenatis. Morbi mauris non elit dapibus vitae, quam. Ut lorem. Mauris nec velit magna, fermentum risus.
                                    </p>
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