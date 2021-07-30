
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- 引入 css，這裡不建議用外部 cdn 方式，使用經過打包過後的 css, 在 public/css/app.js 裡面 --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
{{-- 給一對 `<main></main>`，在裡面用 @yield 挖一個洞坑叫做 `main` --}}

<main class="m-4">
    @yield('main')
</main>
    {{-- 引入 js，這裡不建議用外部 cdn 方式，使用經過打包過後的 js, 在 public/js/app.js 裡面 --}}
<script src="{{ asset('js/app.js') }}" />
</body>
</html>
