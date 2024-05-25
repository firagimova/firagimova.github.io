$(document).ready(function () {
    
    $("#dialog").dialog({
        autoOpen: false,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });

    $("#pop").click(function() {
        $("#dialog").dialog("open");
    });

})