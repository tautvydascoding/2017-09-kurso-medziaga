console.log("Labas")

prekes = [
  "saldytuvas",
  "virdulys",
  "stalas",
  "puodelis",
  99,
  -1
];

ilgis = prekes.length;
console.log( prekes[2] ); //stalas


// istrinti puodeli ir i jo vieta ideti stikline 2 budai:
prekes[3] = "stikline";
prekes [ prekes.length ] = "stikline"; // extra sukuria (5)
console.log();


// js prikuria tusciu stalciu :
prekes[60] = "testuoju";
console.log("prekiu skaicius: " + prekes.length); //grazina (61) ["saldytuvas", "virdulys", "stalas", "stikline", "stikline", undefined × 55, "testuoju"]

//isspausdinti masyva
console.log( prekes.toString() ); // isveda vienoje eiluteje be tarpu ir su kableliais
console.log( prekes.join (" ") ); //galima ideti skliausteliuose kaip isspausdinti


visiDuomenys = prekes.join(" ");

surikiuotos = prekes.sort();
console.log( prekes.join(" ") ); //isveda vienoje eiluteje turi parametra - skyrikliui nurodyti

prekes.push( "kede" ); // dedama i masyvo gala
console.log( prekes.join(" ") );

prekes["irankis"] = "plaktukas";
console.log( prekes.join(" ") );
prekes["username"] = "tomulis";
prekes["password"] = "xD15f";


var prekes = "tekstas ilgas";
if (Array.isArray( prekes) ) {
  console.log(prekes[0] );
} else {  //jeigu prekes nera masyvas
  console.log(prekes);
}


// prekes.pop();  // panaikina paskutini elemeneta
