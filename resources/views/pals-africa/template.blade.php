<!DOCTYPE html>
<html lang="en">

<head>
    @include('pals-africa.layout.head')
</head>

<body>

    <!-- for header part -->
    <header>
        @include('pals-africa.layout.header')
    </header>

    <div class="main-container">
        <div class="navcontainer">
            @include('pals-africa.layout.sidebar')
        </div>
        <div class="main">
            @yield('content')
        </div>
    </div>
    @include('pals-africa.layout.script')
</body>

</html>
