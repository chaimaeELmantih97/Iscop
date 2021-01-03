@extends('backend.layouts.master')
@section('title','Beauty Design - Ajouter un Service')
@section('main-content')

<div class="card">
    <h5 class="card-header">Ajouter un Témoignage</h5>
    <div class="card-body">
      <form method="post" action="{{route('testimonial.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Nom <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="name" placeholder="Entrer le Nom"  value="{{old('name')}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTag" class="col-form-label">Poste <span class="text-danger">*</span></label>
          <input id="inputTag" type="text" name="job" placeholder="Entrer le Poste"  value="{{old('job')}}" class="form-control">
        @error('job')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputDescription" class="col-form-label">Description <span class="text-danger">*</span></label>
          <textarea id="inputDescription" name="description" placeholder="Entrer la description" class="form-control">{{old('description')}}</textarea>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choisir
                  </a>
              </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush