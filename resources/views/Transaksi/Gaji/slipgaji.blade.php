@extends('layouts.master')
@section('content')

            <div class="card" style="width: 18rem;">
                {{-- @foreach( $Slipgaji as $slip) --}}
                {{-- @foreach ($collection as $object)
        {{ $object->title }}
    @endforeach --}}
                <img class="card-img-top" img src="../assets/img/profile.jpg" alt="Card image cap">
                <div class="card-body">
               
                <h5 class="card-title">	{{ $Slipgaji->nama }}</h5>
                <p class="card-text">Jabatan : {{ $Slipgaji->nama_jabatan }}</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
                </div>
                {{-- @endforeach --}}
            </div>

  @endsection