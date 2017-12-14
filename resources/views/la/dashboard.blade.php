@extends('la.layouts.app')

@section('htmlheader_title') Dashboard @endsection
@section('contentheader_title') Dashboard @endsection
@section('contentheader_description') Organisation Overview @endsection

@section('main-content')
<!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $nbImages }}</h3>
                  <h4>Images</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-images"></i>
                </div>
                <a href="{{ url('admin/uploads') }}" class="small-box-footer">Accèder aux images<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">

          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
@endsection

@push('styles')
<!-- Morris chart -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/morris/morris.css') }}">
<!-- jvectormap -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/datepicker/datepicker3.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endpush


@push('scripts')
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('la-assets/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('la-assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('la-assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('la-assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('la-assets/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('la-assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('la-assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('la-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('la-assets/plugins/fastclick/fastclick.js') }}"></script>
<!-- dashboard -->
<script src="{{ asset('la-assets/js/pages/dashboard.js') }}"></script>
@endpush

@push('scripts')
<script>
(function($) {
	$('body').pgNotification({
		style: 'circle',
		title: 'Trail4life',
		message: "Bienvenu {{ Auth::user()->name }}",
		position: "top-right",
		timeout: 0,
		type: "success",
	}).show();
})(window.jQuery);
</script>
@endpush
