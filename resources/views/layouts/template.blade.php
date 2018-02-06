<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @include('layouts.inc-stylesheet')
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
  <div class="wrapper">

    @include('layouts.inc-header')

    <div id="app"></div>
    <div class="content-wrapper">
      <div class="container">
        <section class="content-header">
          <h1>Dashboard</h1>
          <ol class="breadcrumb"><li class="active"><i class="fa fa-dashboard"></i> Dashboard</li></ol>
        </section>

        @yield('content')

      </div>
    </div>

    @include('layouts.inc-footer')

  </div>

  @include('layouts.inc-scripts')
  @yield('scripts')

</body>
</html>
