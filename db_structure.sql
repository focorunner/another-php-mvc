create table remembered_logins
(
  token_hash varchar(64) not null
    primary key,
  user_id int null,
  expires_at datetime null
)
  engine=InnoDB
;

create index remembered_logins_users_id_fk
  on remembered_logins (user_id)
;

create table users
(
  id int auto_increment
    primary key,
  name varchar(50) null,
  email varchar(255) null,
  password_hash varchar(255) null,
  password_reset_hash varchar(64) null,
  password_reset_expires_at datetime null,
  activation_hash varchar(64) null,
  is_active tinyint(1) default '0' null,
  constraint users_email_uindex
  unique (email),
  constraint users_password_reset_hash_uindex
  unique (password_reset_hash),
  constraint users_activation_hash_uindex
  unique (activation_hash)
)
  engine=InnoDB
;

alter table remembered_logins
  add constraint remembered_logins_users_id_fk
foreign key (user_id) references users (id)
  on update cascade on delete cascade
;

