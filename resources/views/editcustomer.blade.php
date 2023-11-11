@extends('Layout.mainlayout')

@section('main_content')
    <div class="container">
        <h1>Edit Customer</h1>

        <form method="POST" action="{{ route('customer.update', $customer->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" class="form-control" value="{{ $customer->name }}" required>
            </div>

            <div class="form-group">
                <label for="address">Alamat:</label>
                <textarea name="address" class="form-control" required>{{ $customer->address }}</textarea>
            </div>

            <div class="form-group">
                <label for="phone">Nomor Telepon:</label>
                <input type="tel" name="phone" class="form-control" value="{{ $customer->phone }}" required>
            </div>

            <div class="form-group">
                <label for="id_card">ID Card:</label>
                <input type="text" name="id_card" class="form-control" value="{{ $customer->id_card }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
