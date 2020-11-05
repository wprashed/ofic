<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Magala_Blog_&_Magazine
 */
the_post();
get_header();
?>
   

   
  <div class="breadcrumb-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              <?php the_title(); ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
   

   
  <div class="about-us-area about-page section-padding-100">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-12 col-lg-5">
          <div class="about-content">
            <h3 style="font-style: 0.8rem;"><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <div class="opening-hours-location mt-30 d-flex align-items-center">
               
              <div class="opening-hours">
                <h6><i class="fa fa-clock-o"></i> Date</h6>
                <p>
                <?php echo carbon_get_the_post_meta('ct_event_date'); ?>
                </p>
              </div>
               
              <div class="location">
                <h6><i class="fa fa-map-marker"></i> Location</h6>
                <p><?php echo carbon_get_the_post_meta('ct_event_location'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="about-thumbnail">
          <?php
                $tdoc_logo_source = wp_get_attachment_image_src(carbon_get_the_post_meta('ct_event_pospect'), 'full');
                echo "<img src='".esc_url($tdoc_logo_source[0])."'' class='logo'>";
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: -3rem">
    <div class="row">
       
      <div class="col-12">
        <div class="section-heading">
          <h1 style="font-size: 3rem;">Photo Gallery</h1>
          
        </div>
      </div>
    </div>
    </div>

    <div class="gallery-area d-flex flex-wrap">
        <?php 
            $safans = carbon_get_the_post_meta( 'crb_gallery' );
            foreach ( $safans as $safan ) :
        ?>
      <div class="single-gallery-area">
            <?php
                $tdoc_gallery_source = wp_get_attachment_image_src($safan['image'], 'full');
                echo "<a href='".esc_url($tdoc_gallery_source[0])."'' class='gallery-img'>";
            ?>
            <?php echo wp_get_attachment_image( $safan['image'], 'full' ); ?>
            </a>
    </div>    

    <?php endforeach ?>
        </div>
    

<?php
get_footer();