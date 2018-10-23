<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Instalacja</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	require 'vendor/autoload.php';
    
    use Config\Database\DBConfig as DB;
	use Config\Database\DBConnection as DBConnection;
    
	DBConnection::setDBConnection(DB::$user,DB::$password, 
                DB::$hostname, DB::$databaseType, DB::$port);	
    try {
        $pdo =  DBConnection::getHandle();
    }catch(\PDOException $e){
        echo \Config\Database\DBErrorName::$connection;
        exit(1);
	}    
    /*
        usunięcie starych tabel    
    */
         $query = 'DROP TABLE IF EXISTS `'.DB::$tableHistoria_ceny.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableHistoria_ceny;
	}   
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableNieruchomosc_wyposazenie.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableNieruchomosc_wyposazenie;
	}        
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableWyposazenie.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableWyposazenie;
	}        
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableKategoria.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableKategoria;
	}    
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableMagazyny.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableMagazyny;
	}    
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableDomy.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableDomy;
	}    
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableMieszkania.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableMieszkania;
	}    
    
     $query = 'DROP TABLE IF EXISTS `'.DB::$tableDzialki.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableDzialki;
	}
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableBiura.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableBiura;
	}
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableNieruchomosc_sprzedaz.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableNieruchomosc_sprzedaz;
	}    
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableUzytkownik.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableUzytkownik;
	}    
    
     $query = 'DROP TABLE IF EXISTS `'.DB::$tableTransakcja.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableTransakcja;
	}    
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableKlient.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableKlient;
	}    
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tablePracownik.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tablePracownik;
	}    
    
   
    
    
    
    /*
        tworzenie tabeli Pracownik
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tablePracownik.'` (
		`'.DB\Pracownik::$ID_pracownik.'` INT NOT NULL AUTO_INCREMENT,
		`'.DB\Pracownik::$Imie_pracownik.'` VARCHAR(50) NOT NULL,
        `'.DB\Pracownik::$Nazwisko_pracownik.'` VARCHAR(50) NOT NULL,
        `'.DB\Pracownik::$Telefon_pracownik.'` VARCHAR(11) NOT NULL,
        `'.DB\Pracownik::$Mail_pracownik.'` VARCHAR(50) NOT NULL,
        `'.DB\Pracownik::$Stanowisko.'` VARCHAR(50) NOT NULL,
        `'.DB\Pracownik::$Aktywny.'` INT NULL,
		PRIMARY KEY ('.DB\Pracownik::$ID_pracownik.')) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tablePracownik;
	}	
    /*
        tworzenie tabeli Klient
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableKlient.'` (
		`'.DB\Klient::$ID_klient.'` INT NOT NULL AUTO_INCREMENT,
		`'.DB\Klient::$Imie_klient.'` VARCHAR(50) NOT NULL,
        `'.DB\Klient::$Nazwisko_klient.'` VARCHAR(50) NOT NULL,
        `'.DB\Klient::$Ulica.'` VARCHAR(50) NULL,
        `'.DB\Klient::$Dom.'` INT NULL,
        `'.DB\Klient::$Lokal.'` INT NULL,
        `'.DB\Klient::$Kod_pocztowy.'` CHAR(6) NOT NULL,
        `'.DB\Klient::$Miasto.'` VARCHAR(50) NOT NULL,
        `'.DB\Klient::$Telefon.'` VARCHAR(50) NOT NULL,
        `'.DB\Klient::$Mail.'` VARCHAR(50) NOT NULL,
        `'.DB\Klient::$ID_pracownik.'` INT NULL,
		PRIMARY KEY ('.DB\Klient::$ID_klient.'),
        FOREIGN KEY ('.DB\Klient::$ID_pracownik.') REFERENCES '.DB::$tablePracownik.'('.DB\Pracownik::$ID_pracownik.') ON DELETE CASCADE) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableKlient;
	}
    /*
        tworzenie tabeli Transakcja
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableTransakcja.'` (
		`'.DB\Transakcja::$ID_transakcja.'` INT NOT NULL AUTO_INCREMENT,
        `'.DB\Transakcja::$Data_sprzedazy.'` VARCHAR(50) NOT NULL,
        `'.DB\Transakcja::$Prowizja.'` DOUBLE NOT NULL,
        `'.DB\Transakcja::$Cena_sprzedaz.'` DOUBLE NOT NULL,
        `'.DB\Transakcja::$ID_nieruchomosc.'` INT NOT NULL,
        `'.DB\Transakcja::$ID_pracownik.'` INT NOT NULL,
        `'.DB\Transakcja::$ID_klient.'` INT NOT NULL,
        `'.DB\Transakcja::$Uwagi.'` TEXT NOT NULL,        
		PRIMARY KEY ('.DB\Transakcja::$ID_transakcja.'),
        FOREIGN KEY ('.DB\Transakcja::$ID_pracownik.') REFERENCES '.DB::$tablePracownik.'('.DB\Pracownik::$ID_pracownik.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Transakcja::$ID_klient.') REFERENCES '.DB::$tableKlient.'('.DB\Klient::$ID_klient.') ON DELETE CASCADE) ENGINE=InnoDB;';    
	try
	{        
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableTransakcja;
	}	
    /*
        tworzenie tabeli Uzytkownik
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableUzytkownik.'` (
		`'.DB\Uzytkownik::$ID_uzytkownik.'` INT NOT NULL AUTO_INCREMENT,
        `'.DB\Uzytkownik::$Login.'` VARCHAR(50) NOT NULL,
        `'.DB\Uzytkownik::$Password.'` VARCHAR(50) NOT NULL,
        `'.DB\Uzytkownik::$ID_pracownik.'` INT NULL,
        `'.DB\Uzytkownik::$ID_klient.'` INT NULL,   
		PRIMARY KEY ('.DB\Uzytkownik::$ID_uzytkownik.'),
        FOREIGN KEY ('.DB\Uzytkownik::$ID_pracownik.') REFERENCES '.DB::$tablePracownik.'('.DB\Pracownik::$ID_pracownik.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Uzytkownik::$ID_klient.') REFERENCES '.DB::$tableKlient.'('.DB\Klient::$ID_klient.') ON DELETE CASCADE) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableUzytkownik;
	}	
    /*
        tworzenie tabeli Nieruchomosc_sprzedaz
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableNieruchomosc_sprzedaz.'` (
		`'.DB\Nieruchomosc_sprzedaz::$ID_nieruchomosc_s.'` INT NOT NULL AUTO_INCREMENT,
        `'.DB\Nieruchomosc_sprzedaz::$Data_wystawienia.'` DATE NOT NULL,
        `'.DB\Nieruchomosc_sprzedaz::$Adres_nieruchomosc.'` VARCHAR(100) NOT NULL,
        `'.DB\Nieruchomosc_sprzedaz::$Miasto.'` VARCHAR(50) NOT NULL,
        `'.DB\Nieruchomosc_sprzedaz::$Cena.'` DOUBLE NOT NULL,   
        `'.DB\Nieruchomosc_sprzedaz::$Cena_m2.'` DOUBLE NOT NULL,  
        `'.DB\Nieruchomosc_sprzedaz::$ID_klient_wlasciciel.'` INT NOT NULL,  
        `'.DB\Nieruchomosc_sprzedaz::$Powierzchnia_m2.'` DOUBLE NOT NULL,  
        `'.DB\Nieruchomosc_sprzedaz::$Status_nieruchomosc.'` INT NOT NULL,  
		PRIMARY KEY ('.DB\Nieruchomosc_sprzedaz::$ID_nieruchomosc_s.'),
        FOREIGN KEY ('.DB\Nieruchomosc_sprzedaz::$ID_klient_wlasciciel.') REFERENCES '.DB::$tableKlient.'('.DB\Klient::$ID_klient.') ON DELETE CASCADE) ENGINE=InnoDB;';    
	try
	{        
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableNieruchomosc_sprzedaz;
	}	
     /*
        tworzenie tabeli Biura
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableBiura.'` (
		`'.DB\Biura::$ID_nieruchomosc.'` INT NOT NULL,
        `'.DB\Biura::$Klimatyzacja.'` VARCHAR(11) NULL,
        `'.DB\Biura::$Wentylacja_wymuszona.'` VARCHAR(11) NULL,
        `'.DB\Biura::$Otwierane_okna.'` VARCHAR(11) NULL,
        `'.DB\Biura::$Podnoszone_podlogi.'` VARCHAR(11) NULL,
        `'.DB\Biura::$Podwieszane_sufity.'` VARCHAR(11) NULL,
        `'.DB\Biura::$Swiatlowod.'` VARCHAR(11) NULL,
        `'.DB\Biura::$Okablowanie_komputerowe.'` VARCHAR(11) NULL,
        `'.DB\Biura::$Okablowanie_elektryczne.'` VARCHAR(11) NULL,
        `'.DB\Biura::$Okablowanie_telefoniczne.'` VARCHAR(11) NULL,
        `'.DB\Biura::$Biura_opis.'` TEXT NOT NULL,
		PRIMARY KEY ('.DB\Biura::$ID_nieruchomosc.'),
        FOREIGN KEY ('.DB\Biura::$ID_nieruchomosc.') REFERENCES '.DB::$tableNieruchomosc_sprzedaz.'('.DB\Nieruchomosc_sprzedaz::$ID_nieruchomosc_s.') ON DELETE CASCADE) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableBiura;
	}	
    /*
        tworzenie tabeli Dzialki
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableDzialki.'` (
		`'.DB\Dzialki::$ID_nieruchomosc.'` INT NOT NULL,
        `'.DB\Dzialki::$Dzialka_narozna.'` VARCHAR(11) NOT NULL,
        `'.DB\Dzialki::$Ksztalt_dzialki.'` VARCHAR(50) NOT NULL,
        `'.DB\Dzialki::$Pozwolenie_budowa.'` VARCHAR(11) NOT NULL,
        `'.DB\Dzialki::$Miejscowy_plan_zagospodarowania.'` VARCHAR(11) NOT NULL,
        `'.DB\Dzialki::$Warunki_zabudowy.'` VARCHAR(50) NOT NULL,  
        `'.DB\Dzialki::$Studium.'` VARCHAR(11) NOT NULL, 
        `'.DB\Dzialki::$Dzialki_opis.'` TEXT NOT NULL,
		PRIMARY KEY ('.DB\Dzialki::$ID_nieruchomosc.'),
        FOREIGN KEY ('.DB\Dzialki::$ID_nieruchomosc.') REFERENCES '.DB::$tableNieruchomosc_sprzedaz.'('.DB\Nieruchomosc_sprzedaz::$ID_nieruchomosc_s.') ON DELETE CASCADE) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableDzialki;
	}
     /*
        tworzenie tabeli Mieszkania
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableMieszkania.'` (
		`'.DB\Mieszkania::$ID_nieruchomosc.'` INT NOT NULL,
        `'.DB\Mieszkania::$Powierzchnia_salonu.'` DOUBLE NULL,
        `'.DB\Mieszkania::$Typ_kuchni.'` VARCHAR(50) NOT NULL,
        `'.DB\Mieszkania::$Powierzchnia_kuchni.'` DOUBLE NULL,
        `'.DB\Mieszkania::$Wysokosc_pomieszczen.'` INT NULL,
        `'.DB\Mieszkania::$Typ_okien.'` VARCHAR(50) NULL,  
        `'.DB\Mieszkania::$Pokoje_ilosc.'` INT NOT NULL, 
        `'.DB\Mieszkania::$Lazienki_ilosc.'` INT NOT NULL,
        `'.DB\Mieszkania::$Pietro.'` INT NOT NULL,
        `'.DB\Mieszkania::$Mieszkania_opis.'` TEXT NOT NULL,
		PRIMARY KEY ('.DB\Mieszkania::$ID_nieruchomosc.'),
        FOREIGN KEY ('.DB\Mieszkania::$ID_nieruchomosc.') REFERENCES '.DB::$tableNieruchomosc_sprzedaz.'('.DB\Nieruchomosc_sprzedaz::$ID_nieruchomosc_s.') ON DELETE CASCADE) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableMieszkania;
	}	
    /*
        tworzenie tabeli Domy
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableDomy.'` (
		`'.DB\Domy::$ID_nieruchomosc.'` INT NOT NULL,
        `'.DB\Domy::$Powierzchnia_salon.'` DOUBLE NULL,
        `'.DB\Domy::$Typ_kuchni.'` VARCHAR(50) NOT NULL,
        `'.DB\Domy::$Powierzchnia_kuchni.'` DOUBLE NULL,
        `'.DB\Domy::$Droga_dojazdowa.'` VARCHAR(11) NULL, 
        `'.DB\Domy::$Pokoje.'` INT NOT NULL, 
        `'.DB\Domy::$Lazienki.'` INT NOT NULL,
        `'.DB\Domy::$Garaz.'` VARCHAR(11) NOT NULL,
        `'.DB\Domy::$Domy_opis.'` TEXT NOT NULL,
		PRIMARY KEY ('.DB\Domy::$ID_nieruchomosc.'),
        FOREIGN KEY ('.DB\Domy::$ID_nieruchomosc.') REFERENCES '.DB::$tableNieruchomosc_sprzedaz.'('.DB\Nieruchomosc_sprzedaz::$ID_nieruchomosc_s.') ON DELETE CASCADE) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableDomy;
	}	
    /*
        tworzenie tabeli Magazyny
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableMagazyny.'` (
		`'.DB\Magazyny::$ID_nieruchomosc.'` INT NOT NULL,
        `'.DB\Magazyny::$Wysokosc_skladowania.'` INT NOT NULL,
        `'.DB\Magazyny::$Siatka_slupow.'` VARCHAR(11) NULL,
        `'.DB\Magazyny::$Posadzka.'` VARCHAR(50) NULL,
        `'.DB\Magazyny::$Nosnosc_posadzki_kg_m2.'` DOUBLE NULL,
        `'.DB\Magazyny::$Doki.'` VARCHAR(11) NULL, 
        `'.DB\Magazyny::$Rampy.'` VARCHAR(11) NULL,
        `'.DB\Magazyny::$Brama.'` VARCHAR(11) NULL,
        `'.DB\Magazyny::$Wentylacja.'` VARCHAR(11) NULL,
        `'.DB\Magazyny::$Oswietlenie.'` VARCHAR(11) NULL,
        `'.DB\Magazyny::$Swietliki.'` VARCHAR(11) NULL,
        `'.DB\Magazyny::$Suwnice.'` VARCHAR(11) NULL,
        `'.DB\Magazyny::$Zaplecze_socjalne.'` VARCHAR(11) NULL,
        `'.DB\Magazyny::$Magazyny_opis.'` TEXT NOT NULL,
		PRIMARY KEY ('.DB\Magazyny::$ID_nieruchomosc.'),
        FOREIGN KEY ('.DB\Magazyny::$ID_nieruchomosc.') REFERENCES '.DB::$tableNieruchomosc_sprzedaz.'('.DB\Nieruchomosc_sprzedaz::$ID_nieruchomosc_s.') ON DELETE CASCADE) ENGINE=InnoDB;';     
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{        
		echo \Config\Database\DBErrorName::$create_table.DB::$tableMagazyny;
	}	
   
     /*
        tworzenie tabeli Kategoria
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableKategoria.'` (
		`'.DB\Kategoria::$ID_kategoria.'` INT NOT NULL AUTO_INCREMENT,
        `'.DB\Kategoria::$Kategoria_nazwa.'` VARCHAR(50) NOT NULL,
		PRIMARY KEY ('.DB\Kategoria::$ID_kategoria.')) ENGINE=InnoDB;'; 
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableKategoria;
	}
    /*
        tworzenie tabeli Wyposazenie
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableWyposazenie.'` (
		`'.DB\Wyposazenie::$ID_wyposazenie.'` INT NOT NULL AUTO_INCREMENT,
        `'.DB\Wyposazenie::$Wyposazenie_nazwa.'` VARCHAR(50) NOT NULL,
        `'.DB\Wyposazenie::$ID_kategoria.'` INT NOT NULL,
		PRIMARY KEY ('.DB\Wyposazenie::$ID_wyposazenie.'),
        FOREIGN KEY ('.DB\Wyposazenie::$ID_kategoria.') REFERENCES '.DB::$tableKategoria.'('.DB\Kategoria::$ID_kategoria.') ON DELETE CASCADE) ENGINE=InnoDB;'; 
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{        
		echo \Config\Database\DBErrorName::$create_table.DB::$tableWyposazenie;
	}
    /*
        tworzenie tabeli Nieruchomosc_wyposazenie
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableNieruchomosc_wyposazenie.'` (
		`'.DB\Nieruchomosc_wyposazenie::$ID_nieruchomosc_wyposazenie.'` INT NOT NULL AUTO_INCREMENT,
        `'.DB\Nieruchomosc_wyposazenie::$ID_nieruchomosc_s.'` INT NOT NULL,
        `'.DB\Nieruchomosc_wyposazenie::$ID_wyposazenie.'` INT NOT NULL,
		PRIMARY KEY ('.DB\Nieruchomosc_wyposazenie::$ID_nieruchomosc_wyposazenie.'),
        FOREIGN KEY ('.DB\Nieruchomosc_wyposazenie::$ID_nieruchomosc_s.') REFERENCES '.DB::$tableNieruchomosc_sprzedaz.'('.DB\Nieruchomosc_sprzedaz::$ID_nieruchomosc_s.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Nieruchomosc_wyposazenie::$ID_wyposazenie.') REFERENCES '.DB::$tableWyposazenie.'('.DB\Wyposazenie::$ID_wyposazenie.') ON DELETE CASCADE) ENGINE=InnoDB;'; 
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableNieruchomosc_wyposazenie;
	}	
    /*
        tworzenie tabeli Historia_ceny
    */
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableHistoria_ceny.'` (
		`'.DB\Historia_ceny::$ID_historia.'` INT NOT NULL AUTO_INCREMENT,
        `'.DB\Historia_ceny::$Data.'` DATE NOT NULL,
        `'.DB\Historia_ceny::$Cena.'` DOUBLE NOT NULL,
        `'.DB\Historia_ceny::$ID_nieruchomosc_s.'` INT NULL,
		PRIMARY KEY ('.DB\Historia_ceny::$ID_historia.')) ENGINE=InnoDB;'; 
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableHistoria_ceny;
	}
    echo "<b>Instalacja aplikacji zakończona!</b>"
?>
</body>
</html>