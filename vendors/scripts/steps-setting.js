let base = "http://localhost/bmb/";
function register() {
	var data = $("#registerFRM").serialize();
	$.ajax({
		url: base + "api/private/api.php?endPoint=register",
		type: "POST",
		data: data,
		success: function (result) {
			if ($.trim(result) == "ok") {
				$('#success-modal-btn').trigger('click');
			} if($.trim(result) == "usedMail"){
				swal({
					title: "Hata",
					icon: "error",
					text: "Bu e-posta zaten kayıtlı",
					showDenyButton: false,
					showCancelButton: false,
					confirmButtonText: "Tamam",
				});
			}
			else {
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

$(".tab-wizard").steps({
	headerTag: "h5",
	bodyTag: "section",
	transitionEffect: "fade",
	titleTemplate: '<span class="step">#index#</span> #title#',
	labels: {
		finish: "Submit"
	},
	onStepChanged: function (event, currentIndex, priorIndex) {
		$('.steps .current').prevAll().addClass('disabled');
	},
	onFinished: function (event, currentIndex) {
		$('#success-modal').modal('show');
	}
});

$(".register-wizard").steps({
	headerTag: "h5",
	bodyTag: "section",
	transitionEffect: "fade",
	titleTemplate: '<span class="step">#index#</span> <span class="info">#title#</span>',
	labels: {
		finish: "Kayıt Ol",
		next: "İleri",
		previous: "Geri",
	},

	onStepChanged: function (event, currentIndex, priorIndex) {
		$('.steps .current').prevAll().addClass('disabled');
	},
	onFinished: function (event, currentIndex) {
		register()
	}
});