@extends('layouts.app')

@section('content')
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <img src="{{$user->avatar}}" alt="Z">
                  <h3> {{ $user->name}}`s profile </h3>
                  <form class="" action="{{ route('upload.avatar') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" name="avatar">
                    <input type="submit" class="pull-rigth btn btn-sm btn-primary">
                  </form>
                </div>
              </div>
            </div>
@endsection
