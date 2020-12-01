CREATE DATABASE videoslaravel;
USE videoslaravel;

CREATE TABLE users(
id INT (255) NOT NULL ,
role VARCHAR (20),
name VARCHAR (255),
surname VARCHAR (255),
email	VARCHAR (255),
password VARCHAR (255),
image	VARCHAR (255),
created_at datetime,
updated_at datetime,
remember_token varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id)
);

CREATE TABLE videos(
id  	int(255) not null,
user_id int(255) not null,
title	varchar(255),
description text,
status	varchar(20),
image	varchar(255),
video_path varchar(255),
created_at datetime,
updated_at datetime,
CONSTRAINT pk_videos PRIMARY KEY(id),
CONSTRAINT fk_videos_users FOREIGN KEY(user_id) REFERENCES users(id)
);

CREATE TABLE comments(
id 		INT (255) NOT NULL,
user_id INT (255) NOT NULL,
video_id INT (255) NOT NULL,
body 	text,
created_at datetime,
updated_at datetime,
CONSTRAINT pk_comment PRIMARY KEY(id),
CONSTRAINT fk_comment_video FOREIGN KEY(video_id) REFERENCES videos(id),
CONSTRAINT fk_comment_user FOREIGN KEY(user_id) REFERENCES users(id)
);