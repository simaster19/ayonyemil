@extends('Admin.Dashboard.index')
@section('title', 'Dashboard')
@section('content')
    Dashboard
@endsection
@push('script')
    <script>
        $('#tableDataTable').DataTable();
    </script>
@endpush
