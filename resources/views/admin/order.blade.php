@include('admin.header',['title'=>'Order'])
<main class="app-main" id="main" tabindex="-1">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Order</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card card-info card-outline p-0 rounded-0">
                    <div class="card-header border-4 border-bottom border-info">
                        <form class="d-flex gap-4" method="get" action="{{route('admin.order')}}">
                            <div class="d-inline-flex align-items-center text-nowrap" style="font-weight:bold;">Order Id</div>
                            <input class="form-control me-2" type="search" name="query" placeholder="Search">
                            <button class="btn btn-sm btn-success" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="card-body card-info card-outline rounded-0">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-nowrap">Order Id</th>
                                    <th class="text-nowrap">Deliver To</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">Price ($)</th>
                                    <th class="text-nowrap">Status</th>
                                    <th class="text-nowrap">Who Ordered</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @if (!empty($orders))


                                   @foreach ($orders as $order)
                                        <tr class="align-middle">
                                            <td>{{$order->id ?? '-'}}</td>
                                            <td>{{$order->delivery ?? '-'}}</td>
                                            <td>{{$order->orderdate ?? '-'}}</td>
                                            <td>{{$order->total ?? '-'}}</td>
                                            <td>{{$order->status ?? '-'}}</td>
                                            <td>{{$order->fullname ?? '-'}}</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-3">
                                                    <a  href="{{ ('admin/order/edit/' . $order->id) }}" class="btn btn-sm bg-info text-white text-nowrap">VIEW/EDIT</a>
                                                    <a href="{{('admin/order/cancel/' . $order->id)}}" class="btn btn-sm bg-warning text-white">CANCEL</a>
                                                    <a href="{{ ('admin/order/delete/' . $order->id) }}" class="btn btn-sm bg-danger text-white">DELETE</a>
                                                </div>
                                            </td>
                                        </tr>
                                  @endforeach
                                @else
                                    <tr><td colspan="7" class="text-danger">No record found</td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('admin.footer');
