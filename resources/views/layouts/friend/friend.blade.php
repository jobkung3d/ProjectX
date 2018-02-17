@extends('layouts.template')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-6">
      <div class="box box-solid">
        <div class="box-body">
          <h2>Current Restaurant</h2>
            <table class="table table-striped task-table">
              <thead>
                  <th>Nick Name</th>
                  <th>First Name</th>
                  <th>Last Name</th>
              </thead>
              <tbody>
                   @foreach ($fri as $fri)
                    <?php
                        $fnm = $fri['first_name'];
                        $lnm = $fri['last_name'];
                    ?>
                      <tr>
                          <td class="table-text">
                              <div>{{ $fri['nickname'] }}</div>
                          </td>
                          <td class="table-text">
                              <div>{{ $fnm?$fnm:'-' }}</div>
                          </td>
                          <td class="table-text">
                              <div>{{ $lnm?$lnm:'-' }}</div>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
      <div class="box box-solid">
        <div class="box-body">
          <h2>Create A New Friend</h2><br  />
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
          <form method="post" action="{{ url('friend') }}">
            {{csrf_field()}}
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="inp-fnm">First Name</label>
                  <input type="text" class="form-control" name="first_name" id="inp-fnm" placeholder="Enter firstname">
              </div>
              <div class="form-group col-md-6">
                  <label for="inp-lnm">Last Name</label>
                  <input type="text" class="form-control" name="last_name" id="inp-lnm" placeholder="Enter lastname">
              </div>
              <div class="form-group col-md-6">
                  <label for="inp-nnm">Nick Name</label>
                  <input type="text" class="form-control" name="nickname" id="inp-nnm" placeholder="Enter nickname">
              </div>
              <div class="form-group col-md-6">
                  <label for="inp-bd">Birthday</label>
                  <input type="text" class="form-control" name="birthday" id="inp-bd" placeholder="Enter birthday">
              </div>
              <div class="form-group col-md-12">
                  <label for="inp-addr">Address</label>
                  <textarea style="resize: none" class="form-control" name="address" id="inp-addr" placeholder="Enter address"></textarea>
              </div>
              <div class="form-group col-md-12">
                  <label for="inp-bacc">Bank Account</label>
                  <input type="text" class="form-control" name="bank_account" id="inp-bacc" placeholder="Enter bank account">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Add Friend</button>
                <input type="hidden" class="form-control" name="status_noti" id="inp-stni" value="1">
                <input type="hidden" class="form-control" name="status" id="inp-st" value="1">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
