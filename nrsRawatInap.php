<?php
    include_once "koneksi.php";
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(ISSET($_SESSION['username'])){
        $nrpID = $_GET['idedit'];
        $usia = $_GET['age'];
        $hariUsia = $_GET['days'];
        $planRawatInap = $_GET['plan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#0287D0">
    <link rel="shortcut icon" href="img/epain12.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Plan | E-Pain</title>
    <!-- <link rel="stylesheet" href="css\style.css"> -->
    <link rel="stylesheet" href="css\buttonCustom.css">
    <link rel="stylesheet" href="css\bootstrap-4.1.3\dist\css\bootstrap.min.css">
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- <script src="js\scriptEmergencyAdult.js"></script> -->
    <link rel="stylesheet" href="css\loader.css">

    
    
</head>
<body style="font-family: 'Montserrat', sans-serif; background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="container-fluid">
        <?php
            include "koneksi.php";
            $userid=$_SESSION['username'];
            $sql = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login WHERE username = '$userid' "));
            $nama=strtoupper($sql['nama']);
        ?>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
        <a href="formEmanagement.php" class="navbar-brand"><img src="img/epain12.png" alt="" style="width:45px; height:45px;"> E-PAIN</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                </div>
                <form class="form-inline ml-auto" action="logout.php" method="post">
                    <div class="row">
                        <div class="col-sm">
                            <a style="float: right; color: white;"><b><i>
                            <?php 
                                echo "WELCOME,";
                                echo "<br>";
                                echo "$nama";
                            ?>
                            </i></b></a>
                        </div>
                        <button type="submit" class="btn btn-outline-danger button">LOGOUT</button>
                    </div>
                </form>
            </div>
        </nav>
    </div><br><br><br><br>
    
    <div class="container" style="margin-top:5%;">
    <div class="animate-bottom" >
        <form action="insertNrsRawatInap.php" method="post">
            <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID; ?>" hidden>
            <input type="text" name="ruangan" id="ruangan" value="<?php echo $planRawatInap; ?>" hidden>
            <center><h5><b><i>Numeric Rating Scale (NRS)</i></b></h5></center><br><hr><br>
            <div class="row">
                <div class=col-sm-8>
                <select name="nrsValue" id="nrsValue" class="form-control" onchange="nrsChange(this);">
                    <option value="empty">Pilih NRS</option>
                    <option value="1">Tidak Nyeri</option>
                    <option value="2">Nyeri ringan (sedikit mengganggu aktivitas sehari-hari)</option>
                    <option value="3">Nyeri  sedang (gangguan nyata terhadap aktivitas sehari-hari)</option>
                    <option value="4">Nyeri berat (tidak bisa melakukan aktivitas sehari-hari)</option>
                </select> 
                </div>
                <div class="col-sm-4">
                    <select name="skalaNrs" id="skalaNrs" class="form-control">
                        <option value="" selected disabled>Pilih NRS</option>
                    </select>
                </div>
            </div><br><hr><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2">
                        <!-- <a href="emergencyAdult.php" class="btn btn-primary btn-block button1">KELUAR</a> -->
                        <?php
                            echo '<a href="rawatInapAdult.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planRawatInap.'" class="btn btn-primary btn-block button1"><span>KELUAR</span></a>';
                        ?>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </form>
    </div>
    </div>
<script>
var nrsLists = new Array(4) 
nrsLists["empty"] = ["select"]; 
nrsLists["1"] = ["0"]; 
nrsLists["2"] = ["1", "2", "3"]; 
nrsLists["3"] = ["4", "5", "6"]; 
nrsLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function nrsChange(selectObj) { 
 // get the index of the selected option 
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = nrsLists[which]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skalaNrs"); 
    // remove the current options from the country select 
    var len=cSelect.options.length; 
    while (cSelect.options.length > 0) { 
        cSelect.remove(0); 
    } 
    var newOption; 
    // create new options 
    for (var i=0; i<cList.length; i++) { 
        newOption = document.createElement("option"); 
        newOption.value = cList[i];  // assumes option string and value are the same 
        newOption.text=cList[i]; 
        // add the new option 
        try { 
        cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
        } 
        catch (e) { 
        cSelect.appendChild(newOption); 
        } 
    } 
 } 
</script>
    

</body>
</html>

<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>