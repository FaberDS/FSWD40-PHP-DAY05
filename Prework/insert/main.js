//Insert Content

$("#insert").click(function(){
    $.post( $("#insertForm").attr("action"),
    $("#insertForm :input").serializeArray(),
    function(info){ $("#msg").html(info);
    });
    clearInput();
});
$("#insertForm").submit( function(){
    return false;
});
function clearInput(){
    $("#insertForm :input").each( function() {
        $(this).val('');
    });
}

