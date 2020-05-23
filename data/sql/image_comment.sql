create table image_comment
(
	id int auto_increment,
	comment text null,
	created_at int null,
	image_id int null,
	user_id int null,
	constraint image_comment_pk
		primary key (id)
);

