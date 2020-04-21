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

INSERT INTO `book` (`book_id`, `name`, `author`) VALUES ('1', 'Software Engineering', 'Ian Sommervile');
INSERT INTO `book` (`book_id`, `name`, `author`) VALUES ('2', 'The Art of War', 'Sun Tzu');
INSERT INTO `book` (`book_id`, `name`, `author`) VALUES ('3', 'Narutoh', 'Masasih Sensei');
INSERT INTO `rent` (`id`, `book_id`, `rent_datetime`, `duration`, `return_datetime`) VALUES ('1', '1', NULL, '1', 'available');
INSERT INTO `rent` (`id`, `book_id`, `rent_datetime`, `duration`, `return_datetime`) VALUES ('2', '2', NULL, '5', 'Rented until 10 April 2019');
INSERT INTO `rent` (`id`, `book_id`, `rent_datetime`, `duration`, `return_datetime`) VALUES ('3', '3', NULL, '1', 'available');


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

