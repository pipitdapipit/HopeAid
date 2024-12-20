@extends('layout.layout')

@section('title', 'Form - HopeAid')

@section('content')

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <form method="POST" action="/form" enctype="multipart/form-data">
        @csrf
        <div class="fs-4">Form</div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Judul Donasi: </label>
                <input value="{{ $forms->judul_donasi }}" name="judul_donasi" id="judul_donasi" type="text" class="form-control"  disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Name: </label>
                <input value="{{ $user->name }}" name="name" id="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> Email: </label>
                <input value="{{ $user->email }}" name="email" id="email" type="email" class="form-control" id="exampleInputPassword1" disabled >
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="uang-checkbox">
                <label class="form-check-label" for="flexCheckIndeterminate">
                  Uang
                </label>
              </div>


              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="barang-checkbox">
                  <label class="form-check-label" for="flexCheckIndeterminate">
                      Barang
                    </label>
                </div>

            <div id="uang-dropdown" style="display: none;">
                <label for="amount">Pilih Nominal</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nominal-radio" id="nominal" value="10000">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Rp. 10.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nominal-radio" value="20000">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Rp. 20.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nominal-radio" value="30000">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Rp. 30.000
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Nominal Lain </label>
                        <input name="nominal" id="nominal" type="number" class="form-control" id="exampleInputPassword1">
                    </div>

                    <label class="fw-bold"> --- Gambar QR ---</label>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Bukti Pembayaran</label>
                        <input class="form-control" type="file" name="photo" accept=".jpeg, .png, .jpg">
                      </div>
                </div>

                <div id="barang-dropdown" style="display: none;">
                    <label>Tipe Barang</label>
                    <select id="choice" name="choice">
                        <option value="Pakaian">Pakaian</option>
                        <option value="Obat">Obat</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const uangCheckbox = document.getElementById('uang-checkbox');
        const uangDropdown = document.getElementById('uang-dropdown');

        const barangCheckbox = document.getElementById('barang-checkbox');
        const barangDropdown = document.getElementById('barang-dropdown');

        uangCheckbox.addEventListener('change', function () {
            if (this.checked) {
                uangDropdown.style.display = 'block';
            } else {
                uangDropdown.style.display = 'none';
            }
        });

        barangCheckbox.addEventListener('change', function () {
            if (this.checked) {
                barangDropdown.style.display = 'block';
            } else {
                barangDropdown.style.display = 'none';
            }
        })
    });
</script>

@endsection
