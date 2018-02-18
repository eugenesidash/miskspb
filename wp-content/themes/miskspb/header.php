<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/media.css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- START Header -->
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="logo">
						<a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo_header.png" alt="MISK_logo"></a>
					</div>
				</div>
				<div class="col-lg-7 col-md-7">
					<?php wp_nav_menu( array(
						'theme_location'  => '',
						'menu'            => '',
						'container'       => 'ul',
						'container_class' => 'navigations',
						'sub-menu'				=> 'menu__drop',
						'container_id'    => '',
						'menu_class'      => 'navigations',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
						) ); ?>
		<!-- 				<ul class="navigations">
							<li class="menu__list"><a href="#">О компании</a>
								<ul class="menu__drop">
									<li><a href="#">Деятельность компании</a></li>
									<li><a href="#">Руководство</a></li>
								</ul>
							</li>
							<li class="menu__list"><a href="#">Наши работы</a>
								<ul class="menu__drop">
									<li><a href="#">Завершенные объекты</a></li>
									<li><a href="#">Объекты в работе</a></li>
								</ul>
							</li>
							<li><a href="#">Услуги</a></li>
							<li><a href="#">Допуски и лицензии</a></li>
							<li><a href="#">Реквизиты</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					-->
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="contacts_header">
						<a href="tel:+78126007008">+7 (812) 600-70-08</a>
						<a href="mailto:info@miskspb.ru">info@miskspb.ru</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END Header -->