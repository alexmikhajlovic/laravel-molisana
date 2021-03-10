@extends ('layouts.app')

@section('title', 'I prodotti | La Molisana')

@section('content')
    
    <div class="products">

        @foreach($contents as $content)
            <div class="product">

                <img src="{{$content['src']}}" class="cover" alt="{{$content['titolo']}}" title="{{$content['titolo']}}">

                <div class="overlay">
                    <a href="#" target="_blank" rel="noopener noreferrer">{{$content['titolo']}}</a>
                </div>

            </div>
        @endforeach


    </div>

@endsection