<?php require_once 'header.php'; ?>

<div id="session-container">
    <h3>Blog</h3>
</div>

<a href="./create-blog" class="text-decoration-none text-end btn btn-primary btn-block flex justify-right items-end">Create Blog</a>

<div class="row text-decoration-none mt-3 mb-3">

    <?php
    $sql = "SELECT * FROM articles ORDER BY userId DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $varDateUploaded = $row["dateTime"];
            $formattedDate = date("F j, Y", strtotime($varDateUploaded));
    ?>
            <div class="col-md-6 col-xl-6 col-sm-6 col-lg-6">
                <a class="text-decoration-none" href="../view-blog?xu874Iu=<?= htmlspecialchars($row["xu874Iu"]); ?>">
                    <div class="card mb-3">
                        <div class="row g-0" style="height: 230px; color: black;">
                            <div class="col-md-4">
                                <img src="./<?= htmlspecialchars($row["image_path"]); ?>" class="img-fluid rounded-start w-100 h-100" alt="Blog pictures">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($row["title"]); ?></h5>
                                    <hr>
                                    <p style="width:100%; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;" class="card-text">
                                        <?= htmlspecialchars($row["article"]); ?>
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated <?= $formattedDate; ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>

<?php require_once 'footer.php'; ?>