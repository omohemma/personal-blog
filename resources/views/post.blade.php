@extends('layouts.master')

@section('content')

<!-- Main of the page -->
<main id="main" role="main">
    <!-- Page Head of the page -->
    <header class="page-head wow fadeInUp" data-wow-delay="0.6s"
            style="background-image: url(http://placehold.it/1920x200);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>{{$post->title}}</h1>
                    <ol class="breadcrumb">
                        <li><a href="home.html">Home</a></li>
                        <li class="active">Single Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Head of the page end -->
    <!-- Container of the page -->
    <div class="container">
        <div class="row">
            <!-- Content of the page -->
            <article id="content" class="col-xs-12 col-md-8">
                <!-- Post Block of the page -->
                <div class="post-block single-post wow fadeInUp" data-wow-delay="0.4s">
                    <div class="post-holder">
                        <div class="img-holder">
                            <img src="http://placehold.it/720x435" alt="image description">
                        </div>
                        <time datetime="2011-01-12"><a href="#">{{date_format($post->created_at,'F d, Y')}} - Travel</a></time>
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->content}}</p>

                        <footer>
                            <strong class="text"><span class="icon ico-user"></span><a href="#">{{$post->user->name}}</a></strong>
                            <strong class="text comment-count"><span class="icon ico-comment"></span><a href="#">{{$post->comments->count()}}
                                    comments</a></strong>
                            <strong class="text"><span class="icon ico-tag"></span>Tag: <a href="#">travel.</a> <a
                                        href="#">life</a>, <a href="#">enjoy</a></strong>
                            <strong class="text share-count"><span class="icon ico-share"></span><a href="#">138
                                    shares</a></strong>
                        </footer>
                    </div>
                </div>
                <!-- Post Block of the page end -->
                <!-- Widget of the page -->
                <div class="widget widget-block wow fadeInUp" data-wow-delay="0.4s">
                    <div class="alignleft">
                        <a href="#"><img src="http://placehold.it/135x135" alt="David Ramon"></a>
                    </div>
                    <div class="text-holder">
                        <header>
                            <h2><a href="#">David Ramon</a></h2>
                            <span class="subtitle"><a href="#">www.davidramon.com</a></span>
                        </header>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent.</p>
                        <!-- Social Network of the page -->
                        <ul class="social-networks">
                            <li><a href="#"><span class="ico-facebook"></span></a></li>
                            <li><a href="#"><span class="ico-twitter"></span></a></li>
                            <li><a href="#"><span class="ico-google-plus"></span></a></li>
                            <li><a href="#"><span class="ico-linkedin"></span></a></li>
                            <li><a href="#"><span class="ico-pinterest"></span></a></li>
                        </ul>
                        <!-- Social Network of the page end -->
                    </div>
                </div>
                <!-- Widget of the page end -->
                <!-- Post Block of the page -->
                <section class="posts-blocks extra wow fadeInUp" data-wow-delay="0.4s">
                    <header class="header">
                        <h2>Related Posts</h2>
                        <p>You may like these post too</p>
                    </header>
                    <div class="post-block single-post-block">
                        <div class="post-holder">
                            <div class="img-holder">
                                <a href="single-postv2.html"><img alt="image description"
                                                                  src="http://placehold.it/370x240"></a>
                            </div>
                            <time datetime="2011-01-12"><a href="#">25th May - Travel</a></time>
                            <h2><a href="#">Traveling is awesome if you can enjoy.</a></h2>
                        </div>
                    </div>
                    <div class="post-block single-post-block">
                        <div class="post-holder">
                            <div class="img-holder">
                                <a href="single-postv2.html"><img alt="image description"
                                                                  src="http://placehold.it/370x240"></a>
                            </div>
                            <time datetime="2011-01-12"><a href="#">25th May - Travel</a></time>
                            <h2><a href="#">Traveling is awesome if you can enjoy.</a></h2>
                        </div>
                    </div>
                </section>
                <!-- Post Block of the page end -->
                <!-- Comment of the page -->
                <section class="section comments wow fadeInUp" data-wow-delay="0.4s">
                    <header class="header">
                        <h2>Comments on this post</h2>
                        <p>{{$post->comments->count()}} comment(s)</p>
                    </header>
                    <!-- Comment list of the page -->
                    <div class="commentlist">
                        @foreach($post->comments as $comment)
                        <!-- Comment list item of the page -->
                        <div class="commentlist-item">
                            <div class="comment even thread-even depth-1" id="comment-1">
                                <div class="avatar-holder">
                                    <img alt="image description" src="http://placehold.it/50x50"
                                         class="avatar avatar-48 photo avatar-default">
                                </div>
                                <div class="commentlist-holder">
                                    <p class="meta">
                                        <strong class="name"><a href="#">{{$comment->user->name}}</a></strong>
                                        <a href="#">
                                            <time datetime="2011-01-12">2 hours ago</time>
                                        </a>
                                    </p>
                                    <p>{{$comment->content}}</p>
                                    <p><a class="comment-reply-link"
                                          href="https://flow-attachments.s3.amazonaws.com/?p=1&amp;replytocom=1#respond"
                                          onclick="return addComment.moveForm(&quot;comment-1&quot;, &quot;1&quot;, &quot;respond&quot;, &quot;1&quot;)">REPLY</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Comment list item of the page end -->
                    </div>
                </section>
                <!-- Comment of the page end -->
                <!-- Comment Respond of the page -->
                <section class="comment-respond wow fadeInUp" data-wow-delay="0.4s">
                    <header class="header">
                        <h3 id="reply-title" class="comment-reply-title">Leave a comment</h3>
                        <p>it’s easy to post a comment</p>
                    </header>
                    <form action="http://twitter.staging.com/wp-comments-post.php" method="post" id="commentform"
                          class="comment-form">
                        <div class="wrap">
                            <div class="comment-form-author">
                                <label for="author">Your name <span class="required">*</span></label>
                                <input type="text" id="author" name="author" size="30" aria-required="true"
                                       placeholder="enter your name here">
                            </div>
                            <div class="comment-form-email">
                                <label for="email">Email address <span class="required">*</span></label>
                                <input type="text" id="email" name="email" size="30" aria-required="true"
                                       placeholder="enter your email address">
                            </div>
                        </div>
                        <div class="comment-form-url hidden"><label for="url">Website</label> <input type="text"
                                                                                                     id="url" name="url"
                                                                                                     size="30"></div>
                        <div class="comment-form-comment">
                            <label for="comment">Comment <span class="required">*</span></label>
                            <textarea id="comment" name="comment" rows="3" cols="72" aria-required="true"
                                      placeholder="your comment here"></textarea>
                        </div>
                        <p class="form-allowed-tags hidden">You may use these <abbr title="HyperText Markup Language">HTML</abbr>
                            tags and attributes: <code>&lt;a
                                href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt;
                                &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del
                                datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt;
                                &lt;strong&gt; </code></p>
                        <div class="form-submit">
                            <input type="submit" name="submit" id="submit" value="Leave a comment">
                            <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                        </div>
                    </form>
                </section>
                <!-- Comment Respond of the page end -->
            </article>
            <!-- Content of the page end -->
            <!-- Sidebar of the page -->
            <aside id="sidebar" class="col-xs-12 col-md-4">
                <!-- Widget of the page -->
                <section class="widget profile-widget version-ii hidden-sm hidden-xs wow fadeInUp"
                         data-wow-delay="0.4s">
                    <div class="profile-pic">
                        <a href="#">
                            <img src="http://placehold.it/180x180" alt="John Aston">
                        </a>
                    </div>
                    <h3><a href="#"><img src="images/text-jhon-aston.png" alt="jhon aston"></a></h3>
                    <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole
                        consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
                    <!-- Social Network of the page -->
                    <ul class="social-networks">
                        <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                        <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                        <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                        <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon ico-pinterest"></span></a></li>
                    </ul>
                    <!-- Social Network of the page -->
                </section>
                <!-- Widget of the page end -->
                <!-- Widget of the page -->
                <div class="widget widget_search hidden-sm hidden-xs wow fadeInUp" data-wow-delay="0.4s">
                    <form method="get" class="search-form" action="#">
                        <fieldset>
                            <input type="search" name="s" placeholder="Type to search here">
                            <button type="button" class="ico-search"></button>
                        </fieldset>
                    </form>
                </div>
                <!-- Widget of the page end -->
                <!-- Widget of the page -->
                <section class="widget recent-posts-widget version-ii wow fadeInUp" data-wow-delay="0.4s">
                    <header class="tab-head">
                        <h3><a class="active" href="#tab1">Recent Posts</a></h3>
                        <h3><a href="#tab2">Popular Posts</a></h3>
                    </header>
                    <div class="tab-content">
                        <div id="tab1">
                            <ul>
                                <li>
                                    <div class="alignleft">
                                        <img src="http://placehold.it/75x75" alt="image description">
                                    </div>
                                    <div class="descr">
                                        <h4><a href="single-post.html">Traveling is awesome if you <br>can enjoy.</a>
                                        </h4>
                                        <span class="post-tag">
														<time datetime="2011-01-12"><a href="#">25th may</a></time>
													</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="alignleft">
                                        <img src="http://placehold.it/75x75" alt="image description">
                                    </div>
                                    <div class="descr">
                                        <h4><a href="single-post.html">I get up in the morning looking <br>for an
                                                adventure.</a></h4>
                                        <span class="post-tag">
														<time datetime="2011-01-12"><a href="#">25th may</a></time>
													</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="alignleft">
                                        <img src="http://placehold.it/75x75" alt="image description">
                                    </div>
                                    <div class="descr">
                                        <h4><a href="single-post.html">Holiday is awesome when loved <br>one beside me.</a>
                                        </h4>
                                        <span class="post-tag">
														<time datetime="2011-01-12"><a href="#">25th may</a></time>
													</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab2">
                            <ul>
                                <li>
                                    <div class="alignleft">
                                        <img src="http://placehold.it/75x75" alt="image description">
                                    </div>
                                    <div class="descr">
                                        <h4><a href="single-post.html">Holiday is awesome when loved <br>one beside me.</a>
                                        </h4>
                                        <span class="post-tag">
														<time datetime="2011-01-12"><a href="#">25th may</a></time>
													</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="alignleft">
                                        <img src="http://placehold.it/75x75" alt="image description">
                                    </div>
                                    <div class="descr">
                                        <h4><a href="single-post.html">Traveling is awesome if you <br>can enjoy.</a>
                                        </h4>
                                        <span class="post-tag">
														<time datetime="2011-01-12"><a href="#">25th may</a></time>
													</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="alignleft">
                                        <img src="http://placehold.it/75x75" alt="image description">
                                    </div>
                                    <div class="descr">
                                        <h4><a href="single-post.html">I get up in the morning looking <br>for an
                                                adventure.</a></h4>
                                        <span class="post-tag">
														<time datetime="2011-01-12"><a href="#">25th may</a></time>
													</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- Widget of the page end -->
                <!-- Widget of the page -->
                <div class="widget promo-widget wow fadeInUp" data-wow-delay="0.4s">
                    <a href="#"><img src="http://placehold.it/370x415" alt="“Place your Advertisement here”"></a>
                </div>
                <!-- Widget of the page end -->
                <!-- Widget of the page -->
                <div class="widget widget_categories version-ii wow fadeInUp" data-wow-delay="0.4s">
                    <header class="widget-head">
                        <h3>Category</h3>
                    </header>
                    <ul>
                        <li class="cat-item cat-item-1"><span><a href="#">- Lifestyle</a></span><span><a href="#">- Lifestyle</a></span>
                        </li>
                        <li class="cat-item cat-item-1"><span><a href="#">- Movie</a></span><span><a
                                        href="#">- Movie</a></span></li>
                        <li class="cat-item cat-item-1"><span><a href="#">- Travel</a></span><span><a
                                        href="#">- Travel</a></span></li>
                        <li class="cat-item cat-item-1"><span><a href="#">- Sports</a></span><span><a
                                        href="#">- Sports</a></span></li>
                        <li class="cat-item cat-item-1"><span><a href="#">- Music</a></span><span><a
                                        href="#">- Music</a></span></li>
                    </ul>
                </div>
                <!-- Widget of the page end -->
            </aside>
            <!-- Sidebar of the page end -->
        </div>
    </div>
    <!-- Instagram Slider of the page -->
    <div class="instagram-slider version-ii container-fluid">
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
<!-- Main of the page end -->


@endsection






