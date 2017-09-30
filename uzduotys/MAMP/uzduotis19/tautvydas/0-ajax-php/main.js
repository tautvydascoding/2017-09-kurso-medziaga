

function work () {
    console.log("work-");

    $.ajax({
        type: "get",
        url: "returnAjaxData.php?q=article",
        data: {action: 'test'},
        dataType:'JSON',
        success: function(straipsnis){
            console.log(straipsnis);
            console.log("ajax");
            // $.each(straipsnis, function(idx, straipsnis){
            //   // straipsnis.pic_location
            //   // straipsnis.name
            //   // straipsnis.age
            //   // straipsnis.gender
            // });
        },
        error: function (request, error) {
            console.log(error);
            console.log(arguments);
        }
    });
}
$('#button').on('click', work());







//
