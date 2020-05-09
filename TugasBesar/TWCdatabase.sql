CREATE TABLE IF NOT EXISTS campaign (
  idCampaign int(10) NOT NULL,
  namaCampaign varchar(25) NOT NULL,
  idFundraiser int(10) NOT NULL,
  tglMulai date NOT NULL,
  tglSelesai date NOT NULL,
  fundTarget int(20) NOT NULL,
  jumlahPencairanDana decimal(13,2) NOT NULL,
   totalDonasi decimal(13,2) NOT NULL,
  story varchar(250) NOT NULL,
  type varchar(50) NOT NULL,
  ktp int(30) NOT NULL,
  phone int(15) NOT NULL,
  image LONGBLOB NOT NULL,
  campaignLink varchar(1000),
  address varchar(150) NOT NULL

) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

ALTER TABLE campaign
ADD PRIMARY KEY (idCampaign);

CREATE TABLE IF NOT EXISTS fundraiser (
  idFundraiser int(10) NOT NULL,
  nomorRekening int(12) NOT NULL,
  namaOrganisasi varchar(20) NOT NULL,
  alamatOrganisasi varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

ALTER TABLE fundraiser
  ADD PRIMARY KEY (idFundraiser);

CREATE TABLE IF NOT EXISTS donatur (
  idDonatur int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

ALTER TABLE donatur
  ADD PRIMARY KEY (idDonatur);

CREATE TABLE IF NOT EXISTS User (
  userName varchar(20) NOT NULL,
  namaLengkap varchar(50) NOT NULL,
  email varchar(30) NOT NULL,
  password varchar(20) NOT NULL,
  noHp varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS Donasi (
  idTransaksi int(10) NOT NULL,
  idCampaign int(10) NOT NULL,
  idDonatur int(10) NOT NULL,
  totalDonasi decimal(13,2) NOT NULL,
  tanggalDonasi date NOT NULL,
  statAnonim varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;


ALTER TABLE User
  ADD PRIMARY KEY (userName);

  CREATE  UNIQUE INDEX Cmpgn ON campaign(idCampaign) USING BTREE;
 CREATE  UNIQUE INDEX fnraiser ON fundraiser(idFundraiser) USING BTREE;
  CREATE  UNIQUE INDEX dntr ON donatur(idDonatur) USING BTREE;
   CREATE  UNIQUE INDEX usr ON User(idUser) USING BTREE;
    CREATE  UNIQUE INDEX dnsi ON donasi(idDonasi) USING BTREE;
	CREATE  UNIQUE INDEX statAn ON donasi(statAnonim) USING BITMAP;
----------------------------------------------

ALTER TABLE book
  MODIFY book_id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;

ALTER TABLE rent
  MODIFY id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;

ALTER TABLE rent
ADD CONSTRAINT book_id FOREIGN KEY (book_id) REFERENCES book (book_id);
