<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container py-3">
        <div class="row">
            <div class="col-3">
                <livewire:partials.navigation />
            </div>
            <div class="col-9">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>