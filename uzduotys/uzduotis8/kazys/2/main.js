console.log("Labas");
var prekes = ["saldytuvas", "virdulys", "stalas", "puodelis", 99, -1];
ilgis = prekes.length;
prekes[3] = "stikline"; //manually counting
prekes[prekes.length] = "stikline"; // pagal eilutes ilgi, paskutinis daiktas

//js prikuria tusciu stalciu
prekes [60] = "testuoju"
console.log("prekiu skaicius: " + prekes.length);

// console.log(prekes[2]); // isveda stalas

//isspausdint masyva vienoje eilute be tarpu
console.log(prekes.join(" "));   // prie join galima ideti kaip atspausdinti, pvz su tarpais

surikiuotos = prekes.sort();
console.log(prekes.join(" "));
prekes.push ("kede");
console.log (prekes);

prekes ["irankis"] = "plaktukas";
console.log (prekes);
prekes["username"] = "tomulis";
prekes["password"] = "xD15f";
// var prekes = "tekstas ilgas";
if (Array.isArray (prekes)) { //jei prekes yra masyvas
  console.log(prekes[0]);
} else { //jeigu prekes nera masyvas
  console.log(prekes);
}
prekes.shift(); 
