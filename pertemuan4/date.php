
<?php
//  Date
// Untuk menampilkan tanggal dengan ormat tertentu
// echo date("l, d-M-Y");


//time
//Unix Timestamp / EPOCH time
//detik yang sudah berlalu sejak 1 januari 1970
//echo time();
//echo date("d M Y", time()-60*60*24*100);

// mktime 
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
//echo date("l", mktime(0,0,0,2,12,1991));

// strtotime
echo date("l", strtotime("25 aug 1985"));