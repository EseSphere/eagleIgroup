<?php include_once('header_contents.php'); ?>
<style>
    #appForm {
        height: 55px;
    }
</style>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Join Cleaning Team</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Jobs</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row service-row">
            <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item border h-100 p-5">
                    <h2>Employment Application Form</h2>
                    <p>Complete the form below to apply for a position on our cleaning team. Be sure to attach your CV.</p>
                    <p>We value professionalism, integrity, and dedication. Qualified candidates will be contacted for the next stage of the recruitment process.</p>
                    <hr>
                    <form action="./submit_cleaning_application" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 mt-3">
                                <div class="form-group">
                                    <input type="text" id="appForm" name="full_name" required class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 mt-3">
                                <div class="form-group">
                                    <input type="email" id="appForm" name="email" required class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 mt-3">
                                <div class="form-group">
                                    <input type="text" id="appForm" name="phone" required class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 mt-3">
                                <div class="form-group">
                                    <input type="text" id="appForm" name="position" required class="form-control" placeholder="Position Applied For">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 mt-3">
                                <div class="form-group">
                                    <input type="file" id="appForm" name="cv" accept=".pdf,.doc,.docx" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mt-3">
                                <div class="form-group">
                                    <input type="submit" id="appForm" class="btn btn-primary w-auto" value="Submit Application">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <img src="./img/pexels-liliana-drew-9462345.jpg" style="width: 100%; height:100%;" alt="">
            </div>
        </div>
    </div>
</div>
<!-- jobs End -->


<?php include_once('footer_contents.php'); ?>