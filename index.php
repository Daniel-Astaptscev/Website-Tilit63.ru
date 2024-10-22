<!DOCTYPE html>
<html lang="ru">
<head>
	<!--Meta-->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ООО УК «Тилит» - молодая и перспективная управляющая компания города Самара. Аварийно-диспетчерская служба работает круглосуточно, телефон: 990-47-90. Адрес местоположения: г. Самара, пр-кт Кирова д. 84а (офис 7)"/>
	<!--Favicon-->
	<link rel="icon" href="./img/favicons/favicon.ico" type="image/icon" sizes="any">
	<link rel="icon" href="./img/favicons/favicon-32x32.png" type="image/png">
	<link rel="apple-touch-icon" href="./img/favicons/apple-touch-icon.png">
	<link rel="manifest" href="./img/favicons/site.webmanifest">
   <!--Style-->	
	<link href="./css/reset_style.css" rel="stylesheet">
   <link href="./css/bootstrap.min.css" rel="stylesheet">
   <link href="./css/style.css" rel="stylesheet">
   <!--Media queries-->
   <link rel="stylesheet" media="only screen and (max-width: 767px)" href="./css/style-xs.css">
   <!--Fonts-->	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@600&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet">
   <title>ООО УК «Тилит»</title>
</head>
<body>
    
	<!--Preloader-->
	<div class='preloader' id='preloader'>
		<img id='myPreloader' src='./img/gif/preloader-128.gif' alt='preloader'>
   </div>
   <script>
        if (screen.width <= 767) {
            document.getElementById("myPreloader").src="./img/gif/preloader-64.gif";
        }
    </script>

	<!--Header-->
	<div class="mt-3 mt-lg-2 mb-1 mb-lg-3 container">
		<div class="row">
		   <div class="offset-1 col-11 col-lg-4 offset-lg-0">
				<div class="d-flex align-items-center">
					<div>
						<img class="logo" src="./img/logo.svg" alt="logo">
					</div>
					<div class="ps-0 pe-5 ps-lg-1 pe-lg-0 d-flex align-items-center">
						<h4 class="font-logo text-center">Управляющая компания «Тилит»</h4>
					</div>
				</div>	
			</div>	
		  	<section class="mt-2 col-12 col-lg-8">
				<div class="d-flex justify-content-center">
					<div class="me-3 d-flex justify-content-start">
						<div class="d-flex align-items-center">
							<img src="./img/icons/adress.png" alt="icon">
						</div>
						<div class="ps-2 text-center">
							<h6 class="font-header">Адрес:</h6>
							<article class="font-header">г. Самара пр-кт Кирова<br>д. 84а (офис 7)</article>	
						</div>
					</div>
					<div class="me-4 d-flex justify-content-start">
						<div class="d-flex align-items-center">
							<img src="./img/icons/clock.png" alt="icon">
						</div>
						<div class="ps-3 text-center">
							<h6 class="font-header">Время работы:</h6>
							<article class="font-header">ПН-ПТ с 08:00 до 17:00<br>СБ, ВС - выходные дни</article>	
						</div>
					</div>
					<div class="d-flex justify-content-start">
						<div class="d-flex align-items-center"> 
							<img src="./img/icons/phone.png" alt="icon">
						</div>
						<div class="ps-2 text-center">
							<h6 class="font-header">Телефоны:</h6>
							<article class="font-header"><a href="tel:+88469904790">ЖЭУ: 8-(846)-990-47-90</a><br>
							<a href="tel:+88469906390">Офис: 8-(846)-990-63-90</a></article>		
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<!--Navigation-Bar-->
	<nav class="navbar navbar-expand-lg nav-gradient">
		<div class="container justify-content-center">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				 <ul class="ms-0 ms-lg-5 nav justify-content-center">
					<li class="ms-2">
						<a href="https://twitter.com/tilit163" target="_blank"><img id="img" class="icon-max" src="./img/icons/x.svg" data-hover-src="./img/icons/x2.svg" alt="icon"></a>
					</li>
					<li class="ms-2">
						<a href="https://vk.com/yk_tilit" target="_blank"><img id="img" class="icon-max" src="./img/icons/vk.svg" data-hover-src="./img/icons/vk2.svg" alt="icon"></a>
					</li>
					<li class="ms-2">
						<a href="https://t.me/UKTilit63" target="_blank"><img id="img" class="icon-max" src="./img/icons/telegram.svg" data-hover-src="./img/icons/telegram2.svg" alt="icon"></a>
					</li>
					<li class="ms-4 nav-item">
					  <a class="nav-link active nav-ibm-plex" aria-current="page" href="#main">Главная</a>
					</li>
					<li class="ms-3 nav-item">
					  <a class="nav-link nav-ibm-plex" href="./html/services.html">Услуги</a>
					</li>
					<li class="ms-3 nav-item">
					  <a class="nav-link nav-ibm-plex" href="./html/housing.html">Жилой фонд</a>
					</li>
					<li class="ms-3 nav-item dropdown">
					  <a class="nav-link dropdown-toggle nav-ibm-plex" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Документация
					  </a>
					  <ul class="dropdown-menu">
						  <li><a class="dropdown-item" href="./html/license.html">Лицензия ООО УК «Тилит»</a></li>
						  <li><hr class="dropdown-divider"></li>
						  <li><a class="dropdown-item" href="./html/charter.html">Устав ООО УК «Тилит»</a></li>
						  <li><hr class="dropdown-divider"></li>
						  <li><a class="dropdown-item" href="./html/map.html">Карточка предприятия</a></li>
						  <li><hr class="dropdown-divider"></li>
						  <li><a class="dropdown-item" href="./html/rates.html">Тарифы</a></li>
						  <li><hr class="dropdown-divider"></li>
						  <li><a class="dropdown-item" href="./html/sample-model.html">Образцы модельного договора</a></li>
					  </ul>
					</li>
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle nav-ibm-plex" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Отчётность
					  </a>
					  <ul class="dropdown-menu">
					      <li><a class="dropdown-item" href="./html/repair-2023.html">Текущий ремонт за 2023 год</a></li>
						  <li><a class="dropdown-item" href="./html/repair-2022.html">Текущий ремонт за 2022 год</a></li>
						  <li><a class="dropdown-item" href="./html/repair-2021.html">Текущий ремонт за 2021 год</a></li>
						  <li><a class="dropdown-item" href="./html/repair-2020.html">Текущий ремонт за 2020 год</a></li>
					  </ul>
					</li>
					 <li class="ms-3 nav-item">
						<a class="nav-link nav-ibm-plex" href="./html/contact.html">Контакты</a>
					 </li>
				</ul>
			</div>
		</div>
	</nav>

	<main>
		<!--Carousel-->
		<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="12000">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container pt-4">
						<div id="news-1" class="row">
							<div class="mt-2 mt-lg-4 mb-5 pt-2 pt-lg-4 ps-2 ps-lg-4 pe-1 pe-lg-5 offset-1 col-10 offset-lg-1 col-lg-3 border">
								<div class="pb-2 pb-lg-4 d-flex justify-content-start">
									<div class="d-flex align-items-center">
										<img class="pe-2" src="./img/icons/work.png" alt="icon">
										<article class="icon-text">штат компании полностью укомплектован квалифицированными специалистами</article>
									</div>
								</div>
								<div class="pb-2 pb-lg-4 d-flex justify-content-start">
									<div class="d-flex align-items-center">
										<img class="pe-2" src="./img/icons/inspection.png" alt="icon">
										<article class="icon-text">активное участие в государственных программах Самарской области</article>
									</div>
								</div>
								<div class="pb-2 pb-lg-5 d-flex justify-content-start">
									<div class="d-flex align-items-center">
										<img class="pe-2" src="./img/icons/24.png" alt="icon">
										<article class="icon-text">аварийно-диспетчерская служба работает круглосуточно</article>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-4">
								<img class="main-1-img" src="./img/image/main-1.svg" alt="image">
							</div>
							
							<div class="offset-1 col-10 offset-lg-0 col-lg-4 ">
								<div class="pt-0 pt-lg-1 pb-2 pb-lg-4">
									<h3 class="font-gradient ibm-plex">О нас</h3>
									<div class="mt-2 mb-2 line hatch-gradient"></div>
									<p class="font-news">Сотрудничество с нами - залог спокойствия и комфорта.<br>Мы предлагаем Вам качественные услуги по обслуживанию и ремонту Вашего дома!<br>ООО УК «Тилит», успешно развивающаяся компания.<br>Свою деятельность по управлению многоквартирными домами компания начала с января 2020 года.</p>
								</div>
								<div class="row">
									<div class="col-6">
										<article class="font-gradient carousel-ibm-plex text-center">4<br>года</article>
										<p class="pt-2 font-news text-center">успешной деятельности</p>
									</div>
									<div class="col-6">
										<article class="font-gradient carousel-ibm-plex text-center">35<br>МКД</article>
										<p class="pt-2 font-news text-center">в нашем обслуживании</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<div class="container pt-0 pt-lg-3">
						<div class="row">
							<div class="container col-12 col-lg-4 pt-3">
								<img class="main-2-img" src="./img/image/main-2.svg" alt="icon">
							</div>
							<div class="container offset-1 col-10 offset-lg-1 col-lg-7 pt-2">
								<p class="text-center"><strong>Уважаемые жители!</strong></p>
								<p>Напоминаем Вам о необходимости оплаты квитанций за жилищно-коммунальные услуги <b>до 10 числа</b> каждого месяца.<br>Просим Вас своевременно производить платежи, не допуская образования задолженности, чтобы избежать начисления пеней.</p>
								<p>Выполнить оплату можно одним из следующих способов:</p>		
								<div class="d-flex justify-content-start">
									<div>
										<img src="./img/icons/price.png" alt="icon">
									</div>
									<div class="d-flex align-items-center">
										<ul>
											<li>• с помощью QR кода на квитанции;</li>
											<li>• через мобильное приложение СБЕР онлайн;</li>
											<li>• в отделениях ПАО «Сбербанк».</li>
										</ul>
									</div>
								</div>	
								<p>При возникновении вопросов по начислениям, Вы можете обращаться к специалистам по телефону:</p>		
								<div class="d-flex justify-content-start">
									<div class="d-flex align-items-center">
										<img src="./img/icons/phone-office.png" alt="icon">
									</div>
									<div class="d-flex align-items-center">
										<ul>
											<li>201-53-16 и 201-53-19 (Кировский район);</li>
											<li>201-53-40 и 201-53-41 (Советский район).</li>
											<li>201-53-16 и 201-53-19 (Промышленный район);</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
			</button> 
		</div>

		<!--Hatch-->
		<div class="hatch hatch-gradient"></div>
		
		<!--News & VK.Widgets-->
        <div class="container pb-4">
            <div class="row">
                <h3 class="pb-2 hatch-gradient font-title-news">Наши новости</h3>
                <div class="row">
                    <div class="pb-2 pb-lg-0 col-12 col-lg-4">
                        <div id="vk_post1"></div>
                    </div>
                    <div class="pb-2 pb-lg-0 col-12 col-lg-4">
                        <div id="vk_post2"></div>
                    </div>
                    <div class="pb-2 pb-lg-0 col-12 col-lg-4">
                        <div id="vk_post3"></div>
                    </div>
                </div>
            </div>

            <div id="vk_posts"></div>

            <?

            $groupId = <secret-key>;
            $accessToken = '<secret-key>';

            $url = "https://api.vk.com/method/wall.get?owner_id=-{$groupId}&offset=1&count=4&access_token={$accessToken}&v=5.131";
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            if (isset($data['error'])) {
                echo "Ошибка при получении записей со стены: " . $data['error']['error_msg'];
                exit;
            }

            ?>

            <script src="https://vk.com/js/api/openapi.js?169" type="text/javascript"></script>
            <script type="text/javascript">
                (function() {
                    <?php
                    foreach ($data['response']['items'] as $index => $post) {
                        $postHash = $post['hash'];
                        $postId = $post['id'];
                        if ($postHash && $postId) {
                            echo 'VK.Widgets.Post("vk_post' . ($index + 1) . '", -212717509, ' . $postId . ', "' . $postHash . '", {no_loading: 1, width: "auto", height: "auto"});';
                        }
                    }
                    ?>
                })();
            </script>
		</div>
	</main>

	<!--Footer-->
	<div class="nav-gradient">
		<div class="container pt-3 pb-2">
			<div class="row">
				<div class="col-4 col-lg-3">
					<div class="ms-1 ms-lg-4 d-flex justify-content-start">
						<div class="font-footer">
							Наш стиль
							<div class="mt-1 icon-block">  
								<a href="https://github.com/Daniel-Astaptscev" target="_blank"><img class="icon-min" src="./img/icons/github.svg" alt="icon"></a>
								<a href="https://icons8.ru" target="_blank"><img class="icon-min" src="./img/icons/icons8.svg" alt="icon"></a>
								<a href="https://www.freepik.com/" target="_blank"><img class="icon-min" src="./img/icons/freepik.svg" alt="icon"></a>
							</div>
						</div>
					</div>
				</div> 
				<div class="pb-1 col-8 offset-lg-3 col-lg-6">
					<div class="d-flex justify-content-end font-title-footer">
						© ООО УК «Тилит» – 2020-2024
					</div>
					<div class="d-flex justify-content-end font-text-footer">
						Лицензия № 063 000634 от 14.01.20г.
					</div>
					<div class="font-author-footer d-flex justify-content-end">
						Designed by Daniel Astaptscev
					</div>	
				</div>
			</div>
		</div>
	</div>

	<script src="./js/bootstrap.bundle.min.js"></script>

	<!--Preloader-->
	<script>
		window.onload = function() {
		// cпрячем прелоадер после загрузки страницы
		document.querySelector('#preloader').style.display = 'none';
		};
	</script>
	
	<!--Replacing icons in nav-->
	<script>
		function createHoverImage() {
		  document.querySelectorAll('[data-hover-src]').forEach((img) => {
			const src = img.getAttribute('src');
			const srcH = img.getAttribute('data-hover-src');
			img.addEventListener('mouseover', () => {img.src = srcH;})
			img.addEventListener('mouseout', () => {img.src = src;})
		  });
		}
		createHoverImage();
	</script>
</body>
</html>