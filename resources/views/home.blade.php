@extends('Layout.mainlayout')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Customer Baru</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('customer.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="address">Alamat:</label>
                                <textarea name="address" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="phone">Nomor Telepon:</label>
                                <input type="tel" name="phone" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="id_card">ID Card:</label>
                                <input type="text" name="id_card" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection