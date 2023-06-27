<section id="quote" class="contact">
    <div class="container" >

        <div class="section-title">
            <h2>Career</h2>
            <p>Apply for Attachment</p>
        </div>



        <div class="row mt-2">
            <div class="col-lg-6 col-sm-6 order-1 order-lg-2 mt-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/img/apply.svg" class="img-fluid" alt="">
            </div>
            <div  class="col-sm-6 col-lg-6 mt-5 mt-lg-0">

                <form action=""  class="request" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">First Name</label>
                            <input type="text" name="fname" class="form-control" id="name" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="name">Last Name</label>
                            <input type="text" name="lname" class="form-control" id="name" placeholder="Last Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label for="subject">Mobile Number (<small>ex. 0712XX</small>)</label>
                            <input type="tel" class="form-control" name="tel" id="subject"  pattern="^(0[0-9]{9})$" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <label for="school">Where do you study?</label>
                            <input type="tel" class="form-control" name="campus" id="school" placeholder="College/Campus" required>
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <label for="school">Field of study?</label>
                            <input type="tel" class="form-control" name="course" id="school" placeholder="Course" required>
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <label for="school">Upload Attachment Letter</label>
                            <input type="file" class="form-control" name="letter" id="school"   accept="application/pdf" required>
                            <div><small class="text-info text-bold">Only PDFs are allowed.</small></div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label for="subject">Expected Start Date</label>
                            <input type="date" class="form-control" name="sdate" id="subject" placeholder="Start Date" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label for="subject">Expected End Date</label>
                            <input type="date" class="form-control" name="edate" id="subject" placeholder="Start Date" required>
                        </div>
                    </div>

                    <div class="text-center">

                        <div class="text-justify">
                            <button name="apply"  class="btn btn-info"  type="submit">Apply</button></div>
                        <!--                        <button name="request" class="btn btn-warning" >Request Quote</button>-->
                    </div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->