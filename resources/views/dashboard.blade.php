<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body{
            font-family:'Poppins',sans-serif;
            background: linear-gradient(135deg, #f8fafc, #e9eef5);
            min-height:100vh;
        }
        .dashboard-title{
            font-weight:700;
            color:#111827;
        }
        .stat-card{
            border:none;
            border-radius:22px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
            overflow:hidden;
            transition:0.3s;
        }
        .stat-card:hover{
            transform: translateY(-5px);
        }
        .stat-value{
            font-size:38px;
            font-weight:700;
        }
        .btn{
            border-radius:12px;
            font-weight:500;
            transition:0.2s;
        }
        .btn:hover{
            transform:scale(1.05);
        }
        .chart-card{
            border:none;
            border-radius:22px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
            background:white;
        }
    </style>
</head>
<body>

<div style="background:#111827;color:white;padding:10px 20px;border-radius:0 0 20px 20px;">
    <strong>Gestion Stagiaires</strong>
</div>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="dashboard-title mb-1">Dashboard</h1>
            <p class="text-muted mb-0">Vue globale des stagiaires</p>
        </div>

        <a href="{{ route('stagiaires.index') }}" class="btn btn-dark px-4">Retour</a>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card stat-card">
                <div class="card-body p-4">
                    <p class="text-muted mb-2">Nombre total des stagiaires</p>
                    <div class="stat-value text-primary">{{ $total }}</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stat-card">
                <div class="card-body p-4">
                    <p class="text-muted mb-2">Full Stack</p>
                    <div class="stat-value text-success">{{ $fullstack }}</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stat-card">
                <div class="card-body p-4">
                    <p class="text-muted mb-2">DEV</p>
                    <div class="stat-value text-warning">{{ $dev }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card chart-card p-4">
        <h4 class="mb-4">Répartition des filières</h4>
        <canvas id="filiereChart"></canvas>
    </div>
</div>

<script>
    const ctx = document.getElementById('filiereChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Full Stack', 'DEV', 'Autres'],
            datasets: [{
                label: 'Nombre de stagiaires',
                data: [{{ $fullstack }}, {{ $dev }}, {{ $autres }}],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0
                }
            }
        }
    });
</script>

</body>
</html>