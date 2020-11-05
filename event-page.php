<?php
/**
 * Template Name: Event
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
                Event
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
    <div class="events-area section-padding-100">
        <div class="container">
        <div class="row" id="upcoming">
                <div class="col-12">
                    <div class="events-title">
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
                <?php query_posts( array(
                        'post_type' => 'event',
                        'post_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'event_year',
                                'field'    => 'slug',
                                'terms'    => 'upcoming',
                            ),
                        ),
                    ));
                    ?>
                    <?php while (have_posts()) : the_post(); ?>
                <div class="col-12">
                
                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                    
                    <div class="upcoming-events-thumbnail">
                    <img src="<?php the_post_thumbnail_url("maggie-blog") ?>" alt="" />
                    </div>
                    
                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                    <div class="events-text">
                        <h5><?php the_title(); ?></h5>
                        <div class="events-meta">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo carbon_get_the_post_meta('ct_event_date'); ?></a>
                        
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo carbon_get_the_post_meta('ct_event_location'); ?></a>
                        </div>
                        <p>
                        <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="find-out-more-btn" id="eventsIn2020">
                        <a href="<?php the_permalink(); ?>" class="btn crose-btn btn-2">Find Out More</a>
                    </div>
                    </div>
                </div>
                
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="row mt-5" id="2020">
                <div class="col-12">
                    <div class="events-title">
                        <h2>Events in 2020</h2>
                    </div>
                </div>
                <?php query_posts( array(
                        'post_type' => 'event',
                        'post_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'event_year',
                                'field'    => 'slug',
                                'terms'    => '2020',
                            ),
                        ),
                    ));
                    ?>
                    <?php while (have_posts()) : the_post(); ?>
                <div class="col-12">
                
                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                    
                    <div class="upcoming-events-thumbnail">
                    <img src="<?php the_post_thumbnail_url("maggie-blog") ?>" alt="" />
                    </div>
                    
                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                    <div class="events-text">
                        <h5><?php the_title(); ?></h5>
                        <div class="events-meta">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo carbon_get_the_post_meta('ct_event_date'); ?></a>
                        
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo carbon_get_the_post_meta('ct_event_location'); ?></a>
                        </div>
                        <p>
                        <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="find-out-more-btn" id="eventsIn2020">
                        <a href="<?php the_permalink(); ?>" class="btn crose-btn btn-2">Find Out More</a>
                    </div>
                    </div>
                </div>
                
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="row mt-5" id="2019">
                <div class="col-12">
                    <div class="events-title">
                        <h2>Events in 2019</h2>
                    </div>
                </div>
                <?php query_posts( array(
                        'post_type' => 'event',
                        'post_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'event_year',
                                'field'    => 'slug',
                                'terms'    => '2019',
                            ),
                        ),
                    ));
                    ?>
                    <?php while (have_posts()) : the_post(); ?>
                <div class="col-12">
                
                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                    
                    <div class="upcoming-events-thumbnail">
                    <img src="<?php the_post_thumbnail_url("maggie-blog") ?>" alt="" />
                    </div>
                    
                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                    <div class="events-text">
                        <h5><?php the_title(); ?></h5>
                        <div class="events-meta">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo carbon_get_the_post_meta('ct_event_date'); ?></a>
                        
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo carbon_get_the_post_meta('ct_event_location'); ?></a>
                        </div>
                        <p>
                        <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="find-out-more-btn" id="eventsIn2020">
                        <a href="<?php the_permalink(); ?>" class="btn crose-btn btn-2">Find Out More</a>
                    </div>
                    </div>
                </div>
                
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="row mt-5" id="2018">
                <div class="col-12">
                    <div class="events-title">
                        <h2>Events in 2018</h2>
                    </div>
                </div>
                <?php query_posts( array(
                        'post_type' => 'event',
                        'post_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'event_year',
                                'field'    => 'slug',
                                'terms'    => '2018',
                            ),
                        ),
                    ));
                    ?>
                    <?php while (have_posts()) : the_post(); ?>
                <div class="col-12">
                
                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                    
                    <div class="upcoming-events-thumbnail">
                    <img src="<?php the_post_thumbnail_url("maggie-blog") ?>" alt="" />
                    </div>
                    
                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                    <div class="events-text">
                        <h5><?php the_title(); ?></h5>
                        <div class="events-meta">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo carbon_get_the_post_meta('ct_event_date'); ?></a>
                        
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo carbon_get_the_post_meta('ct_event_location'); ?></a>
                        </div>
                        <p>
                        <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="find-out-more-btn" id="eventsIn2020">
                        <a href="<?php the_permalink(); ?>" class="btn crose-btn btn-2">Find Out More</a>
                    </div>
                    </div>
                </div>
                
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="row mt-5" id="2017">
                <div class="col-12">
                    <div class="events-title">
                        <h2>Events in 2017</h2>
                    </div>
                </div>
                <?php query_posts( array(
                        'post_type' => 'event',
                        'post_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'event_year',
                                'field'    => 'slug',
                                'terms'    => '2017',
                            ),
                        ),
                    ));
                    ?>
                    <?php while (have_posts()) : the_post(); ?>
                <div class="col-12">
                
                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                    
                    <div class="upcoming-events-thumbnail">
                    <img src="<?php the_post_thumbnail_url("maggie-blog") ?>" alt="" />
                    </div>
                    
                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                    <div class="events-text">
                        <h5><?php the_title(); ?></h5>
                        <div class="events-meta">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo carbon_get_the_post_meta('ct_event_date'); ?></a>
                        
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo carbon_get_the_post_meta('ct_event_location'); ?></a>
                        </div>
                        <p>
                        <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="find-out-more-btn" id="eventsIn2020">
                        <a href="<?php the_permalink(); ?>" class="btn crose-btn btn-2">Find Out More</a>
                    </div>
                    </div>
                </div>
                
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="row mt-5" id="2016">
                <div class="col-12">
                    <div class="events-title">
                        <h2>Events in 2016</h2>
                    </div>
                </div>
                <?php query_posts( array(
                        'post_type' => 'event',
                        'post_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'event_year',
                                'field'    => 'slug',
                                'terms'    => '2016',
                            ),
                        ),
                    ));
                    ?>
                    <?php while (have_posts()) : the_post(); ?>
                <div class="col-12">
                
                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                    
                    <div class="upcoming-events-thumbnail">
                    <img src="<?php the_post_thumbnail_url("maggie-blog") ?>" alt="" />
                    </div>
                    
                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                    <div class="events-text">
                        <h5><?php the_title(); ?></h5>
                        <div class="events-meta">
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo carbon_get_the_post_meta('ct_event_date'); ?></a>
                        
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo carbon_get_the_post_meta('ct_event_location'); ?></a>
                        </div>
                        <p>
                        <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="find-out-more-btn" id="eventsIn2020">
                        <a href="<?php the_permalink(); ?>" class="btn crose-btn btn-2">Find Out More</a>
                    </div>
                    </div>
                </div>
                
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
<?php
get_footer();