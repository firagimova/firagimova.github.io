$(document).ready(function() {

    $('#nav_list a').click(function(event) {
        event.preventDefault();
        var speaker = $(this).attr('title');
        var jsonFile = "/json_files/"+speaker + '.json';
        $.getJSON(jsonFile, function(data) {
            var speakerData = data.speakers[0];
            $('main h1').text(speakerData.title);
            $('main img').attr('src', speakerData.image);
            $('main h2').html(speakerData.month + '<br>' + speakerData.speaker);
            $('main p').text(speakerData.text);
        });
    });

}); // end ready