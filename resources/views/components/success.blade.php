@if(session()->has('success'))
<div class="alert alert-success font-400">
    {{ session('success') }}
</div>
@endif