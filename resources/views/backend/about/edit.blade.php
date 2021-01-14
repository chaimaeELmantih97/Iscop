@extends('backend.layouts.master')
@section('title','ISCOP SUP - Modifier la page d\'à propos')
@section('main-content')

<div class="card">
    <h5 class="card-header">Modifier la page de <b>À propos</b></h5>
    <div class="card-body">
      <form method="post" action="{{route('about.update',$about->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Titre <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Entrer le titre"  value="{{$about->title}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputSummary" class="col-form-label">Brève Description</label>
          <textarea class="form-control" id="inputSummary" name="summary" rows="5">{{$about->summary}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Description</label>
          <textarea class="form-control" id="inputDesc" name="description" rows="5">{{$about->description}}</textarea>
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
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$about->photo}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Mis à jour</button>
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

      $(document).ready(function() {
        $('#inputDesc').summernote({
          placeholder: "Write detail description.....",
            tabsize: 2,
            height: 150
        });
      });
  </script>
@endpush