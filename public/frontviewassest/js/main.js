    window.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        if (window.scrollY > 10) {
            header.classList.add('header-fixed');
        } else {
            header.classList.remove('header-fixed');
        }
    });
    
    $(".testi_slider").slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
        speed: 3000,
        slidesToShow: 3,
        slideswToScroll: 1,
        infinite: true,
        arrows: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

document.addEventListener('DOMContentLoaded', function () {
const subTitles = document.querySelectorAll('.sub-title');

subTitles.forEach(function (el) {
    // Check if it already has a span to avoid double-wrapping
    if (!el.querySelector('span')) {
    const span = document.createElement('span');
    span.innerHTML = el.innerHTML;
    el.innerHTML = '';
    el.appendChild(span);
    }
});
});
