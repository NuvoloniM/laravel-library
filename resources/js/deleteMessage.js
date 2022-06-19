const deleteForms = document.querySelectorAll('.delete-form');

deleteForms.forEach( form => {
    form-addEventListener('submit', (e) =>{
        // evito che reload la pg
        e.preventDefault();
        // creo allert di conferma 
        const accept = confirm('Sei sicuro di voler eliminare il libro?');
        if(accept) e.target.submit();
    });
});