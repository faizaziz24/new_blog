@include('partials._head')
    <body>
        @include('partials._nav')

        <!-- start of container -->
        <div class="container">
            @include('partials._messages')
            
            @yield('content')
            
            @include('partials._footer')
        </div>
        <!-- end of container -->
    
        @include('partials._javascript')
       
    </body>
</html>