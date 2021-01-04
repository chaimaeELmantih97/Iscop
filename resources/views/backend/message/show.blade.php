@extends('backend.layouts.master')
@section('main-content')
<div class="card">
  <h5 class="card-header">Message</h5>
  <div class="card-body" style="color: #242424">
    @if($message)
          <div class="py-2">
            Nom :{{$message->name}}<br>
            Email :{{$message->email}}<br>
            Téléphone :{{$message->phone}}
          </div>
        <hr/>
        <h5><strong>Objet :</strong> {{$message->subject}}</h5>
        <p class="py-2">{{$message->message}}</p>
    @endif
  </div>
</div>
@endsection