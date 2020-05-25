create table image
(
    id          int auto_increment,
    title       varchar(255) null,
    name        varchar(255) not null,
    description varchar(255) null,
    width       int          not null,
    height      int          not null,
    alt         varchar(255) null,
    size        int          not null,
    path        varchar(255) not null,
    mime        varchar(50)  not null,
    view        int          null,
    constraint images_id_uindex
        unique (id)
)
    comment 'изображения';

alter table image
    add primary key (id);

