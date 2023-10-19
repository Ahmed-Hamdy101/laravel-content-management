@section('nav')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <!-- Container wrapper -->

        <div class="container-fluid">

            <div class="container">

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample"
                    aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                    <!-- Navbar brand -->
                    <!-- Left links -->
                    <a class="navbar-brand mt-2 mt-lg-0 text-primary" id="logo" href="#">
                        Izac
                    </a>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#about">about</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#jobs">Jobs</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>

                    </ul>
                    <!-- Left links -->
                </div>

                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
@endsection
