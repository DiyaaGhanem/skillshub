@if (session('msg'))

    <div class="alert-success">
        {{ session('msg') }}
    </div>
    
@endif