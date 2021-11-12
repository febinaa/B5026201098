<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        body{
        background-image: url(images/BG4.jpeg);
        background-repeat: no-repeat;
        background-size: cover;

        }
        .container{
            align-items: center;
            justify-content: center;
            width: 700px;
            background: rgb(231, 210, 151);
            padding: 20px;
            border-radius: 10px;
            margin: 50px auto;

        }
        button{
        width: 200px;
        }

    </style>
</head>
<body>
    <div class="container mt-3 mb-3 shadow-lg">

                <form name="RegistrationForm" action="https://www.w3schools.com/" onsubmit="return FormInput()">
                        <br> Mushen Anjelita
                        <br>Febina
                        <br>5026201098
                        <br>
                        <center><h1>Form Input Data Barang</h1></center>
                        <br>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Nama Barang</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" name="nama" id="nama" class="form-control form-control-sm" minlength="10">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Harga</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="number" name="harga" id="harga" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Jenis Barang</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <select name="jenis" id="jenis" class="form-control form-control-sm">
                                    <option value="">(pilih jenis barang)</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Non Mamin">Non Mamin</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Kode Barcode</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="number" name="kode" id="kode" class="form-control form-control-sm">
                            </div>
                        </div>

                        <br>

                        <div class="button text-center mb-3">
                            <button class="btn-primary submit mx-3" type="submit">Kirim</button>
                            <button class="btn-success mx-3" type="reset" >Reset</button>
                        </div>



                    </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js%22%3E"></script>

         <script>

           function FormInput(){

                var Nama = $("#nama").val();
                if(Nama.length < 10) {
                    alert("Nama Barang minimal 10 karakter");
                    return false;
                }
                if(Nama == ""){
                    alert("Nama Barang harus diisi!");
                    return false;
                }

                var Harga = $("#harga").val();
                var pattern = /^[0-9]+$/;
                if(!Harga.match(pattern)) {
                    alert("Harga harus diisi dengan angka saja");
                    return false;
                }
                if(Harga == ""){
                    alert("Harga harus diisi!");
                    return false;
                }
                if(Harga<=5000){
                    alert("Harga minimal 5000");
                    return false;
                }

                var Jenis = $('select option:selected').val();
                if(Jenis == 0) {
                    alert("Jenis Barang harus diidi!");
                    return false;
                }

                var Kode = $("#kode").val();
                if(!Kode.match(pattern)){
                    alert("Kode Barang harus diisi dengan angka saja");
                    return false;
                }
                if(Kode == ""){
                    alert("Kode Barang harus diisi!");
                    return false;
                }
                if(Kode.length < 10){
                    alert("Kode Barang minimal 10 karakter")
                }

            };


         </script>


</body>
</html>
