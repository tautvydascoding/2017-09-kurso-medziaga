



$.ajax({
type: "GET",
url: "ajax.php?q=article",
data: {action: 'test'},
dataType:'JSON',
success: function(straipsnis){
console.log(straipsnis);
console.log('ajax');
// put on console what server sent back...
}
});
