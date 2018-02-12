@extends('layouts.template')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-solid">
        <div class="box-body">
          <h2>Current Task</h2>
          <table class="table table-striped task-table">
              <!-- Table Headings -->
              <thead>
                  <th>Task</th>
                  <th>&nbsp;</th>
              </thead>

              <!-- Table Body -->
              <tbody>
                  @foreach ($res as $res)

                      <tr>
                          <!-- Task Name -->
                          <td class="table-text">
                              <div>{{ $res['name'] }}</div>
                          </td>

                          <td>
                            <form action="./restaurant/{{ $res['id'] }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button>Delete Task</button>
                            </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
