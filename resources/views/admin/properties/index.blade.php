@extends('admin.layouts.master')

@section('inline-css')
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content_header','Manage Properties')

@section('breadcrumbs')
    @parent
    <li class="breadcrumb-item active"><a href="{{ route('properties.index') }}">Manage Properties</a></li>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Property List</h3>
                            <div class="coll-md-2 float-right">
                                <a type="button" href="{{ route('properties.create') }}"
                                   class="btn btn-primary btn-sm pull-right">New Property</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="property-list" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>#Bedrooms</th>
                                    <th>#Bathrooms</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($properties as $property)
                                    <tr>
                                        <td>{{ $property->name }}</td>
                                        <td>{{ $property->price }}</td>
                                        <td>{{ $property->num_bedroom }}</td>
                                        <td>{{ $property->num_bathroom }}</td>
                                        <td>{{ ($property->status)? 'Enabled' : 'Disabled'  }}
                                            <form id="form_delete_property_{{$property->id}}"
                                                  action="{{ route('properties.destroy', [$property->id]) }}"
                                                  method="POST">
                                                {{method_field('DELETE')}}
                                                {{ csrf_field() }}
                                            </form>
                                        </td>
                                        <td>{{\App\Helpers\Helper::getFormattedTimestamp($property->created_at)}}</td>
                                        <td>{{\App\Helpers\Helper::getFormattedTimestamp($property->updated_at)}}</td>
                                        <td class="text-right">
                                            <a href="{{ route('properties.edit', [$property->id]) }}"
                                               title="Update Property">
                                                <button type="button" class="btn btn-primary btn-sm"><i
                                                            class="fa fa-edit"></i></button>
                                            </a>
                                            @include('admin.modal.confirm',['id' => "delete_property_".$property->id, 'name' => '', 'message'=>'Are you sure you want to Delete?', 'class' => 'btn-danger btn-sm', 'fa' => 'fa-trash', 'title'=> "Delete Property"])
                                        </td>
                                    </tr>
                                @empty
                                    @include('admin.scripts.dataTables.noRecordsFound',['colspan' => 5])
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>#Bedrooms</th>
                                    <th>#Bathrooms</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('inline-js')
    @parent
    @include('admin.layouts.datatableJs')
@endsection
