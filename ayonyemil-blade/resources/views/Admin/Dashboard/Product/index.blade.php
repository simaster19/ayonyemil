@extends('Admin.Dashboard.index')
@section('title', 'Produk')
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
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
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
                            <td align="center">
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalUbah{{ $product->id }}"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#modalDetail{{ $product->id }}"><i class="bi bi-eye"></i></button>
                                <form action="{{ route('delete_produk', $product->id) }}" method="post"
                                    class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>

                                <!-- Modal Ubah -->
                                <div class="modal fade" id="modalUbah{{ $product->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUbahLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalUbahLabel">Ubah Produk</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form action="{{ route('update_produk', $product->id) }}"
                                                            method="POST" class="row g-3" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="col-12">
                                                                <label for="foto_produk" class="form-label">Foto
                                                                    Produk</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_produk" name="foto_produk">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="nama_produk" class="form-label">Nama
                                                                    Produk</label>
                                                                <input type="text" class="form-control"
                                                                    id="nama_produk" name="nama_produk"
                                                                    value="{{ $product->nama_produk }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="jenis_produk" class="form-label">Jenis
                                                                    Produk</label>
                                                                <input type="text" class="form-control"
                                                                    id="jenis_produk" name="jenis_produk"
                                                                    value="{{ $product->jenis_produk }}">
                                                            </div>

                                                            <div class="col-6">
                                                                <label for="rasa" class="form-label">Rasa</label>
                                                                <input type="text" class="form-control" id="rasa"
                                                                    placeholder="Pedas" name="rasa"
                                                                    value="{{ $product->rasa }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="jumlah_produk" class="form-label">Jumlah
                                                                    Produk</label>
                                                                <input type="number" class="form-control"
                                                                    id="jumlah_produk" name="jumlah_produk"
                                                                    value="{{ $product->jumlah_produk }}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="harga_jual" class="form-label">Harga
                                                                    Jual</label>
                                                                <input type="number" class="form-control"
                                                                    id="harga_jual" name="harga_jual"
                                                                    value="{{ $product->harga_jual }}">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="harga_produk" class="form-label">Harga
                                                                    Produk</label>
                                                                <input type="number" class="form-control"
                                                                    id="harga_produk" name="harga_produk"
                                                                    value="{{ $product->harga_produk }}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="berat_produk" class="form-label">Berat
                                                                    Produk</label>
                                                                <input type="number" class="form-control"
                                                                    id="berat_produk" name="berat_produk"
                                                                    placeholder="Satuan Gram"
                                                                    value="{{ $product->berat_produk }}">
                                                            </div>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Ubah-->

                                <!-- Modal Detail -->
                                <div class="modal fade" id="modalDetail{{ $product->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDetailLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalDetailLabel">Detail Produk</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <div class="col-12 d-flex justify-content-center mb-2">
                                                            <img class="img img-thumbnail"
                                                                src="{{ Storage::url('images/product/' . $product->foto_produk) }}"
                                                                alt="Foto Produk" style="width: 200px; height: 200px">

                                                        </div>

                                                        <table class="table table-reponsive table-stripped">
                                                            <tr>
                                                                <th>Nama Produk</th>
                                                                <td>:</td>
                                                                <td>{{ $product->nama_produk }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jenis Produk</th>
                                                                <td>:</td>
                                                                <td>{{ $product->jenis_produk }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Rasa</th>
                                                                <td>:</td>
                                                                <td>{{ $product->rasa }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jumlah Produk</th>
                                                                <td>:</td>
                                                                <td>{{ $product->jumlah_produk }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Harga Jual</th>
                                                                <td>:</td>
                                                                <td>{{ $product->harga_jual }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Harga Produk</th>
                                                                <td>:</td>
                                                                <td>{{ $product->harga_produk }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Berat Produk</th>
                                                                <td>:</td>
                                                                <td>{{ $product->berat_produk }}</td>
                                                            </tr>
                                                        </table>




                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Detail-->
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
