console.log("Labas");

prekes = [
    "saldytuvas", // 0
    "virdulys", // 1
    "stalas", // 2
    "puodelis", // 3
    99,
    -1,
];

ilgis = prekes.length;

console.log(prekes [2]); // stalas

// istrinti puodeli ir i jo vieta ideti stikline (2 skirtingi budai)
prekes [3] = "stikline";
prekes [prekes.length] = "stikline";

// js prikuria tusciu stalciu
prekes[60] = "testuoju";
console.log("prekiu skaicius: " + prekes.length);

// isspausdinti masyva
console.log(prekes.toString()); // isveda vienoje eiluteje (be tarpu)
console.log(prekes.join(" ")); // turi parametra - skyrikliui nurodyti

visiDuomenys = prekes.join(" ");

surikiuotos = prekes.sort();
console.log(prekes.join(" "));

prekes.push("kede"); // dedama i masyvo gala
console.log(prekes.join(" "));

prekes["irankiai"] = "plaktukas";
console.log(prekes.join(" "));

prekes["username"] = "Tomulis";
prekes["password"] = "xD15ffR";
