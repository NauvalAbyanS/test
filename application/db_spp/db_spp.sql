CREATE DATABASE db_spp;
CREATE TABLE petugas(
    id_petugas int(11) PRIMARY KEY,
    username VARCHAR(25),
    password VARCHAR(32),
    nama_petugas VARCHAR(35),
    level INT);

CREATE TABLE siswa(
        nisn varchar(10) PRIMARY KEY,
        nis char(8),nama VARCHAR(50),
        password VARCHAR(32),
        id_kelas int(11),
        alamat text,
        notelp VARCHAR(13),
        id_spp int(11));

create table spp( 
        id_spp int(11) PRIMARY KEY,
        tahun int(11),
        nominal int(11));

create table kelas(
    id_kelas int(11) PRIMARY KEY,
    nama_kelas VARCHAR(10),
    kompetensi_keahlian VARCHAR(50));
    
    
create table pembayaran(
    id_pembayaran int(11) PRIMARY KEY,
    id_petugas int(11),nisn varchar(10),
    tanggal_bayar date,bulan_bayar varchar(8),
    tahun_bayar varchar(4),id_spp int(11),
    jumlah_bayar int(11));
    
    
    
    ALTER TABLE pembayaran ADD FOREIGN KEY (id_petugas) REFERENCES petugas(id_petugas);
    ALTER TABLE pembayaran ADD FOREIGN KEY (nisn) REFERENCES siswa(nisn);
    ALTER TABLE siswa ADD FOREIGN KEY (id_spp) REFERENCES spp(id_spp);
    ALTER TABLE pembayaran ADD FOREIGN KEY (id_spp) REFERENCES siswa(id_spp);
    ALTER TABLE siswa ADD FOREIGN KEY (id_kelas) REFERENCES kelas(id_kelas); 
    
    
INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES 
('221102', 'rizaldy', 'petugas1', 'rizaldy ahmad', '1'), 
('112202', 'karla', 'petugas2', 'Karla Sutendar', '2');

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `password`, `id_kelas`, `alamat`, `notelp`, `id_spp`) VALUES 
('000123', '181920', 'gaben turu', 'gaben123', NULL, 'Jl.batubara 9 no 43', '082115465986', NULL),
('000456', '171819', 'axel polen', 'axel123', NULL, 'jl.diretop 5 no 55', '082115987895', NULL);