 SELECT DISTINCT doctors.name  AS doctors, doctors.lname AS Surname, patients.name AS pacient, patients.lname AS Surname 
 FROM doctors, patients WHERE patients.id = doctors.patient_id ORDER BY doctors.id;
 
 
 
 CREATE TABLE `img` (id INT(6) AUTO_INCREMENT PRIMARY KEY,  name varchar(25), client_id INT(6));
  
   update patients set patients.name = "Tom" where patients.name ="Tim" and patients.lname = "Taros";
   
   SELECT doctors.name as Doc_name, patients.name as patient from doctors, patients where patients.id = doctors.patient_id and patients.name = "Tom";