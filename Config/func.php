<?php
function DayID($tanggalnya)

{

    switch(DATE("w",$tanggalnya))

    {

        case "0":

            $NamaHari = "Minggu";

            break;

        case "1":

            $NamaHari = "Senin";

            break;

        case "2":

            $NamaHari = "Selasa";

            break;

        case "3":

            $NamaHari = "Rabu";

            break;

        case "4":

            $NamaHari = "Kamis";

            break;

        case "5":

            $NamaHari = "Jumat";

            break;

        case "6":

            $NamaHari = "Sabtu";

            break;

    }



    return $NamaHari;

}



function MonthID($tanggalnya)

{

    switch(DATE("m",$tanggalnya))

    {

        case "1":

            $NamaBulan = "Januari";

            break;

        case "2":

            $NamaBulan = "Februari";

            break;

        case "3":

            $NamaBulan = "Maret";

            break;

        case "4":

            $NamaBulan = "April";

            break;

        case "5":

            $NamaBulan = "Mei";

            break;

        case "6":

            $NamaBulan = "Juni";

            break;

        case "7":

            $NamaBulan = "Juli";

            break;

        case "8":

            $NamaBulan = "Agustus";

            break;

        case "9":

            $NamaBulan = "September";

            break;

        case "10":

            $NamaBulan = "Oktober";

            break;

        case "11":

            $NamaBulan = "November";

            break;

        case "12":

            $NamaBulan = "Desember";

            break;

    }



    return $NamaBulan;

}

function DateID($tanggalnya)

{



    // $hasilTanggal = date('d') ." ". NamaPendekBulanIndonesia($tanggalnya) ." ". date('Y',$tanggalnya)  ;
    // format menampilkan hari $hasilTanggal = DayID($tanggalnya).", ".date('d',$tanggalnya)." ".

    $hasilTanggal = date('d',$tanggalnya)." ".

       MonthID($tanggalnya)." ".date('Y',$tanggalnya);



    return $hasilTanggal;

}
?>
