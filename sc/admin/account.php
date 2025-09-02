<?php require_once 'header.php'; ?>

<div id="session-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8">
                <h4>Account</h4>
                <form action="./processing-account" method="post" enctype="multipart/form-data" autocomplete="off" id="profileForm">
                    <?php
                    $sql_data = "SELECT * FROM `tbl_users` WHERE specialId = '" . $_SESSION['usr_specialId'] . "'";
                    $result = $conn->query($sql_data);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $varDate = date('d-M-Y', strtotime($row["dateTime"]));
                    ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="specialId" value="<?php print $_SESSION['usr_specialId']; ?>">
                                    <label id="FormLabel" for="Full Name">Full Name</label>
                                    <input id="profileBox" type="text" value="<?php echo $row["col_fullname"]; ?>" name="txtFullName" placeholder="Full Name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label id="FormLabel" for="Email">Email</label>
                                    <input id="profileBox" type="email" value="<?php echo $row["col_email"]; ?>" name="txtEmail" placeholder="Email">
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                        echo "No records found.";
                    }
                    ?>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Update Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require_once 'footer.php'; ?>