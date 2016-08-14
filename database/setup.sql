CREATE TABLE config
(
	config_option VARCHAR(20) PRIMARY KEY,
	config_value TEXT
);
INSERT INTO TABLE config
(
	config_option,
	config_value
)
VALUES
(
	'originaldb',
	'MyVideos99'
),
(
	'newdb',
	'MyTV99'
);


CREATE TABLE movie
(
	movie_imdbid VARCHAR(20) PRIMARY KEY,
	movie_name VARCHAR(250)
);


CREATE TABLE libsrc -- Library source
(
	libsrc_name VARCHAR(20) PRIMARY KEY,
	libsrc_description TEXT,
	libsrc_engine VARCHAR(50), -- What is used to store the library. Eg. "kodi.mysql.99"
);

CREATE TABLE libparam -- Parameters for connecting to a libsrc library
(
	libparam_srcname VARCHAR(20),-- Which library source the parameter is associated with. FK to "libsrc"
	libparam_name VARCHAR(20), -- The parameter's name eg. db_user
	libparam_value TEXT, -- The parameter's value eg. "root"
	PRIMARY KEY (libparam_srcname,libparam_name)
);
