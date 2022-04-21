@include('panels.styles')
@include('panels.top-navebar')

@yield('content')


@include('panels/footer')

@include('panels/scripts')

<script type="text/javascript">
$(window).on('load', function() {
    if (feather) {
        feather.replace({
            width: 14,
            height: 14
        });
    }
})
</script>