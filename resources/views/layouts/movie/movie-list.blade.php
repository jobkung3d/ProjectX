@include('layouts.inc-header')

<div id="app"></div>
<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
      <h1>Movie</h1>
      <ol class="breadcrumb"><li class="active"><i class="fa fa-dashboard"></i> Movie</li></ol>
    </section>
    <section class="content">
      <div class="box box-solid">
        <div class="box-body">
          Hello Movie
          <table class="table table-hover table-bordered">
            <thread>
              <tr>
                <th>No.</th>
                <th>Name</th>
              </tr>
            </thread>
            <tbody>
              <tr>
                <td>1</td>
                <td>1</td>
              </tr>
              <tr>
                <td>2</td>
                <td>2</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
</div>

@include('layouts.inc-footer')
