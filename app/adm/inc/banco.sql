/**
 * Author:  Daniel
 * Created: 05/07/2016
 */

drop table users;
create table usuarios(
 id int(11) primary key AUTO_INCREMENT,
email varchar(55) unique not null,
senha varchar(32),
nivel enum('1','2','3')
);

insert into usuarios values (null, "daniel.sousa@msn.com","76ce16e945e77a78ad3d1862759dc6b30", "1")
