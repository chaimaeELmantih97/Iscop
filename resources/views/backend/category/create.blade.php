@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Ajouter une formation</h5>
    <div class="card-body">
      <form method="post" action="{{route('category.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">titre <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="summary" class="col-form-label">brève description</label>
          <textarea class="form-control" id="summary" name="summary"  placeholder="Rédiger la description principale .....">{{old('summary')}}</textarea>
          @error('summary')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
            <label for="description" class="col-form-label">description</label>
            <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

        <div class="form-group">
          <label for="is_parent">Est parent</label><br>
          <input type="checkbox" name='is_parent' id='is_parent' value='1' checked> Oui
        </div>
        {{-- {{$parent_cats}} --}}
        <div class="form-group d-none" id='parent_cat_div'>
            <label for="parent_id">Formation mére</label>
            <select name="parent_id" class="form-control">
                <option value="">sélectionnez</option>
                @foreach($parent_cats as $key=>$parent_cat)
                    <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="inputTitle" class="col-form-label">Numéro telephone/whatsapp <span class="text-danger">*</span></label>
            {{-- <input id="inputTitle" required type="text" name="whatsapp" placeholder="Enter la Durée " value="{{old('whatsapp')}}" class="form-control"> --}}
            <select name="whatsapp" id="" required class="form-control">
                <option value=""> selectionner le numéro</option>
                <option value="+212607158182">+212607158182</option>
                <option value="+212661350450">+212661350450</option>
                <option value="+212701047620">+212701047620</option>
            </select>
            @error('whatsapp')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

        <div class="form-group">
            <label for="inputTitle" class="col-form-label">Durée <span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="duree" placeholder="Enter le numéro "  value="{{old('duree')}}" class="form-control">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="inputTitle" class="col-form-label">Niveau <span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="niveau" placeholder="Enter le niveau " value="{{old('niveau')}}" class="form-control">
            @error('niveau')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="inputTitle" class="col-form-label">Langue <span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="langue" placeholder="Enter la langue " value="{{old('langue')}}" class="form-control">
            @error('langue')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="inputTitle" class="col-form-label">Nombre de place <span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="place" placeholder="Enter la langue " value="{{old('place')}}" class="form-control">
            @error('place')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>




        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Photo</label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> sélectionnez
                  </a>
              </span>
          <input id="thumbnail" class="form-control" required type="text" name="photo" value="{{old('photo')}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
          </select>
          @error('status')
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

    //  $(document).ready(function() {
    // $('#description').summernote({
    //   placeholder: "Rédiger la description principale .....",
    //     tabsize: 4,
    //     height: 100
    // });
    // });
    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Rédiger la description principale .....",
        tabsize: 4,
        height: 200
    });
    });
</script>

<script>
  $('#is_parent').change(function(){
    var is_checked=$('#is_parent').prop('checked');
    // alert(is_checked);
    if(is_checked){
      $('#parent_cat_div').addClass('d-none');
      $('#parent_cat_div').val('');
    }
    else{
      $('#parent_cat_div').removeClass('d-none');
    }
  })
</script>
@endpush
