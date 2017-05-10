<!DOCTYPE html>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?>Luke Doolin Developer</title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
    <script>
    
    (function($){
    Drupal.behaviors.myBehavior = {
    attach:function (context, settings){
    
    $("#first-time ").hide();
    
    }
    };
    
    
    })(jQuery);
    
    
    
    
    </script>

   
</body>
</html>