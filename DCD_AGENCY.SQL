# -----------------------------------------------------------------------------
#       TABLE : VOYAGES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS VOYAGES
 (
   ID_VOYAGES INTEGER(4) NOT NULL AUTO_INCREMENT ,
   ID_UTILISATEURS INTEGER(4) NOT NULL  ,
   ID_DESTINATIONS INTEGER(4) NOT NULL  ,
   DATE_DEPART DATE NULL  ,
   DATE_RETOUR DATE NULL  
   , PRIMARY KEY (ID_VOYAGES) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE VOYAGES
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_VOYAGES_UTILISATEURS
     ON VOYAGES (ID_UTILISATEURS ASC);

CREATE  INDEX I_FK_VOYAGES_DESTINATIONS
     ON VOYAGES (ID_DESTINATIONS ASC);

# -----------------------------------------------------------------------------
#       TABLE : RESERVATIONS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RESERVATIONS
 (
   ID_RESERVATIONS INTEGER(4) NOT NULL AUTO_INCREMENT ,
   ID_VOYAGES INTEGER(4) NOT NULL  ,
   ANNULATION BOOL NULL  ,
   DATE_RESERVATION DATE NULL  
   , PRIMARY KEY (ID_RESERVATIONS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE RESERVATIONS
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_RESERVATIONS_VOYAGES
     ON RESERVATIONS (ID_VOYAGES ASC);

# -----------------------------------------------------------------------------
#       TABLE : DESTINATIONS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS DESTINATIONS
 (
   ID_DESTINATIONS INTEGER(4) NOT NULL AUTO_INCREMENT ,
   NOM_DEST TEXT NULL  ,
   DESCRIPTION TEXT NULL  ,
   PAYS VARCHAR(128) NULL  
   , PRIMARY KEY (ID_DESTINATIONS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : UTILISATEURS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS UTILISATEURS
 (
   ID_UTILISATEURS INTEGER(4) NOT NULL AUTO_INCREMENT ,
   NOM VARCHAR(15) NULL  ,
   PRENOM VARCHAR(25) NULL  ,
   EMAIL VARCHAR(30) NULL  ,
   MOT_DE_PASSE VARCHAR(10) NULL  ,
   NUM_TEL CHAR(10) NULL  
   , PRIMARY KEY (ID_UTILISATEURS) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE VOYAGES 
  ADD FOREIGN KEY FK_VOYAGES_UTILISATEURS (ID_UTILISATEURS)
      REFERENCES UTILISATEURS (ID_UTILISATEURS) ;


ALTER TABLE VOYAGES 
  ADD FOREIGN KEY FK_VOYAGES_DESTINATIONS (ID_DESTINATIONS)
      REFERENCES DESTINATIONS (ID_DESTINATIONS) ;


ALTER TABLE RESERVATIONS 
  ADD FOREIGN KEY FK_RESERVATIONS_VOYAGES (ID_VOYAGES)
      REFERENCES VOYAGES (ID_VOYAGES) ;

