<?php require_once 'header.php'; ?>

<div id="session-container">
    <h3>Dashboard</h3>
</div>

<div class="row text-white">
    <div class="col-md-3 col-sm-3 col-xl-3 col-lg-3">
        <div class="card bg-primary mb-3">
            <div class="card-header">Blog</div>
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                    $sql = "SELECT COUNT(*) AS total FROM articles";
                    $result = $conn->query($sql);
                    if ($result) {
                        $row = $result->fetch_assoc();
                        echo "Articles: " . $row['total'];
                    } else {
                        echo "Error: " . $conn->error;
                    }
                    ?>
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xl-3 col-lg-3">
        <div class="card bg-danger mb-3">
            <div class="card-header">Quote</div>
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                    $sql = "SELECT COUNT(*) AS total FROM quote";
                    $result = $conn->query($sql);
                    if ($result) {
                        $row = $result->fetch_assoc();
                        echo "Quotes: " . $row['total'];
                    } else {
                        echo "Error: " . $conn->error;
                    }
                    ?>
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xl-3 col-lg-3">
        <div class="card bg-info mb-3">
            <div class="card-header">Contact</div>
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                    $sql = "SELECT COUNT(*) AS total FROM contact_messages";
                    $result = $conn->query($sql);
                    if ($result) {
                        $row = $result->fetch_assoc();
                        echo "Contacts: " . $row['total'];
                    } else {
                        echo "Error: " . $conn->error;
                    }
                    ?>
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xl-3 col-lg-3">
        <div class="card bg-success mb-3">
            <div class="card-header">Applications</div>
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                    $sql = "SELECT COUNT(*) AS total FROM security_job_app";
                    $result = $conn->query($sql);
                    if ($result) {
                        $row = $result->fetch_assoc();
                        echo "Application: " . $row['total'];
                    } else {
                        echo "Error: " . $conn->error;
                    }
                    ?>
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 mt-5">
        <div class="chart-container">
            <canvas id="lineChart"></canvas>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 mt-5">
        <div class="chart-container">
            <canvas id="barChart"></canvas>
        </div>
    </div>
</div>


<script>
    // Line Chart
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    const lineChart = new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Signups',
                data: [120, 150, 180, 220, 170, 250],
                fill: true,
                borderColor: '#4f46e5',
                backgroundColor: 'rgba(79, 70, 229, 0.1)',
                tension: 0.4,
                pointRadius: 5,
                pointBackgroundColor: '#4f46e5',
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                }
            }
        }
    });

    // Bar Chart
    const barCtx = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue ($)',
                data: [4000, 3200, 5000, 4500, 5200, 6100],
                backgroundColor: '#10b981',
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<?php require_once 'footer.php'; ?>