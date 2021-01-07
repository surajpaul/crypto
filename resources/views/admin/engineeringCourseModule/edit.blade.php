@extends('layouts.backend.app')

@section('title','dashboard')

@push('css')
@endpush

@section('content')
<style>
  .card-body{
    padding: 40px;
  }
  .form-control{
    border-bottom: 1px solid #888 !important;
  }
  .heading{
    color: #6bb51e;padding-top: 0px;text-align: center;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h3 class="heading">Edit Module</h3>
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
      <form method="post" action="{{ route('admin.engineeringCourseModule.update', $engineeringCourseModule->id) }}" enctype="multipart/form-data">
          @method('PATCH')
          @csrf
          <div class="form-group">
              <label class="text-dark" for="heading">Heading :</label>
              <input type="text" class="form-control" name="heading" value="{{$engineeringCourseModule->heading}}" />
          </div>

          <div class="form-group">
            <label class="text-dark" for="content">Content :</label>
            <textarea id="summernote" class="form-control" name="content" value="{{ $engineeringCourseModule->content }}">{{ $engineeringCourseModule->content }}</textarea>
          </div>

          <div class="form-group">
              <label class="text-dark" for="icon">Icon:</label>
              <input type="file" class="form-control" name="icon"/>
              <input type="hidden" name="hidden_icon" value="{{ $engineeringCourseModule->icon }}">
          </div>

          <div class="form-group">
              <label class="text-dark" for="image">Image:</label>
              <input type="file" class="form-control" name="image"/>
              <input type="hidden" name="hidden_image" value="{{ $engineeringCourseModule->image }}">
          </div>
          
          <button type="submit" class="btn btn-primary">Edit Module</button>
      </form>
  </div>
</div>

<script>
  $('#summernote').summernote({
    placeholder: 'Add Content',
    tabsize: 2,
    height: 150,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>
@endsection
