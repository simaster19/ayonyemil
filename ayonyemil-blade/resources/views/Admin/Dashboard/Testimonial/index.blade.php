@extends('Admin.Dashboard.index')
@section('title', 'Testimonial')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <button class="btn btn-success" title="Tambah Testimonial" data-bs-toggle="modal"
                    data-bs-target="#modalTambah"><i class="bi bi-plus"></i></button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="modalTambahLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahLabel">Tambah Customer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('simpan_testimonial') }}" method="POST" class="row g-3"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <label for="foto_customer" class="form-label">Foto Customer</label>
                                            <input type="file" class="form-control" id="foto_customer"
                                                name="foto_customer">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nama_customer" class="form-label">Nama Customer</label>
                                            <input type="text" class="form-control" id="nama_customer"
                                                name="nama_customer">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="no_hp" class="form-label">Nomor HP</label>
                                            <input type="number" class="form-control" id="no_hp" name="no_hp">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="instagram" class="form-label">Instagram</label>
                                            <input type="text" class="form-control" id="instagram" name="instagram">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="catatan" class="form-label">Catatan</label>
                                            <textarea name="catatan" id="catatan" class="form-control" cols="50" rows="10"></textarea>

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
                        <th>Foto</th>
                        <th>Nama Customer</th>
                        <th>No HP</th>
                        <th>Instagram</th>
                        <th>Catatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $testimonial)
                        <tr>
                            <td><img class="img-thumbnail"
                                    src="{{ Storage::url('images/customer/' . $testimonial->foto_customer) }}"
                                    alt="Image" style="width: 110px; height:110px;">
                            </td>
                            <td>{{ $testimonial->nama_customer }}</td>
                            <td>{{ $testimonial->no_hp }}</td>
                            <td>{{ $testimonial->instagram }}</td>
                            <td>{{ $testimonial->catatan }}</td>
                            <td align="center">
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalUbah{{ $testimonial->id }}"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#modalDetail{{ $testimonial->id }}"><i class="bi bi-eye"></i></button>
                                <form action="{{ route('delete_produk', $testimonial->id) }}" method="post"
                                    class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>

                                <!-- Modal Ubah -->
                                <div class="modal fade" id="modalUbah{{ $testimonial->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUbahLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalUbahLabel">Ubah Customer</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form action="{{ route('update_testimonial', $testimonial->id) }}"
                                                            method="POST" class="row g-3" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="col-12">
                                                                <label for="foto_customer" class="form-label">Foto
                                                                    Customer</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_customer" name="foto_customer"
                                                                    value="{{ $testimonial->foto_customer }}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="nama_customer" class="form-label">Nama
                                                                    Customer</label>
                                                                <input type="text" class="form-control"
                                                                    id="nama_customer" name="nama_customer"
                                                                    value="{{ $testimonial->nama_customer }}">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="no_hp" class="form-label">Nomor HP</label>
                                                                <input type="number" class="form-control" id="no_hp"
                                                                    name="no_hp" value="{{ $testimonial->no_hp }}">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="instagram"
                                                                    class="form-label">Instagram</label>
                                                                <input type="text" class="form-control" id="instagram"
                                                                    name="instagram"
                                                                    value="{{ $testimonial->instagram }}">
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="catatan" class="form-label">Catatan</label>
                                                                <textarea name="catatan" id="catatan" class="form-control" cols="50" rows="10">{{ $testimonial->catatan }}</textarea>

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
                                <div class="modal fade" id="modalDetail{{ $testimonial->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDetailLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalDetailLabel">Detail Customer</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <div class="col-12 d-flex justify-content-center mb-2">
                                                            <img class="img img-thumbnail"
                                                                src="{{ Storage::url('images/customer/' . $testimonial->foto_customer) }}"
                                                                alt="Foto Testimonial"
                                                                style="width: 200px; height: 200px">

                                                        </div>

                                                        <table class="table table-reponsive table-stripped">
                                                            <tr>
                                                                <th>Nama Customer</th>
                                                                <td>:</td>
                                                                <td>{{ $testimonial->nama_customer }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>No HP</th>
                                                                <td>:</td>
                                                                <td>{{ $testimonial->no_hp }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Instagram</th>
                                                                <td>:</td>
                                                                <td>{{ $testimonial->instagram }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Catatan</th>
                                                                <td>:</td>
                                                                <td>{{ $testimonial->catatan }}</td>
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
                        <th>Foto</th>
                        <th>Nama Customer</th>
                        <th>No HP</th>
                        <th>Instagram</th>
                        <th>Catatan</th>
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
