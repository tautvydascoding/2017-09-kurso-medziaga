  CREATE TABLE IF NOT EXISTS pages ( id INT(6) AUTO_INCREMENT PRIMARY KEY, pagename VARCHAR(50));
	  
  CREATE TABLE IF NOT EXISTS articles ( id INT(6) AUTO_INCREMENT PRIMARY KEY, title VARCHAR(160), content TEXT, page_id INT(6), date DATE );
  
     
    INSERT INTO pages VALUES ('', 'index');
	INSERT INTO pages VALUES ('', 'about');
	INSERT INTO pages VALUES ('', 'gallery');
	INSERT INTO pages VALUES ('', 'services');
	INSERT INTO pages VALUES ('', 'contact');
  
   INSERT INTO articles VALUES ('', 'Kai pradedi gyvenimą savarankiškai', 'Cat ipsum dolor sit amet, claw drapes. Hunt anything that moves mrow pelt around the house and up and down stairs chasing phantoms, always hungry. Destroy couch hide from vacuum cleaner eat the fat cats food so meowing non stop for food, but sniff sniff. Lounge in doorway curl up and sleep on the freshly laundered towels plan steps for world domination pet right here, no not there, here, no fool, right here that other cat smells funny you should really give me all the treats because i smell the best and omg you finally got the right spot and i love you right now hunt by meowing loudly at 5am next to human slave food dispenser i like big cats and i can not lie.', 1, Now());
   
      INSERT INTO articles VALUES ('', 'Mūsų idėjos', 'Cat ipsum dolor sit amet, claw drapes. Hunt anything that moves mrow pelt around the house and up and down stairs chasing phantoms, always hungry. Destroy couch hide from vacuum cleaner eat the fat cats food so meowing non stop for food, but sniff sniff. Lounge in doorway curl up and sleep on the freshly laundered towels plan steps for world domination pet right here, no not there, here, no fool, right here that other cat smells funny you should really give me all the treats because i smell the best and omg you finally got the right spot and i love you right now hunt by meowing loudly at 5am next to human slave food dispenser i like big cats and i can not lie. Damn that dog leave hair everywhere scratch at the door then walk away when in doubt, wash, massacre a bird in the living room and then look like the cutest and most innocent animal on the planet.', 1, Now());
   
       INSERT INTO articles VALUES ('', 'Mūsų pagalba, jūsų sprendimai', 'Jump five feet high and sideways when a shadow moves scratch the furniture playing with balls of wool and sleep in the bathroom sink hunt by meowing loudly at 5am next to human slave food dispenser step on your keyboard while you\'re gaming and then turn in a circle eat plants, meow, and throw up because i ate plants. Proudly present butt to human crash against wall but walk away like nothing happened claw at curtains stretch and yawn nibble on tuna ignore human bite human hand. Hide when guests come over plays league of legends and present belly, scratch hand when stroked swat turds around the house pose purrfectly to show my beauty. Throw down all the stuff in the kitchen demand to be let outside at once, and expect owner to wait for me as i think about it mark territory.', 1, Now());
   
   
      // paimti konkretu straipsni pagal jo id
   function getArticle($id) {
       $sql = "SELECT * FROM articles
              WHERE id = $id";
       $rezultatai = mysqli_query(getConnection(), $sql);
       if ($rezultatai) {
               echo "getUser Suveike";
           // gryzusisu duomenis is DB sudedame i masyva
           $rezultatai = mysqli_fetch_array($rezultatai);
           return $rezultatai;
       } else {
           echo "ERROR: getUser nesuveike!!!!!!";
           return null;
       }
   }
   
   
   
   
   
   
   
   
    Jump five feet high and sideways when a shadow moves scratch the furniture playing with balls of wool and sleep in the bathroom sink hunt by meowing loudly at 5am next to human slave food dispenser step on your keyboard while you're gaming and then turn in a circle eat plants, meow, and throw up because i ate plants. Proudly present butt to human crash against wall but walk away like nothing happened claw at curtains stretch and yawn nibble on tuna ignore human bite human hand. Hide when guests come over plays league of legends and present belly, scratch hand when stroked swat turds around the house pose purrfectly to show my beauty. Throw down all the stuff in the kitchen demand to be let outside at once, and expect owner to wait for me as i think about it mark territory. 