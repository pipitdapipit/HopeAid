<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HopeAid</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form>
            <div class="fs-4">Form</div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Name </label>
                    <input value="{{ $user->name }}" name="name" id="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Email </label>
                    <input value="{{ $user->email }}" name="email" id="email" type="email" class="form-control" id="exampleInputPassword1" disabled >
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="uang-checkbox">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                      Uang
                    </label>
                  </div>


                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                          Barang
                        </label>
                    </div>

                    <div id="uang-dropdown" style="display: none;">
                        <label for="amount">Pilih Nominal</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Rp. 10.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Rp. 20.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Rp. 30.000
                                </label>
                            </div>
                            <label>Pilih Pembayaran</label>
                                <select id="choice" name="choice">
                                    <option value="OVO">OVO</option>
                                    <option value="DANA">DANA</option>
                                    <option value="Gopay">Gopay</option>
                                </select>
                        </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const uangCheckbox = document.getElementById('uang-checkbox');
            const uangDropdown = document.getElementById('uang-dropdown');

            uangCheckbox.addEventListener('change', function () {
                if (this.checked) {
                    uangDropdown.style.display = 'block';
                } else {
                    uangDropdown.style.display = 'none';
                }
            });
        });
    </script>

</body>
</html>
