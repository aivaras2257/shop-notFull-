<!doctype html>
<html lang="en">
@include('shop/_partials/head')
<body>
@include('shop/_partials/nav')

@yield('content')

@include('shop/_partials/footer')

<script src="{{URL::asset('js/script.js')}}"></script>
</body>
</html>
