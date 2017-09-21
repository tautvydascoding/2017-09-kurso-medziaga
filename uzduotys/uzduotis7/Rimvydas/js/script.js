//
//var bruksnis = "lentele";
//function piesti (x){
//    
//    for ( i = 0; i < x; i++){
//        bruksnis = bruksnis + "-";
//        
//    }
//    
//    console.log(bruksnis);
//    
//}
//
//
//
//piesti(30);
//
//
//
//var img = "<img src='""' alt='""' width='"100px"' height='"100px"'>";
//
//for (i = 0; i < 3; i++){
//    
//    document.write(img);
//    
//    
//}
//
//document.write("<br>");
//for (i = 0; i < 2; i++){
//    
//    document.write(img);
//    
//    
//}



function largestOfFour(arr) {
  // You can do this!
    var product = [];
  var max = 0;
  // Only change code below this line
  for (var i = 0; i < arr.length; i++ ){
    
  for (var t = 0; t < arr[i].length; t++ ){
 
   if (max < arr[i][t]){
    
         max = arr[i][t];
     
   }else if (max >= arr[i][t]) {
     product.push(max);
     max = 0;
   }
    
    
  }
}
  
  console.log(product) ;
}

largestOfFour([[4, 5, 1, 3], [13, 27, 18, 26], [32, 35, 37, 39], [1000, 1001, 857, 1]]);