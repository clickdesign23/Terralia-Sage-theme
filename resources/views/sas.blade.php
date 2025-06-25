{{-- 
  Template Name: Sas Page
--}}



@extends('layouts.app')

@section('content')
<style>
  
   .hero-sections {
    background: url(https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/HERO-les.jpg) center center / cover no-repeat;
    color: white;
    padding: 25px 0 96px;
    position: relative;
    height: 830px;
    display: flex;
    align-items: flex-end;
    flex-wrap: wrap;
    margin-right: 32px;
}
    .hero-titles {
      font-size: 96px;
    font-weight: 500;
    line-height: 92px;
    letter-spacing: -0.5px;
    margin: 0;
    }

   


.sidebar-box h3 {
    color: #0B0B0B;
    font-size: 40px;
    line-height: 1;
    letter-spacing: -0.5px;
    margin-bottom: 24px;
    font-weight: 400;
}
.sidebar-box a {
    color: #0B0B0B;
    font-size: 22px;
    line-height: 1;
    font-weight: 500;
}
    .sidebar-box {
     background-color: #F6F5F5;
    padding: 40px;
    margin-bottom: 24px;
    }

    .sidebar-box i {
      margin-right: 32px;
    }

    .sidebar-box a {
      font-weight: 500;
      font-size: 1.1rem;
      text-decoration: none;
      color: #000;
      display: inline-block;
    }

    .sidebar-box small {
      color: #555;
      display: block;
      margin-top: 0.3rem;
    }

   
.top-head-progres {
    display: flex;
    gap: 15px;
    justify-content: space-between;
}

.slider-range{
  -webkit-appearance: none;
  width: 100%;
  height: 4px;
  background: linear-gradient(to right, #0B0B0B 15%, #d3d3d3 15%);
  border-radius: 2px;
  outline: none;
  margin-top: 10px;
}

/* Thumb styling */
.slider-range::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 20px;
  height: 20px;
  background: #0B0B0B;
  border-radius: 50%;
  cursor: pointer;
  border: none;
  margin-top: 0px;
}

.slider-range::-moz-range-thumb {
  width: 20px;
  height: 20px;
  background: #0B0B0B;
  border-radius: 50%;
  cursor: pointer;
  border: none;
}

  </style>


<div class="hero-sections text-white">
    <div class="container max-width1700">
      <div class="row">
       <div class="col-md-8 col-lg-7">
      <h1 class="hero-titles">Les duplex de Chieulles</h1>
      </div>
      </div>
    </div>
  </div>

  <!-- Strip Tabs -->
<div class="overlay-strip"> 
  <div class="container max-width1700">
     <div class="row">
       <div class="col-md-8">
          <div class="overlay-strip-col d-flex">
            <div class="firs-tile">Accès rapide</div>
            <div> 
              <a href="#">
 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_102_8106)">
<path d="M16.0002 23C15.8502 23 15.6902 22.96 15.5502 22.89L8.03023 19.13L1.49023 22.86C1.18023 23.04 0.800234 23.03 0.490234 22.86C0.180234 22.68 -0.00976562 22.35 -0.00976562 21.99V5.99998C-0.00976562 5.63998 0.180234 5.30998 0.490234 5.12998L7.50023 1.12998C7.79023 0.959976 8.14023 0.949976 8.44023 1.09998L15.9602 4.85998L22.5002 1.12998C22.8102 0.949976 23.1902 0.949976 23.5002 1.12998C23.8102 1.30998 24.0002 1.63998 24.0002 1.98998V17.99C24.0002 18.35 23.8102 18.68 23.5002 18.86L16.5002 22.86C16.3502 22.95 16.1802 22.99 16.0002 22.99V23ZM8.00023 17C8.15023 17 8.31023 17.04 8.45023 17.11L15.9702 20.87L22.0002 17.42V3.71998L16.5002 6.86998C16.2102 7.03998 15.8602 7.04998 15.5602 6.89998L8.04023 3.13998L2.01023 6.58998V20.29L7.51023 17.15C7.66023 17.06 7.83023 17.02 8.01023 17.02L8.00023 17Z" fill="white"/>
<path d="M8 19C7.45 19 7 18.55 7 18V2C7 1.45 7.45 1 8 1C8.55 1 9 1.45 9 2V18C9 18.55 8.55 19 8 19Z" fill="white"/>
<path d="M16 23C15.45 23 15 22.55 15 22V6C15 5.45 15.45 5 16 5C16.55 5 17 5.45 17 6V22C17 22.55 16.55 23 16 23Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_102_8106">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>Carte</a></div>
            <div>
              <a href="#">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_102_8394)">
<path d="M10 2C10 0.89 10.9 0 12 0C13.1 0 14 0.89 14 2C14 2.74 13.6 3.38 13 3.72V8.19L12 8.76L11 8.19V3.72C10.4 3.37 10 2.74 10 2ZM20.5 15C20.14 15 19.8 15.1 19.51 15.27L16.07 13.12L15.05 13.66L15 14.81L18.5 16.99C18.5 18.09 19.4 18.99 20.5 18.99C21.6 18.99 22.5 18.09 22.5 16.99C22.5 15.89 21.6 14.99 20.5 14.99V15ZM9 14.82L8.95 13.67L7.94 13.13L4.5 15.28C4.21 15.11 3.87 15.01 3.51 15.01C2.4 15.01 1.51 15.9 1.51 17.01C1.51 18.12 2.4 19.01 3.51 19.01C4.62 19.01 5.51 18.12 5.51 17.01L9.01 14.83L9 14.82ZM15.97 2.27C15.92 2.98 15.7 3.65 15.33 4.21L19.47 6.58L12 10.85L4.52 6.58L8.67 4.21C8.3 3.65 8.08 2.99 8.03 2.28L1.5 6V13.56C2.09 13.22 2.77 13 3.5 13V8.3L11 12.58V21.13L7.02 18.86C6.69 19.48 6.22 20 5.64 20.37L12 24L18.36 20.37C17.77 20 17.3 19.47 16.98 18.85L13 21.12V12.58L20.5 8.3V13C21.23 13 21.91 13.21 22.5 13.56V6L15.97 2.27Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_102_8394">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
  Visuels & 3D</a></div>
            <div>
              <a href="#">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_102_8387)">
