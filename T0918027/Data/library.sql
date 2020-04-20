SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS book (
  book_id int(11) NOT NULL,
  name varchar(25) NOT NULL,
  author varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS rent (
  id int(11) NOT NULL,
  book_id int(11) NOT NULL,
  rent_datetime date,
  duration int NOT NULL,
  return_datetime varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

ALTER TABLE book
  ADD PRIMARY KEY (book_id);

ALTER TABLE rent
  ADD PRIMARY KEY (id);

ALTER TABLE book
  MODIFY book_id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE rent
  MODIFY id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE rent
ADD CONSTRAINT book_id FOREIGN KEY (book_id) REFERENCES book (book_id);
