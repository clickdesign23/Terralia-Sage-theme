import.meta.glob([
  '../images/**',
  '../fonts/**',
]);


const arrowLeft = '<?php echo home_url(); ?>/wp-content/uploads/2025/05/arrow-left.png';
const arrowRight = '<?php echo home_url(); ?>/wp-content/uploads/2025/05/arrow-right.png';

jQuery(document).ready(function ($) {
  $('.program-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    prevArrow: '<button type="button" class="slick-prev"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/05/right-arrow.png" alt="Previous"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/05/left-arrow.png" alt="Next"></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});


/* testimonial slider jquery*/

$(document).ready(function () {
  $('.testimonials').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    prevArrow: '<button type="button" class="slick-prev"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/05/right-arrow.png" alt="Previous"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/05/left-arrow.png" alt="Next"></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});



$(document).ready(function () {
  const horizontalAccordions = $(".accordion.width");

  horizontalAccordions.each((index, element) => {
    const accordion = $(element);
    const collapse = accordion.find(".collapse");
    const bodies = collapse.find(".card-body");

    // Set initial height and width
    accordion.height(accordion.height());
    bodies.width(bodies.eq(0).width());

    // Add collapsed class to headers of non-active items
    collapse.not(".show").each((index, element) => {
      $(element).parent().find("[data-toggle='collapse']").addClass("collapsed");
    });

    // Handle accordion item click
    accordion.find(".card-header").on('click', function () {
      const target = $($(this).data('target'));
      const isShowing = target.hasClass('show');

      if (!isShowing) {
        // Close all other items
        accordion.find('.collapse.show').removeClass('show');
        accordion.find('.card-header').addClass('collapsed');

        // Open clicked item
        target.addClass('show');
        $(this).removeClass('collapsed');
      }
    });
  });


   $('.category-tabs .nav-link').click(function (e) {
      e.preventDefault();
      $('.category-tabs .nav-link').removeClass('active');
      $(this).addClass('active');

      const filter = $(this).data('filter');
      if (filter === 'all') {
        $('.post-item').show();
      } else {
        $('.post-item').hide();
        $('.' + filter).show();
      }
    });

    const itemsPerPage = 6;
    const items = $('.post-item');
    const totalPages = Math.ceil(items.length / itemsPerPage);

    function showPage(page) {
      items.hide();
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      items.slice(start, end).show();

      $('.pagination .page-item').removeClass('active');
      $('.pagination .page-link[data-page="' + page + '"]').parent().addClass('active');
    }

    showPage(1);

    $('.pagination .page-link[data-page]').click(function (e) {
      e.preventDefault();
      const page = parseInt($(this).data('page'));
      showPage(page);
    });
});


document.addEventListener('DOMContentLoaded', function () {
  const accordionButtons = document.querySelectorAll('.accordion-button');

  accordionButtons.forEach(button => {
    button.addEventListener('click', function () {
      // Toggle current item
      const isActive = this.classList.contains('active');
      const content = this.nextElementSibling;

      // Close all items first
      document.querySelectorAll('.accordion-content').forEach(item => {
        item.style.display = 'none';
      });
      document.querySelectorAll('.accordion-button').forEach(btn => {
        btn.classList.remove('active');
      });

      // Open clicked one if it wasn't active
      if (!isActive) {
        content.style.display = 'block';
        this.classList.add('active');
      }
    });
  });
});
document.addEventListener('DOMContentLoaded', function () {
  const accordionButtons = document.querySelectorAll('.accordion_dark_button ');

  accordionButtons.forEach(button => {
    button.addEventListener('click', function () {
      // Toggle current item
      const isActive = this.classList.contains('active');
      const content = this.nextElementSibling;

      // Close all items first
      document.querySelectorAll('.accordion_dark_content').forEach(item => {
        item.style.display = 'none';
      });
      document.querySelectorAll('.accordion_dark_button ').forEach(btn => {
        btn.classList.remove('active');
      });

      // Open clicked one if it wasn't active
      if (!isActive) {
        content.style.display = 'block';
        this.classList.add('active');
      }
    });
  });
});