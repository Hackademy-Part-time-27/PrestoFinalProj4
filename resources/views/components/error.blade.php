@if(session()->has('error'))
<div class="alert alert-danger font-400">
    {{ session('error') }}
</div>
@endif