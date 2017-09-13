console.log("Labas");


prekes = [
    "saldytuvas",
    "virdulys",
    "stalas",
    "puodelis",
    99,
    -1
];

ilgis = prekes.length;


 console.log( prekes[2] ); // stalas

 // istrinti puodeli ir i jo vieta ideti stikline (du skirtingi budai)
 prekes[3] = "stikline";
 prekes[ prekes.length ] = "stikline";

// js prikuria tusciu stalciu
prekes[60] = "testuoju";
console.log("prekiu skaicius: " + prekes.length);

// isspausdinti masyva
console.log( prekes.toString() );  // isveda vienoje eiluteje (be tarpu ir su ",")
console.log( prekes.join(" ") );  // isveda vienoje eiluteje  turi parametra - skyrikliui nurodyti

visiDuomenys =  prekes.join(" ");

surikiuotos = prekes.sort();
console.log( prekes.join(" ") );  // isveda vienoje eiluteje  turi parametra - skyrikliui nurodyti

prekes.push("kede");  // dedama i masyvo gala
console.log( prekes.join(" ") );

prekes["irankiai"] = "plaktukas";
console.log( prekes.join(" ") );
prekes["username"] = "tomulis";
prekes["password"] = "xD15f";

 // var prekes = "tekstas ilgas";
if (Array.isArray( prekes) ) {
    console.log(prekes[0] );
} else { // jeigu prekes nera masyvas
    console.log(prekes);
}

// triname nuo 2 elemnto
console.log("----- testuotu 2 elemento trinima----");
console.log( prekes.join(" ") );
  prekes.splice(2,1, "dramblys", "krokodilas", "zirafa");
console.log( prekes.join(" ") );







//
