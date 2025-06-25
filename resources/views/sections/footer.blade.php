@php
  $footer_image = get_field('footer_image', 'option');
  $footer_description = get_field('footer_description', 'option');
  $lower_footer_text1 = get_field('lower_footer_text1', 'option');
  $lower_footer_text2 = get_field('lower_footer_text2', 'option');
  $lower_footer_text3 = get_field('lower_footer_text3', 'option');
  $lower_footer_text4 = get_field('lower_footer_text4', 'option');
  @endphp





<footer class="bg-light  footer_style_responsive">
  <div class="container" style="max-width:1920px;">
    <div class="row">
      <!-- Logo and Description -->
      <div class="col-md-4 mb-4">
        <div class="d-flex align-items-center mb-3">



          @if(is_array($footer_image))
        <img src="{{ $footer_image['url'] }}" lt="Logo" class="me-2 fotter_site_icon">
      @else
        <img src="{{ $footer_image }}" lt="Logo" class="me-2 fotter_site_icon">
      @endif
          <!-- <div>
            <div class="fw-bold fs-5">Terralia</div>
            <div class="text-success small">Immobilier</div>
          </div> -->
        </div>
        @if($footer_description)
      <p class="small text-muted mb-2 footer_text">
        {{$footer_description}}
      </p>
    @endif
      </div>

      <!-- Achat et Vente -->
      <div class="col-md-3 mb-4 display_none_in_responsive">
        <h6 class="text-uppercase small fw-semibold mb-3 font_family_JetBrains_Mono">Achat et Vente</h6>
        <?php
$menu_name = 'footer_menu_1';
if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
  $menu = wp_get_nav_menu_object($locations[$menu_name]);
  $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
        <ul class="list-unstyled">
          <?php
  foreach ((array) $menu_items as $item) {
    echo '<li class="nav-item"><a class="text-dark text-decoration-none font_family_Host_Grotesk" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
  }
        ?>
        </ul>
        <?php } ?>
      </div>

      <!-- Terralia Immobilier -->
      <div class="col-md-3 mb-4 display_none_in_responsive">
        <h6 class="text-uppercase small fw-semibold mb-3 font_family_JetBrains_Mono">Terralia Immobilier</h6>
        <?php
$menu_name = 'footer_menu_2';
if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
  $menu = wp_get_nav_menu_object($locations[$menu_name]);
  $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
        <ul class="list-unstyled">
          <?php
  foreach ((array) $menu_items as $item) {
    echo '<li class="nav-item"><a class="text-dark text-decoration-none font_family_Host_Grotesk" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
  }
        ?>
        </ul>
        <?php } ?>
      </div>

      <!-- Nous Suivre -->
      <div class="col-md-2 mb-4 ">
        <h6 class="text-uppercase small fw-semibold mb-3 font_family_JetBrains_Mono">Nous Suivre</h6>
        <?php if (have_rows('follow_us')): ?>
        <ul class="list-unstyled style_in_responsive">
          <?php  while (have_rows('follow_us')):
    the_row();
    $follow_us_links_lable = get_sub_field('follow_us_links_lable');
    $follow_us_url = get_sub_field('follow_us_url');
    
      ?>


          <li><a href="{{$follow_us_url}}"
              class="text-dark text-decoration-none font_family_Host_Grotesk">{{$follow_us_links_lable}}</a></li>

          <?php  endwhile; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div> 
  </div>

  <!-- Bottom Bar -->
  <div class="bg-light w-60 mt-4 hide-mobile">
    <div class="p-2">
      <div class="row text-center text-md-start align-items-center add-padding-right">
        <div class="col-md-4 small text-muted mb-2 mb-md-0">
          @if($lower_footer_text1)
          <?php  echo wp_kses_post($lower_footer_text1);?>
        </div>
        @endif
        <div class="col-md-4 mb-2 mb-md-0 d-flex justify-content-center">
          @if($lower_footer_text2)
        <a href="#"
        class="text-muted small text-decoration-none me-3"><?php  echo wp_kses_post($lower_footer_text2);?></a>
        <a href="#" class="text-muted small text-decoration-none"><?php  echo wp_kses_post($lower_footer_text3);?></a>
        @endif
        </div>
        <div class="col-md-4 text-md-end small text-muted">
          @if($lower_footer_text4)
        <?php  echo wp_kses_post($lower_footer_text4);?>
        @endif
        </div>
      </div>
    </div>
  </div>


   <!-- Bottom Bar in mobile -->
  <div class="bg-light w-60 mt-4 hide-desk">
    <div class="p-2">
      <div class="row text-center text-md-start align-items-center">
        
        
        <div class="col-md-4 mb-2 mb-md-0 d-flex justify-content-center align-left-text2">
          @if($lower_footer_text2)
        <a href="#"
        class="text-muted small text-decoration-none me-3"><?php  echo wp_kses_post($lower_footer_text2);?></a>
        <a href="#" class="text-muted small text-decoration-none"><?php  echo wp_kses_post($lower_footer_text3);?></a>
        @endif
        </div>

        <div class="col-md-4 small text-muted mb-2 mb-md-0 align-left-text1">
          @if($lower_footer_text1)
          <?php  echo wp_kses_post($lower_footer_text1);?>
        </div>
        @endif
        <div class="col-md-4 text-md-end small text-muted align-left-text4">
          @if($lower_footer_text4)
        <?php  echo wp_kses_post($lower_footer_text4);?>
        @endif
        </div>
      </div>
    </div>
  </div>
</footer>
















<script>
  const menuWrapper = document.getElementById("menuWrapper");
  const hamburgerBtn = document.getElementById("hamburgerBtn");
  const closeBtn = document.getElementById("closeBtn");

  hamburgerBtn.addEventListener("click", () => {
    menuWrapper.classList.add("active");
  });

  closeBtn.addEventListener("click", () => {
    menuWrapper.classList.remove("active");
  });
</script>