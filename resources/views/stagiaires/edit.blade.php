<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier stagiaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family:'Poppins',sans-serif;
            background: linear-gradient(135deg, #f8fafc, #e9eef5);
            min-height:100vh;
        }
        .form-card{
            border:none;
            border-radius:22px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
        }
        .form-title{
            font-weight:700;
            color:#1f2937;
        }
        .form-control{
            border-radius:14px;
            padding:12px 14px;
        }
        .form-control:focus{
            border-color:#2563eb;
            box-shadow:0 0 0 0.15rem rgba(37,99,235,0.15);
        }
        .btn{
            border-radius:12px;
            font-weight:500;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card form-card">
                <div class="card-body p-4 p-md-5">
                    <h2 class="form-title mb-4">Modifier un stagiaire</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger rounded-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('stagiaires.update', $stagiaire->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" value="{{ old('nom', $stagiaire->nom) }}" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Prénom</label>
                                <input type="text" name="prenom" class="form-control" value="{{ old('prenom', $stagiaire->prenom) }}" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $stagiaire->email) }}" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text" name="telephone" class="form-control" value="{{ old('telephone', $stagiaire->telephone) }}" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Ecole</label>
                                <input type="text" name="ecole" class="form-control" value="{{ old('ecole', $stagiaire->ecole) }}" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Filière</label>
                                <input type="text" name="filiere" class="form-control" value="{{ old('filiere', $stagiaire->filiere) }}" required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Date début</label>
                                <input type="date" name="date_debut" class="form-control" value="{{ old('date_debut', $stagiaire->date_debut) }}" required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Date fin</label>
                                <input type="date" name="date_fin" class="form-control" value="{{ old('date_fin', $stagiaire->date_fin) }}" required>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success px-4">Modifier</button>
                            <a href="{{ route('stagiaires.index') }}" class="btn btn-secondary px-4">Retour</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>