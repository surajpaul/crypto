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
    <h3 class="heading">Edit new</h3>
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
      <form method="post" action="{{ route('admin.studioEquipmentHardwareImage.update', $studioEquipmentHardwareImage->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <label class="text-dark" for="image">Upload Image (307 x 244)px:</label>
        <div class="form-group input-group">
          <label class="text-dark" for="image">Upload Image:</label>
          <input type="file" class="form-control imgInp custom-file-input" name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"/>
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          <div class="row">
            <div class="col-md-3" id="img_contain">
              <img id="previewImage" align='middle' src="{{env('image_url')}}/studioEquipment/{{$studioEquipmentHardwareImage->image}}" width="200px"  class="pt-3"/>
            </div>
          </div>
          <input type="hidden" name="hidden_image" value="{{ $studioEquipmentHardwareImage->image }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Content</button>
      </form>
  </div>
</div>
@endsection
