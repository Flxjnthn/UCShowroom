@extends('Layout.mainlayout')

@section('main_content')
<div class="container">
    <h1>Formulir Pemesanan Kendaraan</h1>

    <form method="POST" action="{{ route('customer.store') }}">
        @csrf

        <div class="form-group">
            <label for="vehicle_type">Pilih Jenis Kendaraan:</label>
            <select name="vehicle_type" id="vehicle_type" class="form-control" required>
                <option value="truck">Truck</option>
                <option value="mobil">Mobil</option>
                <option value="motor">Motor</option>
            </select>
        </div>

        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" name="model" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tahun">Tahun:</label>
            <input type="text" name="tahun" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jumlah_penumpang">Jumlah Penumpang:</label>
            <input type="text" name="jumlah_penumpang" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="manufaktur">Manufaktur:</label>
            <input type="text" name="manufaktur" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" name="harga" class="form-control" required>
        </div>

        <div id="additional_fields" class="form-group">
            <!-- Form fields for additional vehicle data will be added dynamically here -->
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script>
    document.getElementById('vehicle_type').addEventListener('change', function () {
        var vehicleType = this.value;
        var additionalFieldsDiv = document.getElementById('additional_fields');

        // Clear existing fields
        additionalFieldsDiv.innerHTML = '';

        // Add additional fields based on the selected vehicle type
        switch (vehicleType) {
            case 'truck':
                additionalFieldsDiv.innerHTML = `
                    <label for="jumlah_roda">Jumlah Roda:</label>
                    <input type="text" name="jumlah_roda" class="form-control" required>

                    <label for="luas_area_kargo">Luas Area Kargo:</label>
                    <input type="text" name="luas_area_kargo" class="form-control" required>
                `;
                break;
            case 'mobil':
                additionalFieldsDiv.innerHTML = `
                    <label for="tipe_bahan_bakar">Tipe Bahan Bakar:</label>
                    <input type="text" name="tipe_bahan_bakar" class="form-control" required>

                    <label for="luas_bagasi">Luas Bagasi:</label>
                    <input type="text" name="luas_bagasi" class="form-control" required>
                `;
                break;
            case 'motor':
                additionalFieldsDiv.innerHTML = `
                    <label for="ukuran_bagasi">Ukuran Bagasi:</label>
                    <input type="text" name="ukuran_bagasi" class="form-control" required>

                    <label for="kapasitas_mesin">Kapasitas Mesin:</label>
                    <input type="text" name="kapasitas_mesin" class="form-control" required>
                `;
                break;
            default:
                break;
        }
    });
</script>

@endsection
