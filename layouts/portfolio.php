<style>
    .port {
        position: relative;
        width: 50%;
    }

    .image {
        display: block;
        width: 200%;
        height: 100%;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 200%;
        opacity: 0;
        transition: .5s ease;
        background-color: transparent;
        backdrop-filter: blur(10px);
    }

    .port:hover .overlay {
        opacity: 1;
    }

    .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>
<section id="portfolio" class="portfolio">
    <div class="container" >

        <div class="section-title">
            <h2>Our Works</h2>
            <p>Check our Products</p>
        </div>

        <div class="row"  data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-trans">Transport</li>
                    <li data-filter=".filter-agri">Agriculture</li>
                    <li data-filter=".filter-real">Real Estate</li>
                </ul>
            </div>
        </div>



        <div class="row portfolio-container"  data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-trans">
                <div class="port">
                    <img src="product/images/naulii.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p class="text-white">NAULI</p>
                            <a href="product/nauli.html" target="_blank" class="get-started-btn">View</a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-agri">
                <div class="port">
                    <img src="product/images/fresherp.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p class="text-white">FreshErp</p>
                            <a href="https://fresherp.co.ke/" target="_blank" class="get-started-btn">View</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-real">
                <div class="port">
                    <img src="product/images/kodi.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p class="text-white">Kodi Books</p>
                            <a href="product/kodi.html" target="_blank" class="get-started-btn">View</a></div>
                    </div>
                </div>
            </div>








        </div>




    </div>



    <div class="container" >

        <div class="row portfolio-container"  data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-trans">
                <div class="port">
                    <img src="product/images/pos.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p class="text-white">POS</p>
                            <a href="#quote" class="get-started-btn scrollto" onclick="setposrequest()">Request Demo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-trans">
                <div class="port">
                    <img src="product/images/hr.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p class="text-white">HRIS</p>
                            <a href="#quote" class="get-started-btn scrollto" onclick="setHRrequest()">Request Demo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-trans">
                <div class="port">
                    <img src="product/images/bsms.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p class="text-white">Bulky SMS</p>
                            <a href="#quote" class="get-started-btn scrollto" onclick="setSMSrequest()">Request Demo</a>
                        </div>
                    </div>
                </div>
            </div>






        </div>




    </div>

</section><!-- End Portfolio Section -->