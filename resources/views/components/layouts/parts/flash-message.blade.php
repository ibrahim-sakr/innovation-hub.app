@if(Session::has('message'))
    <div class="row flash-message">
        <div class="font-p alert text-center alert-{{ Session::get('type') }}" role="alert">
            {{ Session::get('message') }}
        </div>
    </div>
@endif
