<!DOCTYPE html>
<html lang="en" class="fuelux">
    <head>        
        <title>enbiso logs</title>        
        <?php
        shtml_ecss('system', 'flexigrid/flexigrid.css');
        ?>
        <?php
        shtml_ejs('system', 'jquery/jquery.min.js');
        shtml_ejs('system', 'jquery/jquery.migrate.js');
        shtml_ejs('system', 'flexigrid/flexigrid.js');        
        ?>
        <style>
            body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 0px;}
            .demoHeaders { margin-top: 2em; }
            #dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
            #dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
            ul#icons {margin: 0; padding: 0;}
            ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
            ul#icons span.ui-icon {float: left; margin: 0 4px;}
        </style>
    </head>
    <body>
        <?php echo $content ?>
    </body>
</html>