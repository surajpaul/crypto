@extends('layouts.backend.app')

@section('content')

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div><br/>
@endif
@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
<style>
  th{
    font-size: 13px !important;
    font-weight: bold !important;
    color: #6bb51e;
  }
  td{
    font-size: 13px !important;
  }
  button{
    border: none;
    background: transparent;
  }
</style>
@if($banners->count())
<div class="table-responsive px-3 pb-5">
 <table class="table table-striped">
    <thead>
        <tr>
          <th>S. no</th>
          <th>Desktop Banner preview</th>
          <th>Mobile Banner preview</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
    </thead>
    <tbody>
      @foreach($banners as $index => $banner)
      <tr>
        <th>{{$index+1}}.</th>
        <td><img src="{{env('image_url')}}/banner/{{$banner->image}}" width="200px"></td>
        <td><img src="{{env('image_url')}}/banner/{{$banner->mobile_banner}}" width="120px"></td>
        <td>
          <a href="{{ route('admin.banner.edit',$banner->id)}}">
            <i class="material-icons">edit</i>
          </a>
        </td>
        <td>
          <form action="{{ route('admin.banner.destroy', $banner->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="" type="submit"><i class="material-icons">delete</i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@else
<h3 class="bold text-dark" align="center">Add Banners</h3>
@endif

<div align="right" style="position: fixed;bottom: 30px;right: 30px;">
  <a href="{{ route('admin.banner.create')}}">
    <button class="btn px-5 pt-3" style="background: #1d1b27;color:#fff;">Add banner 
      <img class="pl-3" src="{{ asset('assets/backend/images/right-arrow.png') }}">
    </button>
  </a>
</div>
@endsection