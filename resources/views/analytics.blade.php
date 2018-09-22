@extends('template.app')

@section('title')
    BK Sports Massage | Analytics
@endsection

@section('content')

<h1 class="text-center" style="padding-top: 5vh;color: #824CA7;">Visitors and Page Views</h1>


    @foreach($analyticsData as $data)

        <ul class="list-group">
            <li class="list-group-item" style="color: #D50B53;">{{$data['date']}}</li>
            <li class="list-group-item" style="color: #A882C1;">{{$data['visitors']}}</li>
            <li class="list-group-item" style="color: #B9C406;">{{$data['pageViews']}}</li>
        </ul>
        <hr>
    @endforeach

@endsection
