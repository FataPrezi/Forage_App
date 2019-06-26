
<div class="content-wrapper">

    <!-- Main content -->
    @yield('default.content')
    @yield('village.content')

    @yield('client.content')

    @yield('client.create.content')
    @yield('client.selectvillage.content')
    @yield('reglement.content')
    @yield('reglement.create.content')
    @yield('login')
    @yield('abonnement.content')
    @yield('content')

</div>


<div>
    @include('footer')
</div>


