create table employee (
    id int(11) not null auto_increment,
    first_name varchar(255) null default '',
    last_name varchar(255) null default '',
    middle_name varchar(255) null default '',
    primary key (id)
)