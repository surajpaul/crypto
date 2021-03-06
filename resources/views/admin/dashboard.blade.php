@extends('layouts.backend.app')

@section('content')
<style>
    .decoration-none{
        text-decoration: none !important;
    }
</style>
<div class="row clearfix pt-5">
    <div class="col-lg-3 mb-4 col-md-3 col-sm-6 col-xs-12">
        <a href="{{route('admin.manager.create')}}" class="decoration-none">
            <div class="pb-3 pt-4 px-4 bg-white" style="border-radius: 5px;border: solid 0.5px #d3d2d8;">
                <img src="{{ asset('assets/backend/images/manager.svg') }}" width="35px">
                <h6 class="bold text-dark">Add New Manager</h6>
                <p class="text-dark" style="font-size: 11px;">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
            </div>
        </a>
    </div>
    <div class="col-lg-3 mb-4 col-md-3 col-sm-6 col-xs-12">
        <a href="{{route('admin.faculty.create')}}" class="decoration-none">
            <div class="pb-3 pt-4 px-4 bg-white" style="border-radius: 5px;border: solid 0.5px #d3d2d8;">
                <img src="{{ asset('assets/backend/images/faculty.svg') }}" width="35px">
                <h6 class="bold text-dark">Add New Faculty</h6>
                <p class="text-dark" style="font-size: 11px;">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
            </div>
        </a>
    </div>
    <div class="col-lg-3 mb-4 col-md-3 col-sm-6 col-xs-12">
        <a href="{{route('admin.vacancy.create')}}" class="decoration-none">
            <div class="pb-3 pt-4 px-4 bg-white" style="border-radius: 5px;border: solid 0.5px #d3d2d8;">
                <img src="{{ asset('assets/backend/images/resume.svg') }}" width="35px">
                <h6 class="bold text-dark">Add New Vacancy</h6>
                <p class="text-dark" style="font-size: 11px;">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
            </div>
        </a>
    </div>
    <div class="col-lg-3 mb-4 col-md-3 col-sm-6 col-xs-12">
        <a href="{{route('admin.videos.create')}}" class="decoration-none">
            <div class="pb-3 pt-4 px-4 bg-white" style="border-radius: 5px;border: solid 0.5px #d3d2d8;">
                <img src="{{ asset('assets/backend/images/video.svg') }}" width="35px">
                <h6 class="bold text-dark">Add New Video</h6>
                <p class="text-dark" style="font-size: 11px;">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
            </div>
        </a>
    </div>
</div>
@endsection
