<?php include_once('header_contents.php'); ?>


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Blog</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Latest News Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-5">Latest News</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Previoud News</li>
                    <li class="mx-2" data-filter=".second">Current News</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">

            <?php
            // SQL SELECT query
            include_once('db_connect.php');
            $sql = "SELECT * FROM articles ORDER BY `userId` DESC LIMIT 6";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-inner">
                            <img style="height: 260px;" class="img-fluid w-100" src="./admin/<?= htmlspecialchars($row["image_path"]); ?>" alt="">
                            <div style="height: 130px;" class="text-center p-4">
                                <p class="text-primary mb-2"><?= htmlspecialchars($row["title"]); ?></p>
                                <h5 style="width:100%; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;" class="lh-base mb-0"><?= htmlspecialchars($row["article"]); ?></h5>
                            </div>
                            <div class="portfolio-text text-center bg-white p-4">
                                <p class="text-primary mb-2"><?= htmlspecialchars($row["title"]); ?></p>
                                <h5 style="width:100%; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;" class="lh-base mb-3"><?= htmlspecialchars($row["article"]); ?></h5>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href="./admin/<?= htmlspecialchars($row["image_path"]); ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href="./view-blog?xu874Iu=<?= htmlspecialchars($row["xu874Iu"]); ?>"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
            ?>

        </div>
    </div>
</div>
<!-- Latest News End -->


<?php include_once('footer_contents.php'); ?>