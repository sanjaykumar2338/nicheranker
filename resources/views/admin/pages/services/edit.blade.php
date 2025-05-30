@extends('admin.layout.main')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Service</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      
      @if ($errors->any())
          <div class="alert alert-danger w-100">
              <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <div class="col-md-12">
        <form method="post" action="{{ url('/admin/services/update/' . $service->id) }}">
          @csrf
          <div class="mb-3 mt-3">
            <label for="title">Title:</label>
            <input type="text" value="{{ $service->title }}" class="form-control" id="title" placeholder="Enter Title" name="title">
          </div>

          <div class="mb-3 mt-3">
            <label for="description">Description:</label>
            <textarea name="description" rows="5" id="description" class="form-control" placeholder="Enter Description">{{ $service->description }}</textarea>
          </div>

          <div class="mb-3 mt-3">
            <label for="meta_title">Meta Title:</label>
            <input type="text" value="{{ $service->meta_title }}" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title">
          </div>

          <div class="mb-3 mt-3">
            <label for="meta_keywords">Meta Keywords:</label>
            <input type="text" value="{{ $service->meta_keywords }}" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter Meta Keywords">
          </div>

          <div class="mb-3 mt-3">
            <label for="meta_description">Meta Description:</label>
            <textarea name="meta_description" class="form-control" rows="3" id="meta_description" placeholder="Enter Meta Description">{{ $service->meta_description }}</textarea>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
    <br>
  </div>
</section>

@endsection
