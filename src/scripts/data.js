let base = "http://localhost/bmb/";
function addDb() {
	var data = $("#addDbFrm").serialize();
	$.ajax({
		url: base + "api/private/api.php?endPoint=addDB",
		type: "POST",
		data: data,
		success: function (result) {
			if ($.trim(result) == "ok") {
				swal({
					title: "İşlem Başarılı",
					icon: "success",
					text: "Kayıt Başarıyla Eklendi",
					showDenyButton: false,
					showCancelButton: false,
					confirmButtonText: "Tamam",
				});
			} else if ($.trim(result) == "usedMail") {
				swal({
					title: "Hata",
					icon: "error",
					text: "Bu e-posta zaten kayıtlı",
					showDenyButton: false,
					showCancelButton: false,
					confirmButtonText: "Tamam",
				});
			} else {
				swal({
					title: "Hata",
					icon: "error",
					text: "Kayıt oluşturulurken bir hata ile karşılaşıldı",
					showDenyButton: false,
					showCancelButton: false,
					confirmButtonText: "Tamam",
				});
			}
		},
	});
}
function deleteDb(db_id) {
	var data = new FormData();
	data.append("id", db_id);
	$.ajax({
		url: base + "api/private/api.php?endPoint=deleteDB",
		type: "POST",
		data: data,
		processData: false,
		contentType: false,
		success: function (result) {
			if ($.trim(result) == "ok") {
				swal({
					title: "İşlem Başarılı",
					icon: "success",
					text: "Deleted",
					showDenyButton: false,
					showCancelButton: false,
					confirmButtonText: "Tamam",
				});
			} else if ($.trim(result) == "usedMail") {
				swal({
					title: "Hata",
					icon: "error",
					text: "Bu e-posta zaten kayıtlı",
					showDenyButton: false,
					showCancelButton: false,
					confirmButtonText: "Tamam",
				});
			} else {
				swal({
					title: "Hata",
					icon: "error",
					text: "Kayıt oluşturulurken bir hata ile karşılaşıldı",
					showDenyButton: false,
					showCancelButton: false,
					confirmButtonText: "Tamam",
				});
			}
		},
	});
}