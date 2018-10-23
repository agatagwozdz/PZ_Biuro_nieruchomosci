--
-- Struktura tabeli dla tabeli `biura`
--

CREATE TABLE `biura` (
  `id_nieruchomosc` int(11) NOT NULL,
  `Klimatyzacja` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Wentylacja_wymuszona` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Otwierane_okna` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Podnoszone_podlogi` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Podwieszane_sufity` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Swiatlowod` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Okablowanie_komputerowe` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Okablowanie_elektryczne` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Okablowanie_telefoniczne` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Biura_opis` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `domy`
--

CREATE TABLE `domy` (
  `ID_nieruchomosc` int(11) NOT NULL,
  `Powierzchnia_salon` double DEFAULT NULL,
  `Typ_kuchni` varchar(50) COLLATE utf8_bin NOT NULL,
  `Powierzchnia_kuchni` double DEFAULT NULL,
  `Droga_dojazdowa` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Pokoje` int(11) NOT NULL,
  `Lazienki` int(11) NOT NULL,
  `Garaz` varchar(11) COLLATE utf8_bin NOT NULL,
  `Domy_opis` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `dzialki`
--

CREATE TABLE `dzialki` (
  `id_nieruchomosc` int(11) NOT NULL,
  `Dzialka_narozna` varchar(11) COLLATE utf8_bin NOT NULL,
  `Ksztalt_dzialki` varchar(50) COLLATE utf8_bin NOT NULL,
  `Pozwolenie_budowa` varchar(11) COLLATE utf8_bin NOT NULL,
  `Miejscowy_plan_zagospodarowania` varchar(11) COLLATE utf8_bin NOT NULL,
  `Warunki_zabudowy` varchar(50) COLLATE utf8_bin NOT NULL,
  `Studium` varchar(11) COLLATE utf8_bin NOT NULL,
  `Dzialki_opis` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `historia_ceny`
--

CREATE TABLE `historia_ceny` (
  `ID_historia` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Cena` double NOT NULL,
  `ID_nieruchomosc_s` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `kategoria`
--

CREATE TABLE `kategoria` (
  `ID_kategoria` int(11) NOT NULL,
  `Kategoria_nazwa` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `ID_klient` int(11) NOT NULL,
  `Imie_klient` varchar(50) COLLATE utf8_bin NOT NULL,
  `Nazwisko_klient` varchar(50) COLLATE utf8_bin NOT NULL,
  `Ulica` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Dom` int(11) DEFAULT NULL,
  `Lokal` int(11) DEFAULT NULL,
  `Kod_pocztowy` char(6) COLLATE utf8_bin NOT NULL,
  `Miasto` varchar(50) COLLATE utf8_bin NOT NULL,
  `Telefon` varchar(50) COLLATE utf8_bin NOT NULL,
  `Mail` varchar(50) COLLATE utf8_bin NOT NULL,
  `ID_pracownik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `magazyny`
--

CREATE TABLE `magazyny` (
  `id_nieruchomosc` int(11) NOT NULL,
  `Wysokosc_skladowania` int(11) NOT NULL,
  `Siatka_slupow` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Posadzka` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Nosnosc_posadzki_kg_m2` double DEFAULT NULL,
  `Doki` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Rampy` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Brama` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Wentylacja` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Oswietlenie` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Swietliki` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Suwnice` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Zaplecze_socjalne` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `Magazyny_opis` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `mieszkania`
--

CREATE TABLE `mieszkania` (
  `ID_nieruchomosc` int(11) NOT NULL,
  `Powierzchnia_salonu` double DEFAULT NULL,
  `Typ_kuchni` varchar(50) COLLATE utf8_bin NOT NULL,
  `Powierzchnia_kuchni` double DEFAULT NULL,
  `Wysokosc_pomieszczen` int(11) DEFAULT NULL,
  `Typ_okien` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Pokoje_ilosc` int(11) NOT NULL,
  `Lazienki_ilosc` int(11) NOT NULL,
  `Pietro` int(11) NOT NULL,
  `Mieszkania_opis` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `nieruchomosc_sprzedaz`
--

CREATE TABLE `nieruchomosc_sprzedaz` (
  `ID_nieruchomosc_s` int(11) NOT NULL,
  `Data_wystawienia` date NOT NULL,
  `Adres_nieruchomosc` varchar(100) COLLATE utf8_bin NOT NULL,
  `Miasto` varchar(50) COLLATE utf8_bin NOT NULL,
  `Cena` double NOT NULL,
  `Cena_m2` double NOT NULL,
  `ID_klient_wlasciciel` int(11) NOT NULL,
  `Powierzchnia_m2` double NOT NULL,
  `Status_nieruchomosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `nieruchomosc_wyposazenie`
--

CREATE TABLE `nieruchomosc_wyposazenie` (
  `ID_nieruchomosc_wyposazenie` int(11) NOT NULL,
  `ID_nieruchomosc_s` int(11) NOT NULL,
  `ID_wyposazenie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `pracownik`
--

CREATE TABLE `pracownik` (
  `ID_pracownik` int(11) NOT NULL,
  `Imie_pracownik` varchar(50) COLLATE utf8_bin NOT NULL,
  `Nazwisko_pracownik` varchar(50) COLLATE utf8_bin NOT NULL,
  `Telefon_pracownik` varchar(11) COLLATE utf8_bin NOT NULL,
  `Mail_pracownik` varchar(50) COLLATE utf8_bin NOT NULL,
  `Stanowisko` varchar(50) COLLATE utf8_bin NOT NULL,
  `Aktywny` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `transakcja`
--

CREATE TABLE `transakcja` (
  `ID_transakcja` int(11) NOT NULL,
  `Data_sprzedazy` varchar(50) COLLATE utf8_bin NOT NULL,
  `Prowizja` double NOT NULL,
  `Cena_sprzedaz` double NOT NULL,
  `ID_nieruchomosc` int(11) NOT NULL,
  `ID_pracownik` int(11) NOT NULL,
  `ID_klient` int(11) NOT NULL,
  `Uwagi` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `ID_uzytkownik` int(11) NOT NULL,
  `Login` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` varchar(50) COLLATE utf8_bin NOT NULL,
  `ID_pracownik` int(11) DEFAULT NULL,
  `ID_klient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Struktura tabeli dla tabeli `wyposazenie`
--

CREATE TABLE `wyposazenie` (
  `ID_wyposazenie` int(11) NOT NULL,
  `Wyposazenie_nazwa` varchar(50) COLLATE utf8_bin NOT NULL,
  `ID_kategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE `biura`
  ADD PRIMARY KEY (`id_nieruchomosc`);

ALTER TABLE `domy`
  ADD PRIMARY KEY (`ID_nieruchomosc`);

ALTER TABLE `dzialki`
  ADD PRIMARY KEY (`id_nieruchomosc`);

ALTER TABLE `historia_ceny`
  ADD PRIMARY KEY (`ID_historia`);

ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`ID_kategoria`);

ALTER TABLE `klient`
  ADD PRIMARY KEY (`ID_klient`),
  ADD KEY `ID_pracownik` (`ID_pracownik`);

ALTER TABLE `magazyny`
  ADD PRIMARY KEY (`id_nieruchomosc`);

ALTER TABLE `mieszkania`
  ADD PRIMARY KEY (`ID_nieruchomosc`);

ALTER TABLE `nieruchomosc_sprzedaz`
  ADD PRIMARY KEY (`ID_nieruchomosc_s`),
  ADD KEY `ID_klient_wlasciciel` (`ID_klient_wlasciciel`);

ALTER TABLE `nieruchomosc_wyposazenie`
  ADD PRIMARY KEY (`ID_nieruchomosc_wyposazenie`),
  ADD KEY `ID_nieruchomosc_s` (`ID_nieruchomosc_s`),
  ADD KEY `ID_wyposazenie` (`ID_wyposazenie`);

ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`ID_pracownik`);

ALTER TABLE `transakcja`
  ADD PRIMARY KEY (`ID_transakcja`),
  ADD KEY `ID_pracownik` (`ID_pracownik`),
  ADD KEY `ID_klient` (`ID_klient`);

ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`ID_uzytkownik`),
  ADD KEY `ID_pracownik` (`ID_pracownik`),
  ADD KEY `ID_klient` (`ID_klient`);

ALTER TABLE `wyposazenie`
  ADD PRIMARY KEY (`ID_wyposazenie`),
  ADD KEY `ID_kategoria` (`ID_kategoria`);

ALTER TABLE `historia_ceny`
  MODIFY `ID_historia` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `kategoria`
  MODIFY `ID_kategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `klient`
  MODIFY `ID_klient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `nieruchomosc_sprzedaz`
  MODIFY `ID_nieruchomosc_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `nieruchomosc_wyposazenie`
  MODIFY `ID_nieruchomosc_wyposazenie` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pracownik`
  MODIFY `ID_pracownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `transakcja`
  MODIFY `ID_transakcja` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `uzytkownik`
  MODIFY `ID_uzytkownik` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `wyposazenie`
  MODIFY `ID_wyposazenie` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

ALTER TABLE `biura`
  ADD CONSTRAINT `biura_ibfk_1` FOREIGN KEY (`id_nieruchomosc`) REFERENCES `nieruchomosc_sprzedaz` (`ID_nieruchomosc_s`) ON DELETE CASCADE;

ALTER TABLE `domy`
  ADD CONSTRAINT `domy_ibfk_1` FOREIGN KEY (`ID_nieruchomosc`) REFERENCES `nieruchomosc_sprzedaz` (`ID_nieruchomosc_s`) ON DELETE CASCADE;

ALTER TABLE `dzialki`
  ADD CONSTRAINT `dzialki_ibfk_1` FOREIGN KEY (`id_nieruchomosc`) REFERENCES `nieruchomosc_sprzedaz` (`ID_nieruchomosc_s`) ON DELETE CASCADE;

ALTER TABLE `klient`
  ADD CONSTRAINT `klient_ibfk_1` FOREIGN KEY (`ID_pracownik`) REFERENCES `pracownik` (`ID_pracownik`) ON DELETE CASCADE;

ALTER TABLE `magazyny`
  ADD CONSTRAINT `magazyny_ibfk_1` FOREIGN KEY (`id_nieruchomosc`) REFERENCES `nieruchomosc_sprzedaz` (`ID_nieruchomosc_s`) ON DELETE CASCADE;

ALTER TABLE `mieszkania`
  ADD CONSTRAINT `mieszkania_ibfk_1` FOREIGN KEY (`ID_nieruchomosc`) REFERENCES `nieruchomosc_sprzedaz` (`ID_nieruchomosc_s`) ON DELETE CASCADE;

ALTER TABLE `nieruchomosc_sprzedaz`
  ADD CONSTRAINT `nieruchomosc_sprzedaz_ibfk_1` FOREIGN KEY (`ID_klient_wlasciciel`) REFERENCES `klient` (`ID_klient`) ON DELETE CASCADE;

ALTER TABLE `nieruchomosc_wyposazenie`
  ADD CONSTRAINT `nieruchomosc_wyposazenie_ibfk_1` FOREIGN KEY (`ID_nieruchomosc_s`) REFERENCES `nieruchomosc_sprzedaz` (`ID_nieruchomosc_s`) ON DELETE CASCADE,
  ADD CONSTRAINT `nieruchomosc_wyposazenie_ibfk_2` FOREIGN KEY (`ID_wyposazenie`) REFERENCES `wyposazenie` (`ID_wyposazenie`) ON DELETE CASCADE;

ALTER TABLE `transakcja`
  ADD CONSTRAINT `transakcja_ibfk_1` FOREIGN KEY (`ID_pracownik`) REFERENCES `pracownik` (`ID_pracownik`) ON DELETE CASCADE,
  ADD CONSTRAINT `transakcja_ibfk_2` FOREIGN KEY (`ID_klient`) REFERENCES `klient` (`ID_klient`) ON DELETE CASCADE;

ALTER TABLE `uzytkownik`
  ADD CONSTRAINT `uzytkownik_ibfk_1` FOREIGN KEY (`ID_pracownik`) REFERENCES `pracownik` (`ID_pracownik`) ON DELETE CASCADE,
  ADD CONSTRAINT `uzytkownik_ibfk_2` FOREIGN KEY (`ID_klient`) REFERENCES `klient` (`ID_klient`) ON DELETE CASCADE;

ALTER TABLE `wyposazenie`
  ADD CONSTRAINT `wyposazenie_ibfk_1` FOREIGN KEY (`ID_kategoria`) REFERENCES `kategoria` (`ID_kategoria`) ON DELETE CASCADE;
COMMIT;