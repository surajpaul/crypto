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
@if($engineeringCourse->count())
<div class="table-responsive px-3 pb-5">
 <table class="table table-striped">
    <thead>
        <tr>
          <th>Sound Engineering Diploma Course</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          @foreach($engineeringCourse as $row)
            <td>{!! $row->content !!}</td>
          @endforeach
        </tr>
    </tbody>
  </table>
</div>

<div align="right" style="position: fixed;bottom: 30px;right: 30px;">
  <a href="{{ route('admin.engineeringCourse.edit',$row->id)}}">
    <button class="btn px-5 pt-3" style="background: #1d1b27;color:#fff;">Edit Automatic Advisory Section 
      <img class="pl-3" src="{{ asset('assets/backend/images/right-arrow.png') }}">
    </button>
  </a>
</div>
@else
<h3 class="bold text-dark" align="center">No Content for automatic advisory calls exist please add some.</h3>
@endif
@endsection
