<?php require_once 'header_contents.php'; ?>

<div class="container-fluid page-header py-5 mb-5" style="background:#0B3D91;">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white mb-3">Leave a Review</h1>
        <p class="text-white">Your feedback helps us improve our services</p>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="bg-light rounded p-4 p-sm-5">
                <h3 class="text-primary mb-4">We Value Your Feedback</h3>
                <form action="submit-review.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Full Name *</label>
                        <input type="text" name="name" class="form-control" required placeholder="Enter your full name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address *</label>
                        <input type="email" name="email" class="form-control" required placeholder="example@email.com">
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-block">Rating *</label>
                        <div class="star-rating" id="star-rating">
                            <input type="hidden" name="rating" id="rating-value" required>
                            <i class="fas fa-star star" data-value="1"></i>
                            <i class="fas fa-star star" data-value="2"></i>
                            <i class="fas fa-star star" data-value="3"></i>
                            <i class="fas fa-star star" data-value="4"></i>
                            <i class="fas fa-star star" data-value="5"></i>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Your Review *</label>
                        <textarea name="review" class="form-control" rows="5" required placeholder="Write your feedback..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-3">Submit Review</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require_once 'footer_contents.php'; ?>