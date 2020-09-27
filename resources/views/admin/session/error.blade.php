@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><em class="icon fa fa-warning"></em> {{ Session::get('error') }}</h4>
    </div>
@endif