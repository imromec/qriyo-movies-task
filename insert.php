
<html>
<body>
<?php
 $servername = "localhost";
        $username = "root";
        $password = "";
		$conn = new mysqli($servername, $username, $password,"test");

// Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
   echo "Connected successfully";
$jfile=file_get_contents('use_the_force.json');
$r1=json_decode($jfile,true);
foreach( $r1["movies"] as $p )
     {
		 $Title=$p['title'];
		 $Plot=$p['plot'];
		 $Rated=$p['rated'];
		 $Language=$p['language'];
		 $Country=$p['country'];
		 $Writer=$p['writer'];
		 //echo "$Writer <br />";
		 $Year=$p['year'];
		 $Metascore=$p['metascore'];
		 $ImdbId=$p['imdb_id'];
		 $Director=$p['director'];
		 $Released=$p['released'];
		 $ImdbRating=$p['imdb_rating'];
		 $Awards=$p['awards'];
		 $Poster=$p['poster'];
		 $Genre=$p['genre'];
		 $Actors=$p['actors'];
		 $Runtime=$p['runtime'];
		 $Type=$p['type'];
		 $Response=$p['response'];
		 $ImdbVotes=$p['imdb_votes'];
	 $sql = "INSERT INTO movie (Title, Plot, Rated, Language, Country, Writer, Year, Metascore, Imdbid, Director, Released, Imdbrating, awards, poster, genre, Actors, Runtime, Type, Response, Imdbvotes)
             VALUES ('$Title', '$Plot', '$Rated', '$Language', '$Country', '$Writer', '$Year', '$Metascore', '$ImdbId', '$Director', '$Released', '$ImdbRating', '$Awards', '$Poster', '$Genre', '$Actors', '$Runtime', '$Type', '$Response', '$ImdbVotes')";
		if ($conn->query($sql) === TRUE) 
	  {
            echo "New record created successfully"; 
      }

else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
     }

	 
		  
	 }
$conn->close();	
?>
</body>
</html>