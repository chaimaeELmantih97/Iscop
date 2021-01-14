@extends('backend.layouts.master')
@section('title','ISCOP SUP - Liste des Témoignages')
@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Liste des Témoignages</h6>
      <a href="{{route('testimonial.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Ajouter un Témoignage</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($testimonials)>0)
        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Numéro de série</th>
              <th>Nom</th>
              <th>Poste</th>
              <th>Description</th>
              <th>Photo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Numéro de série</th>
              <th>Nom</th>
              <th>Poste</th>
              <th>Description</th>
              <th>Photo</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($testimonials as $testimonial)   
                <tr>
                    <td>{{$testimonial->id}}</td>
                    <td>{{$testimonial->name}}</td>
                    <td>{{$testimonial->job}}</td>
                    <td>{{$testimonial->description}}</td>
                    <td>
                      @if($testimonial->photo)
                          <img src="{{$testimonial->photo}}" class="img-fluid" style="max-width:80px" alt="{{$testimonial->photo}}">
                      @else
                          <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                      @endif  
                    </td>
                    <td>
                        <a href="{{route('testimonial.edit',$testimonial->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{route('testimonial.destroy',[$testimonial->id])}}">
                          @csrf 
                          @method('delete')
                              <button class="btn btn-danger btn-sm dltBtn" data-id={{$testimonial->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>  
            @endforeach
          </tbody>
        </table>
        <span style="float:right">{{$testimonials->links()}}</span>
        @else
          <h6 class="text-center">Aucun Témoignage Trouvé!</h6>
        @endif
      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
      .zoom {
        transition: transform .2s; /* Animation */
      }

      .zoom:hover {
        transform: scale(3.2);
      }
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script>
      
      $('#banner-dataTable').DataTable();

        // Sweet alert

        function deleteData(id){
            
        }
  </script>
  <script>
    $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        $('.dltBtn').click(function(e){
          var form=$(this).closest('form');
            var dataID=$(this).data('id');
            // alert(dataID);
            e.preventDefault();
            swal({
                  title: "Êtes-vous sûr?",
                  text: "Une fois supprimées, vous ne pourrez plus récupérer ces données!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                  if (willDelete) {
                    form.submit();
                  } else {
                      swal("Vos données sont en sécurité!");
                  }
              });
        })
    })
  </script>
@endpush