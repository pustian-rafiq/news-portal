
<!DOCTYPE html>
<html class="no-js" lang=""> 
<head>
	
    @include('admin.layouts.partials.style')
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

     @include('admin.layouts.partials.left_sidebar')

    <div id="right-panel" class="right-panel">

     
      <!-- .content -->
      @yield('main_content')
      <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

   
 @include('admin.layouts.partials.script')
  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
