<?php

require ("../connection/db.php");

if(isset($_POST["submit"]))
{
    date_default_timezone_set("Asia/Kuching");
    $tarikh=date("d-m-Y His"); //tarikh dan masa

    $nama=$_POST["nama"];
    $nama=mysqli_escape_string($conn_cpanel,$nama);
    $nama= filter_var($nama, FILTER_SANITIZE_STRING);

    $emel=$_POST["emel"];
    $emel=mysqli_escape_string($conn_cpanel,$emel);
    $emel= filter_var($emel, FILTER_SANITIZE_STRING);

    $notel=$_POST["notel"];
    $notel=mysqli_escape_string($conn_cpanel,$notel);
    $notel= filter_var($notel, FILTER_SANITIZE_STRING);

    $mesej=$_POST["mesej"];
    $mesej=mysqli_escape_string($conn_cpanel,$mesej);
    $mesej= filter_var($mesej, FILTER_SANITIZE_STRING);

    $statement = "INSERT INTO maklum_balas (url_agensi,nama,notel,emel,mesej,tarikh) VALUES ('$url_agensi','$nama','$notel','$emel','$mesej','$tarikh')";
    $query = mysqli_query($conn_cpanel,$statement);

    if($query)
    {
        echo "<script> location=href= 'true.php';</script>";
    }
    else
    {
        echo "<script> location=href= 'false.php';</script>";
    }
}
else
    {
        echo "<script> location=href= 'error.php';</script>";
    }

?>
