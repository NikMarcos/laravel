<form action="/account_data" method="post">
    {{ csrf_field() }}
    <div style="margin-top: 15%;" class="input-group mb-3">
  <div class="input-group-prepend col-xs-12">
    <span style="color: white;" class="input-group-text bg-dark" id="basic-addon1">Введите Id: </span>
  </div>
  <input type="text" name="login" class="form-control"  aria-describedby="basic-addon1">
  <input type="text" name="name" class="form-control"  aria-describedby="basic-addon1">
  <input type="text" name="password" class="form-control"  aria-describedby="basic-addon1">
  <input type="text" name="age" class="form-control"  aria-describedby="basic-addon1">
  </div>
  <input type="submit" class="btn btn-success container" value="Получить товар" >
</form>