<path d="M11.0002 15H9V12.9998H11.0002V15ZM15 12.9998H12.9998V15H15V12.9998ZM11.0002 17.0002H9V19.0003H11.0002V17.0002ZM15 17.0002H12.9998V19.0003H15V17.0002ZM11.0002 5.00016H9V7.00031H11.0002V5.00016ZM15 5.00016H12.9998V7.00031H15V5.00016ZM11.0002 9H9V11.0002H11.0002V9ZM15 9H12.9998V11.0002H15V9ZM24 8.00016C24 6.34594 22.6542 5.00016 21 5.00016H18.9998V3C18.9998 1.34578 17.6541 0 15.9998 0H7.99969C6.34547 0 4.99969 1.34578 4.99969 3V9H2.99953C1.34578 9 0 10.3458 0 12V24H24V8.00016ZM2.00016 12C2.00016 11.4478 2.44922 11.0002 3 11.0002H6.99984V3C6.99984 2.44781 7.44891 2.00016 7.99969 2.00016H15.9998C16.5506 2.00016 16.9997 2.44828 16.9997 3V6.99984H20.9995C21.5503 6.99984 21.9994 7.44797 21.9994 7.99969V21.9998H2.00016V12ZM20.0002 12.9998H18V15H20.0002V12.9998ZM20.0002 17.0002H18V19.0003H20.0002V17.0002ZM6 12.9998H3.99984V15H6V12.9998ZM6 17.0002H3.99984V19.0003H6V17.0002ZM20.0002 9H18V11.0002H20.0002V9Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_102_8387">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
Lots <span> (3) </span></a></div>
          </div>
       </div>
     </div>
  </div>  
</div>

  <!-- Content Section -->
  <div class="container max-width1700">
    <div class="row">
      <div class="col-lg-8">
        <div class="mapi-with-cont">
          <h2>Présentation</h2>
          <div class="text-wrapperss">
             <p class="first-para">
          At scelerisque eros et mi auctor urna. Eu sit ut magna dolor volutpat enim id nec faucibus. Vulputate dignissim semper ac fringilla faucibus nascetur lorem et sed. Rhoncus amet non in nec feugiat mauris ornare. Mus proin faucibus consectetur potenti lacus sed. Cras at gravida porttitor consectetur massa. Eget odio at mauris eros sed. Sed nisl eros morbi et ipsum. Ac cursus at vehicula tortor tortor suspendisse a vestibulum vitae. Lorem amet sed mauris pulvinar arcu sed. Sit sem augue eleifend malesuada commodo at scelerisque turpis. Elit at id lacus pellentesque congue aenean. Magna mauris dictum amet viverra enim augue tempor.
        </p>
           <div class="more-text">
          <p>
            Vulputate dignissim semper ac fringilla faucibus nascetur lorem et sed. Rhoncus amet non in nec feugiat mauris ornare. Mus proin faucibus consectetur potenti lacus sed. Cras at gravida porttitor consectetur massa. Eget odio at mauris eros sed. Sed nisl eros morbi et ipsum. Ac cursus at vehicula tortor tortor suspendisse a vestibulum vitae. Lorem amet sed mauris pulvinar arcu sed. Sit sem augue eleifend malesuada commodo at scelerisque turpis. Elit at id lacus pellentesque congue aenean. Magna mauris dictum amet viverra enim augue tempor.
          </p>
        </div>
        <div class="fade-overlay"></div>
        </div>
         <a href="#" class="expend-mores" onclick="toggleMore(event)">Voir plus +</a>
        <div class="map-wrapper">
          <iframe src="https://maps.google.com/maps?q=metz,france&output=embed" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen></iframe>
        </div>
        </div>       
        
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="info-boxesses">
          <div class="info-top-infos">
            <h6>Thionville (57)</h6>
            <h3>Les duplex de Chieulles, 4 maisons–duplex près de Metz</h3>
            <p>Dès 282 000 € €</p>
          </div>
          <div class="info-mid-infos">
             <ul>
              <li> <span>  Demander une plaquette </span>
<svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22.9219 0.700185C22.2398 0.128779 21.3389 -0.108877 20.4637 0.0523726L14.2838 1.1755C13.3992 1.33487 12.5948 1.78815 11.9995 2.46128C11.4052 1.78675 10.6003 1.33253 9.71531 1.17222L3.53578 0.0490913C1.90594 -0.247159 0.344063 0.834716 0.0482812 2.46456C0.0164062 2.64128 0 2.82034 0 2.99987V19.8341L12 22.0171L24 19.8341V2.99987C24 2.11112 23.6053 1.26831 22.9219 0.699716V0.700185ZM11.0002 19.7999L2.00016 18.1658V2.99987C2.00062 2.44768 2.44875 2.00003 3.00094 2.0005C3.06047 2.0005 3.12047 2.00612 3.17906 2.01643L9.35812 3.13956C10.3092 3.31253 11.0002 4.14081 11.0002 5.10737V19.7994V19.7999ZM21.9998 18.1639L12.9998 19.7999V5.10784C12.9998 4.14128 13.6908 3.313 14.6419 3.14003L20.8209 2.0169C21.3642 1.918 21.885 2.27847 21.9839 2.82175C21.9947 2.88034 21.9998 2.94034 21.9998 2.99987V18.1639Z" fill="#514F4D"/>
</svg>
  </li>
              <li> <span> Plan de masse </span>
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7 4V0H3.5C1.57 0 0 1.57 0 3.5V20.5C0 22.43 1.57 24 3.5 24H24V4H7ZM2 3.5C2 2.67 2.67 2 3.5 2H5V17H3.5C2.96 17 2.45 17.12 2 17.34V3.5ZM22 22H3.5C2.67 22 2 21.33 2 20.5C2 19.67 2.67 19 3.5 19H7V6H22V22ZM20 19H9V9C9 8.45 9.45 8 10 8C10.55 8 11 8.45 11 9V17H14V13H16V17H18V10H14V8H20V19Z" fill="#514F4D"/>
</svg>  </li>
             </ul>
          </div>
          <div class="info-bottom-infos">
             <h4> Vous êtes intéressé par ce programme ? </h4>
             <div class="d-flex gap-2">
              <button class="btn btn-green w-50">Prendre RDV</button>
              <button class="btn btn-black w-50">Nous appeler</button>
            </div>
          </div>          
        </div>
      </div>
    </div>
  </div>

