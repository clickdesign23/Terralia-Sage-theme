{{-- 
  Template Name: Recherche Page
--}}



@extends('layouts.app')

@section('content')
 

<div class="filter-top-sec d-flex align-items-center">
    <div class="filter-left-side"> 
        <input type="text" class="form-control" placeholder="Ville ou code postal">
    </div>    
    <div class="d-flex align-items-center filter-right-side">
        <ul class="filter-bar-nav">
           <li class="filter-item">Pièces 
<svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.00008 9.21C7.74008 9.21 7.49008 9.11 7.29008 8.92L0.580078 2.21L1.99008 0.800003L7.99008 6.8L13.9901 0.800003L15.4001 2.21L8.69008 8.92C8.49008 9.12 8.24008 9.21 7.98008 9.21H8.00008Z" fill="#0B0B0B"/>
</svg></li>
            <li class="filter-item">Chambres 
<svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.00008 9.21C7.74008 9.21 7.49008 9.11 7.29008 8.92L0.580078 2.21L1.99008 0.800003L7.99008 6.8L13.9901 0.800003L15.4001 2.21L8.69008 8.92C8.49008 9.12 8.24008 9.21 7.98008 9.21H8.00008Z" fill="#0B0B0B"/>
</svg></li>
            <li class="filter-item budget">
                Budget 
<svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.00008 9.21C7.74008 9.21 7.49008 9.11 7.29008 8.92L0.580078 2.21L1.99008 0.800003L7.99008 6.8L13.9901 0.800003L15.4001 2.21L8.69008 8.92C8.49008 9.12 8.24008 9.21 7.98008 9.21H8.00008Z" fill="#0B0B0B"/>
</svg>
                <div class="budget-dropdown filter-dropdown">
                    <div class="d-flex gap-2">
                    <input type="text" class="form-control" value="100 000">
                    <span class="pt-2">€</span>
                    <span class="pt-2 px-2">-</span>
                    <input type="text" class="form-control" placeholder="Max" disabled>
                    <span class="pt-2">€</span>
                    </div>

                    <div class="mt-3 d-flex align-items-center">
                        <button class="btn-apply">Appliquer</button>
                        <button class="btn-reset">Réinitialiser</button>
                    </div>
                </div>
            </li>
        </ul>

        <div class="form-check">
            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="13" r="10" fill="#9DDC3F"/>
            <g clip-path="url(#clip0_172_141725)">
            <path d="M9.5002 17.8543C8.9373 17.8543 8.39785 17.6309 8.0002 17.2328L3.36621 12.6008L5.13457 10.8332L9.50059 15.1992L20.8662 3.83321L22.6346 5.60078L11.0002 17.2324C10.6025 17.6305 10.0631 17.8543 9.5002 17.8539V17.8543Z" fill="#0B0B0B"/>
            </g>
            <defs>
            <clipPath id="clip0_172_141725">
            <rect width="20" height="20" fill="white" transform="translate(3)"/>
            </clipPath>
            </defs>
            </svg>
            Eligible PTZ
        </div>
        <button class="filter-btn" data-bs-toggle="offcanvas" data-bs-target="#filterDrawer">
          
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_100_204)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.13 6C9.57 4.27 11.14 3 13 3C15.21 3 17 4.79 17 7C17 9.21 15.21 11 13 11C11.14 11 9.57 9.73 9.13 8H2V6H9.13ZM4.13 16C4.57 14.27 6.14 13 8 13C10.21 13 12 14.79 12 17C12 19.21 10.21 21 8 21C6.14 21 4.57 19.73 4.13 18H2V16H4.13ZM14 18V16H22V18H14ZM8 19C9.1 19 10 18.1 10 17C10 15.9 9.1 15 8 15C6.9 15 6 15.9 6 17C6 18.1 6.9 19 8 19ZM19 8V6H22V8H19ZM13 9C14.1 9 15 8.1 15 7C15 5.9 14.1 5 13 5C11.9 5 11 5.9 11 7C11 8.1 11.9 9 13 9Z" fill="#0B0B0B"/>
            </g>
            <defs>
            <clipPath id="clip0_100_204">
            <rect width="24" height="24" fill="white"/>
            </clipPath>
            </defs>
            </svg> Filtres <span class="text-success">(5)</span>
                    </button>
    </div>
</div>
  <div class="d-flex maps-withcard">
    <div class="left-panel">
        <div class="left-panel-tops">
            <h5><strong>Biens</strong> à vendre </h5>
            <div class="custom-sort-wrapper">
            <div class="custom-sort-label">
                Trier par <span class="custom-dropdown-icon"> <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.00008 9.21C7.74008 9.21 7.49008 9.11 7.29008 8.92L0.580078 2.21L1.99008 0.800003L7.99008 6.8L13.9901 0.800003L15.4001 2.21L8.69008 8.92C8.49008 9.12 8.24008 9.21 7.98008 9.21H8.00008Z" fill="#0B0B0B"></path>
