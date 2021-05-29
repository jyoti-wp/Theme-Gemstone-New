<?php get_header(); ?>
<!DOCTYPE html>
<html>
<title>Theme Gemstone</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
    <div class="container">
        <?php get_template_part('/template-parts/banner'); ?>
        <?php get_template_part('/template-parts/about-section'); ?>
        <?php get_template_part('/template-parts/partner-section'); ?>
        <?php get_template_part('/template-parts/portfolio'); ?>
        <?php get_template_part('/template-parts/contact-section'); ?>
        <?php get_template_part('/template-parts/feedback-section'); ?>
    </div>

    <?php get_footer(); ?>
</body>

</html>