<div class="stats-box-section">
  <div class="container max-width1700">
    <div class="row text-center">
      <!-- Box 1 -->
      <div class="col-12 col-md-4 stats-box">
        <div class="stats-title">18</div>
        <div class="stats-subtitle">Lots disponibles<br>du T2 au T3</div>
      </div>

      <!-- Box 2 -->
      <div class="col-12 col-md-4 stats-box">
        <div class="stats-title">T2 2025</div>
        <div class="stats-subtitle">Période de livraison<br>du projet</div>
      </div>

      <!-- Box 3 -->
      <div class="col-12 col-md-4 stats-box">
        <div class="stats-title">A<sup>ⓘ</sup></div>
        <div class="stats-subtitle">Éligible à<br>un classement DPE</div>
      </div>
    </div>
  </div>
</div>





<div class="hover-2col-sec">
<div class="container-flui p-0">
  <div class="row m-0">
    <!-- Left Column -->
    <div class="col-md-6 d-flex flex-column justify-content-between hover-2col-lefty">
      <div class="lefty-top">
        <h6>Avancement du projet</h6>
        <h2 class="section-title">Suivez chaques étapes du projet</h2>
      </div>
      <div class="lefty-bottom">
        <p class="fw-medium">Intéressé par le projet</p>
        <button class="btn btn-custom">Voir les lots disponibles</button>
      </div>
    </div>

    <!-- Right Column: Timeline -->
    <div class="col-md-6 p-0 righty-boxes">
      <!-- Step 1 -->
<div class="stage-box">
  <div class="stage-content">
    <div class="stage-title">Conception</div>
    <p class="mb-0">Tristique molestie lobortis eget neque. Pulvinar viverra id faucibus in quis malesuada. Mauris viverra sed ut elit imperdiet nulla eu odio.</p>
          </div>
  <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/Illustration.png" class="stage-icon" alt="Check Icon" style="mix-blend-mode: exclusion;">
</div>

<!-- Step 2 - Active -->
<div class="stage-box active">
  <div class="stage-content">
    <div class="stage-title">Lancement commercial</div>
    <p class="mb-0">Mattis quisque tellus consectetur facilisi nisl luctus commodo nunc a pulvinar nunc dui porttitor ipsum.</p>
  </div>
  <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/home-ions.png" class="stage-icon" alt="Home Icon">
</div>

<!-- Step 3 - Inactive -->
<div class="stage-box inactive">
  <div class="stage-content">
    <div class="stage-title">Travaux en cours</div>
    <p class="mb-0">Nisl id imperdiet non at tincidunt id tincidunt id dolor aliquet eu at arcu cursus purus augue.</p>
  </div>
</div>

<!-- Step 4 - Inactive -->
<div class="stage-box inactive">
  <div class="stage-content">
    <div class="stage-title">Livraison</div>
    <p class="mb-0">Scelerisque mi diam morbi congue nisl tellus gravida. Aliquam lorem tempus lectus vehicula velit massa convallis sed velit tristique et sed eu.</p>
  </div>
</div>

    </div>
  </div>
</div>
</div>

<div class="section3d">
  <div class="text-uper3d"> Proposition d’aménagement virtuel non contractuelle proposée par un décorateur Rhinov </div>
  <img id="sliderImage" src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/GALLERY-hero.jpg" alt="Visuel" class="slider-image" />
  
  <div class="nav-arrows">
    <button onclick="prevImage()" class="arowbtns">
<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_109_597)">
<path d="M25.3332 14.6665H6.6665V17.3332H25.3332V14.6665Z" fill="#0B0B0B"/>
<path d="M15.0534 26.2801L5.72008 16.9467C5.20008 16.4267 5.20008 15.5867 5.72008 15.0667L15.0534 5.7334L16.9334 7.6134L8.54674 16.0001L16.9334 24.3867L15.0534 26.2667V26.2801Z" fill="#0B0B0B"/>
</g>
<defs>
<clipPath id="clip0_109_597">
<rect width="32" height="32" fill="white"/>
</clipPath>
</defs>
</svg>
 </button>
    <div class="tab-buttons">
      <button class="active" onclick="changeTab(0)">Visuels 3D</button>
      <button onclick="changeTab(1)">Panoramiques 360°</button>
      <button onclick="changeTab(2)">Plans d’aménagements</button>
  </div>
    <button onclick="nextImage()" class="arowbtns">

<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_109_611)">
<path d="M25.3337 14.6665H6.66699V17.3332H25.3337V14.6665Z" fill="#0B0B0B"/>
<path d="M16.9464 26.2801L26.2797 16.9467C26.7997 16.4267 26.7997 15.5867 26.2797 15.0667L16.9464 5.7334L15.0664 7.6134L23.4531 16.0001L15.0664 24.3867L16.9464 26.2667V26.2801Z" fill="#0B0B0B"/>
</g>
<defs>
<clipPath id="clip0_109_611">
<rect width="32" height="32" fill="white"/>
</clipPath>
</defs>
</svg>

</button>
  </div>  
</div>
 

<div class="tabes-customs">
    <h1>Découvrez<br>les logements</h1>

    <div class="table-responsive">
      <table class="table table-borderless align-middle">
        <thead>
          <tr>
            <th>Lot</th>
            <th>Type</th>
            <th>Surface</th>
            <th>Extérieur</th>
            <th>Étage</th>
            <th>Options</th>
            <th>Prix</th>
            <th>Plan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>6A</td>
            <td>T4</td>
            <td>72 m²</td>
            <td>78 m² / Nord–Est</td>
            <td>RdC</td>
            <td>Parking / Garage / Abri de jardin</td>
            <td>282 000 €</td>
            <td><i class="bi bi-download download-icon"></i></td>
          </tr>
          <tr>
            <td>6B</td>
            <td>T4</td>
            <td>74 m²</td>
            <td>86 m² / Sud–Est</td>
            <td>RdC</td>
            <td>Parking / Garage / Abri de jardin</td>
            <td>292 000 €</td>
            <td><i class="bi bi-download download-icon"></i></td>
          </tr>
          <tr>
            <td>6D</td>
            <td>T4</td>
            <td>72 m²</td>
            <td>43 m² / Sud–Ouest</td>
            <td>RdC</td>
            <td>Parking / Garage / Abri de jardin</td>
            <td>283 000 €</td>
            <td><i class="bi bi-download download-icon"></i></td>
          </tr>
          <tr class="inactive">
            <td>6C</td>
            <td>T4</td>
            <td>74 m²</td>
            <td>89 m² / Sud–Ouest</td>
            <td>RdC</td>
            <td>Parking / Garage / Abri de jardin</td>
            <td>291 000 €</td>
            <td><i class="bi bi-download download-icon"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>  

