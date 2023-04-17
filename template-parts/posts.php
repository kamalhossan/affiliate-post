<section id="affiliatePost">
        <div class="affiliate_post">
          <div class="container">

          <style>
            img {
              max-width: 100%;
            }
            .content {
              display: grid;
              grid-template-columns: 60% 38%;
              gap: 2%;
            }
            .item_data {
                display: grid;
                grid-template-columns: 50% 50%;
            }

            .item_data span:last-child {
                font-weight: bold;
            }
          </style>
          <?php

          // Check rows existexists.
          if( have_rows('items') ):

            // Loop through rows.
            while( have_rows('items') ) : the_row();

            $title  = get_sub_field('title');
            $features_image  = get_sub_field('features_image');
            $category = get_sub_field('category');
            $number_of_images  = get_sub_field('number_of_images');
            $searchable  = get_sub_field('searchable');
            $type  = get_sub_field('type');
            $use_case  = get_sub_field('use_case');
            $attribution_required  = get_sub_field('attribution_required');
            $registration_required = get_sub_field('registration_required');
            $image_sizes = get_sub_field('image_sizes');
            $website = get_sub_field('website');
            $website_url = get_sub_field('website_url');
            $license_details = get_sub_field('license_details');
            $star_rating = get_sub_field('star_rating');
            $summary = get_sub_field('summary');


              ?>
                    <div class="row">
                      <div class="content">
                        <div class="col media">
                        <img src="<?php echo $features_image; ?>" alt="<?php echo $title; ?>">
                        </div>
                        <div class="col data">
                          <div class="title">
							  <a target="_blank" href="<?php echo $website_url; ?>"><h2><?php echo $title; ?></h2></a>
                          </div>
                          <div class="details">
                            <div class="item_data">
                              <span>Number of Images:</span>
                              <span><?php echo $number_of_images; ?></span>
                            </div>
                            <div class="item_data">
                              <span>Searchable:</span>
                              <span><?php echo $searchable; ?></span>
                            </div>
                            <div class="item_data">
                              <span>Paid / Free / Limited:</span>
                              <span><?php echo $type; ?></span>
                            </div>
                            <div class="item_data">
                              <span>Personal / Commercial:</span>
                              <span><?php echo $use_case; ?></span>
                            </div>
                            <div class="item_data">
                              <span>Attribution Required:</span>
                              <span><?php echo $attribution_required; ?></span>
                            </div>
                            <div class="item_data">
                              <span>Registration Required:</span>
                              <span><?php echo $registration_required; ?></span>
                            </div>
                            <div class="item_data">
                              <span>Image Sizes:</span>
                              <span><?php echo $image_sizes; ?></span>
                            </div>
                            <div class="item_data">
                              <span>Website:</span>
                              <span> <a href="<?php echo $website_url; ?>"><?php echo $website; ?></a>
                                </span>
                            </div>
                            <div class="item_data">
                              <span>License:</span>
                              <span> <a href="<?php echo $license_details; ?>">License Details</a>
                                </span>
                            </div>
                            <div class="item_data">
                              <img src="<?php echo $star_rating; ?>" alt="<?php echo $title; ?>">
                            </div>                            
                          </div>
                        </div>
                      </div>
                      <div class="summary">
                          <h4 class="summary_title">Summary</h4>
                          <p><?php echo $summary; ?></p>
                        </div>
                      </div>

              <?php

                // Load sub field value.
                //$sub_value = get_sub_field('sub_field');
                // Do something...

            // End loop.
            endwhile;

          // No value.
          else :
            // Do something...
          endif;


          ?>
        </div>
  </div>
</section>