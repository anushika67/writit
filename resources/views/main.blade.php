<!DOCTYPE html>
<html lang="en">
  @include('partial._head')
  <body>
  @include('partial._nav')

<div class="container">
    @yield('content')
</div><!--end of container-->
@include('partial._script')
  </body>
</html>
