<div style="margin-top:200px;"></div>



</div>
</div>

<div id="footer-panel">
    <div class="container">
        <div style="color: #000;" id="footer-contents">
            <?php echo date('Y'); ?> All rights reserved. Eagle I Group.
        </div>
    </div>
</div>

<script>
    const fileInput = document.getElementById('file-input');
    const fileNameDisplay = document.getElementById('file-name');

    fileInput.addEventListener('change', function() {
        if (fileInput.files.length > 0) {
            fileNameDisplay.textContent = fileInput.files[0].name;
        } else {
            fileNameDisplay.textContent = 'No file chosen';
        }
    });


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

<script src="../assets/js/bootstrap-min.js" type="text/javascript" crossorigin="anonymous"></script>
<script src="../assets/js/popper.min.js" type="text/javascript" crossorigin="anonymous"></script>
<link href="../assets/css/bootstrap.bundle.min.js" rel="stylesheet" type="text/javascript" crossorigin="anonymous">
</body>

</html>