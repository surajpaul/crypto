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
    <h3 class="heading">Edit studentsWork</h3>
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
      <form method="post" action="{{ route('admin.studentsWork.update', $studentsWork->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
		  <label class="text-dark" for="year">Year :</label>
		  <input type="text" class="form-control" name="year" value="{{ $studentsWork->year }}"/>
		</div>
		<div class="form-group">
		  <label class="text-dark" for="name">Name :</label>
		  <input type="text" class="form-control" name="name" value="{{ $studentsWork->name }}"/>
		</div>
		<div class="form-group">
		  <label class="text-dark" for="speciality">Speciality :</label>
		  <input type="text" class="form-control" name="speciality" value="{{ $studentsWork->speciality }}"/>
		</div>

    	<div class="form-group">
          <label class="text-dark" for="short_desc">Short Description :</label>
          <textarea id="summernote" class="form-control" name="short_desc">{{ $studentsWork->short_desc }}</textarea>
      	</div>
      	<div class="form-group">
          <label class="text-dark" for="student_profile">Profile Description :</label>
          <textarea id="summernote1" class="form-control" name="student_profile">{{ $studentsWork->student_profile }}</textarea>
      	</div>
      	<div class="form-group">
          <label class="text-dark" for="education">Education Description :</label>
          <textarea id="summernote2" class="form-control" name="education">{{ $studentsWork->education }}</textarea>
      	</div>
      	<div class="form-group">
          <label class="text-dark" for="interest">Interest Description :</label>
          <textarea id="summernote3" class="form-control" name="interest">{{ $studentsWork->interest }}</textarea>
      	</div>
      	<div class="form-group">
          <label class="text-dark" for="work_prof">Work Professional Description :</label>
          <textarea id="summernote4" class="form-control" name="work_prof">{{ $studentsWork->work_prof }}</textarea>
      	</div>
      	<div class="form-group">
          <label class="text-dark" for="testimonial">Testimonial :</label>
          <textarea id="summernote5" class="form-control" name="testimonial">{{ $studentsWork->testimonial }}</textarea>
      	</div>

        <label class="text-dark" for="image">Upload Image:(168x168px)</label>
        <div class="form-group input-group">
          <label class="text-dark" for="image">Upload Image:</label>
          <input type="file" class="form-control imgInp custom-file-input" name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"/>
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          <div class="row">
            <div class="col-md-3" id="img_contain">
              <img id="previewImage" align='middle' src="{{env('image_url')}}/work/{{$studentsWork->image}}" width="200px"  class="pt-3"/>
            </div>
          </div>
          <input type="hidden" name="hidden_image" value="{{ $studentsWork->image }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Work</button>
      </form>
  </div>
</div>

<script>
  $('#summernote').summernote({
    placeholder: 'Add Description',
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
  $('#summernote1').summernote({
    placeholder: 'Add Description',
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
  $('#summernote2').summernote({
    placeholder: 'Add Description',
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
  $('#summernote3').summernote({
    placeholder: 'Add Description',
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
  $('#summernote4').summernote({
    placeholder: 'Add Description',
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
  $('#summernote5').summernote({
    placeholder: 'Add Description',
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
