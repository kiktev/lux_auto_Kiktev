<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="<?php echo $this->getBP(); ?>/css/main.css?v=<?php echo filectime($this->getBP() . "css/main.css") ?>">

        <link rel="stylesheet" type="text/css" href="<?php echo $this->getBP(); ?>/css/header.css?v=<?php echo filectime($this->getBP() . "css/header.css") ?>">

        <link rel="stylesheet" type="text/css" href="<?php echo $this->getBP(); ?>/css/request.css?v=<?php echo filectime($this->getBP() . "css/request.css") ?>">
        
        <link rel="stylesheet" type="text/css" href="<?php echo $this->getBP(); ?>/css/footer.css?v=<?php echo filectime($this->getBP() . "css/footer.css") ?>">

        <?php
       		$css =  $this->get('css');
 
       		foreach($css as $val){	?>
       			<link rel="stylesheet" type="text/css" href="<?= $this->getBP() . '/' . $val ?>">
       	<?php
       		}
        ?>


        <meta name="description" content="Комісійна площадка Люксавто з продажу б/у автомобілів це активна допомога в досить клопітній задачі, а наші професіонали завжди раді вам у цьому допомогти. Ви можете звернутися до нас, не залежно від причин. Будь то брак часу або відсутність досвіду в цій нелегкій справі.">
        <meta name="keywords" content="авто, мукачево, продати авто, купити авто, автоплощадка, Luxavto">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<?= $this->getBP() ?> /images/favicon.png">
        <title><?= $this->get('title'); ?></title>
	
	</head>

    <script src="https://kit.fontawesome.com/8c5f8983b2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <body>

        <div id="header">
            <?php echo $this->get('menu'); ?>
        </div>

        <div id="request">
            <?php echo $this->get('requests'); ?>
        </div>
		
        <div class="container">
            <?= $this->get('content'); ?>		
        </div>
		
		<footer>
			 <?= $this->get('footer'); ?>	
		</footer>

    </body>

</html>