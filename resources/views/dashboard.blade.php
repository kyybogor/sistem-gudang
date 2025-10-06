@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #2b0033;
            color: #fff;
        }

        .btn-success,
        .btn-primary,
        .btn-info {
            background-color: #510151;
            border-color: #510151;
            color: #fff;
        }

        .btn-success:hover,
        .btn-primary:hover,
        .btn-info:hover {
            background-color: #6b006b;
            border-color: #6b006b;
        }

        .card {
            background-color: #2a002f;
            border: 1px solid #510151;
            color: #fff;
        }

        .form-control {
            background-color: #510151;
            border: 1px solid #1a001f;
            color: #fff;
        }

        .form-control:focus {
            background-color: #1a001f;
            border-color: #510151;
            box-shadow: 0 0 5px #510151;
            color: #fff;
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .table {
            color: #fff;
            background-color: #1a001f;
        }

        .table thead th {
            background-color: #1a001f !important;
            color: #fff;
        }

        .table tbody tr {
            background-color: #2a002f;
        }

        .table tbody tr:nth-child(even) {
            background-color: #3a003f;
        }

        .table th,
        .table td {
            border: 1px solid #510151;
            background-color: inherit !important;
            color: #fff;
        }
    </style>

    <h4 class="mb-4">Barang Keluar</h4>

    <!-- Filter -->
    <div class="row mb-3">
        <div class="col-md-3">
            <input type="date" class="form-control">
        </div>
        <div class="col-md-3">
            <input type="date" class="form-control">
        </div>
        <div class="col-md-3">
            <select class="form-control">
                <option>- Pilih Customer -</option>
                <option>Customer A</option>
                <option>Customer B</option>
            </select>
        </div>
        <div class="col-md-3">
            <button class="btn btn-success">Search</button>
            <button class="btn btn-primary">Add</button>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Products</th>
                        <th>Total</th>
                        <th>Sudah Bayar</th>
                        <th>Sisa Bayar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            30/09/2025 <br>
                            0000082509 <br>
                            Dibuat Oleh : gudang-perlap01 <br>
                            Kirim Ke : cash
                        </td>
                        <td>ESSE LIGHT (PROMO) x 10 pcs</td>
                        <td>160,000 <br> PPN : 0</td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td>Lunas</td>
                        <td><button class="btn btn-info btn-sm">View</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