<div class="container max-width1700">
  <div class="row">
    <!-- Left Column -->
    <div class="col-md-7 top-head-progres-out">
      <div class="top-head-progres">
         <div class="titles-col">
          <p>Outils</p>
          <h2>Simulez les mensualités<br>de votre crédit</h2>
         </div>
         <div class="highlight-box">
          <h1><span id="monthlyPayment">903</span> €</h1>
          <div class="text-muted">/mois</div>
          <small>dont 45 € / mois d’assurance<br>Coût du crédit <span id="totalCreditCost">66 720</span> €</small>
        </div>
      </div>
      

      

      <div class="row">
        <div class="col-md-12">
          <label for="loanAmount">
            Montant du prêt 
           <div class="custom-input">
            <input type="text" id="loanAmountInput" value="150000"> <span> € </span>
          </div> 
         </label>
          <input type="range" class="slider-range" id="loanAmount" min="50000" max="1000000" step="1000" value="150000">
        </div>

        <div class="col-md-6">
          <label for="loanDuration">
            Durée du prêt 
            <div class="custom-input">
            <input type="text" id="loanDurationInput" value="20">  <span> ans </span>
            </div>
          </label>
          <input type="range" class="slider-range" id="loanDuration" min="5" max="30" value="20">
        </div>        

        <div class="col-md-6">
          <label for="personalContribution">
            Apport personnel
            <div class="custom-input">
            <input type="text" id="personalContributionInput" value="35000">  <span> € </span>
            </div>
          </label>
          <input type="range" class="slider-range" id="personalContribution" min="0" max="500000" step="1000" value="35000">
        </div>

        <div class="col-md-6">
          <label for="interestRate">
            Taux d’intérêt
            <div class="custom-input">
            <input type="text" id="interestRateInput" value="3.35"> <span> % </span>
           </div>
          </label>
          <input type="range" class="slider-range" id="interestRate" min="0.5" max="10" step="0.01" value="3.35">
        </div>

        <div class="col-md-6">
          <label for="insuranceRate">
            Taux d’assurance 
            <div class="custom-input">
            <input type="text" id="insuranceRateInput" value="0.35"> <span> % </span>
            </div>
          </label>
          <input type="range" class="slider-range" id="insuranceRate" min="0.1" max="3" step="0.01" value="0.35">
        </div>
      </div>      
    </div>

    <!-- Right Sidebar -->
    <div class="col-md-5 sidebar-box-oter">
      <div class="sidebar-box d-flex align-items-start">
        <i class="biicon">          
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_133_1016)">
        <path d="M15.3447 42.9527H32.8947C33.5135 42.9527 34.0197 42.4464 34.0197 41.8277V35.3364C34.0197 34.7177 33.5135 34.2114 32.8947 34.2114H15.3447C14.726 34.2114 14.2197 34.7177 14.2197 35.3364V41.8277C14.2197 42.4464 14.726 42.9527 15.3447 42.9527ZM16.4697 36.4614H31.7697V40.7027H16.4697V36.4614Z" fill="#0B0B0B"/>
        <path d="M19.2485 44.5273H15.3447C14.726 44.5273 14.2197 45.0336 14.2197 45.6523V49.5561C14.2197 50.1748 14.726 50.6811 15.3447 50.6811H19.2485C19.8672 50.6811 20.3735 50.1748 20.3735 49.5561V45.6523C20.3735 45.0336 19.8672 44.5273 19.2485 44.5273ZM18.1235 48.4311H16.4697V46.7773H18.1235V48.4311Z" fill="#0B0B0B"/>
        <path d="M26.1342 44.5273H22.2305C21.6117 44.5273 21.1055 45.0336 21.1055 45.6523V49.5561C21.1055 50.1748 21.6117 50.6811 22.2305 50.6811H26.1342C26.753 50.6811 27.2592 50.1748 27.2592 49.5561V45.6523C27.2592 45.0336 26.753 44.5273 26.1342 44.5273ZM25.0092 48.4311H23.3555V46.7773H25.0092V48.4311Z" fill="#0B0B0B"/>
        <path d="M19.2485 52.2451H15.3447C14.726 52.2451 14.2197 52.7514 14.2197 53.3701V57.2739C14.2197 57.8926 14.726 58.3989 15.3447 58.3989H19.2485C19.8672 58.3989 20.3735 57.8926 20.3735 57.2739V53.3701C20.3735 52.7514 19.8672 52.2451 19.2485 52.2451ZM18.1235 56.1489H16.4697V54.4951H18.1235V56.1489Z" fill="#0B0B0B"/>
        <path d="M26.1342 52.2451H22.2305C21.6117 52.2451 21.1055 52.7514 21.1055 53.3701V57.2739C21.1055 57.8926 21.6117 58.3989 22.2305 58.3989H26.1342C26.753 58.3989 27.2592 57.8926 27.2592 57.2739V53.3701C27.2592 52.7514 26.753 52.2451 26.1342 52.2451ZM25.0092 56.1489H23.3555V54.4951H25.0092V56.1489Z" fill="#0B0B0B"/>
        <path d="M19.2485 59.9736H15.3447C14.726 59.9736 14.2197 60.4799 14.2197 61.0986V65.0024C14.2197 65.6211 14.726 66.1274 15.3447 66.1274H19.2485C19.8672 66.1274 20.3735 65.6211 20.3735 65.0024V61.0986C20.3735 60.4799 19.8672 59.9736 19.2485 59.9736ZM18.1235 63.8661H16.4697V62.2124H18.1235V63.8661Z" fill="#0B0B0B"/>
        <path d="M26.1342 59.9736H22.2305C21.6117 59.9736 21.1055 60.4799 21.1055 61.0986V65.0024C21.1055 65.6211 21.6117 66.1274 22.2305 66.1274H26.1342C26.753 66.1274 27.2592 65.6211 27.2592 65.0024V61.0986C27.2592 60.4799 26.753 59.9736 26.1342 59.9736ZM25.0092 63.8661H23.3555V62.2124H25.0092V63.8661Z" fill="#0B0B0B"/>
        <path d="M33.0073 44.5273H29.1035C28.4848 44.5273 27.9785 45.0336 27.9785 45.6523V49.5561C27.9785 50.1748 28.4848 50.6811 29.1035 50.6811H33.0073C33.626 50.6811 34.1323 50.1748 34.1323 49.5561V45.6523C34.1323 45.0336 33.626 44.5273 33.0073 44.5273ZM31.8823 48.4311H30.2285V46.7773H31.8823V48.4311Z" fill="#0B0B0B"/>
        <path d="M33.0073 52.2451H29.1035C28.4848 52.2451 27.9785 52.7514 27.9785 53.3701V64.9914C27.9785 65.6101 28.4848 66.1164 29.1035 66.1164H33.0073C33.626 66.1164 34.1323 65.6101 34.1323 64.9914V53.3701C34.1323 52.7514 33.626 52.2451 33.0073 52.2451ZM31.8823 63.8776H30.2285V54.5064H31.8823V63.8776Z" fill="#0B0B0B"/>
        <path d="M61.7967 13.5562C61.7967 13.5562 61.7742 13.5 61.763 13.4775C61.7067 13.3537 61.6392 13.2525 61.5492 13.1512L50.9855 2.59873H50.9742C50.8842 2.50873 50.783 2.42998 50.6705 2.38498C50.6367 2.37373 50.5917 2.35123 50.5467 2.33998C50.4567 2.30623 50.3667 2.29498 50.2767 2.28373C50.243 2.28373 50.2205 2.26123 50.198 2.26123H18.248C17.6292 2.26123 17.123 2.76748 17.123 3.38623V30.7575H12.713C11.2955 30.7575 10.1367 31.9162 10.1367 33.3337V67.1737C10.1367 68.5912 11.2955 69.75 12.713 69.75H35.6742C37.0917 69.75 38.2505 68.5912 38.2505 67.1737V61.515H60.7617C61.3805 61.515 61.8867 61.0087 61.8867 60.39V13.9275C61.8867 13.9275 61.8867 13.8937 61.8867 13.8825C61.8867 13.77 61.853 13.6575 61.8192 13.545L61.7967 13.5562ZM51.323 6.09748L58.0392 12.8137H51.323V6.09748ZM19.3617 4.49998H49.0617V13.9387C49.0617 14.5575 49.568 15.0637 50.1867 15.0637H59.6255V53.64H38.2392V46.4962L40.6355 48.1612C41.018 48.4312 41.5355 48.4312 41.918 48.1612L48.7467 43.4025L54.7767 48.1162C55.2605 48.51 55.9692 48.4312 56.363 47.9587C56.7567 47.475 56.678 46.7662 56.2055 46.3725C56.1942 46.3725 56.183 46.35 56.1717 46.35L49.4892 41.1187C49.0955 40.815 48.5555 40.8037 48.1505 41.085L41.288 45.8662L38.2505 43.7512V38.8237L40.6467 40.4887C41.0292 40.7587 41.5467 40.7587 41.9292 40.4887L48.758 35.73L54.788 40.455C54.9905 40.6125 55.2267 40.6912 55.4855 40.6912C56.1042 40.6912 56.6105 40.185 56.6105 39.5662C56.6105 39.2175 56.453 38.8912 56.183 38.6775L49.5005 33.435C49.1067 33.1312 48.5667 33.12 48.1617 33.4012L41.2992 38.1937L38.2617 36.0787V33.3337C38.2617 31.9162 37.103 30.7575 35.6855 30.7575H19.3842V4.49998H19.3617ZM35.663 67.5H12.7017C12.5217 67.5 12.3755 67.3537 12.3755 67.1737V33.3337C12.3755 33.1537 12.5217 33.0075 12.7017 33.0075H35.663C35.843 33.0075 35.9892 33.1537 35.9892 33.3337V67.1737C35.9892 67.3537 35.843 67.5 35.663 67.5ZM38.2392 59.265V55.8787H59.6255V59.265H38.2392Z" fill="#0B0B0B"/>
        <path d="M42.5703 22.2637C42.5703 22.8824 43.0766 23.3887 43.6953 23.3887H53.5503C54.1691 23.3887 54.6753 22.8824 54.6753 22.2637C54.6753 21.6449 54.1691 21.1387 53.5503 21.1387H43.6953C43.0766 21.1387 42.5703 21.6449 42.5703 22.2637Z" fill="#0B0B0B"/>
        <path d="M51.9303 25.7739H43.6953C43.0766 25.7739 42.5703 26.2802 42.5703 26.8989C42.5703 27.5177 43.0766 28.0239 43.6953 28.0239H51.9303C52.5491 28.0239 53.0553 27.5177 53.0553 26.8989C53.0553 26.2802 52.5491 25.7739 51.9303 25.7739Z" fill="#0B0B0B"/>
        <path d="M26.28 14.67H24.165C23.5575 14.67 23.0625 15.165 23.0625 15.7725C23.0625 16.38 23.5575 16.875 24.165 16.875H25.8188V17.9775V19.08H24.165C23.5575 19.08 23.0625 19.575 23.0625 20.1825C23.0625 20.79 23.5575 21.285 24.165 21.285H26.28C27.6975 25.3012 31.4888 27.99 35.7525 28.0012C36.45 28.0012 37.1587 27.9337 37.845 27.7762C38.4525 27.6412 38.8462 27.045 38.7113 26.4375C38.5763 25.83 37.98 25.4362 37.3725 25.5712C36.8438 25.695 36.3038 25.7512 35.7638 25.7512C32.7263 25.74 29.9587 23.9737 28.665 21.2175H35.8538C36.4613 21.2175 36.9562 20.7225 36.9562 20.115C36.9562 19.5075 36.4613 19.0125 35.8538 19.0125H28.035C27.9338 18.3037 27.9338 17.595 28.035 16.8862H35.865C36.4725 16.8862 36.9675 16.3912 36.9675 15.7837C36.9675 15.1762 36.4725 14.6812 35.865 14.6812H28.665C29.9362 11.8912 32.7038 10.0912 35.7638 10.0687C36.3038 10.0687 36.8438 10.125 37.3725 10.2375C37.98 10.3725 38.5875 9.97871 38.7113 9.37121C38.8462 8.76371 38.4525 8.15621 37.845 8.03246C37.1587 7.89746 36.4613 7.84121 35.7525 7.86371C31.4663 7.88621 27.675 10.62 26.2688 14.6587L26.28 14.67Z" fill="#0B0B0B"/>
        </g>
        <defs>
        <clipPath id="clip0_133_1016">
        <rect width="72" height="72" fill="white"/>
        </clipPath>
        </defs>
        </svg>
        </i>
        <div>
          <h3> Calculer ma capacité d’emprunt </h3>
          <a href="#">Calculer maintenant 
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.00601 5.58823L5.5918 7.00244L16.2479 17.6585L17.6621 16.2443L7.00601 5.58823Z" fill="#0B0B0B"/>
<path d="M17 18H6V16H16V6H18V17C18 17.55 17.55 18 17 18Z" fill="#0B0B0B"/>
</svg>
 </a>
        </div>
      </div>
      <div class="sidebar-box d-flex align-items-start">
        <i class="biicon">         
        
        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.8396 8.69007V12.7001H9.84961C9.29961 12.7001 8.84961 13.1501 8.84961 13.7001V61.0001C8.84961 61.5501 9.29961 62.0001 9.84961 62.0001H41.8496C42.3996 62.0001 42.8496 61.5501 42.8496 61.0001V56.9901H47.8396C48.3896 56.9901 48.8396 56.5401 48.8396 55.9901V25.5301L54.6396 11.0401C55.3396 9.31007 55.3096 7.37007 54.5496 5.66007C53.1896 2.56007 49.5696 1.15007 46.4696 2.52007C46.3596 2.57007 46.2396 2.62007 46.1296 2.68007C44.4696 3.53007 43.2196 5.02007 42.6796 6.80007L42.4096 7.69007H15.8396C15.2896 7.69007 14.8396 8.14007 14.8396 8.69007ZM40.8496 60.0001H10.8496V14.7001H40.2296L38.1396 21.4601C38.1396 21.4601 38.1496 21.4001 38.1596 21.3801C38.1596 20.8301 37.7096 20.3801 37.1596 20.3801H14.5296C13.9796 20.3801 13.5296 20.8301 13.5296 21.3801C13.5296 21.9301 13.9796 22.3801 14.5296 22.3801H37.1596C37.5196 22.3801 37.8496 22.1801 38.0196 21.8601L37.4196 23.7901V23.8201L36.8496 25.6701H14.5296C13.9796 25.6701 13.5296 26.1201 13.5296 26.6701C13.5296 27.2201 13.9796 27.6701 14.5296 27.6701H36.2196L35.9896 28.4101C35.7296 29.2201 35.9896 30.1001 36.6596 30.6301L36.5396 30.9601H14.5296C13.9796 30.9601 13.5296 31.4101 13.5296 31.9601C13.5296 32.5101 13.9796 32.9601 14.5296 32.9601H35.8396L35.3996 34.1901C35.2896 34.5301 35.3596 34.9001 35.5896 35.1601L34.9396 36.2501H14.5296C13.9796 36.2501 13.5296 36.7001 13.5296 37.2501C13.5296 37.8001 13.9796 38.2501 14.5296 38.2501H33.7696L33.5296 38.6501C33.4296 38.8201 33.3796 39.0201 33.3896 39.2201L33.5296 41.5301H14.5296C13.9796 41.5301 13.5296 41.9801 13.5296 42.5301C13.5296 43.0801 13.9796 43.5301 14.5296 43.5301H33.6496L33.9096 47.7901C33.9096 47.9101 33.9496 48.0301 33.9996 48.1301C34.0096 48.1601 34.0296 48.1901 34.0496 48.2201C34.0896 48.2901 34.1396 48.3601 34.1996 48.4201C34.2196 48.4501 34.2496 48.4701 34.2796 48.4901C34.3696 48.5701 34.4696 48.6301 34.5796 48.6701C34.5996 48.6701 34.6096 48.6701 34.6296 48.6701C34.8396 48.7401 35.0696 48.7301 35.2696 48.6401C35.2996 48.6301 35.3296 48.6101 35.3596 48.6001C35.4496 48.5601 35.5296 48.5001 35.5996 48.4301C35.6196 48.4201 35.6396 48.4101 35.6496 48.3901L40.8496 42.7301V59.9801V60.0001ZM37.9296 39.2401C37.4096 39.0601 36.8396 39.3301 36.6496 39.8501L35.6196 42.7701V42.5301L35.4096 39.4001L37.4496 35.9701L40.3596 37.0001L39.7896 40.9501L37.4996 43.4401L38.5396 40.5101C38.7196 39.9901 38.4496 39.4201 37.9296 39.2301V39.2401ZM41.5096 35.2801L38.7896 34.3201L37.6296 33.9101L38.5196 31.4001L42.3996 32.7701L41.5096 35.2801ZM44.3396 31.3401L37.9196 29.0001L39.0196 25.4201L45.7596 27.8101L44.3496 31.3401H44.3396ZM42.8496 54.9901V37.2401C42.9396 37.1401 43.0196 37.0201 43.0596 36.9001L44.3196 33.3501H44.3396C45.1796 33.3501 45.9296 32.8201 46.2296 32.0401L46.8296 30.5301V55.0001H42.8396L42.8496 54.9901ZM44.5896 7.39007C44.9696 6.12007 45.8496 5.07007 47.0296 4.46007C47.6296 4.16007 48.2896 4.00007 48.9596 3.99007C49.4196 3.99007 49.8896 4.07007 50.3196 4.23007C51.3996 4.62007 52.2696 5.43007 52.7296 6.48007C53.2596 7.69007 53.2796 9.06007 52.7896 10.2901L46.4996 25.9501L39.6096 23.5101L44.5896 7.39007ZM41.7896 9.69007L40.8596 12.7001H16.8496V9.69007H41.7996H41.7896Z" fill="#0B0B0B"/>
        <path d="M35.5599 51.42C35.0999 51.12 34.4799 51.25 34.1799 51.71C33.4899 52.82 32.3899 53.6 31.1099 53.88C30.0699 54.04 28.9999 53.8 28.1299 53.21C28.4199 53 28.6899 52.77 28.9399 52.52C29.7599 51.78 30.2099 50.72 30.1599 49.61C29.8499 48.24 28.8899 47.1 27.5899 46.57C26.6699 46.03 25.5399 45.99 24.5899 46.49C23.0699 47.5 23.6899 50.1 23.8299 50.62C23.9999 51.25 24.2599 51.85 24.5999 52.4H24.5299C23.8599 52.27 23.2299 51.94 22.7399 51.46C21.7899 50.59 20.5799 50.05 19.2999 49.92C18.2599 49.86 17.2199 50.06 16.2799 50.5C15.7799 50.73 15.5499 51.32 15.7799 51.82C16.0099 52.32 16.5999 52.55 17.0999 52.32C17.7399 52.01 18.4399 51.87 19.1499 51.91C20.0399 52.02 20.8699 52.41 21.5099 53.03C22.2999 53.76 23.2799 54.22 24.3399 54.37C24.9399 54.42 25.5399 54.35 26.1099 54.18C27.2999 55.27 28.8499 55.89 30.4599 55.92C30.7899 55.92 31.1099 55.89 31.4299 55.84C33.2499 55.47 34.8399 54.37 35.8399 52.79C36.1399 52.33 36.0099 51.71 35.5499 51.41L35.5599 51.42ZM26.6199 51.82C26.2299 51.31 25.9399 50.72 25.7599 50.1C25.5499 49.48 25.5199 48.8 25.6899 48.17C25.7399 48.15 25.7899 48.15 25.8399 48.15C26.2399 48.18 26.6299 48.3 26.9699 48.51C27.5399 48.77 27.9699 49.25 28.1699 49.84C28.1299 50.34 27.8899 50.81 27.5099 51.13C27.2399 51.4 26.9499 51.63 26.6199 51.82Z" fill="#0B0B0B"/>
        </svg>
        </i>
        <div>
          <h3>  Calculer mes frais de notaires</h3>         
         <a href="#">Calculer maintenant 
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.00601 5.58823L5.5918 7.00244L16.2479 17.6585L17.6621 16.2443L7.00601 5.58823Z" fill="#0B0B0B"/>
<path d="M17 18H6V16H16V6H18V17C18 17.55 17.55 18 17 18Z" fill="#0B0B0B"/>
</svg>
 </a>
        </div>
      </div>
      <div class="sidebar-box d-flex align-items-start">
        <i class="biicon">
      <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_2195_1620)">
      <path d="M36.4842 14.7039H34.3242C33.7055 14.7039 33.1992 15.2101 33.1992 15.8289C33.1992 16.4476 33.7055 16.9539 34.3242 16.9539H36.0117V19.2039H34.3242C33.7055 19.2039 33.1992 19.7101 33.1992 20.3289C33.1992 20.9476 33.7055 21.4539 34.3242 21.4539H36.4842C37.9355 25.5489 41.7942 28.2826 46.1367 28.2939C46.8567 28.2939 47.5655 28.2151 48.263 28.0689C48.8817 27.9339 49.2755 27.3264 49.1405 26.6964C49.0055 26.0664 48.398 25.6839 47.768 25.8189C47.228 25.9426 46.6767 25.9989 46.1255 25.9989C43.0205 25.9989 40.208 24.1876 38.8917 21.3864H46.2155C46.8342 21.3864 47.3405 20.8801 47.3405 20.2614C47.3405 19.6426 46.8342 19.1364 46.2155 19.1364H38.2505C38.1492 18.4164 38.1492 17.6964 38.2505 16.9764H46.2267C46.8455 16.9764 47.3517 16.4701 47.3517 15.8514C47.3517 15.2326 46.8455 14.7264 46.2267 14.7264H38.8917C40.1855 11.8801 43.0092 10.0464 46.1255 10.0239C46.6767 10.0239 47.228 10.0801 47.768 10.1926C48.3867 10.3276 49.0055 9.93386 49.1405 9.31511C49.2755 8.69636 48.8817 8.07761 48.263 7.94261C47.5655 7.80761 46.8455 7.75136 46.1367 7.77386C41.7717 7.80761 37.9017 10.5751 36.4842 14.7039Z" fill="#0B0B0B"/>
      <path d="M4.2973 51.3565L12.9261 69.1315C13.0948 69.469 13.4211 69.7052 13.8036 69.7502H13.9386C14.2761 69.7502 14.5911 69.5927 14.8048 69.334L22.8711 59.4902C23.8723 58.2752 25.3686 57.5665 26.9436 57.5665H47.7786C49.9273 57.5665 51.9748 56.644 53.4036 55.024L66.3073 40.399C68.5011 37.8677 68.2311 34.0427 65.7111 31.849C63.4498 29.8915 60.0973 29.869 57.8136 31.7927L50.3773 38.1715C49.4886 35.8427 47.2386 34.324 44.7523 34.3465H25.3123C23.4898 34.3465 21.7348 34.999 20.3623 36.2027L4.6123 50.0177C4.21855 50.344 4.08355 50.8952 4.2973 51.3565ZM21.8473 37.8565C22.8036 37.024 24.0411 36.5627 25.3123 36.5627H44.8198C46.8561 36.5627 48.5098 38.2165 48.5211 40.2527C48.5211 42.289 46.8561 43.9427 44.8198 43.9427H31.1961C30.5773 43.9427 30.0711 44.449 30.0711 45.0677C30.0711 45.6865 30.5773 46.1927 31.1961 46.1927H44.8198C47.8911 46.1927 50.4673 43.8415 50.7486 40.7815L59.2873 33.4465C60.8736 32.0627 63.2811 32.2315 64.6648 33.8177C65.9248 35.269 65.9136 37.4402 64.6311 38.869L51.7611 53.539C50.7598 54.6752 49.3198 55.3277 47.8123 55.3277H26.9436C24.6936 55.3277 22.5561 56.3402 21.1386 58.084L20.8686 58.4102L15.5586 43.3915L21.8473 37.8565ZM13.7361 45.0115L19.1923 60.469L14.1861 66.5665L6.69355 51.1427L13.7361 45.0115Z" fill="#0B0B0B"/>
      <path d="M27.4727 18.0112C27.4727 26.7075 34.5264 33.7612 43.2227 33.7612C51.9189 33.7612 58.9727 26.7075 58.9727 18.0112C58.9727 9.31498 51.9189 2.26123 43.2227 2.26123C34.5264 2.26123 27.4727 9.31498 27.4727 18.0112ZM56.7227 18.0112C56.7227 25.47 50.6814 31.5112 43.2227 31.5112C35.7639 31.5112 29.7227 25.47 29.7227 18.0112C29.7227 10.5525 35.7639 4.51123 43.2227 4.51123C50.6814 4.48873 56.7452 10.5075 56.7677 17.9662C56.7677 17.9775 56.7677 18 56.7677 18.0112H56.7227Z" fill="#0B0B0B"/>
      </g>
      <defs>
      <clipPath id="clip0_2195_1620">
      <rect width="72" height="72" fill="white"/>
      </clipPath>
      </defs>
      </svg>
        </i>
        <div>
          <h3> Calculer le montant de mon PTZ </h3>          
          <a href="#">Calculer maintenant 
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.00601 5.58823L5.5918 7.00244L16.2479 17.6585L17.6621 16.2443L7.00601 5.58823Z" fill="#0B0B0B"/>
<path d="M17 18H6V16H16V6H18V17C18 17.55 17.55 18 17 18Z" fill="#0B0B0B"/>
</svg>
 </a>
        </div>
      </div>
    </div>
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


  <div class="accordion accordion-inners accordion-lefts" id="faqAccordion">
     <div class="container max-width912">
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            Garantie locative
        </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
           <p> Est tincidunt aliquet iaculis egestas iaculis augue. Id elementum integer odio mauris mattis sollicitudin. Feugiat molestie congue lorem convallis donec tempor. Sapien lobortis ornare mi a. Massa ut parturient sed enim id non scelerisque sed.</p> 
           <p> Condimentum vel quisque pellentesque enim. Vel eget duis libero justo tristique nisi eu feugiat. Mauris scelerisque eget pellentesque duis lorem id sed. Purus at volutpat feugiat libero. Pulvinar accumsan vitae malesuada venenatis sed sed metus dui nisl. Sed donec tempor sodales et nulla ac nunc eget morbi. Velit et ut elementum in lacus vitae. Maecenas ullamcorper viverra vulputate sit. Laoreet sed at malesuada orci risus neque quam. Nunc pellentesque magna congue semper enim. Tempor ullamcorper id ut in non penatibus volutpat nunc. Enim non vestibulum morbi venenatis. Sit amet mattis metus morbi. Ac est sed commodo suscipit.</p>
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
            Plus d’informations sur le bien
        </div>
        </div>
    </div>
    </div>
    </div>
