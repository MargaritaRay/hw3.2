<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		img{
			max-width: 300px;
		}
		.gal{
			max-width: 650px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
<?php include 'arr.php'; ?>

<div class="gal">
<!--Для каждого элемента из масива $image как $img выводить то что в скобках-->
	<?php foreach ($image as $k => $img){ ?>
		<!--Ссылка на image.php ?- как параметр берем значение file равное значению массива, который выводится
		поочередно на страницу, далее магия из файла image.php -->
		<a href="image.php?id=<?php echo $k; ?>">
			<!-- За счет того, что мы находимся в цикле, $img поочередно выводит все имена картинок в массиве, с
			помощью этого html находит путь к нужному изображению-->
			<img src="img/<?php echo $img; ?>" alt="">
		</a>
		<!-- Закрывающая скобка, о том что цикл окончен-->
	<?php } ?>
</div>

</body>
</html>