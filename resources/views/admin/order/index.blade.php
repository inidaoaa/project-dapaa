    @extends('layouts.admin')
    @section('styles')
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
    @endsection

    @section('content')
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables</span> Produk</h4>
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    <h5>Produk</h5>
                </div>
                <div class="float-end">
                    <a href="{{ route('order.create') }}" class="btn btn-sm btn-primary">
                        Add
                    </a>
                </div>
            </div>
            <br>
            <div class="card-body">
                <table class="table-responsive text-nowrap">
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Tanggal Order</th>
                                <th>Total harga</th>
                                <th>Metode Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @php $i = 1; @endphp
                            @foreach ($order as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->id_user }}</td>
                                <td>{{ $data->tgl_order }}</td>
                                <td>{{ $data->total_harga }}</td>
                                <td>{{ $data->metode_pembayaran }}</td>
                                <td>
                                    <form action="{{ route('order.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('order.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-danger" data-confirm-delete="true">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

    @push('script')
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
        <script>
            new DataTable('#example');
        </script>
    @endpush
