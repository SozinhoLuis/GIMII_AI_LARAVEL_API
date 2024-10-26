<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Análise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Resultado da Análise</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h5>Sintomas Relatados:</h5>
                            <p class="border p-3 bg-light">{{ $symptoms }}</p>
                        </div>

                        <div class="mb-4">
                            <h5>Análise da IA:</h5>
                            <div class="border p-3 bg-light">
                                {!! nl2br(e($analysis)) !!}
                            </div>
                        </div>

                        <div class="alert alert-warning">
                            <strong>Atenção:</strong> Esta análise é apenas uma sugestão preliminar baseada em IA.
                            Para um diagnóstico preciso, consulte sempre um profissional de saúde qualificado.
                        </div>

                        <div class="text-center">
                            <a href="{{ route('consultation.index') }}" class="btn btn-primary">Nova Consulta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
