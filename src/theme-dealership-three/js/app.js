// Latest Vehicles Slider
var swiper = new Swiper(".latestVehicles", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    loopAdditionalSlides: 2,
    speed: 1200,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    breakpoints: {
        1024: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1330: {
            slidesPerView: 2,
            spaceBetween: 32,
        },
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
});

// Our Client Slider
const clientSwiper = new Swiper(".ourClient", {
    slidesPerView: 1,
    spaceBetween: 24,
    speed: 1200,
    pagination: {
        el: ".pagination",
        clickable: true,
        renderBullet: function (index, className) {
            // pagination images (mocha / client thumb)
            const thumbs = [
                "../images/client-1.jpg",
                "../images/client-2.jpg",
                "../images/client-3.jpg",
                "../images/client-4.jpg",
                "../images/client-5.jpg",
            ];

            return `
                <span class="${className} relative" style="z-index:${thumbs.length - index};">
                    <img src="${thumbs[index]}" class="relative" alt="img"/>
                </span>
            `;
        },
    },

    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
});

    // Calculator section range input js 
    function updateRangeFill(slid) {
        const value = slid.value;
        slid.style.background = `linear-gradient(to right, rgb(71, 91, 173) ${value}%, rgba(71, 91, 173, 0.1) ${value}%)`;
    }
    document.querySelectorAll('.rangeSlider').forEach(slid => {
        updateRangeFill(slid); // page load color set
        slid.addEventListener('input', () => updateRangeFill(slid)); // slide update
    });


    // Product detasil page product gallry banner slider
    var swiper = new Swiper(".gallryPagination", {
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".productGallry", {
        spaceBetween: 10,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        thumbs: {
            swiper: swiper,
        },
    });

    var swiper = new Swiper(".popupGallryPagination", {
        slidesPerView: 4,
        spaceBetween: 10,
        freeMode: true,
        speed: 600,
        watchSlidesProgress: true,
        breakpoints: {
            480: {
                slidesPerView: 5,
                spaceBetween: 14,
            },
            768: {
                slidesPerView: 6,
                spaceBetween: 14,
            },
            1024: {
                slidesPerView: 8,
                spaceBetween: 16,
            },
            1440: {
                slidesPerView: 10,
                spaceBetween: 20,
            },
        },
        navigation: {
            nextEl: ".paginationPopup-button-next",
            prevEl: ".paginationPopup-button-prev",
        },
    });
    var swiper2 = new Swiper(".productGallryPopup", {
        spaceBetween: 10,
        speed: 1200,
        navigation: {
            nextEl: ".gallryPopup-button-next",
            prevEl: ".gallryPopup-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });


