$(document).ready(function() {

    $('.delete-btn').click(function(){
        var res = confirm('Confirm delete');
        if(!res) {
            return false;
        }
    });


});
