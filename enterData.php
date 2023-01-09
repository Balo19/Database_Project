<?php

echo "test";


$servername = "localhost";
$username = "root";
$password = "root";

try{
    $sconnction = new PDO("mysql:host=$servername; dbname=test_ef5", $username, $password);
    $sconnction->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected"."<br>";  
} catch (PDOExeption $e){
    echo "connaction faild" . $e->getMessage();
}


echo "<h1>PHP</h1>";
//Insert data group
$InsertG = "
    INSERT INTO Clgroup (groupname)
    VALUES ('A');
    INSERT INTO Clgroup (groupname)
    VALUES ('B');
    INSERT INTO Clgroup (groupname)
    VALUES ('C');
    INSERT INTO Clgroup (groupname)
    VALUES ('D');
    INSERT INTO Clgroup (groupname)
    VALUES ('E');
    INSERT INTO Clgroup (groupname)
    VALUES ('F');
    INSERT INTO Clgroup (groupname)
    VALUES ('G');
    INSERT INTO Clgroup (groupname)
    VALUES ('H');";

try {
    $sconnction->exec($InsertG);
    echo "Daten eingefügt Group.<br>";
} catch (PDOException $e) {
    echo "Insertion failed: " . $e->getMessage();
}

$InsertT = "
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('SSC Napoli','1');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('FC Liverpool','1');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Ajax Amsterdam','1');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Glasgow Rangers','1');

    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Fc Porto','2');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Club Brügge','2');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Bayer Leverkusen','2');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Atlético Madrid','2');

    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Bayern München','3');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Inter Mailand','3');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Fc Barcelona','3');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Viktoria Pilsen','3');

    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Tottenham Hotspur','4');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Eintracht Frankfurt','4');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Sporting Lissabon','4');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Olympique Marseille','4');

    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Fc Chelsea','5');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('AC Milan','5');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Redbull Salzburg','5');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Dinamo Zagreb','5');

    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Real Madrid','6');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Redbull Leipzig','6');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Schachtar Donezk','6');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Celtic Glasgow','6');

    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Manchaster City','7');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Borussia Dortmund','7');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Fc Sevilla','7');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Fc Kopenhagen','7');

    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Benfica Lissabon','8');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Paris Saint-Germain','8');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Juventus Turin','8');
    INSERT INTO Teams (Teamname,Groupid)
    VALUES ('Maccabi Haifa','8');";


try {
    $sconnction->exec($InsertT);
    echo "Daten eingefügt Teams.<br>";
} catch (PDOException $e) {
    echo "Insertion failed: " . $e->getMessage();
}

$InsertG = "
    INSERT INTO game (MatchDay,date,HomeTeam,GuestTeam,GoalsHomeTeam,GoalsGuestTeam)
    VALUES ('1','6.9.2022','20','17','1','0');
    INSERT INTO game (MatchDay,date,HomeTeam,GuestTeam,GoalsHomeTeam,GoalsGuestTeam)
    VALUES ('1','6.9.2022','1','200','4','1');";

try {
    $sconnction->exec($InsertG);
    echo "Daten eingefügt Group.<br>";
} catch (PDOException $e) {
    echo "Insertion failed: " . $e->getMessage();
}

$insertS = "
    INSERT INTO stadium(OWNER,CAPACITY,StadiumName)
    VALUES('9','75024','Alianz Arena');
    INSERT INTO stadium(OWNER,CAPACITY,StadiumName)
    VALUES('1','54726','Stadio Diego Armando Maradona');";
try {
    $sconnction->exec($InsertS);
    echo "Daten eingefügt Stadion.<br>";
} catch (PDOException $e) {
    echo "Insertion failed: " . $e->getMessage();
?>