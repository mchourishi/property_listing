@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><em class="icon fa fa-check"></em> {{ Session::get('message') }}</h4>
    </div>
@endif
