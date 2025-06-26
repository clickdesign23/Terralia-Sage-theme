{{-- 
  Template Name: Contact page
--}}



@extends('layouts.app')

@section('content')
 
<div class="contact-us-sec">
 <div class="container-fluid">
  <div class="row">
    <!-- Left section --> 
     
    <div class="col-lg-6 space-between">
        <div class="top-contact-sec">
          <span class="taglines">Nous contacter</span>
          <h1 class="global-heading">Contacter<br>l’agence de Metz</h1>
          <p>Aliquam volutpat magna pellentesque mattis nullam. Dolor enim tempus morbi tortor consectetur tellus velit eget velit. Laoreet mauris tortor gravida et ac proin at lobortis sollicitudin.</p>
        </div>        

        <div class="bottom-contact-sec">
          <div class="row mb-4">
            <div class="col-md-3 text-muted label">ADRESSE</div>
            <div class="col-md-9 value">
              <div>21, rue de Sarre</div>
              <div>57070 Metz</div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-md-3 text-muted label">HORAIRES</div>
            <div class="col-md-9 value">
              <div>du lundi au vendredi</div>
              <div>de 9h à 12h et de 14h à 18h</div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-md-3 text-muted label">TÉLÉPHONE</div>
            <div class="col-md-9 value fw-bold">
              03 87 500 300 <span style="font-weight: normal;">↘</span>
            </div>
          </div>
      </div>
    </div>

    <!-- Right section -->
    <div class="col-lg-6">
      <div class="form-section">
        <h3>Envoyer un message</h3>
        <form>
          <div class="custom-input">
            <label>Prénom</label>
            <input type="text" value="Jean">
          </div>
          <div class="custom-input">
            <label>Nom</label>
            <input type="text" value="Michel">
          </div>
          <div class="custom-input">
            <label>Mail</label>
            <input type="email" placeholder="exemple@mail.fr">
          </div>
          <div class="custom-input">
            <label>Téléphone</label>
            <input type="tel" placeholder="00 00 00 00 00">
          </div>
          <div class="custom-input custom-input-textarea">
            <label>Message</label>
            <textarea placeholder="Bonjour…"></textarea>
          </div>
          <p>
            Nam rutrum consectetur feugiat donec non mauris tellus odio. Massa at amet id arcu. Cursus et lorem fermentum augue amet. Eget magna aenean tincidunt sed nunc justo nisl dapibus. Ipsum ipsum aliquam dignissim purus. Pour en savoir plus, consultez la page Confidentialité. <a href="#">Confidentialité</a>
          </p>
          <button type="submit" class="btn btn-send">Envoyer le message</button>
        </form>
    </div>
   </div>
  </div>
</div>
</div>

<div class="twp-col-sc">
  <div class="container py-5">
  <!-- Section 1 -->
  <div class="row align-items-center section-block">
    <div class="col-md-6">
      <div class="position-relative">
        <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/fatyne.jpg" class="img-fluid person-img" alt="Fatyn">
        <div class="person-caption">
          <h4> Fatyne SDIRI </h4>          
          <p>Responsable parc neuf</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
      <h3 class="fw-bold">Vous avez un projet de construction de maison ou d'achat d'un appartement neuf ?</h3>
      <p>
        Maecenas dictum sit aenean in integer eu non. Placaret ornare nunc nunc turpis id. Orci mauris amet amet nisi vitae convallis.
        Et egestas nisl laoreet diam et faucibus non.
      </p>
      <a href="#" class="btn btn-main me-3">
        Trouver votre terrain 
      </a>
    </div>
  </div>

  <!-- Section 2 -->
  <div class="row align-items-center flex-md-row-reverse section-block">
    <div class="col-md-6">
      <div class="position-relative">
        <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/jean.jpg" class="img-fluid person-img" alt="Jean-Paul">
        <div class="person-caption">
          <h4> Jean-Paul SABATIE </h4>
          <p>Responsable parc neuf</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
      <h3 class="fw-bold">Vous avez un projet d'achat d'un appartement neuf ?</h3>
      <p>
        Pulvinar iaculis diam ultrices accumsan orci. Etiam sit vulputate diam sit nibh gravida vel mollis.
        Etiam massa lobortis velit elementum tortor senectus augue posuere sed.
      </p>
      <a href="#" class="btn btn-main me-3">
        Trouver votre terrain
      </a>
    </div>
  </div>
</div>


@endsection