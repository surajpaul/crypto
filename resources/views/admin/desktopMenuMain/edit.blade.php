@extends('layouts.backend.app')

@section('content')
<style>
  .card-body{
    padding: 40px;
  }
  .form-control{
    border-bottom: 1px solid #888 !important;
  }
  .heading{
    color: #333;padding-top: 0px;text-align: center;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h3 class="heading">Edit Desktop Main Menu</h3>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('admin.desktopMenuMain.update', $desktopMenuMain->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
		  <input type="hidden" class="form-control" name="desktop_menu_section_id" value="{{ $desktopMenuMain->desktop_menu_section_id }}"/>
		</div>

        <div class="form-group">
		  <label class="text-dark" for="slug">Slug :</label>
		  <input type="text" class="form-control" name="slug" value="{{ $desktopMenuMain->slug }}"/>
		</div>

		<div class="form-group">
		  <label class="text-dark" for="sort_by">Sort By. :</label>
		  <input type="text" class="form-control" name="sort_by" value="{{ $desktopMenuMain->sort_by }}"/>
		</div>

		<div class="form-group">
          <label class="text-dark" for="name">Main Menu Name :</label>
          <input type="text" class="form-control" name="name" value="{{ $desktopMenuMain->name }}"/>
      	</div>

      	<div class="form-group">
          <label class="text-dark" for="url">url :</label>
          <input type="text" class="form-control" name="url" value="{{ $desktopMenuMain->url }}"/>
      	</div>

      	<div class="form-group">
	        <label class="text-dark" for="desktop_menu_section_id">Select Section :</label>
	        <select class="form-control" name="desktop_menu_section_id">
	          	@foreach($section as $index => $menu)
	          	<?php
		            $selected = '';
		            if($menu->section_id == $desktopMenuMain->desktop_menu_section_id)
		            { $selected = 'selected="selected"';}
		        ?>
		        <option value='{{ $menu->section_id }}' {{$selected}} >Section{{$menu->section_id}}</option>
	          	@endforeach
	        </select>
	    </div>

        <button type="submit" class="btn btn-primary">Update Main Menu</button>
      </form>
  </div>
</div>
@endsection
