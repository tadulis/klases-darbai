<?php
	$cards = 
	[
		[
			'url' => 'https://images.pexels.com/photos/736230/pexels-photo-736230.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			'alt' => 'roze',
			'text' => 'raudona roze',
		],
		[
			'url' => 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Flower_jtca001.jpg',
			'alt' => 'kazkokia',
			'text' => 'kazkokia gele',
		],
		[
			'url' => 'https://images.pexels.com/photos/60597/dahlia-red-blossom-bloom-60597.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			'alt' => 'kazkokia1',
			'text' => 'kazkokia1 gele',
		],
	];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		/*aprasyti korteliu stiliu */
	</style>
</head>
<body>
	<section class="cards">
		<?php foreach ($cards as $value):?>
		<div class="card">
			<img src="<?php print $value['url']; ?>" alt="<?php print $value['alt']; ?>">
			<p><?php print $value['text']; ?></p>
		</div>
		<?php endforeach; ?>
	</section>
</body>
</html>