@extends('layouts.app')
@section('title', 'Page Title')

@section("content")
    <div>Index</div>
    <form>
        <label for="name">Name:</label>
        <input type="text" name="name"><br>
        <label for="limit">Elements per Page:</label>
        <select name="limit">
            <option value="10">10</option>
            <option value="15">15 (default)</option>
            <option value="20">20</option>
        </select>
    </form>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if($pages["first"] !== $pages["current"])
                <li class="page-item"><a class="page-link" href="{{route("index", ["page" => $pages["first"]], false)}}">{{ $pages["first"] }}</a></li>
            @endif
            <li class="page-item"><a class="page-link">...</a></li>
            <li class="page-item"><a class="page-link" href="{{route("index", ["page" => $pages["previous"]], false)}}">{{ $pages["previous"] }}</a></li>
            <li class="page-item"><a class="page-link active" href="{{route("index", ["page" => $pages["current"]], false)}}">{{ $pages["current"] }}</a></li>
            <li class="page-item"><a class="page-link" href="{{route("index", ["page" => $pages["next"]], false)}}">{{ $pages["next"] }}</a></li>
            <li class="page-item"><a class="page-link">...</a></li>
            <li class="page-item"><a class="page-link" href="{{route("index", ["page" => $pages["last"]], false)}}">{{ $pages["last"] }}</a></li>
        </ul>
    </nav>
    <div class="p-4">
        @foreach($data as $element)
            <div class="my-2 border border-black overflow-hidden p-4">{{ json_encode($element) }}</div>
        @endforeach
    </div>
@endsection
