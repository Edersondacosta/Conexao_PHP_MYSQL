create database senac;

CREATE TABLE `user` (
  `ID` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `setor` varchar(50) DEFAULT NULL
);

insert into user values (null, "ederson", "ederson", "adm");
insert into user values (null, "joao", "joao", "user");