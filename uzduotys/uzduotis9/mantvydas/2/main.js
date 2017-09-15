console.log("Labas");

var masina = "Volvo"
switch (masina) {
    case "BMW":
        // veiksmai:
        console.log("jusu masina: ", masina);
        break;
        case "Audi":
            // veiksmai:
            console.log("jusu masina: ", masina);
        break;
        case "Volvo":
            // veiksmai:
            console.log("jusu masina: ", masina);
        break;
    default:
    // veiksmai:
    console.log("jusu masina: triratis");

}

// begaliniai ciklai

t = 0;
while (true) {
    console.log("ieskau");
    if (t == 1500) {
        break;
    }
    t++;
}
