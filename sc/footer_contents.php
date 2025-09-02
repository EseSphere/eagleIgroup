<!-- Quote Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="./img/eagle-group.jpeg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                    <h1 class="display-5 mb-5">Get Your Free Quote Today</h1>
                    <p class="mb-4 pb-2">
                        At Eagle I Security and Eagle I Cleaner, we’re committed to delivering top-tier security and professional cleaning services tailored to your needs. Whether it’s protecting your home or maintaining a spotless business environment, trust us to keep you safe and clean. Request your free, no-obligation quote now and experience excellence in safety and cleanliness.
                    </p>
                    <form method="post" action="./processing-quote" enctype="multipart/form-data" autocomplete="off">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" required name="txtName" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" required name="txtEmail" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" required name="txtPhone" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select name="txtServices" required class="form-select border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="Security">Security</option>
                                    <option value="Cleaning">Cleaning</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea name="txtMessage" required class="form-control border-0" placeholder="Special Note"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Get A Free Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-5">What Our Clients Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                <p class="fs-5">“Eagle I Security provides unmatched peace of mind. Their professional team has made my home safer without any hassle. Highly recommend their services!”</p>
                <h4>Sarah M.</h4>
                <span class="text-primary">Homeowner</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                <p class="fs-5">“The cleaning team from Eagle I Cleaner is thorough and reliable. Our office has never looked better, and their attention to detail is impressive.”</p>
                <h4>James T.</h4>
                <span class="text-primary">Office Manager</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                <p class="fs-5">“A trusted partner for both security and cleaning. Eagle I’s professionalism and dedication truly set them apart.”</p>
                <h4>Linda K.</h4>
                <span class="text-primary">Business Owner</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>224 Aldersley Road, Wolverhampton, WV6 9NB</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+44 (0) 731 149 8858</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@eagleisecurity.co.uk</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Services</h5>
                <a class="btn btn-link" href="./security">Business Security</a>
                <a class="btn btn-link" href="./security">Fire Detection</a>
                <a class="btn btn-link" href="./security">Alarm Systems</a>
                <a class="btn btn-link" href="./security">CCTV & Video</a>
                <a class="btn btn-link" href="./cleaning">Cleaning Services</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="./about-us">About Us</a>
                <a class="btn btn-link" href="./contact">Contact Us</a>
                <a class="btn btn-link" href="./services">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Subscribe to our news letter</p>
                <div class="position-relative w-100">
                    <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid py-4" style="background: #000000;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Eagle I Group</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                Designed By <a class="border-bottom" href="https://esesphere.com">Ese Sphere</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>