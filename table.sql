CREATE TABLE 	User(
	userID Int PRIMARY KEY,
	firstName VarChar(12) NOT NULL,
	LastName VarChar(12) NOT NULL,
	DateOfBirth Date NOT NULL,
	AddressLine1 VarChar(30) NOT NULL,
	AddressLine2 VarChar(30),
	Town VarChar(20) NOT NULL,
	County VarChar(20) NOT NULL,
	PostCode VarChar(8) NOT NULL,
	Telephone VarChar(15) NOT NULL,
	Email VarChar(40) 
)

CREATE TABLE 	Enrolment(
	StudentID Int NOT NULL,
	ModuleID Int NOT NULL,
	DateCompleted Date NOT NULL,
	Grade VarChar(9) NOT NULL,
	PRIMARY KEY (StudentID, ModuleID)
)

CREATE TABLE 	Modules(
	ModuleID Int PRIMARY KEY,
	ModuleName VarChar(10) NOT NULL,
	ModuleLevel Smallint NOT NULL,
	NoOfWeeks Smallint NOT NULL,
	TutorID Int NOT NULL
)

CREATE TABLE 	Tutor(
	TutorID Int PRIMARY KEY,
	TutorFirstName VarChar(12) NOT NULL,
	TutorLastName VarChar(12) NOT NULL,
	TutorExtNo Char(6) NOT NULL
)

INSERT INTO Student(StudentID, FirstName, LastName, DateOfBirth, AddressLine1, AddressLine2, Town, County, PostCode, Telephone, Email)
VALUES(123456,'Sonic' , 'Hedgehog', '1996-02-15', '12 NotReal Lane', , Northwich, Cheshire, CW84XJ, '078465783', 'NotReal@gmail.com')

INSERT INTO Enrolment(StudentID, ModuleID, DateCompleted, Grade)
VALUES(123456, 123456, '2016-09-18', 'Pass')

INSERT INTO Modules(ModuleID, ModuleName, ModuleLevel, NoOfWeeks, TutorID)
VALUES(123456, 'Computer Engineering', '3', '4', 123456)

INSERT INTO Tutor(TutorID, TutorFirstName, TutorLastName, TutorExtNo)
VALUES(123456, 'Jeff', 'Jefferies', '123456')