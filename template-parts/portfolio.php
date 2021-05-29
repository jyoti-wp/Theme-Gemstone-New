<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min" style="background-image: url(<?php echo get_theme_file_uri('/images/madhu-shesharam-qvO4yjZo-Mc-unsplash.jpg'); ?>); >
    <div class=" w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
</div>

<div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class=" w3-center">MY WORK</h3>
    <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
            <img src="<?php echo get_theme_file_uri('/images/jonathan-petit-2XOG4G2zuP0-unsplash.jpg'); ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist of ice-berg">
        </div>

        <div class="w3-col m3">
            <img src="<?php echo get_theme_file_uri('/images/kailey-sniffin-nn2sqnKNy5Y-unsplash.jpg'); ?>" style=" width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
        </div>

        <div class="w3-col m3">
            <img src="<?php echo get_theme_file_uri('/images/patty-brito-f5E1FR9vqIM-unsplash.jpg'); ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
        </div>

        <div class="w3-col m3">
            <img src="<?php echo get_theme_file_uri('/images/miguel-angel-hernandez--TSq0f3D5Qk-unsplash.jpg'); ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
        </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m3">
            <img src="<?php echo get_theme_file_uri('/images/shaquiel-mckenzie-e__ERq5W5-w-unsplash.jpg'); ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
        </div>

        <div class="w3-col m3">
            <img src="<?php echo get_theme_file_uri('/images/sinitta-leunen-D2zbLybrTHc-unsplash.jpg'); ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
        </div>

        <div class="w3-col m3">
            <img src="<?php echo get_theme_file_uri('/images/whoisbenjamin-6_ytBxmlBKU-unsplash.jpg'); ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
        </div>

        <div class="w3-col m3">
            <img src="<?php echo get_theme_file_uri('/images/good-faces-LM8dFpmzg9U-unsplash.jpg'); ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
        </div>
        <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:60px">LOAD MORE</button>
    </div>
</div>