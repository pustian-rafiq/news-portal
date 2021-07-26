<!DOCTYPE html>
<html class="no-js" lang=""> 
<head>
    @include('admin.layouts.partials.style')

</head>
<body>


        <!-- Left Panel -->
    @include('admin.layouts.partials.left_sidebar')
       <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
           @include('admin.layouts.partials.header')
        <!-- Header-->
      <!-- .content -->
      @yield('main_content')
      <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

   
 @include('admin.layouts.partials.script')
</body>
</html>
