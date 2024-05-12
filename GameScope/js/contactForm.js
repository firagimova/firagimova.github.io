$(document).ready(function() {

    $("#contactForm").on("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting traditionally
        var username = $("#username").val(); // Get the username value
        var game = $("#game").val(); // Get the game value
        
        // Change the HTML to display a thank you message
        var thankYouMessage = `<h4>Thank you, ${username} for sharing your interest in ${game} with us.</h4>`;
        $(".content").html(thankYouMessage); // Replace the content div with the thank you message
    });


    var games=["Minecraft", "Fortnite", "The Sims 4", "League of Legends", "Valorant", "Rocket League", "Cyberpunk 2077", "Red Dead Redemption 2", "Fallout"]
    $("#game").autocomplete({
        source: games
    })
});