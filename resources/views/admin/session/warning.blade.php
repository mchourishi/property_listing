@if (Session::has('warning'))
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><em class="icon fa fa-warning"></em> {{ Session::get('warning') }}</h4>
    </div>
@endif