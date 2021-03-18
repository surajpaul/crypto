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
@if($desktopMenuSub->count())
<div class="table-responsive px-3 pb-5">
 <table class="table table-striped">
    <thead>
        <tr>
          <th>S. no</th>
          <th>Main menu</th>
          <th>Menu Name</th>
          <th>Sort By</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
    </thead>
    <tbody>
      @foreach($desktopMenuSub as $index => $row)
      <tr>
        <th>{{$index+1}}.</th>
        <td class="bold text-dark bold">
          <?php
            $section = DB::table('desktop_main_menus')->where('id', $row->desktop_main_menu_id)->get();
            foreach ($section as $key => $value) {
              echo $value->name;
            }
          ?>
        </td>
        <td class="bold text-green">{{$row->name}}</td>
        <td class="bold">{{$row->sort_by}}</td>
        <td>
          <a href="{{ route('admin.desktopMenuSub.edit',$row->id)}}">
            <i class="material-icons">edit</i>
          </a>
        </td>
        <td>
          <form action="{{ route('admin.desktopMenuSub.destroy', $row->id)}}" method="post">
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
<h3 class="bold text-dark" align="center">Enter Main desktopMenuSub</h3>
@endif

<div align="right" style="position: fixed;bottom: 30px;right: 30px;">
  <a href="{{ route('admin.desktopMenuSub.create')}}">
    <button class="btn px-5 pt-3" style="background: #1d1b27;color:#fff;">Add new sub menu item 
      <img class="pl-3" src="{{ asset('assets/backend/images/right-arrow.png') }}">
    </button>
  </a>
</div>
@endsection