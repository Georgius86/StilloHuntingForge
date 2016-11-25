drop database if exists noz;
create database noz character set utf8;
use noz;

create table administrator(
sifra int not null primary key auto_increment,
korisnik varchar(50) not null,
lozinka char(32) not null,
ime varchar(50),
prezime varchar(50)
)engine=innodb;

#insert u operateri
insert into operater (korisnik,lozinka,ime,prezime) 
values ('ddordevic',md5('ddd'),'Ðorðe','Ðorðeviæ');