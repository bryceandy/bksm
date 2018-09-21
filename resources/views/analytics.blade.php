@extends('template.app')

@section('title')
    BK Sports Massage | Analytics
@endsection

@section('content')

<h1 class="text-center">Visitors and Page Views</h1>

    <p>
        @foreach($analyticsData as $data)

            <ul class="list-group">
                <li class="list-group-item">{{$data['date']}}</li>
                <li class="list-group-item">{{$data['visitors']}}</li>
                <li class="list-group-item">{{$data['pageViews']}}</li>
            </ul>
            <hr>
        @endforeach
    </p>

@endsection
