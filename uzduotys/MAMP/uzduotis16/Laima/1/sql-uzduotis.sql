
CREATE DATABASE IF NOT EXISTS  `savaite4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci; 

 CREATE TABLE IF NOT EXISTS users (
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(20),
      pass VARCHAR(20),
	  email VARCHAR(30),
	  rights VARCHAR(30) NOT NULL
	   );
	   
	   // rights - admin, moderator, subscriber;
	   
	   
	  CREATE TABLE IF NOT EXISTS articles (
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      title VARCHAR(160),
      content TEXT,
	  date DATE,
	  user_id INT(6)
	   );
	   
	   INSERT INTO users VALUES ('', 'Tim', 'dingding', 'tim@hotmail.com', 'admin');
	   
	   INSERT INTO users VALUES ('', 'Paul', 'dingding', 'paul@mail.com', 'subscriber');
	   
	   UPDATE users 
	SET rights = 'moderator'
	WHERE id = 1;
	
	  INSERT INTO articles VALUES ('', 'Kaune isikurs sveiko maisto restoranas', '', Now(), 2);
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ullam minus ipsam aspernatur aut, voluptate distinctio obcaecati inventore dicta eos aliquid modi.
	
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ullam minus ipsam aspernatur aut, voluptate distinctio obcaecati inventore dicta eos aliquid modi.