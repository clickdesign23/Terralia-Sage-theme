{{-- 
  Template Name: Actualites
--}}

@extends('layouts.app')

@section('content')

<div class="intro-sec">
  <div class="container max-width1700">
    <div class="row align-items-end">
      <div class="col-md-10 col-lg-7 col-xl-6">
        <h6 class="taglines">Conseils et actus</h6>
        <h1 class="global-heading">Suivez l'actualité du marché de l'immobilier en France</h1>  
      </div>
    </div>       
  </div>   
</div>

<div class="postss-categriess">
    <!-- Tabs -->
    <div class="categriess-navtabs">
        <div class="container max-width1700 d-flex align-items-center">
            <div class="hed-categ"> Catégories </div>
            <ul class="nav nav-tabs category-tabs" id="categoryTabs">
                <li class="nav-item"><a class="nav-link active" data-filter="all" href="#"> 
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_138_59416)">
<path d="M6.49922 17.8543C5.93633 17.8543 5.39687 17.6308 4.99922 17.2328L0.365234 12.6008L2.13359 10.8332L6.49961 15.1992L17.8652 3.83319L19.6336 5.60077L7.99922 17.2324C7.60156 17.6305 7.06211 17.8543 6.49922 17.8539V17.8543Z" fill="#609B15"/>
</g>
<defs>
<clipPath id="clip0_138_59416">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>
 Tout</a></li>
                <li class="nav-item"><a class="nav-link" data-filter="cat1" href="#">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_138_59416)">
<path d="M6.49922 17.8543C5.93633 17.8543 5.39687 17.6308 4.99922 17.2328L0.365234 12.6008L2.13359 10.8332L6.49961 15.1992L17.8652 3.83319L19.6336 5.60077L7.99922 17.2324C7.60156 17.6305 7.06211 17.8543 6.49922 17.8539V17.8543Z" fill="#609B15"/>
</g>
<defs>
<clipPath id="clip0_138_59416">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>
Catégorie 1</a></li>
                <li class="nav-item"><a class="nav-link" data-filter="cat2" href="#">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_138_59416)">
