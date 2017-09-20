



function tikrina (event){
event.preventDefault(); //sustabdo formos duomenų išsiuntimą
    
    
    if (!forma.querySelector('div')){
         var errorZinute = document.createElement("div");
    errorZinute.innerHTML += "<p class='alert alert-warning'> Jūs užpildiete ne visus laukus </p>";
    
    forma.prepend(errorZinute);
        
        
        }
    
    
    
    
   
    
    
    if (forma.firstname.value === "" || forma.email.value == "" || forma.lastname.value == ""){
        
    }else {
        forma.appendChild
    }
    
}

var forma = document.querySelector('form');
var data = {

    "name": "Jonas",
    "Pavarde": "Jonaitis",
    "email": "someEmail@email.com"

};


function autoFill (){
    forma.firstname.value = data.name;
    forma.lastname.value = data.Pavarde;
    forma.email.value = data.email;

}

// autoFill();

forma.addEventListener("submit", tikrina);


