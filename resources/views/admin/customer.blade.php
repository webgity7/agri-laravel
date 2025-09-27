@include('admin.header',['title'=>'Customer'])
<main class="app-main" id="main" tabindex="-1">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Customer</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="<?= ('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Customer</li>
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
                        <form class="d-flex gap-4" method="get" action="<?= ('admin/customer') ?>">
                            <div class="d-inline-flex align-items-center text-nowrap" style="font-weight:bold;">Customer Name</div>
                            <input class="form-control me-2" type="search" name="query" placeholder="Search">
                            <button class="btn btn-sm btn-success" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="card-body card-info card-outline rounded-0">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>Telephone</th>
                                    <th>Status</th>
                                    <th>No. of Orders</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($customers))
                                    @foreach ($customers as $customer)
                                        <tr class="align-middle">
                                            <td> {{ $customer->fullname}}</td>
                                            <td> {{ $customer->email }}</td>
                                            <td> {{ $customer->telephone}}</td>
                                            <td> {{ $customer->status}}</td>
                                            <td> {{ $customer->total_orders}}</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-3">
                                                    <a href="{{ ('admin/customer/edit/' . $customer->id) }}" class="btn btn-sm bg-info text-white">EDIT</a>
                                                    <a href="{{ ('admin/customer/order/' . $customer->id) }}" class="btn btn-sm bg-warning text-white">Orders</a>
                                                    <a href="{{ ('admin/customer/delete/' . $customer->id) }}" class="btn btn-sm bg-danger text-white">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                     @endforeach
                                @else
                                    <tr><td colspan="6" class="text-danger">No record found</td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('admin.footer')
