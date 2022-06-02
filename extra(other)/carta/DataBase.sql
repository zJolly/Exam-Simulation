CREATE DATABASE dbecommerce;

USE dbecommerce
CREATE TABLE tblUtenti(
	cf VARCHAR(16) not null,
	nome VARCHAR(15) not null,
	cognome VARCHAR(30) not null,
	eta INT(2) not null,
	datan DATE,
	sex CHAR(1) not null,
	email VARCHAR(30) not null,
	password VARCHAR(15) not null,
	indirizzo VARCHAR(100) not null,
	numcell INT(10),
	reddito INT(8),
	PRIMARY KEY(cf),
);

CREATE TABLE tblCarta(
	ncc INT(16) PRIMARY KEY,
	scc DATE,
	nomet VARCHAR(15),
	cognomet VARCHAR(30)
);

CREATE TABLE tblestrattoconto(
	ct INT(16) PRIMARY KEY,
	datap DATE,
	nomep VARCHAR(20),
	spesas REAL(10),
	FOREIGN KEY(ct) REFERENCES tblCarta(ncc) ON DELETE RESTRICT ON UPDATE RESTRICT //chiave esterna
);

CREATE TABLE tblpromozioni(
	codepromo INT(20) PRIMARY KEY,
	prezzo REAL(5),
	descrizione VARCHAR(150),
	datain DATE,
	datafin DATE
);

