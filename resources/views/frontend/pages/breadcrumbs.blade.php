@php
		$settings=DB::table('settings')->get();
	@endphp
    @php
    $lastformation2=App\Models\Category::where('is_parent',1)->limit(1)->latest()->get();
    $lastformation=$lastformation2[0];
    $lastpub2=App\Models\Post::limit(1)->latest()->get();
    $lastpub=$lastpub2[0];
    @endphp
    <!-- start page-title -->
    <div id="rs-slider" class="slider-section4 slider-overlay-2">
        <div id="home-slider">
            <!-- Item 1 -->
            <div class="item active">
                <img src="{{url('bgs/bgslider.png')}}" alt="Slide1" />
                <div class="slide-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <p>Voici la dernière formation ajoutée à notre site web</p>
                                <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">
                                    {{ $lastformation->title }}</h1>
                                <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">{{ $lastformation->summary }}</p>
                                <a href="{{route('product-detail',$lastformation->slug)}}" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn" data-animation-out="animate-out">Savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="item">
                <img src="{{url('bgs/bgslider.png')}}" alt="Slide2" />
                <div class="slide-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <p>Voici la dernière publication ajoutée à notre site web</p>
                                <h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">{{$lastpub->title}}</h1>
                                <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">{!! $lastpub->summary !!}</p>
                                <a href="{{route('blog.detail',$lastpub->slug)}}" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">Savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end page-title -->

