<?php
define( 'OFFER', '385' );
define( 'SITE', '1291' );
define( 'SKEY', '99470fe07c1505c94311252f4bcd23e9' );
define( 'THANKSPAGE', dirname(__FILE__).'/success.php' );
define( 'SETGEO', 'UA' );
require_once $_SERVER['DOCUMENT_ROOT'] . '/lcms.php';
?>
<!DOCTYPE html>

<html class="no-js" lang="ru">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Астролог и нумеролог Олег Персидский</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&amp;subset=cyrillic-ext" rel="stylesheet">


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.min.css">
	<link rel="shortcut icon" href="https://webshoppingnets.com/assets_page/b93f697df02adea82edeef4e592a75309cde952a/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/jquery.sidr.dark.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

	<style>
		.man-wrapper{float:left;max-width:320px;margin-right:20px;margin-bottom:20px}@media (max-width:768px){.man-wrapper{float:none;margin:0 auto;margin-bottom:20px}}.man-wrapper img{width:100%}.image-wrapper{max-width:100%;margin-bottom:25px}.image-wrapper img{max-width:100%}.form-wrapper{width:100%;display:inline-block}.prediction-form{margin-bottom:30px;max-width:400px;margin-top:30px}.form-control{width:100%;box-sizing:border-box;padding:6px 12px;height:32px}.prediction-btn{width:100%;box-sizing:border-box;color:#fff;background-color:#775d9f;height:44px;font-size:18px;font-weight:700;border:1px solid #750909;background-color:#dd1010}.prediction-btn:hover{width:100%;box-sizing:border-box;color:#fff;background-color:#9b7ec5;background-color:#ec3b3b;color:#fff}.prediction-btn.disabled,.prediction-btn[disabled]{color:#fff;background-color:#9385a7!important}.prediction-wrapper{display:none}.btn-wrapper{margin-bottom:30px;text-align:center}.order-btn{text-transform:uppercase;padding:8px 12px;border:1px solid #750909;border-radius:4px;background-color:#d30c0c;color:#fff;font-size:16px;font-weight:700;font-family:Roboto,sans-serif}.order-btn:hover{background-color:#ec3b3b;color:#fff}.logo img{width:200px}@media (max-width:767px){.logo img{width:140px}}.top-wrapper{max-width:680px}.rand-prediction{display:none;font-size:22px!important}.text a,p a{color:#5c00ea}.order-form-wrapper{margin:30px auto;max-width:480px;width:100%}.order-form-wrapper form{width:100%}.logo-text{font-size:16px;color:#fff;margin-top:5px;opacity:.9}#page-header-mobile{height:77px}#page-content{margin:0}@media all and (max-width:768px){.logo-text{font-size:16px}}
	</style>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="js/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
	<script>
		$(document).ready(function () {

			$('.birthday').mask("00.00.0000", { placeholder: "__.__.____", clearIfNotMatch: true });

			var storageNumber = localStorage.getItem('storageNumber');

			$('.prediction-form').submit(function (e) {
				e.preventDefault();

				var number = 0;
				if (storageNumber)
					number = storageNumber;
				else {
					number = 1 + Math.floor(Math.random() * 10);
					localStorage.setItem('storageNumber', number);
				}

				$('.rand-prediction[data-id="' + number + '"]').show();
				$('.prediction-btn').hide();
				$('.prediction-wrapper').fadeIn();
			});
		});
	</script>

</head>

<body>
	<div id="page-outer-wrap">
		<div id="page-inner-wrap">
			<header id="page-header-mobile" class="visible-xs">
				<div id="sidr" class="sidr right">
					<ul>
						<li class="cat-news">
							<a href="">Как привлечь удачу?</a>
						</li>
						<li class="cat-news">
							<a href="">Как привлечь деньги?</a>
						</li>
						<li class="cat-news">
							<a href="">Хочешь разбогатеть за 7 дней?</a>
						</li>

					</ul>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<a href="" class="logo"><img src="img/logo3.png"></a>
					</div>
					<div class="col-xs-6 text-right">
						<!-- <a href="" id="nav-expander"><span class="glyphicon glyphicon-th"></span></a> -->
					</div>
				</div>
			</header>
			<header id="page-header" class="hidden-xs">
				<div id="header-branding">
					<div class="container">
						<div class="row">
							<div style="padding-top: 5px;" class="col-sm-6 col-md-4">
								<a href="" class="logo"><img src="img/logo3.png"></a>
							</div>
							<div class="col-sm-6 col-md-8 text-center">
								<div style="" class="row">
									<div class="col-md-2"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="header-navigation">
					<div class="container">
						<nav id="menu">
							<ul class="nav clearfix">
								<li class="cat-news">
									<a href="">Как привлечь удачу?</a>
								</li>
								<li class="cat-news">
									<a href="">Как привлечь деньги?</a>
								</li>
								<li class="cat-news">
									<a href="">Хочешь разбогатеть за 7 дней?</a>
								</li>

							</ul>
						</nav>
					</div>
				</div>
			</header>
			<div class="container">
				<div id="page-content" class="clearfix">
					<div id="main" class="article" style="width: 100%;">
						<article id="article-post">
							<header>
								<h1 class="zodi-1">Астролог и нумеролог Олег Персидский: “Тайна даты вашего дня рождения и ее влияние на судьбу и финансовое благополучие.”</h1>
							</header>

							<div class="top-wrapper">
								<div class="man-wrapper">
									<img src="img/ab1.jpg" alt="">
								</div>

								<p class="lead">
									Вы никогда не задумывались как магия чисел влияет на нашу жизнь? Каждая цифра имеет свое значение. Расшифровав ее в дате рождения или имени, можно узнать архетипическое качество, воплощающее природные таланты, характер и судьбоносные знаки на пути человека. Держа в руках карту, вы сможете управлять своей жизнью, решив финансовые проблемы и притянув удачу. Как это сделать? В преддверии мощных энергетических дней, я помогу каждому, кто кто мне обратиться. Просто заполните данные о себе и получите ИНДИВИДУАЛЬНУЮ НУМЕРОЛОГИЧЕСКУЮ КАРТУ БЕСПЛАТНО.
								</p>

							</div>

							<div class="form-wrapper">
								<form class="prediction-form">
									<div class="form-group">
										<p class="lead">Для персональной нумерологической карты введите данные:</p>
									</div>
									<div class="form-group">
										<label for="">Ваше имя</label>
										<input class="form-control" type="text" placeholder="" required>
									</div>
									<div class="form-group">
										<label for="">Дата рождения</label>
										<input class="form-control birthday" type="text" placeholder="" required>
									</div>
									<button type="submit" class="prediction-btn btn btn-default">Получить предсказание</button>
								</form>
							</div>

							<div class="prediction-wrapper">
								<p data-id="1" class="lead rand-prediction"><b>
										Ваше предсказание: Вас ждет достаток и путь к успеху
									</b></p>
								<p data-id="2" class="lead rand-prediction"><b>
										Ваше предсказание: Вы раскроете в своем подсознании путь к успеху и благополучию
									</b></p>
								<p data-id="3" class="lead rand-prediction"><b>
										Ваше предсказание: Череда неудач закончится и вы получите много денег, если удержите энергию-удачи
									</b></p>
								<p data-id="4" class="lead rand-prediction"><b>
										Ваше предсказание: Вы сможете выявить свои лучшие качества и притянуть энергию удачи
									</b></p>
								<p data-id="5" class="lead rand-prediction"><b>
										Ваше предсказание: Вы поймаете волну везения и сможете ее удержать
									</b></p>
								<p data-id="6" class="lead rand-prediction"><b>
										Ваше предсказание: Перед вами откроется шанс удачно применить свои способности и хорошо на них заработать
									</b></p>
								<p data-id="7" class="lead rand-prediction"><b>
										Ваше предсказание: Этот год будет самым удачным в плане удачи и благополучия
									</b></p>
								<p data-id="8" class="lead rand-prediction"><b>
										Ваше предсказание: Вы сможете заниматься любимым делом и зарабатывать большие деньги
									</b></p>
								<p data-id="9" class="lead rand-prediction"><b>
										Ваше предсказание: Судьба откроет вам истинное предназначение и направит финансовое благополучие
									</b></p>
								<p data-id="10" class="lead rand-prediction"><b>
										Ваше предсказание: Вы будете по настоящему счастливы и богаты, если удержите энергию-удачи
									</b></p>

								<div class="prediction-text">
									<p class="lead">
										Ваша нумерологическая карта готова. Внимательно изучите информацию ее. Она поможет вам ре­а­ли­зо­вать свои та­лан­ты и спо­соб­нос­ти, о ко­то­рых вы, воз­мож­но, да­же не до­га­ды­ва­е­тесь. Удача на вашей стороне! Во второй половине года <b>вас ждет большая финансовая прибыль</b>, если вам не помешают недоброжелатели. Но вы сможете блокировать злые помыслы завистников, если удержите энергию-удачи. Но обо всем по порядку.
									</p>
								</div>

								<p class="lead">
									<b>
										Вы притягиваете удачу
									</b>
								</p>


								<p class="lead">
									Закончить полосу неудачи и начать полосу везения целиком и полностью в вашей власти. Нужно всего лишь поймать нужную волну и удержаться. Как это сделать? Представьте, что ловите волну на радио. Попытки могут отнять у вас какое-то время, но когда вы ее найдете – вы можете ее слушать столько, сколько захотите, потому что это <a href="" class="">ВАШ ВЫБОР</a>.
								</p>

								<p class="lead">
									Для этого, мысленно скажите себе, МНЕ ВСЕГДА И ВО ВСЕМ ВЕЗЕТ. Пусть это станет вашей мантрой, новой установкой, которая прочно осядет в подсознании. И на любое событие, которое происходит в вашей жизни, говорите «Все и всегда складывается к лучшему для меня».
								</p>

								<p class="lead">
									<b>Вы быстро настроитесь на волну везения и научитесь держаться за нее. После этого ваше финансовое благополучие <a href="">будет улучшаться</a>.</b>
								</p>

								<div class="image-wrapper">
									<center><img src="img/kak-zarabotat-mnogo-deneg.jpg"></center>
								</div>

								<p class="lead">
									<b>
										Как привлекать в свою жизнь столько денег, сколько вам нужно?
									</b>

								</p>

								<p class="lead">
									Нумерология и деньги – близки друг к другу, ведь деньги мы так же считаем, как и числа. Но не каждому дано разобраться в магии денежных чисел. Ваше число 8. Восемь - самое <a href="">денежное</a> число, так как имеет в своей этимологии символ бесконечности, который, обеспечит вечное движение денег к вам.
								</p>

								<p class="lead">
									Вас ждет “нескончаемая прибыль”. Притянув к себе удачу, вы удивитесь как легко к вам <a href="">потянуться деньги</a>. Но помешать им смогут завистники, которые своей негативной энергией будут пытаться поставить блок.
								</p>

								<p class="lead">
									<b>
										Как защититься от негативной энергии?
									</b>

								</p>


								<p class="lead">
									Ваша аура слаба. И чтобы защитить себя и притянуть удачу нужен специальный нумерологический обряд, направленный на удачу и заряженный на защиту. То есть вам нужна монета с определенной символикой, подходящая под ваши числовые значения. Но будьте осторожны, делая данный обряд самостоятельно, вы рискуете допустить ошибку и направить силы Вселенной против вас.
								</p>

								<p class="lead">
									Чтобы не допустить ошибку, я лично заряжу <a href="">талисман вашей энергией</a>, поставив блок от недоброжелателей.
								</p>

								<div class="image-wrapper">
									<center><img src="img/amulet1.png"></center>
								</div>

								<p class="lead">
									Энергетический заряд <a href="">амулета</a> создаст вокруг вас защитное поле от завистников и сильный денежный “магнит”. Для того, чтобы монета начала действовать, говорите ей каждый день о своих желаниях.
									<b>Все амулеты уникальны и не могут быть использованный разными людьми.</b>
								</p>

								<p class="lead">
									<a href="">Амулет</a> притягивает положительные энергетические потоки, которые помогают владельцу не только создать вокруг себя и близких мощный энергетический блок от отрицательной энергетики и сглаза, но и:
								</p>

								<p class="lead">
									<i><span><img width="16" alt="" src="img/bullet.png" height="16">
											&nbsp;укрепить денежную сферу;
											<br></span></i>
									<i><span><img width="16" alt="" src="img/bullet.png" height="16">
											&nbsp;запрограммировать себя на удачу;
											<br></span></i>
									<i><span><img width="16" alt="" src="img/bullet.png" height="16">
											&nbsp;решить проблемы на работе и подняться по карьерной лестнице;
											<br></span></i>
									<i><span><img width="16" alt="" src="img/bullet.png" height="16">
											&nbsp;быстро и легко ставить и достигать цели;
											<br></span></i>
									<i><span><img width="16" alt="" src="img/bullet.png" height="16">
											&nbsp;наполнить жизнь яркими эмоциями;
											<br></span></i>
									<i><span><img width="16" alt="" src="img/bullet.png" height="16">
											&nbsp;обрести уверенность в себе.
											<br></span></i>
								</p>

								<p class="lead">
									Чтобы притянуть денежные средства и удачу, необходимо <b>всегда при себе иметь <a href="">амулет</a>, чтобы быть всегда защищенным</b>. Мысленно говорите оберегу о своих желаниях и он обязательно поможет воплотить <b>все желания в реальность.</b>
									Тем более, что судьба и финансовое благополучие уже на вашей стороне. Сегодня можно еще успеть заказать амулет за 69 ГРН!
									</b>
								</p>

								<div class="order-form-wrapper">
									<form action="" method="post">
									<?=$params;?>
										<div class="form-group">
											<input class="form-control" name="name" type="text" placeholder="Ваше имя" required>
										</div>
										<div class="form-group">
											<input class="form-control" name="phone" type="tel" placeholder="Телефон" required>
										</div>
										<button type="submit" class="order-btn">ЗАКАЗАТЬ ИНДИВИДУАЛЬНЫЙ АМУЛЕТ СО СКИДКОЙ 50%</button>
										<br>
										<div style=" font-size: 18px; text-align: center;">Цена 69 ГРН</div>
									</form>
								</div>

								<div class="comments">
									<div class="title">Комментарии:</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar11.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href="">Алекс</a></b>
												<span>
													20 марта 2020
												</span>
											</div>
											<div class="text">
												Благодарю вас за помощь и бесплатную карту!
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar12.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href="">Валерия </a></b>
												<span>
													20 марта 2020
												</span>
											</div>
											<div class="text">
												Огромное спасибо. Было интересно почитать характеристику о себе, но самое главное, что всё обо мне и соответствует мне. Отдельно хочу выразить благодарность за амулет. Он действительно притянул ко мне удачу и из моей жизни <a href="">исчезли все недоброжелатели</a>.
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar13.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href=""> Антон</a></b>
												<span>
													19 марта 2020
												</span>
											</div>
											<div class="text">
												Тоже себе такой амулет заказать надо а то в последнее время все через одно место! как будто кто то специально мешает.
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar14.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href="">Nina </a></b>
												<span>
													19 марта 2020
												</span>
											</div>
											<div class="text">
												Скорее всего так и есть. Люди чему-то вам позавидовали и все.
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar15.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href="">Алевтина </a></b>
												<span>
													17 марта 2020
												</span>
											</div>
											<div class="text">
												Да… чистая правда. Многие даже мелочам завидуют и переманивают к себе удачу(((
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar16.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href="">Боб </a></b>
												<span>
													16 марта 2020
												</span>
											</div>
											<div class="text">
												20 лет я не мог накопить на квартиру. А тут всего за полгода я <a href="">купил квартиру</a> в центре. И самое главное, что поток финансов не останавливается. И все это благодаря вам и моему личному амулету. Спасибо большое!
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar17.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href="">Марина Ногина</a></b>
												<span>
													15 марта 2020
												</span>
											</div>
											<div class="text">
												Я знаю, что многие даже не со зла завидуют. У меня сестра такая. Вроде хороший человек, но вот ее вечное чувство зависти… И вроде не черная, но все равно всегда против меня все было. Как хорошо, что есть такой человек, который сделал мне монету-оберег. теперь мой талисман всегда со мной и <b><a href="">амулет</a></b> реально работает, спасибо!
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar18.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href="">Александра Гунина </a></b>
												<span>
													14 марта 2020
												</span>
											</div>
											<div class="text">
												надо и себе такой заказать
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar19.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href="">Олег Т.</a></b>
												<span>
													14 марта 2020
												</span>
											</div>
											<div class="text">
												обязательно закажите! он изменил всю мою жизнь в лучшую сторону. Страшно вспомнить, но совсем недавно я погряз в долгах, прятался от коллекторов и был на грани самоубийства, так как даже жена ушла от безденежья. Но всего одна монета <a href="">вытащила меня со дна</a> и буквально за год я расплатился со всеми долгами и сколотил свое состояние, которое постоянно приумножается.
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="img/avatar20.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b><a href=""> Инга Осипова </a></b>
												<span>
													14 марта 2020
												</span>
											</div>
											<div class="text">
												Очень благодарна за помощь и поддержку!!! Отзывчивый человек и хороший специалист в своем деле. Видит ситуацию, как есть, дает очень дельные советы, помогает вернуть уверенность в себе и в завтрашнем дне. Спасибо за помощь и мой <a href="">специальный оберег</a>, который убрал всех недоброжелателей из моей жизни.
											</div>
										</div>
									</div>
								</div>

							</div>
						</article>
					</div>

				</div>
			</div>
		</div>
		<footer id="page-footer">
			<div class="container">
				<div class="copyright row">
					<div class="col-sm-6">
						<br>© 2015-2020. Копирование материалов данного сайта запрещено. <br>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<? footer(); ?>
</body>

</html>