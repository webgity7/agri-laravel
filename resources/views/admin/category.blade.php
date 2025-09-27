@include('admin.header', ['title' => 'Category'])

<main class="app-main" id="main" tabindex="-1">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Category</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card card-info card-outline p-0 rounded-0">
                    <div class="card-header d-flex justify-content-between">
                        <a href="{{ 'admin/category' }}" class="btn btn-sm bg-success text-white">All</a>
                        @for ($i = 65; $i <= 90; $i++)
                            <a href="{{ 'admin/category?query=' . chr($i) }}"
                                class="btn btn-sm bg-success text-white">{{ chr($i) }}</a>
                        @endfor
                    </div>

                    <div class="card-header border-4 border-bottom border-info">
                        <form class="d-flex gap-4" method="get" action="{{ 'admin/category' }}">
                            <div class="d-inline-flex align-items-center text-nowrap" style="font-weight:bold;">Category
                                Name</div>
                            <input class="form-control me-2" type="search" name="query" placeholder="Search">
                            <button class="btn btn-sm btn-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="card-body card-info card-outline rounded-0">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('admin.add.category')}}" class="btn btn-success mb-2">Add New</a>
                        </div>
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>Number of Sub-Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (!empty($categories))
                                @foreach ($categories as $item)
                                    <tr class="align-middle">
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->order }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->subcategory_count }}</td>
                                        <td>
                                            <a href="{{ url('admin/category/edit/' . $item->id) }}"
                                                class="btn btn-sm bg-info text-white">EDIT</a>
                                            <a href="{{ url('admin/category/delete/' . $item->id) }}"
                                                class="btn btn-sm bg-danger text-white">DELETE</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-danger">No record found</td>
                                </tr>
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
