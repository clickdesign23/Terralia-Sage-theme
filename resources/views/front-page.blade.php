{{--
Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')

  <!-- ****************************************************Main Banner Section************************************************ -->
  @php
    $hero_section_accodian_tab1_tittle = get_field('hero_section_accodian_tab1_tittle');
    $hero_section_accodian_tab1_description = get_field('hero_section_accodian_tab1_description');
    $hero_section_accodian_tab2_tittle = get_field('hero_section_accodian_tab2_tittle');
    $hero_section_accodian_tab2_description = get_field('hero_section_accodian_tab2_description');
    $hero_section_right_image = get_field('hero_section_right_image');
    $hero_section_right_image_text = get_field('hero_section_right_image_text');






    $hero_section_right_image_url = is_array($hero_section_right_image) ? $hero_section_right_image['url'] : $hero_section_right_image;
  @endphp
  <section class="hero-section d-flex">
    <div class="container-fluid">
    <div class="row">
      <!-- Content Column -->
       <!-- gbuiahbdsvfsdj -->
      <div class="col-lg-6 d-flex align-items-start h-100 position-relative overflow-hidden">
      <div class="accordion width" id="accordionHorizontalExample">
        <div class="card">
        <div id="collapseOne" class="collapse show width" data-parent="#accordionHorizontalExample">
          <div class="card-body">
          <div class="hero-content p-4 ps-lg-5">
            @if($hero_section_accodian_tab1_tittle)
        <h1 class="mb-4">
        {{$hero_section_accodian_tab1_tittle}}
        </h1>
        @endif

            @if($hero_section_accodian_tab1_description)
        <p class="mb-4">
        {{$hero_section_accodian_tab1_description}}
        </p>
        @endif

            <div class="property-types d-flex flex-column gap-3 mb-4">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="type1" checked>
              <label class="form-check-label" for="type1">
              Appartement neuf
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="type2">
              <label class="form-check-label" for="type2">
              Appartement renové
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="type3">
              <label class="form-check-label" for="type3">
              Maison
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="type4">
              <label class="form-check-label" for="type4">
              Terrain
              </label>
            </div>
            </div>

            <div class="search-bar d-flex gap-3 mt-3" style="max-width: 80%;">
            <input type="text" class="form-control form-control-lg style_search_inp"
              placeholder="Ville ou code postal" />
            <button class="btn btn-lg px-4 only_for_style_buttons"
              style="max-width: max-content; width: 100%;">Rechercher</button>
            <button class="only_for_style_buttons_m" style="max-width: max-content; width: 100%;"><img
              src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/search.png" alt=""></button>
            </div>
          </div>
          </div>
        </div>
        <div class="card-header" data-toggle="collapse" data-target="#collapseOne">
          ACHETER
        </div>
        </div>    
        <div class="card">

        <div id="collapseTwo" class="collapse width" data-parent="#accordionHorizontalExample">
          <div class="card-body">
          <div class="hero-content p-4 ps-lg-5">
            @if($hero_section_accodian_tab2_tittle)
        <h1 class="mb-4">
        {{$hero_section_accodian_tab2_tittle}}
        </h1>
        @endif

            @if($hero_section_accodian_tab2_description)
        <p class="mb-4">
        {{$hero_section_accodian_tab2_description}}
        </p>
        @endif
            <div class="property-types d-flex flex-column gap-3 mb-4">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type1" id="type1" checked>
              <label class="form-check-label" for="type1">
              Appartement neuf
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type1" id="type2">
              <label class="form-check-label" for="type2">
              Appartement renové
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type1" id="type3">
              <label class="form-check-label" for="type3">
              Maison
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type1" id="type4">
              <label class="form-check-label" for="type4">
              Terrain
              </label>
            </div>
            </div>

            <div class="search-bar d-flex gap-3 mt-3" style="max-width: 80%;">
            <input type="text" class="form-control form-control-lg style_search_inp"
              placeholder="Ville ou code postal" />
            <button class="btn btn-lg px-4 only_for_style_buttons"
              style="max-width: max-content; width: 100%;">Rechercher</button>
            <button class="only_for_style_buttons_m" style="max-width: max-content; width: 100%;"><img
              src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/search.png" alt=""></button>
            </div>
          </div>
          </div>
        </div>
        <div class="card-header" data-toggle="collapse" data-target="#collapseTwo">
          VENDRE
        </div>
        </div>
      </div>
      </div>

      <?php
  $upload_dir = wp_upload_dir();
  $upload_folder_url = $upload_dir['baseurl'];
    ?>
      <!-- Image Column -->
      <div class="col-lg-6 hero-image h-sm-100">
      <img src="{{$hero_section_right_image_url}}" alt="hero image" class="hero_right_image">
      <h5 class="hero_image_text">{{$hero_section_right_image_text}}</h5>
      </div>
    </div>
    </div>
  </section>

  <!-- ***************************************************** Feature Section *************************************************-->

  @php
    $exclusive_programs_tittle = get_field('exclusive_programs_tittle');
    $exclusive_programs_p = get_field('exclusive_programs_p');


  @endphp

  <section class="feature-section">
    <div class="container style_feature_section" style="">
    <div class="row align-items-end feature_heading_cont">
      <!-- Heading Column -->
      <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
      <div class="feature-heading">
        @if($exclusive_programs_tittle)
      <h2 class="mb-0">{{$exclusive_programs_tittle}}</h2>
      @endif

      </div>
      </div>

      <!-- Text Column -->
      <div class="col-lg-5 col-md-12">
      <div class="feature-text">
        @if($exclusive_programs_p)
      <p class="mb-0">
      {{$exclusive_programs_p}}
      </p>
      @endif

      </div>
      </div>
    </div>
    </div>
  </section>

  <!-- **************************************************** product crousal ***************************************************-->
  <section class="program-section py-5 bg-white" style="display:flex; justify-content: center;">
    <div class="program_section_child">
    <?php if (have_rows('properties')): ?>
    <div class="program-slider">

      <?php  while (have_rows('properties')):
    the_row();
    $image = get_sub_field('image');
    $status = get_sub_field('status');
    $location = get_sub_field('location');
    $title = get_sub_field('title');
    $price = get_sub_field('price');
    $details = get_sub_field('details');
    $button_link = get_sub_field('discover');
      ?>

      <!-- Dynamic Card - Matches original static structure -->
      <div class="card border-0">
      <div class="position-relative">
        <?php    if ($image): ?>
        <img src="<?php      echo esc_url($image['url']); ?>" class="img-fluid"
        alt="<?php      echo esc_attr($image['alt']); ?>">
        <?php    endif; ?>

        <?php    if ($status): ?>
        <span class="badge-custom"><?php      echo esc_html($status); ?></span>
        <?php    endif; ?>
      </div>

      <div class="p-3">
        <?php    if ($location): ?>
        <div class="meta text-success"><?php      echo esc_html($location); ?></div>
        <?php    endif; ?>

        <?php    if ($title): ?>
        <h5 class="card-title mt-1"><?php      echo esc_html($title); ?></h5>
        <?php    endif; ?>

        <?php    if ($price): ?>
        <p class="mb-1 mt-2 card_price"><?php      echo esc_html($price); ?></p>
        <?php    endif; ?>

        <?php    if ($details): ?>
        <p class="meta card_detail"><?php      echo esc_html($details); ?></p>
        <?php    endif; ?>

        <hr>

        <?php    if ($button_link): ?>
        <div class="btn_discover_cont">
        <a href="<?php      echo esc_url($button_link); ?>" class="btn-discover">Découvrir</a>
        <img src="<?php      echo $upload_folder_url; ?>/2025/05/right-arrow.png" alt="">
        </div>
        <?php    endif; ?>
      </div>
      </div>

      <?php  endwhile; ?>
    </div>
    <?php endif; ?>
    </div>
  </section>

  <!-- **************************************************** 2colum section section **************************************************** -->


  @php
    $terrain_image = get_field('terrain_image');
    $terrain_subtitle = get_field('terrain_subtitle');
    $terrain_title = get_field('terrain_title');
    $terrain_description_1 = get_field('terrain_description_1');
    $terrain_description_2 = get_field('terrain_description_2');
    $terrain_button_text = get_field('terrain_button_text');
    $terrain_button_link = get_field('terrain_button_link');
    $terrain_link_text = get_field('terrain_link_text');
    $terrain_link_url = get_field('terrain_link_url');

  @endphp

  <div class="container-fluid section Terrain-sec"
    style="display: flex; justify-content: center; padding-bottom: 0px; padding-left:0px;">
    <div class="row align-items-center terrain_image_left">

    {{-- Left Image --}}
    <div class="col-lg-6 mb-4 mb-lg-0 p-0">
      @if(is_array($terrain_image))
      <img src="{{ $terrain_image['url'] }}" alt="{{ $terrain_image['alt'] ?: $terrain_subtitle }}"
      class="img-fluid w-100">
    @else
      <img src="{{ $terrain_image }}" alt="{{ $terrain_subtitle }}" class="img-fluid w-100">
    @endif
    </div>

    {{-- Right Content --}}
    <div class="col-lg-6 right-side-content">
      @if($terrain_subtitle)
      <p class="subtitle">{{ $terrain_subtitle }}</p>
    @endif

      @if($terrain_title)
      <h2 class="fw-bold mb-4">{{ $terrain_title }}</h2>
    @endif

      @if($terrain_description_1)
      <p class="description_1_2">{{ $terrain_description_1 }}</p>
    @endif

      @if($terrain_description_2)
      <p class="description_1_2">{{ $terrain_description_2 }}</p>
    @endif

      <div class="mt-5 d-flex align-items-center style_terrain_button_responsive">
      @if($terrain_button_text && $terrain_button_link)
      <a href="{{ $terrain_button_link }}" class="btn btn-main me-3">
      {{ $terrain_button_text }}
      </a>
    @endif

      @if($terrain_link_text && $terrain_link_url)
      <a href="{{ $terrain_link_url }}" class="btn-link-arrow">
      {{ $terrain_link_text }} <img src="<?php  echo $upload_folder_url; ?>/2025/06/arrow-bottom-right.png"
      alt="Next">
      </a>
    @endif
      </div>
    </div>

    </div>
  </div>



  <!-- ***************************************** Pourquoi confier votre projet à Terralia Immobilier ? section ******************************************* -->



  @php
    $entrust_tittle = get_field('entrust_tittle');
    $entrust_text_1 = get_field('entrust_text_1');
    $entrust_text_2 = get_field('entrust_text_2');
    $entrust_text_3 = get_field('entrust_text_3');
    $entrust_text_4 = get_field('entrust_text_4');
    $entrust_text_5 = get_field('entrust_text_5');
    $entrust_image = get_field('entrust_image');
    $entrust_image_alt = get_field('entrust_image_alt');   
    @endphp


  <div class="container-fluid dark-section">
    <div class="container">
    <div class="row align-items-start dark-sec-container">

      <!-- Left Column -->
      <div class="col-lg-6 mb-5 mb-lg-0 dark-left-sec">
      @if($entrust_tittle)
      <h2 class="fw-bold mb-4 dark-left-sec-title">{{$entrust_tittle}}</h2>
    @endif
      @if(is_array($entrust_image))
      <img src="{{ $entrust_image['url'] }}" alt="{{ $entrust_image['alt'] ?: $entrust_image_alt }}"
      class="left-icon">
    @else
      <img src="{{ $entrust_image }}" alt="{{ $entrust_image_alt }}" class="left-icon">
    @endif
      <!-- <img src="images/house.png" alt="Home Icon" class="left-icon"> -->

      </div>

      <!-- Right Column -->
      <div class="col-lg-6 dark-right-sec">

      <div class="accordion_dark">
        @if(have_rows('accordion_content'))
        @php
      $accordion_items = get_field('accordion_content');
      $count = count($accordion_items);
      $index = 0;
      @endphp

        @while(have_rows('accordion_content')) @php
      the_row();
      $index++;
      $is_last = ($index === $count);
      $title = get_sub_field('accordion_title');
      $content = get_sub_field('accordion_content');
      @endphp

        <div class="accordion_dark_item">
        <button class="accordion_dark_button @if($is_last) active @endif" type="button">
        <h3> {!! wpautop($title) !!}</h3>

        </button>
        <div class="accordion_dark_content" @if($is_last) style="display: block;" @else style="display: none;"
      @endif>
        <div class="accordion_dark_content_inner">
        {!! wpautop($content) !!}
        </div>
        </div>
        </div>
      @endwhile
      @endif
      </div>
      <!-- <div class="feature-block">
      @if($entrust_text_1)
      <h3>{{$entrust_text_1}}</h3>
      @endif
      </div> -->

      <!-- <div class="feature-block">
      @if($entrust_text_2)
      <h3>{{$entrust_text_2}}</h3>
      @endif
      </div>
      <div class="feature-block">
      @if($entrust_text_3)
      <h3>{{$entrust_text_3}}</h3>
      @endif
      </div>

      <div class="feature-block">
      @if($entrust_text_4)
      <h3 class="text-white dark-right-sec-h3">{{$entrust_text_4}}</h3>
      @endif
      @if($entrust_text_5)
      <p class="mb-0 dark-right-sec-p">{{$entrust_text_5}}</p>
      @endif

      </div> -->
      </div>

    </div>
    </div>
  </div>





  <!-- ***************************************** Conseils et astuces section ******************************************* -->

  @php
    $tips_left_tittle = get_field('tips_left_tittle');
    $tip_of_the_month = get_field('tip_of_the_month');
    $tip_left_event_post = get_field('tip_left_event_post'); // Single post object (not array)
    $tip_right_event_post = get_field('tip_right_event_post'); // Array (if multi-select)
    $tip_right_tittle = get_field('tip_right_tittle');
    @endphp

  <section class="py-5">
    <div class="container">
    <div class="row conseils-section">
      <!-- Left Column (Single Post) -->
      <div class="col-md-6 mb-4 mb-md-0 conseils-left-col">
      @if($tips_left_tittle)
      <h2 class="fw-bold mb-5 left-title" style=" line-height: 60px;">{{ $tips_left_tittle }}</h2>
    @endif
    @if($tip_right_tittle)
      <p class="text-muted mb-5 right-text tip_right_first_text hide-desk">{{ $tip_right_tittle }}</p>
    @endif

      <div class="bg-light  rounded position-relative tip_event_one_style">
        @if($tip_of_the_month)
      <small class="text-uppercase fw-semibold text-muted">{{ $tip_of_the_month }}</small>
      @endif

        {{-- LEFT POST (SINGLE) --}}
        <?php
        // 
  if ($tip_left_event_post) {
    setup_postdata($tip_left_event_post); // Set up global post data
    $thumbnail_url = get_the_post_thumbnail_url($tip_left_event_post->ID, 'medium');
    $left_post_title = get_the_title($tip_left_event_post->ID);
    $left_post_content = wp_trim_words(get_the_content(null, false, $tip_left_event_post->ID), 20, '...');
    $button_before_date = get_field('button_before_date', $tip_left_event_post->ID);
    $left_post_date = get_the_date('d.m.Y', $tip_left_event_post->ID);
      ?>




        @if($thumbnail_url)
      <img src="{{ $thumbnail_url }}" alt="{{ $left_post_title }}" class="img-fluid my-3 w-100">
      @endif

        @if($left_post_title)
      <h5 class=" left_post_title">{{ $left_post_title }}</h5>
      @endif

        @if($left_post_content)
      <p class="text-muted mb-4">{{ $left_post_content }}</p>
      @endif



        <div class="d-flex align-items-center gap-3">
        @if($button_before_date)

      <span class="badge text-black px-2 py-2 me-2 custom-bg">{{$button_before_date}}</span>
      @endif
        @if($left_post_date)
      <small class="text-muted tip_right_date">{{ $left_post_date }}</small>
      @endif
        </div>


        <?php
    wp_reset_postdata(); // Reset global post data
  }
      ?>
      </div> <!-- Close .bg-light -->
      </div> <!-- Close .col-md-6 -->

      <!-- Right Column (Multi Posts) -->
      <div class="col-md-6 conseils-right-col tips_right_parent">
      @if($tip_right_tittle)
      <p class="text-muted mb-5 right-text tip_right_first_text hide-mobile">{{ $tip_right_tittle }}</p>
    @endif

      {{-- RIGHT POSTS (MULTI) --}}
      <?php
  if ($tip_right_event_post) {
    foreach ($tip_right_event_post as $post) {
    setup_postdata($post);
    $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'medium');
    $right_post_title = get_the_title($post->ID);
    $right_post_date = get_the_date('d.m.Y', $post->ID);
    $right_button_before_date = get_field('button_before_date', $post->ID); // Manual or auto-generated excerpt

      ?>

      <div class="d-flex mb-5">
        @if($thumbnail_url)
      <img src="{{ $thumbnail_url }}" alt="{{ $right_post_title }}" class="me-4 tip_right_images">
      @endif
        <div>
        @if($right_post_title)
      <h6 class="fw-bold mb-1 fs-5 text-black mb-3 right_post_title">{{ $right_post_title }}</h6>
      @endif
        <div class="d-flex align-items-center">
          @if($right_button_before_date)
        <span class="badge text-black px-2 py-2 me-2 custom-bg">{{$right_button_before_date}}</span>
      @endif

          @if($right_post_date)
        <small class="text-muted tip_right_date hide-date">{{ $right_post_date }}</small>
      @endif
        </div>
        </div>
      </div>

      <?php
    }
    wp_reset_postdata();
  }
      ?>
      </div> <!-- Close .col-md-6 -->
    </div> <!-- Close .row -->
    </div> <!-- Close .container -->
  </section>
















  <!-- ***************************************** Testimonials section ******************************************* -->
  <section class="py-5 bg-light testimonials-sec" style="display: flex; justify-content: center;">
    <div class="container1  testimonials_sec_max_witdh">
    <div class="row align-items-center py-3">
      @php
    $faq_titlle_part1 = get_field('faq_titlle_part1');
    $faq_titlle_part2 = get_field('faq_titlle_part2');
    $faq_titlle_part3 = get_field('faq_titlle_part3');
    $faq_titlle_part4 = get_field('faq_titlle_part4');
    $faq_titlle_part5 = get_field('faq_titlle_part5');
    $faq_titlle_part6 = get_field('faq_titlle_part6');
    @endphp

      @if($faq_titlle_part1 && $faq_titlle_part2 && $faq_titlle_part3 && $faq_titlle_part4 && $faq_titlle_part5 && $faq_titlle_part6)
      <div class="testimonial_tittle">
      <h3> {{ $faq_titlle_part1 }} <img src="{{ $faq_titlle_part2 }}" class=""> {{ $faq_titlle_part3 }} <br> <img
      src="{{ $faq_titlle_part4 }}" class=""> {{ $faq_titlle_part5 }} <img src="{{ $faq_titlle_part6 }}" class="">
      </h3>
      </div>
    @endif
    </div>
    <div class="testimonials">

      <?php
  $faq_items = get_field('faq_items');

  if ($faq_items) {
    foreach ($faq_items as $post) {
    setup_postdata($post);
    $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'medium');
    $right_post_title = get_the_title($post->ID);
    // $testi_post_content = wp_strip_all_tags(get_the_content(null, false, $post->ID)); 
    $full_content = wp_strip_all_tags(get_the_content(null, false, $post->ID));
    $testi_post_content = wp_trim_words($full_content, 50, ' ');
    $right_post_date = get_the_date('', $post->ID);
    $testi_author_name = get_field('author_name', $post->ID);
    $testi_author_role = get_field('author_role', $post->ID); 

      ?>

      <!-- testimonial 1 -->
      <div class="bg-white px-5 py-4 rounded-3 tesitimonial-slider">
      <p class="small mb-4 lh-base text-black testimonial_content">{{ $testi_post_content }}</p>
      <p class="author_name" style="margin-bottom: 0px !important; font-weight:600 ; font-size:18px ;">{{ $testi_author_name }}</p>
      <p class="author_role" style="margin-bottom: 0px !important; font-size:14px ;">{{ $testi_author_role }}</p>
      </div>


      <?php
    }
    wp_reset_postdata();
  }

    ?>
    </div>
    </div>

  </section>




  <!-- ***************************************** get product ideas to contact us ***************************************** -->


  @php
    $let_discuss_tittle_part1 = get_field('let_discuss_tittle_part1');
    $let_discuss_tittle_part2 = get_field('let_discuss_tittle_part2');
    $let_discuss_tittle_part3 = get_field('let_discuss_tittle_part3');
    $let_discuss_background_image = get_field('let_discuss_background_image'); // Expecting an image array or URL
    $lets_discuss_description = get_field('lets_discuss_description');
    $let_discuss_button = get_field('let_discuss_button');
    $lets_discuss_button_url = get_field('lets_discuss_button_url');
    $let_discuss_tab_to_call_number = get_field('let_discuss_tab_to_call_number');
    $let_discuss_tab_to_call_url = get_field('let_discuss_tab_to_call_url');

    // Handle if background image is an array
    $background_image_url = is_array($let_discuss_background_image) ? $let_discuss_background_image['url'] : $let_discuss_background_image;
  @endphp

  <section class="py-5 text-white contact-sec"
    style="background-image: url('{{ $background_image_url }}'); background-size: cover;     background-position: center bottom; background-repeat: no-repeat;">
    <div class="container">
    <div class="row align-items-center py-5">

      <!-- Left Content -->
      <div class="col-md-8 mb-4 mb-md-0 py-5 contact-left-content">
      @if($let_discuss_tittle_part1 && $let_discuss_tittle_part2 && $let_discuss_tittle_part3)
      <h2 class="display-5 fw-bold title let_discuss_tittle">
      {{ $let_discuss_tittle_part1 }}<br><span>{{ $let_discuss_tittle_part2 }}</span>{{ $let_discuss_tittle_part3 }}
      </h2>
    @endif

      @if($lets_discuss_description)
      <p class="mt-5 text-light small text lets_discuss_description" style="">
      {{ $lets_discuss_description }}
      </p>
    @endif
      </div>

      <!-- Right Contact Buttons -->
      <div class="col-md-4 text-md-end">
      @if($let_discuss_button && $lets_discuss_button_url)
      <a href="{{ $lets_discuss_button_url }}" class="btn btn-dark mb-5 style_lets_discuss_button">
      {{ $let_discuss_button }}
      </a><br />
    @endif

      @if($let_discuss_tab_to_call_number && $let_discuss_tab_to_call_url)
      <a href="tel:{{ $let_discuss_tab_to_call_url }}"
      class="btn btn-light d-inline-flex align-items-center style_let_discuss_tab_to_call_number">
      <i class="bi bi-telephone-fill me-2"></i><img class="phone_icon"
      src="<?php  echo $upload_folder_url;?>/2025/06/Vector.png" alt="">{{ $let_discuss_tab_to_call_number }}
      </a>
    @endif
      </div>

    </div>
    </div>
  </section>






  <!-- ***************************************** faq section ***************************************** -->

  <?php
  $become_a_terralia_title = get_field('become_a_terralia_tittle');
  $become_a_terralia_description = get_field('become_a_terralia_description');
  $become_a_terralia_button = get_field('become_a_terralia_button');
  $become_a_terralia_button_url = get_field('become_a_terralia_button_url');
  $become_a_terralia_image = get_field('become_a_terralia_image');
  $become_a_terralia_faq_title = get_field('become_a_terralia_faq_tittle');
    ?>

  <div class="container py-5 faq-sec">
    <div class="row align-items-center">

    <!-- Left Column -->
    <div class="col-lg-6 mb-4 mb-lg-0 faq-left-column">
      <?php if ($become_a_terralia_image): ?>
      <?php  if (is_array($become_a_terralia_image)): ?>
      <img src="<?php    echo esc_url($become_a_terralia_image['url']); ?>"
      alt="<?php    echo esc_attr($become_a_terralia_image['alt'] ?? 'Parrainage'); ?>"
      class="img-fluid rounded mb-3">
      <?php  else: ?>
      <img src="<?php    echo esc_url($become_a_terralia_image); ?>" alt="Parrainage" class="img-fluid rounded mb-3">
      <?php  endif; ?>
      <?php endif; ?>

      <div class="faq-left-content become_a_terralia_corner">
      <?php if ($become_a_terralia_title): ?>
      <h3 class="fs-1 fw-bold text-black lh-1 title become_a_terralia_tittle_bg">
        <?php  echo str_replace('<span class="highlight">', '<span class="highlight">', esc_html($become_a_terralia_title)); ?>
      </h3>
      <?php endif; ?>

      <?php if ($become_a_terralia_description): ?>
      <p class="fs-6 small mb-4 lh-base"><?php  echo esc_html($become_a_terralia_description); ?></p>
      <?php endif; ?>

      <?php if ($become_a_terralia_button && $become_a_terralia_button_url): ?>
      <a href="<?php  echo esc_url($become_a_terralia_button_url); ?>"
        class="btn btn-dark become_a_terralia_button"><?php  echo esc_html($become_a_terralia_button); ?></a>
      <?php endif; ?>
      </div>
    </div>

    <!-- Right Column -->
    <div class="col-lg-6 faq-right-column">
      <?php if ($become_a_terralia_faq_title): ?>
      <h3 class="mb-4 text-center text-black fs-1"><?php  echo esc_html($become_a_terralia_faq_title); ?></h3>
      <?php endif; ?>

      <?php if (have_rows('become_a_terralia_faq')): ?>
      <div class="accordion" id="faqAccordion">
      <?php 
      $faq_count = 0;
    while (have_rows('become_a_terralia_faq')):
    the_row();
    $faq_count++;
    $question = get_sub_field('become_a_terralia_faq_question');
    $answer = get_sub_field('become_a_terralia_faq_answer');
    $is_first = $faq_count === 1;
      ?>
      <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="fs-5 accordion-button <?php    echo $is_first ? '' : 'collapsed'; ?> faq-question"
          type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php    echo $faq_count; ?>">
          <?php    echo esc_html($question); ?>
        </button>
        </h2>
        <div id="faq<?php    echo $faq_count; ?>"
        class="small accordion-collapse collapse <?php    echo $is_first ? 'show' : ''; ?>"
        data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          <?php    echo wp_kses_post($answer); ?>
        </div>
        </div>
      </div>
      <?php  endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
    </div>
  </div>




@endsection