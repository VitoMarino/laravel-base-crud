// Questo codice serve per creare un alert PRIMA di dare conferma di un determinato comando

const deleteForms = document.querySelectorAll('form.delete-form');

deleteForms.forEach((deleteFormElement) => {

    deleteFormElement.addEventListener('submit', function(event){
        event.preventDefault();

        if (window.confirm('Delete this animal?') === true) {
            this.submit();
        }
    });

});


