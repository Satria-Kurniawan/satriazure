@extends('layout.main')

@section('title', 'Web Satria')

@section('container')

    <div class="container-fluid">
        <div class="row justify-content-center bg-light">
            <div class="col-12 col-md-5">
                <form method="GET" action="/content" class="bg-white form-container p-3 mt-4" id="forminput">
                    <h2 class="text-center mb-4 bg"><b>BILANGAN FIBONACCI</b></h2>
                    <div class="form-group">
                        <label for="angkapertama">Angka pertama</label>
                        <input type="text" class="form-control" value="{{ $angkapertama }}" id="angkapertama" placeholder="Masukkan Angka Pertama" name="angkapertama" required />
                    </div>
                    <div class="form-group">
                        <label for="angkakedua">Angka kedua</label>
                        <input type="text" class="form-control" value="{{ $angkakedua }}" id="angkakedua" placeholder="Masukkan Angka Kedua" name="angkakedua" required />
                    </div>
                    <div class="form-group">
                        <label for="jumlahderet">Jumlah deret</label>
                        <input type="text" class="form-control" value="{{ $jumlahderet }}" id="jumlahderet" placeholder="Masukkan Jumlah Deret" name="jumlahderet" required />
                    </div>
                    <br><button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">Hitung</button></br>
                    <div class="form-group">
                        <h4 style="text-align: center;"><b>Hasil</b></h4>
                        <h4 style="background-color: purple; color: white;; text-align: center; border-radius: 4px;"><?php echo $deret; ?></h4>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
