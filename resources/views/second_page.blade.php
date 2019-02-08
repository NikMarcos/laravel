@extends('layouts.app')

@section('content')
    <form action="/users" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
      <div class="input-group-prepend col-xs-12">
        <span style="color: white;" class="input-group-text bg-dark" id="basic-addon1">Введите данные: </span>
      </div>
      <input type="text" name="login" placeholder="Логин" class="form-control"  aria-describedby="basic-addon1">
      <input type="text" name="name" placeholder="Имя" class="form-control"  aria-describedby="basic-addon1">
      <input type="text" name="password" placeholder="Пароль" class="form-control"  aria-describedby="basic-addon1">
      <input type="text" name="age" placeholder="Возраст" class="form-control"  aria-describedby="basic-addon1">
      </div>
      <input type="submit" class="btn btn-info" value="Создать запись" >
    </form>

    <div class="container">
        {{ $users->name }}<br>
        {{ $users->age }}<br>
        Средний возраст пользователей {{ $ages }}
        <a href="{{ route('profile') }}">Profile</a>
    </div>
@endsection
