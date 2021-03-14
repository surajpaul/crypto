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
@if($modules->count())
<div class="table-responsive px-3 pb-5">
 <table class="table table-striped">
    <thead>
        <tr>
          <th>S. no</th>
          <th>Module Name</th>
          <th>Video Containing</th>
          <th>Accessed By</th>
          <th>Edit</th>
        </tr>
    </thead>
    <tbody>
      @foreach($modules as $index => $row)
      <tr>
        <!-- <th>{{$row->videos}}</th> -->
        <th>{{$index+1}}.</th>
        <td class="bold">{{$row->name}}</td>
        <td>{{$row->videos->count()}} Video(s)</td>
        <td><a href="{{route('admin.modules.show', $row->id)}}">Edit Student(s)</a></td>
        <td>
          <a href="{{ route('admin.modules.edit',$row->id)}}">
            <i class="material-icons">edit</i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@else
<h3 class="bold text-dark" align="center">Enter some modules</h3>
@endif

<div align="right" style="position: fixed;bottom: 30px;right: 30px;">
  <a href="{{ route('admin.modules.create')}}">
    <button class="btn px-5 pt-3" style="background: #1d1b27;color:#fff;">Add new Module
      <img class="pl-3" src="{{ asset('assets/backend/images/right-arrow.png') }}">
    </button>
  </a>
</div>
@endsection