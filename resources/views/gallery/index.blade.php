@extends('layouts.subpages')
@section('content')

<div class="row">
    <div class="portfolio col-2 gutter " style="position: relative; height: 1684.72px;">

        <div class="portfolio-item cat1 cat3 " style="position: absolute; left: 0px; top: 0px;">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/zivotinje/01.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="{{ url('/galleries/animals') }}" class="" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="{{ url('/galleries/animals') }}" class="" title="lightbox view">Zivotinje</a></h4>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat2 cat4" style="position: absolute; left: 554px; top: 0px;">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/koncerti/09.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="#"> <i class="icon-basic_magnifier"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">Koncerti</a></h4>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat1 cat2" style="position: absolute; left: 0px; top: 421px;">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/pejzazi/06.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="#"> <i class="icon-basic_magnifier"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">Pejzazi</a></h4>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat1 cat4" style="position: absolute; left: 554px; top: 421px;">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/family/07.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="#"> <i class="icon-basic_magnifier"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">Family</a></h4>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection