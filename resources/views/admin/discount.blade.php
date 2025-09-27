@include('admin.header',['title'=>'Discount'])
<main class="app-main" id="main" tabindex="-1">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Discount</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="<?= ('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Discount</li>
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
                        <a href="<?= ('admin/discount') ?>" class="btn btn-sm bg-success text-white">All</a>
                        <?php for ($i = 65; $i <= 90; $i++): ?>
                            <a href="<?= ('admin/discount?query=' . chr($i)) ?>" class="btn btn-sm bg-success text-white"><?= chr($i) ?></a>
                        <?php endfor; ?>
                    </div>

                    <div class="card-header border-4 border-bottom border-info">
                        <form class="d-flex gap-4" method="get" action="<?= ('admin/discount') ?>">
                            <div class="d-inline-flex align-items-center text-nowrap" style="font-weight:bold;">Discount Name</div>
                            <input class="form-control me-2" type="search" name="query" placeholder="Search">
                            <button class="btn btn-sm btn-success" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="card-body card-info card-outline rounded-0 border-0">
                        <div class="d-flex justify-content-end">
                            <a href="<?= ('admin/discount/add') ?>" class="btn btn-success mb-2">Add New</a>
                        </div>

                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Discount Name</th>
                                    <th>Valid From</th>
                                    <th>Valid Till</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($discounts))


                                    @foreach ($discounts as $row)
                                        <tr class="align-middle">
                                            <td>{{ $row->name ?? '-'}}</td>
                                            <td>{{ $row->valid_form ?? '-'}}</td>
                                            <td>{{ $row->valid_to === '00-00-0000' ? 'Unset' : $row->valid_to }}</td>
                                            <td>
                                                {{trim($row->type) === 'Dolar' ? '$' : '' }}
                                                {{$row->amount ?? '-'}}
                                                {{trim($row->type) === 'Percentage' ? '%' : '' }}
                                            </td>
                                            <td>{{ $row->status}}</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-3">
                                                    <a href="<?= ('admin/discount/edit/' . $row->id) ?>" class="btn btn-sm bg-info text-white">EDIT</a>
                                                    <a href="<?= ('admin/discount/delete/' . $row->id) ?>" class="btn btn-sm bg-danger text-white">DELETE</a>
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