<script>
  function updateValues() {
    const loan = parseFloat(document.getElementById('loanAmount').value);
    const duration = parseFloat(document.getElementById('loanDuration').value);
    const contribution = parseFloat(document.getElementById('personalContribution').value);
    const interest = parseFloat(document.getElementById('interestRate').value) / 100;
    const insurance = parseFloat(document.getElementById('insuranceRate').value) / 100;

    const loanNet = loan - contribution;
    const monthlyInterest = interest / 12;
    const months = duration * 12;

    const monthlyPayment = (loanNet * monthlyInterest) / (1 - Math.pow(1 + monthlyInterest, -months));
    const insuranceMonthly = (loanNet * insurance) / 12;
    const total = (monthlyPayment + insuranceMonthly) * months - loanNet;

    document.getElementById('monthlyPayment').innerText = Math.round(monthlyPayment + insuranceMonthly);
    document.getElementById('totalCreditCost').innerText = Math.round(total);

    document.getElementById('loanAmountInput').value = loan;
    document.getElementById('loanDurationInput').value = duration;
    document.getElementById('personalContributionInput').value = contribution;
    document.getElementById('interestRateInput').value = interest * 100;
    document.getElementById('insuranceRateInput').value = insurance * 100;
  }

  // Attach to all sliders
  document.querySelectorAll('input[type="range"]').forEach(input => {
    input.addEventListener('input', updateValues);
  });
 function updateSliderBackground(slider) {
    const min = parseInt(slider.min);
    const max = parseInt(slider.max);
    const val = parseInt(slider.value);
    const percentage = ((val - min) / (max - min)) * 100;

    slider.style.background = `linear-gradient(to right, black ${percentage}%, #d3d3d3 ${percentage}%)`;
  }

  document.addEventListener("DOMContentLoaded", function () {
    const sliders = document.querySelectorAll(".slider-range");

    sliders.forEach(slider => {
      updateSliderBackground(slider);
      slider.addEventListener("input", () => updateSliderBackground(slider));
    });
  });
  window.onload = updateValues;
</script>
<script>
  const images = [
  "https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-image-1.png",
  "https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/HERO-les-1.jpg",
  "https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-imagess-1.jpg"
];

  let currentIndex = 0;
  const imageElement = document.getElementById("sliderImage");
  const buttons = document.querySelectorAll(".tab-buttons button");

  function updateImage() {
  console.log("Changing to:", images[currentIndex]);
  imageElement.src = images[currentIndex];
  buttons.forEach((btn, index) => {
    btn.classList.toggle("active", index === currentIndex);
  });
}

  function changeTab(index) {
    currentIndex = index;
    updateImage();
  }

  function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateImage();
  }

  function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    updateImage();
  }  
</script>

<script>
  function toggleMore(e) {
    e.preventDefault();
    const wrapper = document.querySelector('.text-wrapperss');
    const btn = e.target;

    wrapper.classList.toggle('expanded');

    if (wrapper.classList.contains('expanded')) {
      btn.textContent = "Voir moins −";
    } else {
      btn.textContent = "Voir plus +";
    }
  }
</script>


@endsection