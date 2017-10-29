// =====================extends=====================

 // uzduotis: sukurti klases "Gyvunas", "Tipas" - kuri paveldi Gyvunas, "Liutas" - kuri paveldi Tipas
 // Gyvunas:
 //    public $alive = true;
 //    public $positionX;
 //    public $positionY;
 // Tipas:
 //    public $rusis = "kate";
 //    public $minta = "mesa";
 // Liutas:
 //    public $kailis = true;
 //    public $spalva = "#a34baa";
 //    private $amzius = 5;

 // uzduotis 0: susikurti 3 Obj. klasas Liutas
  // uzduotis 1: pakeisti visu triju liutu spalvas (ir pakeitimus atspausdinti)

   // uzduotis2: A) Liuto klasei susikurti PRIVATU kintamaji "name". ir uskurti 2 funkcijas jo reiksmei pakeisti ir paimti "setName($x)", "getName()".
   B) Pakeisti vardus ir atspausdinti

    // uzduotis 3 - pabandyti paveldimuma:
    // 1) sukurti dvi klases: User, Admin
    // 2) User klase turi kintamuosius : username, password, rights ir funkcija Login($name, $pass)
    // 3) Admin klase  funkcijas:  changeUserName($nm),  changeRights($rgt)
    // 4)
     // A) issivesti username,
     // B) pakeisti username
     // C) issivesti username
     // 5)  panaudoti login funkcija
     // A) panaudoti login funkcija , pakeitus username



//=================================

//  uzduotis 1
//  sukurti klase User / vartotojas
// kintamieji: private username = 'Tim', privattus password = 'Dragon', public lastLoginTime
// f-jos : public login($uname, $pass) , kuri patikrina ar vartotojo spaltazodis yra toks kaip vartotojo

// $vartotojas = new User();
// $arToksEgzistuoja = $vartotojas->login("Gregor", "Dragon");
// echo $arToksEgzistuoja;


// uzduotis 2 sukurti Admin kalse , kuri paveldi User klase
// ir turi kintamuosius: $userRights
// turi f-ja : changeUsername($newName) , kuri pakeicia vartotojo varda