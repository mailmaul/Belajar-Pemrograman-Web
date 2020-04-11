mysql: [Warning] C:\Program Files\MySQL\MySQL Server 8.0\bin\mysql.exe: ignoring option '--no-beep' due to invalid value ''.
Enter password: ********
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 15
Server version: 8.0.19 MySQL Community Server - GPL

Copyright (c) 2000, 2020, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> create database sewamobil;
Query OK, 1 row affected (0.12 sec)

mysql> use sewamobil;
Database changed
mysql> create table kendaraan (
    -> no_plat varchar(15) primary key, tahun int(4), tarif int(60),
    -> status varchar(10), id_type varchar(15), UNIQUE (id_type));
Query OK, 0 rows affected, 2 warnings (0.87 sec)

mysql>
mysql> insert into kendaraan
    -> values('AA 1234 BB','1990','200000','ada','a001');
Query OK, 1 row affected (0.22 sec)

mysql> insert into kendaraan
    -> values('AA 4567 BB','1991','250000','disewa','a002');
Query OK, 1 row affected (0.12 sec)

mysql> insert into kendaraan
    -> values('AA 6789 BB','1992','300000','disewa','a003');
Query OK, 1 row affected (0.10 sec)

mysql>
mysql> create table tipe_kendaraan (
    -> id_type varchar(15) primary key, type varchar(15));
Query OK, 0 rows affected (0.56 sec)

mysql>
mysql> insert into tipe_kendaraan
    -> values('a001','agya');
Query OK, 1 row affected (0.06 sec)

mysql> insert into tipe_kendaraan
    -> values('a002','calya');
Query OK, 1 row affected (0.18 sec)

mysql> insert into tipe_kendaraan
    -> values('a003','inova');
Query OK, 1 row affected (0.12 sec)

mysql>
mysql> create table transaksi (
    -> no_transaksi int(15) primary key, tgl_pesan Date, tgl_pinjam Date,
    -> tgl_rencana Date, jam_rencana DateTime, tgl_realisasi Date,
    -> jam_realisasi DateTime, denda int(10), km_pinjam int(10), km_kembali int (10),
    -> bbm_pinjam int (10), bbm_kembali int (10), kondisi_pinjam varchar (15),
    -> kondisi_kembali varchar (15), kerusakan varchar (15), biaya_kerusakan int (15), biaya_bbm int (15));
Query OK, 0 rows affected, 8 warnings (0.66 sec)

mysql>
mysql> insert into transaksi
    -> values('001','2020-01-01','2020-01-05','2020-01-10','00:00:02','2020-01-11','00:00:01','50000','200','300','100','300','Baik','Baik','Tidak_Ada','0','200000');
Query OK, 1 row affected (0.12 sec)

mysql>
mysql> create table sopir (
    -> id_sopir varchar(15) primary key, nama varchar(15), alamat varchar(30), telepon varchar(15),
    -> sim varchar(15), tarif int (15));
Query OK, 0 rows affected, 1 warning (0.69 sec)

mysql>
mysql> insert into sopir
    -> values('b001','udin','jl sadewa 1','081545035513','121212122018','150000');
Query OK, 1 row affected (0.14 sec)

mysql>
mysql> create table pelanggan (
    -> no_ktp varchar(15) primary key, nama varchar(15), alamat varchar(15), telepon varchar(15));
Query OK, 0 rows affected (0.58 sec)

mysql>
mysql> insert into pelanggan
    -> values('08050604052018','udin','jl sadewa 1','081545035513');
Query OK, 1 row affected (0.07 sec)

mysql> show tables;
+---------------------+
| Tables_in_sewamobil |
+---------------------+
| kendaraan           |
| pelanggan           |
| sopir               |
| tipe_kendaraan      |
| transaksi           |
+---------------------+
5 rows in set (0.00 sec)