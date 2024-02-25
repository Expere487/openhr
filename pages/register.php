<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
		crossorigin="anonymous"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != "dataLayer" ? "&l=" + l : "";
			j.async = true;
			j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html" style="color: #1b00ff; font-weight: bolder;">
					<span class="icon-copy ti-server pr-2" style="font-weight: bolder;"></span> Data Vault
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.html">Sign In</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/register-page-img.png" alt="" />
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="register-wizard wizard-circle wizard" id="registerFRM">
								<h5>Kişisel Bilgiler</h5>
								<section>
									<div class="form-wrap  mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">İsminiz</label>
											<div class="col-sm-8">
												<input type="text" required class="form-control"
													onchange='document.getElementById("nameOverview").innerHTML = this.value; document.getElementById("nameOverview2").innerHTML = this.value'
													name="firstName" />
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Soyisminiz</label>
											<div class="col-sm-8">
												<input type="text" required
													onchange='document.getElementById("surnameOverview").innerHTML = this.value'
													class="form-control" name="lastName" />
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Cinsiyetiniz</label>
											<div class="col-sm-8">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" required id="male" name="gender"
														class="custom-control-input" value="male" />
													<label class="custom-control-label" for="male">Erkek</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" required id="female" name="gender"
														class="custom-control-input" value="female" />
													<label class="custom-control-label" for="female">Kadın</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Doğum Tarihiniz</label>
											<div class="col-sm-8">
												<input type="text" required class="form-control date-picker"
													name="birthDay" />
											</div>
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<h5>Hesap Bilgileriniz</h5>
								<section>
									<div class="form-wrap  mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">E-posta Adresiniz</label>
											<div class="col-sm-8">
												<input type="email" name="mail" required
													onchange='document.getElementById("mailOverview").innerHTML = this.value'
													class="form-control" />
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Parolanız</label>
											<div class="col-sm-8">
												<input type="password" name="pass" id="pass" required
													class="form-control" />
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Parolanızı Onaylayın</label>
											<div class="col-sm-8">
												<input type="password" onchange="passCheck()" name="checkPass"
													id="checkPass" required class="form-control" />
											</div>
										</div>
									</div>
									<div class="alert alert-danger d-none" id="passAlert" role="alert">
										Lütfen Parolalarınızı Kontrol edin.
									</div>
								</section>

								<!-- Step 3 -->
								<h5>Adres Bilgileriniz</h5>
								<section>
									<div class="form-wrap  mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Ülkeniz</label>
											<div class="col-sm-8">
												<input type="text" required
													onchange='document.getElementById("countryOverview").innerHTML = this.value'
													class="form-control" name="country" />
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Şehriniz</label>
											<div class="col-sm-8">
												<input type="text" required class="form-control"
													onchange='document.getElementById("cityOverview").innerHTML = this.value'
													name="city" />
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Adres Satırı 1</label>
											<div class="col-sm-8">
												<input type="text" required class="form-control" name="address_line" />
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Adres Satırı 2</label>
											<div class="col-sm-8">
												<input type="text" required class="form-control"
													name="address_line_2" />
											</div>
										</div>
									</div>
								</section>
								<!-- Step 4 -->
								<h5>Kayıt Özeti</h5>
								<section>
									<div class="form-wrap  mx-auto">
										<ul class="register-info">
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">İsim Soyisim</div>
													<div class="col-sm-8"><span id="nameOverview"></span> <span
															id="surnameOverview"></span></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">E-posta</div>
													<div class="col-sm-8" id="mailOverview"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Ülke</div>
													<div class="col-sm-8" id="countryOverview"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Şehir</div>
													<div class="col-sm-8" id="cityOverview"></div>
												</div>
											</li>
										</ul>
										<div class="custom-control custom-checkbox mt-4">
											<input type="checkbox" class="custom-control-input" id="customCheck1" />
											<label class="custom-control-label" for="customCheck1">Hizmet şartlarını ve
												gizlilik politikasını okudum, kabul ediyorum</label>
										</div>
									</div>
								</section>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal"
		data-backdrop="static">
		Launch modal
	</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Kayıt Başarılı!</h3>
					<div class="mb-30 text-center">
						<img src="vendors/images/success.png" />
					</div>
					Aramıza hoşgeldin <span id="nameOverview2"></span>, şimdi seni giriş sayfasına yönlendireceğiz.
					Fakat
					hizmetlerimizi kullanmadan önce e-posta adresini doğrulaman gerektiğini unutma.

					Tekrar aramıza hoşgeldin. Diğer bütün kullanıcılarımız gibi seni de aramızda gördüğümüz için çok
					mutluyuz.
				</div>
				<div class="modal-footer justify-content-center">
					<a href="sign-in" class="btn btn-primary">Anladım</a>
				</div>
			</div>
		</div>
	</div>

	<!-- welcome modal end -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
			style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<script>
		function passCheck() {
			var form = $("#registerFRM");
			let pass = $("#pass").val()
			let passCheck = $("#checkPass").val();
			var nextButton = form.find(".actions a[href='#next']");
			if (pass !== passCheck) {
				nextButton.addClass("btn disabled");
				$("#passAlert").removeClass("d-none");
				return false;
			} else {
				nextButton.removeClass("disabled");
				$("#passAlert").addClass("d-none");
				return true;
			}
		}
	</script>
</body>

</html>