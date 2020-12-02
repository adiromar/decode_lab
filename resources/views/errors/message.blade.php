@if(Session::has('success'))

<div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>

    <i class="ace-icon fa fa-check green"></i>

    <strong class="green">
        {{ Session::get("success") }}
    </strong>
</div>
@endif

@if(Session::has('error'))

<div class="alert alert-block alert-danger">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>

    <i class="ace-icon fa fa-check red"></i>

    <strong class="red">
        {{ Session::get("error") }}
    </strong>
</div>
@endif

@if(Session::has('info'))

<div class="alert alert-block alert-info">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>

    <i class="ace-icon fa fa-check green"></i>

    <strong class="green">
        {{ Session::get("info") }}
    </strong>
</div>
@endif

