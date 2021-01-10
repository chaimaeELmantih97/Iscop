@extends('frontend.layouts.master')

@section('title','ISCOP - Blog')

@section('main-content')

<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Blog</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">ACCUEIL</a>
                        </li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-page-area sec-spacer">
    <div class="container">
        @foreach($posts as $post)
        <div class="row mb-50 blog-inner">
            <div class="col-lg-6 col-md-12">
                <div class="blog-images">
                    <a href="{{route('blog.detail',$post->slug)}}"><i class="fa fa-link" aria-hidden="true"></i> <img
                            src="{{$post->photo}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="blog-content">
                    <div class="date">
                        <i class="fa fa-calendar-check-o"></i>
                        @php
                        setlocale(LC_TIME,'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
                        $date = strftime('Le %d %B, %Y', strtotime($post->created_at));
                        @endphp
                        {{$date}}
                    </div>
                    <h4><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h4>
                    <ul class="blog-meta">
                        <li class="time"><a href="#"><i class="fa fa-user-o"></i>
                                @php
                                $author_info=DB::table('users')->select('name')->where('id',$post->added_by)->get();
                                @endphp
                                @foreach($author_info as $data)
                                Par
                                @if($data->name)
                                {{$data->name}}
                                @else
                                Anonyme
                                @endif
                                @endforeach</a></li>
                    </ul>
                    <p>{!! html_entity_decode($post->summary) !!}</p>
                    <a class="primary-btn" href="{{route('blog.detail',$post->slug)}}">Savoir Plus</a>
                </div>
            </div>
        </div><!-- .blog-inner end -->
        @endforeach
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <nav aria-label="Page navigation example">
                    {{-- <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link dotted" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
                    </ul> --}}
                    {{$posts->appends($_GET)->links()}}
                </nav><!-- .navigation end -->
            </div>
        </div>
    </div>
</div>

@endsection
@push('styles')
<style>
    .pagination {
        display: inline-flex;
    }

</style>

@endpush
