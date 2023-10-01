
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

    <section  id="main">

        @yield('content')

    </section>


    <footer class="row m-0 p-0">
        @include('includes.footer')
    </footer>

    <script type="text/javascript" rel="javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" rel="javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" rel="javascript" src="{{ asset('js/mdb.js') }}"></script>

</body>

</html><!-- JQuery -->