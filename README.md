# DAIOFHP-PHP-MySQL-Ovn-Shoutbox
Definition av informationen och funktionerna hos programvaran. PHP-MySQL-övning: shoutbox

# Instruktioner:

PHP-MySQL övning 1 - Shoutbox
Förverkliga shoutbox-/kommenterings applikation där kommentarerna sparas i databasen och skrivs ut på sidan. Gör en mapp med namnet shoutbox där du sparar index.php, db_connect.php och möjliga andra filer. Då du är klar spara också SQL-dump på tabellen i mappen, zippa och lämna in.
Databas
Gör en tabell shoutbox med följande fält i phpmyadmin.

`````
shoutbox
id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY
username VARCHAR(20)
användarnamn
comment TEXT
kommentar, lång text
time TIMESTAMP
tid för inlägg
active TINYINT(1)
“boolean”, 0 eller 1
````

HTML
Förverkliga formulär som skickar användarnamn och kommentaren.
PHP-Mysql 
Gör formulärhanteraren
Gör och kör INSERT queryn
Ta kontakt till databasen (db_connect.php)
Hämta alla kommentarer från tabellen med SELECT och skriv ut på sidan.
Ordna så att senaste kommentaren kommer överst
ex.
user: Paul 
tid: 24.8.2018 kl. 12:20
kommentar:
Min kommentar text
Mvh. Paul
Snygga upp utskriften
Skriv ut vem (username) som skrivit kommentaren och när (time).
Tillägg radbyten till kommentarerna med nl2br funktionen.
Hur kollar du om tabellen är tom? Skriv ut ”inga kommentarer” ifall tabellen inte har data.
Snygga upp sidan med CSS
