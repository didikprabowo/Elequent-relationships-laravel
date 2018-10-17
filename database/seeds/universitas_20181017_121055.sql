
-- Dump data of "mahasiswas" -------------------------------
INSERT INTO `mahasiswas`(`id`,`username`,`email`,`password`,`created_at`,`updated_at`) VALUES
( '1', 'didik', 'didikprab@gmail.com', 'didikprab@gmail.com', NULL, NULL ),
( '2', 'oktama', 'oktama@gmail.com', 'oktama', NULL, NULL ),
( '3', 'johan', 'johan@gmail.com', 'johan', NULL, NULL );
-- ---------------------------------------------------------
-- Dump data of "positions" --------------------------------
INSERT INTO `positions`(`id`,`name`,`mahasiswa_id`,`created_at`,`updated_at`) VALUES
( '1', 'Presiden', '1', NULL, NULL ),
( '2', 'Wakil Presiden', '2', NULL, NULL ),
( '3', 'Gubernur', '3', NULL, NULL ),
( '4', 'Wakil Gubernur', '1', NULL, NULL );
-- ---------------------------------------------------------


-- Dump data of "profils" ----------------------------------
INSERT INTO `profils`(`id`,`name`,`nik`,`address`,`no_hp`,`mahasiswa_id`,`created_at`,`updated_at`) VALUES
( '1', 'Didik Prabowo', '223', 'Solo', '4545454', '1', NULL, NULL ),
( '2', 'Oktama P', '35454', 'Kalimantan', '454', '2', NULL, NULL ),
( '3', 'Johan Setiawan', '45454', 'Imogiri', '4545', '3', NULL, NULL );
-- ---------------------------------------------------------


-- Dump data of "ukms" -------------------------------------
INSERT INTO `ukms`(`id`,`name`,`created_at`,`updated_at`) VALUES
( '1', 'Footaball', NULL, NULL ),
( '2', 'Badminton', NULL, NULL ),
( '3', 'Music', NULL, NULL ),
( '4', 'Seni', NULL, NULL ),
( '5', 'Lensa', NULL, NULL );
-- ---------------------------------------------------------


-- Dump data of "ukm_mahasiswas" ---------------------------
INSERT INTO `ukm_mahasiswas`(`id`,`mahasiswa_id`,`ukm_id`,`created_at`,`updated_at`) VALUES
( '1', '1', '1', NULL, NULL ),
( '2', '1', '2', NULL, NULL ),
( '3', '2', '3', NULL, NULL ),
( '4', '3', '1', NULL, NULL ),
( '5', '3', '2', NULL, NULL ),
( '6', '3', '3', NULL, NULL );
-- ---------------------------------------------------------
