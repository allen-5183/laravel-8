
{{-- 繼承公版 --}}

@extends('layouts/article')

{{-- 用 section 來填之前挖的坑洞 --}}

@section('main')
<h1 class="font-thin text-4xl">文章列表</h1>

{{-- 這裡連接可以寫固定，'/' 目錄位置指: views'，為什麼連到的名稱用 create，因為在 route 中 resource 的寫法，把這些路徑的名稱都定死了，所以新增、修改、刪除，基本上都是照這路線來走，可以用 php artisan route:list | grep articles
POST      article.store
GET|HEAD  articles.create

create 時，是用  GET 處理表單，但它的下一步送出時，會到 store 是用 POST 來處理
--}}
{{-- <a href="/articles/create">新增文章</a> --}}

{{-- 寫連結時，盡量用 name routed 方式來寫，因為爾後改了 name routed，只要改 web.php 之後，全站相關連結都會跟著改變 --}}
<a href="{{ route("articles.create")}}">新增文章</a>

@endsection
