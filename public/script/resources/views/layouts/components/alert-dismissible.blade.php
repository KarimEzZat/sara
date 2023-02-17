@if (session()->has('success'))
    <script>
        toastr.success("<b>{{ session('success') }}</b>");
    </script>
@endif

@if (session()->has('info'))
    <script>
        toastr.info("<b>{{ session('info') }}</b>");
    </script>
@endif

@if (session()->has('warning'))
    <script>
        toastr.warning("<b>{{ session('warning') }}</b>");
    </script>
@endif

@if (session()->has('error'))
    <script>
        toastr.error("<b>{{ session('error') }}</b>");
    </script>
@endif

@if (session()->has('notAuth'))
    <script>
        toastr.error("<b>{{ session('notAuth') }}</b>");
    </script>
@endif
