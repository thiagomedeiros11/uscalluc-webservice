$(document).ready(function(){

    $('#select').on('change',function(){

        var selectValor = '#'+$(this).val();
        
        $('#pai').children('div').hide();
        $('#pai').children(selectValor).show();



    });


});
