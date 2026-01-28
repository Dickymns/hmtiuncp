<?= $this->include('admin/layouts/header') ?>

<style>
    .stat-card {
        transition: all 0.3s ease-in-out;
        cursor: pointer;
        border-radius: 15px;
    }

    /* Efek saat kursor diarahkan ke kartu */
    .stat-card:hover {
        transform: translateY(-10px); /* Bergerak ke atas 10px */
        shadow: 0 1rem 3rem rgba(0,0,0,.175) !important; /* Bayangan lebih dalam */
        box-shadow: 0 10px 20px rgba(0,0,0,0.12), 0 4px 8px rgba(0,0,0,0.06);
    }

    /* Efek transisi pada ikon di dalam kartu */
    .stat-card:hover .rounded-circle {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }
</style>

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">Dashboard Admin</h1>
        <div class="text-muted small">
            <i class="fas fa-calendar-alt"></i> <?= date('d M Y') ?>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2 stat-card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 0.8rem;">ARTIKEL</div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800">12</div>
                        </div>
                        <div class="col-auto">
                            <div class="bg-primary text-white p-3 rounded-circle shadow">
                                <i class="fas fa-newspaper fa-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2 stat-card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size: 0.8rem;">PROKER</div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800">5</div>
                        </div>
                        <div class="col-auto">
                            <div class="bg-success text-white p-3 rounded-circle shadow">
                                <i class="fas fa-tasks fa-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2 stat-card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1" style="font-size: 0.8rem;">DOKUMEN</div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800">8</div>
                        </div>
                        <div class="col-auto">
                            <div class="bg-info text-white p-3 rounded-circle shadow">
                                <i class="fas fa-file-alt fa-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2 stat-card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-size: 0.8rem;">SARAN</div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800">20</div>
                        </div>
                        <div class="col-auto">
                            <div class="bg-warning text-white p-3 rounded-circle shadow">
                                <i class="fas fa-comments fa-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm mb-4" style="border-radius: 15px;">
                <div class="card-header bg-white py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Grafik Konten Terupload</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: 300px;">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul"],
            datasets: [{
                label: "Jumlah Konten",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                data: [0, 10, 5, 15, 10, 20, 15], 
            }],
        },
        options: {
            maintainAspectRatio: false,
            scales: { y: { beginAtZero: true } }
        }
    });
</script>

<?= $this->include('admin/layouts/footer') ?>