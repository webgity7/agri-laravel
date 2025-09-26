@include('admin.header', ['title' => 'Product'])
<main class="app-main" id="main" tabindex="-1">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Product</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                        <a href="<?= 'admin/product' ?>" class="btn btn-sm bg-success text-white">All</a>
                        <?php for ($i = 65; $i <= 90; $i++): ?>
                        <a href="<?= 'admin/product?query=' . chr($i) ?>"
                            class="btn btn-sm bg-success text-white"><?= chr($i) ?></a>
                        <?php endfor; ?>
                    </div>

                    <div class="card-header border-4 border-bottom border-info">
                        <form class="d-flex gap-4" method="get" action="<?= 'admin/product' ?>">
                            <div class="d-inline-flex align-items-center text-nowrap" style="font-weight:bold;">Product
                                Name</div>
                            <input class="form-control me-2" type="search" name="query" placeholder="Search">
                            <button class="btn btn-sm btn-success" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="card-body card-info card-outline rounded-0">
                        <div class="d-flex justify-content-end">
                            <a href="<?= 'admin/product/add' ?>" class="btn btn-success mb-2">Add New</a>
                        </div>

                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Price ($)</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($products))
                                    @foreach ($products as $item)
                                        <tr class="align-middle">
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->category_name }}</td>
                                            <td>{{ $item->subcategory_name ?? '-'}}</td>
                                            <td>{{ $item->price}} </td>
                                            <td>{{ $item->availability}}</td>
                                            <td>
                                                <a href="<?= 'admin/product/edit/' . $item->id ?>"
                                                    class="btn btn-sm bg-info text-white">EDIT</a>
                                                <a href="<?= 'admin/product/delete/' . $item->id ?>"
                                                    class="btn btn-sm bg-danger text-white">DELETE</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-danger">No record found</td>
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


@include('admin.footer', ['title' => 'Product'])
