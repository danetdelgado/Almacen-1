
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('reset','style','fonts','http://fonts.googleapis.
			com/css?family=Amaranth,cake.generic'));

		echo $this->Html->script(array('jquery-1.7.2.min'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	



	<header>
		<h1>Módulo Almacen</h1>
		<nav>
			<ul>
				<li><a href="Provider">Proveedor</a></li>
				<li><a href="#">Producto</a></li>
				<li><a href="#">Orden de entrega</a></li>
				<li><a href="#">Login</a></li>			</ul>
		</nav>
	</header>
	<div class="wrapper_all">
	<section class="content">
		<section id="render_cake">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</section>	


		<section id="video">
		</section>
		<aside id="podcast-rel">
		</aside>
	</section>
	<section class="content">
		<section id="noticia-principal">
		</section>
		<aside id="noticias-rel">
			<?php echo $this->element('ultimos')?>

		</aside>
	</section>
	</div>
	<footer>
		
	</footer>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
