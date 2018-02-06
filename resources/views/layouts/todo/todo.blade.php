@extends('layouts.template')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-6">
      <div class="box box-solid">
        <div class="box-body">
          <h2>Create A Todo Lists</h2><br  />
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div><br />
          @endif
          @if (\Session::has('success'))
          <div class="alert alert-success">
              <p>{{ \Session::get('success') }}</p>
          </div><br />
          @endif
          <form method="post" action="{{ url('todo') }}">
            {{csrf_field()}}
            <div class="row">
              <div class="form-group col-md-4 col-md-offset-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name">
              </div>
            </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Add todo</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
