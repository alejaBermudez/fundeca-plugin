
DROP DATABASE IF EXISTS fundeca;
CREATE DATABASE fundeca;CHARACTER SET utf8mb4;
USE fundeca;

CREATE TABLE personal(
	id  int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(100) NOT NULL,
	telefono varchar(14) NOT NULL, 
	correo 	varchar(100) NOT NULL, 
	maestriaOndas ENUM('Si', 'No') NOT NULL, 
	cargo varchar(20) NOT NULL
); 

CREATE TABLE municipio(
	id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(100) NOT NULL,
	latitud varchar(10) ,
	longitud varchar(10)
);

CREATE TABLE linea(
	id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(100) NOT NULL
);

CREATE TABLE proyecto(
	codigo varchar(10) PRIMARY KEY,
	asesor varchar(100) not null,
        municipio varchar(100) NOT NULL,
	sede varchar(100) NOT NULL,
	instEducativa varchar(100) NOT NULL,
	zona ENUM('Rural', 'Urbana') NOT NULL, 
	etapa  ENUM('1', '2', '3','Otro') NOT NULL,
	pregunta varchar(200) NOT NULL,
	linea varchar(100) NOT NULL,
	numEstudiantesGrupo varchar(100) NOT NULL,
	gradosGrupo varchar(30) NOT NULL, 
	nombreGrupo varchar (100) NOT NULL,
	numdocentes varchar(10) NOT NULL,
	fecha_inicio date NOT NULL,
	fecha_fin date NOT NULL,
	anio  ENUM('1-2020', '2-2021', '3-2022'),
	FOREIGN KEY (asesor) REFERENCES personal(nombre),
	FOREIGN KEY (municipio) REFERENCES municipio (nombre),
	FOREIGN KEY (linea ) REFERENCES linea(nombre)
);

CREATE TABLE personavsproyecto(
	id_proyecto varchar(10) not null,
	id_asesor varchar(100) not null,
	PRIMARY KEY (id_proyecto, id_asesor),
	FOREIGN KEY (id_proyecto) REFERENCES proyecto (codigo),
	FOREIGN KEY (id_asesor) REFERENCES personal (id)
);

INSERT INTO `personal` (`id`,`nombre`,`telefono`,`correo`,`maestriaondas`,`cargo`) VALUES
(1,"Jakeem Kennedy","166-624-7732","hendrerit.Donec@commodo.co.uk","Si","Docente"),
(2,"Virginia Mccarty","815-764-6604","faucibus@mattisornarelectus.edu","Si","Docente"),
(3,"Chase Cooper","042-084-8890","dolor.dapibus@auguemalesuada.edu"," No","Docente"),
(4,"Jermaine Welch","890-218-5591","pede.ac@dolortempusnon.co.uk"," No","Docente"),
(5,"Gretchen Harrington","576-123-4025","vulputate.eu.odio@ridiculus.edu","Si","Rector"),
(6,"Wylie Lee","888-358-4334","lobortis.nisi.nibh@Aliquamornare.net","Si","Rector"),
(7,"Ali Sweeney","331-046-8461","Aliquam@Loremipsumdolor.ca"," No","Rector"),
(8,"Melinda Patterson","734-626-1715","eu.sem.Pellentesque@adipiscing.com"," No","Rector"),
(9,"Candace Lambert","904-249-4071","urna@Proinmi.org","Si","Cordinador"),
(10,"Sacha Reilly","558-385-6007","Duis.ac.arcu@et.org","Si","Cordinador"),
 (11,"Frances Goodman","887-364-1049","ipsum@disparturientmontes.com"," No","Cordinador"),
(12,"Guinevere Grant","865-280-1217","consequat.dolor@dapibus.net"," No","Cordinador"),
(13,"Nissim Richardson","006-298-5051","libero.Donec.consectetuer@perconubianostra.edu","Si","Docente"),
(14,"Devin Richmond","792-331-0737","commodo@eleifendCras.com","Si","Docente"),
(15,"Connor Whitfield","945-342-2394","nulla.magna@Aliquamvulputate.com"," No","Docente"),
(16,"Clarke Bradley","339-095-3238","dignissim.pharetra@ornare.ca"," No","Docente"),
(17,"Simon Hopper","981-347-3254","et.libero@acfermentumvel.net","Si","Rector"),
(18,"Beck Contreras","935-644-7776","Nunc.quis.arcu@Quisque.org","Si","Rector"),
(19,"Liberty White","178-430-0592","malesuada.fringilla.est@acurnaUt.edu"," No","Rector"),
(20,"Reese Bates","872-606-2517","Phasellus.in.felis@sapien.com"," No","Rector");


INSERT INTO municipio (`id`,`nombre`) values 
(234, 'MANIZALES'),(339, 'AGUADAS'),(340,  'ANSERMA'),(341,  'ARANZAZU'),(342, 'BELALCAZAR'),
(343,  'CHINCHINA'),(344, 'FILADELFIA'),(345,  'LA DORADA'),(346,  'LA MERCED),(347,  'MANZANARES'),
(348, 'MARMATO'),(349,  'MARQUETALIA'),(350,  'MARULANDA'),(351,  'NEIRA'),(352, 'NORCASIA'),
(353,  'PACORA'),(354, 'PALESTINA'),(355, 'PENSILVANIA'),(356, 'RIOSUCIO'),(357,  'RISARALDA'), 
(358,'SALAMINA'),(359, 'SAMANA'),(360,  'SAN JOSE'),(361,  'SUPIA'),(362, 'VICTORIA'),
(363, 'VILLAMARIA'),(364,  'VITERBO');


INSERT INTO linea (`id`,`nombre`) values 
(1,"mattis. Cras eget"),(2,"sapien"),(3,"est mauris,"),(4,"mollis. Duis sit"),(5,"Sed dictum. Proin"),
(6,"lacus. Quisque"),(7,"ac"),(8,"nulla at sem"),(9,"risus. Nulla"),(10,"sem,"), (11,"luctus sit"),
(12,"aliquet"),(13,"eget,"),(14,"leo. Vivamus"),(15,"Donec");












