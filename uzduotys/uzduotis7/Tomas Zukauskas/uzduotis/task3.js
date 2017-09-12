
// -----------------------------------------------
// uzduotis 3
// pridedam buteli i gala
ma = ['Jo', 2, 'cool', 'arkliukas'];
ma[ma.length] = 'butelis vandens';
console.log(ma);
//or
// ma.push('tavo mama');
//
// alert('Tavo mama netilpo i masyva!');
// pridedam koja i prieki
ma.unshift('koja');
console.log(ma);
//istriname 3 elementa
delete ma[2];
console.log(ma);
//50 masyvas su nuliais
a = new Array();
for (b=0;b < 50;b++) {
    a[b] = 0;
}
console.log(a);
//50 masyvas su vienetais
d = new Array();
c = 0;
while (c<50) {
    d[c] = 1;
    c++;
}
console.log(d);
//50 masyvas su vienetais su kas antru trejetuku
f = new Array();
c = 0;
while (c<50) {
    if (c % 2 == 1) {
        f[c] = 3;
    } else {
    f[c] = 1;
    }
    c++;
}
document.write(f);
