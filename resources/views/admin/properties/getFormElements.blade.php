<div class="card-body">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-8">
            <input type="name" value="{{ old('name', $property->name ?? '') }}"
                   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name"
                   placeholder="Enter Name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-8">
            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description"
                      name="description" rows="3"
                      placeholder="Enter ...">{{ old('description', $property->description ?? '') }}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-8">
            <input type="text" value="{{ old('price', $property->price ?? '') }}"
                   class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" name="price"
                   placeholder="Enter Price">
        </div>
    </div>
    <div class="form-group row">
        <label for="num_bedroom" class="col-sm-2 col-form-label">#Bedrooms</label>
        <div class="col-sm-8">
            <input type="text" value="{{ old('num_bedroom', $property->num_bedroom ?? '') }}"
                   class="form-control {{ $errors->has('num_bedroom') ? 'is-invalid' : '' }}" id="num_bedroom"
                   name="num_bedroom" placeholder="Enter Number of Bedrooms">
        </div>
    </div>
    <div class="form-group row">
        <label for="num_bathroom" class="col-sm-2 col-form-label">#Bathrooms</label>
        <div class="col-sm-8">
            <input type="text" value="{{ old('num_bathroom', $property->num_bathroom ?? '') }}"
                   class="form-control {{ $errors->has('num_bathroom') ? 'is-invalid' : '' }}" id="num_bathroom"
                   name="num_bathroom" placeholder="Enter Number of Bathrooms">
        </div>
    </div>
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-8">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">{{ old('image', $property->image ?? 'Choose Image..') }}</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-8">
            <input type="checkbox" class="form-check-inline" id="status" name="status" checked
                   value="{{ old('status', $property->status ?? 1) }}">
        </div>
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

@section('inline-js')
    @parent
    <script>
        $('#image').on('change',function(e){
            //get the file name
            let fileName = e.target.files[0].name;
            //replace the "Choose a file" label
            $('.custom-file-label').html(fileName);
        });
    </script>
@endsection
