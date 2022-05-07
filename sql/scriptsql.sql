CREATE TABLE IF NOT EXISTS sheepfold (
    id int UNSIGNED NOT NULL AUTO_INCREMENT,
    name varchar(128) NOT NULL,
    adress varchar(128) NOT NULL,
    postCode varchar(15) NOT NULL,
    town text(60) NOT NULL,
    phoneNumber varchar(20)NOT NULL,
    siret varchar(25) NOT NULL,
    rcs varchar(25) NOT NULL,
    numTVA varchar(25) NOT NULL,
    capital float(25) NOT NULL,
    isActive boolean NULL,
    PRIMARY KEY (id)
);