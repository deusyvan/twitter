<html>
    <head>
        <title>Twitter</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/template.css" />
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.min.js" ></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js" ></script>
    </head>
    
    <body>
    	<div class="topo">
    		<div class="topoint">
    			<div class="topoleft">TWITTER CLONE</div>
    			<div class="toporight"><?php echo $viewData['nome'];?> - <a href="<?php echo BASE_URL;?>deslogar">Sair</a></div>
    			<div style="clear:both"></div>
    		</div>
    	</div>
    	<div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    	</div>
    </body>
</html>