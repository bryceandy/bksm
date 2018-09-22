@extends('template.app')

@section('title')
    BK Sports Massage | Analytics
@endsection

@section('content')

<h1 class="text-center" style="padding-top: 5vh;color: #824CA7;">Visitors and Page Views</h1>


    @foreach($analyticsData as $data)

        <ul class="list-group w-75" style="margin-left: 10vw;">
            <li class="list-group-item" style="color: #D50B53;">Day - {{$data['date']}}</li>
            <li class="list-group-item" style="color: #A882C1;">Visitors - {{$data['visitors']}}</li>
            <li class="list-group-item" style="color: #B9C406;">Page Views - {{$data['pageViews']}}</li>
            <li class="list-group-item">Page Title - {{$data['pageTitle']}}</li>
        </ul>
    @endforeach

@endsection
