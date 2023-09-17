@extends('Admin.Dashboard.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <button class="btn btn-success" title="Tambah Data Produk" data-bs-toggle="modal"
                    data-bs-target="#modalTambah"><i class="bi bi-plus"></i></button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="modalTambahLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahLabel">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('simpan_produk') }}" method="POST" class="row g-3"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <label for="foto_produk" class="form-label">Foto Produk</label>
                                            <input type="file" class="form-control" id="foto_produk" name="foto_produk">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nama_produk" class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="jenis_produk" class="form-label">Jenis Produk</label>
                                            <input type="text" class="form-control" id="jenis_produk"
                                                name="jenis_produk">
                                        </div>

                                        <div class="col-6">
                                            <label for="rasa" class="form-label">Rasa</label>
                                            <input type="text" class="form-control" id="rasa" placeholder="Pedas"
                                                name="rasa">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
                                            <input type="number" class="form-control" id="jumlah_produk"
                                                name="jumlah_produk">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="harga_jual" class="form-label">Harga Jual</label>
                                            <input type="number" class="form-control" id="harga_jual" name="harga_jual">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="harga_produk" class="form-label">Harga Produk</label>
                                            <input type="number" class="form-control" id="harga_produk"
                                                name="harga_produk">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="berat_produk" class="form-label">Berat Produk</label>
                                            <input type="number" class="form-control" id="berat_produk" name="berat_produk"
                                                placeholder="Satuan Gram">
                                        </div>



                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            @if (session()->has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <ul>

                        @foreach (session('error_message')->messages() as $error_message)
                            @foreach ($error_message as $value)
                                <li>{{ $value }}</li>
                            @endforeach
                        @endforeach
                    </ul>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('message'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <table id="tableDataTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
                        <th>Rasa</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $product)
                        <tr>
                            <td><img class="img-thumbnail"
                                    src="{{ Storage::url('images/product/' . $product->foto_produk) }}" alt="Image"
                                    style="width: 110px; height:110px;">
                            </td>
                            <td>{{ $product->nama_produk }}</td>
                            <td>{{ $product->jenis_produk }}</td>
                            <td>{{ $product->rasa }}</td>
                            <td>{{ $product->harga_produk }}</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
                        <th>Rasa</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $('#tableDataTable').DataTable();
    </script>
@endpush
