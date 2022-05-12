insert into author (firstName, lastName) values ("Rick", "Riordan"); #1
insert into author (firstName, lastName) values ("Jane", "Austen"); #2
insert into author (firstName, lastName) values ("Anna", "Quindlen");  #3
insert into author (firstName, lastName) values ("Laura", "Joffe Numeroff"); #4
insert into author (firstName, lastName) values ("Herman", "Melville"); #5


insert into publisher (name, country) values ("Disney-Hyperion", "USA"); #1
insert into publisher (name, country) values ("Scholastic", "USA"); #2
insert into publisher (name, country) values ("Modern Library", "USA"); #3


insert into media values ("0786838655", "Percy Jackson and the Lightning Thief", 4);
insert into media values ("1423103343", "Percy Jackson and the Sea of Monsters", 3);
insert into media values ("0545057043", "Percy Jackson and the Titan's Curse", 2);
insert into media values ("0545174813", "Percy Jackson and the Battle of the Labyrinth", 3);
insert into media values ("1423101472", "Percy Jackson and the Last Olympian", 2);
insert into media values ("0679783261", "Pride and Prejudice", 2);
insert into media values ("0590402331", "If you give a mouse a cookie", 4);
insert into media values ("067978327X", "Moby Dick", 3);


insert into mediaInfo values ("0786838655", "Fiction", "English", "Fantasy", "Twelve-year-old Percy Jackson is on the most dangerous quest of his life. With the help of a satyr and a daughter of Athena, Percy must journey across the United States to catch a thief who has stolen the original weapon of mass destruction — Zeus’ master bolt. Along the way, he must face a host of mythological enemies determined to stop him. Most of all, he must come to terms with a father he has never known, and an Oracle that has warned him of betrayal by a friend.");
insert into mediaInfo values ("1423103343", "Fiction", "English", "Fantasy", "When Thalia’s tree is mysteriously poisoned, the magical borders of Camp Half-Blood begin to fail. Now Percy and his friends have just days to find the only magic item powerful to save the camp before it is overrun by monsters. The catch: they must sail into the Sea of Monsters to find it. Along the way, Percy must stage a daring rescue operation to save his old friend Grover, and he learns a terrible secret about his own family, which makes him question whether being the son of Poseidon is an honor or a curse.");
insert into mediaInfo values ("0545057043", "Fiction", "English", "Fantasy", "When Percy Jackson gets an urgent distress call from his friend Grover, he immediately prepares for battle. He knows he will need his powerful demigod allies at his side, his trusty bronze sword Riptide, and… a ride from his mom. The demigods rush to the rescue to find that Grover has made an important discovery: two powerful half-bloods whose parentage is unknown. But that’s not all that awaits them. The titan lord Kronos has devised his most treacherous plot yet, and the young heroes have just fallen prey.");
insert into mediaInfo values ("0545174813", "Fiction", "English", "Fantasy", "Percy Jackson isn’t expecting freshman orientation to be any fun, but when a mysterious mortal acquaintance appears, pursued by demon cheerleaders, things quickly go from bad to worse. Time is running out for Percy. War between the gods and the Titans is drawing near. Even Camp Half-Blood isn’t safe, as Kronos’ army prepares to invade its once impenetrable borders. To stop them, Percy and his friends must set out on a quest through the Labyrinth — a sprawling underground world with surprises and danger at every turn. Along the way Percy will confront powerful enemies, find out the truth about the lost god Pan, and face the Titan lord Kronos’ most terrible secret. The final war begins… with the Battle of the Labyrinth.");
insert into mediaInfo values ("1423101472", "Fiction", "English", "Fantasy", "All year the half-bloods have been preparing for battle against the Titans, knowing the odds of victory are grim. Kronos’s army is stronger than ever, and with every god and half-blood he recruits, the evil Titan’s power only grows. While the Olympians struggle to contain the rampaging monster Typhon, Kronos begins his advance on New York City, where Mount Olympus stands virtually unguarded. Now it’s up to Percy Jackson and an army of young demigods to stop the Lord of Time. In this momentous final book in the New York Times best-selling Percy Jackson and the Olympians series, the long-awaited prophecy surrounding Percy’s sixteenth birthday unfolds. And as the battle for Western civilization rages on the streets of Manhattan, Percy faces a terrifying suspicion that he may be fighting against his own fate.");
insert into mediaInfo values ("0679783261", "Historical Fiction", "English", "Fiction", "Pride and Prejudice, romantic novel by Jane Austen, published anonymously in three volumes in 1813. A classic of English literature, written with incisive wit and superb character delineation, it centres on the burgeoning relationship between Elizabeth Bennet, the daughter of a country gentleman, and Fitzwilliam Darcy, a rich aristocratic landowner. Upon publication, Pride and Prejudice was well received by critics and readers. The first edition sold out within the first year, and it never went out of print.");
insert into mediaInfo values ("0590402331", "Children's Books", "English", "Children's", "If a hungry little mouse shows up on your doorstep, you might want to give him a cookie. And if you give him a cookie, he'll ask for a glass of milk. He'll want to look in a mirror to make sure he doesn't have a milk mustache, and then he'll ask for a pair of scissors to give himself a trim...");
insert into mediaInfo values ("067978327X", "Adventure Fiction", "English", "Classics", "The novel Moby Dick by Herman Melville is an epic tale of the voyage of the whaling ship the Pequod and its captain, Ahab, who relentlessly pursues the great Sperm Whale (the title character) during a journey around the world. The narrator of the novel is Ishmael, a sailor on the Pequod who undertakes the journey out of his affection for the sea.");


