<?php require_once 'header.php'; ?>

<div id="session-container">
    <div class="container">
        <h3>Create Blog</h3>
        <hr>
        <div class="row">
            <div class="col-md-5 col-sm-5 col-lg-5 col-xl-5">
                <form action="./processing-blog" method="post" enctype="multipart/form-data" autocomplete="off" id="profileForm">
                    <div class="form-group mb-4">
                        <input type="hidden" name="blogerName" value="<?php print $_SESSION['usr_username']; ?>">
                        <input type="hidden" name="specialId" value="<?php print $_SESSION['usr_specialId']; ?>">
                        <input form="profileForm" id="profileBox" type="text" name="txtTitle" placeholder="Title" required class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <textarea name="txtArticle" class="form-control" minlength="200" style="resize: none;" rows="5" id=""></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <input type="file" class="form-control" name="fileImage" id="fileImage" required>
                    </div>
                    <div class="form-group mb-4">
                        <button onclick="location.reload()" id="link-decor-black" type="button" class="btn btn-danger btn-block text-white">Clears</button>
                        <button form="profileForm" type="submit" class="btn btn-primary btn-block">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require_once 'footer.php'; ?>