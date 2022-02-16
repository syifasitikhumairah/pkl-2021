@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="portfolio">

    <div class="section-title">
        <h2>Galeri foto</h2>
    </div>
    <div class="row portfolio-container">
        @foreach ($galeri as $data)
        <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
                <img src="{{ $data->image() }}" class="img-fluid" alt="" style="width:354px; height:250px;">
                <div class="portfolio-info">
                    <h4>{{ $data->judul }}</h4>
                    <div class="portfolio-links">
                        <a href="{{ $data->image() }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="{{ $data->judul }}"><i
                                class="bi bi-arrows-fullscreen"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
