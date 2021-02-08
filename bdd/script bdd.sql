#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: NC_user
#------------------------------------------------------------

CREATE TABLE NC_user(
        user_id       Int  Auto_increment  NOT NULL ,
        user_name     Varchar (50) NOT NULL ,
        user_mail     Varchar (50) NOT NULL ,
        user_password Varchar (150) NOT NULL ,
        user_role     Varchar (50) NOT NULL
	,CONSTRAINT NC_user_PK PRIMARY KEY (user_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: NC_category
#------------------------------------------------------------

CREATE TABLE NC_category(
        category_id   Int  Auto_increment  NOT NULL ,
        category_Name Varchar (50) NOT NULL
	,CONSTRAINT NC_category_PK PRIMARY KEY (category_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: NC_article
#------------------------------------------------------------

CREATE TABLE NC_article(
        article_id               Int  Auto_increment  NOT NULL ,
        article_title            Varchar (50) NOT NULL ,
        article_content          Varchar (150) NOT NULL ,
        article_img              Blob NOT NULL ,
        article_publication_date Datetime NOT NULL
	,CONSTRAINT NC_article_PK PRIMARY KEY (article_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: NC_items
#------------------------------------------------------------

CREATE TABLE NC_items(
        items_id          Int  Auto_increment  NOT NULL ,
        items_title       Varchar (50) NOT NULL ,
        items_description Text NOT NULL ,
        items_price       Int NOT NULL ,
        user_id           Int NOT NULL ,
        category_id       Int NOT NULL
	,CONSTRAINT NC_items_PK PRIMARY KEY (items_id)

	,CONSTRAINT NC_items_NC_user_FK FOREIGN KEY (user_id) REFERENCES NC_user(user_id)
	,CONSTRAINT NC_items_NC_category0_FK FOREIGN KEY (category_id) REFERENCES NC_category(category_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: NC_picture
#------------------------------------------------------------

CREATE TABLE NC_picture(
        items_picture_id   Int  Auto_increment  NOT NULL ,
        items_picture_name Varchar (50) NOT NULL
	,CONSTRAINT NC_picture_PK PRIMARY KEY (items_picture_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: have
#------------------------------------------------------------

CREATE TABLE have(
        items_picture_id Int NOT NULL ,
        items_id         Int NOT NULL
	,CONSTRAINT have_PK PRIMARY KEY (items_picture_id,items_id)

	,CONSTRAINT have_NC_picture_FK FOREIGN KEY (items_picture_id) REFERENCES NC_picture(items_picture_id)
	,CONSTRAINT have_NC_items0_FK FOREIGN KEY (items_id) REFERENCES NC_items(items_id)
)ENGINE=InnoDB;

