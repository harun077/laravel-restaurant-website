@include('backend.layouts.header')
    <!-- Page Wrapper -->
    <div id="wrapper">

       @include('backend.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('backend.layouts.topbar')

                <!--For Every Page Changeable Content-->
                @yield('main-content')


            </div>
            <!-- End of Main Content -->

              @include('backend.layouts.copyright')
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    @include('backend.layouts.foooter')
