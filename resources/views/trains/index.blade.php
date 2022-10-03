@section('main-content')
<div>
    <ul>
        @foreach ($trains as $train)
            <li>
               {{ $train->agency }}
            </li>
            <li>
                {{ $train->departure_station }}
             </li>
             <li>
                {{ $train->arrival_station }}
             </li>
             <li>
                {{ $train->departure_time }}
             </li>
             <li>
                {{ $train->arrival_time }}
             </li>
             <li>
                {{ $train->train_code }}
             </li>
             <li>
                {{ $train->carriage_number }}
             </li>
             <li>
                {{ $train->punctual }}
             </li>
             <li>
                {{ $train->deleted }}
             </li>
        @endforeach
    </ul>
</div>
@endsection