insert into writes values ("0786838655", 1);
insert into writes values ("1423103343", 1);
insert into writes values ("0545057043", 1);
insert into writes values ("0545174813", 1);
insert into writes values ("1423101472", 1);
insert into writes values ("0679783261", 2);  #Jane austen
insert into writes values ("0679783261", 3);  #Anna Quilden
insert into writes values ("0590402331", 4);
insert into writes values ("067978327X", 5);


insert into publishes values ("0786838655", 1, 2006);
insert into publishes values ("1423103343", 1, 2007);
insert into publishes values ("0545057043", 2, 2008);
insert into publishes values ("0545174813", 2, 2009);
insert into publishes values ("1423101472", 1, 2011);
insert into publishes values ("0679783261", 3, 2000);
insert into publishes values ("0590402331", 2, 1985);
insert into publishes values ("067978327X", 3, 2000);


insert into journals values ("20782489", "Applications of Recurrent Neural Network for Biometric Authentication & Anomaly Detection", "Computer Science");

insert into contributor (authorName) values ("Joseph M. Ackerson"); #1
insert into contributor (authorName) values ("Rushit Dave"); #2
insert into contributor (authorName) values ("Naeem Seliya"); #3

insert into contributes values ("20782489", 1, 2021);
insert into contributes values ("20782489", 2, 2021);
insert into contributes values ("20782489", 3, 2021);

INSERT INTO `checksOut`(`ISBN`, `accountNo`, `outDate`, `dueDate`, `copyNo`, `fine`) VALUES ('0545174813','1','2022-04-20','2022-05-04','1','.80');

INSERT INTO `holds`(`ISBN`, `accountNo`, `expectedDate`) VALUES ('0590402331','1','2022-05-19');
INSERT INTO `holds`(`ISBN`, `accountNo`, `expectedDate`) VALUES ('067978327X','1','2022-05-22');

INSERT INTO `booklist`(`ISBN`, `accountNo`, `available`) VALUES ('0679783261','1','1');

#checks out a book
#update media SET copiesOnHand = copiesOnHand - 1 where ISBN = "0590402331";

#select copiesOnHand from media where ISBN = "0590402331";

#checks in a book
#update media SET copiesOnHand = copiesOnHand + 1 where ISBN = "0590402331";

#select copiesOnHand from media where ISBN = "0590402331";
