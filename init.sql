CREATE TABLE IF NOT EXISTS mahasiswa (
    id      INT AUTO_INCREMENT PRIMARY KEY,
    nama    VARCHAR(50),
    nrp     VARCHAR(50),
    email   VARCHAR(100),
    jurusan VARCHAR(100)
);

INSERT INTO mahasiswa (nama,nrp,email,jurusan)
VALUES ("Rizky","123","rizky@example.com","Teknik Informatika"),
        ("Dwi","124","dwi@example.com","Teknik Informatika"),
        ("Abdul","125","abdul@example.com","Teknik Informatika"),
        ("Hendra","126","hendra@example.com","Teknik Informatika"),
        ("Oktafian","127","oktafian@example.com","Teknik Informatika"),
        ("Muhammad","128","muhammad@example.com","Teknik Informatika");
