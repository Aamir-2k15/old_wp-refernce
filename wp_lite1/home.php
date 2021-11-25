<?php get_header(); ?>
<?php global $options; global $social_arr;?>
<style>.feat-img-cont {	max-height: 200px;	overflow: hidden;}
.exerpt {	padding: 5px 0;}
.exerpt span {}.pgn a {	color: #E0519D !important;}</style>
<div class="container-fluid" id="blog-posts" style="">
  <div class="row mr-0 p-5">
    <div class="col-md-9 ml-auto mr-auto">
      <h1 class="text-center"> Our latest blog articles</h1>
      
          <div class="subheading">
        <?=is_active_sidebar(dynamic_sidebar('blog_subheading'))?dynamic_sidebar('blog_subheading'):'';?>
      </div>
      <div class="row pb-2">
        <?php $n = 1; //$flat_post_arr  = ['','','','',''];?>
        <?php if (have_posts()):while (have_posts()):the_post(); ?>
        <div class=" col-md-<?=(($n % 3) == 0)?'12':'6'?>" id="positon_<?=$n;?>">
          <div class="card mt-4 mb-4">
            <?php if(($n % 3) == 0){?>
            <div class="row no-gutters">
              <?php }?>
              <?php if (has_post_thumbnail()) { ?>
              <?php if(($n % 3) == 0){?>
              <div class="col-md-6">
                <?php }?>
                <div class="feat-img-cont "><img class="card-img-top img-fluid " src="<?=the_post_thumbnail_url();?>" alt="<?php the_title(); ?>"></div>
                <?php if(($n % 3) == 0){?>
              </div>
              <?php }?>
              <?php } ?>
              <?php if(($n % 3) == 0){?>
              <div class="col-md-6">
                <?php }?>
                <div class="card-body">
                  <h4>
                    <?php the_title(); ?>
                  </h4>
                  <div class="card-text">
                    <div class="exerpt">
                      <?php the_excerpt(); ?>
                    </div>
                    <br>
                    <a href="<?php the_permalink(); ?>" class="font-weight-bold a">Read More <span>→</span></a> </div>
                </div>
                <?php if(($n % 3) == 0){?>
              </div>
              <?php }?>
            </div>
            <?php if(($n % 3) == 0){?>
          </div>
          <?php }?>
        </div>
        <?php
		$n++;
    endwhile; wp_reset_postdata();
endif;
?>
      </div>
      <div class="row pb-2 pl-5 pr-5 ml-5 mr-5">
        <div class="col">
          <nav class="pgn">
            <?php wpStarter_pagination();?>
          </nav>
        </div>
      </div>
      
      
    </div>
  </div>
</div>
<?php get_footer(); ?>
