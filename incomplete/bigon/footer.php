<!-- Signup Newsletter Start --><?php /*get theme options*/ $options = get_option( 'theme_settings' ); ?>
<?php if(!empty($options['subscribe'])):?>
<div class="newsletter">
<div class="container">
<div class="row">
    <div class="col-md-7">
        <div class="main-news-desc">
            <div class="news-desc">
                <h3>Sign Up For <span>Newsletters</span></h3>
                <p>Get e-mail updates about our latest shop and special offers.</p>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="newsletter-box">
            <form action="#">
                <input class="subscribe" placeholder="Enter your email address" name="email" id="subscribe" type="text">
                <button type="submit" class="submit">subscribe</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php endif;?>
<!-- Signup-Newsletter End -->
<footer class="black-o-bg">
<!-- Footer Top Start -->
<div class="footer-top ptb-75">
<div class="container">
    <div class="row">
    <!-- Single Footer Start -->
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="single-footer">
<?php dynamic_sidebar('footer-1');?>    
</div>
</div>
    <!-- Single Footer Start -->
    <!-- Single Footer Start -->
<div class="col-md-2 col-sm-4 col-xs-6 footer-full">
   
<div class="single-footer">  
    <!--<h3 class="footer-title">My Account</h3>-->
    <div class="footer-content">
        <?php dynamic_sidebar('footer-2');?>
    </div>
</div>
</div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
<div class="col-md-2 col-sm-4 col-xs-6 footer-full">
<div class="single-footer">
    <div class="footer-content">
        <?php dynamic_sidebar('footer-3');?>
    </div>
</div>
</div>  
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
<div class="col-md-2 col-sm-4 col-xs-6 footer-full">
<div class="single-footer">
    <div class="footer-content">
        <?php dynamic_sidebar('footer-4');?>
    </div>
</div>
</div> 
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
<div class="col-md-2 col-sm-4 col-xs-6 footer-full">
<div class="single-footer">
    <div class="footer-content">
        <?php dynamic_sidebar('footer-5');?>
    </div>
</div>
</div> 
                        <!-- Single Footer Start -->
</div>
                    <!-- Row End -->
</div>
                <!-- Container End -->
</div>
            <!-- Footer Top End -->
<!-- Footer Middle Start -->
<div class="footer-middle">
<div class="container">
<?php if(is_active_sidebar('fwp')){?><div class="footer-middle-content ptb-40">
<div class="row">
<div class="col-md-12">
    <!-- Footer Link Start -->
<div class="footer-link">
<!--<ul class="footer-link-list">
<li>
    <span class="title">Computer</span>
    <a href="#">Laptops</a> / <a href="#">Television &amp; Video</a> / <a href="#">Tablet &amp; PC</a> / <a href="#"> Computers Accessories</a> / <a href="#">tablet-1</a> / <a href="#">tablet-2</a> / <a href="#">tablet-3</a> / <a href="#">tablet-4</a>
</li>
<li>
    <span class="title">Desktops</span>
    <a href="#">Desktops-1</a> / <a href="#">Desktops-2</a> / <a href="#">Desktops-3</a> / <a href="#">Desktops-4</a> / <a href="#">Desktops-5</a> / <a href="#">Desktops-6</a> / <a href="#">Desktops-7</a>
</li>
<li>
    <span class="title">Camera</span>
    <a href="#">Camera-1</a> / <a href="#">Camera-2</a> / <a href="#">Camera-3</a> / <a href="#">Camera-4</a> / <a href="#">Camera-5</a> / <a href="#">Camera-6</a> / <a href="#">Camera-7</a>
</li>
<li>
    <span class="title">Smartphone</span>
    <a href="#">Desktops-1</a> / <a href="#">Desktops-2</a> / <a href="#">Desktops-3</a> / <a href="#">Desktops-4</a> / <a href="#">Desktops-5</a> / <a href="#">Desktops-6</a> / <a href="#">Desktops-7</a>
</li>
<li>
    <span class="title">Cell phone</span>
    <a href="#">phone-1</a> / <a href="#">phone-2</a> / <a href="#">phone-3</a> / <a href="#">phone-4</a> / <a href="#">phone-5</a> / <a href="#">phone-6</a>
</li>
    </ul>--><?php dynamic_sidebar('fwp');?>
</div>
    <!-- Footer Link End -->
</div>
</div>
<!-- Row End -->
</div><?php }else{?><hr/><?php }?>
</div>
<!-- Container End -->
</div>

<!-- Footer Middle End -->
            <!-- Footer Bottom Start -->
<div class="footer-bottom ptb-40">
<div class="container">
<div class="footer-bottom-content">
<p class="pull-left pt-10"><?php echo $options['copyright-text']; ?></p>
<div class="footer-social-content pull-right">
<ul class="social-content-list">
<?php if(($options['twitter'])!=""):?><li><a href="<?=$options['twitter'];?>"><i class="fa fa-twitter"></i></a></li><?php endif;?>
<?php if(($options['linkedin'])!=""):?><li><a href="<?=$options['linkedin'];?>"><i class="fa fa-linkedin"></i></a></li><?php endif;?>
<?php if(($options['google-plus'])!=""):?><li><a href="<?=$options['google-plus'];?>"><i class="fa fa-google-plus"></i></a></li><?php endif;?>
<?php if(($options['facebook'])!=""):?><li><a href="<?=$options['facebook'];?>"><i class="fa fa-facebook"></i></a></li><?php endif;?>
<?php if(($options['youtube'])!=""):?><li><a href="<?=$options['youtube'];?>"><i class="fa fa-youtube"></i></a></li><?php endif;?>
</ul>
</div>
</div>
</div>
<!-- Container End -->
</div>
<!-- Footer Bottom End -->
</footer>
<!-- Footer End -->
</div>
<!-- Wrapper End -->
<!-- footer scripts -->
<?php wp_footer(); ?>
</body>
</html>