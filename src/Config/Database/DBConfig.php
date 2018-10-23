<?php
	namespace Config\Database;

	class DBConfig{
        //nazwa bazy danych
        public static $portlocal ='';
        public static $databaseName = 'msdb';
        //dane dostępowe do bazy danych
        public static $hostname = 'localhost';
        public static $databaseType = 'mysql';
        public static $port = '3306';
        public static $user = 'root';
        public static $password = 'lol123';
        //nazwy tabel
		public static $tableBiura = 'Biura';
        public static $tableDomy = 'Domy'; 
        public static $tableDzialki = 'Dzialki';
        public static $tableHistoria_ceny = 'Historia_ceny'; 
        public static $tableKategoria = 'Kategoria';
        public static $tableKlient = 'Klient'; 
        public static $tableMagazyny = 'Magazyny';
        public static $tableMieszkania = 'Mieszkania'; 
        public static $tableNieruchomosc_sprzedaz = 'Nieruchomosc_sprzedaz';
        public static $tableNieruchomosc_wyposazenie = 'Nieruchomosc_wyposazenie'; 
        public static $tablePracownik = 'Pracownik';
        public static $tableTransakcja = 'Transakcja'; 
        public static $tableUzytkownik = 'Uzytkownik';
        public static $tableWyposazenie = 'Wyposazenie'; 

               
        
	}
