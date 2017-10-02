console.log("1");

$.ajax({

type: "GET",
url: "ajax.php?q=article",
data: {action: 'test'},
dataType:'JSON',
success: function(response){
console.log(response.xx);

}
});
