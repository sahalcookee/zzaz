<!-- carousel  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
           var owl = $('.owl-carousel-2');
                owl.owlCarousel({
                    items:3,
                    loop:true,
                    dots:true,
                    margin:15,
                    autoplay:true,
                    autoplayTimeout:2500,
                    autoplayHoverPause:true,
                    responsive:{
                                0:{
                                    items:1,
                                },
                                575:{
                                    items:2,
                                },
                                1000:{
                                    items:3,
                                }
                            }
                        })
        </script>