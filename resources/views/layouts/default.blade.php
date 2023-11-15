
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body style="background: #f8f8f8" >
    
    <header>

        @include('includes.header')
        @yield('nav')

    </header>

    <section  id="main" class="mb-5 pb-5">

        @yield('content')

    </section>


    <footer>
        @include('includes.footer')
    </footer>

    <script type="text/javascript" rel="javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" rel="javascript" src="{{ asset('js/lottie.min.js') }}"></script>
    <script type="text/javascript" rel="javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" rel="javascript" src="{{ asset('js/mdb.js') }}"></script>

</body>

</html><!-- JQuery -->