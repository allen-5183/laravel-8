
{{-- 繼承公版 --}}

@extends('layouts/article')
@section('main')
<h1 class="font-thin text-4xl">文章列表 > 新增文章</h1>

{{-- <form action="/articles/store" method="post"> --}}
<form action="{{ route('articles.store')}}" method="post">
   <div class="field my-1">
       {{-- 在後端關心的是欄位的名稱，class 與 id 是前端關心的部分 --}}
       <label for="">標題</label>
       <input type="text" name="title" class="border border-gray-300 p-2">
   </div>
   <div class="field my-1">
       <label for="">內文</label>
       <textarea name="content" cols="30" rows="10" class="border border-gray-300 p-2"></textarea>
   </div>

    <div class="action">
        <button type="submit" class="px-3 py-1 rounded bg-gray-100 hover:bg-gray-500">新增文章</button>
    </div>

</form>


@endsection
