<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tit5le>Gestion des stagiaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family:'Poppins',sans-serif;
            background: linear-gradient(135deg, #f8fafc, #e9eef5);
            min-height:100vh;
        }
        .page-title{
            font-weight:700;
            color:#1f2937;
        }
        .top-bar{
            background:#ffffff;
            border-radius:20px;
            padding:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
        }
        .card-pro{
            border:none;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
            overflow:hidden;
            transition: all 0.3s ease;
        }
        .card-pro:hover{
            transform: translateY(-5px);
        }
        .table thead th{
            background:#111827 !important;
            color:white;
            border:none;
            font-weight:600;
            font-size:14px;
            white-space:nowrap;
        }
        .table td{
            vertical-align:middle;
            font-size:14px;
        }
        .table tbody tr:hover{
            background:#f8fafc;
            transition:0.2s;
        }
        .btn{
            border-radius:12px;
            font-weight:500;
            transition:0.2s;
        }
        .btn:hover{
            transform: scale(1.05);
        }
        .btn-primary{
            background:#2563eb;
            border:none;
        }
        .btn-primary:hover{
            background:#1d4ed8;
        }
        .btn-dark{
            border:none;
        }
        .badge-filiere{
            background:#dbeafe;
            color:#1d4ed8;
            padding:8px 12px;
            border-radius:999px;
            font-weight:600;
            font-size:12px;
        }
        .search-box{
            border-radius:14px;
            padding:12px 16px;
            border:1px solid #d1d5db;
            box-shadow:none;
        }
        .search-box:focus{
            border-color:#2563eb;
            box-shadow:0 0 0 0.15rem rgba(37,99,235,0.15);
        }
        .section-space{
            margin-top:30px;
        }
    </style>
</head>
<body>

<div style="background:#111827;color:white;padding:10px 20px;border-radius:0 0 20px 20px;">
    <strong>Gestion Stagiaires</strong>
</div>

<div class="container py-5">

    <div class="top-bar mb-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
            <div>
                <h2 class="page-title mb-1">Gestion des stagiaires</h2>
                <p class="text-muted mb-0">Administration moderne des stagiaires</p>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('dashboard') }}" class="btn btn-dark px-4">Dashboard</a>
                <a href="{{ route('stagiaires.create') }}" class="btn btn-primary px-4">+ Ajouter</a>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm rounded-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-pro p-4 mb-4">
        <form method="GET" action="{{ route('stagiaires.index') }}">
            <input
                type="text"
                name="search"
                class="form-control search-box"
                placeholder="🔍 Rechercher par nom, prénom, email, école ou filière..."
                value="{{ request('search') }}"
            >
        </form>
    </div>

    <p class="text-muted mb-3">
        {{ count($stagiaires) }} stagiaire(s) trouvé(s)
    </p>

    <div class="card-pro section-space">
        <div class="table-responsive p-3">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Ecole</th>
                        <th>Filière</th>
                        <th>Date début</th>
                        <th>Date fin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($stagiaires as $stagiaire)
                        <tr>
                            <td>{{ $stagiaire->nom }}</td>
                            <td>{{ $stagiaire->prenom }}</td>
                            <td>{{ $stagiaire->email }}</td>
                            <td>{{ $stagiaire->telephone }}</td>
                            <td>{{ $stagiaire->ecole }}</td>
                            <td>
                                <span class="badge-filiere">{{ $stagiaire->filiere }}</span>
                            </td>
                            <td>{{ $stagiaire->date_debut }}</td>
                            <td>{{ $stagiaire->date_fin }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('stagiaires.edit', $stagiaire->id) }}" class="btn btn-warning btn-sm px-3">
                                        Edit
                                    </a>

                                    <form action="{{ route('stagiaires.destroy', $stagiaire->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Supprimer ce stagiaire ?')" class="btn btn-danger btn-sm px-3">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center py-4 text-muted">
                                Aucun stagiaire trouvé
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>