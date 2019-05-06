window.addEventListener('DOMContentLoaded', function(){
    //Utilizo jquery solo por la libreria no por elección personal.
   const buttonsDelete = document.querySelectorAll('.deleteMascota');

    buttonsDelete.forEach(function(e){
        e.addEventListener('click', function(){
            let id = e.getAttribute('delete-id');
            $('[data-id="'+ id +'"]').modal('show');
        })
    });

    $('.message .close')
        .on('click', function() {
            $(this)
                .closest('.message')
                .transition('fade')
            ;
        })
    ;
});