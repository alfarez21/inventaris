$(function () {

    // DataTable
    $('#tableFull').DataTable({
        fixedHeader: true
    })

   //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
    
    // Auto Close Alert
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 2000);
});