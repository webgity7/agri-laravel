<!--begin::Footer-->
<footer class="app-footer">
    <!--begin::To the end-->
    <div class="float-end d-none d-sm-inline">Version 2.4.13</div>
    <!--end::To the end-->

    <!--begin::Copyright-->
    <strong>
        Copyright © 2014-2025&nbsp;
        <a href="{{ url('/') }}" class="text-decoration-none">Agri Express</a>.
    </strong>
    All rights reserved.
    <!--end::Copyright-->
</footer>
<!--end::Footer-->

<div class="sidebar-overlay"></div>
</div> <!--end::App Wrapper-->

<!-- Scripts -->
<script src="{{asset('/js/adminlte.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>


@push('scripts')
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                height: 80,
            });

            if (typeof flashType !== 'undefined' && typeof flashMessage !== 'undefined') {
                Toast.fire({
                    icon: flashType,
                    title: flashMessage,
                });
            }
        });
    </script>
@endpush

@push('styles')
    <style>
        .swal2-toast {
            padding: 6px !important;
            padding-left: 18px !important;
        }

        .swal2-toast h2:where(.swal2-title) {
            margin: 10px !important;
            padding: 0;
            font-size: 13px !important;
            text-align: initial;
            line-height: 20px;
            font-family: var(--bs-body-font-family) !important;
        }
    </style>
@endpush
