

    @include('include.top')


<div class="container-scroller">
   
    <!-- partial:partials/_navbar.html -->
    @include('include.navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->


      @include('include.sidebar')


      @yield( 'content')

      
    </div>



    <!-- page-body-wrapper ends -->
    @include('include.footer')
  </div>



  
  @include('include.end')
