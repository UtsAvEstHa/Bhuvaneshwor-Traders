<script src="owl/jquery.min.js"></script>
<script src="owl/owl.carousel.min.js"></script>
<script>

$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    margin:0,
    navText: [ '', '' ],
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>