<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials.head')
    @stack('cs')

</head>
<body>
    @stack('preload')
@if(request()->is('link-not-found') || request()->is('comming-soon'))

        @include('layouts.partials.header-2')
@else
    @include('layouts.partials.header')
@endif
{{-- <!-- @include('layouts.partials.sidebar') -->--}}
@yield('content')



@include('layouts.partials.footer')


@include('layouts.partials.scripts')
@stack('js')
</body>
</html>
