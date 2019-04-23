@extends('layouts.master')
@section('title') Home | My Personal Blog  @endsection
@section('content')
    <!-- main of the page -->
    <main id="main" role="main">
        <div class="home-box">
            <section class="slideshow">
                <!-- slide of the page -->

                @foreach($posts as $post)
                <div class="slide" style="background-image: url(http://placehold.it/1920x845);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <strong class="title">Lifestyle</strong>
                                        <h1>{{$post->title}}</h1>
                                        <a href="{{route('post',$post->id)}}">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- slide of the page end -->

            </section>
            <!-- switcher of the page -->
            <div class="switcher">
                <div class="center-block">
                    <!-- switcher mask of the page -->
                    <div class="switcher-mask">
                        <!-- switcher slide of the page -->
                        @foreach($posts as $post)
                        <div class="slide">
                            <div class="switcher-slide">
                                <div class="slide-holder">
                                    <div class="img-holder">
                                        <img src="http://placehold.it/230x140" alt="image description">
                                    </div>
                                    <h2><a href="{{route('post',$post->id)}}">{{$post->title}}</a></h2>
                                    <time datetime="2011-01-12"><a href="#">{{date_format($post->created_at,'F d, Y')}}</a></time>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- switcher slide of the page end -->

                    </div>
                    <!-- switcher mask of the page end -->
                </div>
            </div>
            <!-- slide of the page end -->
        </div>
        <!-- twocolumns of the page -->
        <div id="twocolumns">
            <div class="container">
                <div class="row">
                    <!-- Content of the page -->
                    <div id="content" class="col-xs-12 col-md-8">
                        <!-- widget of the page -->
                        <section class="widget profile-widget style1 hidden-md hidden-lg wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="profile-pic">
                                <a href="#">
                                    <img src="http://placehold.it/180x180" alt="John Aston">
                                </a>
                            </div>
                            <h3><a href="#">John Aston</a></h3>
                            <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
                            <!-- Social networks of the page -->
                            <ul class="social-networks justify">
                                <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                                <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                                <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                                <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon ico-pinterest"></span></a></li>
                            </ul>
                            <!-- Social networks of the page end -->
                        </section>
                        <!-- widget of the page end -->
                        <!-- cols holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post wow fadeInLeft" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="single-post.html"><img src="http://placehold.it/370x245" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Travel</a></time>
                                    <h2><a href="single-post.html">I get up in the morning looking for adventure.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="single-post.html" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                            <!-- post of the page -->
                            <article class="post wow fadeInRight" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="single-post.html"><img src="http://placehold.it/370x245" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Travel</a></time>
                                    <h2><a href="single-post.html">Letter from the desk of an unsuccessful designer.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="single-post.html" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- cols holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post fluid text-center wow fadeInUp" data-wow-delay="0.6s">
                                <div class="video-holder">
                                    <a href="https://player.vimeo.com/video/25573104" class="ico-play lightbox fancybox.iframe"></a>
                                    <img src="http://placehold.it/770x380" alt="image description">
                                </div>
                                <div class="text-wrap text-center">
                                    <time datetime="2011-01-12">19th may - <a href="#">lifestyle</a></time>
                                    <h2><a href="single-post.html">Exploring the unknown truth about myself</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  elit, sed diam nonummy nibh euismod tincidunt enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis...</p>
                                    <a href="single-post.html" class="link-more">read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                        </div>
                        <!-- cols-holder of the page end -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post wow fadeInLeft" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="single-post.html"><img src="http://placehold.it/370x245" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Travel</a></time>
                                    <h2><a href="single-post.html">Holiday is awesome when loved one beside me.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="single-post.html" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                            <!-- post of the page -->
                            <article class="post wow fadeInRight" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="single-post.html"><img src="http://placehold.it/370x245" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Life</a></time>
                                    <h2><a href="single-post.html">The bitter truth that you should know.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="single-post.html" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- col holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post fluid text-center wow fadeInUp" data-wow-delay="0.6s">
                                <ul class="list-unstyled carousel">
                                    <li>
                                        <div class="slide">
                                            <img src="http://placehold.it/770x380" alt="image description">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <img src="http://placehold.it/770x380" alt="image description">
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-wrap text-center">
                                    <time datetime="2011-01-12">12th April - <a href="#">World</a></time>
                                    <h2><a href="single-post.html">The unseen beauty of nature.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  elit, sed diam nonummy nibh euismod tincidunt enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis...</p>
                                    <a href="single-post.html" class="link-more">read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- cols holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post wow fadeInLeft" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="single-post.html"><img src="http://placehold.it/370x245" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">25th May - <a href="#">Travel</a></time>
                                    <h2><a href="single-post.html">I get up in the morning looking for adventure.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="single-post.html" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                            <!-- post of the page -->
                            <article class="post wow fadeInRight" data-wow-delay="0.6s">
                                <div class="img-holder"><a href="single-post.html"><img src="http://placehold.it/370x245" alt="image description"></a></div>
                                <div class="text-wrap">
                                    <time datetime="2011-01-12">21st May - <a href="#">Travel</a></time>
                                    <h2><a href="single-post.html">Letter from the desk of an unsuccessful designer.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
                                    <a href="single-post.html" class="link-more">Read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- Navigation of the page -->
                        <nav role="navigation" class="navigation pagination">
                            <div class="nav-links">
                                <a href="#" class="prev page-numbers">Prev post.</a>
                                <a href="#" class="page-numbers">1</a>
                                <span class="page-numbers current">2</span>
                                <span class="page-numbers dots hidden">…</span>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="next page-numbers">NEXT post.</a>
                            </div>
                        </nav>
                        <!-- Navigation of the page end -->
                    </div>
                    <!-- Content of the page end -->
                    <!-- Sidebar of the page -->
                    <aside id="sidebar" class="col-xs-12 col-md-4">
                        <!-- Widget of the page -->
                        <section class="widget profile-widget style1 hidden-sm hidden-xs wow fadeInUp" data-wow-delay="0.6s">
                            <div class="profile-pic">
                                <a href="#">
                                    <img src="http://placehold.it/180x180" alt="John Aston">
                                </a>
                            </div>
                            <h3><a href="#">John Aston</a></h3>
                            <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
                            <!-- Social network of the page -->
                            <ul class="social-networks justify">
                                <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                                <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                                <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                                <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon ico-pinterest"></span></a></li>
                            </ul>
                            <!-- Social network of the page end -->
                        </section>
                        <!-- Widget of the page end -->
                        <!-- Widget of the page -->
                        <section class="widget recent-posts-widget wow fadeInUp" data-wow-delay="0.6s">
                            <header class="widget-head">
                                <h3>Recent Posts</h3>
                                <p>post those are very recent in Dot</p>
                            </header>
                            <ol>
                                <li>
                                    <h4><a href="single-post.html">I get up in the morning looking <br>for an adventure.</a></h4>
                                    <span class="post-tag">
											<time datetime="2011-01-12"><a href="#">25th may</a></time>
											<strong class="tag hot">HOT</strong>
										</span>
                                </li>
                                <li>
                                    <h4><a href="single-post.html">Letter from the desk of an <br>unsuccessful designer.</a></h4>
                                    <span class="post-tag">
											<time datetime="2011-01-12"><a href="#">25th may</a></time>
											<strong class="tag">trending</strong>
										</span>
                                </li>
                                <li>
                                    <h4><a href="single-post.html">Exploring the unknow truth about myself - My Story.</a></h4>
                                    <span class="post-tag">
											<time datetime="2011-01-12"><a href="#">25th may</a></time>
										</span>
                                </li>
                            </ol>
                        </section>
                        <!-- Widget of the page end -->
                        <!-- Widget of the page -->
                        <div class="widget promo-widget wow fadeInUp" data-wow-delay="0.6s">
                            <a href="#"><img src="http://placehold.it/370x415" alt="“Place your Advertisement here”"></a>
                        </div>
                        <!-- Widget of the page end -->
                        <!-- Widget of the page -->
                        <div class="widget widget_categories tabs wow fadeInUp" data-wow-delay="0.6s">
                            <header class="widget-head">
                                <h3>Category</h3>
                                <p>browse all your favourite categories</p>
                            </header>
                            <div class="lists-holder">
                                <ul>
                                    <li class="cat-item cat-item-1"><a href="#">Lifestyle </a> (23)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Movie </a> (02)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Travel </a> (11)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Sports </a> (05)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Music </a> (01)</li>
                                </ul>
                                <ul>
                                    <li class="cat-item cat-item-1"><a href="#">Education </a> (15)</li>
                                    <li class="cat-item cat-item-1"><a href="#">International </a> (09)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Design </a> (26)</li>
                                    <li class="cat-item cat-item-1"><a href="#">News </a> (01)</li>
                                    <li class="cat-item cat-item-1"><a href="#">Review </a> (14)</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Widget of the page end -->
                    </aside>
                    <!-- Sidebar of the page end -->
                </div>
            </div>
        </div>
        <!-- twocolumns of the page end -->
        <!-- Instagram Slider of the page -->
        <div class="instagram-slider container-fluid">
            <div class="row">
                <div class="mask">
                    <div class="slideset">
                        <div class="slide">
                            <a href="#"><img src="http://placehold.it/275x240" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="http://placehold.it/275x240" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="http://placehold.it/275x240" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="http://placehold.it/275x240" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="http://placehold.it/275x240" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="http://placehold.it/275x240" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="http://placehold.it/275x240" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="http://placehold.it/275x240" alt="image description"></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="http://placehold.it/275x240" alt="image description"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slider of the page end -->
    </main>
    <!-- main of the page end -->

@endsection
