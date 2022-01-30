<div>
    @if ($errors->any())
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissable">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
        </div>
    </div>
@endif
</div>