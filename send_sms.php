<?php
include "../lib/conf.php";
include "../lib/koneksi.php";

$handphone = $_POST['handphone'];
$isi_sms = $_POST['isi_sms'];


$sms_kirim = mysql_query("insert into outbox (InsertIntoDB,SendingDateTime,DestinationNumber,TextDecoded,
	SendingTimeOut,DeliveryReport,CreatorID) values (sysdate(),sysdate(),'$handphone','$isi_sms',
	sysdate(),'yes','system')");

if($sms_kirim){
	echo "Pesan Terkirim";
	echo "<meta http-equiv='refresh' content='1; url=?tampil=sms'>";
}
else{
	echo "Pesan Gagal Terkirim";
	echo "<meta http-equiv='refresh' content='1; url=?tampil=sms'>";
}

?>