</svg> </span>
            </div>

            <div class="custom-view-switch">
                <button class="custom-view-btn custom-list-btn">
                <span class="custom-icon-list"> 
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_100_767)">
<path d="M22 5H7V7H22V5Z" fill="#0B0B0B"/>
<path d="M22 11H7V13H22V11Z" fill="#0B0B0B"/>
<path d="M22 17H7V19H22V17Z" fill="#0B0B0B"/>
<path d="M3.01001 7C2.46001 7 2.01001 6.55 2.01001 6C2.01001 5.45 2.45001 5 3.01001 5C3.56001 5 4.01001 5.45 4.01001 6C4.01001 6.55 3.56001 7 3.01001 7Z" fill="#0B0B0B"/>
<path d="M3.01001 13C2.46001 13 2.01001 12.55 2.01001 12C2.01001 11.45 2.45001 11 3.01001 11C3.56001 11 4.01001 11.45 4.01001 12C4.01001 12.55 3.56001 13 3.01001 13Z" fill="#0B0B0B"/>
<path d="M3.01001 19C2.46001 19 2.01001 18.55 2.01001 18C2.01001 17.45 2.45001 17 3.01001 17C3.56001 17 4.01001 17.45 4.01001 18C4.01001 18.55 3.56001 19 3.01001 19Z" fill="#0B0B0B"/>
</g>
<defs>
<clipPath id="clip0_100_767">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg> </span>
                </button>
                <button class="custom-view-btn custom-map-btn custom-active">
                <span class="custom-icon-map">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_100_784)">
<path d="M16 23C15.85 23 15.69 22.96 15.55 22.89L8.02999 19.13L1.48999 22.86C1.17999 23.04 0.79999 23.03 0.48999 22.86C0.17999 22.68 -0.0100098 22.35 -0.0100098 21.99V6.00001C-0.0100098 5.64001 0.17999 5.31001 0.48999 5.13001L7.49999 1.13001C7.78999 0.960006 8.13999 0.950006 8.43999 1.10001L15.96 4.86001L22.5 1.13001C22.81 0.950006 23.19 0.950006 23.5 1.13001C23.81 1.31001 24 1.64001 24 1.99001V17.99C24 18.35 23.81 18.68 23.5 18.86L16.5 22.86C16.35 22.95 16.18 22.99 16 22.99V23ZM7.99999 17C8.14999 17 8.30999 17.04 8.44999 17.11L15.97 20.87L22 17.42V3.72001L16.5 6.87001C16.21 7.04001 15.86 7.05001 15.56 6.90001L8.03999 3.14001L2.00999 6.59001V20.29L7.50999 17.15C7.65999 17.06 7.82999 17.02 8.00999 17.02L7.99999 17Z" fill="#0B0B0B"/>
<path d="M8 19C7.45 19 7 18.55 7 18V2C7 1.45 7.45 1 8 1C8.55 1 9 1.45 9 2V18C9 18.55 8.55 19 8 19Z" fill="#0B0B0B"/>
<path d="M16 23C15.45 23 15 22.55 15 22V6C15 5.45 15.45 5 16 5C16.55 5 17 5.45 17 6V22C17 22.55 16.55 23 16 23Z" fill="#0B0B0B"/>
</g>
<defs>
<clipPath id="clip0_100_784">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
</span>
                </button>
            </div>
        </div>

        </div>
       
        

        <div class="row">
          <div class="col-12 col-md-6">
            <div class="property-cards">
              <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-image.png" alt="Property">
              <p class="property-locations">THIONVILLE (57)</p>
              <h6>Le Domaine de Dyane, une résidence à la frontière du Luxembourg</h6>
              <p class="datess">Dès 299 000 €</p>
              <p class="property-meta">APPARTEMENT NEUF / T2 À T4 / BALCON / PTZ / PINEL</p>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="property-cards">
              <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-image.png" alt="Property">
              <p class="property-locations">NORROY-LE-VENEUR (57)</p>
              <h6>Les Terrasses de Bellevue, une résidence neuve dans une impasse calme</h6>
              <p class="datess">Dès 227 600 €</p>
              <p class="property-meta">APPARTEMENT NEUF / T2 À T4 / BALCON / PTZ / PINEL</p>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="property-cards">
              <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-image.png" alt="Property">
              <p class="property-locations">NORROY-LE-VENEUR (57)</p>
              <h6>Les Terrasses de Bellevue, une résidence neuve dans une impasse calme</h6>
              <p class="datess">Dès 227 600 €</p>
              <p class="property-meta">APPARTEMENT NEUF / T2 À T4 / BALCON / PTZ / PINEL</p>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="property-cards">
              <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-image.png" alt="Property">
              <p class="property-locations">NORROY-LE-VENEUR (57)</p>
              <h6>Les Terrasses de Bellevue, une résidence neuve dans une impasse calme</h6>
              <p class="datess">Dès 227 600 €</p>
              <p class="property-meta">APPARTEMENT NEUF / T2 À T4 / BALCON / PTZ / PINEL</p>
            </div>
          </div>

        </div>
    </div>


    <div class="map-panel">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16836.512391158264!2d6.1844174!3d49.6116601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1718079477337!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>


