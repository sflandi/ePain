<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#0287D0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Plan | E-Pain</title>
    <!-- <link rel="stylesheet" href="css\style.css"> -->
    <link rel="stylesheet" href="css\buttonCustom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css\loader.css">
    <script>
        $(document).ready(function () {
            $('.modal').modal('show');
        });
    </script>
</head>
<body> 
<!-- <div class="container"> -->
    <div id="myModal" class="modal fade" role="dialog" data-backdrop="static" id="staticBackdrop">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <centre><h4 class="modal-title">QUESTION</h4></centre>
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                </div>
                <div class="modal-body">
                <form action="insertGeneralQuestion.php" method="post">
                    <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID;?>" hidden>
                    <div class="form-group row">
                        <label for="" class="col-sm-7 col-form-label"><b>1. Apakah nyeri berpindah dari tempat satu ke tempat lain?</b><span class="star"> *</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" name="question1" id="question1" required>
                                <option value="" selected disabled>Pilih</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Sulit Dinilai">Sulit Dinilai</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-7 col-form-label"><b>2. Lokasi nyeri?</b><span class="star"> *</span></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="question2" id="question2" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-7 col-form-label"><b>3. Berapa lama nyeri ini?</b><span class="star"> *</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" name="question3" id="question3" required>
                                <option value="" selected disabled>Pilih</option>
                                <option value="Kurang Dari 3 Bulan (Akut)">Kurang dari 3 bulan (Akut)</option>
                                <option value="Lebih dari 3 bulan (kronis)">Lebih dari 3 bulan (kronis)</option>
                                <option value="Sulit Dinilai">Sulit dinilai</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-7 col-form-label"><b>4. Rasa nyeri?</b><span class="star"> *</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" name="question4" id="question4" required>
                                <option value="" selected disabled>Pilih</option>
                                <option value="Tajam">Tajam</option>
                                <option value="Seperti ditarik">Seperti ditarik</option>
                                <option value="Seperti berdenyut">Seperti berdenyut</option>
                                <option value="Seperti ditikam">Seperti ditikam</option>
                                <option value="Seperti keram">Seperti keram</option>
                                <option value="Nyeri tumpul">Nyeri tumpul</option>
                                <option value="Seperti ditusuk">Seperti ditusuk</option>
                                <option value="Seperti dipukul">Seperti dipukul</option>
                                <option value="Seperti di bakar">Seperti di bakar</option>
                                <option value="Sulit">Sulit</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-7 col-form-label"><b>5. Seberapa sering anda mengalami nyeri ini?</b><span class="star"> *</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" name="question5" id="question5" required>
                                <option value="" selected disabled>Pilih</option>
                                <option value="1 2 jam">1 – 2 jam</option>
                                <option value="3 4 jam">3 – 4 jam</option>
                                <option value="Kurang dari 30 menit">Kurang dari 30 menit</option>
                                <option value="Lebih dari 30 menit">Lebih dari 30 menit</option>
                                <option value="Sulit dinilai">Sulit dinilai</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-7 col-form-label"><b>6. Apa yang membuat nyeri berkurang?</b><span class="star"> *</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" name="question6" id="question6" required>
                                <option value="" selected disabled>Pilih</option>
                                <option value="Kompres air hangat">Kompres air hangat</option>
                                <option value="Aktifitas dikurangi (istirahat)">Aktifitas dikurangi ( istirahat )</option>
                                <option value="Minum obat">Minum obat</option>
                            </select>
                        </div>
                    </div><br><br>

                    <!-- <input type="text" name="age" id="age" hidden><br> -->
                    <!-- <div class="form-row">
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </div> -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-5"></div>
                                <div class="col-sm-2">
                                    <!-- <button type="submit" class="btn btn-primary btn-block button1" >XIMPAN</button> -->
                                    <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button>
                                </div>
                            <div class="col-sm-5"></div>
                        </div>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>