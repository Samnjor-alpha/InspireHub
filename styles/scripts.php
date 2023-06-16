<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $(".customer-logos").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    });
    function setposrequest() {
        var textarea = document.getElementById("message");
        textarea.value = "Hello,   I'm interested in scheduling a demo of your Point of Sale (POS) system." +
            " I would like to see how it can benefit my business and streamline our operations.Could you please provide me with more information about the features, pricing, and availability of the demo?Thank you"
    }
    function setHRrequest() {
        var textarea = document.getElementById("message");
        textarea.value = "Hello,I" +
            "'m reaching out to request a demo of your HR Management System." +
            " As an HR professional, Im interested in exploring how your system can streamline our HR processes and enhance our efficiency." +
            "Could you please provide me with more information about the features, modules, and capabilities of your HR Management System? Best regards"
    }
    function setSMSrequest(){
        var textarea = document.getElementById("message");
        textarea.value = "Hello,I am interested in scheduling a demo of your Bulky SMS system." +
            " I would like to explore how this system can benefit our organization in terms of efficient and effective communication " +
            "with our customers."
    }
</script>