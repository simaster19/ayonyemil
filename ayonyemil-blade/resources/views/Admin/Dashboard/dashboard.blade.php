@extends('Admin.Dashboard.index')
@section('title', 'Dashboard')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Produk</h5>
                        <p class="card-text">{{ count($products) }}</p>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Testimonial</h5>
                        <p class="card-text">{{ count($testimonials) }}</p>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
@push('script')
    <script>
        $('#tableDataTable').DataTable();
    </script>
@endpush
