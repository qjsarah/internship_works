<style>
    #gallery_carousel .custom-nav {
    position: absolute;
    top: 38%;
    left: 5%;
    right: 5%;
    z-index: 4;
    }

    #gallery_carousel .custom-nav .owl-prev,
    #gallery_carousel .custom-nav .owl-next {
    position: absolute;
    height: 55px;
    width: 55px;
    border-radius: 50%;
    color: inherit;
    background: #000;
    border: none;
    align-items: center;
    justify-content: center;
    }

    #gallery_carousel .custom-nav .owl-prev {
    left: 0;
    }

    #gallery_carousel .custom-nav .owl-next {
    right: 0;
    }
</style>
<section>
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4 text-blue-600">Gallery</h1>
        <p class="text-lg font-bold">"Our Story in Growth and Impact"</p>
        <p class="text-lg mx-4 md:mx-32 lg:mx-54 mb-4">Explore our gallery to see the journey of our <span class="font-bold">AGARWOOD HIGHLAND VALLY INC.,</span> from seedling cultivation to community impact. These photos show our progress, sustainability efforts, and the people behind our mission.</p>
        <ul class="text-blue-600 text-lg cursor-pointer flex justify-center gap-8 mb-4">
            <li class="hover:underline">All Photos</li>
            <li class="hover:underline">Seedling Stage</li>
            <li class="hover:underline">Farm Activities</li>
            <li class="hover:underline">Community & Farmers</li>
            <li class="hover:underline">Sustainability Efforts</li>
            <li class="hover:underline">Progress Reports</li>
            <li class="hover:underline">Events & Visits</li>
        </ul>
    </div>
    <div id="gallery_carousel"></div>
</section>
<script>
   const galleryCarousel = document.getElementById('gallery_carousel');
galleryCarousel.innerHTML=`
    <div class="owl-carousel owl-theme">
        ${gallery_carousel_content.map(content => `
            <div class="p-2 rounded-lg shadow-lg">
                <img src="${content.imgpath}" alt="${content.imgname}" 
                     class="w-[500px] object-contain">
            </div>
        `).join('')}
    </div>
    <div class="custom-nav flex justify-center gap-4 mt-4"></div>
`;

$(".owl-carousel").owlCarousel({
    items: 3, // show 1 image at a time
    loop: true,
    nav: true,
    margin: -50,
    navText: [
        "<div class='nav-btn'><img src='images/wl-arrow.png' class='w-[30px]'/></div>",
        "<div class='nav-btn'><img src='images/wr-arrow.png' class='w-[30px]'/></div>"
    ],
    navContainer: '#gallery_carousel .custom-nav',
    autoplay: true,
    dots: false,
    autoplayTimeout: 4000,
});

</script>