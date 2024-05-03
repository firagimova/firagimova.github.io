$(document).ready(function() {
    $("#birthday").datepicker();  //datepicker


    var languages=["Java", "C", "C++", "C#", "Python", "Javascript", "Ruby", "Go"] // langauges
    $("#languages").autocomplete({
        source: languages
    })
});