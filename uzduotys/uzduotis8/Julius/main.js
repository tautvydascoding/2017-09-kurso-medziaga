console.log("labas");

//var taip="iseina";
//var ne="neiseina";
//var header= document.getElementById('bandau');
//var headerText= header.innerText;
//
//if(header && headerText=="lopas"){
//header.innerText=taip; }
//else {
//    header.innerText=ne;
//}
//
//var taip="iseina";
//var ne="neiseina";
//var header= document.getElementById('bandau');
//var headerText= header.innerText;
//
//
//
//
//if(header && headerText=="lopas"){
//header.innerText=taip; }
//
//else {
//    header.innerText=ne;
//    document.write(headerText +i+"<br>";  )
//}
// 
//     for (i=0; i<=5; i++) {
//    document.write(headerText  + i+ '<br>');}
//x=1;
//y=2;
//var klausimas= Boolean(x<y);
//if(klausimas==true) {
//    
//}

prekes= [ "vienas", 'du', "trys", "karve", "ozka"];
var prekiuSkaicius= prekes.length;
var paskutinePreke=(prekiuSkaicius);
document.write(prekes[paskutinePreke-1]);
document.write(prekes.toString()+"<br>");// isvardina string tipu
document.write(prekes.join(" ")+'<br>'); //sujungia pagal nurodyta jungt arba be tarpu jei nk nenurodyta
document.write(prekes.sort()); //rikiuoja pagal skaicius ir raides
prekes["skaicius"]="vienas";
document.write('<br>'+prekes["skaicius"]);
function paspaudus() {
    document.write("paspaudziau mygtuka");
}
document.write(prekes.push("sudas"));
document.write(prekes.toString());
