console.log("Labas");

names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1
names.push("butelis");
console.log(names.join(" "));

// 2
names.splice(0, 0, "ziebtuvelis");
console.log(names.join(" "));

// 3
names.splice(0, 3);
console.log(names.join(" "));

// 4
var masyvas = [];
for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;
}
console.log(masyvas.join(" "));

// 5
var t = 1;
while (t < 100) {
    masyvas[t] = 3;
    t = t + 2;
}
console.log(masyvas.join(" "));

function getPVM (x) {
    var ats = x * 0.21;
    return ats;
}
var prekesKaina = 100;
var prekesKainaSuPVM = prekesKaina + getPVM(prekesKaina);
console.log("Prekes kaina su PVM:  ", prekesKainaSuPVM);

//uz