<section class="py-5 text-white contact-sec" style="background-image: url('https://terralia-immobilier.preprodwi.fr/app/uploads/2025/05/Frame-33.jpg'); background-size: cover;     background-position: center bottom; background-repeat: no-repeat;">
    <div class="container">
    <div class="row align-items-center py-5">

      <!-- Left Content -->
      <div class="col-md-8 mb-4 mb-md-0 py-5 contact-left-content">
            <h2 class="display-5 fw-bold title let_discuss_tittle">
      Discutons de  <br><span>votre projet </span>dès maintenant  
      </h2>
    
            <p class="mt-5 text-light small text lets_discuss_description" style="">
      Let's discuss your project to understand your expectations, choose the ideal land or apartment, and guide you through the process.
      </p>
          </div>

      <!-- Right Contact Buttons -->
      <div class="col-md-4 text-md-end">
            <a href="#" class="btn btn-dark mb-5 style_lets_discuss_button">
     Nous contacter
      </a><br>
    
            <a href="tel:0387500300" class="btn btn-light d-inline-flex align-items-center style_let_discuss_tab_to_call_number">
      <i class="bi bi-telephone-fill me-2"></i><img class="phone_icon" src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/Vector.png" alt="ss">0387500300
      </a>
          </div>

    </div>
    </div>
  </section>  

  <!-- Filter Drawer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="filterDrawer">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Filtres <span> (4)</span></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">   </button>
    </div>
    <div class="offcanvas-body">
      <div class="property-filter-container">
  <!-- Chambres -->
  <div class="pf-block pf-chambres">
    <label class="pf-label">Chambres</label>
    <div class="pf-chambres-options">
      <button class="pf-chambre-btn">1</button>
      <button class="pf-chambre-btn">2</button>
      <button class="pf-chambre-btn">3</button>
      <button class="pf-chambre-btn">4</button>
      <button class="pf-chambre-btn">5</button>
      <button class="pf-chambre-btn">6+</button>
    </div>
  </div>

  <hr>

<div class="pf-section">
  <!-- Budget -->
  <div class="pf-block">
    <label class="pf-label">Budget</label>
    <div class="pf-range">
      <div class="pf-input-wrapper">
        <input type="text" class="pf-input" placeholder="100 000">
        <span class="pf-suffix">€</span>
      </div>
      <span class="pf-separator">-</span>
      <div class="pf-input-wrapper">
        <input type="text" class="pf-input" placeholder="Max">
        <span class="pf-suffix">€</span>
      </div>
    </div>
    <label class="pf-checkbox">
      <input type="checkbox">
      <span class="pf-check"></span> Eligible PTZ
    </label>
  </div>

  <hr>

  <!-- Surface habitable -->
  <div class="pf-block">
    <label class="pf-label">Surface habitable</label>
    <div class="pf-range">
      <div class="pf-input-wrapper">
        <input type="text" class="pf-input" placeholder="Min">
        <span class="pf-suffix">m²</span>
      </div>
      <span class="pf-separator">-</span>
      <div class="pf-input-wrapper">
        <input type="text" class="pf-input" placeholder="Max">
        <span class="pf-suffix">€</span>
      </div>
    </div>
  </div>

  <hr>

  <!-- Aménagements -->
  <div class="pf-block">
    <label class="pf-label">Aménagements</label>
    <label class="pf-checkbox">
      <input type="checkbox" checked>
      <span class="pf-check"></span> Garage
    </label>
    <label class="pf-checkbox">
      <input type="checkbox" checked>
      <span class="pf-check"></span> Terrasse/Extérieur
    </label>
    <label class="pf-checkbox">
      <input type="checkbox">
      <span class="pf-check"></span> Cave
    </label>
  </div>
</div>




    </div>
  
</div>
    <!-- Buttons -->
  <div class="pf-footer">
    <button class="pf-reset-btn">Réinitialiser</button>
    <button class="pf-search-btn">Rechercher</button>
  </div>
  </div>



  <div class="accordion accordion-inners" id="faqAccordion">
     <div class="container max-width912">
      <h3 class="mb-4 text-center text-black fs-1">Foire aux questions</h3>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            Blandit convallis venenatis purus ultrices ac imperdiet tortor ?
        </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            Elementum facilisis enim a lorem ac gravida ut cursus...
        </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            Non sagittis ante amet ut sed ?
        </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            Velit amet in eu commodo porttitor a aliquam ut...
        </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            Donec tortor proin donec eu libero dui ?
        </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            Nulla facilisi morbi tempus imperdiet libero...
        </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
            Ut adipiscing est eget tempor amet ut tempor ?
        </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
        </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
            Faucibus ut ut elementum viverra nulla fringilla ?
        </button>
        </h2>
        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            Proin viverra massa sit amet erat efficitur, sed fringilla...
        </div>
        </div>
    </div>
    </div>
    </div>


@endsection