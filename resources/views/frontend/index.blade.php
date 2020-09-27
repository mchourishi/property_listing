@extends('frontend.layouts.app')

@section('content')
    <div class="col s12 m12">
        @forelse($properties as $property)
            <div class="card" style="width: 18rem;">
                <div>
                    <div class="card-content property-content">
                            <div class="card-image">
                                <a href="{{ route('property.show',$property->id) }}">
                                    <img src="{{file_exists( public_path().'/images/'.$property->image ) ? asset("/images/".$property->image) : asset("/img/default-150x150.png")}}" alt="{{ $property->name }}">
                                </a>
                            </div>
                        <span class="card-title search-title" title="{{$property->name}}">
                                        <a href="{{ route('property.show',$property->id) }}">{{ $property->name }}</a>
                        </span>

                    </div>
                    <div class="card-action property-action clearfix">
                                    <span class="btn-flat">
                                        <i class="material-icons">money</i>
                                        Price: <strong>${{ $property->price}}</strong>
                                    </span>
                    </div>
                    <div class="card-action property-action clearfix">
                        <span class="btn-flat">
                                        <i class="material-icons">check_box</i>
                                        Bedroom: <strong>{{ $property->num_bedroom}}</strong>
                                    </span>
                        <span class="btn-flat">
                                        <i class="material-icons">check_box</i>
                                        Bathroom: <strong>{{ $property->num_bathroom}}</strong>
                                    </span>
                    </div>

                </div>
            </div>
        @empty

        @endforelse
    </div>
@endsection
