@extends('Layout.mainlayout')

@section('main_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Order Baru</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group">
                            <label for="custID">Customer ID:</label>
                            <input type="text" name="custID" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="vehicleID">Vehicle ID:</label>
                            <input name="vehicleID" class="form-control" required></input>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>