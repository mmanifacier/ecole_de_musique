CREATE DATABASE ecole_de_musique;

USE ecole_de_musique;


-- Table: student

CREATE TABLE student(
        id             Int UNSIGNED Auto_increment  NOT NULL ,
        last_name_s    Varchar (255) NOT NULL ,
        first_name_s   Varchar (255) NOT NULL ,
        birth_date_s   Date NOT NULL ,
        address        Varchar (255) NOT NULL ,
        phone_number_s Int UNSIGNED ZEROFILL NOT NULL ,
        email_s        Varchar (255) NOT NULL
	,CONSTRAINT student_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


-- Table: legal_responsible

CREATE TABLE legal_responsible(
        id              Int UNSIGNED Auto_increment  NOT NULL ,
        last_name       Varchar (255) NOT NULL ,
        first_name      Varchar (255) NOT NULL ,
        phone_number_rl Int UNSIGNED ZEROFILL NOT NULL ,
        email           Varchar (255) NOT NULL
	,CONSTRAINT legal_responsible_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


-- Table: instrument

CREATE TABLE instrument(
        id   Int UNSIGNED Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT instrument_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


-- Table: classes

CREATE TABLE classes(
        id   Int UNSIGNED Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT classes_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


-- Table: teacher

CREATE TABLE teacher(
        id             Int UNSIGNED Auto_increment  NOT NULL ,
        last_name_t    Varchar (255) NOT NULL ,
        first_name_t   Varchar (255) NOT NULL ,
        phone_number_t Int UNSIGNED ZEROFILL NOT NULL ,
        email_t        Varchar (255) NOT NULL
	,CONSTRAINT teacher_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


-- Table: user

CREATE TABLE user(
        id       Int UNSIGNED Auto_increment  NOT NULL ,
        username Varchar (255) NOT NULL ,
        password Varchar (255) NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


-- Table: l_student_legal_responsible

CREATE TABLE l_student_legal_responsible(
        id         Int UNSIGNED NOT NULL ,
        id_student Int UNSIGNED NOT NULL
	,CONSTRAINT l_student_legal_responsible_PK PRIMARY KEY (id,id_student)

	,CONSTRAINT l_student_legal_responsible_legal_responsible_FK FOREIGN KEY (id) REFERENCES legal_responsible(id)
	,CONSTRAINT l_student_legal_responsible_student0_FK FOREIGN KEY (id_student) REFERENCES student(id)
)ENGINE=InnoDB;


-- Table: l_student_instrument

CREATE TABLE l_student_instrument(
        id         Int UNSIGNED NOT NULL ,
        id_student Int UNSIGNED NOT NULL
	,CONSTRAINT l_student_instrument_PK PRIMARY KEY (id,id_student)

	,CONSTRAINT l_student_instrument_instrument_FK FOREIGN KEY (id) REFERENCES instrument(id)
	,CONSTRAINT l_student_instrument_student0_FK FOREIGN KEY (id_student) REFERENCES student(id)
)ENGINE=InnoDB;


-- Table: l_student_classes

CREATE TABLE l_student_classes(
        id         Int UNSIGNED NOT NULL ,
        id_student Int UNSIGNED NOT NULL
	,CONSTRAINT l_student_classes_PK PRIMARY KEY (id,id_student)

	,CONSTRAINT l_student_classes_classes_FK FOREIGN KEY (id) REFERENCES classes(id)
	,CONSTRAINT l_student_classes_student0_FK FOREIGN KEY (id_student) REFERENCES student(id)
)ENGINE=InnoDB;


-- Table: l_teacher_instrument

CREATE TABLE l_teacher_instrument(
        id         Int UNSIGNED NOT NULL ,
        id_teacher Int UNSIGNED NOT NULL
	,CONSTRAINT l_teacher_instrument_PK PRIMARY KEY (id,id_teacher)

	,CONSTRAINT l_teacher_instrument_instrument_FK FOREIGN KEY (id) REFERENCES instrument(id)
	,CONSTRAINT l_teacher_instrument_teacher0_FK FOREIGN KEY (id_teacher) REFERENCES teacher(id)
)ENGINE=InnoDB;


-- Table: l_teacher_classes

CREATE TABLE l_teacher_classes(
        id         Int UNSIGNED NOT NULL ,
        id_teacher Int UNSIGNED NOT NULL
	,CONSTRAINT l_teacher_classes_PK PRIMARY KEY (id,id_teacher)

	,CONSTRAINT l_teacher_classes_classes_FK FOREIGN KEY (id) REFERENCES classes(id)
	,CONSTRAINT l_teacher_classes_teacher0_FK FOREIGN KEY (id_teacher) REFERENCES teacher(id)
)ENGINE=InnoDB;
