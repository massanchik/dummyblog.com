function sendForm(formid, placeholder, errordiv){

    var url=$(formid).attr("action");

    $.post(url, $(formid).serialize()+'&ajax=1', function(data){

        var message = $(data).find('#message').text();
        if(message != ''){

            $(placeholder).slideUp('slow', function(){
                $(placeholder).html(message);
            }).delay(200).slideDown('slow');

        }
        else{

            $(errordiv).html($(data).find(errordiv).html());
        }
    });
}

function trimAll(sString)
{
    while (sString.substring(0,1) == ' ')
    {
        sString = sString.substring(1, sString.length);
    }
    while (sString.substring(sString.length-1, sString.length) == ' ')
    {
        sString = sString.substring(0,sString.length-1);
    }
    return sString;
}