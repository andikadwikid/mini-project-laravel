@extends('layout.app')
@section('content')
    <h1>Create Attendance</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Components</a></div>
        <div class="breadcrumb-item">Table</div>
    </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Pilih Divisi</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Pilih Karyawan</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
