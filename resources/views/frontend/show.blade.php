@extends('frontend.layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m8">
                    <div class="single-title">
                        <h4 class="single-title">{{ $property->name }}</h4>
                    </div>

                    <div>
                        <span class="btn btn-small disabled b-r-20">Bedroom: {{ $property->num_bedroom}} </span>
                        <span class="btn btn-small disabled b-r-20">Bathroom: {{ $property->num_bathroom}} </span>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div>
                        <h4 class="left">${{ $property->price }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col s12 m8">
                        <div class="single-image">
                            @if(file_exists( public_path().'/images/'.$property->image ))
                                <img src="{{ asset("/images/".$property->image) }}" alt="{{$property->name}}" class="imgresponsive">
                            @endif
                        </div>
                    <div class="single-description p-15 m-b-15 border2 border-top-0">
                        {!! $property->description !!}
                    </div>
                </div>
                {{-- End ./COL M8 --}}
            </div>

        </div>
    </section>
@endsection
