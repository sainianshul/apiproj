<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advanced Artisan Command Runner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .command-buttons button {
            margin: 5px;
        }
        footer {
            margin-top: 100px;
            padding: 20px 0;
            background-color: #f8f9fa;
            text-align: center;
        }
    </style>
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4 text-center">🛠 Laravel Artisan Command Runner</h2>

    <form method="POST" action="/artisan-runner">
        @csrf

        <div class="mb-3">
            <label for="token" class="form-label">Admin Token</label>
            <input type="password" name="token" id="token" class="form-control" placeholder="Enter admin token" required>
        </div>

        <div class="mb-3">
            <label for="command" class="form-label">Artisan Command</label>
            <input type="text" id="command" name="command" class="form-control" placeholder="e.g. migrate or config:cache" required value="{{ $command ?? '' }}">
        </div>

        <div class="mb-4">
            <button type="submit" class="btn btn-primary">Run Command</button>
        </div>

        <div class="mb-4">
            <h5>Quick Commands:</h5>
            <div class="command-buttons">
                @php
                    $commands = [
                        'migrate', 'migrate:fresh', 'migrate:rollback', 'db:seed',
                        'route:list', 'view:clear', 'cache:clear', 'config:cache',
                        'config:clear', 'route:cache', 'route:clear', 'optimize:clear',
                        'key:generate', 'queue:restart', 'storage:link', 'make:controller ExampleController',
                        'make:model Example', 'make:migration create_examples_table',
                        'make:seeder ExampleSeeder', 'make:middleware ExampleMiddleware',
                        'make:request ExampleRequest', 'make:command ExampleCommand',
                        'make:resource ExampleResource', 'event:list', 'schedule:run'
                    ];
                @endphp
                @foreach ($commands as $cmd)
                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="document.getElementById('command').value = '{{ $cmd }}'">{{ $cmd }}</button>
                @endforeach
            </div>
        </div>
    </form>

    @isset($output)
        <div class="mt-4">
            <h5>Output:</h5>
            <pre class="bg-dark text-white p-3 rounded">{{ $output }}</pre>
        </div>
    @endisset
</div>

<footer>
    <div class="container">
        <p class="mb-0">&copy; {{ date('Y') }} Artisan Dashboard by Anshul. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
