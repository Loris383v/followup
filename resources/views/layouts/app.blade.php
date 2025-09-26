<!DOCTYPE html>
<html lang="fr">
<body>
@include('components.header')
@include('components.menu')

<div class="main-content">
    @yield('content')
</div>

@include('components.footer')
</body>
</html>
