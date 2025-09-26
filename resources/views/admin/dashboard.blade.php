@include('admin.header', ['title' => 'Dashboard'])

@if (session('flash'))
    <script>
        var flashType = "{{ session('flash.type') }}";
        var flashMessage = "{{ session('flash.message') }}";
    </script>
@endif


<main class="app-main" id="main" tabindex="-1">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                @php
                    $boxes = [
                        ['label' => 'CATEGORY', 'count' =>  $data['count']['category'], 'color' => 'text-bg-warning', 'icon' => 'bi-ui-checks-grid', 'link' => 'admin/category'],
                        ['label' => 'SUB-CATEGORY', 'count' => $data['count']['subcategory'], 'color' => 'bg-primary', 'icon' => 'bi-grid-fill', 'link' => 'admin/subcategory'],
                        ['label' => 'PRODUCT', 'count' => $data['count']['product'], 'color' => 'bg-info', 'icon' => 'bi-box', 'link' => 'admin/product'],
                        ['label' => 'ORDER', 'count' =>$data['count']['orders'], 'color' => 'bg-success', 'icon' => 'bi-cart3', 'link' => 'admin/order'],
                        ['label' => 'CUSTOMER', 'count' => $data['count']['customer'], 'color' => 'bg-danger', 'icon' => 'bi-person', 'link' => 'admin/customer'],
                        ['label' => 'DISCOUNT COUPON', 'count' => $data['count']['discount'], 'color' => 'bg-warning', 'icon' => 'bi-percent', 'link' => 'admin/discount'],
                    ];
                @endphp

                @foreach ($boxes as $box)
                <div class="col-lg-3 col-6">
                    <div class="small-box {{ $box['color'] }}">
                    <div class="inner">
                        <div class="d-flex gap-4">
                            <div>
                                <h3 class="mb-0">{{ $box['count'] }}</h3>
                                <p class="mb-0">{{ $box['label'] }}</p>
                            </div>
                            <div class="d-flex align-items-center fs-1 dash-icon">
                               <i class="bi {{ $box['icon'] }}"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                          @if ($box['link'])
                                    <a href="{{ url($box['link']) }}">
                                        <i class="fs-5 fw-bolder text-white bi bi-plus-lg"></i>
                                    </a>
                                @else
                                    <i class="fs-5 fw-bolder text-white bi bi-plus-lg"></i>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</main>


@include('admin.footer')
