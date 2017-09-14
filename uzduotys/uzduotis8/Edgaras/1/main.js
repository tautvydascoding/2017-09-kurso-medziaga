console.log("Labas");

prekes=[
"saldytuvas",
"virdulys",
"puodelis",
"lova",
"24"
];

ilgis=prekes.length;

console.log(prekes[2]); //virdulys

prekes[3] = "stikline"; //keiciam masyvo nari i kita
prekes[prekes.length]="stikline"; // antras budas kai pakeiciame paskutini nari

// galima sukurti tusciu stalciu masyve
prekes[60] = "testuotju";
console.log("prekiu skaicius:" + prekes.length);


// spausdinam masyva
console.log(prekes.toString()); // isveda be tarpu ir su kableliais
console.log(prekes.join(" ")); // isveda su tarpais vienoje eiluteje

// prekiu rykiavimas "sort" A-Z (jeigu yra skaiciu, tai juos surikiuos pirmus)
surikiuotos = prekes.sort();
console.log(prekes.join(" "));

// dedama i masyvo gala
prekes.push("kede");
console.log(prekes.join(" "));
prekes["irankis"] = "plaktukas";
console.log(prekes.join(" "));
prekes["username"] = "tomulis";
prekes["password"] = "456823";

// ar masyvas yra masyvas
if (Array.isArray(prekes)) {
    console.log(prekes[0]);
} else {
    console.log(prekes);
}

// istryne pirma elementa (24)
prekes.shift();


console.log(prekes.join(" "));
prekes.splice(2, 0, "dramblys"); // 2,0 trina elementa kuris eina po antro, kabutes prideda elementa
console.log(prekes.join(" "));
