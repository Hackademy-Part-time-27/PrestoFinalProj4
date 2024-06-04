@if(session()->has('error'))
<div class="alert alert-danger fs-4">
    {{ session('error') }}
</div>
@endif