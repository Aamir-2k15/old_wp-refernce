<?php /* Template Name: My Account */ ?><?php get_header(); ?> <?php global $options;global $social_arr;?>
    <?php if (have_posts()):while (have_posts()):the_post(); ?>
        <style>
/* Change WC Acct Page Column Widths */
@media only screen and (min-width: 769px) {
  .woocommerce-account .woocommerce-MyAccount-navigation {
    width: 22%;
  }
  .woocommerce-account .woocommerce-MyAccount-content { 
    width: 75%;
  }
}
/* Style WC Account Endpoint Links */
nav.woocommerce-MyAccount-navigation ul {
  list-style-type: none;
  padding-left: 0;
  max-width:200px;
  font-size: 17px;
  line-height: 26px;
}
nav.woocommerce-MyAccount-navigation ul li {
  padding: 8px 20px;
  background-color: rgba(0,0,0,0.05);
  border-bottom: 1px solid rgba(0,0,0,0.05);
}
nav.woocommerce-MyAccount-navigation ul li.is-active {
  background-color: rgba(0,0,0,0.1);
}
nav.woocommerce-MyAccount-navigation ul li.is-active a {
  color: rgba(0,0,0,0.8); cursor: default;
}
nav.woocommerce-MyAccount-navigation ul li.is-active:after {
  content: "";
  height: 0;
  width: 0;
  border-top: 20px solid transparent;
  border-left: 14px solid rgba(0,0,0,0.1);
  border-bottom: 20px solid transparent;
  float: right;
  margin-right: -34px;
  margin-top: -7px;
}
nav.woocommerce-MyAccount-navigation ul li:not(.is-active):hover {
  background-color: rgba(0,0,0,0.07);
}
nav.woocommerce-MyAccount-navigation ul li:not(.is-active):hover:after { 
  content: "";
  height: 0;
  width: 0;
  border-top: 20px solid transparent;
  border-left: 14px solid rgba(0,0,0,0.07);
  border-bottom: 20px solid transparent;
  float: right;
  margin-right: -34px;
  margin-top: -7px;
}
        </style>
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-10 mr-auto ml-auto">
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
                </div>
            </div>
        </div>
    <?php endwhile;
endif; ?>
<?php get_footer(); ?>