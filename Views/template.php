<html>
    <head>
        <title>Twitter</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css" />
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/javascript.js" ></script>
    </head>
    
    <body>
        <h1>Twitter Clone</h1>
        <a href="<?php echo BASE_URL; ?>">Home</a>
        <a href="<?php echo BASE_URL;?>deslogar">Sair</a>
        <hr/>
        
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        
    </body>
</html>