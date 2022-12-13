create database biblioteka;

create table klienci(
	id_klienta integer Primary Key,
	imie VARCHAR(20), 
	nazwisko VARCHAR(30),
	PESEL VARCHAR(11),
	klasa integer(1)
);
create table ksiazki(
	id_ksiazki integer Primary Key,
	tytul VARCHAR(30), 
	autor VARCHAR(50),
	rok_wydania integer(4),
);
create table wyporzyczenia(
	id_wyp integer Primary Key,
	data_wyp DATE, 
	data_od DATE,
	id_klienta integer,
	id_ksiazki integer
	Foreign Key(id_klienta) References klienci(id_klienta),
	Foreign Key(id_ksiazki) References ksiazki(id_ksiazki)
);