	<?php
	
	if($v1){
		$t = $d['nm_noticia'];
	}
	
	if($v2){
		$t = $area['nm_area'];
	} else{
		$t = $s['nm_site'];
	}
	
	?>
	
	<head>
		    <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>
            	<?php echo $s['sigla']; ?>
            	<?php
            		if ($t){
            			echo '- '. $t;
            		}
            	?>
            </title>
            <link rel="shortcut icon" href="<?php echo $cam; ?>img/favicon.ico">
            <link href="<?php echo $cam; ?>css/bootstrap.css" rel="stylesheet">
            <!-- <link href="<?php echo $cam; ?>css/font-awesome.css" rel="stylesheet"> -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            <link href="<?php echo $cam; ?>css/padrao.css" rel="stylesheet">
            <link href="<?php echo $cam; ?>css/slider.css" rel="stylesheet">
            <link href='insumo/font/fonts.css' rel='stylesheet'>
            <!-- CSS para a barra superior -->
            <link rel="stylesheet" href="https://prodap.ap.gov.br/padrao/barra/suporte/chosen.css">
            <script src="<?php echo $cam; ?>js/jquery.js"></script>
            <style>
            	.bloco { margin-left: 40px; }
            	.zero-clipboard {
    					display: block;
    					position: relative;
    					}
            	.btn-clipboard {
					    position: absolute;
					    top: -5px;
					    right: 0;
					    z-index: 10;
					    display: block;
					    padding: 5px 8px;
					    font-size: 12px;
					    color: #767676;
					    cursor: pointer;
					    background-color: #fff;
					    border: 1px solid #e1e1e8;
					    border-radius: 0 4px 0 4px;
                    }
                    
                </style>
	</head>