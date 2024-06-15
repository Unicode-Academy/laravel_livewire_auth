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
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="/" wire:navigate>Trang chủ</a></li>
                    <li class="nav-item"><span class="nav-link">Chào bạn: {{auth()->user()->name}}</span></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('account')}}" wire:navigate>Tài khoản</a></li>
                    <li class="nav-item">
                        <livewire:auth.logout />
                    </li>
                </ul>
            </div>
            <div class="col-9">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>