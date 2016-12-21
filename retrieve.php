<html>
    <body>
        <?php
        $Genre = $_POST["genre"];
        $Keyword = $_POST["keyword"];
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new mysqli($servername, $username, $password, "test");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query;
        if ($Keyword && $Genre) {
            $query = "SELECT poster, Title, genre, Director, Actors, Plot FROM movie WHERE Director='$Keyword' OR Plot='$Keyword' OR Title='$Keyword' AND  genre LIKE '%$Genre%'";
        } else if ($Keyword) {
            $query = "SELECT poster, Title, genre, Director, Actors, Plot FROM movie WHERE Director='$Keyword' OR Plot='$Keyword' OR Title='$Keyword' ";
        } else if ($Genre) {
            $query = "SELECT poster, Title, genre, Director, Actors FROM movie WHERE genre LIKE '%$Genre%'";
        }

        $result = mysqli_query($conn, $query);

        if ($result) {
            while ($r = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                $Title = $r['Title'];
                $Director = $r['Director'];
                $genre = $r['genre'];
                $poster = $r['poster'];
                $Actors = $r['Actors'];
                echo "Title: $Title <br/>Director: $Director<br/>Genre: $genre<br/>Actors: $Actors<br/> Poster <img src='$poster'><br/> <br/> <br/> <br/>";
            }
        } else {
            echo"bye";
        }

        mysqli_close($conn);
        ?>
    </body>
</html>