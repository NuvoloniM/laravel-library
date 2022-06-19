{{-- creo un messaggio in include che mi posso includere dove voglio -> se c'è un messaggio catchalo e mostralo --}}

@if ( session('message') )
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif