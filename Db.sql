CREATE TABLE IF NOT EXISTS Airports(
airportID  VARCHAR(3) NOT NULL,
airportName VARCHAR(40) NOT NULL,
city VARCHAR(30) NOT NULL,
state VARCHAR(20),
country VARCHAR(50),
PRIMARY KEY (airportId));


INSERT INTO Airports VALUES('JFK','John F. Kennedy International Airport','New York','New York','United States');
INSERT INTO Airports VALUES('SFO','San Francisco International Airport','San Francisco','California','United States');
INSERT INTO Airports VALUES('CYYZ','Lester B Pearson International Airport','Toronto',NULL,'Canada');
INSERT INTO Airports VALUES('DCA','Washington Reagan National','Washington DC',NULL,'United States');
INSERT INTO Airports VALUES('CDG','Charles de Gaulle','Paris',NULL,'France');



CREATE TABLE IF NOT EXISTS Carriers (
carrierId VARCHAR(5) NOT NULL,
carrierName VARCHAR(30) NOT NULL,
carrierCountry VARCHAR(30) NOT NULL,
fleetSize INTEGER,
employees INTEGER,
revenue INTEGER,
PRIMARY KEY (carrierId));

INSERT INTO Carriers VALUES('AF','Air France','France',85,58441,1514);
INSERT INTO Carriers VALUES('US','US Airways','United States', 106,68441,13148);
INSERT INTO Carriers VALUES('DL','Delta Air lines','United States', 256,68541,36514);

CREATE TABLE IF NOT EXISTS Flights 
( carrierId VARCHAR(5), 
flightNo INTEGER NOT NULL, 
flightdate DATE, 
flightTime TIME, 
airportID VARCHAR(3), 
destination VARCHAR(3), 
distance INTEGER NOT NULL, 
Aircrafttype VARCHAR(30), 
PRIMARY KEY (carrierId, flightNo, flightdate), 
FOREIGN KEY (carrierId) REFERENCES Carriers (carrierId) ON DELETE CASCADE, 
FOREIGN KEY (airportID) REFERENCES Airports (airportID) ON DELETE SET NULL, 
FOREIGN KEY (destination) REFERENCES Airports (airportID) ON DELETE SET NULL );

INSERT INTO Flights VALUES('DL',426,'2022-06-07','7:00','JFK','SFO',2586,'Boeing 747');
INSERT INTO Flights VALUES('AF',886,'2022-06-08','16:00','CDG','CYY',2586,'Boeing 888');
INSERT INTO Flights VALUES('AF',765,'2022-06-08','18:00','CYY','DCA',2586,'Boeing 666');
;