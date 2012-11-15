<!doctype html>
<html lang="<?php echo $language ?>">
<head>

	<title><?php echo $title ?></title>

	<?php if ( ! empty( $base ) ) : ?>
		<base href="<?php echo $base ?>">
	<?php endif ?>

	<?php foreach ( $metas as $name => $content ) : ?>
		<meta name="<?php echo $name ?>" content="<?php echo $content ?>">
	<?php endforeach ?>

</head>
<body<?php if ( ! empty( $class ) ) : ?> class="<?php echo $class ?>"<?php endif ?>>

	<div id="wrapper">
		<?php
			$multi = 'line';
			phpBlock( $multi );
			if ( $multi ) {
				$multi .= '...';
			}
		?>
		<h1><?php echo $multi ?></h1>
	</div>

</body>
</html>
