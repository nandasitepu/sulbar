<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')
  <body>
    <div id="app">
      @yield('content')
    </div>
    <!-- Scripts -->
    @include('layouts._js')
    @yield('js')
  </body>
</html>
