<?php
$servername = "localhost";
$user = "root";
$pw = "root";
//https://www.siteground.com/tutorials/php-mysql/display-table-data/ 



try {
    $conn = new PDO("mysql:host=$servername; dbname=kcxnbv", $user, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected!";
} catch ( PDOExceptition $e) {
    echo "Connection failed." . $e->getMessage();
}
echo "<h1>PHP</h1>";
//Ex Fach
$createTabeleGroup = '
    CREATE TABLE Clgroup(
        id_group    INT AUTO_INCREMENT,
        groupname   VARCHAR(5),
        PRIMARY KEY (id_group)
);';

try{

    $conn->exec($createTabeleGroup);
    echo "Tabelle Gr";
    
} catch(PDOException $e){
    
    echo "create Tabele group faild". $e->getMessage();
}

//ex Lp
$createTabeleTeams = '
    CREATE TABLE Teams(
        id_teams    INT AUTO_INCREMENT,
        Teamname    VARCHAR(30),
        Groupid     INT,
        PRIMARY KEY (id_teams),
        FOREIGN KEY(Groupid) REFERENCES Clgroup(id_group)
);';

try{
    $conn->exec($createTabeleTeams);
    echo "Tabelle teams,";
} catch(PDOException $e){
    echo "create Tabelle Teams faild". $e->getMessage();
}
//ex bewertung
$createTabeleGame = '
  CREATE TABLE game(
        id_Game             INT AUTO_INCREMENT,
        MatchDay            INT,
        date                VARCHAR(15),
        HomeTeam            INT,
        GuestTeam           INT,
        GoalsHomeTeam       INT,
        GoalsGuestTeam      INT,
        PRIMARY KEY (id_game),
        FOREIGN KEY (HomeTeam) REFERENCES Teams(id_teams),
        FOREIGN KEY (GuestTeam) REFERENCES Teams(id_teams)
);';
try{

    $conn->exec($createTabeleGame);
    
    echo "Tabelle bw,";
    
} catch(PDOException $e){
    
    echo "create Tabelle GameDay faild". $e->getMessage();
}

$createTabeleStadium = '
  CREATE TABLE stadium(
        id_stadium         INT AUTO_INCREMENT,
        OWNER              INT,
        CAPACITY           INT,
        StadiumName        VARCHAR(30),    
        PRIMARY KEY (id_stadium),
        FOREIGN KEY (Owner) REFERENCES Teams(id_teams)
);';
try{

    $conn->exec($createTabeleStadium);
    
    echo "Tabelle st,";
    
} catch(PDOException $e){
    
    echo "create Tabelle st faild". $e->getMessage();
}
?>