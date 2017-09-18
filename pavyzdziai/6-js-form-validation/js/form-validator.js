(function () {

  var form = document.querySelector('form');
  var formData = {
    firstName:  document.querySelector('input[name="firstname"]'),
    lastName:  document.querySelector('input[name="lastname"]'),
      email:  document.querySelector('input[name="email"]')
  };
  function validateForm (event) {
    event.preventDefault(); // uzdraudzia HTML veiksla (submit From)
    printFromData();

    if( formData.firstName.value === "" ||
     formData.lastName.value === "" || formData.email.value === "" ) { 
		
       if(!form.querySelector('.alert-warning')) {
          var errorMessage = document.createElement("div");
          errorMessage.innerHTML = "<p class='alert-warning  alert'>Please insert missing values.</p>";
          // prie HTML formos prideda msusu eror zinute
          form.appendChild(errorMessage);
       }
    } 
	//else {
	//	$(event).unbind('submit'); worked as the only method to restore the default action.
	//   //OR
	//	 //later you decide you want to submit
    //   $(this).unbind('submit').submit();
	//}
  }
  function printFromData () {
    console.log("Duomenys . Vardas: ", formData.firstName.value,
    " pavarde: ", formData.lastName.value,
     " email: " , formData.email.value);
  }
  form.addEventListener("submit", validateForm);



  // uzpildo forma - testavimo tikslais
  // function fillForm (name, surename, email) {
  //   formData.firstName.value = name;
  //   formData.lastName.value = surename;
  //   formData.email.value = email;
  // }
  // uzpildome forma testiniais duomenimis
  // fillForm("tautvydas", "Kaleda", "a@a.lt");
 
  
})();
