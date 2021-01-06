@extends('frontend.layouts.master')

@section('title','Detail de blog')

@section('main-content')
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">{{$post->title}}</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="{{route('home')}}">ACCUEIL</a>
		                        </li>
		                        <li>blog details</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Blog Single Start Here -->
		<div class="single-blog-details sec-spacer">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="single-image">
							<img src="{{$post->photo}}" alt="single">
						</div><!-- .single-image End -->
						<h5 class="top-title">{{$post->title}}</h5>
                        <p>{!!$post->summary!!}</p>
                        @if($post->quote)
						<blockquote>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            {!!$post->quote!!}
                        </blockquote>
                        @endif
                        <p>{!! ($post->description) !!}</p>
                        <div class="share-section">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 life-style">
									<span class="author">
										<a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> {{$post->author_info['name']}} </a>
									</span>
									<span class="date">
										<i class="fa fa-calendar" aria-hidden="true"></i> {{$post->created_at->format('d/m/Y')}}
									</span>
									{{-- <span class="cat">
										<a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> Life Style </a>
									</span> --}}
								</div>
							</div>
						</div><!-- .share-section End -->

					</div>
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            <div class="search-box">
                                <h3 class="title">Rechercher</h3>
                                <div class="box-search">
                                    <form method="GET" action="{{route('blog.search')}}">
                                    <input class="form-control" name="search" class="form-control" placeholder="Rechercher" id="srch-term" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div><!-- .search-box end -->

                            <div class="latest-courses">
                                <h3 class="title">Articles Récents</h3>
                                @foreach($recent_posts as $post)
                                <div class="post-item">
	                                <div class="post-img">
	                                    <a href="{{route('blog.detail',$post->slug)}}"><img src="{{$post->photo}}" style="height: 80px; width: 100%; object-fit: cover;" alt="" title="News image"></a>
	                                </div>
	                                <div class="post-desc">
                                        <h4><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h4>
                                        @php
                                        setlocale(LC_TIME,'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
                                        $date = strftime('Le %d %B, %Y', strtotime($post->created_at));
                                        @endphp
	                                    <span class="duration">
	                                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{$date}}
	                                    </span>
	                                </div>
                                </div><!-- .post-item end -->
                                @endforeach
                            </div>


                        </div><!-- .sidebar-area end -->
                    </div>
				</div>
			</div>
		</div>
		<!-- Blog Single End  -->
@endsection
@push('styles')
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
@endpush
@push('scripts')
<script>

</script>
@endpush
