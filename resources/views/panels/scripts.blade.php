    {{-- Vendor Scripts --}}
        <script src="{{ asset('vendors/js/vendors.min.js') }}"></script>
        <script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script>
        @yield('vendor-script')
        {{-- Theme Scripts --}}
        <script src="{{ asset('js/core/app-menu.js') }}"></script>
        <script src="{{ asset('js/core/app.js') }}"></script>
        <script src="{{ asset('js/scripts/components.js') }}"></script>
        <script src="{{ asset('js/validation/formValidation.js') }}"></script>
        @if($configData['blankPage'] == false)
                <script src="{{ asset('js/scripts/footer.js') }}"></script>
        @endif
<script src="{{ asset('js/validation/framework/bootstrap.js') }}"></script>
<script src="{{ asset('vendors/js/extensions/toastr.min.js') }}"></script>
{{-- <script src="{{ asset('/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('js/scripts/forms/validation/form-validation.js') }}"></script> --}}

        {{-- page script --}}
        @yield('page-script')