<path d="M6.49922 17.8543C5.93633 17.8543 5.39687 17.6308 4.99922 17.2328L0.365234 12.6008L2.13359 10.8332L6.49961 15.1992L17.8652 3.83319L19.6336 5.60077L7.99922 17.2324C7.60156 17.6305 7.06211 17.8543 6.49922 17.8539V17.8543Z" fill="#609B15"/>
</g>
<defs>
<clipPath id="clip0_138_59416">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>
Catégorie 2</a></li>
            </ul>
        </div>
    </div>
   <div class="container max-width1700">
    <!-- Grid -->
    <div class="row" id="postGrid">
      <!-- Card 1 -->
      <div class="col-md-4 post-item">
        <div class="post-card">
          <a href="#">
            <div class="post-image"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-imagess.jpg" alt="img1"></div>
            <div class="post-body">
                <div class="post-category">Catégorie 1</div>
                <div class="post-title">C'est quoi le GFA ?</div>
                <div class="post-description">Turpis egestas mattis velit augue facilisis. Magna lacus donec morbi quis vulputate suspendisse. Non platea vu..</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 post-item">
        <div class="post-card">
          <a href="#">
            <div class="post-image"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-image.png" alt="img2"></div>
            <div class="post-body">
                <div class="post-category">Catégorie 2</div>
                <div class="post-title">Acquérir un terrain à bâtir</div>
                <div class="post-description">Auctor malesuada amet nam netus suspendisse amet. Lectus at ligula nisl lectus habitant pulvinar nisi fringilla..</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 post-item">
        <div class="post-card">
          <a href="#">
            <div class="post-image"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-imagess.jpg" alt="img3"></div>
            <div class="post-body">
                <div class="post-category">Catégorie 1</div>
                <div class="post-title">Organisation d'un lotissement</div>
                <div class="post-description">Turpis egestas mattis velit augue facilisis. Magna lacus donec morbi quis vulputate suspendisse. Non platea vu..</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4 post-item">
        <div class="post-card">
          <a href="#">
            <div class="post-image"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-imagess.jpg" alt="img3"></div>
            <div class="post-body">
                <div class="post-category">Catégorie 1</div>
                <div class="post-title">Organisation d'un lotissement</div>
                <div class="post-description">Turpis egestas mattis velit augue facilisis. Magna lacus donec morbi quis vulputate suspendisse. Non platea vu..</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4 post-item cat1">
        <div class="post-card">
          <a href="#">
            <div class="post-image"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-imagess.jpg" alt="img3"></div>
            <div class="post-body">
                <div class="post-category">Catégorie 1</div>
                <div class="post-title">Organisation d'un lotissement</div>
                <div class="post-description">Turpis egestas mattis velit augue facilisis. Magna lacus donec morbi quis vulputate suspendisse. Non platea vu..</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-4 post-item cat1">
        <div class="post-card">
          <a href="#">
            <div class="post-image"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-imagess.jpg" alt="img3"></div>
            <div class="post-body">
                <div class="post-category">Catégorie 1</div>
                <div class="post-title">Organisation d'un lotissement</div>
                <div class="post-description">Turpis egestas mattis velit augue facilisis. Magna lacus donec morbi quis vulputate suspendisse. Non platea vu..</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="col-md-4 post-item cat2">
        <div class="post-card">
          <a href="#">
            <div class="post-image"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-imagess.jpg" alt="img3"></div>
            <div class="post-body">
                <div class="post-category">Catégorie 1</div>
                <div class="post-title">Organisation d'un lotissement</div>
                <div class="post-description">Turpis egestas mattis velit augue facilisis. Magna lacus donec morbi quis vulputate suspendisse. Non platea vu..</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="col-md-4 post-item cat2">
        <div class="post-card">
          <a href="#">
            <div class="post-image"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-imagess.jpg" alt="img3"></div>
            <div class="post-body">
                <div class="post-category">Catégorie 1</div>
                <div class="post-title">Organisation d'un lotissement</div>
                <div class="post-description">Turpis egestas mattis velit augue facilisis. Magna lacus donec morbi quis vulputate suspendisse. Non platea vu..</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="col-md-4 post-item">
        <div class="post-card">
          <a href="#">
            <div class="post-image"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/bien-imagess.jpg" alt="img3"></div>
            <div class="post-body">
                <div class="post-category">Catégorie 1</div>
                <div class="post-title">Organisation d'un lotissement</div>
                <div class="post-description">Turpis egestas mattis velit augue facilisis. Magna lacus donec morbi quis vulputate suspendisse. Non platea vu..</div>
            </div>
          </a>
        </div>
      </div>

      <!-- Add more post-item elements here as needed -->
      <!-- Use class cat1 / cat2 for filtering -->
    </div>

    

  </div>
  <!-- Pagination -->
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center custom-pagination">
        <li class="page-item disabled"><a class="page-link" href="#"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_109_597)">
<path d="M25.3332 14.6665H6.6665V17.3332H25.3332V14.6665Z" fill="#0B0B0B"></path>
<path d="M15.0534 26.2801L5.72008 16.9467C5.20008 16.4267 5.20008 15.5867 5.72008 15.0667L15.0534 5.7334L16.9334 7.6134L8.54674 16.0001L16.9334 24.3867L15.0534 26.2667V26.2801Z" fill="#0B0B0B"></path>
</g>
<defs>
<clipPath id="clip0_109_597">
<rect width="32" height="32" fill="white"></rect>
</clipPath>
</defs>
</svg></a></li>
        <li class="page-item active"><a class="page-link" href="#" data-page="1">1</a></li>
        <li class="page-item"><a class="page-link" href="#" data-page="2">2</a></li>
        <li class="page-item"><a class="page-link" href="#" data-page="3">3</a></li>
        <li class="page-item"><a class="page-link" href="#"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_109_611)">
<path d="M25.3337 14.6665H6.66699V17.3332H25.3337V14.6665Z" fill="#0B0B0B"></path>
<path d="M16.9464 26.2801L26.2797 16.9467C26.7997 16.4267 26.7997 15.5867 26.2797 15.0667L16.9464 5.7334L15.0664 7.6134L23.4531 16.0001L15.0664 24.3867L16.9464 26.2667V26.2801Z" fill="#0B0B0B"></path>
</g>
<defs>
<clipPath id="clip0_109_611">
<rect width="32" height="32" fill="white"></rect>
</clipPath>
</defs>
</svg></a></li>
      </ul>
    </nav>
</div>

    
@endsection  
      