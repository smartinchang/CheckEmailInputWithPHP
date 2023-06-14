<?php
	// Sử dụng hàm filter_var tring PHP để kiểm tra dữ liệu nhập vào có phải là địa chỉ email không
	$email = "tuan.trancong@gmail.com";
	$check = filter_var($email, FILTER_VALIDATE_EMAIL);
	if ($check != false) {
		echo("Đây là địa chỉ email");
	} else {
		echo("Đây khổng phải là địa chỉ email");
	}
?>