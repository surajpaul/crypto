@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher | About Us</title>
@endsection

@section('css')
<style type="text/css">
    .my-5{
        margin-top: 4rem!important;
        margin-bottom: 3rem!important;
    }
    .about-see-more img{
        padding-bottom: 1.4px;
        width: 24px;
        margin-top: -3px;
    }
    .about-see-more span{
        font-size: 13px;
    }
    .font-1vw{
        font-size: 1vw;
    }
</style>
@endsection

@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0 pb-4">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title">SUCCESS STORIES</h6>
            <h4 class="font-black text-black font-35 marT-10">Few Words From The Pros</h4>
        </div>
        <!-- content -->
        @if($pros->count())
        <div class="row px-3" style="margin-bottom: -33px;">
            @foreach($pros as $index => $row)
            <div class="col-md-4 my-5">
                <div class="slider-header bg-theme" align="center">
                    <img src="{{env('image_url')}}/pros/{{$row->image}}" width="55%" class="mx-auto d-block p-1 bg-theme shadow-round mar-T-26">
                    <h6 class="font-bold font-1vw text-dark pt-4">{{$row->name}}</h6>
                    <div class="about-title px-1 pt-2 bold" style="min-height: 14vh;">{!! \Illuminate\Support\Str::limit($row->brief, 500, $end='...') !!}</div>
                    <div class="py-2 bold about-symbol"><i>"</i></div>
                    <div class="about-desc px-4 pb-2" style="min-height: 5vh;"><i>{!! \Illuminate\Support\Str::limit($row->description, 110, $end='...') !!}</i></div>
                    <div class="my-2 px-3">
                        <a data-toggle="modal" data-target="#myModal{{$index+1}}">
                            <div class="about-see-more w-100 font-regular bold pt-2">
                              <img src="{{ asset('assets/frontend/img/wallpaper.svg') }}" class="" width="20px">
                              <span class="pl-1"> See More</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        @endif
    </section>
</div>

<!-- modal -->
@foreach($pros as $index => $row)
<div class="modal fade" id="myModal{{$index+1}}" role="dialog" style="z-index: 9999;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h1 class="font-regular bold font-13 text-dark">{{$row->name}}</h1>
                <h6 class="font-regular font-14 text-dark text-justify" style="transform: initial;">
                    {!!$row->description!!}
                </h6>
                <h6 class="font-regular font-14 text-dark text-justify">
                    {!!$row->workings!!}
                </h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('script')
@endsection