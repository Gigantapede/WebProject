DROP TABLE Utilisateur CASCADE;
DROP TABLE Voiture CASCADE;
DROP TABLE Annonce CASCADE;
DROP TABLE Reserver CASCADE;
DROP TABLE Signaler CASCADE;

CREATE TABLE Signaler(
	Id_Signaler SERIAL,
    Nom VARCHAR(50),
    Email VARCHAR(50),
	Description_probleme VARCHAR(100),
    CONSTRAINT pk_Signaler PRIMARY KEY(Id_Signaler)
);

CREATE TABLE Utilisateur(
	Id_Utilisateur SERIAL,
    Nom VARCHAR(50) NOT NULL,
    Prenom VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Password_User VARCHAR(50) NOT NULL,
    Statut VARCHAR(50) DEFAULT 'Libre',
    Role_User VARCHAR(50) DEFAULT 'Passager',
    Date_naissance DATE NOT NULL,
    Recompense BOOLEAN DEFAULT false,
    Strikes INT DEFAULT 0,
	CONSTRAINT Statut CHECK (Statut = 'Libre' or Statut = 'En Voyage' or Statut = 'Banni'),
	CONSTRAINT Role_User CHECK (Role_User = 'Passager' or Role_User = 'Conducteur' or Role_User = 'Admin'),
    CONSTRAINT pk_Utilisateur PRIMARY KEY(Id_Utilisateur)
);

CREATE TABLE Voiture(
    Num_immatriculation VARCHAR(50),
    Couleur VARCHAR(50),
    Modele VARCHAR(50),
    Nb_sieges INT,
    Id_Utilisateur INT,
    CONSTRAINT Nb_sieges CHECK (Nb_sieges > 1 and 10 >= Nb_sieges),
    CONSTRAINT pk_Voiture PRIMARY KEY(Num_immatriculation),
    CONSTRAINT fk_Utilisateur FOREIGN KEY(Id_Utilisateur) REFERENCES Utilisateur(Id_Utilisateur)
);

CREATE TABLE Annonce(
    Id_Annonce SERIAL,
    Ville_depart VARCHAR(50),
    Ville_destination VARCHAR(50),
    Nb_sieges_disponibles INT,
    Date_depart DATE,
    Heure_depart TIME,
    Date_publication DATE,
    Annulation_publication BOOLEAN DEFAULT false,
    Commentaire_conducteur VARCHAR(50) DEFAULT '',
    Note_conducteur INT DEFAULT 5,
    Presence_conducteur BOOLEAN DEFAULT true,
    Id_Utilisateur INT,
    Num_immatriculation VARCHAR(50),
    CONSTRAINT Note_conducteur CHECK (Note_conducteur >= 0 and 5 >= Note_conducteur),
    CONSTRAINT pk_Annonce PRIMARY KEY(Id_Annonce),
    CONSTRAINT fk_Annonce_Utilisateur FOREIGN KEY(Id_Utilisateur) REFERENCES Utilisateur(Id_Utilisateur),
    CONSTRAINT fk_Annonce_Voiture FOREIGN KEY(Num_immatriculation) REFERENCES Voiture(Num_immatriculation)
);

CREATE TABLE Reserver(
    Id_Utilisateur INT,
    Id_Annonce INT,
    Nb_sieges_reserves INT,
    Date_reservations DATE,
    Annulation_bool BOOLEAN,
    Commentaire VARCHAR(50) DEFAULT '',
    Note INT DEFAULT 5,
    Presence BOOLEAN DEFAULT true,
    CONSTRAINT Note CHECK (Note >= 0 and 5 >= Note),
    CONSTRAINT pk_Reserver PRIMARY KEY(Id_Utilisateur, Id_Annonce),
    CONSTRAINT fk_Reserver_Utilisateur FOREIGN KEY(Id_Utilisateur) REFERENCES Utilisateur(Id_Utilisateur),
    CONSTRAINT fk_Reserver_Annonce FOREIGN KEY(Id_Annonce) REFERENCES Annonce(Id_Annonce)
);

-- Insertar Utilisateur
INSERT INTO Utilisateur(Nom, Prenom, Email, Password_User, Role_User, Date_naissance) 
VALUES('Balboa', 'Stefano', 'stefano.balboa@example.com', '51431953007fc764ed2092a94944b608', 'Admin', '2002-04-29');

INSERT INTO Utilisateur(Nom, Prenom, Email, Password_User, Role_User, Date_naissance) 
VALUES('Garcia', 'Luisa', 'luisa.garcia@example.com', '51431953007fc764ed2092a94944b608', 'Conducteur', '1990-02-15');

INSERT INTO Utilisateur(Nom, Prenom, Email, Password_User, Date_naissance) 
VALUES('Martinez', 'Pedro', 'pedro.martinez@example.com', '51431953007fc764ed2092a94944b608', '1995-07-22');

INSERT INTO Utilisateur(Nom, Prenom, Email, Password_User, Role_User, Date_naissance) 
VALUES('Gates', 'Bill', '1@1.com', '202cb962ac59075b964b07152d234b70', 'Conducteur', '1995-07-22');

-- Insertar Voiture
INSERT INTO Voiture(Num_immatriculation, Couleur, Modele, Nb_sieges, Id_Utilisateur) 
VALUES('ABC-123', 'Noir', 'Renault Clio', 5, 2);

INSERT INTO Voiture(Num_immatriculation, Couleur, Modele, Nb_sieges, Id_Utilisateur) 
VALUES('QWE-123', 'Gris', 'Honda Civic', 5, 4);

--INSERT INTO Voiture(Num_immatriculation, Couleur, Modele, Nb_sièges, Id_Utilisateur) 
--VALUES('DEF-456', 'Blanc', 'Peugeot 208', 4, 1);

-- Insertar Annonce
INSERT INTO Annonce(Ville_depart, Ville_destination, Nb_sieges_disponibles, Date_depart, Heure_depart, Date_publication, Annulation_publication, Commentaire_conducteur, Note_conducteur, Presence_conducteur, Id_Utilisateur, Num_immatriculation)
VALUES('Paris', 'Lyon', 3, '2023-05-15', '09:00:00', '2023-05-10', false, 'Passagers très sympa :)', 5, true, 2, 'ABC-123');

--INSERT INTO Annonce(Ville_depart, Ville_destination, Nb_sièges_disponibles, Date_depart, Heure_depart, Date_publication, Annulation_publication, Commentaire_conducteur, Note_conducteur, Presence_conducteur, Id_Utilisateur, Num_immatriculation)
--VALUES('Lyon', 'Marseille', 2, '2023-05-20', '13:30:00', '2023-05-12', false, 'Good travel :)', 5, true, 1, 'DEF-456');

-- Insertar Reserver
INSERT INTO Reserver(Id_Utilisateur, Id_Annonce, Nb_sieges_reserves, Date_reservations, Annulation_bool, Commentaire, Note, Presence)
VALUES(3, 1, 2, '2023-05-13', false, 'Conducteur très gentil :)', 5, true);

--INSERT INTO Reserver(Id_Utilisateur, Id_Annonce, Nb_sièges_réservés, Date_reservations, Annulation_bool, Commentaire, Note, Presence)
--VALUES(2, 2, 1, '2023-05-14', false, '', 3, true);
