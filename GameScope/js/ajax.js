$(document).ready(function() {

    $('.list a').click(function(event) {
        event.preventDefault();
        var category = $(this).attr('id');
        console.log("Clicked element: ", this);
        console.log("Category title: " + category);

        if (!category) {
            console.error("Category title is empty or undefined");
            return;
        }
        
        var jsonFile = "json/" + category + '.json';
        
        console.log("Fetching data from: " + jsonFile);

        $.getJSON(jsonFile, function(data) {
            
            console.log("Data fetched: ", data);
            // Clear the existing table content
            $('.table table').empty();
            
            // Create a new table row
            var newRow = $('<tr></tr>');


            data.games.forEach(function(game) {
                console.log("Processing game: ", game);
                var cell = $('<td></td>');
                var link = $('<a></a>').attr('href', game.link).attr('title', game.title);
                var image = $('<img>').attr('src', game.image).attr('alt', '').addClass('imgs');
                
                link.append(image);
                cell.append(link);
                newRow.append(cell);
            });
            
            // Append the new row to the table
            $('.table table').append(newRow);
            
        }).fail(function(jqxhr, textStatus, error) {
            var err = textStatus + ", " + error;
            console.log("Request Failed: " + err);
        });
    });

}); // end ready