create table users
(
	id int auto_increment,
	login varchar(255) null,
	password varchar(255) null,
	constraint users_pk
		primary key (id)
);

create unique index users_login_uindex
	on users (login);

