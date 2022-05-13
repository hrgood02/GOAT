SET foreign_key_checks = 0;

drop table if exists author;
drop table if exists publisher;
drop table if exists media;
drop table if exists mediaInfo;
drop table if exists mediaAuthor;
drop table if exists mediaPublisher;
drop table if exists writes;
drop table if exists publishes;
drop table if exists contributor;
drop table if exists journals;
drop table if exists contributes;
drop table if exists libraryAccount;
drop table if exists adminAccount;
drop table if exists checksOut;
drop table if exists accesses;
drop table if exists holds;
drop table if exists booklist;
drop table if exists payment;

SET foreign_key_checks = 1;

create table author(
    ID int NOT NULL AUTO_INCREMENT,
    firstName varchar(25),
    lastName varchar(25),
    primary key(ID)
);

create table publisher(
    ID int AUTO_INCREMENT,
    name varchar(30) UNIQUE,
    country varchar(50),
    primary key(ID)
);

create table media(
    ISBN varchar(10),
    title varchar(100),
    copiesOnHand int,
    primary key(ISBN)
);

create table mediaInfo (
	ISBN varchar(10),
    genre varchar(20),
    writtenLanguage varchar(20),
    location varchar(30),
    summary varchar(1000),
    primary key (ISBN),
    foreign key(ISBN) references media(ISBN)
);

create table writes( 
    ISBN varchar(10),
    authorID int,
    primary key(ISBN, authorID),
    foreign key(ISBN) references media(ISBN),
    foreign key(authorID) references author(ID)
);

create table publishes(
    ISBN varchar(10),
    publisherID int,
    year int, 
    primary key(ISBN, publisherID),
    foreign key(ISBN) references media(ISBN),
    foreign key(publisherID) references publisher(ID)
);

create table contributor(
	ID int AUTO_INCREMENT,
    authorName varchar(50),
    primary key(ID)
);

create table journals(
	ISSN varchar(8),
    title varchar(100),
    topic varchar(25),
    primary key(ISSN)
);

create table contributes(
	ISSN varchar(8),
    authorID int,
    yearPublished int,
    primary key(ISSN, authorID),
    foreign key(ISSN) references journals(ISSN),
    foreign key(authorID) references contributor(ID)
);

create table libraryAccount(
    accountNo int,
    firstName varchar(30),
    lastName varchar(30),
    username varchar(25),
    password varchar(20),
    primary key (accountNo)
);

create table adminAccount(
	ID int,
    adminName varchar(20),
    adminPassword varchar(20),
    primary key(ID)
);


create table checksOut(
    ISBN varchar(10),
    accountNo int,
    outDate date,
    dueDate date,
    copyNo int,
    fine numeric(4,2),
    primary key (ISBN, copyNo, accountNo),
    foreign key(ISBN) references media(ISBN),
    foreign key(accountNo) references libraryAccount(accountNo)
);

create table accesses( 
	ISSN varchar(8),
    accountNo int,
    accessDate date,
    endDate date,
    cost numeric(4,2),
    primary key (ISSN, accountNo),
    foreign key (ISSN) references journals(ISSN),
    foreign key (accountNo) references libraryAccount(accountNo)
);

create table holds(
    ISBN varchar(10),
    accountNo int,
    expectedDate date,
    primary key (ISBN, accountNo),
    foreign key(ISBN) references media(ISBN),
    foreign key(accountNo) references libraryAccount(accountNo)
);

create table booklist(
    ISBN varchar(10),
    accountNo int,
    available boolean,
    primary key (ISBN, accountNo),
    foreign key(ISBN) references media(ISBN),
    foreign key(accountNo) references libraryAccount(accountNo)
);

create table payment(
    type varchar(7),
    firstName varchar(25),
    lastName varchar(25),
    cardNo varchar(20),
    cvv int,
    month int,
    year int,
    primary key(cardNo)
);