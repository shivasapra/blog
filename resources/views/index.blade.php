@extends('layouts.frontend')
@section('content')
    
    <div class="header-spacer"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <article class="hentry post post-standard has-post-thumbnail sticky">
                        <div class="post-thumb">
                            <img src="{{$first->featured}}" alt="seo">
                            <div class="overlay"></div>
                            <a href="{{$first->featured}}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title text-center">
                                        <a href="{{route('post.single',['slug'=>$first->slug])}}">{{$first->title}}</a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$first->created_at}}
                                            </time>

                                        </span>

                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="{{route('category.single',['id'=>$first->category->id])}}">{{$first->category->name}}</a>
                                        </span>

                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                                    </div>
                            </div>
                        </div>
                </article>
            </div>
            <div class="col-lg-2"></div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{$second->featured}}" alt="seo">
                            <div class="overlay"></div>
                            <a href="{{$second->featured}}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title text-center">
                                        <a href="{{route('post.single',['slug'=>$second->slug])}}">{{$second->title}}</a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$second->created_at}}
                                            </time>

                                        </span>

                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="{{route('category.single',['id'=>$second->category->id])}}">{{$second->category->name}}</a>
                                        </span>

                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                                    </div>
                            </div>
                        </div>

                </article>
            </div>
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{$third->featured}}" alt="seo">
                            <div class="overlay"></div>
                            <a href="{{$third->featured}}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title text-center">
                                        <a href="{{route('post.single',['slug'=>$third->slug])}}">{{$third->title}}</a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$third->created_at}}
                                            </time>

                                        </span>

                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="{{route('category.single',['id'=>$third->category->id])}}">{{$third->category->name}}</a>
                                        </span>

                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                                    </div>
                            </div>
                        </div>

                </article>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="col-lg-12">
                    @foreach($categories->take(3) as $category)
                        @if($category->posts()->count() >= 3)
                            <div class="offers">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <div class="heading">
                                            <h4 class="h1 heading-title">{{$category->name}}</h4>
                                            <div class="heading-line">
                                                <span class="short-line"></span>
                                                <span class="long-line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($category->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
                                        <div class="case-item-wrap">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="case-item">
                                                    <div class="case-item__thumb">
                                                        <img src="{{$post->featured}}" alt="our case">
                                                    </div>
                                                    <h6 class="case-item__title"><a href="{{route('post.single',['slug'=>$post->slug])}}">{{$post->title}}</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="padded-50"></div>
                        @elseif($category->posts()->count() > 0)
                            <div class="offers">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <div class="heading">
                                            <h4 class="h1 heading-title">{{$category->name}}</h4>
                                            <div class="heading-line">
                                                <span class="short-line"></span>
                                                <span class="long-line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($category->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
                                        <div class="case-item-wrap">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="case-item">
                                                    <div class="case-item__thumb">
                                                        <img src="{{$post->featured}}" alt="our case">
                                                    </div>
                                                    <h6 class="case-item__title"><a href="{{route('post.single',['slug'=>$post->slug])}}">{{$post->title}}</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="padded-50"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop