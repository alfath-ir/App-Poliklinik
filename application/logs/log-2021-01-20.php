<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2021-01-20 02:24:31 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 02:24:31 --> Final output sent to browser
INFO - 2021-01-20 04:02:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:02:07 --> Final output sent to browser
INFO - 2021-01-20 04:04:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:04:08 --> Final output sent to browser
ERROR - 2021-01-20 04:10:04 --> Severity: Notice --> Undefined index: jumlah C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 298
INFO - 2021-01-20 04:10:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:10:04 --> Final output sent to browser
ERROR - 2021-01-20 04:10:29 --> Severity: Notice --> Undefined index: jumlah C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 298
INFO - 2021-01-20 04:10:29 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:10:29 --> Final output sent to browser
ERROR - 2021-01-20 04:12:40 --> Severity: Notice --> Undefined index: jumlah C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 298
INFO - 2021-01-20 04:12:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:12:40 --> Final output sent to browser
ERROR - 2021-01-20 04:13:48 --> Severity: Notice --> Undefined index: jumlah C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 298
INFO - 2021-01-20 04:13:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:13:48 --> Final output sent to browser
ERROR - 2021-01-20 04:17:50 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\poliklinik\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2021-01-20 04:17:50 --> Query error: Subquery returns more than 1 row - Invalid query: SELECT tipe_tamu FROM `periksa` WHERE `id_pasien` = (SELECT id FROM `pasien`)
INFO - 2021-01-20 04:17:50 --> Language file loaded: language/english/db_lang.php
ERROR - 2021-01-20 04:18:05 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\xampp\htdocs\poliklinik\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2021-01-20 04:18:05 --> Query error: Subquery returns more than 1 row - Invalid query: SELECT * FROM `periksa` WHERE `id_pasien` = (SELECT id FROM `pasien`)
INFO - 2021-01-20 04:18:05 --> Language file loaded: language/english/db_lang.php
ERROR - 2021-01-20 04:21:48 --> Query error: Unknown column 'jumlah' in 'field list' - Invalid query: SELECT COUNT(jumlah) FROM `periksa` WHERE `tipe_tamu` = 1 AND tipe_pasien = 2 IN (SELECT tipe_tamu FROM `pasien`)
INFO - 2021-01-20 04:21:48 --> Language file loaded: language/english/db_lang.php
ERROR - 2021-01-20 04:21:59 --> Query error: Unknown column 'tipe_pasien' in 'where clause' - Invalid query: SELECT COUNT(*) AS jumlah FROM `periksa` WHERE `tipe_tamu` = 1 AND tipe_pasien = 2 IN (SELECT tipe_tamu FROM `pasien`)
INFO - 2021-01-20 04:21:59 --> Language file loaded: language/english/db_lang.php
ERROR - 2021-01-20 04:25:28 --> Query error: Unknown column 'id_' in 'where clause' - Invalid query: SELECT COUNT(*) AS jumlah FROM `periksa` WHERE `tipe_tamu` = 1 AND id_ = 2 IN (SELECT tipe_tamu FROM `pasien`)
INFO - 2021-01-20 04:25:28 --> Language file loaded: language/english/db_lang.php
ERROR - 2021-01-20 04:25:34 --> Query error: Unknown column 'id_' in 'where clause' - Invalid query: SELECT COUNT(*) AS jumlah FROM `periksa` WHERE `tipe_tamu` = 1 AND id_ = 2 IN (SELECT tipe_tamu FROM `pasien`)
INFO - 2021-01-20 04:25:34 --> Language file loaded: language/english/db_lang.php
ERROR - 2021-01-20 04:25:39 --> Severity: Notice --> Undefined variable: satu C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 298
INFO - 2021-01-20 04:25:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:25:39 --> Final output sent to browser
INFO - 2021-01-20 04:27:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:27:44 --> Final output sent to browser
ERROR - 2021-01-20 04:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`periksa`.`tipe_pasien` = 1' at line 1 - Invalid query: SELECT COUNT(*) AS `jumlah` FROM `pasien` JOIN `periksa` ON `pasien`.`id` = `periksa`.`id_pasien` WHERE `pasien`.`usia` < 18 AND `pasien`.`tipe_pasien` = 2 `periksa`.`tipe_pasien` = 1
INFO - 2021-01-20 04:30:58 --> Language file loaded: language/english/db_lang.php
ERROR - 2021-01-20 04:35:49 --> Query error: Column 'tipe_pasien' in field list is ambiguous - Invalid query: SELECT tipe_pasien FROM `pasien` JOIN `periksa` ON `pasien`.`id` = `periksa`.`id_pasien` WHERE `pasien`.`usia` < 18 AND `pasien`.`tipe_pasien` = 2
INFO - 2021-01-20 04:35:49 --> Language file loaded: language/english/db_lang.php
INFO - 2021-01-20 04:39:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:39:08 --> Final output sent to browser
ERROR - 2021-01-20 04:39:44 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 238
ERROR - 2021-01-20 04:39:44 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 239
ERROR - 2021-01-20 04:39:44 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 240
ERROR - 2021-01-20 04:39:44 --> Severity: Notice --> Undefined index: jumlah C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 241
ERROR - 2021-01-20 04:39:44 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 242
ERROR - 2021-01-20 04:39:44 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 243
ERROR - 2021-01-20 04:39:44 --> Severity: Notice --> Undefined index: jumlah C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 299
ERROR - 2021-01-20 04:39:44 --> Severity: Notice --> Undefined index: jumlah C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 300
ERROR - 2021-01-20 04:39:44 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 301
INFO - 2021-01-20 04:39:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:39:44 --> Final output sent to browser
ERROR - 2021-01-20 04:39:54 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 238
ERROR - 2021-01-20 04:39:54 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 239
ERROR - 2021-01-20 04:39:54 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 240
ERROR - 2021-01-20 04:39:54 --> Severity: Notice --> Undefined index: jumlah C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 241
ERROR - 2021-01-20 04:39:54 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 242
ERROR - 2021-01-20 04:39:54 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 243
ERROR - 2021-01-20 04:39:54 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 299
ERROR - 2021-01-20 04:39:54 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 300
ERROR - 2021-01-20 04:39:54 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 301
INFO - 2021-01-20 04:39:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:39:54 --> Final output sent to browser
ERROR - 2021-01-20 04:40:32 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 238
ERROR - 2021-01-20 04:40:32 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 239
ERROR - 2021-01-20 04:40:32 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 240
ERROR - 2021-01-20 04:40:32 --> Severity: Notice --> Undefined index: jumlah C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 241
ERROR - 2021-01-20 04:40:32 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 242
ERROR - 2021-01-20 04:40:32 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 243
INFO - 2021-01-20 04:40:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:40:32 --> Final output sent to browser
INFO - 2021-01-20 04:41:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:41:42 --> Final output sent to browser
INFO - 2021-01-20 04:41:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:41:51 --> Final output sent to browser
INFO - 2021-01-20 04:45:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:45:21 --> Final output sent to browser
INFO - 2021-01-20 04:45:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:45:37 --> Final output sent to browser
INFO - 2021-01-20 04:46:02 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:46:02 --> Final output sent to browser
INFO - 2021-01-20 04:48:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:48:08 --> Final output sent to browser
INFO - 2021-01-20 04:48:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:48:17 --> Final output sent to browser
INFO - 2021-01-20 04:49:43 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:49:43 --> Final output sent to browser
INFO - 2021-01-20 04:50:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 04:50:21 --> Final output sent to browser
ERROR - 2021-01-20 04:57:12 --> Severity: Warning --> array_values() expects exactly 1 parameter, 2 given C:\xampp\htdocs\poliklinik\application\controllers\Dashboard.php 42
ERROR - 2021-01-20 04:57:55 --> Severity: Warning --> array_values() expects exactly 1 parameter, 2 given C:\xampp\htdocs\poliklinik\application\controllers\Dashboard.php 42
ERROR - 2021-01-20 05:00:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\poliklinik\application\controllers\Dashboard.php 42
ERROR - 2021-01-20 05:00:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\poliklinik\application\controllers\Dashboard.php 42
ERROR - 2021-01-20 05:14:19 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 298
INFO - 2021-01-20 05:14:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:14:19 --> Final output sent to browser
ERROR - 2021-01-20 05:15:18 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 298
INFO - 2021-01-20 05:15:18 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:15:18 --> Final output sent to browser
ERROR - 2021-01-20 05:17:15 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 298
INFO - 2021-01-20 05:17:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:17:15 --> Final output sent to browser
ERROR - 2021-01-20 05:17:22 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 298
INFO - 2021-01-20 05:17:22 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:17:22 --> Final output sent to browser
INFO - 2021-01-20 05:17:56 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:17:56 --> Final output sent to browser
INFO - 2021-01-20 05:19:26 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:19:26 --> Final output sent to browser
INFO - 2021-01-20 05:19:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:19:46 --> Final output sent to browser
INFO - 2021-01-20 05:20:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:20:21 --> Final output sent to browser
INFO - 2021-01-20 05:22:01 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:22:01 --> Final output sent to browser
INFO - 2021-01-20 05:22:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:22:04 --> Final output sent to browser
INFO - 2021-01-20 05:22:26 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:22:26 --> Final output sent to browser
ERROR - 2021-01-20 05:22:58 --> Severity: Notice --> Undefined variable: satu_t C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 238
ERROR - 2021-01-20 05:22:58 --> Severity: Notice --> Undefined variable: dua_t C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 239
ERROR - 2021-01-20 05:22:58 --> Severity: Notice --> Undefined variable: tiga_t C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 240
ERROR - 2021-01-20 05:22:58 --> Severity: Notice --> Undefined variable: empat_t C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 241
ERROR - 2021-01-20 05:22:58 --> Severity: Notice --> Undefined variable: lima_t C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 242
ERROR - 2021-01-20 05:22:58 --> Severity: Notice --> Undefined variable: enam_t C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 243
INFO - 2021-01-20 05:22:58 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:22:58 --> Final output sent to browser
ERROR - 2021-01-20 05:23:57 --> Severity: Notice --> Undefined variable: limap C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 244
ERROR - 2021-01-20 05:23:57 --> Severity: Notice --> Undefined variable: enamp C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 245
INFO - 2021-01-20 05:23:57 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:23:57 --> Final output sent to browser
INFO - 2021-01-20 05:24:28 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:24:28 --> Final output sent to browser
INFO - 2021-01-20 05:25:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:25:19 --> Final output sent to browser
INFO - 2021-01-20 05:25:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:25:39 --> Final output sent to browser
INFO - 2021-01-20 05:26:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:26:17 --> Final output sent to browser
ERROR - 2021-01-20 05:34:32 --> Severity: Notice --> Undefined variable: k1k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 405
ERROR - 2021-01-20 05:34:32 --> Severity: Notice --> Undefined variable: k2k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 406
ERROR - 2021-01-20 05:34:32 --> Severity: Notice --> Undefined variable: k3k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 407
ERROR - 2021-01-20 05:34:32 --> Severity: Notice --> Undefined variable: k4k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 408
ERROR - 2021-01-20 05:34:32 --> Severity: Notice --> Undefined variable: k5k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 409
ERROR - 2021-01-20 05:34:32 --> Severity: Notice --> Undefined variable: k6k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 410
INFO - 2021-01-20 05:34:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:34:32 --> Final output sent to browser
ERROR - 2021-01-20 05:35:33 --> Severity: Notice --> Undefined variable: k1k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 405
ERROR - 2021-01-20 05:35:33 --> Severity: Notice --> Undefined variable: k2k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 406
ERROR - 2021-01-20 05:35:33 --> Severity: Notice --> Undefined variable: k3k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 407
ERROR - 2021-01-20 05:35:33 --> Severity: Notice --> Undefined variable: k4k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 408
ERROR - 2021-01-20 05:35:33 --> Severity: Notice --> Undefined variable: k5k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 409
ERROR - 2021-01-20 05:35:33 --> Severity: Notice --> Undefined variable: k6k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 410
INFO - 2021-01-20 05:35:33 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:35:33 --> Final output sent to browser
ERROR - 2021-01-20 05:36:02 --> Severity: Notice --> Undefined variable: k1k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 405
ERROR - 2021-01-20 05:36:02 --> Severity: Notice --> Undefined variable: k2k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 406
ERROR - 2021-01-20 05:36:02 --> Severity: Notice --> Undefined variable: k3k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 407
ERROR - 2021-01-20 05:36:02 --> Severity: Notice --> Undefined variable: k4k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 408
ERROR - 2021-01-20 05:36:02 --> Severity: Notice --> Undefined variable: k5k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 409
ERROR - 2021-01-20 05:36:02 --> Severity: Notice --> Undefined variable: k6k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 410
INFO - 2021-01-20 05:36:02 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:36:02 --> Final output sent to browser
ERROR - 2021-01-20 05:36:54 --> Severity: Notice --> Undefined variable: k1k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 405
ERROR - 2021-01-20 05:36:54 --> Severity: Notice --> Undefined variable: k2k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 406
ERROR - 2021-01-20 05:36:54 --> Severity: Notice --> Undefined variable: k3k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 407
ERROR - 2021-01-20 05:36:54 --> Severity: Notice --> Undefined variable: k4k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 408
ERROR - 2021-01-20 05:36:54 --> Severity: Notice --> Undefined variable: k5k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 409
ERROR - 2021-01-20 05:36:54 --> Severity: Notice --> Undefined variable: k6k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 410
INFO - 2021-01-20 05:36:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:36:54 --> Final output sent to browser
ERROR - 2021-01-20 05:37:32 --> Severity: Notice --> Undefined variable: k1k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 405
ERROR - 2021-01-20 05:37:32 --> Severity: Notice --> Undefined variable: k2k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 406
ERROR - 2021-01-20 05:37:32 --> Severity: Notice --> Undefined variable: k3k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 407
ERROR - 2021-01-20 05:37:32 --> Severity: Notice --> Undefined variable: k4k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 408
ERROR - 2021-01-20 05:37:32 --> Severity: Notice --> Undefined variable: k5k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 409
ERROR - 2021-01-20 05:37:32 --> Severity: Notice --> Undefined variable: k6k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 410
INFO - 2021-01-20 05:37:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:37:32 --> Final output sent to browser
ERROR - 2021-01-20 05:38:45 --> Severity: Notice --> Undefined variable: k1k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 405
ERROR - 2021-01-20 05:38:45 --> Severity: Notice --> Undefined variable: k2k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 406
ERROR - 2021-01-20 05:38:45 --> Severity: Notice --> Undefined variable: k3k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 407
ERROR - 2021-01-20 05:38:45 --> Severity: Notice --> Undefined variable: k4k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 408
ERROR - 2021-01-20 05:38:45 --> Severity: Notice --> Undefined variable: k5k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 409
ERROR - 2021-01-20 05:38:45 --> Severity: Notice --> Undefined variable: k6k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 410
INFO - 2021-01-20 05:38:45 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:38:45 --> Final output sent to browser
ERROR - 2021-01-20 05:39:12 --> Severity: Notice --> Undefined variable: k1k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 405
ERROR - 2021-01-20 05:39:12 --> Severity: Notice --> Undefined variable: k2k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 406
ERROR - 2021-01-20 05:39:12 --> Severity: Notice --> Undefined variable: k3k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 407
ERROR - 2021-01-20 05:39:12 --> Severity: Notice --> Undefined variable: k4k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 408
ERROR - 2021-01-20 05:39:12 --> Severity: Notice --> Undefined variable: k5k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 409
ERROR - 2021-01-20 05:39:12 --> Severity: Notice --> Undefined variable: k6k C:\xampp\htdocs\poliklinik\application\views\dashboard\index.php 410
INFO - 2021-01-20 05:39:12 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:39:12 --> Final output sent to browser
INFO - 2021-01-20 05:41:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 05:41:42 --> Final output sent to browser
INFO - 2021-01-20 05:42:09 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:42:09 --> Final output sent to browser
INFO - 2021-01-20 05:43:20 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:43:20 --> Final output sent to browser
INFO - 2021-01-20 05:43:56 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:43:56 --> Final output sent to browser
INFO - 2021-01-20 05:44:11 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:44:11 --> Final output sent to browser
INFO - 2021-01-20 05:44:52 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:44:52 --> Final output sent to browser
INFO - 2021-01-20 05:45:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:45:07 --> Final output sent to browser
INFO - 2021-01-20 05:45:16 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:45:16 --> Final output sent to browser
INFO - 2021-01-20 05:45:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:45:38 --> Final output sent to browser
INFO - 2021-01-20 05:45:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:45:48 --> Final output sent to browser
INFO - 2021-01-20 05:46:02 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:46:02 --> Final output sent to browser
INFO - 2021-01-20 05:46:10 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:46:10 --> Final output sent to browser
INFO - 2021-01-20 05:46:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:46:32 --> Final output sent to browser
INFO - 2021-01-20 05:46:45 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:46:45 --> Final output sent to browser
INFO - 2021-01-20 05:47:02 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 05:47:02 --> Final output sent to browser
INFO - 2021-01-20 00:00:54 --> Config Class Initialized
INFO - 2021-01-20 00:00:54 --> Hooks Class Initialized
INFO - 2021-01-20 00:00:54 --> Utf8 Class Initialized
INFO - 2021-01-20 00:00:54 --> URI Class Initialized
INFO - 2021-01-20 00:00:54 --> Router Class Initialized
INFO - 2021-01-20 00:00:54 --> Output Class Initialized
INFO - 2021-01-20 00:00:54 --> Security Class Initialized
INFO - 2021-01-20 00:00:54 --> Input Class Initialized
INFO - 2021-01-20 00:00:54 --> Language Class Initialized
INFO - 2021-01-20 00:00:54 --> Loader Class Initialized
INFO - 2021-01-20 00:00:54 --> Helper loaded: url_helper
INFO - 2021-01-20 00:00:54 --> Helper loaded: file_helper
INFO - 2021-01-20 00:00:54 --> Helper loaded: security_helper
INFO - 2021-01-20 00:00:54 --> Helper loaded: form_helper
INFO - 2021-01-20 00:00:54 --> Helper loaded: access_helper
INFO - 2021-01-20 00:00:54 --> Helper loaded: date_helper
INFO - 2021-01-20 00:00:54 --> Database Driver Class Initialized
INFO - 2021-01-20 00:00:54 --> User Agent Class Initialized
INFO - 2021-01-20 00:00:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:00:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:00:54 --> Pagination Class Initialized
INFO - 2021-01-20 00:00:54 --> Form Validation Class Initialized
INFO - 2021-01-20 00:00:54 --> Controller Class Initialized
INFO - 2021-01-20 00:00:54 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:00:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat_keluar.php
INFO - 2021-01-20 00:00:54 --> Final output sent to browser
INFO - 2021-01-20 00:00:55 --> Config Class Initialized
INFO - 2021-01-20 00:00:55 --> Hooks Class Initialized
INFO - 2021-01-20 00:00:55 --> Utf8 Class Initialized
INFO - 2021-01-20 00:00:55 --> URI Class Initialized
INFO - 2021-01-20 00:00:55 --> Router Class Initialized
INFO - 2021-01-20 00:00:55 --> Output Class Initialized
INFO - 2021-01-20 00:00:55 --> Security Class Initialized
INFO - 2021-01-20 00:00:55 --> Input Class Initialized
INFO - 2021-01-20 00:00:55 --> Language Class Initialized
INFO - 2021-01-20 00:00:55 --> Loader Class Initialized
INFO - 2021-01-20 00:00:55 --> Helper loaded: url_helper
INFO - 2021-01-20 00:00:55 --> Helper loaded: file_helper
INFO - 2021-01-20 00:00:55 --> Helper loaded: security_helper
INFO - 2021-01-20 00:00:55 --> Helper loaded: form_helper
INFO - 2021-01-20 00:00:55 --> Helper loaded: access_helper
INFO - 2021-01-20 00:00:55 --> Helper loaded: date_helper
INFO - 2021-01-20 00:00:55 --> Database Driver Class Initialized
INFO - 2021-01-20 00:00:55 --> User Agent Class Initialized
INFO - 2021-01-20 00:00:55 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:00:55 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:00:55 --> Pagination Class Initialized
INFO - 2021-01-20 00:00:55 --> Form Validation Class Initialized
INFO - 2021-01-20 00:00:55 --> Controller Class Initialized
INFO - 2021-01-20 00:00:55 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:00:55 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:00:55 --> Final output sent to browser
INFO - 2021-01-20 00:00:58 --> Config Class Initialized
INFO - 2021-01-20 00:00:58 --> Hooks Class Initialized
INFO - 2021-01-20 00:00:58 --> Utf8 Class Initialized
INFO - 2021-01-20 00:00:58 --> URI Class Initialized
INFO - 2021-01-20 00:00:58 --> Router Class Initialized
INFO - 2021-01-20 00:00:58 --> Output Class Initialized
INFO - 2021-01-20 00:00:58 --> Security Class Initialized
INFO - 2021-01-20 00:00:58 --> Input Class Initialized
INFO - 2021-01-20 00:00:58 --> Language Class Initialized
INFO - 2021-01-20 00:00:58 --> Loader Class Initialized
INFO - 2021-01-20 00:00:58 --> Helper loaded: url_helper
INFO - 2021-01-20 00:00:58 --> Helper loaded: file_helper
INFO - 2021-01-20 00:00:58 --> Helper loaded: security_helper
INFO - 2021-01-20 00:00:58 --> Helper loaded: form_helper
INFO - 2021-01-20 00:00:58 --> Helper loaded: access_helper
INFO - 2021-01-20 00:00:58 --> Helper loaded: date_helper
INFO - 2021-01-20 00:00:58 --> Database Driver Class Initialized
INFO - 2021-01-20 00:00:58 --> User Agent Class Initialized
INFO - 2021-01-20 00:00:58 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:00:58 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:00:58 --> Pagination Class Initialized
INFO - 2021-01-20 00:00:58 --> Form Validation Class Initialized
INFO - 2021-01-20 00:00:58 --> Controller Class Initialized
INFO - 2021-01-20 00:00:58 --> Model "Obat_model" initialized
ERROR - 2021-01-20 00:00:58 --> Severity: Notice --> Undefined variable: satup C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 90
ERROR - 2021-01-20 00:00:58 --> Severity: Notice --> Undefined variable: duap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 91
ERROR - 2021-01-20 00:00:58 --> Severity: Notice --> Undefined variable: tigap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 92
ERROR - 2021-01-20 00:00:58 --> Severity: Notice --> Undefined variable: empatp C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 93
INFO - 2021-01-20 00:00:58 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_pm.php
INFO - 2021-01-20 00:00:58 --> Final output sent to browser
INFO - 2021-01-20 00:02:13 --> Config Class Initialized
INFO - 2021-01-20 00:02:13 --> Hooks Class Initialized
INFO - 2021-01-20 00:02:13 --> Utf8 Class Initialized
INFO - 2021-01-20 00:02:13 --> URI Class Initialized
INFO - 2021-01-20 00:02:13 --> Router Class Initialized
INFO - 2021-01-20 00:02:13 --> Output Class Initialized
INFO - 2021-01-20 00:02:13 --> Security Class Initialized
INFO - 2021-01-20 00:02:13 --> Input Class Initialized
INFO - 2021-01-20 00:02:13 --> Language Class Initialized
INFO - 2021-01-20 00:02:13 --> Loader Class Initialized
INFO - 2021-01-20 00:02:13 --> Helper loaded: url_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: file_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: security_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: form_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: access_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: date_helper
INFO - 2021-01-20 00:02:13 --> Database Driver Class Initialized
INFO - 2021-01-20 00:02:13 --> User Agent Class Initialized
INFO - 2021-01-20 00:02:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:02:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:02:13 --> Pagination Class Initialized
INFO - 2021-01-20 00:02:13 --> Form Validation Class Initialized
INFO - 2021-01-20 00:02:13 --> Controller Class Initialized
INFO - 2021-01-20 00:02:13 --> Model "Obat_model" initialized
ERROR - 2021-01-20 00:02:13 --> Severity: Notice --> Undefined variable: satup C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 91
ERROR - 2021-01-20 00:02:13 --> Severity: Notice --> Undefined variable: duap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 92
ERROR - 2021-01-20 00:02:13 --> Severity: Notice --> Undefined variable: tigap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 93
ERROR - 2021-01-20 00:02:13 --> Severity: Notice --> Undefined variable: empatp C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 94
INFO - 2021-01-20 00:02:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_pm.php
INFO - 2021-01-20 00:02:13 --> Final output sent to browser
INFO - 2021-01-20 00:02:13 --> Config Class Initialized
INFO - 2021-01-20 00:02:13 --> Hooks Class Initialized
INFO - 2021-01-20 00:02:13 --> Utf8 Class Initialized
INFO - 2021-01-20 00:02:13 --> URI Class Initialized
INFO - 2021-01-20 00:02:13 --> Router Class Initialized
INFO - 2021-01-20 00:02:13 --> Output Class Initialized
INFO - 2021-01-20 00:02:13 --> Security Class Initialized
INFO - 2021-01-20 00:02:13 --> Input Class Initialized
INFO - 2021-01-20 00:02:13 --> Language Class Initialized
INFO - 2021-01-20 00:02:13 --> Loader Class Initialized
INFO - 2021-01-20 00:02:13 --> Helper loaded: url_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: file_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: security_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: form_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: access_helper
INFO - 2021-01-20 00:02:13 --> Helper loaded: date_helper
INFO - 2021-01-20 00:02:13 --> Database Driver Class Initialized
INFO - 2021-01-20 00:02:13 --> User Agent Class Initialized
INFO - 2021-01-20 00:02:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:02:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:02:13 --> Pagination Class Initialized
INFO - 2021-01-20 00:02:13 --> Form Validation Class Initialized
INFO - 2021-01-20 00:02:13 --> Controller Class Initialized
INFO - 2021-01-20 00:02:13 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:02:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:02:13 --> Final output sent to browser
INFO - 2021-01-20 00:02:18 --> Config Class Initialized
INFO - 2021-01-20 00:02:18 --> Hooks Class Initialized
INFO - 2021-01-20 00:02:18 --> Utf8 Class Initialized
INFO - 2021-01-20 00:02:18 --> URI Class Initialized
INFO - 2021-01-20 00:02:18 --> Router Class Initialized
INFO - 2021-01-20 00:02:18 --> Output Class Initialized
INFO - 2021-01-20 00:02:18 --> Security Class Initialized
INFO - 2021-01-20 00:02:18 --> Input Class Initialized
INFO - 2021-01-20 00:02:18 --> Language Class Initialized
INFO - 2021-01-20 00:02:18 --> Loader Class Initialized
INFO - 2021-01-20 00:02:18 --> Helper loaded: url_helper
INFO - 2021-01-20 00:02:18 --> Helper loaded: file_helper
INFO - 2021-01-20 00:02:18 --> Helper loaded: security_helper
INFO - 2021-01-20 00:02:18 --> Helper loaded: form_helper
INFO - 2021-01-20 00:02:18 --> Helper loaded: access_helper
INFO - 2021-01-20 00:02:18 --> Helper loaded: date_helper
INFO - 2021-01-20 00:02:18 --> Database Driver Class Initialized
INFO - 2021-01-20 00:02:18 --> User Agent Class Initialized
INFO - 2021-01-20 00:02:18 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:02:18 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:02:18 --> Pagination Class Initialized
INFO - 2021-01-20 00:02:18 --> Form Validation Class Initialized
INFO - 2021-01-20 00:02:18 --> Controller Class Initialized
INFO - 2021-01-20 00:02:18 --> Model "Obat_model" initialized
ERROR - 2021-01-20 00:02:18 --> Severity: Notice --> Undefined variable: satup C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 91
ERROR - 2021-01-20 00:02:18 --> Severity: Notice --> Undefined variable: duap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 92
ERROR - 2021-01-20 00:02:18 --> Severity: Notice --> Undefined variable: tigap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 93
ERROR - 2021-01-20 00:02:18 --> Severity: Notice --> Undefined variable: empatp C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 94
INFO - 2021-01-20 00:02:18 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_pm.php
INFO - 2021-01-20 00:02:18 --> Final output sent to browser
INFO - 2021-01-20 00:02:29 --> Config Class Initialized
INFO - 2021-01-20 00:02:29 --> Hooks Class Initialized
INFO - 2021-01-20 00:02:29 --> Utf8 Class Initialized
INFO - 2021-01-20 00:02:29 --> URI Class Initialized
INFO - 2021-01-20 00:02:29 --> Router Class Initialized
INFO - 2021-01-20 00:02:29 --> Output Class Initialized
INFO - 2021-01-20 00:02:29 --> Security Class Initialized
INFO - 2021-01-20 00:02:29 --> Input Class Initialized
INFO - 2021-01-20 00:02:29 --> Language Class Initialized
INFO - 2021-01-20 00:02:29 --> Loader Class Initialized
INFO - 2021-01-20 00:02:29 --> Helper loaded: url_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: file_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: security_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: form_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: access_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: date_helper
INFO - 2021-01-20 00:02:29 --> Database Driver Class Initialized
INFO - 2021-01-20 00:02:29 --> User Agent Class Initialized
INFO - 2021-01-20 00:02:29 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:02:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:02:29 --> Pagination Class Initialized
INFO - 2021-01-20 00:02:29 --> Form Validation Class Initialized
INFO - 2021-01-20 00:02:29 --> Controller Class Initialized
INFO - 2021-01-20 00:02:29 --> Model "Obat_model" initialized
ERROR - 2021-01-20 00:02:29 --> Severity: Notice --> Undefined variable: satup C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 91
ERROR - 2021-01-20 00:02:29 --> Severity: Notice --> Undefined variable: duap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 92
ERROR - 2021-01-20 00:02:29 --> Severity: Notice --> Undefined variable: tigap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 93
ERROR - 2021-01-20 00:02:29 --> Severity: Notice --> Undefined variable: empatp C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 94
INFO - 2021-01-20 00:02:29 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_pm.php
INFO - 2021-01-20 00:02:29 --> Final output sent to browser
INFO - 2021-01-20 00:02:29 --> Config Class Initialized
INFO - 2021-01-20 00:02:29 --> Hooks Class Initialized
INFO - 2021-01-20 00:02:29 --> Utf8 Class Initialized
INFO - 2021-01-20 00:02:29 --> URI Class Initialized
INFO - 2021-01-20 00:02:29 --> Router Class Initialized
INFO - 2021-01-20 00:02:29 --> Output Class Initialized
INFO - 2021-01-20 00:02:29 --> Security Class Initialized
INFO - 2021-01-20 00:02:29 --> Input Class Initialized
INFO - 2021-01-20 00:02:29 --> Language Class Initialized
INFO - 2021-01-20 00:02:29 --> Loader Class Initialized
INFO - 2021-01-20 00:02:29 --> Helper loaded: url_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: file_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: security_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: form_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: access_helper
INFO - 2021-01-20 00:02:29 --> Helper loaded: date_helper
INFO - 2021-01-20 00:02:29 --> Database Driver Class Initialized
INFO - 2021-01-20 00:02:29 --> User Agent Class Initialized
INFO - 2021-01-20 00:02:29 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:02:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:02:29 --> Pagination Class Initialized
INFO - 2021-01-20 00:02:29 --> Form Validation Class Initialized
INFO - 2021-01-20 00:02:29 --> Controller Class Initialized
INFO - 2021-01-20 00:02:29 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:02:29 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:02:29 --> Final output sent to browser
INFO - 2021-01-20 00:02:32 --> Config Class Initialized
INFO - 2021-01-20 00:02:32 --> Hooks Class Initialized
INFO - 2021-01-20 00:02:32 --> Utf8 Class Initialized
INFO - 2021-01-20 00:02:32 --> URI Class Initialized
INFO - 2021-01-20 00:02:32 --> Router Class Initialized
INFO - 2021-01-20 00:02:32 --> Output Class Initialized
INFO - 2021-01-20 00:02:32 --> Security Class Initialized
INFO - 2021-01-20 00:02:32 --> Input Class Initialized
INFO - 2021-01-20 00:02:32 --> Language Class Initialized
INFO - 2021-01-20 00:02:32 --> Loader Class Initialized
INFO - 2021-01-20 00:02:32 --> Helper loaded: url_helper
INFO - 2021-01-20 00:02:32 --> Helper loaded: file_helper
INFO - 2021-01-20 00:02:32 --> Helper loaded: security_helper
INFO - 2021-01-20 00:02:32 --> Helper loaded: form_helper
INFO - 2021-01-20 00:02:32 --> Helper loaded: access_helper
INFO - 2021-01-20 00:02:32 --> Helper loaded: date_helper
INFO - 2021-01-20 00:02:32 --> Database Driver Class Initialized
INFO - 2021-01-20 00:02:32 --> User Agent Class Initialized
INFO - 2021-01-20 00:02:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:02:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:02:32 --> Pagination Class Initialized
INFO - 2021-01-20 00:02:32 --> Form Validation Class Initialized
INFO - 2021-01-20 00:02:32 --> Controller Class Initialized
INFO - 2021-01-20 00:02:32 --> Model "Obat_model" initialized
ERROR - 2021-01-20 00:02:32 --> Severity: Notice --> Undefined variable: satup C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 91
ERROR - 2021-01-20 00:02:32 --> Severity: Notice --> Undefined variable: duap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 92
ERROR - 2021-01-20 00:02:32 --> Severity: Notice --> Undefined variable: tigap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 93
ERROR - 2021-01-20 00:02:32 --> Severity: Notice --> Undefined variable: empatp C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 94
INFO - 2021-01-20 00:02:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_pm.php
INFO - 2021-01-20 00:02:32 --> Final output sent to browser
INFO - 2021-01-20 00:02:48 --> Config Class Initialized
INFO - 2021-01-20 00:02:48 --> Hooks Class Initialized
INFO - 2021-01-20 00:02:48 --> Utf8 Class Initialized
INFO - 2021-01-20 00:02:48 --> URI Class Initialized
INFO - 2021-01-20 00:02:48 --> Router Class Initialized
INFO - 2021-01-20 00:02:48 --> Output Class Initialized
INFO - 2021-01-20 00:02:48 --> Security Class Initialized
INFO - 2021-01-20 00:02:48 --> Input Class Initialized
INFO - 2021-01-20 00:02:48 --> Language Class Initialized
INFO - 2021-01-20 00:02:48 --> Loader Class Initialized
INFO - 2021-01-20 00:02:48 --> Helper loaded: url_helper
INFO - 2021-01-20 00:02:48 --> Helper loaded: file_helper
INFO - 2021-01-20 00:02:48 --> Helper loaded: security_helper
INFO - 2021-01-20 00:02:48 --> Helper loaded: form_helper
INFO - 2021-01-20 00:02:48 --> Helper loaded: access_helper
INFO - 2021-01-20 00:02:48 --> Helper loaded: date_helper
INFO - 2021-01-20 00:02:48 --> Database Driver Class Initialized
INFO - 2021-01-20 00:02:48 --> User Agent Class Initialized
INFO - 2021-01-20 00:02:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:02:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:02:48 --> Pagination Class Initialized
INFO - 2021-01-20 00:02:48 --> Form Validation Class Initialized
INFO - 2021-01-20 00:02:48 --> Controller Class Initialized
INFO - 2021-01-20 00:02:48 --> Model "Obat_model" initialized
ERROR - 2021-01-20 00:02:48 --> Severity: Notice --> Undefined variable: satup C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 91
ERROR - 2021-01-20 00:02:48 --> Severity: Notice --> Undefined variable: duap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 92
ERROR - 2021-01-20 00:02:48 --> Severity: Notice --> Undefined variable: tigap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 93
ERROR - 2021-01-20 00:02:48 --> Severity: Notice --> Undefined variable: empatp C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 94
INFO - 2021-01-20 00:02:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_pm.php
INFO - 2021-01-20 00:02:48 --> Final output sent to browser
INFO - 2021-01-20 00:02:49 --> Config Class Initialized
INFO - 2021-01-20 00:02:49 --> Hooks Class Initialized
INFO - 2021-01-20 00:02:49 --> Utf8 Class Initialized
INFO - 2021-01-20 00:02:49 --> URI Class Initialized
INFO - 2021-01-20 00:02:49 --> Router Class Initialized
INFO - 2021-01-20 00:02:49 --> Output Class Initialized
INFO - 2021-01-20 00:02:49 --> Security Class Initialized
INFO - 2021-01-20 00:02:49 --> Input Class Initialized
INFO - 2021-01-20 00:02:49 --> Language Class Initialized
INFO - 2021-01-20 00:02:49 --> Loader Class Initialized
INFO - 2021-01-20 00:02:49 --> Helper loaded: url_helper
INFO - 2021-01-20 00:02:49 --> Helper loaded: file_helper
INFO - 2021-01-20 00:02:49 --> Helper loaded: security_helper
INFO - 2021-01-20 00:02:49 --> Helper loaded: form_helper
INFO - 2021-01-20 00:02:49 --> Helper loaded: access_helper
INFO - 2021-01-20 00:02:49 --> Helper loaded: date_helper
INFO - 2021-01-20 00:02:49 --> Database Driver Class Initialized
INFO - 2021-01-20 00:02:49 --> User Agent Class Initialized
INFO - 2021-01-20 00:02:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:02:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:02:49 --> Pagination Class Initialized
INFO - 2021-01-20 00:02:49 --> Form Validation Class Initialized
INFO - 2021-01-20 00:02:49 --> Controller Class Initialized
INFO - 2021-01-20 00:02:49 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:02:49 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:02:49 --> Final output sent to browser
INFO - 2021-01-20 00:02:51 --> Config Class Initialized
INFO - 2021-01-20 00:02:51 --> Hooks Class Initialized
INFO - 2021-01-20 00:02:51 --> Utf8 Class Initialized
INFO - 2021-01-20 00:02:51 --> URI Class Initialized
INFO - 2021-01-20 00:02:51 --> Router Class Initialized
INFO - 2021-01-20 00:02:51 --> Output Class Initialized
INFO - 2021-01-20 00:02:51 --> Security Class Initialized
INFO - 2021-01-20 00:02:51 --> Input Class Initialized
INFO - 2021-01-20 00:02:51 --> Language Class Initialized
INFO - 2021-01-20 00:02:51 --> Loader Class Initialized
INFO - 2021-01-20 00:02:51 --> Helper loaded: url_helper
INFO - 2021-01-20 00:02:51 --> Helper loaded: file_helper
INFO - 2021-01-20 00:02:51 --> Helper loaded: security_helper
INFO - 2021-01-20 00:02:51 --> Helper loaded: form_helper
INFO - 2021-01-20 00:02:51 --> Helper loaded: access_helper
INFO - 2021-01-20 00:02:51 --> Helper loaded: date_helper
INFO - 2021-01-20 00:02:51 --> Database Driver Class Initialized
INFO - 2021-01-20 00:02:51 --> User Agent Class Initialized
INFO - 2021-01-20 00:02:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:02:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:02:51 --> Pagination Class Initialized
INFO - 2021-01-20 00:02:51 --> Form Validation Class Initialized
INFO - 2021-01-20 00:02:51 --> Controller Class Initialized
INFO - 2021-01-20 00:02:51 --> Model "Obat_model" initialized
ERROR - 2021-01-20 00:02:51 --> Severity: Notice --> Undefined variable: satup C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 91
ERROR - 2021-01-20 00:02:51 --> Severity: Notice --> Undefined variable: duap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 92
ERROR - 2021-01-20 00:02:51 --> Severity: Notice --> Undefined variable: tigap C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 93
ERROR - 2021-01-20 00:02:51 --> Severity: Notice --> Undefined variable: empatp C:\xampp\htdocs\poliklinik\application\views\laporan\print\print_pm.php 94
INFO - 2021-01-20 00:02:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_pm.php
INFO - 2021-01-20 00:02:51 --> Final output sent to browser
INFO - 2021-01-20 00:05:13 --> Config Class Initialized
INFO - 2021-01-20 00:05:13 --> Hooks Class Initialized
INFO - 2021-01-20 00:05:13 --> Utf8 Class Initialized
INFO - 2021-01-20 00:05:13 --> URI Class Initialized
INFO - 2021-01-20 00:05:13 --> Router Class Initialized
INFO - 2021-01-20 00:05:13 --> Output Class Initialized
INFO - 2021-01-20 00:05:13 --> Security Class Initialized
INFO - 2021-01-20 00:05:13 --> Input Class Initialized
INFO - 2021-01-20 00:05:13 --> Language Class Initialized
INFO - 2021-01-20 00:05:13 --> Loader Class Initialized
INFO - 2021-01-20 00:05:13 --> Helper loaded: url_helper
INFO - 2021-01-20 00:05:13 --> Helper loaded: file_helper
INFO - 2021-01-20 00:05:13 --> Helper loaded: security_helper
INFO - 2021-01-20 00:05:13 --> Helper loaded: form_helper
INFO - 2021-01-20 00:05:13 --> Helper loaded: access_helper
INFO - 2021-01-20 00:05:13 --> Helper loaded: date_helper
INFO - 2021-01-20 00:05:13 --> Database Driver Class Initialized
INFO - 2021-01-20 00:05:13 --> User Agent Class Initialized
INFO - 2021-01-20 00:05:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:05:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:05:13 --> Pagination Class Initialized
INFO - 2021-01-20 00:05:13 --> Form Validation Class Initialized
INFO - 2021-01-20 00:05:13 --> Controller Class Initialized
INFO - 2021-01-20 00:05:13 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:05:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:05:13 --> Final output sent to browser
INFO - 2021-01-20 00:05:33 --> Config Class Initialized
INFO - 2021-01-20 00:05:33 --> Hooks Class Initialized
INFO - 2021-01-20 00:05:33 --> Utf8 Class Initialized
INFO - 2021-01-20 00:05:33 --> URI Class Initialized
INFO - 2021-01-20 00:05:33 --> Router Class Initialized
INFO - 2021-01-20 00:05:33 --> Output Class Initialized
INFO - 2021-01-20 00:05:33 --> Security Class Initialized
INFO - 2021-01-20 00:05:33 --> Input Class Initialized
INFO - 2021-01-20 00:05:33 --> Language Class Initialized
INFO - 2021-01-20 00:05:33 --> Loader Class Initialized
INFO - 2021-01-20 00:05:33 --> Helper loaded: url_helper
INFO - 2021-01-20 00:05:33 --> Helper loaded: file_helper
INFO - 2021-01-20 00:05:33 --> Helper loaded: security_helper
INFO - 2021-01-20 00:05:33 --> Helper loaded: form_helper
INFO - 2021-01-20 00:05:33 --> Helper loaded: access_helper
INFO - 2021-01-20 00:05:33 --> Helper loaded: date_helper
INFO - 2021-01-20 00:05:33 --> Database Driver Class Initialized
INFO - 2021-01-20 00:05:33 --> User Agent Class Initialized
INFO - 2021-01-20 00:05:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:05:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:05:33 --> Pagination Class Initialized
INFO - 2021-01-20 00:05:33 --> Form Validation Class Initialized
INFO - 2021-01-20 00:05:33 --> Controller Class Initialized
INFO - 2021-01-20 00:05:33 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:05:33 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:05:33 --> Final output sent to browser
INFO - 2021-01-20 00:05:36 --> Config Class Initialized
INFO - 2021-01-20 00:05:36 --> Hooks Class Initialized
INFO - 2021-01-20 00:05:36 --> Utf8 Class Initialized
INFO - 2021-01-20 00:05:36 --> URI Class Initialized
INFO - 2021-01-20 00:05:36 --> Router Class Initialized
INFO - 2021-01-20 00:05:36 --> Output Class Initialized
INFO - 2021-01-20 00:05:36 --> Security Class Initialized
INFO - 2021-01-20 00:05:36 --> Input Class Initialized
INFO - 2021-01-20 00:05:36 --> Language Class Initialized
INFO - 2021-01-20 00:05:36 --> Loader Class Initialized
INFO - 2021-01-20 00:05:36 --> Helper loaded: url_helper
INFO - 2021-01-20 00:05:36 --> Helper loaded: file_helper
INFO - 2021-01-20 00:05:36 --> Helper loaded: security_helper
INFO - 2021-01-20 00:05:36 --> Helper loaded: form_helper
INFO - 2021-01-20 00:05:36 --> Helper loaded: access_helper
INFO - 2021-01-20 00:05:36 --> Helper loaded: date_helper
INFO - 2021-01-20 00:05:36 --> Database Driver Class Initialized
INFO - 2021-01-20 00:05:36 --> User Agent Class Initialized
INFO - 2021-01-20 00:05:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:05:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:05:36 --> Pagination Class Initialized
INFO - 2021-01-20 00:05:36 --> Form Validation Class Initialized
INFO - 2021-01-20 00:05:36 --> Controller Class Initialized
INFO - 2021-01-20 00:05:36 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:05:36 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_pm.php
INFO - 2021-01-20 00:05:36 --> Final output sent to browser
INFO - 2021-01-20 00:05:47 --> Config Class Initialized
INFO - 2021-01-20 00:05:47 --> Hooks Class Initialized
INFO - 2021-01-20 00:05:47 --> Utf8 Class Initialized
INFO - 2021-01-20 00:05:47 --> URI Class Initialized
INFO - 2021-01-20 00:05:47 --> Router Class Initialized
INFO - 2021-01-20 00:05:47 --> Output Class Initialized
INFO - 2021-01-20 00:05:47 --> Security Class Initialized
INFO - 2021-01-20 00:05:47 --> Input Class Initialized
INFO - 2021-01-20 00:05:47 --> Language Class Initialized
INFO - 2021-01-20 00:05:47 --> Loader Class Initialized
INFO - 2021-01-20 00:05:47 --> Helper loaded: url_helper
INFO - 2021-01-20 00:05:47 --> Helper loaded: file_helper
INFO - 2021-01-20 00:05:47 --> Helper loaded: security_helper
INFO - 2021-01-20 00:05:47 --> Helper loaded: form_helper
INFO - 2021-01-20 00:05:47 --> Helper loaded: access_helper
INFO - 2021-01-20 00:05:47 --> Helper loaded: date_helper
INFO - 2021-01-20 00:05:47 --> Database Driver Class Initialized
INFO - 2021-01-20 00:05:47 --> User Agent Class Initialized
INFO - 2021-01-20 00:05:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:05:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:05:47 --> Pagination Class Initialized
INFO - 2021-01-20 00:05:47 --> Form Validation Class Initialized
INFO - 2021-01-20 00:05:47 --> Controller Class Initialized
INFO - 2021-01-20 00:05:47 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:05:47 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:05:47 --> Final output sent to browser
INFO - 2021-01-20 00:07:59 --> Config Class Initialized
INFO - 2021-01-20 00:07:59 --> Hooks Class Initialized
INFO - 2021-01-20 00:07:59 --> Utf8 Class Initialized
INFO - 2021-01-20 00:07:59 --> URI Class Initialized
INFO - 2021-01-20 00:07:59 --> Router Class Initialized
INFO - 2021-01-20 00:07:59 --> Output Class Initialized
INFO - 2021-01-20 00:07:59 --> Security Class Initialized
INFO - 2021-01-20 00:07:59 --> Input Class Initialized
INFO - 2021-01-20 00:07:59 --> Language Class Initialized
INFO - 2021-01-20 00:07:59 --> Loader Class Initialized
INFO - 2021-01-20 00:07:59 --> Helper loaded: url_helper
INFO - 2021-01-20 00:07:59 --> Helper loaded: file_helper
INFO - 2021-01-20 00:07:59 --> Helper loaded: security_helper
INFO - 2021-01-20 00:07:59 --> Helper loaded: form_helper
INFO - 2021-01-20 00:07:59 --> Helper loaded: access_helper
INFO - 2021-01-20 00:07:59 --> Helper loaded: date_helper
INFO - 2021-01-20 00:07:59 --> Database Driver Class Initialized
INFO - 2021-01-20 00:07:59 --> User Agent Class Initialized
INFO - 2021-01-20 00:07:59 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:07:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:07:59 --> Pagination Class Initialized
INFO - 2021-01-20 00:07:59 --> Form Validation Class Initialized
INFO - 2021-01-20 00:07:59 --> Controller Class Initialized
INFO - 2021-01-20 00:07:59 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:07:59 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:07:59 --> Final output sent to browser
INFO - 2021-01-20 00:08:02 --> Config Class Initialized
INFO - 2021-01-20 00:08:02 --> Hooks Class Initialized
INFO - 2021-01-20 00:08:02 --> Utf8 Class Initialized
INFO - 2021-01-20 00:08:02 --> URI Class Initialized
INFO - 2021-01-20 00:08:02 --> Router Class Initialized
INFO - 2021-01-20 00:08:02 --> Output Class Initialized
INFO - 2021-01-20 00:08:02 --> Security Class Initialized
INFO - 2021-01-20 00:08:02 --> Input Class Initialized
INFO - 2021-01-20 00:08:02 --> Language Class Initialized
INFO - 2021-01-20 00:08:02 --> Loader Class Initialized
INFO - 2021-01-20 00:08:02 --> Helper loaded: url_helper
INFO - 2021-01-20 00:08:02 --> Helper loaded: file_helper
INFO - 2021-01-20 00:08:02 --> Helper loaded: security_helper
INFO - 2021-01-20 00:08:02 --> Helper loaded: form_helper
INFO - 2021-01-20 00:08:02 --> Helper loaded: access_helper
INFO - 2021-01-20 00:08:02 --> Helper loaded: date_helper
INFO - 2021-01-20 00:08:02 --> Database Driver Class Initialized
INFO - 2021-01-20 00:08:02 --> User Agent Class Initialized
INFO - 2021-01-20 00:08:02 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:08:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:08:02 --> Pagination Class Initialized
INFO - 2021-01-20 00:08:02 --> Form Validation Class Initialized
INFO - 2021-01-20 00:08:02 --> Controller Class Initialized
INFO - 2021-01-20 00:08:02 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:08:16 --> Config Class Initialized
INFO - 2021-01-20 00:08:16 --> Hooks Class Initialized
INFO - 2021-01-20 00:08:16 --> Utf8 Class Initialized
INFO - 2021-01-20 00:08:16 --> URI Class Initialized
INFO - 2021-01-20 00:08:16 --> Router Class Initialized
INFO - 2021-01-20 00:08:16 --> Output Class Initialized
INFO - 2021-01-20 00:08:16 --> Security Class Initialized
INFO - 2021-01-20 00:08:16 --> Input Class Initialized
INFO - 2021-01-20 00:08:16 --> Language Class Initialized
INFO - 2021-01-20 00:08:16 --> Loader Class Initialized
INFO - 2021-01-20 00:08:16 --> Helper loaded: url_helper
INFO - 2021-01-20 00:08:16 --> Helper loaded: file_helper
INFO - 2021-01-20 00:08:16 --> Helper loaded: security_helper
INFO - 2021-01-20 00:08:16 --> Helper loaded: form_helper
INFO - 2021-01-20 00:08:16 --> Helper loaded: access_helper
INFO - 2021-01-20 00:08:16 --> Helper loaded: date_helper
INFO - 2021-01-20 00:08:16 --> Database Driver Class Initialized
INFO - 2021-01-20 00:08:16 --> User Agent Class Initialized
INFO - 2021-01-20 00:08:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:08:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:08:16 --> Pagination Class Initialized
INFO - 2021-01-20 00:08:16 --> Form Validation Class Initialized
INFO - 2021-01-20 00:08:16 --> Controller Class Initialized
INFO - 2021-01-20 00:08:16 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:10:24 --> Config Class Initialized
INFO - 2021-01-20 00:10:24 --> Hooks Class Initialized
INFO - 2021-01-20 00:10:24 --> Utf8 Class Initialized
INFO - 2021-01-20 00:10:24 --> URI Class Initialized
INFO - 2021-01-20 00:10:24 --> Router Class Initialized
INFO - 2021-01-20 00:10:24 --> Output Class Initialized
INFO - 2021-01-20 00:10:24 --> Security Class Initialized
INFO - 2021-01-20 00:10:24 --> Input Class Initialized
INFO - 2021-01-20 00:10:24 --> Language Class Initialized
INFO - 2021-01-20 00:10:24 --> Loader Class Initialized
INFO - 2021-01-20 00:10:24 --> Helper loaded: url_helper
INFO - 2021-01-20 00:10:24 --> Helper loaded: file_helper
INFO - 2021-01-20 00:10:24 --> Helper loaded: security_helper
INFO - 2021-01-20 00:10:24 --> Helper loaded: form_helper
INFO - 2021-01-20 00:10:24 --> Helper loaded: access_helper
INFO - 2021-01-20 00:10:24 --> Helper loaded: date_helper
INFO - 2021-01-20 00:10:24 --> Database Driver Class Initialized
INFO - 2021-01-20 00:10:24 --> User Agent Class Initialized
INFO - 2021-01-20 00:10:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:10:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:10:24 --> Pagination Class Initialized
INFO - 2021-01-20 00:10:24 --> Form Validation Class Initialized
INFO - 2021-01-20 00:10:24 --> Controller Class Initialized
INFO - 2021-01-20 00:10:24 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:10:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_tm.php
INFO - 2021-01-20 00:10:24 --> Final output sent to browser
INFO - 2021-01-20 00:10:38 --> Config Class Initialized
INFO - 2021-01-20 00:10:38 --> Hooks Class Initialized
INFO - 2021-01-20 00:10:38 --> Utf8 Class Initialized
INFO - 2021-01-20 00:10:38 --> URI Class Initialized
INFO - 2021-01-20 00:10:38 --> Router Class Initialized
INFO - 2021-01-20 00:10:38 --> Output Class Initialized
INFO - 2021-01-20 00:10:38 --> Security Class Initialized
INFO - 2021-01-20 00:10:38 --> Input Class Initialized
INFO - 2021-01-20 00:10:38 --> Language Class Initialized
INFO - 2021-01-20 00:10:38 --> Loader Class Initialized
INFO - 2021-01-20 00:10:38 --> Helper loaded: url_helper
INFO - 2021-01-20 00:10:38 --> Helper loaded: file_helper
INFO - 2021-01-20 00:10:38 --> Helper loaded: security_helper
INFO - 2021-01-20 00:10:38 --> Helper loaded: form_helper
INFO - 2021-01-20 00:10:38 --> Helper loaded: access_helper
INFO - 2021-01-20 00:10:38 --> Helper loaded: date_helper
INFO - 2021-01-20 00:10:38 --> Database Driver Class Initialized
INFO - 2021-01-20 00:10:38 --> User Agent Class Initialized
INFO - 2021-01-20 00:10:38 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:10:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:10:38 --> Pagination Class Initialized
INFO - 2021-01-20 00:10:38 --> Form Validation Class Initialized
INFO - 2021-01-20 00:10:38 --> Controller Class Initialized
INFO - 2021-01-20 00:10:38 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:10:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:10:38 --> Final output sent to browser
INFO - 2021-01-20 00:13:07 --> Config Class Initialized
INFO - 2021-01-20 00:13:07 --> Hooks Class Initialized
INFO - 2021-01-20 00:13:07 --> Utf8 Class Initialized
INFO - 2021-01-20 00:13:07 --> URI Class Initialized
INFO - 2021-01-20 00:13:07 --> Router Class Initialized
INFO - 2021-01-20 00:13:07 --> Output Class Initialized
INFO - 2021-01-20 00:13:07 --> Security Class Initialized
INFO - 2021-01-20 00:13:07 --> Input Class Initialized
INFO - 2021-01-20 00:13:07 --> Language Class Initialized
INFO - 2021-01-20 00:13:07 --> Loader Class Initialized
INFO - 2021-01-20 00:13:07 --> Helper loaded: url_helper
INFO - 2021-01-20 00:13:07 --> Helper loaded: file_helper
INFO - 2021-01-20 00:13:07 --> Helper loaded: security_helper
INFO - 2021-01-20 00:13:07 --> Helper loaded: form_helper
INFO - 2021-01-20 00:13:07 --> Helper loaded: access_helper
INFO - 2021-01-20 00:13:07 --> Helper loaded: date_helper
INFO - 2021-01-20 00:13:07 --> Database Driver Class Initialized
INFO - 2021-01-20 00:13:07 --> User Agent Class Initialized
INFO - 2021-01-20 00:13:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:13:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:13:07 --> Pagination Class Initialized
INFO - 2021-01-20 00:13:07 --> Form Validation Class Initialized
INFO - 2021-01-20 00:13:07 --> Controller Class Initialized
INFO - 2021-01-20 00:13:07 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:13:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:13:07 --> Final output sent to browser
INFO - 2021-01-20 00:13:09 --> Config Class Initialized
INFO - 2021-01-20 00:13:09 --> Hooks Class Initialized
INFO - 2021-01-20 00:13:09 --> Utf8 Class Initialized
INFO - 2021-01-20 00:13:09 --> URI Class Initialized
INFO - 2021-01-20 00:13:09 --> Router Class Initialized
INFO - 2021-01-20 00:13:09 --> Output Class Initialized
INFO - 2021-01-20 00:13:09 --> Security Class Initialized
INFO - 2021-01-20 00:13:09 --> Input Class Initialized
INFO - 2021-01-20 00:13:09 --> Language Class Initialized
INFO - 2021-01-20 00:13:09 --> Loader Class Initialized
INFO - 2021-01-20 00:13:09 --> Helper loaded: url_helper
INFO - 2021-01-20 00:13:09 --> Helper loaded: file_helper
INFO - 2021-01-20 00:13:09 --> Helper loaded: security_helper
INFO - 2021-01-20 00:13:09 --> Helper loaded: form_helper
INFO - 2021-01-20 00:13:09 --> Helper loaded: access_helper
INFO - 2021-01-20 00:13:09 --> Helper loaded: date_helper
INFO - 2021-01-20 00:13:09 --> Database Driver Class Initialized
INFO - 2021-01-20 00:13:09 --> User Agent Class Initialized
INFO - 2021-01-20 00:13:09 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:13:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:13:09 --> Pagination Class Initialized
INFO - 2021-01-20 00:13:09 --> Form Validation Class Initialized
INFO - 2021-01-20 00:13:09 --> Controller Class Initialized
INFO - 2021-01-20 00:13:09 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:13:09 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_pk.php
INFO - 2021-01-20 00:13:09 --> Final output sent to browser
INFO - 2021-01-20 00:13:33 --> Config Class Initialized
INFO - 2021-01-20 00:13:33 --> Hooks Class Initialized
INFO - 2021-01-20 00:13:33 --> Utf8 Class Initialized
INFO - 2021-01-20 00:13:33 --> URI Class Initialized
INFO - 2021-01-20 00:13:33 --> Router Class Initialized
INFO - 2021-01-20 00:13:33 --> Output Class Initialized
INFO - 2021-01-20 00:13:33 --> Security Class Initialized
INFO - 2021-01-20 00:13:33 --> Input Class Initialized
INFO - 2021-01-20 00:13:33 --> Language Class Initialized
INFO - 2021-01-20 00:13:33 --> Loader Class Initialized
INFO - 2021-01-20 00:13:33 --> Helper loaded: url_helper
INFO - 2021-01-20 00:13:33 --> Helper loaded: file_helper
INFO - 2021-01-20 00:13:33 --> Helper loaded: security_helper
INFO - 2021-01-20 00:13:33 --> Helper loaded: form_helper
INFO - 2021-01-20 00:13:33 --> Helper loaded: access_helper
INFO - 2021-01-20 00:13:33 --> Helper loaded: date_helper
INFO - 2021-01-20 00:13:33 --> Database Driver Class Initialized
INFO - 2021-01-20 00:13:33 --> User Agent Class Initialized
INFO - 2021-01-20 00:13:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:13:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:13:33 --> Pagination Class Initialized
INFO - 2021-01-20 00:13:33 --> Form Validation Class Initialized
INFO - 2021-01-20 00:13:33 --> Controller Class Initialized
INFO - 2021-01-20 00:13:33 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:13:33 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:13:34 --> Final output sent to browser
INFO - 2021-01-20 00:14:21 --> Config Class Initialized
INFO - 2021-01-20 00:14:21 --> Hooks Class Initialized
INFO - 2021-01-20 00:14:21 --> Utf8 Class Initialized
INFO - 2021-01-20 00:14:21 --> URI Class Initialized
INFO - 2021-01-20 00:14:21 --> Router Class Initialized
INFO - 2021-01-20 00:14:21 --> Output Class Initialized
INFO - 2021-01-20 00:14:21 --> Security Class Initialized
INFO - 2021-01-20 00:14:21 --> Input Class Initialized
INFO - 2021-01-20 00:14:21 --> Language Class Initialized
INFO - 2021-01-20 00:14:21 --> Loader Class Initialized
INFO - 2021-01-20 00:14:21 --> Helper loaded: url_helper
INFO - 2021-01-20 00:14:21 --> Helper loaded: file_helper
INFO - 2021-01-20 00:14:21 --> Helper loaded: security_helper
INFO - 2021-01-20 00:14:21 --> Helper loaded: form_helper
INFO - 2021-01-20 00:14:21 --> Helper loaded: access_helper
INFO - 2021-01-20 00:14:21 --> Helper loaded: date_helper
INFO - 2021-01-20 00:14:21 --> Database Driver Class Initialized
INFO - 2021-01-20 00:14:21 --> User Agent Class Initialized
INFO - 2021-01-20 00:14:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:14:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:14:21 --> Pagination Class Initialized
INFO - 2021-01-20 00:14:21 --> Form Validation Class Initialized
INFO - 2021-01-20 00:14:21 --> Controller Class Initialized
INFO - 2021-01-20 00:14:21 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:14:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:14:21 --> Final output sent to browser
INFO - 2021-01-20 00:14:52 --> Config Class Initialized
INFO - 2021-01-20 00:14:52 --> Hooks Class Initialized
INFO - 2021-01-20 00:14:52 --> Utf8 Class Initialized
INFO - 2021-01-20 00:14:52 --> URI Class Initialized
INFO - 2021-01-20 00:14:52 --> Router Class Initialized
INFO - 2021-01-20 00:14:52 --> Output Class Initialized
INFO - 2021-01-20 00:14:52 --> Security Class Initialized
INFO - 2021-01-20 00:14:52 --> Input Class Initialized
INFO - 2021-01-20 00:14:52 --> Language Class Initialized
INFO - 2021-01-20 00:14:52 --> Loader Class Initialized
INFO - 2021-01-20 00:14:52 --> Helper loaded: url_helper
INFO - 2021-01-20 00:14:52 --> Helper loaded: file_helper
INFO - 2021-01-20 00:14:52 --> Helper loaded: security_helper
INFO - 2021-01-20 00:14:52 --> Helper loaded: form_helper
INFO - 2021-01-20 00:14:52 --> Helper loaded: access_helper
INFO - 2021-01-20 00:14:52 --> Helper loaded: date_helper
INFO - 2021-01-20 00:14:52 --> Database Driver Class Initialized
INFO - 2021-01-20 00:14:52 --> User Agent Class Initialized
INFO - 2021-01-20 00:14:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:14:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:14:52 --> Pagination Class Initialized
INFO - 2021-01-20 00:14:52 --> Form Validation Class Initialized
INFO - 2021-01-20 00:14:52 --> Controller Class Initialized
INFO - 2021-01-20 00:14:52 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:14:52 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:14:52 --> Final output sent to browser
INFO - 2021-01-20 00:14:54 --> Config Class Initialized
INFO - 2021-01-20 00:14:54 --> Hooks Class Initialized
INFO - 2021-01-20 00:14:54 --> Utf8 Class Initialized
INFO - 2021-01-20 00:14:54 --> URI Class Initialized
INFO - 2021-01-20 00:14:54 --> Router Class Initialized
INFO - 2021-01-20 00:14:54 --> Output Class Initialized
INFO - 2021-01-20 00:14:54 --> Security Class Initialized
INFO - 2021-01-20 00:14:54 --> Input Class Initialized
INFO - 2021-01-20 00:14:54 --> Language Class Initialized
INFO - 2021-01-20 00:14:54 --> Loader Class Initialized
INFO - 2021-01-20 00:14:54 --> Helper loaded: url_helper
INFO - 2021-01-20 00:14:54 --> Helper loaded: file_helper
INFO - 2021-01-20 00:14:54 --> Helper loaded: security_helper
INFO - 2021-01-20 00:14:54 --> Helper loaded: form_helper
INFO - 2021-01-20 00:14:54 --> Helper loaded: access_helper
INFO - 2021-01-20 00:14:54 --> Helper loaded: date_helper
INFO - 2021-01-20 00:14:54 --> Database Driver Class Initialized
INFO - 2021-01-20 00:14:54 --> User Agent Class Initialized
INFO - 2021-01-20 00:14:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:14:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:14:54 --> Pagination Class Initialized
INFO - 2021-01-20 00:14:54 --> Form Validation Class Initialized
INFO - 2021-01-20 00:14:54 --> Controller Class Initialized
INFO - 2021-01-20 00:14:54 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:14:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_tk.php
INFO - 2021-01-20 00:14:54 --> Final output sent to browser
INFO - 2021-01-20 00:15:13 --> Config Class Initialized
INFO - 2021-01-20 00:15:13 --> Hooks Class Initialized
INFO - 2021-01-20 00:15:13 --> Utf8 Class Initialized
INFO - 2021-01-20 00:15:13 --> URI Class Initialized
INFO - 2021-01-20 00:15:13 --> Router Class Initialized
INFO - 2021-01-20 00:15:13 --> Output Class Initialized
INFO - 2021-01-20 00:15:13 --> Security Class Initialized
INFO - 2021-01-20 00:15:14 --> Input Class Initialized
INFO - 2021-01-20 00:15:14 --> Language Class Initialized
INFO - 2021-01-20 00:15:14 --> Loader Class Initialized
INFO - 2021-01-20 00:15:14 --> Helper loaded: url_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: file_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: security_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: form_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: access_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: date_helper
INFO - 2021-01-20 00:15:14 --> Database Driver Class Initialized
INFO - 2021-01-20 00:15:14 --> User Agent Class Initialized
INFO - 2021-01-20 00:15:14 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:15:14 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:15:14 --> Pagination Class Initialized
INFO - 2021-01-20 00:15:14 --> Form Validation Class Initialized
INFO - 2021-01-20 00:15:14 --> Controller Class Initialized
INFO - 2021-01-20 00:15:14 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:15:14 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_tk.php
INFO - 2021-01-20 00:15:14 --> Final output sent to browser
INFO - 2021-01-20 00:15:14 --> Config Class Initialized
INFO - 2021-01-20 00:15:14 --> Hooks Class Initialized
INFO - 2021-01-20 00:15:14 --> Utf8 Class Initialized
INFO - 2021-01-20 00:15:14 --> URI Class Initialized
INFO - 2021-01-20 00:15:14 --> Router Class Initialized
INFO - 2021-01-20 00:15:14 --> Output Class Initialized
INFO - 2021-01-20 00:15:14 --> Security Class Initialized
INFO - 2021-01-20 00:15:14 --> Input Class Initialized
INFO - 2021-01-20 00:15:14 --> Language Class Initialized
INFO - 2021-01-20 00:15:14 --> Loader Class Initialized
INFO - 2021-01-20 00:15:14 --> Helper loaded: url_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: file_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: security_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: form_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: access_helper
INFO - 2021-01-20 00:15:14 --> Helper loaded: date_helper
INFO - 2021-01-20 00:15:14 --> Database Driver Class Initialized
INFO - 2021-01-20 00:15:14 --> User Agent Class Initialized
INFO - 2021-01-20 00:15:14 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:15:14 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:15:14 --> Pagination Class Initialized
INFO - 2021-01-20 00:15:14 --> Form Validation Class Initialized
INFO - 2021-01-20 00:15:14 --> Controller Class Initialized
INFO - 2021-01-20 00:15:14 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:15:14 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/grafik.php
INFO - 2021-01-20 00:15:14 --> Final output sent to browser
INFO - 2021-01-20 00:15:21 --> Config Class Initialized
INFO - 2021-01-20 00:15:21 --> Hooks Class Initialized
INFO - 2021-01-20 00:15:21 --> Utf8 Class Initialized
INFO - 2021-01-20 00:15:21 --> URI Class Initialized
INFO - 2021-01-20 00:15:21 --> Router Class Initialized
INFO - 2021-01-20 00:15:21 --> Output Class Initialized
INFO - 2021-01-20 00:15:21 --> Security Class Initialized
INFO - 2021-01-20 00:15:21 --> Input Class Initialized
INFO - 2021-01-20 00:15:21 --> Language Class Initialized
INFO - 2021-01-20 00:15:21 --> Loader Class Initialized
INFO - 2021-01-20 00:15:21 --> Helper loaded: url_helper
INFO - 2021-01-20 00:15:21 --> Helper loaded: file_helper
INFO - 2021-01-20 00:15:21 --> Helper loaded: security_helper
INFO - 2021-01-20 00:15:21 --> Helper loaded: form_helper
INFO - 2021-01-20 00:15:21 --> Helper loaded: access_helper
INFO - 2021-01-20 00:15:21 --> Helper loaded: date_helper
INFO - 2021-01-20 00:15:21 --> Database Driver Class Initialized
INFO - 2021-01-20 00:15:21 --> User Agent Class Initialized
INFO - 2021-01-20 00:15:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:15:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:15:21 --> Pagination Class Initialized
INFO - 2021-01-20 00:15:21 --> Form Validation Class Initialized
INFO - 2021-01-20 00:15:21 --> Controller Class Initialized
INFO - 2021-01-20 00:15:21 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:15:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat_keluar.php
INFO - 2021-01-20 00:15:21 --> Final output sent to browser
INFO - 2021-01-20 00:15:22 --> Config Class Initialized
INFO - 2021-01-20 00:15:22 --> Hooks Class Initialized
INFO - 2021-01-20 00:15:22 --> Utf8 Class Initialized
INFO - 2021-01-20 00:15:22 --> URI Class Initialized
INFO - 2021-01-20 00:15:22 --> Router Class Initialized
INFO - 2021-01-20 00:15:22 --> Output Class Initialized
INFO - 2021-01-20 00:15:22 --> Security Class Initialized
INFO - 2021-01-20 00:15:22 --> Input Class Initialized
INFO - 2021-01-20 00:15:22 --> Language Class Initialized
INFO - 2021-01-20 00:15:22 --> Loader Class Initialized
INFO - 2021-01-20 00:15:22 --> Helper loaded: url_helper
INFO - 2021-01-20 00:15:22 --> Helper loaded: file_helper
INFO - 2021-01-20 00:15:22 --> Helper loaded: security_helper
INFO - 2021-01-20 00:15:22 --> Helper loaded: form_helper
INFO - 2021-01-20 00:15:22 --> Helper loaded: access_helper
INFO - 2021-01-20 00:15:22 --> Helper loaded: date_helper
INFO - 2021-01-20 00:15:22 --> Database Driver Class Initialized
INFO - 2021-01-20 00:15:22 --> User Agent Class Initialized
INFO - 2021-01-20 00:15:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:15:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:15:22 --> Pagination Class Initialized
INFO - 2021-01-20 00:15:22 --> Form Validation Class Initialized
INFO - 2021-01-20 00:15:22 --> Controller Class Initialized
INFO - 2021-01-20 00:15:22 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:15:22 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_ok.php
INFO - 2021-01-20 00:15:22 --> Final output sent to browser
INFO - 2021-01-20 00:15:33 --> Config Class Initialized
INFO - 2021-01-20 00:15:33 --> Hooks Class Initialized
INFO - 2021-01-20 00:15:33 --> Utf8 Class Initialized
INFO - 2021-01-20 00:15:33 --> URI Class Initialized
INFO - 2021-01-20 00:15:33 --> Router Class Initialized
INFO - 2021-01-20 00:15:33 --> Output Class Initialized
INFO - 2021-01-20 00:15:33 --> Security Class Initialized
INFO - 2021-01-20 00:15:33 --> Input Class Initialized
INFO - 2021-01-20 00:15:33 --> Language Class Initialized
INFO - 2021-01-20 00:15:33 --> Loader Class Initialized
INFO - 2021-01-20 00:15:33 --> Helper loaded: url_helper
INFO - 2021-01-20 00:15:33 --> Helper loaded: file_helper
INFO - 2021-01-20 00:15:33 --> Helper loaded: security_helper
INFO - 2021-01-20 00:15:33 --> Helper loaded: form_helper
INFO - 2021-01-20 00:15:33 --> Helper loaded: access_helper
INFO - 2021-01-20 00:15:33 --> Helper loaded: date_helper
INFO - 2021-01-20 00:15:33 --> Database Driver Class Initialized
INFO - 2021-01-20 00:15:33 --> User Agent Class Initialized
INFO - 2021-01-20 00:15:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:15:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:15:33 --> Pagination Class Initialized
INFO - 2021-01-20 00:15:33 --> Form Validation Class Initialized
INFO - 2021-01-20 00:15:33 --> Controller Class Initialized
INFO - 2021-01-20 00:15:33 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:15:33 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat_keluar.php
INFO - 2021-01-20 00:15:33 --> Final output sent to browser
INFO - 2021-01-20 00:15:35 --> Config Class Initialized
INFO - 2021-01-20 00:15:35 --> Hooks Class Initialized
INFO - 2021-01-20 00:15:36 --> Utf8 Class Initialized
INFO - 2021-01-20 00:15:36 --> URI Class Initialized
INFO - 2021-01-20 00:15:36 --> Router Class Initialized
INFO - 2021-01-20 00:15:36 --> Output Class Initialized
INFO - 2021-01-20 00:15:36 --> Security Class Initialized
INFO - 2021-01-20 00:15:36 --> Input Class Initialized
INFO - 2021-01-20 00:15:36 --> Language Class Initialized
INFO - 2021-01-20 00:15:36 --> Loader Class Initialized
INFO - 2021-01-20 00:15:36 --> Helper loaded: url_helper
INFO - 2021-01-20 00:15:36 --> Helper loaded: file_helper
INFO - 2021-01-20 00:15:36 --> Helper loaded: security_helper
INFO - 2021-01-20 00:15:36 --> Helper loaded: form_helper
INFO - 2021-01-20 00:15:36 --> Helper loaded: access_helper
INFO - 2021-01-20 00:15:36 --> Helper loaded: date_helper
INFO - 2021-01-20 00:15:36 --> Database Driver Class Initialized
INFO - 2021-01-20 00:15:36 --> User Agent Class Initialized
INFO - 2021-01-20 00:15:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:15:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:15:36 --> Pagination Class Initialized
INFO - 2021-01-20 00:15:36 --> Form Validation Class Initialized
INFO - 2021-01-20 00:15:36 --> Controller Class Initialized
INFO - 2021-01-20 00:15:36 --> Model "User_model" initialized
INFO - 2021-01-20 00:15:36 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:15:36 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:15:36 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:15:36 --> Final output sent to browser
INFO - 2021-01-20 00:18:55 --> Config Class Initialized
INFO - 2021-01-20 00:18:55 --> Hooks Class Initialized
INFO - 2021-01-20 00:18:55 --> Utf8 Class Initialized
INFO - 2021-01-20 00:18:55 --> URI Class Initialized
INFO - 2021-01-20 00:18:55 --> Router Class Initialized
INFO - 2021-01-20 00:18:55 --> Output Class Initialized
INFO - 2021-01-20 00:18:55 --> Security Class Initialized
INFO - 2021-01-20 00:18:55 --> Input Class Initialized
INFO - 2021-01-20 00:18:55 --> Language Class Initialized
INFO - 2021-01-20 00:18:55 --> Loader Class Initialized
INFO - 2021-01-20 00:18:55 --> Helper loaded: url_helper
INFO - 2021-01-20 00:18:55 --> Helper loaded: file_helper
INFO - 2021-01-20 00:18:55 --> Helper loaded: security_helper
INFO - 2021-01-20 00:18:55 --> Helper loaded: form_helper
INFO - 2021-01-20 00:18:55 --> Helper loaded: access_helper
INFO - 2021-01-20 00:18:55 --> Helper loaded: date_helper
INFO - 2021-01-20 00:18:55 --> Database Driver Class Initialized
INFO - 2021-01-20 00:18:55 --> User Agent Class Initialized
INFO - 2021-01-20 00:18:55 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:18:55 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:18:55 --> Pagination Class Initialized
INFO - 2021-01-20 00:18:55 --> Form Validation Class Initialized
INFO - 2021-01-20 00:18:55 --> Controller Class Initialized
INFO - 2021-01-20 00:18:55 --> Model "User_model" initialized
INFO - 2021-01-20 00:18:55 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:18:55 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:18:55 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:18:55 --> Final output sent to browser
INFO - 2021-01-20 00:19:23 --> Config Class Initialized
INFO - 2021-01-20 00:19:23 --> Hooks Class Initialized
INFO - 2021-01-20 00:19:23 --> Utf8 Class Initialized
INFO - 2021-01-20 00:19:23 --> URI Class Initialized
INFO - 2021-01-20 00:19:23 --> Router Class Initialized
INFO - 2021-01-20 00:19:23 --> Output Class Initialized
INFO - 2021-01-20 00:19:23 --> Security Class Initialized
INFO - 2021-01-20 00:19:23 --> Input Class Initialized
INFO - 2021-01-20 00:19:23 --> Language Class Initialized
INFO - 2021-01-20 00:19:23 --> Loader Class Initialized
INFO - 2021-01-20 00:19:23 --> Helper loaded: url_helper
INFO - 2021-01-20 00:19:23 --> Helper loaded: file_helper
INFO - 2021-01-20 00:19:23 --> Helper loaded: security_helper
INFO - 2021-01-20 00:19:23 --> Helper loaded: form_helper
INFO - 2021-01-20 00:19:23 --> Helper loaded: access_helper
INFO - 2021-01-20 00:19:23 --> Helper loaded: date_helper
INFO - 2021-01-20 00:19:23 --> Database Driver Class Initialized
INFO - 2021-01-20 00:19:23 --> User Agent Class Initialized
INFO - 2021-01-20 00:19:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:19:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:19:23 --> Pagination Class Initialized
INFO - 2021-01-20 00:19:23 --> Form Validation Class Initialized
INFO - 2021-01-20 00:19:23 --> Controller Class Initialized
INFO - 2021-01-20 00:19:23 --> Model "User_model" initialized
INFO - 2021-01-20 00:19:23 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:19:23 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:19:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:19:23 --> Final output sent to browser
INFO - 2021-01-20 00:21:15 --> Config Class Initialized
INFO - 2021-01-20 00:21:15 --> Hooks Class Initialized
INFO - 2021-01-20 00:21:15 --> Utf8 Class Initialized
INFO - 2021-01-20 00:21:15 --> URI Class Initialized
INFO - 2021-01-20 00:21:15 --> Router Class Initialized
INFO - 2021-01-20 00:21:15 --> Output Class Initialized
INFO - 2021-01-20 00:21:15 --> Security Class Initialized
INFO - 2021-01-20 00:21:15 --> Input Class Initialized
INFO - 2021-01-20 00:21:15 --> Language Class Initialized
INFO - 2021-01-20 00:21:15 --> Loader Class Initialized
INFO - 2021-01-20 00:21:15 --> Helper loaded: url_helper
INFO - 2021-01-20 00:21:15 --> Helper loaded: file_helper
INFO - 2021-01-20 00:21:15 --> Helper loaded: security_helper
INFO - 2021-01-20 00:21:15 --> Helper loaded: form_helper
INFO - 2021-01-20 00:21:15 --> Helper loaded: access_helper
INFO - 2021-01-20 00:21:15 --> Helper loaded: date_helper
INFO - 2021-01-20 00:21:16 --> Database Driver Class Initialized
INFO - 2021-01-20 00:21:16 --> User Agent Class Initialized
INFO - 2021-01-20 00:21:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:21:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:21:16 --> Pagination Class Initialized
INFO - 2021-01-20 00:21:16 --> Form Validation Class Initialized
INFO - 2021-01-20 00:21:16 --> Controller Class Initialized
INFO - 2021-01-20 00:21:16 --> Model "User_model" initialized
INFO - 2021-01-20 00:21:16 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:21:16 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:21:16 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:21:16 --> Final output sent to browser
INFO - 2021-01-20 00:21:37 --> Config Class Initialized
INFO - 2021-01-20 00:21:37 --> Hooks Class Initialized
INFO - 2021-01-20 00:21:37 --> Utf8 Class Initialized
INFO - 2021-01-20 00:21:37 --> URI Class Initialized
INFO - 2021-01-20 00:21:37 --> Router Class Initialized
INFO - 2021-01-20 00:21:37 --> Output Class Initialized
INFO - 2021-01-20 00:21:37 --> Security Class Initialized
INFO - 2021-01-20 00:21:37 --> Input Class Initialized
INFO - 2021-01-20 00:21:37 --> Language Class Initialized
INFO - 2021-01-20 00:21:37 --> Loader Class Initialized
INFO - 2021-01-20 00:21:37 --> Helper loaded: url_helper
INFO - 2021-01-20 00:21:37 --> Helper loaded: file_helper
INFO - 2021-01-20 00:21:37 --> Helper loaded: security_helper
INFO - 2021-01-20 00:21:37 --> Helper loaded: form_helper
INFO - 2021-01-20 00:21:37 --> Helper loaded: access_helper
INFO - 2021-01-20 00:21:37 --> Helper loaded: date_helper
INFO - 2021-01-20 00:21:37 --> Database Driver Class Initialized
INFO - 2021-01-20 00:21:37 --> User Agent Class Initialized
INFO - 2021-01-20 00:21:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:21:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:21:37 --> Pagination Class Initialized
INFO - 2021-01-20 00:21:37 --> Form Validation Class Initialized
INFO - 2021-01-20 00:21:37 --> Controller Class Initialized
INFO - 2021-01-20 00:21:37 --> Model "User_model" initialized
INFO - 2021-01-20 00:21:37 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:21:37 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:21:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:21:37 --> Final output sent to browser
INFO - 2021-01-20 00:24:04 --> Config Class Initialized
INFO - 2021-01-20 00:24:04 --> Hooks Class Initialized
INFO - 2021-01-20 00:24:04 --> Utf8 Class Initialized
INFO - 2021-01-20 00:24:04 --> URI Class Initialized
INFO - 2021-01-20 00:24:04 --> Router Class Initialized
INFO - 2021-01-20 00:24:04 --> Output Class Initialized
INFO - 2021-01-20 00:24:04 --> Security Class Initialized
INFO - 2021-01-20 00:24:04 --> Input Class Initialized
INFO - 2021-01-20 00:24:04 --> Language Class Initialized
INFO - 2021-01-20 00:24:04 --> Loader Class Initialized
INFO - 2021-01-20 00:24:04 --> Helper loaded: url_helper
INFO - 2021-01-20 00:24:04 --> Helper loaded: file_helper
INFO - 2021-01-20 00:24:04 --> Helper loaded: security_helper
INFO - 2021-01-20 00:24:04 --> Helper loaded: form_helper
INFO - 2021-01-20 00:24:04 --> Helper loaded: access_helper
INFO - 2021-01-20 00:24:04 --> Helper loaded: date_helper
INFO - 2021-01-20 00:24:04 --> Database Driver Class Initialized
INFO - 2021-01-20 00:24:04 --> User Agent Class Initialized
INFO - 2021-01-20 00:24:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:24:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:24:04 --> Pagination Class Initialized
INFO - 2021-01-20 00:24:04 --> Form Validation Class Initialized
INFO - 2021-01-20 00:24:04 --> Controller Class Initialized
INFO - 2021-01-20 00:24:04 --> Model "User_model" initialized
INFO - 2021-01-20 00:24:04 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:24:04 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:24:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:24:04 --> Final output sent to browser
INFO - 2021-01-20 00:25:18 --> Config Class Initialized
INFO - 2021-01-20 00:25:18 --> Hooks Class Initialized
INFO - 2021-01-20 00:25:18 --> Utf8 Class Initialized
INFO - 2021-01-20 00:25:18 --> URI Class Initialized
INFO - 2021-01-20 00:25:18 --> Router Class Initialized
INFO - 2021-01-20 00:25:18 --> Output Class Initialized
INFO - 2021-01-20 00:25:18 --> Security Class Initialized
INFO - 2021-01-20 00:25:18 --> Input Class Initialized
INFO - 2021-01-20 00:25:18 --> Language Class Initialized
INFO - 2021-01-20 00:25:18 --> Loader Class Initialized
INFO - 2021-01-20 00:25:18 --> Helper loaded: url_helper
INFO - 2021-01-20 00:25:18 --> Helper loaded: file_helper
INFO - 2021-01-20 00:25:18 --> Helper loaded: security_helper
INFO - 2021-01-20 00:25:18 --> Helper loaded: form_helper
INFO - 2021-01-20 00:25:18 --> Helper loaded: access_helper
INFO - 2021-01-20 00:25:18 --> Helper loaded: date_helper
INFO - 2021-01-20 00:25:18 --> Database Driver Class Initialized
INFO - 2021-01-20 00:25:18 --> User Agent Class Initialized
INFO - 2021-01-20 00:25:18 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:25:18 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:25:18 --> Pagination Class Initialized
INFO - 2021-01-20 00:25:18 --> Form Validation Class Initialized
INFO - 2021-01-20 00:25:18 --> Controller Class Initialized
INFO - 2021-01-20 00:25:18 --> Model "User_model" initialized
INFO - 2021-01-20 00:25:18 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:25:18 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:25:18 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:25:18 --> Final output sent to browser
INFO - 2021-01-20 00:25:35 --> Config Class Initialized
INFO - 2021-01-20 00:25:35 --> Hooks Class Initialized
INFO - 2021-01-20 00:25:35 --> Utf8 Class Initialized
INFO - 2021-01-20 00:25:35 --> URI Class Initialized
INFO - 2021-01-20 00:25:35 --> Router Class Initialized
INFO - 2021-01-20 00:25:35 --> Output Class Initialized
INFO - 2021-01-20 00:25:35 --> Security Class Initialized
INFO - 2021-01-20 00:25:35 --> Input Class Initialized
INFO - 2021-01-20 00:25:35 --> Language Class Initialized
INFO - 2021-01-20 00:25:35 --> Loader Class Initialized
INFO - 2021-01-20 00:25:35 --> Helper loaded: url_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: file_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: security_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: form_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: access_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: date_helper
INFO - 2021-01-20 00:25:35 --> Database Driver Class Initialized
INFO - 2021-01-20 00:25:35 --> User Agent Class Initialized
INFO - 2021-01-20 00:25:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:25:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:25:35 --> Pagination Class Initialized
INFO - 2021-01-20 00:25:35 --> Form Validation Class Initialized
INFO - 2021-01-20 00:25:35 --> Controller Class Initialized
INFO - 2021-01-20 00:25:35 --> Config Class Initialized
INFO - 2021-01-20 00:25:35 --> Hooks Class Initialized
INFO - 2021-01-20 00:25:35 --> Utf8 Class Initialized
INFO - 2021-01-20 00:25:35 --> URI Class Initialized
INFO - 2021-01-20 00:25:35 --> Router Class Initialized
INFO - 2021-01-20 00:25:35 --> Output Class Initialized
INFO - 2021-01-20 00:25:35 --> Security Class Initialized
INFO - 2021-01-20 00:25:35 --> Input Class Initialized
INFO - 2021-01-20 00:25:35 --> Language Class Initialized
INFO - 2021-01-20 00:25:35 --> Loader Class Initialized
INFO - 2021-01-20 00:25:35 --> Helper loaded: url_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: file_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: security_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: form_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: access_helper
INFO - 2021-01-20 00:25:35 --> Helper loaded: date_helper
INFO - 2021-01-20 00:25:35 --> Database Driver Class Initialized
INFO - 2021-01-20 00:25:35 --> User Agent Class Initialized
INFO - 2021-01-20 00:25:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:25:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:25:35 --> Pagination Class Initialized
INFO - 2021-01-20 00:25:35 --> Form Validation Class Initialized
INFO - 2021-01-20 00:25:35 --> Controller Class Initialized
INFO - 2021-01-20 00:25:35 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 00:25:35 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 00:25:35 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 00:25:35 --> Final output sent to browser
INFO - 2021-01-20 00:25:45 --> Config Class Initialized
INFO - 2021-01-20 00:25:45 --> Hooks Class Initialized
INFO - 2021-01-20 00:25:45 --> Utf8 Class Initialized
INFO - 2021-01-20 00:25:45 --> URI Class Initialized
INFO - 2021-01-20 00:25:45 --> Router Class Initialized
INFO - 2021-01-20 00:25:45 --> Output Class Initialized
INFO - 2021-01-20 00:25:45 --> Security Class Initialized
INFO - 2021-01-20 00:25:45 --> Input Class Initialized
INFO - 2021-01-20 00:25:45 --> Language Class Initialized
INFO - 2021-01-20 00:25:45 --> Loader Class Initialized
INFO - 2021-01-20 00:25:45 --> Helper loaded: url_helper
INFO - 2021-01-20 00:25:45 --> Helper loaded: file_helper
INFO - 2021-01-20 00:25:45 --> Helper loaded: security_helper
INFO - 2021-01-20 00:25:45 --> Helper loaded: form_helper
INFO - 2021-01-20 00:25:45 --> Helper loaded: access_helper
INFO - 2021-01-20 00:25:45 --> Helper loaded: date_helper
INFO - 2021-01-20 00:25:46 --> Database Driver Class Initialized
INFO - 2021-01-20 00:25:46 --> User Agent Class Initialized
INFO - 2021-01-20 00:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:25:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:25:46 --> Pagination Class Initialized
INFO - 2021-01-20 00:25:46 --> Form Validation Class Initialized
INFO - 2021-01-20 00:25:46 --> Controller Class Initialized
INFO - 2021-01-20 00:25:46 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2021-01-20 00:25:46 --> Config Class Initialized
INFO - 2021-01-20 00:25:46 --> Hooks Class Initialized
INFO - 2021-01-20 00:25:46 --> Utf8 Class Initialized
INFO - 2021-01-20 00:25:46 --> URI Class Initialized
INFO - 2021-01-20 00:25:46 --> Router Class Initialized
INFO - 2021-01-20 00:25:46 --> Output Class Initialized
INFO - 2021-01-20 00:25:46 --> Security Class Initialized
INFO - 2021-01-20 00:25:46 --> Input Class Initialized
INFO - 2021-01-20 00:25:46 --> Language Class Initialized
INFO - 2021-01-20 00:25:46 --> Loader Class Initialized
INFO - 2021-01-20 00:25:46 --> Helper loaded: url_helper
INFO - 2021-01-20 00:25:46 --> Helper loaded: file_helper
INFO - 2021-01-20 00:25:46 --> Helper loaded: security_helper
INFO - 2021-01-20 00:25:46 --> Helper loaded: form_helper
INFO - 2021-01-20 00:25:46 --> Helper loaded: access_helper
INFO - 2021-01-20 00:25:46 --> Helper loaded: date_helper
INFO - 2021-01-20 00:25:46 --> Database Driver Class Initialized
INFO - 2021-01-20 00:25:46 --> User Agent Class Initialized
INFO - 2021-01-20 00:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:25:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:25:46 --> Pagination Class Initialized
INFO - 2021-01-20 00:25:46 --> Form Validation Class Initialized
INFO - 2021-01-20 00:25:46 --> Controller Class Initialized
INFO - 2021-01-20 00:25:47 --> Model "User_model" initialized
INFO - 2021-01-20 00:25:47 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:25:47 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:25:47 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:25:47 --> Final output sent to browser
INFO - 2021-01-20 00:25:55 --> Config Class Initialized
INFO - 2021-01-20 00:25:55 --> Hooks Class Initialized
INFO - 2021-01-20 00:25:55 --> Utf8 Class Initialized
INFO - 2021-01-20 00:25:55 --> URI Class Initialized
INFO - 2021-01-20 00:25:55 --> Router Class Initialized
INFO - 2021-01-20 00:25:55 --> Output Class Initialized
INFO - 2021-01-20 00:25:55 --> Security Class Initialized
INFO - 2021-01-20 00:25:55 --> Input Class Initialized
INFO - 2021-01-20 00:25:55 --> Language Class Initialized
INFO - 2021-01-20 00:25:55 --> Loader Class Initialized
INFO - 2021-01-20 00:25:55 --> Helper loaded: url_helper
INFO - 2021-01-20 00:25:55 --> Helper loaded: file_helper
INFO - 2021-01-20 00:25:55 --> Helper loaded: security_helper
INFO - 2021-01-20 00:25:55 --> Helper loaded: form_helper
INFO - 2021-01-20 00:25:55 --> Helper loaded: access_helper
INFO - 2021-01-20 00:25:55 --> Helper loaded: date_helper
INFO - 2021-01-20 00:25:55 --> Database Driver Class Initialized
INFO - 2021-01-20 00:25:55 --> User Agent Class Initialized
INFO - 2021-01-20 00:25:55 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:25:55 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:25:55 --> Pagination Class Initialized
INFO - 2021-01-20 00:25:55 --> Form Validation Class Initialized
INFO - 2021-01-20 00:25:55 --> Controller Class Initialized
INFO - 2021-01-20 00:25:55 --> Model "Obat_model" initialized
INFO - 2021-01-20 00:25:55 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\obat/data_obat.php
INFO - 2021-01-20 00:25:55 --> Final output sent to browser
INFO - 2021-01-20 00:26:06 --> Config Class Initialized
INFO - 2021-01-20 00:26:06 --> Hooks Class Initialized
INFO - 2021-01-20 00:26:06 --> Utf8 Class Initialized
INFO - 2021-01-20 00:26:06 --> URI Class Initialized
INFO - 2021-01-20 00:26:06 --> Router Class Initialized
INFO - 2021-01-20 00:26:06 --> Output Class Initialized
INFO - 2021-01-20 00:26:06 --> Security Class Initialized
INFO - 2021-01-20 00:26:06 --> Input Class Initialized
INFO - 2021-01-20 00:26:06 --> Language Class Initialized
INFO - 2021-01-20 00:26:06 --> Loader Class Initialized
INFO - 2021-01-20 00:26:06 --> Helper loaded: url_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: file_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: security_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: form_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: access_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: date_helper
INFO - 2021-01-20 00:26:06 --> Database Driver Class Initialized
INFO - 2021-01-20 00:26:06 --> User Agent Class Initialized
INFO - 2021-01-20 00:26:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:26:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:26:06 --> Pagination Class Initialized
INFO - 2021-01-20 00:26:06 --> Form Validation Class Initialized
INFO - 2021-01-20 00:26:06 --> Controller Class Initialized
INFO - 2021-01-20 00:26:06 --> Config Class Initialized
INFO - 2021-01-20 00:26:06 --> Hooks Class Initialized
INFO - 2021-01-20 00:26:06 --> Utf8 Class Initialized
INFO - 2021-01-20 00:26:06 --> URI Class Initialized
INFO - 2021-01-20 00:26:06 --> Router Class Initialized
INFO - 2021-01-20 00:26:06 --> Output Class Initialized
INFO - 2021-01-20 00:26:06 --> Security Class Initialized
INFO - 2021-01-20 00:26:06 --> Input Class Initialized
INFO - 2021-01-20 00:26:06 --> Language Class Initialized
INFO - 2021-01-20 00:26:06 --> Loader Class Initialized
INFO - 2021-01-20 00:26:06 --> Helper loaded: url_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: file_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: security_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: form_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: access_helper
INFO - 2021-01-20 00:26:06 --> Helper loaded: date_helper
INFO - 2021-01-20 00:26:06 --> Database Driver Class Initialized
INFO - 2021-01-20 00:26:06 --> User Agent Class Initialized
INFO - 2021-01-20 00:26:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:26:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:26:07 --> Pagination Class Initialized
INFO - 2021-01-20 00:26:07 --> Form Validation Class Initialized
INFO - 2021-01-20 00:26:07 --> Controller Class Initialized
INFO - 2021-01-20 00:26:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 00:26:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 00:26:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 00:26:07 --> Final output sent to browser
INFO - 2021-01-20 00:26:11 --> Config Class Initialized
INFO - 2021-01-20 00:26:11 --> Hooks Class Initialized
INFO - 2021-01-20 00:26:11 --> Utf8 Class Initialized
INFO - 2021-01-20 00:26:11 --> URI Class Initialized
INFO - 2021-01-20 00:26:11 --> Router Class Initialized
INFO - 2021-01-20 00:26:11 --> Output Class Initialized
INFO - 2021-01-20 00:26:11 --> Security Class Initialized
INFO - 2021-01-20 00:26:11 --> Input Class Initialized
INFO - 2021-01-20 00:26:11 --> Language Class Initialized
INFO - 2021-01-20 00:26:11 --> Loader Class Initialized
INFO - 2021-01-20 00:26:11 --> Helper loaded: url_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: file_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: security_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: form_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: access_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: date_helper
INFO - 2021-01-20 00:26:11 --> Database Driver Class Initialized
INFO - 2021-01-20 00:26:11 --> User Agent Class Initialized
INFO - 2021-01-20 00:26:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:26:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:26:11 --> Pagination Class Initialized
INFO - 2021-01-20 00:26:11 --> Form Validation Class Initialized
INFO - 2021-01-20 00:26:11 --> Controller Class Initialized
INFO - 2021-01-20 00:26:11 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2021-01-20 00:26:11 --> Config Class Initialized
INFO - 2021-01-20 00:26:11 --> Hooks Class Initialized
INFO - 2021-01-20 00:26:11 --> Utf8 Class Initialized
INFO - 2021-01-20 00:26:11 --> URI Class Initialized
INFO - 2021-01-20 00:26:11 --> Router Class Initialized
INFO - 2021-01-20 00:26:11 --> Output Class Initialized
INFO - 2021-01-20 00:26:11 --> Security Class Initialized
INFO - 2021-01-20 00:26:11 --> Input Class Initialized
INFO - 2021-01-20 00:26:11 --> Language Class Initialized
INFO - 2021-01-20 00:26:11 --> Loader Class Initialized
INFO - 2021-01-20 00:26:11 --> Helper loaded: url_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: file_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: security_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: form_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: access_helper
INFO - 2021-01-20 00:26:11 --> Helper loaded: date_helper
INFO - 2021-01-20 00:26:11 --> Database Driver Class Initialized
INFO - 2021-01-20 00:26:11 --> User Agent Class Initialized
INFO - 2021-01-20 00:26:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:26:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:26:11 --> Pagination Class Initialized
INFO - 2021-01-20 00:26:11 --> Form Validation Class Initialized
INFO - 2021-01-20 00:26:11 --> Controller Class Initialized
INFO - 2021-01-20 00:26:12 --> Model "User_model" initialized
INFO - 2021-01-20 00:26:12 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:26:12 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:26:12 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:26:12 --> Final output sent to browser
INFO - 2021-01-20 00:28:20 --> Config Class Initialized
INFO - 2021-01-20 00:28:20 --> Hooks Class Initialized
INFO - 2021-01-20 00:28:20 --> Utf8 Class Initialized
INFO - 2021-01-20 00:28:20 --> URI Class Initialized
INFO - 2021-01-20 00:28:20 --> Router Class Initialized
INFO - 2021-01-20 00:28:20 --> Output Class Initialized
INFO - 2021-01-20 00:28:20 --> Security Class Initialized
INFO - 2021-01-20 00:28:20 --> Input Class Initialized
INFO - 2021-01-20 00:28:20 --> Language Class Initialized
INFO - 2021-01-20 00:28:20 --> Loader Class Initialized
INFO - 2021-01-20 00:28:20 --> Helper loaded: url_helper
INFO - 2021-01-20 00:28:20 --> Helper loaded: file_helper
INFO - 2021-01-20 00:28:20 --> Helper loaded: security_helper
INFO - 2021-01-20 00:28:20 --> Helper loaded: form_helper
INFO - 2021-01-20 00:28:20 --> Helper loaded: access_helper
INFO - 2021-01-20 00:28:20 --> Helper loaded: date_helper
INFO - 2021-01-20 00:28:20 --> Database Driver Class Initialized
INFO - 2021-01-20 00:28:20 --> User Agent Class Initialized
INFO - 2021-01-20 00:28:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:28:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:28:20 --> Pagination Class Initialized
INFO - 2021-01-20 00:28:20 --> Form Validation Class Initialized
INFO - 2021-01-20 00:28:20 --> Controller Class Initialized
INFO - 2021-01-20 00:28:20 --> Model "User_model" initialized
INFO - 2021-01-20 00:28:20 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:28:20 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:28:20 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:28:20 --> Final output sent to browser
INFO - 2021-01-20 00:28:25 --> Config Class Initialized
INFO - 2021-01-20 00:28:25 --> Hooks Class Initialized
INFO - 2021-01-20 00:28:25 --> Utf8 Class Initialized
INFO - 2021-01-20 00:28:25 --> URI Class Initialized
INFO - 2021-01-20 00:28:25 --> Router Class Initialized
INFO - 2021-01-20 00:28:25 --> Output Class Initialized
INFO - 2021-01-20 00:28:25 --> Security Class Initialized
INFO - 2021-01-20 00:28:25 --> Input Class Initialized
INFO - 2021-01-20 00:28:25 --> Language Class Initialized
INFO - 2021-01-20 00:28:25 --> Loader Class Initialized
INFO - 2021-01-20 00:28:25 --> Helper loaded: url_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: file_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: security_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: form_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: access_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: date_helper
INFO - 2021-01-20 00:28:25 --> Database Driver Class Initialized
INFO - 2021-01-20 00:28:25 --> User Agent Class Initialized
INFO - 2021-01-20 00:28:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:28:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:28:25 --> Pagination Class Initialized
INFO - 2021-01-20 00:28:25 --> Form Validation Class Initialized
INFO - 2021-01-20 00:28:25 --> Controller Class Initialized
INFO - 2021-01-20 00:28:25 --> Config Class Initialized
INFO - 2021-01-20 00:28:25 --> Hooks Class Initialized
INFO - 2021-01-20 00:28:25 --> Utf8 Class Initialized
INFO - 2021-01-20 00:28:25 --> URI Class Initialized
INFO - 2021-01-20 00:28:25 --> Router Class Initialized
INFO - 2021-01-20 00:28:25 --> Output Class Initialized
INFO - 2021-01-20 00:28:25 --> Security Class Initialized
INFO - 2021-01-20 00:28:25 --> Input Class Initialized
INFO - 2021-01-20 00:28:25 --> Language Class Initialized
INFO - 2021-01-20 00:28:25 --> Loader Class Initialized
INFO - 2021-01-20 00:28:25 --> Helper loaded: url_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: file_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: security_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: form_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: access_helper
INFO - 2021-01-20 00:28:25 --> Helper loaded: date_helper
INFO - 2021-01-20 00:28:25 --> Database Driver Class Initialized
INFO - 2021-01-20 00:28:25 --> User Agent Class Initialized
INFO - 2021-01-20 00:28:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:28:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:28:25 --> Pagination Class Initialized
INFO - 2021-01-20 00:28:25 --> Form Validation Class Initialized
INFO - 2021-01-20 00:28:25 --> Controller Class Initialized
INFO - 2021-01-20 00:28:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 00:28:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 00:28:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 00:28:25 --> Final output sent to browser
INFO - 2021-01-20 00:28:33 --> Config Class Initialized
INFO - 2021-01-20 00:28:33 --> Hooks Class Initialized
INFO - 2021-01-20 00:28:33 --> Utf8 Class Initialized
INFO - 2021-01-20 00:28:33 --> URI Class Initialized
INFO - 2021-01-20 00:28:33 --> Router Class Initialized
INFO - 2021-01-20 00:28:33 --> Output Class Initialized
INFO - 2021-01-20 00:28:33 --> Security Class Initialized
INFO - 2021-01-20 00:28:33 --> Input Class Initialized
INFO - 2021-01-20 00:28:33 --> Language Class Initialized
INFO - 2021-01-20 00:28:33 --> Loader Class Initialized
INFO - 2021-01-20 00:28:33 --> Helper loaded: url_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: file_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: security_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: form_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: access_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: date_helper
INFO - 2021-01-20 00:28:33 --> Database Driver Class Initialized
INFO - 2021-01-20 00:28:33 --> User Agent Class Initialized
INFO - 2021-01-20 00:28:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:28:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:28:33 --> Pagination Class Initialized
INFO - 2021-01-20 00:28:33 --> Form Validation Class Initialized
INFO - 2021-01-20 00:28:33 --> Controller Class Initialized
INFO - 2021-01-20 00:28:33 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2021-01-20 00:28:33 --> Config Class Initialized
INFO - 2021-01-20 00:28:33 --> Hooks Class Initialized
INFO - 2021-01-20 00:28:33 --> Utf8 Class Initialized
INFO - 2021-01-20 00:28:33 --> URI Class Initialized
INFO - 2021-01-20 00:28:33 --> Router Class Initialized
INFO - 2021-01-20 00:28:33 --> Output Class Initialized
INFO - 2021-01-20 00:28:33 --> Security Class Initialized
INFO - 2021-01-20 00:28:33 --> Input Class Initialized
INFO - 2021-01-20 00:28:33 --> Language Class Initialized
INFO - 2021-01-20 00:28:33 --> Loader Class Initialized
INFO - 2021-01-20 00:28:33 --> Helper loaded: url_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: file_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: security_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: form_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: access_helper
INFO - 2021-01-20 00:28:33 --> Helper loaded: date_helper
INFO - 2021-01-20 00:28:33 --> Database Driver Class Initialized
INFO - 2021-01-20 00:28:33 --> User Agent Class Initialized
INFO - 2021-01-20 00:28:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:28:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:28:33 --> Pagination Class Initialized
INFO - 2021-01-20 00:28:33 --> Form Validation Class Initialized
INFO - 2021-01-20 00:28:33 --> Controller Class Initialized
INFO - 2021-01-20 00:28:33 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 00:28:33 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 00:28:33 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 00:28:33 --> Final output sent to browser
INFO - 2021-01-20 00:28:39 --> Config Class Initialized
INFO - 2021-01-20 00:28:39 --> Hooks Class Initialized
INFO - 2021-01-20 00:28:39 --> Utf8 Class Initialized
INFO - 2021-01-20 00:28:39 --> URI Class Initialized
INFO - 2021-01-20 00:28:39 --> Router Class Initialized
INFO - 2021-01-20 00:28:39 --> Output Class Initialized
INFO - 2021-01-20 00:28:39 --> Security Class Initialized
INFO - 2021-01-20 00:28:39 --> Input Class Initialized
INFO - 2021-01-20 00:28:39 --> Language Class Initialized
INFO - 2021-01-20 00:28:39 --> Loader Class Initialized
INFO - 2021-01-20 00:28:39 --> Helper loaded: url_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: file_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: security_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: form_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: access_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: date_helper
INFO - 2021-01-20 00:28:39 --> Database Driver Class Initialized
INFO - 2021-01-20 00:28:39 --> User Agent Class Initialized
INFO - 2021-01-20 00:28:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:28:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:28:39 --> Pagination Class Initialized
INFO - 2021-01-20 00:28:39 --> Form Validation Class Initialized
INFO - 2021-01-20 00:28:39 --> Controller Class Initialized
INFO - 2021-01-20 00:28:39 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2021-01-20 00:28:39 --> Config Class Initialized
INFO - 2021-01-20 00:28:39 --> Hooks Class Initialized
INFO - 2021-01-20 00:28:39 --> Utf8 Class Initialized
INFO - 2021-01-20 00:28:39 --> URI Class Initialized
INFO - 2021-01-20 00:28:39 --> Router Class Initialized
INFO - 2021-01-20 00:28:39 --> Output Class Initialized
INFO - 2021-01-20 00:28:39 --> Security Class Initialized
INFO - 2021-01-20 00:28:39 --> Input Class Initialized
INFO - 2021-01-20 00:28:39 --> Language Class Initialized
INFO - 2021-01-20 00:28:39 --> Loader Class Initialized
INFO - 2021-01-20 00:28:39 --> Helper loaded: url_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: file_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: security_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: form_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: access_helper
INFO - 2021-01-20 00:28:39 --> Helper loaded: date_helper
INFO - 2021-01-20 00:28:39 --> Database Driver Class Initialized
INFO - 2021-01-20 00:28:39 --> User Agent Class Initialized
INFO - 2021-01-20 00:28:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:28:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:28:39 --> Pagination Class Initialized
INFO - 2021-01-20 00:28:39 --> Form Validation Class Initialized
INFO - 2021-01-20 00:28:39 --> Controller Class Initialized
INFO - 2021-01-20 00:28:39 --> Model "User_model" initialized
INFO - 2021-01-20 00:28:39 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:28:39 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:28:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:28:39 --> Final output sent to browser
INFO - 2021-01-20 00:29:51 --> Config Class Initialized
INFO - 2021-01-20 00:29:51 --> Hooks Class Initialized
INFO - 2021-01-20 00:29:51 --> Utf8 Class Initialized
INFO - 2021-01-20 00:29:51 --> URI Class Initialized
INFO - 2021-01-20 00:29:51 --> Router Class Initialized
INFO - 2021-01-20 00:29:51 --> Output Class Initialized
INFO - 2021-01-20 00:29:51 --> Security Class Initialized
INFO - 2021-01-20 00:29:51 --> Input Class Initialized
INFO - 2021-01-20 00:29:51 --> Language Class Initialized
INFO - 2021-01-20 00:29:51 --> Loader Class Initialized
INFO - 2021-01-20 00:29:51 --> Helper loaded: url_helper
INFO - 2021-01-20 00:29:51 --> Helper loaded: file_helper
INFO - 2021-01-20 00:29:51 --> Helper loaded: security_helper
INFO - 2021-01-20 00:29:51 --> Helper loaded: form_helper
INFO - 2021-01-20 00:29:51 --> Helper loaded: access_helper
INFO - 2021-01-20 00:29:51 --> Helper loaded: date_helper
INFO - 2021-01-20 00:29:51 --> Database Driver Class Initialized
INFO - 2021-01-20 00:29:51 --> User Agent Class Initialized
INFO - 2021-01-20 00:29:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 00:29:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 00:29:51 --> Pagination Class Initialized
INFO - 2021-01-20 00:29:51 --> Form Validation Class Initialized
INFO - 2021-01-20 00:29:51 --> Controller Class Initialized
INFO - 2021-01-20 00:29:51 --> Model "User_model" initialized
INFO - 2021-01-20 00:29:51 --> Model "Pasien_model" initialized
INFO - 2021-01-20 00:29:51 --> Model "Periksa_model" initialized
INFO - 2021-01-20 06:29:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 06:29:51 --> Final output sent to browser
INFO - 2021-01-20 01:20:22 --> Config Class Initialized
INFO - 2021-01-20 01:20:22 --> Hooks Class Initialized
INFO - 2021-01-20 01:20:22 --> Utf8 Class Initialized
INFO - 2021-01-20 01:20:22 --> URI Class Initialized
INFO - 2021-01-20 01:20:22 --> Router Class Initialized
INFO - 2021-01-20 01:20:22 --> Output Class Initialized
INFO - 2021-01-20 01:20:22 --> Security Class Initialized
INFO - 2021-01-20 01:20:22 --> Input Class Initialized
INFO - 2021-01-20 01:20:22 --> Language Class Initialized
INFO - 2021-01-20 01:20:22 --> Loader Class Initialized
INFO - 2021-01-20 01:20:22 --> Helper loaded: url_helper
INFO - 2021-01-20 01:20:22 --> Helper loaded: file_helper
INFO - 2021-01-20 01:20:22 --> Helper loaded: security_helper
INFO - 2021-01-20 01:20:22 --> Helper loaded: form_helper
INFO - 2021-01-20 01:20:22 --> Helper loaded: access_helper
INFO - 2021-01-20 01:20:22 --> Helper loaded: date_helper
INFO - 2021-01-20 01:20:22 --> Database Driver Class Initialized
INFO - 2021-01-20 01:20:22 --> User Agent Class Initialized
INFO - 2021-01-20 01:20:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:20:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:20:22 --> Pagination Class Initialized
INFO - 2021-01-20 01:20:23 --> Form Validation Class Initialized
INFO - 2021-01-20 01:20:23 --> Controller Class Initialized
INFO - 2021-01-20 01:20:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:20:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:20:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:20:23 --> Final output sent to browser
INFO - 2021-01-20 01:23:04 --> Config Class Initialized
INFO - 2021-01-20 01:23:04 --> Hooks Class Initialized
INFO - 2021-01-20 01:23:04 --> Utf8 Class Initialized
INFO - 2021-01-20 01:23:04 --> URI Class Initialized
INFO - 2021-01-20 01:23:04 --> Router Class Initialized
INFO - 2021-01-20 01:23:04 --> Output Class Initialized
INFO - 2021-01-20 01:23:04 --> Security Class Initialized
INFO - 2021-01-20 01:23:04 --> Input Class Initialized
INFO - 2021-01-20 01:23:04 --> Language Class Initialized
INFO - 2021-01-20 01:23:04 --> Loader Class Initialized
INFO - 2021-01-20 01:23:04 --> Helper loaded: url_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: file_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: security_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: form_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: access_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: date_helper
INFO - 2021-01-20 01:23:04 --> Database Driver Class Initialized
INFO - 2021-01-20 01:23:04 --> User Agent Class Initialized
INFO - 2021-01-20 01:23:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:23:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:23:04 --> Pagination Class Initialized
INFO - 2021-01-20 01:23:04 --> Form Validation Class Initialized
INFO - 2021-01-20 01:23:04 --> Controller Class Initialized
INFO - 2021-01-20 01:23:04 --> Config Class Initialized
INFO - 2021-01-20 01:23:04 --> Hooks Class Initialized
INFO - 2021-01-20 01:23:04 --> Utf8 Class Initialized
INFO - 2021-01-20 01:23:04 --> URI Class Initialized
INFO - 2021-01-20 01:23:04 --> Router Class Initialized
INFO - 2021-01-20 01:23:04 --> Output Class Initialized
INFO - 2021-01-20 01:23:04 --> Security Class Initialized
INFO - 2021-01-20 01:23:04 --> Input Class Initialized
INFO - 2021-01-20 01:23:04 --> Language Class Initialized
INFO - 2021-01-20 01:23:04 --> Loader Class Initialized
INFO - 2021-01-20 01:23:04 --> Helper loaded: url_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: file_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: security_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: form_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: access_helper
INFO - 2021-01-20 01:23:04 --> Helper loaded: date_helper
INFO - 2021-01-20 01:23:04 --> Database Driver Class Initialized
INFO - 2021-01-20 01:23:04 --> User Agent Class Initialized
INFO - 2021-01-20 01:23:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:23:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:23:04 --> Pagination Class Initialized
INFO - 2021-01-20 01:23:04 --> Form Validation Class Initialized
INFO - 2021-01-20 01:23:04 --> Controller Class Initialized
INFO - 2021-01-20 01:23:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:23:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:23:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:23:04 --> Final output sent to browser
INFO - 2021-01-20 01:23:54 --> Config Class Initialized
INFO - 2021-01-20 01:23:54 --> Hooks Class Initialized
INFO - 2021-01-20 01:23:54 --> Utf8 Class Initialized
INFO - 2021-01-20 01:23:54 --> URI Class Initialized
INFO - 2021-01-20 01:23:54 --> Router Class Initialized
INFO - 2021-01-20 01:23:54 --> Output Class Initialized
INFO - 2021-01-20 01:23:54 --> Security Class Initialized
INFO - 2021-01-20 01:23:54 --> Input Class Initialized
INFO - 2021-01-20 01:23:54 --> Language Class Initialized
INFO - 2021-01-20 01:23:54 --> Loader Class Initialized
INFO - 2021-01-20 01:23:54 --> Helper loaded: url_helper
INFO - 2021-01-20 01:23:54 --> Helper loaded: file_helper
INFO - 2021-01-20 01:23:54 --> Helper loaded: security_helper
INFO - 2021-01-20 01:23:54 --> Helper loaded: form_helper
INFO - 2021-01-20 01:23:54 --> Helper loaded: access_helper
INFO - 2021-01-20 01:23:54 --> Helper loaded: date_helper
INFO - 2021-01-20 01:23:54 --> Database Driver Class Initialized
INFO - 2021-01-20 01:23:54 --> User Agent Class Initialized
INFO - 2021-01-20 01:23:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:23:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:23:54 --> Pagination Class Initialized
INFO - 2021-01-20 01:23:54 --> Form Validation Class Initialized
INFO - 2021-01-20 01:23:54 --> Controller Class Initialized
INFO - 2021-01-20 01:23:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:23:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:23:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:23:54 --> Final output sent to browser
INFO - 2021-01-20 01:24:23 --> Config Class Initialized
INFO - 2021-01-20 01:24:23 --> Hooks Class Initialized
INFO - 2021-01-20 01:24:23 --> Utf8 Class Initialized
INFO - 2021-01-20 01:24:23 --> URI Class Initialized
INFO - 2021-01-20 01:24:23 --> Router Class Initialized
INFO - 2021-01-20 01:24:23 --> Output Class Initialized
INFO - 2021-01-20 01:24:23 --> Security Class Initialized
INFO - 2021-01-20 01:24:23 --> Input Class Initialized
INFO - 2021-01-20 01:24:23 --> Language Class Initialized
INFO - 2021-01-20 01:24:23 --> Loader Class Initialized
INFO - 2021-01-20 01:24:23 --> Helper loaded: url_helper
INFO - 2021-01-20 01:24:23 --> Helper loaded: file_helper
INFO - 2021-01-20 01:24:23 --> Helper loaded: security_helper
INFO - 2021-01-20 01:24:23 --> Helper loaded: form_helper
INFO - 2021-01-20 01:24:23 --> Helper loaded: access_helper
INFO - 2021-01-20 01:24:23 --> Helper loaded: date_helper
INFO - 2021-01-20 01:24:23 --> Database Driver Class Initialized
INFO - 2021-01-20 01:24:23 --> User Agent Class Initialized
INFO - 2021-01-20 01:24:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:24:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:24:23 --> Pagination Class Initialized
INFO - 2021-01-20 01:24:23 --> Form Validation Class Initialized
INFO - 2021-01-20 01:24:23 --> Controller Class Initialized
INFO - 2021-01-20 01:24:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:24:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:24:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:24:23 --> Final output sent to browser
INFO - 2021-01-20 01:24:37 --> Config Class Initialized
INFO - 2021-01-20 01:24:37 --> Hooks Class Initialized
INFO - 2021-01-20 01:24:37 --> Utf8 Class Initialized
INFO - 2021-01-20 01:24:37 --> URI Class Initialized
INFO - 2021-01-20 01:24:37 --> Router Class Initialized
INFO - 2021-01-20 01:24:37 --> Output Class Initialized
INFO - 2021-01-20 01:24:37 --> Security Class Initialized
INFO - 2021-01-20 01:24:37 --> Input Class Initialized
INFO - 2021-01-20 01:24:37 --> Language Class Initialized
INFO - 2021-01-20 01:24:38 --> Loader Class Initialized
INFO - 2021-01-20 01:24:38 --> Helper loaded: url_helper
INFO - 2021-01-20 01:24:38 --> Helper loaded: file_helper
INFO - 2021-01-20 01:24:38 --> Helper loaded: security_helper
INFO - 2021-01-20 01:24:38 --> Helper loaded: form_helper
INFO - 2021-01-20 01:24:38 --> Helper loaded: access_helper
INFO - 2021-01-20 01:24:38 --> Helper loaded: date_helper
INFO - 2021-01-20 01:24:38 --> Database Driver Class Initialized
INFO - 2021-01-20 01:24:38 --> User Agent Class Initialized
INFO - 2021-01-20 01:24:38 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:24:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:24:38 --> Pagination Class Initialized
INFO - 2021-01-20 01:24:38 --> Form Validation Class Initialized
INFO - 2021-01-20 01:24:38 --> Controller Class Initialized
INFO - 2021-01-20 01:24:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:24:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:24:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:24:38 --> Final output sent to browser
INFO - 2021-01-20 01:25:04 --> Config Class Initialized
INFO - 2021-01-20 01:25:04 --> Hooks Class Initialized
INFO - 2021-01-20 01:25:04 --> Utf8 Class Initialized
INFO - 2021-01-20 01:25:04 --> URI Class Initialized
INFO - 2021-01-20 01:25:04 --> Router Class Initialized
INFO - 2021-01-20 01:25:04 --> Output Class Initialized
INFO - 2021-01-20 01:25:04 --> Security Class Initialized
INFO - 2021-01-20 01:25:04 --> Input Class Initialized
INFO - 2021-01-20 01:25:04 --> Language Class Initialized
INFO - 2021-01-20 01:25:04 --> Loader Class Initialized
INFO - 2021-01-20 01:25:04 --> Helper loaded: url_helper
INFO - 2021-01-20 01:25:04 --> Helper loaded: file_helper
INFO - 2021-01-20 01:25:04 --> Helper loaded: security_helper
INFO - 2021-01-20 01:25:04 --> Helper loaded: form_helper
INFO - 2021-01-20 01:25:04 --> Helper loaded: access_helper
INFO - 2021-01-20 01:25:04 --> Helper loaded: date_helper
INFO - 2021-01-20 01:25:04 --> Database Driver Class Initialized
INFO - 2021-01-20 01:25:04 --> User Agent Class Initialized
INFO - 2021-01-20 01:25:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:25:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:25:04 --> Pagination Class Initialized
INFO - 2021-01-20 01:25:04 --> Form Validation Class Initialized
INFO - 2021-01-20 01:25:04 --> Controller Class Initialized
INFO - 2021-01-20 01:25:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:25:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:25:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:25:04 --> Final output sent to browser
INFO - 2021-01-20 01:25:14 --> Config Class Initialized
INFO - 2021-01-20 01:25:14 --> Hooks Class Initialized
INFO - 2021-01-20 01:25:14 --> Utf8 Class Initialized
INFO - 2021-01-20 01:25:14 --> URI Class Initialized
INFO - 2021-01-20 01:25:15 --> Router Class Initialized
INFO - 2021-01-20 01:25:15 --> Output Class Initialized
INFO - 2021-01-20 01:25:15 --> Security Class Initialized
INFO - 2021-01-20 01:25:15 --> Input Class Initialized
INFO - 2021-01-20 01:25:15 --> Language Class Initialized
INFO - 2021-01-20 01:25:15 --> Loader Class Initialized
INFO - 2021-01-20 01:25:15 --> Helper loaded: url_helper
INFO - 2021-01-20 01:25:15 --> Helper loaded: file_helper
INFO - 2021-01-20 01:25:15 --> Helper loaded: security_helper
INFO - 2021-01-20 01:25:15 --> Helper loaded: form_helper
INFO - 2021-01-20 01:25:15 --> Helper loaded: access_helper
INFO - 2021-01-20 01:25:15 --> Helper loaded: date_helper
INFO - 2021-01-20 01:25:15 --> Database Driver Class Initialized
INFO - 2021-01-20 01:25:15 --> User Agent Class Initialized
INFO - 2021-01-20 01:25:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:25:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:25:15 --> Pagination Class Initialized
INFO - 2021-01-20 01:25:15 --> Form Validation Class Initialized
INFO - 2021-01-20 01:25:15 --> Controller Class Initialized
INFO - 2021-01-20 01:25:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:25:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:25:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:25:15 --> Final output sent to browser
INFO - 2021-01-20 01:26:23 --> Config Class Initialized
INFO - 2021-01-20 01:26:23 --> Hooks Class Initialized
INFO - 2021-01-20 01:26:23 --> Utf8 Class Initialized
INFO - 2021-01-20 01:26:23 --> URI Class Initialized
INFO - 2021-01-20 01:26:23 --> Router Class Initialized
INFO - 2021-01-20 01:26:23 --> Output Class Initialized
INFO - 2021-01-20 01:26:23 --> Security Class Initialized
INFO - 2021-01-20 01:26:23 --> Input Class Initialized
INFO - 2021-01-20 01:26:23 --> Language Class Initialized
INFO - 2021-01-20 01:26:23 --> Loader Class Initialized
INFO - 2021-01-20 01:26:23 --> Helper loaded: url_helper
INFO - 2021-01-20 01:26:23 --> Helper loaded: file_helper
INFO - 2021-01-20 01:26:23 --> Helper loaded: security_helper
INFO - 2021-01-20 01:26:23 --> Helper loaded: form_helper
INFO - 2021-01-20 01:26:23 --> Helper loaded: access_helper
INFO - 2021-01-20 01:26:23 --> Helper loaded: date_helper
INFO - 2021-01-20 01:26:23 --> Database Driver Class Initialized
INFO - 2021-01-20 01:26:23 --> User Agent Class Initialized
INFO - 2021-01-20 01:26:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:26:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:26:23 --> Pagination Class Initialized
INFO - 2021-01-20 01:26:23 --> Form Validation Class Initialized
INFO - 2021-01-20 01:26:23 --> Controller Class Initialized
INFO - 2021-01-20 01:26:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:26:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:26:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:26:23 --> Final output sent to browser
INFO - 2021-01-20 01:26:45 --> Config Class Initialized
INFO - 2021-01-20 01:26:45 --> Hooks Class Initialized
INFO - 2021-01-20 01:26:45 --> Utf8 Class Initialized
INFO - 2021-01-20 01:26:45 --> URI Class Initialized
INFO - 2021-01-20 01:26:45 --> Router Class Initialized
INFO - 2021-01-20 01:26:45 --> Output Class Initialized
INFO - 2021-01-20 01:26:45 --> Security Class Initialized
INFO - 2021-01-20 01:26:45 --> Input Class Initialized
INFO - 2021-01-20 01:26:45 --> Language Class Initialized
INFO - 2021-01-20 01:26:45 --> Loader Class Initialized
INFO - 2021-01-20 01:26:45 --> Helper loaded: url_helper
INFO - 2021-01-20 01:26:46 --> Helper loaded: file_helper
INFO - 2021-01-20 01:26:46 --> Helper loaded: security_helper
INFO - 2021-01-20 01:26:46 --> Helper loaded: form_helper
INFO - 2021-01-20 01:26:46 --> Helper loaded: access_helper
INFO - 2021-01-20 01:26:46 --> Helper loaded: date_helper
INFO - 2021-01-20 01:26:46 --> Database Driver Class Initialized
INFO - 2021-01-20 01:26:46 --> User Agent Class Initialized
INFO - 2021-01-20 01:26:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:26:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:26:46 --> Pagination Class Initialized
INFO - 2021-01-20 01:26:46 --> Form Validation Class Initialized
INFO - 2021-01-20 01:26:46 --> Controller Class Initialized
INFO - 2021-01-20 01:26:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:26:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:26:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:26:46 --> Final output sent to browser
INFO - 2021-01-20 01:27:24 --> Config Class Initialized
INFO - 2021-01-20 01:27:24 --> Hooks Class Initialized
INFO - 2021-01-20 01:27:24 --> Utf8 Class Initialized
INFO - 2021-01-20 01:27:24 --> URI Class Initialized
INFO - 2021-01-20 01:27:24 --> Router Class Initialized
INFO - 2021-01-20 01:27:24 --> Output Class Initialized
INFO - 2021-01-20 01:27:24 --> Security Class Initialized
INFO - 2021-01-20 01:27:24 --> Input Class Initialized
INFO - 2021-01-20 01:27:24 --> Language Class Initialized
INFO - 2021-01-20 01:27:24 --> Loader Class Initialized
INFO - 2021-01-20 01:27:24 --> Helper loaded: url_helper
INFO - 2021-01-20 01:27:24 --> Helper loaded: file_helper
INFO - 2021-01-20 01:27:24 --> Helper loaded: security_helper
INFO - 2021-01-20 01:27:24 --> Helper loaded: form_helper
INFO - 2021-01-20 01:27:24 --> Helper loaded: access_helper
INFO - 2021-01-20 01:27:24 --> Helper loaded: date_helper
INFO - 2021-01-20 01:27:24 --> Database Driver Class Initialized
INFO - 2021-01-20 01:27:24 --> User Agent Class Initialized
INFO - 2021-01-20 01:27:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:27:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:27:24 --> Pagination Class Initialized
INFO - 2021-01-20 01:27:24 --> Form Validation Class Initialized
INFO - 2021-01-20 01:27:24 --> Controller Class Initialized
INFO - 2021-01-20 01:27:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:27:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:27:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:27:24 --> Final output sent to browser
INFO - 2021-01-20 01:27:25 --> Config Class Initialized
INFO - 2021-01-20 01:27:25 --> Hooks Class Initialized
INFO - 2021-01-20 01:27:25 --> Utf8 Class Initialized
INFO - 2021-01-20 01:27:25 --> URI Class Initialized
INFO - 2021-01-20 01:27:25 --> Router Class Initialized
INFO - 2021-01-20 01:27:25 --> Output Class Initialized
INFO - 2021-01-20 01:27:25 --> Security Class Initialized
INFO - 2021-01-20 01:27:25 --> Input Class Initialized
INFO - 2021-01-20 01:27:25 --> Language Class Initialized
INFO - 2021-01-20 01:27:25 --> Loader Class Initialized
INFO - 2021-01-20 01:27:25 --> Helper loaded: url_helper
INFO - 2021-01-20 01:27:25 --> Helper loaded: file_helper
INFO - 2021-01-20 01:27:25 --> Helper loaded: security_helper
INFO - 2021-01-20 01:27:25 --> Helper loaded: form_helper
INFO - 2021-01-20 01:27:25 --> Helper loaded: access_helper
INFO - 2021-01-20 01:27:25 --> Helper loaded: date_helper
INFO - 2021-01-20 01:27:25 --> Database Driver Class Initialized
INFO - 2021-01-20 01:27:25 --> User Agent Class Initialized
INFO - 2021-01-20 01:27:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:27:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:27:25 --> Pagination Class Initialized
INFO - 2021-01-20 01:27:25 --> Form Validation Class Initialized
INFO - 2021-01-20 01:27:25 --> Controller Class Initialized
INFO - 2021-01-20 01:27:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:27:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:27:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:27:25 --> Final output sent to browser
INFO - 2021-01-20 01:27:57 --> Config Class Initialized
INFO - 2021-01-20 01:27:57 --> Hooks Class Initialized
INFO - 2021-01-20 01:27:57 --> Utf8 Class Initialized
INFO - 2021-01-20 01:27:57 --> URI Class Initialized
INFO - 2021-01-20 01:27:57 --> Router Class Initialized
INFO - 2021-01-20 01:27:57 --> Output Class Initialized
INFO - 2021-01-20 01:27:57 --> Security Class Initialized
INFO - 2021-01-20 01:27:57 --> Input Class Initialized
INFO - 2021-01-20 01:27:57 --> Language Class Initialized
INFO - 2021-01-20 01:27:57 --> Loader Class Initialized
INFO - 2021-01-20 01:27:57 --> Helper loaded: url_helper
INFO - 2021-01-20 01:27:57 --> Helper loaded: file_helper
INFO - 2021-01-20 01:27:57 --> Helper loaded: security_helper
INFO - 2021-01-20 01:27:57 --> Helper loaded: form_helper
INFO - 2021-01-20 01:27:57 --> Helper loaded: access_helper
INFO - 2021-01-20 01:27:57 --> Helper loaded: date_helper
INFO - 2021-01-20 01:27:57 --> Database Driver Class Initialized
INFO - 2021-01-20 01:27:57 --> User Agent Class Initialized
INFO - 2021-01-20 01:27:57 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:27:57 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:27:57 --> Pagination Class Initialized
INFO - 2021-01-20 01:27:57 --> Form Validation Class Initialized
INFO - 2021-01-20 01:27:57 --> Controller Class Initialized
INFO - 2021-01-20 01:27:57 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:27:57 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:27:57 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:27:57 --> Final output sent to browser
INFO - 2021-01-20 01:29:01 --> Config Class Initialized
INFO - 2021-01-20 01:29:01 --> Hooks Class Initialized
INFO - 2021-01-20 01:29:01 --> Utf8 Class Initialized
INFO - 2021-01-20 01:29:01 --> URI Class Initialized
INFO - 2021-01-20 01:29:01 --> Router Class Initialized
INFO - 2021-01-20 01:29:01 --> Output Class Initialized
INFO - 2021-01-20 01:29:01 --> Security Class Initialized
INFO - 2021-01-20 01:29:01 --> Input Class Initialized
INFO - 2021-01-20 01:29:01 --> Language Class Initialized
INFO - 2021-01-20 01:29:01 --> Loader Class Initialized
INFO - 2021-01-20 01:29:01 --> Helper loaded: url_helper
INFO - 2021-01-20 01:29:01 --> Helper loaded: file_helper
INFO - 2021-01-20 01:29:01 --> Helper loaded: security_helper
INFO - 2021-01-20 01:29:01 --> Helper loaded: form_helper
INFO - 2021-01-20 01:29:01 --> Helper loaded: access_helper
INFO - 2021-01-20 01:29:01 --> Helper loaded: date_helper
INFO - 2021-01-20 01:29:01 --> Database Driver Class Initialized
INFO - 2021-01-20 01:29:01 --> User Agent Class Initialized
INFO - 2021-01-20 01:29:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:29:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:29:01 --> Pagination Class Initialized
INFO - 2021-01-20 01:29:01 --> Form Validation Class Initialized
INFO - 2021-01-20 01:29:01 --> Controller Class Initialized
INFO - 2021-01-20 01:29:01 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:29:01 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:29:01 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:29:01 --> Final output sent to browser
INFO - 2021-01-20 01:30:35 --> Config Class Initialized
INFO - 2021-01-20 01:30:35 --> Hooks Class Initialized
INFO - 2021-01-20 01:30:35 --> Utf8 Class Initialized
INFO - 2021-01-20 01:30:35 --> URI Class Initialized
INFO - 2021-01-20 01:30:35 --> Router Class Initialized
INFO - 2021-01-20 01:30:35 --> Output Class Initialized
INFO - 2021-01-20 01:30:35 --> Security Class Initialized
INFO - 2021-01-20 01:30:35 --> Input Class Initialized
INFO - 2021-01-20 01:30:35 --> Language Class Initialized
INFO - 2021-01-20 01:30:35 --> Loader Class Initialized
INFO - 2021-01-20 01:30:35 --> Helper loaded: url_helper
INFO - 2021-01-20 01:30:35 --> Helper loaded: file_helper
INFO - 2021-01-20 01:30:35 --> Helper loaded: security_helper
INFO - 2021-01-20 01:30:35 --> Helper loaded: form_helper
INFO - 2021-01-20 01:30:35 --> Helper loaded: access_helper
INFO - 2021-01-20 01:30:35 --> Helper loaded: date_helper
INFO - 2021-01-20 01:30:35 --> Database Driver Class Initialized
INFO - 2021-01-20 01:30:35 --> User Agent Class Initialized
INFO - 2021-01-20 01:30:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:30:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:30:35 --> Pagination Class Initialized
INFO - 2021-01-20 01:30:35 --> Form Validation Class Initialized
INFO - 2021-01-20 01:30:35 --> Controller Class Initialized
INFO - 2021-01-20 01:30:35 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:30:35 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:30:35 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:30:35 --> Final output sent to browser
INFO - 2021-01-20 01:30:43 --> Config Class Initialized
INFO - 2021-01-20 01:30:43 --> Hooks Class Initialized
INFO - 2021-01-20 01:30:43 --> Utf8 Class Initialized
INFO - 2021-01-20 01:30:43 --> URI Class Initialized
INFO - 2021-01-20 01:30:43 --> Router Class Initialized
INFO - 2021-01-20 01:30:43 --> Output Class Initialized
INFO - 2021-01-20 01:30:43 --> Security Class Initialized
INFO - 2021-01-20 01:30:43 --> Input Class Initialized
INFO - 2021-01-20 01:30:43 --> Language Class Initialized
INFO - 2021-01-20 01:30:43 --> Loader Class Initialized
INFO - 2021-01-20 01:30:43 --> Helper loaded: url_helper
INFO - 2021-01-20 01:30:43 --> Helper loaded: file_helper
INFO - 2021-01-20 01:30:43 --> Helper loaded: security_helper
INFO - 2021-01-20 01:30:43 --> Helper loaded: form_helper
INFO - 2021-01-20 01:30:43 --> Helper loaded: access_helper
INFO - 2021-01-20 01:30:43 --> Helper loaded: date_helper
INFO - 2021-01-20 01:30:43 --> Database Driver Class Initialized
INFO - 2021-01-20 01:30:43 --> User Agent Class Initialized
INFO - 2021-01-20 01:30:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:30:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:30:43 --> Pagination Class Initialized
INFO - 2021-01-20 01:30:43 --> Form Validation Class Initialized
INFO - 2021-01-20 01:30:43 --> Controller Class Initialized
INFO - 2021-01-20 01:30:43 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:30:43 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:30:43 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:30:43 --> Final output sent to browser
INFO - 2021-01-20 01:31:06 --> Config Class Initialized
INFO - 2021-01-20 01:31:06 --> Hooks Class Initialized
INFO - 2021-01-20 01:31:06 --> Utf8 Class Initialized
INFO - 2021-01-20 01:31:06 --> URI Class Initialized
INFO - 2021-01-20 01:31:06 --> Router Class Initialized
INFO - 2021-01-20 01:31:06 --> Output Class Initialized
INFO - 2021-01-20 01:31:06 --> Security Class Initialized
INFO - 2021-01-20 01:31:06 --> Input Class Initialized
INFO - 2021-01-20 01:31:06 --> Language Class Initialized
INFO - 2021-01-20 01:31:06 --> Loader Class Initialized
INFO - 2021-01-20 01:31:06 --> Helper loaded: url_helper
INFO - 2021-01-20 01:31:06 --> Helper loaded: file_helper
INFO - 2021-01-20 01:31:06 --> Helper loaded: security_helper
INFO - 2021-01-20 01:31:06 --> Helper loaded: form_helper
INFO - 2021-01-20 01:31:06 --> Helper loaded: access_helper
INFO - 2021-01-20 01:31:06 --> Helper loaded: date_helper
INFO - 2021-01-20 01:31:06 --> Database Driver Class Initialized
INFO - 2021-01-20 01:31:06 --> User Agent Class Initialized
INFO - 2021-01-20 01:31:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:31:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:31:06 --> Pagination Class Initialized
INFO - 2021-01-20 01:31:06 --> Form Validation Class Initialized
INFO - 2021-01-20 01:31:06 --> Controller Class Initialized
INFO - 2021-01-20 01:31:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:31:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:31:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:31:06 --> Final output sent to browser
INFO - 2021-01-20 01:31:21 --> Config Class Initialized
INFO - 2021-01-20 01:31:21 --> Hooks Class Initialized
INFO - 2021-01-20 01:31:21 --> Utf8 Class Initialized
INFO - 2021-01-20 01:31:21 --> URI Class Initialized
INFO - 2021-01-20 01:31:21 --> Router Class Initialized
INFO - 2021-01-20 01:31:21 --> Output Class Initialized
INFO - 2021-01-20 01:31:21 --> Security Class Initialized
INFO - 2021-01-20 01:31:21 --> Input Class Initialized
INFO - 2021-01-20 01:31:21 --> Language Class Initialized
INFO - 2021-01-20 01:31:21 --> Loader Class Initialized
INFO - 2021-01-20 01:31:21 --> Helper loaded: url_helper
INFO - 2021-01-20 01:31:21 --> Helper loaded: file_helper
INFO - 2021-01-20 01:31:21 --> Helper loaded: security_helper
INFO - 2021-01-20 01:31:21 --> Helper loaded: form_helper
INFO - 2021-01-20 01:31:21 --> Helper loaded: access_helper
INFO - 2021-01-20 01:31:21 --> Helper loaded: date_helper
INFO - 2021-01-20 01:31:21 --> Database Driver Class Initialized
INFO - 2021-01-20 01:31:21 --> User Agent Class Initialized
INFO - 2021-01-20 01:31:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:31:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:31:21 --> Pagination Class Initialized
INFO - 2021-01-20 01:31:21 --> Form Validation Class Initialized
INFO - 2021-01-20 01:31:21 --> Controller Class Initialized
INFO - 2021-01-20 01:31:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:31:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:31:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:31:21 --> Final output sent to browser
INFO - 2021-01-20 01:31:30 --> Config Class Initialized
INFO - 2021-01-20 01:31:30 --> Hooks Class Initialized
INFO - 2021-01-20 01:31:30 --> Utf8 Class Initialized
INFO - 2021-01-20 01:31:30 --> URI Class Initialized
INFO - 2021-01-20 01:31:30 --> Router Class Initialized
INFO - 2021-01-20 01:31:30 --> Output Class Initialized
INFO - 2021-01-20 01:31:30 --> Security Class Initialized
INFO - 2021-01-20 01:31:30 --> Input Class Initialized
INFO - 2021-01-20 01:31:30 --> Language Class Initialized
INFO - 2021-01-20 01:31:30 --> Loader Class Initialized
INFO - 2021-01-20 01:31:30 --> Helper loaded: url_helper
INFO - 2021-01-20 01:31:30 --> Helper loaded: file_helper
INFO - 2021-01-20 01:31:30 --> Helper loaded: security_helper
INFO - 2021-01-20 01:31:30 --> Helper loaded: form_helper
INFO - 2021-01-20 01:31:30 --> Helper loaded: access_helper
INFO - 2021-01-20 01:31:30 --> Helper loaded: date_helper
INFO - 2021-01-20 01:31:30 --> Database Driver Class Initialized
INFO - 2021-01-20 01:31:30 --> User Agent Class Initialized
INFO - 2021-01-20 01:31:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:31:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:31:30 --> Pagination Class Initialized
INFO - 2021-01-20 01:31:30 --> Form Validation Class Initialized
INFO - 2021-01-20 01:31:30 --> Controller Class Initialized
INFO - 2021-01-20 01:31:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:31:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:31:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:31:30 --> Final output sent to browser
INFO - 2021-01-20 01:31:39 --> Config Class Initialized
INFO - 2021-01-20 01:31:39 --> Hooks Class Initialized
INFO - 2021-01-20 01:31:39 --> Utf8 Class Initialized
INFO - 2021-01-20 01:31:39 --> URI Class Initialized
INFO - 2021-01-20 01:31:39 --> Router Class Initialized
INFO - 2021-01-20 01:31:39 --> Output Class Initialized
INFO - 2021-01-20 01:31:39 --> Security Class Initialized
INFO - 2021-01-20 01:31:39 --> Input Class Initialized
INFO - 2021-01-20 01:31:39 --> Language Class Initialized
INFO - 2021-01-20 01:31:39 --> Loader Class Initialized
INFO - 2021-01-20 01:31:39 --> Helper loaded: url_helper
INFO - 2021-01-20 01:31:39 --> Helper loaded: file_helper
INFO - 2021-01-20 01:31:39 --> Helper loaded: security_helper
INFO - 2021-01-20 01:31:39 --> Helper loaded: form_helper
INFO - 2021-01-20 01:31:39 --> Helper loaded: access_helper
INFO - 2021-01-20 01:31:39 --> Helper loaded: date_helper
INFO - 2021-01-20 01:31:39 --> Database Driver Class Initialized
INFO - 2021-01-20 01:31:39 --> User Agent Class Initialized
INFO - 2021-01-20 01:31:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:31:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:31:39 --> Pagination Class Initialized
INFO - 2021-01-20 01:31:39 --> Form Validation Class Initialized
INFO - 2021-01-20 01:31:39 --> Controller Class Initialized
INFO - 2021-01-20 01:31:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:31:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:31:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:31:39 --> Final output sent to browser
INFO - 2021-01-20 01:32:11 --> Config Class Initialized
INFO - 2021-01-20 01:32:11 --> Hooks Class Initialized
INFO - 2021-01-20 01:32:11 --> Utf8 Class Initialized
INFO - 2021-01-20 01:32:11 --> URI Class Initialized
INFO - 2021-01-20 01:32:11 --> Router Class Initialized
INFO - 2021-01-20 01:32:11 --> Output Class Initialized
INFO - 2021-01-20 01:32:11 --> Security Class Initialized
INFO - 2021-01-20 01:32:11 --> Input Class Initialized
INFO - 2021-01-20 01:32:11 --> Language Class Initialized
INFO - 2021-01-20 01:32:11 --> Loader Class Initialized
INFO - 2021-01-20 01:32:11 --> Helper loaded: url_helper
INFO - 2021-01-20 01:32:11 --> Helper loaded: file_helper
INFO - 2021-01-20 01:32:11 --> Helper loaded: security_helper
INFO - 2021-01-20 01:32:11 --> Helper loaded: form_helper
INFO - 2021-01-20 01:32:11 --> Helper loaded: access_helper
INFO - 2021-01-20 01:32:11 --> Helper loaded: date_helper
INFO - 2021-01-20 01:32:11 --> Database Driver Class Initialized
INFO - 2021-01-20 01:32:11 --> User Agent Class Initialized
INFO - 2021-01-20 01:32:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:32:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:32:11 --> Pagination Class Initialized
INFO - 2021-01-20 01:32:11 --> Form Validation Class Initialized
INFO - 2021-01-20 01:32:11 --> Controller Class Initialized
INFO - 2021-01-20 01:32:11 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:32:11 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:32:11 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:32:11 --> Final output sent to browser
INFO - 2021-01-20 01:32:40 --> Config Class Initialized
INFO - 2021-01-20 01:32:40 --> Hooks Class Initialized
INFO - 2021-01-20 01:32:40 --> Utf8 Class Initialized
INFO - 2021-01-20 01:32:40 --> URI Class Initialized
INFO - 2021-01-20 01:32:40 --> Router Class Initialized
INFO - 2021-01-20 01:32:40 --> Output Class Initialized
INFO - 2021-01-20 01:32:40 --> Security Class Initialized
INFO - 2021-01-20 01:32:40 --> Input Class Initialized
INFO - 2021-01-20 01:32:40 --> Language Class Initialized
INFO - 2021-01-20 01:32:40 --> Loader Class Initialized
INFO - 2021-01-20 01:32:40 --> Helper loaded: url_helper
INFO - 2021-01-20 01:32:40 --> Helper loaded: file_helper
INFO - 2021-01-20 01:32:40 --> Helper loaded: security_helper
INFO - 2021-01-20 01:32:40 --> Helper loaded: form_helper
INFO - 2021-01-20 01:32:40 --> Helper loaded: access_helper
INFO - 2021-01-20 01:32:40 --> Helper loaded: date_helper
INFO - 2021-01-20 01:32:40 --> Database Driver Class Initialized
INFO - 2021-01-20 01:32:40 --> User Agent Class Initialized
INFO - 2021-01-20 01:32:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:32:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:32:40 --> Pagination Class Initialized
INFO - 2021-01-20 01:32:40 --> Form Validation Class Initialized
INFO - 2021-01-20 01:32:40 --> Controller Class Initialized
INFO - 2021-01-20 01:32:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:32:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:32:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:32:40 --> Final output sent to browser
INFO - 2021-01-20 01:32:47 --> Config Class Initialized
INFO - 2021-01-20 01:32:47 --> Hooks Class Initialized
INFO - 2021-01-20 01:32:47 --> Utf8 Class Initialized
INFO - 2021-01-20 01:32:47 --> URI Class Initialized
INFO - 2021-01-20 01:32:47 --> Router Class Initialized
INFO - 2021-01-20 01:32:47 --> Output Class Initialized
INFO - 2021-01-20 01:32:47 --> Security Class Initialized
INFO - 2021-01-20 01:32:47 --> Input Class Initialized
INFO - 2021-01-20 01:32:47 --> Language Class Initialized
INFO - 2021-01-20 01:32:47 --> Loader Class Initialized
INFO - 2021-01-20 01:32:47 --> Helper loaded: url_helper
INFO - 2021-01-20 01:32:47 --> Helper loaded: file_helper
INFO - 2021-01-20 01:32:47 --> Helper loaded: security_helper
INFO - 2021-01-20 01:32:47 --> Helper loaded: form_helper
INFO - 2021-01-20 01:32:47 --> Helper loaded: access_helper
INFO - 2021-01-20 01:32:47 --> Helper loaded: date_helper
INFO - 2021-01-20 01:32:47 --> Database Driver Class Initialized
INFO - 2021-01-20 01:32:47 --> User Agent Class Initialized
INFO - 2021-01-20 01:32:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:32:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:32:47 --> Pagination Class Initialized
INFO - 2021-01-20 01:32:47 --> Form Validation Class Initialized
INFO - 2021-01-20 01:32:47 --> Controller Class Initialized
INFO - 2021-01-20 01:32:47 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:32:47 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:32:47 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:32:47 --> Final output sent to browser
INFO - 2021-01-20 01:33:28 --> Config Class Initialized
INFO - 2021-01-20 01:33:28 --> Hooks Class Initialized
INFO - 2021-01-20 01:33:28 --> Utf8 Class Initialized
INFO - 2021-01-20 01:33:28 --> URI Class Initialized
INFO - 2021-01-20 01:33:28 --> Router Class Initialized
INFO - 2021-01-20 01:33:28 --> Output Class Initialized
INFO - 2021-01-20 01:33:28 --> Security Class Initialized
INFO - 2021-01-20 01:33:28 --> Input Class Initialized
INFO - 2021-01-20 01:33:28 --> Language Class Initialized
INFO - 2021-01-20 01:33:28 --> Loader Class Initialized
INFO - 2021-01-20 01:33:28 --> Helper loaded: url_helper
INFO - 2021-01-20 01:33:28 --> Helper loaded: file_helper
INFO - 2021-01-20 01:33:28 --> Helper loaded: security_helper
INFO - 2021-01-20 01:33:28 --> Helper loaded: form_helper
INFO - 2021-01-20 01:33:28 --> Helper loaded: access_helper
INFO - 2021-01-20 01:33:28 --> Helper loaded: date_helper
INFO - 2021-01-20 01:33:28 --> Database Driver Class Initialized
INFO - 2021-01-20 01:33:28 --> User Agent Class Initialized
INFO - 2021-01-20 01:33:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:33:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:33:28 --> Pagination Class Initialized
INFO - 2021-01-20 01:33:28 --> Form Validation Class Initialized
INFO - 2021-01-20 01:33:28 --> Controller Class Initialized
INFO - 2021-01-20 01:33:28 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:33:28 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:33:28 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:33:28 --> Final output sent to browser
INFO - 2021-01-20 01:33:32 --> Config Class Initialized
INFO - 2021-01-20 01:33:32 --> Hooks Class Initialized
INFO - 2021-01-20 01:33:32 --> Utf8 Class Initialized
INFO - 2021-01-20 01:33:32 --> URI Class Initialized
INFO - 2021-01-20 01:33:32 --> Router Class Initialized
INFO - 2021-01-20 01:33:32 --> Output Class Initialized
INFO - 2021-01-20 01:33:32 --> Security Class Initialized
INFO - 2021-01-20 01:33:32 --> Input Class Initialized
INFO - 2021-01-20 01:33:32 --> Language Class Initialized
INFO - 2021-01-20 01:33:32 --> Loader Class Initialized
INFO - 2021-01-20 01:33:32 --> Helper loaded: url_helper
INFO - 2021-01-20 01:33:32 --> Helper loaded: file_helper
INFO - 2021-01-20 01:33:32 --> Helper loaded: security_helper
INFO - 2021-01-20 01:33:32 --> Helper loaded: form_helper
INFO - 2021-01-20 01:33:32 --> Helper loaded: access_helper
INFO - 2021-01-20 01:33:32 --> Helper loaded: date_helper
INFO - 2021-01-20 01:33:32 --> Database Driver Class Initialized
INFO - 2021-01-20 01:33:32 --> User Agent Class Initialized
INFO - 2021-01-20 01:33:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 01:33:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 01:33:32 --> Pagination Class Initialized
INFO - 2021-01-20 01:33:32 --> Form Validation Class Initialized
INFO - 2021-01-20 01:33:32 --> Controller Class Initialized
INFO - 2021-01-20 01:33:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 01:33:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 01:33:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 01:33:32 --> Final output sent to browser
INFO - 2021-01-20 02:02:53 --> Config Class Initialized
INFO - 2021-01-20 02:02:53 --> Hooks Class Initialized
INFO - 2021-01-20 02:02:53 --> Utf8 Class Initialized
INFO - 2021-01-20 02:02:53 --> URI Class Initialized
INFO - 2021-01-20 02:02:53 --> Router Class Initialized
INFO - 2021-01-20 02:02:53 --> Output Class Initialized
INFO - 2021-01-20 02:02:53 --> Security Class Initialized
INFO - 2021-01-20 02:02:53 --> Input Class Initialized
INFO - 2021-01-20 02:02:53 --> Language Class Initialized
INFO - 2021-01-20 02:02:53 --> Loader Class Initialized
INFO - 2021-01-20 02:02:53 --> Helper loaded: url_helper
INFO - 2021-01-20 02:02:53 --> Helper loaded: file_helper
INFO - 2021-01-20 02:02:53 --> Helper loaded: security_helper
INFO - 2021-01-20 02:02:53 --> Helper loaded: form_helper
INFO - 2021-01-20 02:02:53 --> Helper loaded: access_helper
INFO - 2021-01-20 02:02:53 --> Helper loaded: date_helper
INFO - 2021-01-20 02:02:53 --> Database Driver Class Initialized
INFO - 2021-01-20 02:02:57 --> User Agent Class Initialized
INFO - 2021-01-20 02:02:57 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:02:57 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:02:57 --> Pagination Class Initialized
INFO - 2021-01-20 02:02:57 --> Form Validation Class Initialized
INFO - 2021-01-20 02:02:57 --> Controller Class Initialized
INFO - 2021-01-20 02:02:58 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 02:02:58 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 02:02:58 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 02:02:58 --> Final output sent to browser
INFO - 2021-01-20 02:03:06 --> Config Class Initialized
INFO - 2021-01-20 02:03:06 --> Hooks Class Initialized
INFO - 2021-01-20 02:03:06 --> Utf8 Class Initialized
INFO - 2021-01-20 02:03:06 --> URI Class Initialized
INFO - 2021-01-20 02:03:06 --> Router Class Initialized
INFO - 2021-01-20 02:03:06 --> Output Class Initialized
INFO - 2021-01-20 02:03:06 --> Security Class Initialized
INFO - 2021-01-20 02:03:06 --> Input Class Initialized
INFO - 2021-01-20 02:03:06 --> Language Class Initialized
INFO - 2021-01-20 02:03:06 --> Loader Class Initialized
INFO - 2021-01-20 02:03:06 --> Helper loaded: url_helper
INFO - 2021-01-20 02:03:06 --> Helper loaded: file_helper
INFO - 2021-01-20 02:03:06 --> Helper loaded: security_helper
INFO - 2021-01-20 02:03:06 --> Helper loaded: form_helper
INFO - 2021-01-20 02:03:06 --> Helper loaded: access_helper
INFO - 2021-01-20 02:03:06 --> Helper loaded: date_helper
INFO - 2021-01-20 02:03:06 --> Database Driver Class Initialized
INFO - 2021-01-20 02:03:06 --> User Agent Class Initialized
INFO - 2021-01-20 02:03:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:03:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:03:06 --> Pagination Class Initialized
INFO - 2021-01-20 02:03:06 --> Form Validation Class Initialized
INFO - 2021-01-20 02:03:06 --> Controller Class Initialized
INFO - 2021-01-20 02:03:06 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2021-01-20 02:03:07 --> Config Class Initialized
INFO - 2021-01-20 02:03:07 --> Hooks Class Initialized
INFO - 2021-01-20 02:03:07 --> Utf8 Class Initialized
INFO - 2021-01-20 02:03:07 --> URI Class Initialized
INFO - 2021-01-20 02:03:07 --> Router Class Initialized
INFO - 2021-01-20 02:03:07 --> Output Class Initialized
INFO - 2021-01-20 02:03:07 --> Security Class Initialized
INFO - 2021-01-20 02:03:07 --> Input Class Initialized
INFO - 2021-01-20 02:03:07 --> Language Class Initialized
INFO - 2021-01-20 02:03:07 --> Loader Class Initialized
INFO - 2021-01-20 02:03:07 --> Helper loaded: url_helper
INFO - 2021-01-20 02:03:07 --> Helper loaded: file_helper
INFO - 2021-01-20 02:03:07 --> Helper loaded: security_helper
INFO - 2021-01-20 02:03:07 --> Helper loaded: form_helper
INFO - 2021-01-20 02:03:07 --> Helper loaded: access_helper
INFO - 2021-01-20 02:03:07 --> Helper loaded: date_helper
INFO - 2021-01-20 02:03:07 --> Database Driver Class Initialized
INFO - 2021-01-20 02:03:07 --> User Agent Class Initialized
INFO - 2021-01-20 02:03:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:03:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:03:07 --> Pagination Class Initialized
INFO - 2021-01-20 02:03:07 --> Form Validation Class Initialized
INFO - 2021-01-20 02:03:07 --> Controller Class Initialized
INFO - 2021-01-20 02:03:08 --> Model "User_model" initialized
INFO - 2021-01-20 02:03:08 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:03:08 --> Model "Periksa_model" initialized
INFO - 2021-01-20 08:03:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 08:03:08 --> Final output sent to browser
INFO - 2021-01-20 02:03:14 --> Config Class Initialized
INFO - 2021-01-20 02:03:14 --> Hooks Class Initialized
INFO - 2021-01-20 02:03:14 --> Utf8 Class Initialized
INFO - 2021-01-20 02:03:14 --> URI Class Initialized
INFO - 2021-01-20 02:03:14 --> Router Class Initialized
INFO - 2021-01-20 02:03:14 --> Output Class Initialized
INFO - 2021-01-20 02:03:14 --> Security Class Initialized
INFO - 2021-01-20 02:03:14 --> Input Class Initialized
INFO - 2021-01-20 02:03:14 --> Language Class Initialized
INFO - 2021-01-20 02:03:14 --> Loader Class Initialized
INFO - 2021-01-20 02:03:14 --> Helper loaded: url_helper
INFO - 2021-01-20 02:03:14 --> Helper loaded: file_helper
INFO - 2021-01-20 02:03:14 --> Helper loaded: security_helper
INFO - 2021-01-20 02:03:14 --> Helper loaded: form_helper
INFO - 2021-01-20 02:03:14 --> Helper loaded: access_helper
INFO - 2021-01-20 02:03:14 --> Helper loaded: date_helper
INFO - 2021-01-20 02:03:15 --> Database Driver Class Initialized
INFO - 2021-01-20 02:03:15 --> User Agent Class Initialized
INFO - 2021-01-20 02:03:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:03:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:03:15 --> Pagination Class Initialized
INFO - 2021-01-20 02:03:15 --> Form Validation Class Initialized
INFO - 2021-01-20 02:03:15 --> Controller Class Initialized
INFO - 2021-01-20 02:03:15 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:03:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat.php
INFO - 2021-01-20 02:03:15 --> Final output sent to browser
INFO - 2021-01-20 02:04:41 --> Config Class Initialized
INFO - 2021-01-20 02:04:41 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:41 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:41 --> URI Class Initialized
INFO - 2021-01-20 02:04:41 --> Router Class Initialized
INFO - 2021-01-20 02:04:41 --> Output Class Initialized
INFO - 2021-01-20 02:04:41 --> Security Class Initialized
INFO - 2021-01-20 02:04:41 --> Input Class Initialized
INFO - 2021-01-20 02:04:41 --> Language Class Initialized
INFO - 2021-01-20 02:04:41 --> Loader Class Initialized
INFO - 2021-01-20 02:04:41 --> Helper loaded: url_helper
INFO - 2021-01-20 02:04:41 --> Helper loaded: file_helper
INFO - 2021-01-20 02:04:41 --> Helper loaded: security_helper
INFO - 2021-01-20 02:04:41 --> Helper loaded: form_helper
INFO - 2021-01-20 02:04:41 --> Helper loaded: access_helper
INFO - 2021-01-20 02:04:41 --> Helper loaded: date_helper
INFO - 2021-01-20 02:04:41 --> Database Driver Class Initialized
INFO - 2021-01-20 02:04:41 --> User Agent Class Initialized
INFO - 2021-01-20 02:04:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:04:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:04:41 --> Pagination Class Initialized
INFO - 2021-01-20 02:04:41 --> Form Validation Class Initialized
INFO - 2021-01-20 02:04:41 --> Controller Class Initialized
INFO - 2021-01-20 02:04:41 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:04:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_obat.php
INFO - 2021-01-20 02:04:41 --> Final output sent to browser
INFO - 2021-01-20 02:04:44 --> Config Class Initialized
INFO - 2021-01-20 02:04:44 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:44 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:44 --> URI Class Initialized
INFO - 2021-01-20 02:04:44 --> Router Class Initialized
INFO - 2021-01-20 02:04:44 --> Output Class Initialized
INFO - 2021-01-20 02:04:44 --> Security Class Initialized
INFO - 2021-01-20 02:04:44 --> Input Class Initialized
INFO - 2021-01-20 02:04:44 --> Language Class Initialized
INFO - 2021-01-20 02:04:44 --> Loader Class Initialized
INFO - 2021-01-20 02:04:44 --> Helper loaded: url_helper
INFO - 2021-01-20 02:04:44 --> Helper loaded: file_helper
INFO - 2021-01-20 02:04:44 --> Helper loaded: security_helper
INFO - 2021-01-20 02:04:44 --> Helper loaded: form_helper
INFO - 2021-01-20 02:04:44 --> Helper loaded: access_helper
INFO - 2021-01-20 02:04:44 --> Helper loaded: date_helper
INFO - 2021-01-20 02:04:44 --> Database Driver Class Initialized
INFO - 2021-01-20 02:04:44 --> User Agent Class Initialized
INFO - 2021-01-20 02:04:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:04:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:04:44 --> Pagination Class Initialized
INFO - 2021-01-20 02:04:44 --> Form Validation Class Initialized
INFO - 2021-01-20 02:04:44 --> Controller Class Initialized
INFO - 2021-01-20 02:04:44 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:04:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat.php
INFO - 2021-01-20 02:04:44 --> Final output sent to browser
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:45 --> URI Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:45 --> Router Class Initialized
INFO - 2021-01-20 02:04:45 --> URI Class Initialized
INFO - 2021-01-20 02:04:45 --> Router Class Initialized
INFO - 2021-01-20 02:04:45 --> Output Class Initialized
INFO - 2021-01-20 02:04:45 --> Output Class Initialized
INFO - 2021-01-20 02:04:45 --> Security Class Initialized
INFO - 2021-01-20 02:04:45 --> Security Class Initialized
INFO - 2021-01-20 02:04:45 --> Input Class Initialized
INFO - 2021-01-20 02:04:45 --> Input Class Initialized
INFO - 2021-01-20 02:04:45 --> Language Class Initialized
INFO - 2021-01-20 02:04:45 --> Language Class Initialized
ERROR - 2021-01-20 02:04:45 --> 404 Page Not Found: Css/waves.min.css
ERROR - 2021-01-20 02:04:45 --> 404 Page Not Found: Css/bootstrap.min.css
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> URI Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Router Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:45 --> Output Class Initialized
INFO - 2021-01-20 02:04:45 --> URI Class Initialized
INFO - 2021-01-20 02:04:45 --> Security Class Initialized
INFO - 2021-01-20 02:04:45 --> Router Class Initialized
INFO - 2021-01-20 02:04:45 --> Input Class Initialized
INFO - 2021-01-20 02:04:45 --> Language Class Initialized
INFO - 2021-01-20 02:04:45 --> Output Class Initialized
ERROR - 2021-01-20 02:04:45 --> 404 Page Not Found: Css/datatables.bootstrap4.min.css
INFO - 2021-01-20 02:04:45 --> Security Class Initialized
INFO - 2021-01-20 02:04:45 --> Input Class Initialized
INFO - 2021-01-20 02:04:45 --> Language Class Initialized
ERROR - 2021-01-20 02:04:45 --> 404 Page Not Found: Css/buttons.datatables.min.css
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:45 --> URI Class Initialized
INFO - 2021-01-20 02:04:45 --> Router Class Initialized
INFO - 2021-01-20 02:04:45 --> Output Class Initialized
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Security Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Input Class Initialized
INFO - 2021-01-20 02:04:45 --> Language Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
ERROR - 2021-01-20 02:04:45 --> 404 Page Not Found: Css/responsive.bootstrap4.min.css
INFO - 2021-01-20 02:04:45 --> URI Class Initialized
INFO - 2021-01-20 02:04:45 --> Router Class Initialized
INFO - 2021-01-20 02:04:45 --> Output Class Initialized
INFO - 2021-01-20 02:04:45 --> Security Class Initialized
INFO - 2021-01-20 02:04:45 --> Input Class Initialized
INFO - 2021-01-20 02:04:45 --> Language Class Initialized
ERROR - 2021-01-20 02:04:45 --> 404 Page Not Found: Css/buttons.datatables.min-2.css
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:45 --> URI Class Initialized
INFO - 2021-01-20 02:04:45 --> Router Class Initialized
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Output Class Initialized
INFO - 2021-01-20 02:04:45 --> Security Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:45 --> Input Class Initialized
INFO - 2021-01-20 02:04:45 --> URI Class Initialized
INFO - 2021-01-20 02:04:45 --> Language Class Initialized
ERROR - 2021-01-20 02:04:45 --> 404 Page Not Found: Css/style.css
INFO - 2021-01-20 02:04:45 --> Router Class Initialized
INFO - 2021-01-20 02:04:45 --> Output Class Initialized
INFO - 2021-01-20 02:04:45 --> Security Class Initialized
INFO - 2021-01-20 02:04:45 --> Input Class Initialized
INFO - 2021-01-20 02:04:45 --> Language Class Initialized
ERROR - 2021-01-20 02:04:45 --> 404 Page Not Found: Css/pages.css
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:45 --> URI Class Initialized
INFO - 2021-01-20 02:04:45 --> Router Class Initialized
INFO - 2021-01-20 02:04:45 --> Output Class Initialized
INFO - 2021-01-20 02:04:45 --> Security Class Initialized
INFO - 2021-01-20 02:04:45 --> Input Class Initialized
INFO - 2021-01-20 02:04:45 --> Language Class Initialized
ERROR - 2021-01-20 02:04:45 --> 404 Page Not Found: Css/icofont.css
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:45 --> Config Class Initialized
INFO - 2021-01-20 02:04:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:46 --> URI Class Initialized
INFO - 2021-01-20 02:04:46 --> Router Class Initialized
INFO - 2021-01-20 02:04:46 --> Output Class Initialized
INFO - 2021-01-20 02:04:46 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:46 --> URI Class Initialized
INFO - 2021-01-20 02:04:46 --> Router Class Initialized
INFO - 2021-01-20 02:04:46 --> Security Class Initialized
INFO - 2021-01-20 02:04:46 --> Input Class Initialized
INFO - 2021-01-20 02:04:46 --> Language Class Initialized
ERROR - 2021-01-20 02:04:46 --> 404 Page Not Found: Css/themify-icons.css
INFO - 2021-01-20 02:04:46 --> Output Class Initialized
INFO - 2021-01-20 02:04:46 --> Security Class Initialized
INFO - 2021-01-20 02:04:46 --> Input Class Initialized
INFO - 2021-01-20 02:04:46 --> Language Class Initialized
ERROR - 2021-01-20 02:04:46 --> 404 Page Not Found: Css/font-awesome.min.css
INFO - 2021-01-20 02:04:46 --> Config Class Initialized
INFO - 2021-01-20 02:04:46 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:46 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:46 --> URI Class Initialized
INFO - 2021-01-20 02:04:46 --> Router Class Initialized
INFO - 2021-01-20 02:04:46 --> Output Class Initialized
INFO - 2021-01-20 02:04:46 --> Security Class Initialized
INFO - 2021-01-20 02:04:46 --> Input Class Initialized
INFO - 2021-01-20 02:04:46 --> Language Class Initialized
ERROR - 2021-01-20 02:04:46 --> 404 Page Not Found: Css/feather.css
INFO - 2021-01-20 02:04:51 --> Config Class Initialized
INFO - 2021-01-20 02:04:51 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:51 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:51 --> URI Class Initialized
INFO - 2021-01-20 02:04:51 --> Router Class Initialized
INFO - 2021-01-20 02:04:51 --> Output Class Initialized
INFO - 2021-01-20 02:04:51 --> Security Class Initialized
INFO - 2021-01-20 02:04:51 --> Input Class Initialized
INFO - 2021-01-20 02:04:51 --> Language Class Initialized
INFO - 2021-01-20 02:04:51 --> Loader Class Initialized
INFO - 2021-01-20 02:04:51 --> Helper loaded: url_helper
INFO - 2021-01-20 02:04:51 --> Helper loaded: file_helper
INFO - 2021-01-20 02:04:51 --> Helper loaded: security_helper
INFO - 2021-01-20 02:04:51 --> Helper loaded: form_helper
INFO - 2021-01-20 02:04:51 --> Helper loaded: access_helper
INFO - 2021-01-20 02:04:51 --> Helper loaded: date_helper
INFO - 2021-01-20 02:04:51 --> Database Driver Class Initialized
INFO - 2021-01-20 02:04:51 --> User Agent Class Initialized
INFO - 2021-01-20 02:04:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:04:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:04:51 --> Pagination Class Initialized
INFO - 2021-01-20 02:04:51 --> Form Validation Class Initialized
INFO - 2021-01-20 02:04:51 --> Controller Class Initialized
INFO - 2021-01-20 02:04:51 --> Model "User_model" initialized
INFO - 2021-01-20 02:04:51 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:04:51 --> Model "Periksa_model" initialized
INFO - 2021-01-20 08:04:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 08:04:52 --> Final output sent to browser
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
INFO - 2021-01-20 02:04:55 --> Loader Class Initialized
INFO - 2021-01-20 02:04:55 --> Helper loaded: url_helper
INFO - 2021-01-20 02:04:55 --> Helper loaded: file_helper
INFO - 2021-01-20 02:04:55 --> Helper loaded: security_helper
INFO - 2021-01-20 02:04:55 --> Helper loaded: form_helper
INFO - 2021-01-20 02:04:55 --> Helper loaded: access_helper
INFO - 2021-01-20 02:04:55 --> Helper loaded: date_helper
INFO - 2021-01-20 02:04:55 --> Database Driver Class Initialized
INFO - 2021-01-20 02:04:55 --> User Agent Class Initialized
INFO - 2021-01-20 02:04:55 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:04:55 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:04:55 --> Pagination Class Initialized
INFO - 2021-01-20 02:04:55 --> Form Validation Class Initialized
INFO - 2021-01-20 02:04:55 --> Controller Class Initialized
INFO - 2021-01-20 02:04:55 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:04:55 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat.php
INFO - 2021-01-20 02:04:55 --> Final output sent to browser
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/datatables.bootstrap4.min.css
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/bootstrap.min.css
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/buttons.datatables.min.css
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/buttons.datatables.min-2.css
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/responsive.bootstrap4.min.css
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/waves.min.css
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/feather.css
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/themify-icons.css
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/icofont.css
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/font-awesome.min.css
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> Config Class Initialized
INFO - 2021-01-20 02:04:55 --> Hooks Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Utf8 Class Initialized
INFO - 2021-01-20 02:04:55 --> URI Class Initialized
INFO - 2021-01-20 02:04:55 --> Router Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Output Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Security Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Input Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
INFO - 2021-01-20 02:04:55 --> Language Class Initialized
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/style.css
ERROR - 2021-01-20 02:04:55 --> 404 Page Not Found: Css/pages.css
INFO - 2021-01-20 02:05:00 --> Config Class Initialized
INFO - 2021-01-20 02:05:00 --> Hooks Class Initialized
INFO - 2021-01-20 02:05:00 --> Utf8 Class Initialized
INFO - 2021-01-20 02:05:00 --> URI Class Initialized
INFO - 2021-01-20 02:05:00 --> Router Class Initialized
INFO - 2021-01-20 02:05:00 --> Output Class Initialized
INFO - 2021-01-20 02:05:00 --> Security Class Initialized
INFO - 2021-01-20 02:05:00 --> Input Class Initialized
INFO - 2021-01-20 02:05:00 --> Language Class Initialized
INFO - 2021-01-20 02:05:00 --> Loader Class Initialized
INFO - 2021-01-20 02:05:00 --> Helper loaded: url_helper
INFO - 2021-01-20 02:05:00 --> Helper loaded: file_helper
INFO - 2021-01-20 02:05:00 --> Helper loaded: security_helper
INFO - 2021-01-20 02:05:00 --> Helper loaded: form_helper
INFO - 2021-01-20 02:05:00 --> Helper loaded: access_helper
INFO - 2021-01-20 02:05:00 --> Helper loaded: date_helper
INFO - 2021-01-20 02:05:00 --> Database Driver Class Initialized
INFO - 2021-01-20 02:05:00 --> User Agent Class Initialized
INFO - 2021-01-20 02:05:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:05:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:05:00 --> Pagination Class Initialized
INFO - 2021-01-20 02:05:00 --> Form Validation Class Initialized
INFO - 2021-01-20 02:05:00 --> Controller Class Initialized
INFO - 2021-01-20 02:05:00 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:05:01 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat_keluar.php
INFO - 2021-01-20 02:05:01 --> Final output sent to browser
INFO - 2021-01-20 02:05:04 --> Config Class Initialized
INFO - 2021-01-20 02:05:04 --> Hooks Class Initialized
INFO - 2021-01-20 02:05:04 --> Utf8 Class Initialized
INFO - 2021-01-20 02:05:04 --> URI Class Initialized
INFO - 2021-01-20 02:05:04 --> Router Class Initialized
INFO - 2021-01-20 02:05:04 --> Output Class Initialized
INFO - 2021-01-20 02:05:04 --> Security Class Initialized
INFO - 2021-01-20 02:05:04 --> Input Class Initialized
INFO - 2021-01-20 02:05:04 --> Language Class Initialized
INFO - 2021-01-20 02:05:04 --> Loader Class Initialized
INFO - 2021-01-20 02:05:04 --> Helper loaded: url_helper
INFO - 2021-01-20 02:05:04 --> Helper loaded: file_helper
INFO - 2021-01-20 02:05:04 --> Helper loaded: security_helper
INFO - 2021-01-20 02:05:04 --> Helper loaded: form_helper
INFO - 2021-01-20 02:05:04 --> Helper loaded: access_helper
INFO - 2021-01-20 02:05:04 --> Helper loaded: date_helper
INFO - 2021-01-20 02:05:04 --> Database Driver Class Initialized
INFO - 2021-01-20 02:05:04 --> User Agent Class Initialized
INFO - 2021-01-20 02:05:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:05:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:05:04 --> Pagination Class Initialized
INFO - 2021-01-20 02:05:04 --> Form Validation Class Initialized
INFO - 2021-01-20 02:05:04 --> Controller Class Initialized
INFO - 2021-01-20 02:05:04 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:05:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/print/print_ok.php
INFO - 2021-01-20 02:05:04 --> Final output sent to browser
INFO - 2021-01-20 02:05:39 --> Config Class Initialized
INFO - 2021-01-20 02:05:39 --> Hooks Class Initialized
INFO - 2021-01-20 02:05:39 --> Utf8 Class Initialized
INFO - 2021-01-20 02:05:39 --> URI Class Initialized
INFO - 2021-01-20 02:05:39 --> Router Class Initialized
INFO - 2021-01-20 02:05:39 --> Output Class Initialized
INFO - 2021-01-20 02:05:39 --> Security Class Initialized
INFO - 2021-01-20 02:05:39 --> Input Class Initialized
INFO - 2021-01-20 02:05:39 --> Language Class Initialized
INFO - 2021-01-20 02:05:39 --> Loader Class Initialized
INFO - 2021-01-20 02:05:39 --> Helper loaded: url_helper
INFO - 2021-01-20 02:05:39 --> Helper loaded: file_helper
INFO - 2021-01-20 02:05:39 --> Helper loaded: security_helper
INFO - 2021-01-20 02:05:39 --> Helper loaded: form_helper
INFO - 2021-01-20 02:05:39 --> Helper loaded: access_helper
INFO - 2021-01-20 02:05:39 --> Helper loaded: date_helper
INFO - 2021-01-20 02:05:39 --> Database Driver Class Initialized
INFO - 2021-01-20 02:05:39 --> User Agent Class Initialized
INFO - 2021-01-20 02:05:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:05:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:05:39 --> Pagination Class Initialized
INFO - 2021-01-20 02:05:39 --> Form Validation Class Initialized
INFO - 2021-01-20 02:05:39 --> Controller Class Initialized
INFO - 2021-01-20 02:05:39 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:05:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat_keluar.php
INFO - 2021-01-20 02:05:39 --> Final output sent to browser
INFO - 2021-01-20 02:05:51 --> Config Class Initialized
INFO - 2021-01-20 02:05:51 --> Hooks Class Initialized
INFO - 2021-01-20 02:05:51 --> Utf8 Class Initialized
INFO - 2021-01-20 02:05:51 --> URI Class Initialized
INFO - 2021-01-20 02:05:51 --> Router Class Initialized
INFO - 2021-01-20 02:05:51 --> Output Class Initialized
INFO - 2021-01-20 02:05:51 --> Security Class Initialized
INFO - 2021-01-20 02:05:51 --> Input Class Initialized
INFO - 2021-01-20 02:05:51 --> Language Class Initialized
INFO - 2021-01-20 02:05:51 --> Loader Class Initialized
INFO - 2021-01-20 02:05:51 --> Helper loaded: url_helper
INFO - 2021-01-20 02:05:51 --> Helper loaded: file_helper
INFO - 2021-01-20 02:05:51 --> Helper loaded: security_helper
INFO - 2021-01-20 02:05:51 --> Helper loaded: form_helper
INFO - 2021-01-20 02:05:51 --> Helper loaded: access_helper
INFO - 2021-01-20 02:05:51 --> Helper loaded: date_helper
INFO - 2021-01-20 02:05:51 --> Database Driver Class Initialized
INFO - 2021-01-20 02:05:51 --> User Agent Class Initialized
INFO - 2021-01-20 02:05:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:05:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:05:51 --> Pagination Class Initialized
INFO - 2021-01-20 02:05:51 --> Form Validation Class Initialized
INFO - 2021-01-20 02:05:51 --> Controller Class Initialized
INFO - 2021-01-20 02:05:51 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:05:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat.php
INFO - 2021-01-20 02:05:51 --> Final output sent to browser
INFO - 2021-01-20 02:05:52 --> Config Class Initialized
INFO - 2021-01-20 02:05:52 --> Hooks Class Initialized
INFO - 2021-01-20 02:05:52 --> Utf8 Class Initialized
INFO - 2021-01-20 02:05:52 --> URI Class Initialized
INFO - 2021-01-20 02:05:52 --> Router Class Initialized
INFO - 2021-01-20 02:05:52 --> Output Class Initialized
INFO - 2021-01-20 02:05:52 --> Security Class Initialized
INFO - 2021-01-20 02:05:52 --> Input Class Initialized
INFO - 2021-01-20 02:05:52 --> Language Class Initialized
INFO - 2021-01-20 02:05:52 --> Loader Class Initialized
INFO - 2021-01-20 02:05:52 --> Helper loaded: url_helper
INFO - 2021-01-20 02:05:52 --> Helper loaded: file_helper
INFO - 2021-01-20 02:05:52 --> Helper loaded: security_helper
INFO - 2021-01-20 02:05:52 --> Helper loaded: form_helper
INFO - 2021-01-20 02:05:52 --> Helper loaded: access_helper
INFO - 2021-01-20 02:05:52 --> Helper loaded: date_helper
INFO - 2021-01-20 02:05:52 --> Database Driver Class Initialized
INFO - 2021-01-20 02:05:52 --> User Agent Class Initialized
INFO - 2021-01-20 02:05:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:05:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:05:52 --> Pagination Class Initialized
INFO - 2021-01-20 02:05:52 --> Form Validation Class Initialized
INFO - 2021-01-20 02:05:52 --> Controller Class Initialized
INFO - 2021-01-20 02:05:52 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:05:52 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat.php
INFO - 2021-01-20 02:05:52 --> Final output sent to browser
INFO - 2021-01-20 02:07:42 --> Config Class Initialized
INFO - 2021-01-20 02:07:42 --> Hooks Class Initialized
INFO - 2021-01-20 02:07:42 --> Utf8 Class Initialized
INFO - 2021-01-20 02:07:42 --> URI Class Initialized
INFO - 2021-01-20 02:07:42 --> Router Class Initialized
INFO - 2021-01-20 02:07:42 --> Output Class Initialized
INFO - 2021-01-20 02:07:42 --> Security Class Initialized
INFO - 2021-01-20 02:07:42 --> Input Class Initialized
INFO - 2021-01-20 02:07:42 --> Language Class Initialized
INFO - 2021-01-20 02:07:42 --> Loader Class Initialized
INFO - 2021-01-20 02:07:42 --> Helper loaded: url_helper
INFO - 2021-01-20 02:07:42 --> Helper loaded: file_helper
INFO - 2021-01-20 02:07:42 --> Helper loaded: security_helper
INFO - 2021-01-20 02:07:42 --> Helper loaded: form_helper
INFO - 2021-01-20 02:07:42 --> Helper loaded: access_helper
INFO - 2021-01-20 02:07:43 --> Helper loaded: date_helper
INFO - 2021-01-20 02:07:43 --> Database Driver Class Initialized
INFO - 2021-01-20 02:07:43 --> User Agent Class Initialized
INFO - 2021-01-20 02:07:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:07:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:07:43 --> Pagination Class Initialized
INFO - 2021-01-20 02:07:43 --> Form Validation Class Initialized
INFO - 2021-01-20 02:07:43 --> Controller Class Initialized
INFO - 2021-01-20 02:07:43 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:07:43 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat.php
INFO - 2021-01-20 02:07:43 --> Final output sent to browser
INFO - 2021-01-20 02:08:07 --> Config Class Initialized
INFO - 2021-01-20 02:08:07 --> Hooks Class Initialized
INFO - 2021-01-20 02:08:07 --> Utf8 Class Initialized
INFO - 2021-01-20 02:08:07 --> URI Class Initialized
INFO - 2021-01-20 02:08:07 --> Router Class Initialized
INFO - 2021-01-20 02:08:07 --> Output Class Initialized
INFO - 2021-01-20 02:08:07 --> Security Class Initialized
INFO - 2021-01-20 02:08:07 --> Input Class Initialized
INFO - 2021-01-20 02:08:07 --> Language Class Initialized
INFO - 2021-01-20 02:08:07 --> Loader Class Initialized
INFO - 2021-01-20 02:08:07 --> Helper loaded: url_helper
INFO - 2021-01-20 02:08:07 --> Helper loaded: file_helper
INFO - 2021-01-20 02:08:07 --> Helper loaded: security_helper
INFO - 2021-01-20 02:08:07 --> Helper loaded: form_helper
INFO - 2021-01-20 02:08:07 --> Helper loaded: access_helper
INFO - 2021-01-20 02:08:07 --> Helper loaded: date_helper
INFO - 2021-01-20 02:08:07 --> Database Driver Class Initialized
INFO - 2021-01-20 02:08:07 --> User Agent Class Initialized
INFO - 2021-01-20 02:08:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:08:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:08:07 --> Pagination Class Initialized
INFO - 2021-01-20 02:08:07 --> Form Validation Class Initialized
INFO - 2021-01-20 02:08:07 --> Controller Class Initialized
INFO - 2021-01-20 02:08:07 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:08:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat.php
INFO - 2021-01-20 02:08:07 --> Final output sent to browser
INFO - 2021-01-20 02:09:36 --> Config Class Initialized
INFO - 2021-01-20 02:09:36 --> Hooks Class Initialized
INFO - 2021-01-20 02:09:36 --> Utf8 Class Initialized
INFO - 2021-01-20 02:09:36 --> URI Class Initialized
INFO - 2021-01-20 02:09:36 --> Router Class Initialized
INFO - 2021-01-20 02:09:36 --> Output Class Initialized
INFO - 2021-01-20 02:09:36 --> Security Class Initialized
INFO - 2021-01-20 02:09:36 --> Input Class Initialized
INFO - 2021-01-20 02:09:36 --> Language Class Initialized
INFO - 2021-01-20 02:09:36 --> Loader Class Initialized
INFO - 2021-01-20 02:09:36 --> Helper loaded: url_helper
INFO - 2021-01-20 02:09:36 --> Helper loaded: file_helper
INFO - 2021-01-20 02:09:36 --> Helper loaded: security_helper
INFO - 2021-01-20 02:09:36 --> Helper loaded: form_helper
INFO - 2021-01-20 02:09:36 --> Helper loaded: access_helper
INFO - 2021-01-20 02:09:36 --> Helper loaded: date_helper
INFO - 2021-01-20 02:09:36 --> Database Driver Class Initialized
INFO - 2021-01-20 02:09:36 --> User Agent Class Initialized
INFO - 2021-01-20 02:09:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:09:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:09:36 --> Pagination Class Initialized
INFO - 2021-01-20 02:09:36 --> Form Validation Class Initialized
INFO - 2021-01-20 02:09:36 --> Controller Class Initialized
INFO - 2021-01-20 02:09:36 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:09:36 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat.php
INFO - 2021-01-20 02:09:36 --> Final output sent to browser
INFO - 2021-01-20 02:09:38 --> Config Class Initialized
INFO - 2021-01-20 02:09:38 --> Hooks Class Initialized
INFO - 2021-01-20 02:09:38 --> Utf8 Class Initialized
INFO - 2021-01-20 02:09:38 --> URI Class Initialized
INFO - 2021-01-20 02:09:38 --> Router Class Initialized
INFO - 2021-01-20 02:09:38 --> Output Class Initialized
INFO - 2021-01-20 02:09:38 --> Security Class Initialized
INFO - 2021-01-20 02:09:38 --> Input Class Initialized
INFO - 2021-01-20 02:09:38 --> Language Class Initialized
INFO - 2021-01-20 02:09:38 --> Loader Class Initialized
INFO - 2021-01-20 02:09:38 --> Helper loaded: url_helper
INFO - 2021-01-20 02:09:38 --> Helper loaded: file_helper
INFO - 2021-01-20 02:09:38 --> Helper loaded: security_helper
INFO - 2021-01-20 02:09:38 --> Helper loaded: form_helper
INFO - 2021-01-20 02:09:38 --> Helper loaded: access_helper
INFO - 2021-01-20 02:09:38 --> Helper loaded: date_helper
INFO - 2021-01-20 02:09:38 --> Database Driver Class Initialized
INFO - 2021-01-20 02:09:38 --> User Agent Class Initialized
INFO - 2021-01-20 02:09:38 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:09:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:09:38 --> Pagination Class Initialized
INFO - 2021-01-20 02:09:38 --> Form Validation Class Initialized
INFO - 2021-01-20 02:09:38 --> Controller Class Initialized
INFO - 2021-01-20 02:09:38 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:09:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat_masuk.php
INFO - 2021-01-20 02:09:38 --> Final output sent to browser
INFO - 2021-01-20 02:09:40 --> Config Class Initialized
INFO - 2021-01-20 02:09:40 --> Hooks Class Initialized
INFO - 2021-01-20 02:09:40 --> Utf8 Class Initialized
INFO - 2021-01-20 02:09:40 --> URI Class Initialized
INFO - 2021-01-20 02:09:40 --> Router Class Initialized
INFO - 2021-01-20 02:09:40 --> Output Class Initialized
INFO - 2021-01-20 02:09:40 --> Security Class Initialized
INFO - 2021-01-20 02:09:40 --> Input Class Initialized
INFO - 2021-01-20 02:09:40 --> Language Class Initialized
INFO - 2021-01-20 02:09:40 --> Loader Class Initialized
INFO - 2021-01-20 02:09:40 --> Helper loaded: url_helper
INFO - 2021-01-20 02:09:40 --> Helper loaded: file_helper
INFO - 2021-01-20 02:09:40 --> Helper loaded: security_helper
INFO - 2021-01-20 02:09:40 --> Helper loaded: form_helper
INFO - 2021-01-20 02:09:40 --> Helper loaded: access_helper
INFO - 2021-01-20 02:09:40 --> Helper loaded: date_helper
INFO - 2021-01-20 02:09:40 --> Database Driver Class Initialized
INFO - 2021-01-20 02:09:40 --> User Agent Class Initialized
INFO - 2021-01-20 02:09:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:09:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:09:40 --> Pagination Class Initialized
INFO - 2021-01-20 02:09:40 --> Form Validation Class Initialized
INFO - 2021-01-20 02:09:40 --> Controller Class Initialized
INFO - 2021-01-20 02:09:40 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:09:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat_keluar.php
INFO - 2021-01-20 02:09:40 --> Final output sent to browser
INFO - 2021-01-20 02:09:51 --> Config Class Initialized
INFO - 2021-01-20 02:09:51 --> Hooks Class Initialized
INFO - 2021-01-20 02:09:51 --> Utf8 Class Initialized
INFO - 2021-01-20 02:09:51 --> URI Class Initialized
INFO - 2021-01-20 02:09:51 --> Router Class Initialized
INFO - 2021-01-20 02:09:51 --> Output Class Initialized
INFO - 2021-01-20 02:09:51 --> Security Class Initialized
INFO - 2021-01-20 02:09:51 --> Input Class Initialized
INFO - 2021-01-20 02:09:51 --> Language Class Initialized
INFO - 2021-01-20 02:09:51 --> Loader Class Initialized
INFO - 2021-01-20 02:09:51 --> Helper loaded: url_helper
INFO - 2021-01-20 02:09:51 --> Helper loaded: file_helper
INFO - 2021-01-20 02:09:51 --> Helper loaded: security_helper
INFO - 2021-01-20 02:09:51 --> Helper loaded: form_helper
INFO - 2021-01-20 02:09:51 --> Helper loaded: access_helper
INFO - 2021-01-20 02:09:51 --> Helper loaded: date_helper
INFO - 2021-01-20 02:09:51 --> Database Driver Class Initialized
INFO - 2021-01-20 02:09:51 --> User Agent Class Initialized
INFO - 2021-01-20 02:09:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:09:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:09:51 --> Pagination Class Initialized
INFO - 2021-01-20 02:09:51 --> Form Validation Class Initialized
INFO - 2021-01-20 02:09:51 --> Controller Class Initialized
INFO - 2021-01-20 02:09:51 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:09:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat_keluar.php
INFO - 2021-01-20 02:09:51 --> Final output sent to browser
INFO - 2021-01-20 02:09:54 --> Config Class Initialized
INFO - 2021-01-20 02:09:54 --> Hooks Class Initialized
INFO - 2021-01-20 02:09:54 --> Utf8 Class Initialized
INFO - 2021-01-20 02:09:54 --> URI Class Initialized
INFO - 2021-01-20 02:09:54 --> Router Class Initialized
INFO - 2021-01-20 02:09:54 --> Output Class Initialized
INFO - 2021-01-20 02:09:54 --> Security Class Initialized
INFO - 2021-01-20 02:09:54 --> Input Class Initialized
INFO - 2021-01-20 02:09:54 --> Language Class Initialized
INFO - 2021-01-20 02:09:54 --> Loader Class Initialized
INFO - 2021-01-20 02:09:54 --> Helper loaded: url_helper
INFO - 2021-01-20 02:09:54 --> Helper loaded: file_helper
INFO - 2021-01-20 02:09:54 --> Helper loaded: security_helper
INFO - 2021-01-20 02:09:54 --> Helper loaded: form_helper
INFO - 2021-01-20 02:09:54 --> Helper loaded: access_helper
INFO - 2021-01-20 02:09:54 --> Helper loaded: date_helper
INFO - 2021-01-20 02:09:54 --> Database Driver Class Initialized
INFO - 2021-01-20 02:09:54 --> User Agent Class Initialized
INFO - 2021-01-20 02:09:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:09:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:09:54 --> Pagination Class Initialized
INFO - 2021-01-20 02:09:54 --> Form Validation Class Initialized
INFO - 2021-01-20 02:09:54 --> Controller Class Initialized
INFO - 2021-01-20 02:09:54 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:09:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat_masuk.php
INFO - 2021-01-20 02:09:54 --> Final output sent to browser
INFO - 2021-01-20 02:11:36 --> Config Class Initialized
INFO - 2021-01-20 02:11:36 --> Hooks Class Initialized
INFO - 2021-01-20 02:11:36 --> Utf8 Class Initialized
INFO - 2021-01-20 02:11:36 --> URI Class Initialized
INFO - 2021-01-20 02:11:36 --> Router Class Initialized
INFO - 2021-01-20 02:11:36 --> Output Class Initialized
INFO - 2021-01-20 02:11:36 --> Security Class Initialized
INFO - 2021-01-20 02:11:36 --> Input Class Initialized
INFO - 2021-01-20 02:11:36 --> Language Class Initialized
INFO - 2021-01-20 02:11:36 --> Loader Class Initialized
INFO - 2021-01-20 02:11:36 --> Helper loaded: url_helper
INFO - 2021-01-20 02:11:36 --> Helper loaded: file_helper
INFO - 2021-01-20 02:11:36 --> Helper loaded: security_helper
INFO - 2021-01-20 02:11:36 --> Helper loaded: form_helper
INFO - 2021-01-20 02:11:36 --> Helper loaded: access_helper
INFO - 2021-01-20 02:11:36 --> Helper loaded: date_helper
INFO - 2021-01-20 02:11:36 --> Database Driver Class Initialized
INFO - 2021-01-20 02:11:36 --> User Agent Class Initialized
INFO - 2021-01-20 02:11:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:11:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:11:36 --> Pagination Class Initialized
INFO - 2021-01-20 02:11:36 --> Form Validation Class Initialized
INFO - 2021-01-20 02:11:36 --> Controller Class Initialized
INFO - 2021-01-20 02:11:36 --> Model "User_model" initialized
INFO - 2021-01-20 02:11:36 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:11:36 --> Model "Periksa_model" initialized
INFO - 2021-01-20 08:11:36 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 08:11:36 --> Final output sent to browser
INFO - 2021-01-20 02:13:08 --> Config Class Initialized
INFO - 2021-01-20 02:13:08 --> Hooks Class Initialized
INFO - 2021-01-20 02:13:08 --> Utf8 Class Initialized
INFO - 2021-01-20 02:13:08 --> URI Class Initialized
INFO - 2021-01-20 02:13:08 --> Router Class Initialized
INFO - 2021-01-20 02:13:08 --> Output Class Initialized
INFO - 2021-01-20 02:13:08 --> Security Class Initialized
INFO - 2021-01-20 02:13:08 --> Input Class Initialized
INFO - 2021-01-20 02:13:08 --> Language Class Initialized
INFO - 2021-01-20 02:13:08 --> Loader Class Initialized
INFO - 2021-01-20 02:13:08 --> Helper loaded: url_helper
INFO - 2021-01-20 02:13:08 --> Helper loaded: file_helper
INFO - 2021-01-20 02:13:08 --> Helper loaded: security_helper
INFO - 2021-01-20 02:13:08 --> Helper loaded: form_helper
INFO - 2021-01-20 02:13:08 --> Helper loaded: access_helper
INFO - 2021-01-20 02:13:08 --> Helper loaded: date_helper
INFO - 2021-01-20 02:13:08 --> Database Driver Class Initialized
INFO - 2021-01-20 02:13:08 --> User Agent Class Initialized
INFO - 2021-01-20 02:13:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:13:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:13:08 --> Pagination Class Initialized
INFO - 2021-01-20 02:13:08 --> Form Validation Class Initialized
INFO - 2021-01-20 02:13:08 --> Controller Class Initialized
INFO - 2021-01-20 02:13:08 --> Model "User_model" initialized
INFO - 2021-01-20 02:13:08 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:13:08 --> Model "Periksa_model" initialized
INFO - 2021-01-20 08:13:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 08:13:08 --> Final output sent to browser
INFO - 2021-01-20 02:15:37 --> Config Class Initialized
INFO - 2021-01-20 02:15:37 --> Hooks Class Initialized
INFO - 2021-01-20 02:15:37 --> Utf8 Class Initialized
INFO - 2021-01-20 02:15:37 --> URI Class Initialized
INFO - 2021-01-20 02:15:37 --> Router Class Initialized
INFO - 2021-01-20 02:15:37 --> Output Class Initialized
INFO - 2021-01-20 02:15:37 --> Security Class Initialized
INFO - 2021-01-20 02:15:37 --> Input Class Initialized
INFO - 2021-01-20 02:15:37 --> Language Class Initialized
INFO - 2021-01-20 02:15:37 --> Loader Class Initialized
INFO - 2021-01-20 02:15:37 --> Helper loaded: url_helper
INFO - 2021-01-20 02:15:37 --> Helper loaded: file_helper
INFO - 2021-01-20 02:15:37 --> Helper loaded: security_helper
INFO - 2021-01-20 02:15:37 --> Helper loaded: form_helper
INFO - 2021-01-20 02:15:37 --> Helper loaded: access_helper
INFO - 2021-01-20 02:15:37 --> Helper loaded: date_helper
INFO - 2021-01-20 02:15:37 --> Database Driver Class Initialized
INFO - 2021-01-20 02:15:37 --> User Agent Class Initialized
INFO - 2021-01-20 02:15:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:15:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:15:37 --> Pagination Class Initialized
INFO - 2021-01-20 02:15:37 --> Form Validation Class Initialized
INFO - 2021-01-20 02:15:37 --> Controller Class Initialized
INFO - 2021-01-20 02:15:37 --> Model "User_model" initialized
INFO - 2021-01-20 02:15:37 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:15:37 --> Model "Periksa_model" initialized
INFO - 2021-01-20 08:15:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 08:15:37 --> Final output sent to browser
INFO - 2021-01-20 02:21:37 --> Config Class Initialized
INFO - 2021-01-20 02:21:37 --> Hooks Class Initialized
INFO - 2021-01-20 02:21:37 --> Utf8 Class Initialized
INFO - 2021-01-20 02:21:37 --> URI Class Initialized
INFO - 2021-01-20 02:21:37 --> Router Class Initialized
INFO - 2021-01-20 02:21:37 --> Output Class Initialized
INFO - 2021-01-20 02:21:37 --> Security Class Initialized
INFO - 2021-01-20 02:21:37 --> Input Class Initialized
INFO - 2021-01-20 02:21:37 --> Language Class Initialized
INFO - 2021-01-20 02:21:37 --> Loader Class Initialized
INFO - 2021-01-20 02:21:37 --> Helper loaded: url_helper
INFO - 2021-01-20 02:21:37 --> Helper loaded: file_helper
INFO - 2021-01-20 02:21:37 --> Helper loaded: security_helper
INFO - 2021-01-20 02:21:37 --> Helper loaded: form_helper
INFO - 2021-01-20 02:21:37 --> Helper loaded: access_helper
INFO - 2021-01-20 02:21:37 --> Helper loaded: date_helper
INFO - 2021-01-20 02:21:37 --> Database Driver Class Initialized
INFO - 2021-01-20 02:21:37 --> User Agent Class Initialized
INFO - 2021-01-20 02:21:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:21:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:21:37 --> Pagination Class Initialized
INFO - 2021-01-20 02:21:37 --> Form Validation Class Initialized
INFO - 2021-01-20 02:21:37 --> Controller Class Initialized
INFO - 2021-01-20 02:21:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 02:21:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 02:21:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 02:21:37 --> Final output sent to browser
INFO - 2021-01-20 02:21:42 --> Config Class Initialized
INFO - 2021-01-20 02:21:42 --> Hooks Class Initialized
INFO - 2021-01-20 02:21:42 --> Utf8 Class Initialized
INFO - 2021-01-20 02:21:42 --> URI Class Initialized
INFO - 2021-01-20 02:21:42 --> Router Class Initialized
INFO - 2021-01-20 02:21:42 --> Output Class Initialized
INFO - 2021-01-20 02:21:42 --> Security Class Initialized
INFO - 2021-01-20 02:21:42 --> Input Class Initialized
INFO - 2021-01-20 02:21:42 --> Language Class Initialized
INFO - 2021-01-20 02:21:42 --> Loader Class Initialized
INFO - 2021-01-20 02:21:42 --> Helper loaded: url_helper
INFO - 2021-01-20 02:21:42 --> Helper loaded: file_helper
INFO - 2021-01-20 02:21:42 --> Helper loaded: security_helper
INFO - 2021-01-20 02:21:42 --> Helper loaded: form_helper
INFO - 2021-01-20 02:21:42 --> Helper loaded: access_helper
INFO - 2021-01-20 02:21:42 --> Helper loaded: date_helper
INFO - 2021-01-20 02:21:42 --> Database Driver Class Initialized
INFO - 2021-01-20 02:21:42 --> User Agent Class Initialized
INFO - 2021-01-20 02:21:42 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:21:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:21:42 --> Pagination Class Initialized
INFO - 2021-01-20 02:21:42 --> Form Validation Class Initialized
INFO - 2021-01-20 02:21:42 --> Controller Class Initialized
INFO - 2021-01-20 02:21:42 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2021-01-20 02:21:43 --> Config Class Initialized
INFO - 2021-01-20 02:21:43 --> Hooks Class Initialized
INFO - 2021-01-20 02:21:43 --> Utf8 Class Initialized
INFO - 2021-01-20 02:21:43 --> URI Class Initialized
INFO - 2021-01-20 02:21:43 --> Router Class Initialized
INFO - 2021-01-20 02:21:43 --> Output Class Initialized
INFO - 2021-01-20 02:21:43 --> Security Class Initialized
INFO - 2021-01-20 02:21:43 --> Input Class Initialized
INFO - 2021-01-20 02:21:43 --> Language Class Initialized
INFO - 2021-01-20 02:21:43 --> Loader Class Initialized
INFO - 2021-01-20 02:21:43 --> Helper loaded: url_helper
INFO - 2021-01-20 02:21:43 --> Helper loaded: file_helper
INFO - 2021-01-20 02:21:43 --> Helper loaded: security_helper
INFO - 2021-01-20 02:21:43 --> Helper loaded: form_helper
INFO - 2021-01-20 02:21:43 --> Helper loaded: access_helper
INFO - 2021-01-20 02:21:43 --> Helper loaded: date_helper
INFO - 2021-01-20 02:21:43 --> Database Driver Class Initialized
INFO - 2021-01-20 02:21:43 --> User Agent Class Initialized
INFO - 2021-01-20 02:21:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:21:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:21:43 --> Pagination Class Initialized
INFO - 2021-01-20 02:21:43 --> Form Validation Class Initialized
INFO - 2021-01-20 02:21:43 --> Controller Class Initialized
INFO - 2021-01-20 02:21:43 --> Model "User_model" initialized
INFO - 2021-01-20 02:21:43 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:21:43 --> Model "Periksa_model" initialized
INFO - 2021-01-20 08:21:43 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 08:21:43 --> Final output sent to browser
INFO - 2021-01-20 02:21:47 --> Config Class Initialized
INFO - 2021-01-20 02:21:47 --> Hooks Class Initialized
INFO - 2021-01-20 02:21:47 --> Utf8 Class Initialized
INFO - 2021-01-20 02:21:47 --> URI Class Initialized
INFO - 2021-01-20 02:21:47 --> Router Class Initialized
INFO - 2021-01-20 02:21:47 --> Output Class Initialized
INFO - 2021-01-20 02:21:47 --> Security Class Initialized
INFO - 2021-01-20 02:21:47 --> Input Class Initialized
INFO - 2021-01-20 02:21:47 --> Language Class Initialized
INFO - 2021-01-20 02:21:47 --> Loader Class Initialized
INFO - 2021-01-20 02:21:47 --> Helper loaded: url_helper
INFO - 2021-01-20 02:21:47 --> Helper loaded: file_helper
INFO - 2021-01-20 02:21:47 --> Helper loaded: security_helper
INFO - 2021-01-20 02:21:47 --> Helper loaded: form_helper
INFO - 2021-01-20 02:21:47 --> Helper loaded: access_helper
INFO - 2021-01-20 02:21:47 --> Helper loaded: date_helper
INFO - 2021-01-20 02:21:47 --> Database Driver Class Initialized
INFO - 2021-01-20 02:21:47 --> User Agent Class Initialized
INFO - 2021-01-20 02:21:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:21:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:21:47 --> Pagination Class Initialized
INFO - 2021-01-20 02:21:47 --> Form Validation Class Initialized
INFO - 2021-01-20 02:21:47 --> Controller Class Initialized
INFO - 2021-01-20 02:21:47 --> Model "Obat_model" initialized
INFO - 2021-01-20 02:21:47 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\laporan/laporan_obat.php
INFO - 2021-01-20 02:21:47 --> Final output sent to browser
INFO - 2021-01-20 02:21:50 --> Config Class Initialized
INFO - 2021-01-20 02:21:50 --> Hooks Class Initialized
INFO - 2021-01-20 02:21:50 --> Utf8 Class Initialized
INFO - 2021-01-20 02:21:50 --> URI Class Initialized
INFO - 2021-01-20 02:21:50 --> Router Class Initialized
INFO - 2021-01-20 02:21:50 --> Output Class Initialized
INFO - 2021-01-20 02:21:50 --> Security Class Initialized
INFO - 2021-01-20 02:21:50 --> Input Class Initialized
INFO - 2021-01-20 02:21:50 --> Language Class Initialized
INFO - 2021-01-20 02:21:50 --> Loader Class Initialized
INFO - 2021-01-20 02:21:50 --> Helper loaded: url_helper
INFO - 2021-01-20 02:21:50 --> Helper loaded: file_helper
INFO - 2021-01-20 02:21:50 --> Helper loaded: security_helper
INFO - 2021-01-20 02:21:50 --> Helper loaded: form_helper
INFO - 2021-01-20 02:21:50 --> Helper loaded: access_helper
INFO - 2021-01-20 02:21:50 --> Helper loaded: date_helper
INFO - 2021-01-20 02:21:50 --> Database Driver Class Initialized
INFO - 2021-01-20 02:21:50 --> User Agent Class Initialized
INFO - 2021-01-20 02:21:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:21:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:21:50 --> Pagination Class Initialized
INFO - 2021-01-20 02:21:50 --> Form Validation Class Initialized
INFO - 2021-01-20 02:21:50 --> Controller Class Initialized
INFO - 2021-01-20 02:21:50 --> Model "User_model" initialized
INFO - 2021-01-20 02:21:50 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:21:50 --> Model "Periksa_model" initialized
INFO - 2021-01-20 08:21:50 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 08:21:50 --> Final output sent to browser
INFO - 2021-01-20 02:22:53 --> Config Class Initialized
INFO - 2021-01-20 02:22:53 --> Hooks Class Initialized
INFO - 2021-01-20 02:22:53 --> Utf8 Class Initialized
INFO - 2021-01-20 02:22:53 --> URI Class Initialized
INFO - 2021-01-20 02:22:53 --> Router Class Initialized
INFO - 2021-01-20 02:22:53 --> Output Class Initialized
INFO - 2021-01-20 02:22:53 --> Security Class Initialized
INFO - 2021-01-20 02:22:53 --> Input Class Initialized
INFO - 2021-01-20 02:22:53 --> Language Class Initialized
INFO - 2021-01-20 02:22:53 --> Loader Class Initialized
INFO - 2021-01-20 02:22:53 --> Helper loaded: url_helper
INFO - 2021-01-20 02:22:53 --> Helper loaded: file_helper
INFO - 2021-01-20 02:22:53 --> Helper loaded: security_helper
INFO - 2021-01-20 02:22:53 --> Helper loaded: form_helper
INFO - 2021-01-20 02:22:53 --> Helper loaded: access_helper
INFO - 2021-01-20 02:22:53 --> Helper loaded: date_helper
INFO - 2021-01-20 02:22:53 --> Database Driver Class Initialized
INFO - 2021-01-20 02:22:53 --> User Agent Class Initialized
INFO - 2021-01-20 02:22:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:22:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:22:53 --> Pagination Class Initialized
INFO - 2021-01-20 02:22:53 --> Form Validation Class Initialized
INFO - 2021-01-20 02:22:53 --> Controller Class Initialized
INFO - 2021-01-20 02:22:53 --> Model "User_model" initialized
INFO - 2021-01-20 02:22:53 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\user/data_user.php
INFO - 2021-01-20 02:22:53 --> Final output sent to browser
INFO - 2021-01-20 02:22:56 --> Config Class Initialized
INFO - 2021-01-20 02:22:56 --> Hooks Class Initialized
INFO - 2021-01-20 02:22:56 --> Utf8 Class Initialized
INFO - 2021-01-20 02:22:56 --> URI Class Initialized
INFO - 2021-01-20 02:22:56 --> Router Class Initialized
INFO - 2021-01-20 02:22:56 --> Output Class Initialized
INFO - 2021-01-20 02:22:56 --> Security Class Initialized
INFO - 2021-01-20 02:22:56 --> Input Class Initialized
INFO - 2021-01-20 02:22:56 --> Language Class Initialized
INFO - 2021-01-20 02:22:56 --> Loader Class Initialized
INFO - 2021-01-20 02:22:56 --> Helper loaded: url_helper
INFO - 2021-01-20 02:22:56 --> Helper loaded: file_helper
INFO - 2021-01-20 02:22:56 --> Helper loaded: security_helper
INFO - 2021-01-20 02:22:56 --> Helper loaded: form_helper
INFO - 2021-01-20 02:22:56 --> Helper loaded: access_helper
INFO - 2021-01-20 02:22:56 --> Helper loaded: date_helper
INFO - 2021-01-20 02:22:56 --> Database Driver Class Initialized
INFO - 2021-01-20 02:22:56 --> User Agent Class Initialized
INFO - 2021-01-20 02:22:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:22:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:22:56 --> Pagination Class Initialized
INFO - 2021-01-20 02:22:56 --> Form Validation Class Initialized
INFO - 2021-01-20 02:22:56 --> Controller Class Initialized
INFO - 2021-01-20 02:22:56 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:22:56 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:22:56 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 02:22:56 --> Final output sent to browser
INFO - 2021-01-20 02:23:01 --> Config Class Initialized
INFO - 2021-01-20 02:23:01 --> Hooks Class Initialized
INFO - 2021-01-20 02:23:01 --> Utf8 Class Initialized
INFO - 2021-01-20 02:23:01 --> URI Class Initialized
INFO - 2021-01-20 02:23:01 --> Router Class Initialized
INFO - 2021-01-20 02:23:01 --> Output Class Initialized
INFO - 2021-01-20 02:23:01 --> Security Class Initialized
INFO - 2021-01-20 02:23:01 --> Input Class Initialized
INFO - 2021-01-20 02:23:01 --> Language Class Initialized
INFO - 2021-01-20 02:23:01 --> Loader Class Initialized
INFO - 2021-01-20 02:23:01 --> Helper loaded: url_helper
INFO - 2021-01-20 02:23:01 --> Helper loaded: file_helper
INFO - 2021-01-20 02:23:01 --> Helper loaded: security_helper
INFO - 2021-01-20 02:23:01 --> Helper loaded: form_helper
INFO - 2021-01-20 02:23:01 --> Helper loaded: access_helper
INFO - 2021-01-20 02:23:01 --> Helper loaded: date_helper
INFO - 2021-01-20 02:23:01 --> Database Driver Class Initialized
INFO - 2021-01-20 02:23:01 --> User Agent Class Initialized
INFO - 2021-01-20 02:23:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:23:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:23:01 --> Pagination Class Initialized
INFO - 2021-01-20 02:23:01 --> Form Validation Class Initialized
INFO - 2021-01-20 02:23:01 --> Controller Class Initialized
INFO - 2021-01-20 02:23:01 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:23:01 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:23:01 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 02:23:01 --> Final output sent to browser
INFO - 2021-01-20 02:25:04 --> Config Class Initialized
INFO - 2021-01-20 02:25:04 --> Hooks Class Initialized
INFO - 2021-01-20 02:25:04 --> Utf8 Class Initialized
INFO - 2021-01-20 02:25:04 --> URI Class Initialized
INFO - 2021-01-20 02:25:04 --> Router Class Initialized
INFO - 2021-01-20 02:25:04 --> Output Class Initialized
INFO - 2021-01-20 02:25:04 --> Security Class Initialized
INFO - 2021-01-20 02:25:04 --> Input Class Initialized
INFO - 2021-01-20 02:25:04 --> Language Class Initialized
INFO - 2021-01-20 02:25:04 --> Loader Class Initialized
INFO - 2021-01-20 02:25:04 --> Helper loaded: url_helper
INFO - 2021-01-20 02:25:04 --> Helper loaded: file_helper
INFO - 2021-01-20 02:25:04 --> Helper loaded: security_helper
INFO - 2021-01-20 02:25:04 --> Helper loaded: form_helper
INFO - 2021-01-20 02:25:04 --> Helper loaded: access_helper
INFO - 2021-01-20 02:25:04 --> Helper loaded: date_helper
INFO - 2021-01-20 02:25:04 --> Database Driver Class Initialized
INFO - 2021-01-20 02:25:04 --> User Agent Class Initialized
INFO - 2021-01-20 02:25:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:25:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:25:04 --> Pagination Class Initialized
INFO - 2021-01-20 02:25:04 --> Form Validation Class Initialized
INFO - 2021-01-20 02:25:04 --> Controller Class Initialized
INFO - 2021-01-20 02:25:04 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:25:04 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:25:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 02:25:04 --> Final output sent to browser
INFO - 2021-01-20 02:25:45 --> Config Class Initialized
INFO - 2021-01-20 02:25:45 --> Hooks Class Initialized
INFO - 2021-01-20 02:25:45 --> Utf8 Class Initialized
INFO - 2021-01-20 02:25:45 --> URI Class Initialized
INFO - 2021-01-20 02:25:45 --> Router Class Initialized
INFO - 2021-01-20 02:25:45 --> Output Class Initialized
INFO - 2021-01-20 02:25:45 --> Security Class Initialized
INFO - 2021-01-20 02:25:45 --> Input Class Initialized
INFO - 2021-01-20 02:25:45 --> Language Class Initialized
INFO - 2021-01-20 02:25:45 --> Loader Class Initialized
INFO - 2021-01-20 02:25:45 --> Helper loaded: url_helper
INFO - 2021-01-20 02:25:45 --> Helper loaded: file_helper
INFO - 2021-01-20 02:25:45 --> Helper loaded: security_helper
INFO - 2021-01-20 02:25:45 --> Helper loaded: form_helper
INFO - 2021-01-20 02:25:45 --> Helper loaded: access_helper
INFO - 2021-01-20 02:25:45 --> Helper loaded: date_helper
INFO - 2021-01-20 02:25:45 --> Database Driver Class Initialized
INFO - 2021-01-20 02:25:45 --> User Agent Class Initialized
INFO - 2021-01-20 02:25:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:25:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:25:45 --> Pagination Class Initialized
INFO - 2021-01-20 02:25:45 --> Form Validation Class Initialized
INFO - 2021-01-20 02:25:45 --> Controller Class Initialized
INFO - 2021-01-20 02:25:45 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:25:45 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:25:45 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 02:25:45 --> Final output sent to browser
INFO - 2021-01-20 02:27:07 --> Config Class Initialized
INFO - 2021-01-20 02:27:07 --> Hooks Class Initialized
INFO - 2021-01-20 02:27:07 --> Utf8 Class Initialized
INFO - 2021-01-20 02:27:07 --> URI Class Initialized
INFO - 2021-01-20 02:27:07 --> Router Class Initialized
INFO - 2021-01-20 02:27:07 --> Output Class Initialized
INFO - 2021-01-20 02:27:07 --> Security Class Initialized
INFO - 2021-01-20 02:27:07 --> Input Class Initialized
INFO - 2021-01-20 02:27:07 --> Language Class Initialized
INFO - 2021-01-20 02:27:07 --> Loader Class Initialized
INFO - 2021-01-20 02:27:07 --> Helper loaded: url_helper
INFO - 2021-01-20 02:27:07 --> Helper loaded: file_helper
INFO - 2021-01-20 02:27:07 --> Helper loaded: security_helper
INFO - 2021-01-20 02:27:07 --> Helper loaded: form_helper
INFO - 2021-01-20 02:27:07 --> Helper loaded: access_helper
INFO - 2021-01-20 02:27:07 --> Helper loaded: date_helper
INFO - 2021-01-20 02:27:08 --> Database Driver Class Initialized
INFO - 2021-01-20 02:27:08 --> User Agent Class Initialized
INFO - 2021-01-20 02:27:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:27:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:27:08 --> Pagination Class Initialized
INFO - 2021-01-20 02:27:08 --> Form Validation Class Initialized
INFO - 2021-01-20 02:27:08 --> Controller Class Initialized
INFO - 2021-01-20 02:27:08 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:27:08 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:27:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 02:27:08 --> Final output sent to browser
INFO - 2021-01-20 02:27:25 --> Config Class Initialized
INFO - 2021-01-20 02:27:25 --> Hooks Class Initialized
INFO - 2021-01-20 02:27:25 --> Utf8 Class Initialized
INFO - 2021-01-20 02:27:25 --> URI Class Initialized
INFO - 2021-01-20 02:27:25 --> Router Class Initialized
INFO - 2021-01-20 02:27:25 --> Output Class Initialized
INFO - 2021-01-20 02:27:25 --> Security Class Initialized
INFO - 2021-01-20 02:27:25 --> Input Class Initialized
INFO - 2021-01-20 02:27:25 --> Language Class Initialized
INFO - 2021-01-20 02:27:25 --> Loader Class Initialized
INFO - 2021-01-20 02:27:25 --> Helper loaded: url_helper
INFO - 2021-01-20 02:27:25 --> Helper loaded: file_helper
INFO - 2021-01-20 02:27:25 --> Helper loaded: security_helper
INFO - 2021-01-20 02:27:25 --> Helper loaded: form_helper
INFO - 2021-01-20 02:27:25 --> Helper loaded: access_helper
INFO - 2021-01-20 02:27:25 --> Helper loaded: date_helper
INFO - 2021-01-20 02:27:25 --> Database Driver Class Initialized
INFO - 2021-01-20 02:27:25 --> User Agent Class Initialized
INFO - 2021-01-20 02:27:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:27:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:27:25 --> Pagination Class Initialized
INFO - 2021-01-20 02:27:25 --> Form Validation Class Initialized
INFO - 2021-01-20 02:27:25 --> Controller Class Initialized
INFO - 2021-01-20 02:27:25 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:27:25 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:27:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 02:27:25 --> Final output sent to browser
INFO - 2021-01-20 02:28:04 --> Config Class Initialized
INFO - 2021-01-20 02:28:04 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:04 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:04 --> URI Class Initialized
INFO - 2021-01-20 02:28:04 --> Router Class Initialized
INFO - 2021-01-20 02:28:04 --> Output Class Initialized
INFO - 2021-01-20 02:28:04 --> Security Class Initialized
INFO - 2021-01-20 02:28:04 --> Input Class Initialized
INFO - 2021-01-20 02:28:04 --> Language Class Initialized
INFO - 2021-01-20 02:28:04 --> Loader Class Initialized
INFO - 2021-01-20 02:28:04 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:04 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:04 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:04 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:04 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:04 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:04 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:04 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:04 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:04 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:04 --> Controller Class Initialized
INFO - 2021-01-20 02:28:04 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:28:04 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:28:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 02:28:04 --> Final output sent to browser
INFO - 2021-01-20 02:28:06 --> Config Class Initialized
INFO - 2021-01-20 02:28:06 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:06 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:06 --> URI Class Initialized
INFO - 2021-01-20 02:28:06 --> Router Class Initialized
INFO - 2021-01-20 02:28:06 --> Output Class Initialized
INFO - 2021-01-20 02:28:06 --> Security Class Initialized
INFO - 2021-01-20 02:28:06 --> Input Class Initialized
INFO - 2021-01-20 02:28:06 --> Language Class Initialized
INFO - 2021-01-20 02:28:06 --> Loader Class Initialized
INFO - 2021-01-20 02:28:06 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:06 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:06 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:06 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:06 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:06 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:06 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:06 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:06 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:06 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:06 --> Controller Class Initialized
INFO - 2021-01-20 02:28:06 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:28:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 02:28:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 02:28:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 02:28:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/tambah_pasien.php
INFO - 2021-01-20 02:28:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 02:28:06 --> Final output sent to browser
INFO - 2021-01-20 02:28:11 --> Config Class Initialized
INFO - 2021-01-20 02:28:11 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:11 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:11 --> URI Class Initialized
INFO - 2021-01-20 02:28:11 --> Router Class Initialized
INFO - 2021-01-20 02:28:11 --> Output Class Initialized
INFO - 2021-01-20 02:28:11 --> Security Class Initialized
INFO - 2021-01-20 02:28:11 --> Input Class Initialized
INFO - 2021-01-20 02:28:11 --> Language Class Initialized
INFO - 2021-01-20 02:28:11 --> Loader Class Initialized
INFO - 2021-01-20 02:28:11 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:11 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:11 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:11 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:11 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:11 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:11 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:11 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:11 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:11 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:11 --> Controller Class Initialized
INFO - 2021-01-20 02:28:11 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:11 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 02:28:11 --> Final output sent to browser
INFO - 2021-01-20 02:28:14 --> Config Class Initialized
INFO - 2021-01-20 02:28:14 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:14 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:14 --> URI Class Initialized
INFO - 2021-01-20 02:28:14 --> Router Class Initialized
INFO - 2021-01-20 02:28:14 --> Output Class Initialized
INFO - 2021-01-20 02:28:14 --> Security Class Initialized
INFO - 2021-01-20 02:28:14 --> Input Class Initialized
INFO - 2021-01-20 02:28:14 --> Language Class Initialized
INFO - 2021-01-20 02:28:14 --> Loader Class Initialized
INFO - 2021-01-20 02:28:14 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:14 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:14 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:14 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:14 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:14 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:14 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:14 --> Controller Class Initialized
INFO - 2021-01-20 02:28:14 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:14 --> Config Class Initialized
INFO - 2021-01-20 02:28:14 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:14 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:14 --> URI Class Initialized
INFO - 2021-01-20 02:28:14 --> Router Class Initialized
INFO - 2021-01-20 02:28:14 --> Output Class Initialized
INFO - 2021-01-20 02:28:14 --> Security Class Initialized
INFO - 2021-01-20 02:28:14 --> Input Class Initialized
INFO - 2021-01-20 02:28:14 --> Language Class Initialized
INFO - 2021-01-20 02:28:14 --> Loader Class Initialized
INFO - 2021-01-20 02:28:14 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:14 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:14 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:14 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:14 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:14 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:14 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:14 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:14 --> Controller Class Initialized
INFO - 2021-01-20 02:28:14 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:14 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 02:28:14 --> Final output sent to browser
INFO - 2021-01-20 02:28:16 --> Config Class Initialized
INFO - 2021-01-20 02:28:16 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:16 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:16 --> URI Class Initialized
INFO - 2021-01-20 02:28:16 --> Router Class Initialized
INFO - 2021-01-20 02:28:16 --> Output Class Initialized
INFO - 2021-01-20 02:28:16 --> Security Class Initialized
INFO - 2021-01-20 02:28:16 --> Input Class Initialized
INFO - 2021-01-20 02:28:16 --> Language Class Initialized
INFO - 2021-01-20 02:28:16 --> Loader Class Initialized
INFO - 2021-01-20 02:28:16 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:16 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:16 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:16 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:16 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:16 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:16 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:16 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:16 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:16 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:16 --> Controller Class Initialized
INFO - 2021-01-20 02:28:16 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:16 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:28:16 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 02:28:16 --> Final output sent to browser
INFO - 2021-01-20 02:28:19 --> Config Class Initialized
INFO - 2021-01-20 02:28:19 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:19 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:19 --> URI Class Initialized
INFO - 2021-01-20 02:28:19 --> Router Class Initialized
INFO - 2021-01-20 02:28:19 --> Output Class Initialized
INFO - 2021-01-20 02:28:19 --> Security Class Initialized
INFO - 2021-01-20 02:28:19 --> Input Class Initialized
INFO - 2021-01-20 02:28:19 --> Language Class Initialized
INFO - 2021-01-20 02:28:19 --> Loader Class Initialized
INFO - 2021-01-20 02:28:19 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:19 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:19 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:19 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:19 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:19 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:19 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:19 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:19 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:19 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:19 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:19 --> Controller Class Initialized
INFO - 2021-01-20 02:28:19 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:19 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:28:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 02:28:19 --> Final output sent to browser
INFO - 2021-01-20 02:28:32 --> Config Class Initialized
INFO - 2021-01-20 02:28:32 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:32 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:32 --> URI Class Initialized
INFO - 2021-01-20 02:28:32 --> Router Class Initialized
INFO - 2021-01-20 02:28:32 --> Output Class Initialized
INFO - 2021-01-20 02:28:32 --> Security Class Initialized
INFO - 2021-01-20 02:28:32 --> Input Class Initialized
INFO - 2021-01-20 02:28:32 --> Language Class Initialized
INFO - 2021-01-20 02:28:32 --> Loader Class Initialized
INFO - 2021-01-20 02:28:32 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:32 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:32 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:32 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:32 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:32 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:32 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:32 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:32 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:32 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:32 --> Controller Class Initialized
INFO - 2021-01-20 02:28:32 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 02:28:32 --> Final output sent to browser
INFO - 2021-01-20 02:28:37 --> Config Class Initialized
INFO - 2021-01-20 02:28:37 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:37 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:37 --> URI Class Initialized
INFO - 2021-01-20 02:28:37 --> Router Class Initialized
INFO - 2021-01-20 02:28:37 --> Output Class Initialized
INFO - 2021-01-20 02:28:37 --> Security Class Initialized
INFO - 2021-01-20 02:28:37 --> Input Class Initialized
INFO - 2021-01-20 02:28:37 --> Language Class Initialized
INFO - 2021-01-20 02:28:37 --> Loader Class Initialized
INFO - 2021-01-20 02:28:37 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:37 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:37 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:37 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:37 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:37 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:37 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:37 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:37 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:37 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:37 --> Controller Class Initialized
INFO - 2021-01-20 02:28:37 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:37 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:28:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 02:28:37 --> Final output sent to browser
INFO - 2021-01-20 02:28:41 --> Config Class Initialized
INFO - 2021-01-20 02:28:41 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:41 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:41 --> URI Class Initialized
INFO - 2021-01-20 02:28:41 --> Router Class Initialized
INFO - 2021-01-20 02:28:41 --> Output Class Initialized
INFO - 2021-01-20 02:28:41 --> Security Class Initialized
INFO - 2021-01-20 02:28:41 --> Input Class Initialized
INFO - 2021-01-20 02:28:41 --> Language Class Initialized
INFO - 2021-01-20 02:28:41 --> Loader Class Initialized
INFO - 2021-01-20 02:28:41 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:41 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:41 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:41 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:41 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:41 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:41 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:41 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:41 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:41 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:41 --> Controller Class Initialized
INFO - 2021-01-20 02:28:41 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:41 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:28:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 02:28:41 --> Final output sent to browser
INFO - 2021-01-20 02:28:43 --> Config Class Initialized
INFO - 2021-01-20 02:28:43 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:43 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:43 --> URI Class Initialized
INFO - 2021-01-20 02:28:43 --> Router Class Initialized
INFO - 2021-01-20 02:28:43 --> Output Class Initialized
INFO - 2021-01-20 02:28:43 --> Security Class Initialized
INFO - 2021-01-20 02:28:43 --> Input Class Initialized
INFO - 2021-01-20 02:28:43 --> Language Class Initialized
INFO - 2021-01-20 02:28:43 --> Loader Class Initialized
INFO - 2021-01-20 02:28:43 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:43 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:43 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:43 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:43 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:43 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:43 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:43 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:43 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:43 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:43 --> Controller Class Initialized
INFO - 2021-01-20 02:28:43 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:44 --> Config Class Initialized
INFO - 2021-01-20 02:28:44 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:44 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:44 --> URI Class Initialized
INFO - 2021-01-20 02:28:44 --> Router Class Initialized
INFO - 2021-01-20 02:28:44 --> Output Class Initialized
INFO - 2021-01-20 02:28:44 --> Security Class Initialized
INFO - 2021-01-20 02:28:44 --> Input Class Initialized
INFO - 2021-01-20 02:28:44 --> Language Class Initialized
INFO - 2021-01-20 02:28:44 --> Loader Class Initialized
INFO - 2021-01-20 02:28:44 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:44 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:44 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:44 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:44 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:44 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:44 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:44 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:44 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:44 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:44 --> Controller Class Initialized
INFO - 2021-01-20 02:28:44 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 02:28:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 02:28:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 02:28:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/opsi.php
INFO - 2021-01-20 02:28:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 02:28:44 --> Final output sent to browser
INFO - 2021-01-20 02:28:46 --> Config Class Initialized
INFO - 2021-01-20 02:28:46 --> Hooks Class Initialized
INFO - 2021-01-20 02:28:46 --> Utf8 Class Initialized
INFO - 2021-01-20 02:28:46 --> URI Class Initialized
INFO - 2021-01-20 02:28:46 --> Router Class Initialized
INFO - 2021-01-20 02:28:46 --> Output Class Initialized
INFO - 2021-01-20 02:28:46 --> Security Class Initialized
INFO - 2021-01-20 02:28:46 --> Input Class Initialized
INFO - 2021-01-20 02:28:46 --> Language Class Initialized
INFO - 2021-01-20 02:28:46 --> Loader Class Initialized
INFO - 2021-01-20 02:28:46 --> Helper loaded: url_helper
INFO - 2021-01-20 02:28:46 --> Helper loaded: file_helper
INFO - 2021-01-20 02:28:46 --> Helper loaded: security_helper
INFO - 2021-01-20 02:28:46 --> Helper loaded: form_helper
INFO - 2021-01-20 02:28:46 --> Helper loaded: access_helper
INFO - 2021-01-20 02:28:46 --> Helper loaded: date_helper
INFO - 2021-01-20 02:28:46 --> Database Driver Class Initialized
INFO - 2021-01-20 02:28:46 --> User Agent Class Initialized
INFO - 2021-01-20 02:28:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:28:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:28:46 --> Pagination Class Initialized
INFO - 2021-01-20 02:28:46 --> Form Validation Class Initialized
INFO - 2021-01-20 02:28:46 --> Controller Class Initialized
INFO - 2021-01-20 02:28:46 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:28:46 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:28:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/diagnosa.php
INFO - 2021-01-20 02:28:46 --> Final output sent to browser
INFO - 2021-01-20 02:29:41 --> Config Class Initialized
INFO - 2021-01-20 02:29:41 --> Hooks Class Initialized
INFO - 2021-01-20 02:29:41 --> Utf8 Class Initialized
INFO - 2021-01-20 02:29:41 --> URI Class Initialized
INFO - 2021-01-20 02:29:41 --> Router Class Initialized
INFO - 2021-01-20 02:29:41 --> Output Class Initialized
INFO - 2021-01-20 02:29:41 --> Security Class Initialized
INFO - 2021-01-20 02:29:41 --> Input Class Initialized
INFO - 2021-01-20 02:29:41 --> Language Class Initialized
INFO - 2021-01-20 02:29:41 --> Loader Class Initialized
INFO - 2021-01-20 02:29:41 --> Helper loaded: url_helper
INFO - 2021-01-20 02:29:41 --> Helper loaded: file_helper
INFO - 2021-01-20 02:29:41 --> Helper loaded: security_helper
INFO - 2021-01-20 02:29:41 --> Helper loaded: form_helper
INFO - 2021-01-20 02:29:41 --> Helper loaded: access_helper
INFO - 2021-01-20 02:29:41 --> Helper loaded: date_helper
INFO - 2021-01-20 02:29:41 --> Database Driver Class Initialized
INFO - 2021-01-20 02:29:41 --> User Agent Class Initialized
INFO - 2021-01-20 02:29:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:29:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:29:41 --> Pagination Class Initialized
INFO - 2021-01-20 02:29:41 --> Form Validation Class Initialized
INFO - 2021-01-20 02:29:41 --> Controller Class Initialized
INFO - 2021-01-20 02:29:41 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:29:41 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:29:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/diagnosa.php
INFO - 2021-01-20 02:29:41 --> Final output sent to browser
INFO - 2021-01-20 02:29:51 --> Config Class Initialized
INFO - 2021-01-20 02:29:51 --> Hooks Class Initialized
INFO - 2021-01-20 02:29:51 --> Utf8 Class Initialized
INFO - 2021-01-20 02:29:51 --> URI Class Initialized
INFO - 2021-01-20 02:29:51 --> Router Class Initialized
INFO - 2021-01-20 02:29:51 --> Output Class Initialized
INFO - 2021-01-20 02:29:51 --> Security Class Initialized
INFO - 2021-01-20 02:29:51 --> Input Class Initialized
INFO - 2021-01-20 02:29:51 --> Language Class Initialized
INFO - 2021-01-20 02:29:51 --> Loader Class Initialized
INFO - 2021-01-20 02:29:51 --> Helper loaded: url_helper
INFO - 2021-01-20 02:29:51 --> Helper loaded: file_helper
INFO - 2021-01-20 02:29:51 --> Helper loaded: security_helper
INFO - 2021-01-20 02:29:51 --> Helper loaded: form_helper
INFO - 2021-01-20 02:29:51 --> Helper loaded: access_helper
INFO - 2021-01-20 02:29:51 --> Helper loaded: date_helper
INFO - 2021-01-20 02:29:51 --> Database Driver Class Initialized
INFO - 2021-01-20 02:29:51 --> User Agent Class Initialized
INFO - 2021-01-20 02:29:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:29:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:29:51 --> Pagination Class Initialized
INFO - 2021-01-20 02:29:51 --> Form Validation Class Initialized
INFO - 2021-01-20 02:29:51 --> Controller Class Initialized
INFO - 2021-01-20 02:29:51 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:29:51 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:29:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/diagnosa.php
INFO - 2021-01-20 02:29:51 --> Final output sent to browser
INFO - 2021-01-20 02:30:03 --> Config Class Initialized
INFO - 2021-01-20 02:30:03 --> Hooks Class Initialized
INFO - 2021-01-20 02:30:03 --> Utf8 Class Initialized
INFO - 2021-01-20 02:30:03 --> URI Class Initialized
INFO - 2021-01-20 02:30:03 --> Router Class Initialized
INFO - 2021-01-20 02:30:03 --> Output Class Initialized
INFO - 2021-01-20 02:30:03 --> Security Class Initialized
INFO - 2021-01-20 02:30:03 --> Input Class Initialized
INFO - 2021-01-20 02:30:03 --> Language Class Initialized
INFO - 2021-01-20 02:30:03 --> Loader Class Initialized
INFO - 2021-01-20 02:30:03 --> Helper loaded: url_helper
INFO - 2021-01-20 02:30:03 --> Helper loaded: file_helper
INFO - 2021-01-20 02:30:03 --> Helper loaded: security_helper
INFO - 2021-01-20 02:30:03 --> Helper loaded: form_helper
INFO - 2021-01-20 02:30:03 --> Helper loaded: access_helper
INFO - 2021-01-20 02:30:03 --> Helper loaded: date_helper
INFO - 2021-01-20 02:30:03 --> Database Driver Class Initialized
INFO - 2021-01-20 02:30:03 --> User Agent Class Initialized
INFO - 2021-01-20 02:30:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:30:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:30:03 --> Pagination Class Initialized
INFO - 2021-01-20 02:30:03 --> Form Validation Class Initialized
INFO - 2021-01-20 02:30:03 --> Controller Class Initialized
INFO - 2021-01-20 02:30:03 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:30:04 --> Database Forge Class Initialized
INFO - 2021-01-20 02:30:05 --> Config Class Initialized
INFO - 2021-01-20 02:30:05 --> Hooks Class Initialized
INFO - 2021-01-20 02:30:05 --> Utf8 Class Initialized
INFO - 2021-01-20 02:30:05 --> URI Class Initialized
INFO - 2021-01-20 02:30:05 --> Router Class Initialized
INFO - 2021-01-20 02:30:05 --> Output Class Initialized
INFO - 2021-01-20 02:30:05 --> Security Class Initialized
INFO - 2021-01-20 02:30:05 --> Input Class Initialized
INFO - 2021-01-20 02:30:05 --> Language Class Initialized
INFO - 2021-01-20 02:30:05 --> Loader Class Initialized
INFO - 2021-01-20 02:30:05 --> Helper loaded: url_helper
INFO - 2021-01-20 02:30:05 --> Helper loaded: file_helper
INFO - 2021-01-20 02:30:05 --> Helper loaded: security_helper
INFO - 2021-01-20 02:30:05 --> Helper loaded: form_helper
INFO - 2021-01-20 02:30:05 --> Helper loaded: access_helper
INFO - 2021-01-20 02:30:05 --> Helper loaded: date_helper
INFO - 2021-01-20 02:30:05 --> Database Driver Class Initialized
INFO - 2021-01-20 02:30:05 --> User Agent Class Initialized
INFO - 2021-01-20 02:30:05 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:30:05 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:30:05 --> Pagination Class Initialized
INFO - 2021-01-20 02:30:05 --> Form Validation Class Initialized
INFO - 2021-01-20 02:30:05 --> Controller Class Initialized
INFO - 2021-01-20 02:30:05 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:30:05 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:30:05 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/obat_pasien.php
INFO - 2021-01-20 02:30:05 --> Final output sent to browser
INFO - 2021-01-20 02:30:16 --> Config Class Initialized
INFO - 2021-01-20 02:30:16 --> Hooks Class Initialized
INFO - 2021-01-20 02:30:16 --> Utf8 Class Initialized
INFO - 2021-01-20 02:30:16 --> URI Class Initialized
INFO - 2021-01-20 02:30:16 --> Router Class Initialized
INFO - 2021-01-20 02:30:16 --> Output Class Initialized
INFO - 2021-01-20 02:30:16 --> Security Class Initialized
INFO - 2021-01-20 02:30:16 --> Input Class Initialized
INFO - 2021-01-20 02:30:16 --> Language Class Initialized
INFO - 2021-01-20 02:30:16 --> Loader Class Initialized
INFO - 2021-01-20 02:30:16 --> Helper loaded: url_helper
INFO - 2021-01-20 02:30:16 --> Helper loaded: file_helper
INFO - 2021-01-20 02:30:16 --> Helper loaded: security_helper
INFO - 2021-01-20 02:30:16 --> Helper loaded: form_helper
INFO - 2021-01-20 02:30:16 --> Helper loaded: access_helper
INFO - 2021-01-20 02:30:16 --> Helper loaded: date_helper
INFO - 2021-01-20 02:30:16 --> Database Driver Class Initialized
INFO - 2021-01-20 02:30:16 --> User Agent Class Initialized
INFO - 2021-01-20 02:30:16 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:30:16 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:30:16 --> Pagination Class Initialized
INFO - 2021-01-20 02:30:17 --> Form Validation Class Initialized
INFO - 2021-01-20 02:30:17 --> Controller Class Initialized
INFO - 2021-01-20 02:30:17 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:30:17 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:30:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/obat_pasien.php
INFO - 2021-01-20 02:30:17 --> Final output sent to browser
INFO - 2021-01-20 02:30:26 --> Config Class Initialized
INFO - 2021-01-20 02:30:26 --> Hooks Class Initialized
INFO - 2021-01-20 02:30:26 --> Utf8 Class Initialized
INFO - 2021-01-20 02:30:26 --> URI Class Initialized
INFO - 2021-01-20 02:30:26 --> Router Class Initialized
INFO - 2021-01-20 02:30:26 --> Output Class Initialized
INFO - 2021-01-20 02:30:26 --> Security Class Initialized
INFO - 2021-01-20 02:30:26 --> Input Class Initialized
INFO - 2021-01-20 02:30:26 --> Language Class Initialized
INFO - 2021-01-20 02:30:26 --> Loader Class Initialized
INFO - 2021-01-20 02:30:26 --> Helper loaded: url_helper
INFO - 2021-01-20 02:30:26 --> Helper loaded: file_helper
INFO - 2021-01-20 02:30:26 --> Helper loaded: security_helper
INFO - 2021-01-20 02:30:26 --> Helper loaded: form_helper
INFO - 2021-01-20 02:30:26 --> Helper loaded: access_helper
INFO - 2021-01-20 02:30:26 --> Helper loaded: date_helper
INFO - 2021-01-20 02:30:26 --> Database Driver Class Initialized
INFO - 2021-01-20 02:30:26 --> User Agent Class Initialized
INFO - 2021-01-20 02:30:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:30:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:30:26 --> Pagination Class Initialized
INFO - 2021-01-20 02:30:26 --> Form Validation Class Initialized
INFO - 2021-01-20 02:30:26 --> Controller Class Initialized
INFO - 2021-01-20 02:30:26 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:30:27 --> Config Class Initialized
INFO - 2021-01-20 02:30:27 --> Hooks Class Initialized
INFO - 2021-01-20 02:30:27 --> Utf8 Class Initialized
INFO - 2021-01-20 02:30:27 --> URI Class Initialized
INFO - 2021-01-20 02:30:27 --> Router Class Initialized
INFO - 2021-01-20 02:30:27 --> Output Class Initialized
INFO - 2021-01-20 02:30:27 --> Security Class Initialized
INFO - 2021-01-20 02:30:27 --> Input Class Initialized
INFO - 2021-01-20 02:30:27 --> Language Class Initialized
INFO - 2021-01-20 02:30:27 --> Loader Class Initialized
INFO - 2021-01-20 02:30:27 --> Helper loaded: url_helper
INFO - 2021-01-20 02:30:27 --> Helper loaded: file_helper
INFO - 2021-01-20 02:30:27 --> Helper loaded: security_helper
INFO - 2021-01-20 02:30:27 --> Helper loaded: form_helper
INFO - 2021-01-20 02:30:27 --> Helper loaded: access_helper
INFO - 2021-01-20 02:30:27 --> Helper loaded: date_helper
INFO - 2021-01-20 02:30:27 --> Database Driver Class Initialized
INFO - 2021-01-20 02:30:27 --> User Agent Class Initialized
INFO - 2021-01-20 02:30:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:30:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:30:27 --> Pagination Class Initialized
INFO - 2021-01-20 02:30:27 --> Form Validation Class Initialized
INFO - 2021-01-20 02:30:27 --> Controller Class Initialized
INFO - 2021-01-20 02:30:27 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:30:27 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:30:27 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/obat_pasien.php
INFO - 2021-01-20 02:30:27 --> Final output sent to browser
INFO - 2021-01-20 02:30:29 --> Config Class Initialized
INFO - 2021-01-20 02:30:29 --> Hooks Class Initialized
INFO - 2021-01-20 02:30:29 --> Utf8 Class Initialized
INFO - 2021-01-20 02:30:29 --> URI Class Initialized
INFO - 2021-01-20 02:30:29 --> Router Class Initialized
INFO - 2021-01-20 02:30:29 --> Output Class Initialized
INFO - 2021-01-20 02:30:29 --> Security Class Initialized
INFO - 2021-01-20 02:30:29 --> Input Class Initialized
INFO - 2021-01-20 02:30:29 --> Language Class Initialized
INFO - 2021-01-20 02:30:29 --> Loader Class Initialized
INFO - 2021-01-20 02:30:29 --> Helper loaded: url_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: file_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: security_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: form_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: access_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: date_helper
INFO - 2021-01-20 02:30:29 --> Database Driver Class Initialized
INFO - 2021-01-20 02:30:29 --> User Agent Class Initialized
INFO - 2021-01-20 02:30:29 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:30:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:30:29 --> Pagination Class Initialized
INFO - 2021-01-20 02:30:29 --> Form Validation Class Initialized
INFO - 2021-01-20 02:30:29 --> Controller Class Initialized
INFO - 2021-01-20 02:30:29 --> Model "Periksa_model" initialized
INFO - 2021-01-20 02:30:29 --> Config Class Initialized
INFO - 2021-01-20 02:30:29 --> Hooks Class Initialized
INFO - 2021-01-20 02:30:29 --> Utf8 Class Initialized
INFO - 2021-01-20 02:30:29 --> URI Class Initialized
INFO - 2021-01-20 02:30:29 --> Router Class Initialized
INFO - 2021-01-20 02:30:29 --> Output Class Initialized
INFO - 2021-01-20 02:30:29 --> Security Class Initialized
INFO - 2021-01-20 02:30:29 --> Input Class Initialized
INFO - 2021-01-20 02:30:29 --> Language Class Initialized
INFO - 2021-01-20 02:30:29 --> Loader Class Initialized
INFO - 2021-01-20 02:30:29 --> Helper loaded: url_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: file_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: security_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: form_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: access_helper
INFO - 2021-01-20 02:30:29 --> Helper loaded: date_helper
INFO - 2021-01-20 02:30:29 --> Database Driver Class Initialized
INFO - 2021-01-20 02:30:29 --> User Agent Class Initialized
INFO - 2021-01-20 02:30:29 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:30:29 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:30:29 --> Pagination Class Initialized
INFO - 2021-01-20 02:30:29 --> Form Validation Class Initialized
INFO - 2021-01-20 02:30:29 --> Controller Class Initialized
INFO - 2021-01-20 02:30:30 --> Model "User_model" initialized
INFO - 2021-01-20 02:30:30 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:30:30 --> Model "Periksa_model" initialized
INFO - 2021-01-20 08:30:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 08:30:30 --> Final output sent to browser
INFO - 2021-01-20 02:30:46 --> Config Class Initialized
INFO - 2021-01-20 02:30:46 --> Hooks Class Initialized
INFO - 2021-01-20 02:30:46 --> Utf8 Class Initialized
INFO - 2021-01-20 02:30:46 --> URI Class Initialized
INFO - 2021-01-20 02:30:46 --> Router Class Initialized
INFO - 2021-01-20 02:30:46 --> Output Class Initialized
INFO - 2021-01-20 02:30:46 --> Security Class Initialized
INFO - 2021-01-20 02:30:46 --> Input Class Initialized
INFO - 2021-01-20 02:30:46 --> Language Class Initialized
INFO - 2021-01-20 02:30:46 --> Loader Class Initialized
INFO - 2021-01-20 02:30:46 --> Helper loaded: url_helper
INFO - 2021-01-20 02:30:46 --> Helper loaded: file_helper
INFO - 2021-01-20 02:30:46 --> Helper loaded: security_helper
INFO - 2021-01-20 02:30:46 --> Helper loaded: form_helper
INFO - 2021-01-20 02:30:46 --> Helper loaded: access_helper
INFO - 2021-01-20 02:30:46 --> Helper loaded: date_helper
INFO - 2021-01-20 02:30:46 --> Database Driver Class Initialized
INFO - 2021-01-20 02:30:46 --> User Agent Class Initialized
INFO - 2021-01-20 02:30:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:30:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:30:46 --> Pagination Class Initialized
INFO - 2021-01-20 02:30:46 --> Form Validation Class Initialized
INFO - 2021-01-20 02:30:46 --> Controller Class Initialized
INFO - 2021-01-20 02:30:46 --> Model "Pasien_model" initialized
INFO - 2021-01-20 02:30:46 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 02:30:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 02:30:46 --> Final output sent to browser
INFO - 2021-01-20 02:30:48 --> Config Class Initialized
INFO - 2021-01-20 02:30:48 --> Hooks Class Initialized
INFO - 2021-01-20 02:30:48 --> Utf8 Class Initialized
INFO - 2021-01-20 02:30:48 --> URI Class Initialized
INFO - 2021-01-20 02:30:48 --> Router Class Initialized
INFO - 2021-01-20 02:30:48 --> Output Class Initialized
INFO - 2021-01-20 02:30:48 --> Security Class Initialized
INFO - 2021-01-20 02:30:48 --> Input Class Initialized
INFO - 2021-01-20 02:30:48 --> Language Class Initialized
INFO - 2021-01-20 02:30:48 --> Loader Class Initialized
INFO - 2021-01-20 02:30:48 --> Helper loaded: url_helper
INFO - 2021-01-20 02:30:48 --> Helper loaded: file_helper
INFO - 2021-01-20 02:30:48 --> Helper loaded: security_helper
INFO - 2021-01-20 02:30:48 --> Helper loaded: form_helper
INFO - 2021-01-20 02:30:48 --> Helper loaded: access_helper
INFO - 2021-01-20 02:30:48 --> Helper loaded: date_helper
INFO - 2021-01-20 02:30:48 --> Database Driver Class Initialized
INFO - 2021-01-20 02:30:48 --> User Agent Class Initialized
INFO - 2021-01-20 02:30:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:30:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:30:48 --> Pagination Class Initialized
INFO - 2021-01-20 02:30:48 --> Form Validation Class Initialized
INFO - 2021-01-20 02:30:48 --> Controller Class Initialized
INFO - 2021-01-20 02:30:48 --> Model "User_model" initialized
INFO - 2021-01-20 02:30:49 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\user/data_user.php
INFO - 2021-01-20 02:30:49 --> Final output sent to browser
INFO - 2021-01-20 02:31:17 --> Config Class Initialized
INFO - 2021-01-20 02:31:17 --> Hooks Class Initialized
INFO - 2021-01-20 02:31:17 --> Utf8 Class Initialized
INFO - 2021-01-20 02:31:17 --> URI Class Initialized
INFO - 2021-01-20 02:31:17 --> Router Class Initialized
INFO - 2021-01-20 02:31:17 --> Output Class Initialized
INFO - 2021-01-20 02:31:17 --> Security Class Initialized
INFO - 2021-01-20 02:31:17 --> Input Class Initialized
INFO - 2021-01-20 02:31:17 --> Language Class Initialized
INFO - 2021-01-20 02:31:17 --> Loader Class Initialized
INFO - 2021-01-20 02:31:17 --> Helper loaded: url_helper
INFO - 2021-01-20 02:31:17 --> Helper loaded: file_helper
INFO - 2021-01-20 02:31:17 --> Helper loaded: security_helper
INFO - 2021-01-20 02:31:17 --> Helper loaded: form_helper
INFO - 2021-01-20 02:31:17 --> Helper loaded: access_helper
INFO - 2021-01-20 02:31:17 --> Helper loaded: date_helper
INFO - 2021-01-20 02:31:17 --> Database Driver Class Initialized
INFO - 2021-01-20 02:31:17 --> User Agent Class Initialized
INFO - 2021-01-20 02:31:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:31:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:31:17 --> Pagination Class Initialized
INFO - 2021-01-20 02:31:17 --> Form Validation Class Initialized
INFO - 2021-01-20 02:31:17 --> Controller Class Initialized
INFO - 2021-01-20 02:31:17 --> Model "User_model" initialized
INFO - 2021-01-20 02:31:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\user/data_user.php
INFO - 2021-01-20 02:31:17 --> Final output sent to browser
INFO - 2021-01-20 02:31:20 --> Config Class Initialized
INFO - 2021-01-20 02:31:20 --> Hooks Class Initialized
INFO - 2021-01-20 02:31:20 --> Utf8 Class Initialized
INFO - 2021-01-20 02:31:20 --> URI Class Initialized
INFO - 2021-01-20 02:31:20 --> Router Class Initialized
INFO - 2021-01-20 02:31:20 --> Output Class Initialized
INFO - 2021-01-20 02:31:20 --> Security Class Initialized
INFO - 2021-01-20 02:31:20 --> Input Class Initialized
INFO - 2021-01-20 02:31:20 --> Language Class Initialized
INFO - 2021-01-20 02:31:20 --> Loader Class Initialized
INFO - 2021-01-20 02:31:20 --> Helper loaded: url_helper
INFO - 2021-01-20 02:31:20 --> Helper loaded: file_helper
INFO - 2021-01-20 02:31:20 --> Helper loaded: security_helper
INFO - 2021-01-20 02:31:20 --> Helper loaded: form_helper
INFO - 2021-01-20 02:31:20 --> Helper loaded: access_helper
INFO - 2021-01-20 02:31:20 --> Helper loaded: date_helper
INFO - 2021-01-20 02:31:20 --> Database Driver Class Initialized
INFO - 2021-01-20 02:31:20 --> User Agent Class Initialized
INFO - 2021-01-20 02:31:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:31:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:31:20 --> Pagination Class Initialized
INFO - 2021-01-20 02:31:20 --> Form Validation Class Initialized
INFO - 2021-01-20 02:31:20 --> Controller Class Initialized
INFO - 2021-01-20 02:31:20 --> Model "User_model" initialized
INFO - 2021-01-20 02:31:20 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 02:31:20 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 02:31:20 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 02:31:20 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\user/detail_user.php
INFO - 2021-01-20 02:31:20 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 02:31:20 --> Final output sent to browser
INFO - 2021-01-20 02:31:24 --> Config Class Initialized
INFO - 2021-01-20 02:31:24 --> Hooks Class Initialized
INFO - 2021-01-20 02:31:24 --> Utf8 Class Initialized
INFO - 2021-01-20 02:31:24 --> URI Class Initialized
INFO - 2021-01-20 02:31:24 --> Router Class Initialized
INFO - 2021-01-20 02:31:24 --> Output Class Initialized
INFO - 2021-01-20 02:31:24 --> Security Class Initialized
INFO - 2021-01-20 02:31:24 --> Input Class Initialized
INFO - 2021-01-20 02:31:24 --> Language Class Initialized
INFO - 2021-01-20 02:31:24 --> Loader Class Initialized
INFO - 2021-01-20 02:31:24 --> Helper loaded: url_helper
INFO - 2021-01-20 02:31:24 --> Helper loaded: file_helper
INFO - 2021-01-20 02:31:24 --> Helper loaded: security_helper
INFO - 2021-01-20 02:31:24 --> Helper loaded: form_helper
INFO - 2021-01-20 02:31:24 --> Helper loaded: access_helper
INFO - 2021-01-20 02:31:24 --> Helper loaded: date_helper
INFO - 2021-01-20 02:31:24 --> Database Driver Class Initialized
INFO - 2021-01-20 02:31:24 --> User Agent Class Initialized
INFO - 2021-01-20 02:31:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:31:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:31:24 --> Pagination Class Initialized
INFO - 2021-01-20 02:31:24 --> Form Validation Class Initialized
INFO - 2021-01-20 02:31:24 --> Controller Class Initialized
INFO - 2021-01-20 02:31:24 --> Model "User_model" initialized
INFO - 2021-01-20 02:31:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\user/data_user.php
INFO - 2021-01-20 02:31:24 --> Final output sent to browser
INFO - 2021-01-20 02:31:26 --> Config Class Initialized
INFO - 2021-01-20 02:31:26 --> Hooks Class Initialized
INFO - 2021-01-20 02:31:26 --> Utf8 Class Initialized
INFO - 2021-01-20 02:31:26 --> URI Class Initialized
INFO - 2021-01-20 02:31:26 --> Router Class Initialized
INFO - 2021-01-20 02:31:26 --> Output Class Initialized
INFO - 2021-01-20 02:31:26 --> Security Class Initialized
INFO - 2021-01-20 02:31:26 --> Input Class Initialized
INFO - 2021-01-20 02:31:26 --> Language Class Initialized
INFO - 2021-01-20 02:31:26 --> Loader Class Initialized
INFO - 2021-01-20 02:31:26 --> Helper loaded: url_helper
INFO - 2021-01-20 02:31:26 --> Helper loaded: file_helper
INFO - 2021-01-20 02:31:26 --> Helper loaded: security_helper
INFO - 2021-01-20 02:31:26 --> Helper loaded: form_helper
INFO - 2021-01-20 02:31:26 --> Helper loaded: access_helper
INFO - 2021-01-20 02:31:26 --> Helper loaded: date_helper
INFO - 2021-01-20 02:31:26 --> Database Driver Class Initialized
INFO - 2021-01-20 02:31:26 --> User Agent Class Initialized
INFO - 2021-01-20 02:31:26 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:31:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:31:26 --> Pagination Class Initialized
INFO - 2021-01-20 02:31:26 --> Form Validation Class Initialized
INFO - 2021-01-20 02:31:26 --> Controller Class Initialized
INFO - 2021-01-20 02:31:26 --> Model "User_model" initialized
INFO - 2021-01-20 02:31:26 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 02:31:26 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 02:31:26 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 02:31:26 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\user/edit_user.php
INFO - 2021-01-20 02:31:26 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 02:31:26 --> Final output sent to browser
INFO - 2021-01-20 02:31:28 --> Config Class Initialized
INFO - 2021-01-20 02:31:28 --> Hooks Class Initialized
INFO - 2021-01-20 02:31:28 --> Utf8 Class Initialized
INFO - 2021-01-20 02:31:28 --> URI Class Initialized
INFO - 2021-01-20 02:31:28 --> Router Class Initialized
INFO - 2021-01-20 02:31:28 --> Output Class Initialized
INFO - 2021-01-20 02:31:28 --> Security Class Initialized
INFO - 2021-01-20 02:31:28 --> Input Class Initialized
INFO - 2021-01-20 02:31:28 --> Language Class Initialized
INFO - 2021-01-20 02:31:28 --> Loader Class Initialized
INFO - 2021-01-20 02:31:28 --> Helper loaded: url_helper
INFO - 2021-01-20 02:31:28 --> Helper loaded: file_helper
INFO - 2021-01-20 02:31:28 --> Helper loaded: security_helper
INFO - 2021-01-20 02:31:28 --> Helper loaded: form_helper
INFO - 2021-01-20 02:31:28 --> Helper loaded: access_helper
INFO - 2021-01-20 02:31:28 --> Helper loaded: date_helper
INFO - 2021-01-20 02:31:28 --> Database Driver Class Initialized
INFO - 2021-01-20 02:31:28 --> User Agent Class Initialized
INFO - 2021-01-20 02:31:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:31:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:31:28 --> Pagination Class Initialized
INFO - 2021-01-20 02:31:28 --> Form Validation Class Initialized
INFO - 2021-01-20 02:31:28 --> Controller Class Initialized
INFO - 2021-01-20 02:31:28 --> Model "User_model" initialized
INFO - 2021-01-20 02:31:28 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\user/data_user.php
INFO - 2021-01-20 02:31:28 --> Final output sent to browser
INFO - 2021-01-20 02:31:30 --> Config Class Initialized
INFO - 2021-01-20 02:31:30 --> Hooks Class Initialized
INFO - 2021-01-20 02:31:30 --> Utf8 Class Initialized
INFO - 2021-01-20 02:31:30 --> URI Class Initialized
INFO - 2021-01-20 02:31:30 --> Router Class Initialized
INFO - 2021-01-20 02:31:30 --> Output Class Initialized
INFO - 2021-01-20 02:31:30 --> Security Class Initialized
INFO - 2021-01-20 02:31:30 --> Input Class Initialized
INFO - 2021-01-20 02:31:30 --> Language Class Initialized
INFO - 2021-01-20 02:31:30 --> Loader Class Initialized
INFO - 2021-01-20 02:31:30 --> Helper loaded: url_helper
INFO - 2021-01-20 02:31:30 --> Helper loaded: file_helper
INFO - 2021-01-20 02:31:30 --> Helper loaded: security_helper
INFO - 2021-01-20 02:31:30 --> Helper loaded: form_helper
INFO - 2021-01-20 02:31:30 --> Helper loaded: access_helper
INFO - 2021-01-20 02:31:30 --> Helper loaded: date_helper
INFO - 2021-01-20 02:31:30 --> Database Driver Class Initialized
INFO - 2021-01-20 02:31:30 --> User Agent Class Initialized
INFO - 2021-01-20 02:31:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:31:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:31:30 --> Pagination Class Initialized
INFO - 2021-01-20 02:31:30 --> Form Validation Class Initialized
INFO - 2021-01-20 02:31:30 --> Controller Class Initialized
INFO - 2021-01-20 02:31:30 --> Model "User_model" initialized
INFO - 2021-01-20 02:31:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 02:31:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 02:31:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 02:31:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\user/tambah_user.php
INFO - 2021-01-20 02:31:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 02:31:30 --> Final output sent to browser
INFO - 2021-01-20 02:31:31 --> Config Class Initialized
INFO - 2021-01-20 02:31:31 --> Hooks Class Initialized
INFO - 2021-01-20 02:31:31 --> Utf8 Class Initialized
INFO - 2021-01-20 02:31:31 --> URI Class Initialized
INFO - 2021-01-20 02:31:31 --> Router Class Initialized
INFO - 2021-01-20 02:31:31 --> Output Class Initialized
INFO - 2021-01-20 02:31:31 --> Security Class Initialized
INFO - 2021-01-20 02:31:31 --> Input Class Initialized
INFO - 2021-01-20 02:31:31 --> Language Class Initialized
INFO - 2021-01-20 02:31:31 --> Loader Class Initialized
INFO - 2021-01-20 02:31:31 --> Helper loaded: url_helper
INFO - 2021-01-20 02:31:31 --> Helper loaded: file_helper
INFO - 2021-01-20 02:31:31 --> Helper loaded: security_helper
INFO - 2021-01-20 02:31:31 --> Helper loaded: form_helper
INFO - 2021-01-20 02:31:31 --> Helper loaded: access_helper
INFO - 2021-01-20 02:31:31 --> Helper loaded: date_helper
INFO - 2021-01-20 02:31:31 --> Database Driver Class Initialized
INFO - 2021-01-20 02:31:31 --> User Agent Class Initialized
INFO - 2021-01-20 02:31:31 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 02:31:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 02:31:31 --> Pagination Class Initialized
INFO - 2021-01-20 02:31:31 --> Form Validation Class Initialized
INFO - 2021-01-20 02:31:31 --> Controller Class Initialized
INFO - 2021-01-20 02:31:31 --> Model "User_model" initialized
INFO - 2021-01-20 02:31:31 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\user/data_user.php
INFO - 2021-01-20 02:31:31 --> Final output sent to browser
INFO - 2021-01-20 04:19:47 --> Config Class Initialized
INFO - 2021-01-20 04:19:47 --> Hooks Class Initialized
INFO - 2021-01-20 04:19:47 --> Utf8 Class Initialized
INFO - 2021-01-20 04:19:47 --> URI Class Initialized
INFO - 2021-01-20 04:19:48 --> Router Class Initialized
INFO - 2021-01-20 04:19:48 --> Output Class Initialized
INFO - 2021-01-20 04:19:48 --> Security Class Initialized
INFO - 2021-01-20 04:19:48 --> Input Class Initialized
INFO - 2021-01-20 04:19:48 --> Language Class Initialized
INFO - 2021-01-20 04:19:48 --> Loader Class Initialized
INFO - 2021-01-20 04:19:49 --> Helper loaded: url_helper
INFO - 2021-01-20 04:19:49 --> Helper loaded: file_helper
INFO - 2021-01-20 04:19:49 --> Helper loaded: security_helper
INFO - 2021-01-20 04:19:49 --> Helper loaded: form_helper
INFO - 2021-01-20 04:19:49 --> Helper loaded: access_helper
INFO - 2021-01-20 04:19:49 --> Helper loaded: date_helper
INFO - 2021-01-20 04:19:49 --> Database Driver Class Initialized
INFO - 2021-01-20 04:19:53 --> User Agent Class Initialized
INFO - 2021-01-20 04:19:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:19:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:19:53 --> Pagination Class Initialized
INFO - 2021-01-20 04:19:54 --> Form Validation Class Initialized
INFO - 2021-01-20 04:19:54 --> Controller Class Initialized
INFO - 2021-01-20 04:19:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 04:19:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 04:19:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 04:19:54 --> Final output sent to browser
INFO - 2021-01-20 04:20:58 --> Config Class Initialized
INFO - 2021-01-20 04:20:58 --> Hooks Class Initialized
INFO - 2021-01-20 04:20:58 --> Utf8 Class Initialized
INFO - 2021-01-20 04:20:58 --> URI Class Initialized
INFO - 2021-01-20 04:20:58 --> Router Class Initialized
INFO - 2021-01-20 04:20:58 --> Output Class Initialized
INFO - 2021-01-20 04:20:58 --> Security Class Initialized
INFO - 2021-01-20 04:20:59 --> Input Class Initialized
INFO - 2021-01-20 04:20:59 --> Language Class Initialized
INFO - 2021-01-20 04:20:59 --> Loader Class Initialized
INFO - 2021-01-20 04:20:59 --> Helper loaded: url_helper
INFO - 2021-01-20 04:20:59 --> Helper loaded: file_helper
INFO - 2021-01-20 04:20:59 --> Helper loaded: security_helper
INFO - 2021-01-20 04:20:59 --> Helper loaded: form_helper
INFO - 2021-01-20 04:20:59 --> Helper loaded: access_helper
INFO - 2021-01-20 04:20:59 --> Helper loaded: date_helper
INFO - 2021-01-20 04:20:59 --> Database Driver Class Initialized
INFO - 2021-01-20 04:20:59 --> User Agent Class Initialized
INFO - 2021-01-20 04:20:59 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:20:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:20:59 --> Pagination Class Initialized
INFO - 2021-01-20 04:20:59 --> Form Validation Class Initialized
INFO - 2021-01-20 04:20:59 --> Controller Class Initialized
INFO - 2021-01-20 04:20:59 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/header.php
INFO - 2021-01-20 04:20:59 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\login/index.php
INFO - 2021-01-20 04:20:59 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/login/footer.php
INFO - 2021-01-20 04:20:59 --> Final output sent to browser
INFO - 2021-01-20 04:21:06 --> Config Class Initialized
INFO - 2021-01-20 04:21:06 --> Hooks Class Initialized
INFO - 2021-01-20 04:21:06 --> Utf8 Class Initialized
INFO - 2021-01-20 04:21:06 --> URI Class Initialized
INFO - 2021-01-20 04:21:06 --> Router Class Initialized
INFO - 2021-01-20 04:21:06 --> Output Class Initialized
INFO - 2021-01-20 04:21:06 --> Security Class Initialized
INFO - 2021-01-20 04:21:06 --> Input Class Initialized
INFO - 2021-01-20 04:21:06 --> Language Class Initialized
INFO - 2021-01-20 04:21:06 --> Loader Class Initialized
INFO - 2021-01-20 04:21:06 --> Helper loaded: url_helper
INFO - 2021-01-20 04:21:06 --> Helper loaded: file_helper
INFO - 2021-01-20 04:21:06 --> Helper loaded: security_helper
INFO - 2021-01-20 04:21:06 --> Helper loaded: form_helper
INFO - 2021-01-20 04:21:06 --> Helper loaded: access_helper
INFO - 2021-01-20 04:21:06 --> Helper loaded: date_helper
INFO - 2021-01-20 04:21:06 --> Database Driver Class Initialized
INFO - 2021-01-20 04:21:06 --> User Agent Class Initialized
INFO - 2021-01-20 04:21:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:21:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:21:06 --> Pagination Class Initialized
INFO - 2021-01-20 04:21:06 --> Form Validation Class Initialized
INFO - 2021-01-20 04:21:06 --> Controller Class Initialized
INFO - 2021-01-20 04:21:06 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2021-01-20 04:21:07 --> Config Class Initialized
INFO - 2021-01-20 04:21:07 --> Hooks Class Initialized
INFO - 2021-01-20 04:21:07 --> Utf8 Class Initialized
INFO - 2021-01-20 04:21:07 --> URI Class Initialized
INFO - 2021-01-20 04:21:07 --> Router Class Initialized
INFO - 2021-01-20 04:21:07 --> Output Class Initialized
INFO - 2021-01-20 04:21:07 --> Security Class Initialized
INFO - 2021-01-20 04:21:07 --> Input Class Initialized
INFO - 2021-01-20 04:21:07 --> Language Class Initialized
INFO - 2021-01-20 04:21:07 --> Loader Class Initialized
INFO - 2021-01-20 04:21:07 --> Helper loaded: url_helper
INFO - 2021-01-20 04:21:07 --> Helper loaded: file_helper
INFO - 2021-01-20 04:21:07 --> Helper loaded: security_helper
INFO - 2021-01-20 04:21:07 --> Helper loaded: form_helper
INFO - 2021-01-20 04:21:07 --> Helper loaded: access_helper
INFO - 2021-01-20 04:21:07 --> Helper loaded: date_helper
INFO - 2021-01-20 04:21:07 --> Database Driver Class Initialized
INFO - 2021-01-20 04:21:07 --> User Agent Class Initialized
INFO - 2021-01-20 04:21:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:21:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:21:07 --> Pagination Class Initialized
INFO - 2021-01-20 04:21:07 --> Form Validation Class Initialized
INFO - 2021-01-20 04:21:07 --> Controller Class Initialized
INFO - 2021-01-20 04:21:07 --> Model "User_model" initialized
INFO - 2021-01-20 04:21:07 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:21:07 --> Model "Periksa_model" initialized
INFO - 2021-01-20 10:21:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\dashboard/index.php
INFO - 2021-01-20 10:21:08 --> Final output sent to browser
INFO - 2021-01-20 04:21:17 --> Config Class Initialized
INFO - 2021-01-20 04:21:17 --> Hooks Class Initialized
INFO - 2021-01-20 04:21:17 --> Utf8 Class Initialized
INFO - 2021-01-20 04:21:18 --> URI Class Initialized
INFO - 2021-01-20 04:21:18 --> Router Class Initialized
INFO - 2021-01-20 04:21:18 --> Output Class Initialized
INFO - 2021-01-20 04:21:18 --> Security Class Initialized
INFO - 2021-01-20 04:21:18 --> Input Class Initialized
INFO - 2021-01-20 04:21:18 --> Language Class Initialized
INFO - 2021-01-20 04:21:18 --> Loader Class Initialized
INFO - 2021-01-20 04:21:18 --> Helper loaded: url_helper
INFO - 2021-01-20 04:21:18 --> Helper loaded: file_helper
INFO - 2021-01-20 04:21:18 --> Helper loaded: security_helper
INFO - 2021-01-20 04:21:18 --> Helper loaded: form_helper
INFO - 2021-01-20 04:21:18 --> Helper loaded: access_helper
INFO - 2021-01-20 04:21:18 --> Helper loaded: date_helper
INFO - 2021-01-20 04:21:18 --> Database Driver Class Initialized
INFO - 2021-01-20 04:21:18 --> User Agent Class Initialized
INFO - 2021-01-20 04:21:18 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:21:18 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:21:18 --> Pagination Class Initialized
INFO - 2021-01-20 04:21:18 --> Form Validation Class Initialized
INFO - 2021-01-20 04:21:18 --> Controller Class Initialized
INFO - 2021-01-20 04:21:18 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:21:18 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:21:18 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:21:18 --> Final output sent to browser
INFO - 2021-01-20 04:21:21 --> Config Class Initialized
INFO - 2021-01-20 04:21:21 --> Hooks Class Initialized
INFO - 2021-01-20 04:21:21 --> Utf8 Class Initialized
INFO - 2021-01-20 04:21:21 --> URI Class Initialized
INFO - 2021-01-20 04:21:21 --> Router Class Initialized
INFO - 2021-01-20 04:21:21 --> Output Class Initialized
INFO - 2021-01-20 04:21:21 --> Security Class Initialized
INFO - 2021-01-20 04:21:21 --> Input Class Initialized
INFO - 2021-01-20 04:21:21 --> Language Class Initialized
INFO - 2021-01-20 04:21:21 --> Loader Class Initialized
INFO - 2021-01-20 04:21:21 --> Helper loaded: url_helper
INFO - 2021-01-20 04:21:21 --> Helper loaded: file_helper
INFO - 2021-01-20 04:21:21 --> Helper loaded: security_helper
INFO - 2021-01-20 04:21:21 --> Helper loaded: form_helper
INFO - 2021-01-20 04:21:21 --> Helper loaded: access_helper
INFO - 2021-01-20 04:21:21 --> Helper loaded: date_helper
INFO - 2021-01-20 04:21:21 --> Database Driver Class Initialized
INFO - 2021-01-20 04:21:21 --> User Agent Class Initialized
INFO - 2021-01-20 04:21:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:21:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:21:21 --> Pagination Class Initialized
INFO - 2021-01-20 04:21:21 --> Form Validation Class Initialized
INFO - 2021-01-20 04:21:21 --> Controller Class Initialized
INFO - 2021-01-20 04:21:21 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:21:21 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:21:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:21:21 --> Final output sent to browser
INFO - 2021-01-20 04:21:24 --> Config Class Initialized
INFO - 2021-01-20 04:21:24 --> Hooks Class Initialized
INFO - 2021-01-20 04:21:24 --> Utf8 Class Initialized
INFO - 2021-01-20 04:21:24 --> URI Class Initialized
INFO - 2021-01-20 04:21:24 --> Router Class Initialized
INFO - 2021-01-20 04:21:24 --> Output Class Initialized
INFO - 2021-01-20 04:21:24 --> Security Class Initialized
INFO - 2021-01-20 04:21:24 --> Input Class Initialized
INFO - 2021-01-20 04:21:24 --> Language Class Initialized
INFO - 2021-01-20 04:21:24 --> Loader Class Initialized
INFO - 2021-01-20 04:21:24 --> Helper loaded: url_helper
INFO - 2021-01-20 04:21:24 --> Helper loaded: file_helper
INFO - 2021-01-20 04:21:24 --> Helper loaded: security_helper
INFO - 2021-01-20 04:21:24 --> Helper loaded: form_helper
INFO - 2021-01-20 04:21:24 --> Helper loaded: access_helper
INFO - 2021-01-20 04:21:24 --> Helper loaded: date_helper
INFO - 2021-01-20 04:21:24 --> Database Driver Class Initialized
INFO - 2021-01-20 04:21:24 --> User Agent Class Initialized
INFO - 2021-01-20 04:21:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:21:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:21:24 --> Pagination Class Initialized
INFO - 2021-01-20 04:21:24 --> Form Validation Class Initialized
INFO - 2021-01-20 04:21:24 --> Controller Class Initialized
INFO - 2021-01-20 04:21:24 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:21:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:21:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:21:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:21:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:21:24 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:21:24 --> Final output sent to browser
INFO - 2021-01-20 04:22:07 --> Config Class Initialized
INFO - 2021-01-20 04:22:07 --> Hooks Class Initialized
INFO - 2021-01-20 04:22:07 --> Utf8 Class Initialized
INFO - 2021-01-20 04:22:07 --> URI Class Initialized
INFO - 2021-01-20 04:22:07 --> Router Class Initialized
INFO - 2021-01-20 04:22:07 --> Output Class Initialized
INFO - 2021-01-20 04:22:07 --> Security Class Initialized
INFO - 2021-01-20 04:22:07 --> Input Class Initialized
INFO - 2021-01-20 04:22:07 --> Language Class Initialized
INFO - 2021-01-20 04:22:07 --> Loader Class Initialized
INFO - 2021-01-20 04:22:07 --> Helper loaded: url_helper
INFO - 2021-01-20 04:22:07 --> Helper loaded: file_helper
INFO - 2021-01-20 04:22:07 --> Helper loaded: security_helper
INFO - 2021-01-20 04:22:07 --> Helper loaded: form_helper
INFO - 2021-01-20 04:22:07 --> Helper loaded: access_helper
INFO - 2021-01-20 04:22:07 --> Helper loaded: date_helper
INFO - 2021-01-20 04:22:07 --> Database Driver Class Initialized
INFO - 2021-01-20 04:22:07 --> User Agent Class Initialized
INFO - 2021-01-20 04:22:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:22:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:22:07 --> Pagination Class Initialized
INFO - 2021-01-20 04:22:07 --> Form Validation Class Initialized
INFO - 2021-01-20 04:22:07 --> Controller Class Initialized
INFO - 2021-01-20 04:22:07 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:22:07 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:22:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:22:07 --> Final output sent to browser
INFO - 2021-01-20 04:23:13 --> Config Class Initialized
INFO - 2021-01-20 04:23:13 --> Hooks Class Initialized
INFO - 2021-01-20 04:23:13 --> Utf8 Class Initialized
INFO - 2021-01-20 04:23:13 --> URI Class Initialized
INFO - 2021-01-20 04:23:13 --> Router Class Initialized
INFO - 2021-01-20 04:23:13 --> Output Class Initialized
INFO - 2021-01-20 04:23:13 --> Security Class Initialized
INFO - 2021-01-20 04:23:13 --> Input Class Initialized
INFO - 2021-01-20 04:23:13 --> Language Class Initialized
INFO - 2021-01-20 04:23:13 --> Loader Class Initialized
INFO - 2021-01-20 04:23:13 --> Helper loaded: url_helper
INFO - 2021-01-20 04:23:13 --> Helper loaded: file_helper
INFO - 2021-01-20 04:23:13 --> Helper loaded: security_helper
INFO - 2021-01-20 04:23:13 --> Helper loaded: form_helper
INFO - 2021-01-20 04:23:13 --> Helper loaded: access_helper
INFO - 2021-01-20 04:23:13 --> Helper loaded: date_helper
INFO - 2021-01-20 04:23:13 --> Database Driver Class Initialized
INFO - 2021-01-20 04:23:13 --> User Agent Class Initialized
INFO - 2021-01-20 04:23:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:23:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:23:13 --> Pagination Class Initialized
INFO - 2021-01-20 04:23:13 --> Form Validation Class Initialized
INFO - 2021-01-20 04:23:13 --> Controller Class Initialized
INFO - 2021-01-20 04:23:13 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:23:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:23:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:23:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:23:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:23:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:23:13 --> Final output sent to browser
INFO - 2021-01-20 04:23:15 --> Config Class Initialized
INFO - 2021-01-20 04:23:15 --> Hooks Class Initialized
INFO - 2021-01-20 04:23:15 --> Utf8 Class Initialized
INFO - 2021-01-20 04:23:15 --> URI Class Initialized
INFO - 2021-01-20 04:23:15 --> Router Class Initialized
INFO - 2021-01-20 04:23:15 --> Output Class Initialized
INFO - 2021-01-20 04:23:15 --> Security Class Initialized
INFO - 2021-01-20 04:23:15 --> Input Class Initialized
INFO - 2021-01-20 04:23:15 --> Language Class Initialized
INFO - 2021-01-20 04:23:15 --> Loader Class Initialized
INFO - 2021-01-20 04:23:15 --> Helper loaded: url_helper
INFO - 2021-01-20 04:23:15 --> Helper loaded: file_helper
INFO - 2021-01-20 04:23:15 --> Helper loaded: security_helper
INFO - 2021-01-20 04:23:15 --> Helper loaded: form_helper
INFO - 2021-01-20 04:23:15 --> Helper loaded: access_helper
INFO - 2021-01-20 04:23:15 --> Helper loaded: date_helper
INFO - 2021-01-20 04:23:15 --> Database Driver Class Initialized
INFO - 2021-01-20 04:23:15 --> User Agent Class Initialized
INFO - 2021-01-20 04:23:15 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:23:15 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:23:15 --> Pagination Class Initialized
INFO - 2021-01-20 04:23:15 --> Form Validation Class Initialized
INFO - 2021-01-20 04:23:15 --> Controller Class Initialized
INFO - 2021-01-20 04:23:15 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:23:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:23:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:23:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:23:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:23:15 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:23:15 --> Final output sent to browser
INFO - 2021-01-20 04:23:17 --> Config Class Initialized
INFO - 2021-01-20 04:23:17 --> Hooks Class Initialized
INFO - 2021-01-20 04:23:17 --> Utf8 Class Initialized
INFO - 2021-01-20 04:23:17 --> URI Class Initialized
INFO - 2021-01-20 04:23:17 --> Router Class Initialized
INFO - 2021-01-20 04:23:17 --> Output Class Initialized
INFO - 2021-01-20 04:23:17 --> Security Class Initialized
INFO - 2021-01-20 04:23:17 --> Input Class Initialized
INFO - 2021-01-20 04:23:17 --> Language Class Initialized
INFO - 2021-01-20 04:23:17 --> Loader Class Initialized
INFO - 2021-01-20 04:23:17 --> Helper loaded: url_helper
INFO - 2021-01-20 04:23:17 --> Helper loaded: file_helper
INFO - 2021-01-20 04:23:17 --> Helper loaded: security_helper
INFO - 2021-01-20 04:23:17 --> Helper loaded: form_helper
INFO - 2021-01-20 04:23:17 --> Helper loaded: access_helper
INFO - 2021-01-20 04:23:17 --> Helper loaded: date_helper
INFO - 2021-01-20 04:23:17 --> Database Driver Class Initialized
INFO - 2021-01-20 04:23:17 --> User Agent Class Initialized
INFO - 2021-01-20 04:23:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:23:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:23:17 --> Pagination Class Initialized
INFO - 2021-01-20 04:23:17 --> Form Validation Class Initialized
INFO - 2021-01-20 04:23:17 --> Controller Class Initialized
INFO - 2021-01-20 04:23:17 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:23:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:23:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:23:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:23:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:23:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:23:17 --> Final output sent to browser
INFO - 2021-01-20 04:23:19 --> Config Class Initialized
INFO - 2021-01-20 04:23:19 --> Hooks Class Initialized
INFO - 2021-01-20 04:23:19 --> Utf8 Class Initialized
INFO - 2021-01-20 04:23:19 --> URI Class Initialized
INFO - 2021-01-20 04:23:19 --> Router Class Initialized
INFO - 2021-01-20 04:23:19 --> Output Class Initialized
INFO - 2021-01-20 04:23:19 --> Security Class Initialized
INFO - 2021-01-20 04:23:19 --> Input Class Initialized
INFO - 2021-01-20 04:23:19 --> Language Class Initialized
INFO - 2021-01-20 04:23:19 --> Loader Class Initialized
INFO - 2021-01-20 04:23:19 --> Helper loaded: url_helper
INFO - 2021-01-20 04:23:19 --> Helper loaded: file_helper
INFO - 2021-01-20 04:23:19 --> Helper loaded: security_helper
INFO - 2021-01-20 04:23:19 --> Helper loaded: form_helper
INFO - 2021-01-20 04:23:19 --> Helper loaded: access_helper
INFO - 2021-01-20 04:23:19 --> Helper loaded: date_helper
INFO - 2021-01-20 04:23:19 --> Database Driver Class Initialized
INFO - 2021-01-20 04:23:19 --> User Agent Class Initialized
INFO - 2021-01-20 04:23:19 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:23:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:23:19 --> Pagination Class Initialized
INFO - 2021-01-20 04:23:19 --> Form Validation Class Initialized
INFO - 2021-01-20 04:23:19 --> Controller Class Initialized
INFO - 2021-01-20 04:23:19 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:23:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:23:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:23:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:23:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:23:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:23:19 --> Final output sent to browser
INFO - 2021-01-20 04:24:40 --> Config Class Initialized
INFO - 2021-01-20 04:24:40 --> Hooks Class Initialized
INFO - 2021-01-20 04:24:40 --> Utf8 Class Initialized
INFO - 2021-01-20 04:24:40 --> URI Class Initialized
INFO - 2021-01-20 04:24:40 --> Router Class Initialized
INFO - 2021-01-20 04:24:40 --> Output Class Initialized
INFO - 2021-01-20 04:24:40 --> Security Class Initialized
INFO - 2021-01-20 04:24:40 --> Input Class Initialized
INFO - 2021-01-20 04:24:40 --> Language Class Initialized
INFO - 2021-01-20 04:24:40 --> Loader Class Initialized
INFO - 2021-01-20 04:24:40 --> Helper loaded: url_helper
INFO - 2021-01-20 04:24:40 --> Helper loaded: file_helper
INFO - 2021-01-20 04:24:40 --> Helper loaded: security_helper
INFO - 2021-01-20 04:24:40 --> Helper loaded: form_helper
INFO - 2021-01-20 04:24:40 --> Helper loaded: access_helper
INFO - 2021-01-20 04:24:40 --> Helper loaded: date_helper
INFO - 2021-01-20 04:24:40 --> Database Driver Class Initialized
INFO - 2021-01-20 04:24:40 --> User Agent Class Initialized
INFO - 2021-01-20 04:24:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:24:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:24:40 --> Pagination Class Initialized
INFO - 2021-01-20 04:24:40 --> Form Validation Class Initialized
INFO - 2021-01-20 04:24:40 --> Controller Class Initialized
INFO - 2021-01-20 04:24:40 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:24:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:24:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:24:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:24:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:24:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:24:40 --> Final output sent to browser
INFO - 2021-01-20 04:24:42 --> Config Class Initialized
INFO - 2021-01-20 04:24:42 --> Hooks Class Initialized
INFO - 2021-01-20 04:24:42 --> Utf8 Class Initialized
INFO - 2021-01-20 04:24:42 --> URI Class Initialized
INFO - 2021-01-20 04:24:42 --> Router Class Initialized
INFO - 2021-01-20 04:24:42 --> Output Class Initialized
INFO - 2021-01-20 04:24:42 --> Security Class Initialized
INFO - 2021-01-20 04:24:42 --> Input Class Initialized
INFO - 2021-01-20 04:24:42 --> Language Class Initialized
INFO - 2021-01-20 04:24:42 --> Loader Class Initialized
INFO - 2021-01-20 04:24:42 --> Helper loaded: url_helper
INFO - 2021-01-20 04:24:42 --> Helper loaded: file_helper
INFO - 2021-01-20 04:24:42 --> Helper loaded: security_helper
INFO - 2021-01-20 04:24:42 --> Helper loaded: form_helper
INFO - 2021-01-20 04:24:42 --> Helper loaded: access_helper
INFO - 2021-01-20 04:24:42 --> Helper loaded: date_helper
INFO - 2021-01-20 04:24:42 --> Database Driver Class Initialized
INFO - 2021-01-20 04:24:42 --> User Agent Class Initialized
INFO - 2021-01-20 04:24:42 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:24:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:24:42 --> Pagination Class Initialized
INFO - 2021-01-20 04:24:42 --> Form Validation Class Initialized
INFO - 2021-01-20 04:24:42 --> Controller Class Initialized
INFO - 2021-01-20 04:24:42 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:24:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:24:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:24:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:24:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:24:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:24:42 --> Final output sent to browser
INFO - 2021-01-20 04:24:44 --> Config Class Initialized
INFO - 2021-01-20 04:24:44 --> Hooks Class Initialized
INFO - 2021-01-20 04:24:44 --> Utf8 Class Initialized
INFO - 2021-01-20 04:24:44 --> URI Class Initialized
INFO - 2021-01-20 04:24:44 --> Router Class Initialized
INFO - 2021-01-20 04:24:44 --> Output Class Initialized
INFO - 2021-01-20 04:24:44 --> Security Class Initialized
INFO - 2021-01-20 04:24:44 --> Input Class Initialized
INFO - 2021-01-20 04:24:44 --> Language Class Initialized
INFO - 2021-01-20 04:24:44 --> Loader Class Initialized
INFO - 2021-01-20 04:24:44 --> Helper loaded: url_helper
INFO - 2021-01-20 04:24:44 --> Helper loaded: file_helper
INFO - 2021-01-20 04:24:44 --> Helper loaded: security_helper
INFO - 2021-01-20 04:24:44 --> Helper loaded: form_helper
INFO - 2021-01-20 04:24:44 --> Helper loaded: access_helper
INFO - 2021-01-20 04:24:44 --> Helper loaded: date_helper
INFO - 2021-01-20 04:24:44 --> Database Driver Class Initialized
INFO - 2021-01-20 04:24:44 --> User Agent Class Initialized
INFO - 2021-01-20 04:24:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:24:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:24:44 --> Pagination Class Initialized
INFO - 2021-01-20 04:24:44 --> Form Validation Class Initialized
INFO - 2021-01-20 04:24:44 --> Controller Class Initialized
INFO - 2021-01-20 04:24:44 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:24:44 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:24:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:24:44 --> Final output sent to browser
INFO - 2021-01-20 04:24:46 --> Config Class Initialized
INFO - 2021-01-20 04:24:46 --> Hooks Class Initialized
INFO - 2021-01-20 04:24:46 --> Utf8 Class Initialized
INFO - 2021-01-20 04:24:46 --> URI Class Initialized
INFO - 2021-01-20 04:24:46 --> Router Class Initialized
INFO - 2021-01-20 04:24:46 --> Output Class Initialized
INFO - 2021-01-20 04:24:46 --> Security Class Initialized
INFO - 2021-01-20 04:24:46 --> Input Class Initialized
INFO - 2021-01-20 04:24:46 --> Language Class Initialized
INFO - 2021-01-20 04:24:46 --> Loader Class Initialized
INFO - 2021-01-20 04:24:46 --> Helper loaded: url_helper
INFO - 2021-01-20 04:24:46 --> Helper loaded: file_helper
INFO - 2021-01-20 04:24:46 --> Helper loaded: security_helper
INFO - 2021-01-20 04:24:46 --> Helper loaded: form_helper
INFO - 2021-01-20 04:24:46 --> Helper loaded: access_helper
INFO - 2021-01-20 04:24:46 --> Helper loaded: date_helper
INFO - 2021-01-20 04:24:46 --> Database Driver Class Initialized
INFO - 2021-01-20 04:24:46 --> User Agent Class Initialized
INFO - 2021-01-20 04:24:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:24:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:24:46 --> Pagination Class Initialized
INFO - 2021-01-20 04:24:46 --> Form Validation Class Initialized
INFO - 2021-01-20 04:24:46 --> Controller Class Initialized
INFO - 2021-01-20 04:24:46 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:24:46 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:24:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:24:46 --> Final output sent to browser
INFO - 2021-01-20 04:24:48 --> Config Class Initialized
INFO - 2021-01-20 04:24:48 --> Hooks Class Initialized
INFO - 2021-01-20 04:24:48 --> Utf8 Class Initialized
INFO - 2021-01-20 04:24:48 --> URI Class Initialized
INFO - 2021-01-20 04:24:48 --> Router Class Initialized
INFO - 2021-01-20 04:24:48 --> Output Class Initialized
INFO - 2021-01-20 04:24:48 --> Security Class Initialized
INFO - 2021-01-20 04:24:48 --> Input Class Initialized
INFO - 2021-01-20 04:24:48 --> Language Class Initialized
INFO - 2021-01-20 04:24:48 --> Loader Class Initialized
INFO - 2021-01-20 04:24:48 --> Helper loaded: url_helper
INFO - 2021-01-20 04:24:48 --> Helper loaded: file_helper
INFO - 2021-01-20 04:24:48 --> Helper loaded: security_helper
INFO - 2021-01-20 04:24:48 --> Helper loaded: form_helper
INFO - 2021-01-20 04:24:48 --> Helper loaded: access_helper
INFO - 2021-01-20 04:24:48 --> Helper loaded: date_helper
INFO - 2021-01-20 04:24:48 --> Database Driver Class Initialized
INFO - 2021-01-20 04:24:48 --> User Agent Class Initialized
INFO - 2021-01-20 04:24:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:24:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:24:48 --> Pagination Class Initialized
INFO - 2021-01-20 04:24:48 --> Form Validation Class Initialized
INFO - 2021-01-20 04:24:48 --> Controller Class Initialized
INFO - 2021-01-20 04:24:48 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:24:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:24:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:24:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:24:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:24:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:24:48 --> Final output sent to browser
INFO - 2021-01-20 04:24:50 --> Config Class Initialized
INFO - 2021-01-20 04:24:50 --> Hooks Class Initialized
INFO - 2021-01-20 04:24:50 --> Utf8 Class Initialized
INFO - 2021-01-20 04:24:50 --> URI Class Initialized
INFO - 2021-01-20 04:24:50 --> Router Class Initialized
INFO - 2021-01-20 04:24:50 --> Output Class Initialized
INFO - 2021-01-20 04:24:50 --> Security Class Initialized
INFO - 2021-01-20 04:24:50 --> Input Class Initialized
INFO - 2021-01-20 04:24:50 --> Language Class Initialized
INFO - 2021-01-20 04:24:50 --> Loader Class Initialized
INFO - 2021-01-20 04:24:50 --> Helper loaded: url_helper
INFO - 2021-01-20 04:24:50 --> Helper loaded: file_helper
INFO - 2021-01-20 04:24:50 --> Helper loaded: security_helper
INFO - 2021-01-20 04:24:50 --> Helper loaded: form_helper
INFO - 2021-01-20 04:24:50 --> Helper loaded: access_helper
INFO - 2021-01-20 04:24:50 --> Helper loaded: date_helper
INFO - 2021-01-20 04:24:50 --> Database Driver Class Initialized
INFO - 2021-01-20 04:24:50 --> User Agent Class Initialized
INFO - 2021-01-20 04:24:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:24:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:24:50 --> Pagination Class Initialized
INFO - 2021-01-20 04:24:50 --> Form Validation Class Initialized
INFO - 2021-01-20 04:24:50 --> Controller Class Initialized
INFO - 2021-01-20 04:24:50 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:24:50 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:24:50 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:24:50 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:24:50 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:24:50 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:24:50 --> Final output sent to browser
INFO - 2021-01-20 04:25:44 --> Config Class Initialized
INFO - 2021-01-20 04:25:44 --> Hooks Class Initialized
INFO - 2021-01-20 04:25:44 --> Utf8 Class Initialized
INFO - 2021-01-20 04:25:44 --> URI Class Initialized
INFO - 2021-01-20 04:25:44 --> Router Class Initialized
INFO - 2021-01-20 04:25:44 --> Output Class Initialized
INFO - 2021-01-20 04:25:44 --> Security Class Initialized
INFO - 2021-01-20 04:25:44 --> Input Class Initialized
INFO - 2021-01-20 04:25:44 --> Language Class Initialized
INFO - 2021-01-20 04:25:44 --> Loader Class Initialized
INFO - 2021-01-20 04:25:44 --> Helper loaded: url_helper
INFO - 2021-01-20 04:25:44 --> Helper loaded: file_helper
INFO - 2021-01-20 04:25:44 --> Helper loaded: security_helper
INFO - 2021-01-20 04:25:44 --> Helper loaded: form_helper
INFO - 2021-01-20 04:25:44 --> Helper loaded: access_helper
INFO - 2021-01-20 04:25:44 --> Helper loaded: date_helper
INFO - 2021-01-20 04:25:44 --> Database Driver Class Initialized
INFO - 2021-01-20 04:25:44 --> User Agent Class Initialized
INFO - 2021-01-20 04:25:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:25:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:25:44 --> Pagination Class Initialized
INFO - 2021-01-20 04:25:44 --> Form Validation Class Initialized
INFO - 2021-01-20 04:25:44 --> Controller Class Initialized
INFO - 2021-01-20 04:25:44 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:25:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:25:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:25:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:25:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:25:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:25:44 --> Final output sent to browser
INFO - 2021-01-20 04:25:46 --> Config Class Initialized
INFO - 2021-01-20 04:25:46 --> Hooks Class Initialized
INFO - 2021-01-20 04:25:46 --> Utf8 Class Initialized
INFO - 2021-01-20 04:25:46 --> URI Class Initialized
INFO - 2021-01-20 04:25:46 --> Router Class Initialized
INFO - 2021-01-20 04:25:46 --> Output Class Initialized
INFO - 2021-01-20 04:25:46 --> Security Class Initialized
INFO - 2021-01-20 04:25:46 --> Input Class Initialized
INFO - 2021-01-20 04:25:46 --> Language Class Initialized
INFO - 2021-01-20 04:25:46 --> Loader Class Initialized
INFO - 2021-01-20 04:25:46 --> Helper loaded: url_helper
INFO - 2021-01-20 04:25:46 --> Helper loaded: file_helper
INFO - 2021-01-20 04:25:46 --> Helper loaded: security_helper
INFO - 2021-01-20 04:25:46 --> Helper loaded: form_helper
INFO - 2021-01-20 04:25:46 --> Helper loaded: access_helper
INFO - 2021-01-20 04:25:46 --> Helper loaded: date_helper
INFO - 2021-01-20 04:25:46 --> Database Driver Class Initialized
INFO - 2021-01-20 04:25:46 --> User Agent Class Initialized
INFO - 2021-01-20 04:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:25:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:25:46 --> Pagination Class Initialized
INFO - 2021-01-20 04:25:46 --> Form Validation Class Initialized
INFO - 2021-01-20 04:25:46 --> Controller Class Initialized
INFO - 2021-01-20 04:25:46 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:25:46 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:25:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:25:46 --> Final output sent to browser
INFO - 2021-01-20 04:25:52 --> Config Class Initialized
INFO - 2021-01-20 04:25:52 --> Hooks Class Initialized
INFO - 2021-01-20 04:25:52 --> Utf8 Class Initialized
INFO - 2021-01-20 04:25:52 --> URI Class Initialized
INFO - 2021-01-20 04:25:52 --> Router Class Initialized
INFO - 2021-01-20 04:25:52 --> Output Class Initialized
INFO - 2021-01-20 04:25:52 --> Security Class Initialized
INFO - 2021-01-20 04:25:52 --> Input Class Initialized
INFO - 2021-01-20 04:25:52 --> Language Class Initialized
INFO - 2021-01-20 04:25:52 --> Loader Class Initialized
INFO - 2021-01-20 04:25:52 --> Helper loaded: url_helper
INFO - 2021-01-20 04:25:52 --> Helper loaded: file_helper
INFO - 2021-01-20 04:25:52 --> Helper loaded: security_helper
INFO - 2021-01-20 04:25:52 --> Helper loaded: form_helper
INFO - 2021-01-20 04:25:52 --> Helper loaded: access_helper
INFO - 2021-01-20 04:25:52 --> Helper loaded: date_helper
INFO - 2021-01-20 04:25:52 --> Database Driver Class Initialized
INFO - 2021-01-20 04:25:52 --> User Agent Class Initialized
INFO - 2021-01-20 04:25:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:25:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:25:52 --> Pagination Class Initialized
INFO - 2021-01-20 04:25:52 --> Form Validation Class Initialized
INFO - 2021-01-20 04:25:52 --> Controller Class Initialized
INFO - 2021-01-20 04:25:52 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:25:52 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:25:52 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:25:52 --> Final output sent to browser
INFO - 2021-01-20 04:25:54 --> Config Class Initialized
INFO - 2021-01-20 04:25:54 --> Hooks Class Initialized
INFO - 2021-01-20 04:25:54 --> Utf8 Class Initialized
INFO - 2021-01-20 04:25:54 --> URI Class Initialized
INFO - 2021-01-20 04:25:54 --> Router Class Initialized
INFO - 2021-01-20 04:25:54 --> Output Class Initialized
INFO - 2021-01-20 04:25:54 --> Security Class Initialized
INFO - 2021-01-20 04:25:54 --> Input Class Initialized
INFO - 2021-01-20 04:25:54 --> Language Class Initialized
INFO - 2021-01-20 04:25:54 --> Loader Class Initialized
INFO - 2021-01-20 04:25:54 --> Helper loaded: url_helper
INFO - 2021-01-20 04:25:54 --> Helper loaded: file_helper
INFO - 2021-01-20 04:25:54 --> Helper loaded: security_helper
INFO - 2021-01-20 04:25:54 --> Helper loaded: form_helper
INFO - 2021-01-20 04:25:54 --> Helper loaded: access_helper
INFO - 2021-01-20 04:25:54 --> Helper loaded: date_helper
INFO - 2021-01-20 04:25:54 --> Database Driver Class Initialized
INFO - 2021-01-20 04:25:54 --> User Agent Class Initialized
INFO - 2021-01-20 04:25:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:25:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:25:54 --> Pagination Class Initialized
INFO - 2021-01-20 04:25:54 --> Form Validation Class Initialized
INFO - 2021-01-20 04:25:54 --> Controller Class Initialized
INFO - 2021-01-20 04:25:54 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:25:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:25:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:25:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:25:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:25:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:25:54 --> Final output sent to browser
INFO - 2021-01-20 04:25:56 --> Config Class Initialized
INFO - 2021-01-20 04:25:56 --> Hooks Class Initialized
INFO - 2021-01-20 04:25:56 --> Utf8 Class Initialized
INFO - 2021-01-20 04:25:56 --> URI Class Initialized
INFO - 2021-01-20 04:25:56 --> Router Class Initialized
INFO - 2021-01-20 04:25:56 --> Output Class Initialized
INFO - 2021-01-20 04:25:56 --> Security Class Initialized
INFO - 2021-01-20 04:25:56 --> Input Class Initialized
INFO - 2021-01-20 04:25:56 --> Language Class Initialized
INFO - 2021-01-20 04:25:56 --> Loader Class Initialized
INFO - 2021-01-20 04:25:56 --> Helper loaded: url_helper
INFO - 2021-01-20 04:25:56 --> Helper loaded: file_helper
INFO - 2021-01-20 04:25:56 --> Helper loaded: security_helper
INFO - 2021-01-20 04:25:56 --> Helper loaded: form_helper
INFO - 2021-01-20 04:25:56 --> Helper loaded: access_helper
INFO - 2021-01-20 04:25:56 --> Helper loaded: date_helper
INFO - 2021-01-20 04:25:56 --> Database Driver Class Initialized
INFO - 2021-01-20 04:25:56 --> User Agent Class Initialized
INFO - 2021-01-20 04:25:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:25:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:25:56 --> Pagination Class Initialized
INFO - 2021-01-20 04:25:56 --> Form Validation Class Initialized
INFO - 2021-01-20 04:25:56 --> Controller Class Initialized
INFO - 2021-01-20 04:25:56 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:25:56 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:25:56 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:25:56 --> Final output sent to browser
INFO - 2021-01-20 04:25:58 --> Config Class Initialized
INFO - 2021-01-20 04:25:58 --> Hooks Class Initialized
INFO - 2021-01-20 04:25:58 --> Utf8 Class Initialized
INFO - 2021-01-20 04:25:58 --> URI Class Initialized
INFO - 2021-01-20 04:25:58 --> Router Class Initialized
INFO - 2021-01-20 04:25:58 --> Output Class Initialized
INFO - 2021-01-20 04:25:58 --> Security Class Initialized
INFO - 2021-01-20 04:25:58 --> Input Class Initialized
INFO - 2021-01-20 04:25:58 --> Language Class Initialized
INFO - 2021-01-20 04:25:58 --> Loader Class Initialized
INFO - 2021-01-20 04:25:58 --> Helper loaded: url_helper
INFO - 2021-01-20 04:25:58 --> Helper loaded: file_helper
INFO - 2021-01-20 04:25:58 --> Helper loaded: security_helper
INFO - 2021-01-20 04:25:58 --> Helper loaded: form_helper
INFO - 2021-01-20 04:25:58 --> Helper loaded: access_helper
INFO - 2021-01-20 04:25:58 --> Helper loaded: date_helper
INFO - 2021-01-20 04:25:58 --> Database Driver Class Initialized
INFO - 2021-01-20 04:25:58 --> User Agent Class Initialized
INFO - 2021-01-20 04:25:58 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:25:58 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:25:58 --> Pagination Class Initialized
INFO - 2021-01-20 04:25:58 --> Form Validation Class Initialized
INFO - 2021-01-20 04:25:58 --> Controller Class Initialized
INFO - 2021-01-20 04:25:58 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:25:58 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:25:58 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:25:58 --> Final output sent to browser
INFO - 2021-01-20 04:25:59 --> Config Class Initialized
INFO - 2021-01-20 04:25:59 --> Hooks Class Initialized
INFO - 2021-01-20 04:25:59 --> Utf8 Class Initialized
INFO - 2021-01-20 04:25:59 --> URI Class Initialized
INFO - 2021-01-20 04:25:59 --> Router Class Initialized
INFO - 2021-01-20 04:25:59 --> Output Class Initialized
INFO - 2021-01-20 04:25:59 --> Security Class Initialized
INFO - 2021-01-20 04:25:59 --> Input Class Initialized
INFO - 2021-01-20 04:25:59 --> Language Class Initialized
INFO - 2021-01-20 04:26:00 --> Loader Class Initialized
INFO - 2021-01-20 04:26:00 --> Helper loaded: url_helper
INFO - 2021-01-20 04:26:00 --> Helper loaded: file_helper
INFO - 2021-01-20 04:26:00 --> Helper loaded: security_helper
INFO - 2021-01-20 04:26:00 --> Helper loaded: form_helper
INFO - 2021-01-20 04:26:00 --> Helper loaded: access_helper
INFO - 2021-01-20 04:26:00 --> Helper loaded: date_helper
INFO - 2021-01-20 04:26:00 --> Database Driver Class Initialized
INFO - 2021-01-20 04:26:00 --> User Agent Class Initialized
INFO - 2021-01-20 04:26:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:26:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:26:00 --> Pagination Class Initialized
INFO - 2021-01-20 04:26:00 --> Form Validation Class Initialized
INFO - 2021-01-20 04:26:00 --> Controller Class Initialized
INFO - 2021-01-20 04:26:00 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:26:00 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:26:00 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:26:00 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:26:00 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/edit_pasien.php
INFO - 2021-01-20 04:26:00 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:26:00 --> Final output sent to browser
INFO - 2021-01-20 04:26:01 --> Config Class Initialized
INFO - 2021-01-20 04:26:01 --> Hooks Class Initialized
INFO - 2021-01-20 04:26:01 --> Utf8 Class Initialized
INFO - 2021-01-20 04:26:01 --> URI Class Initialized
INFO - 2021-01-20 04:26:01 --> Router Class Initialized
INFO - 2021-01-20 04:26:01 --> Output Class Initialized
INFO - 2021-01-20 04:26:01 --> Security Class Initialized
INFO - 2021-01-20 04:26:01 --> Input Class Initialized
INFO - 2021-01-20 04:26:01 --> Language Class Initialized
INFO - 2021-01-20 04:26:01 --> Loader Class Initialized
INFO - 2021-01-20 04:26:01 --> Helper loaded: url_helper
INFO - 2021-01-20 04:26:01 --> Helper loaded: file_helper
INFO - 2021-01-20 04:26:01 --> Helper loaded: security_helper
INFO - 2021-01-20 04:26:01 --> Helper loaded: form_helper
INFO - 2021-01-20 04:26:01 --> Helper loaded: access_helper
INFO - 2021-01-20 04:26:01 --> Helper loaded: date_helper
INFO - 2021-01-20 04:26:01 --> Database Driver Class Initialized
INFO - 2021-01-20 04:26:01 --> User Agent Class Initialized
INFO - 2021-01-20 04:26:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:26:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:26:01 --> Pagination Class Initialized
INFO - 2021-01-20 04:26:01 --> Form Validation Class Initialized
INFO - 2021-01-20 04:26:01 --> Controller Class Initialized
INFO - 2021-01-20 04:26:01 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:26:01 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:26:01 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:26:01 --> Final output sent to browser
INFO - 2021-01-20 04:26:03 --> Config Class Initialized
INFO - 2021-01-20 04:26:03 --> Hooks Class Initialized
INFO - 2021-01-20 04:26:03 --> Utf8 Class Initialized
INFO - 2021-01-20 04:26:03 --> URI Class Initialized
INFO - 2021-01-20 04:26:03 --> Router Class Initialized
INFO - 2021-01-20 04:26:03 --> Output Class Initialized
INFO - 2021-01-20 04:26:03 --> Security Class Initialized
INFO - 2021-01-20 04:26:03 --> Input Class Initialized
INFO - 2021-01-20 04:26:03 --> Language Class Initialized
ERROR - 2021-01-20 04:26:03 --> 404 Page Not Found: 5/index
INFO - 2021-01-20 04:27:03 --> Config Class Initialized
INFO - 2021-01-20 04:27:03 --> Hooks Class Initialized
INFO - 2021-01-20 04:27:03 --> Utf8 Class Initialized
INFO - 2021-01-20 04:27:03 --> URI Class Initialized
INFO - 2021-01-20 04:27:03 --> Router Class Initialized
INFO - 2021-01-20 04:27:03 --> Output Class Initialized
INFO - 2021-01-20 04:27:03 --> Security Class Initialized
INFO - 2021-01-20 04:27:03 --> Input Class Initialized
INFO - 2021-01-20 04:27:03 --> Language Class Initialized
ERROR - 2021-01-20 04:27:03 --> 404 Page Not Found: 5/index
INFO - 2021-01-20 04:27:05 --> Config Class Initialized
INFO - 2021-01-20 04:27:05 --> Hooks Class Initialized
INFO - 2021-01-20 04:27:05 --> Utf8 Class Initialized
INFO - 2021-01-20 04:27:05 --> URI Class Initialized
INFO - 2021-01-20 04:27:05 --> Router Class Initialized
INFO - 2021-01-20 04:27:05 --> Output Class Initialized
INFO - 2021-01-20 04:27:05 --> Security Class Initialized
INFO - 2021-01-20 04:27:05 --> Input Class Initialized
INFO - 2021-01-20 04:27:05 --> Language Class Initialized
INFO - 2021-01-20 04:27:05 --> Loader Class Initialized
INFO - 2021-01-20 04:27:05 --> Helper loaded: url_helper
INFO - 2021-01-20 04:27:05 --> Helper loaded: file_helper
INFO - 2021-01-20 04:27:05 --> Helper loaded: security_helper
INFO - 2021-01-20 04:27:05 --> Helper loaded: form_helper
INFO - 2021-01-20 04:27:05 --> Helper loaded: access_helper
INFO - 2021-01-20 04:27:05 --> Helper loaded: date_helper
INFO - 2021-01-20 04:27:05 --> Database Driver Class Initialized
INFO - 2021-01-20 04:27:05 --> User Agent Class Initialized
INFO - 2021-01-20 04:27:05 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:27:05 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:27:05 --> Pagination Class Initialized
INFO - 2021-01-20 04:27:05 --> Form Validation Class Initialized
INFO - 2021-01-20 04:27:05 --> Controller Class Initialized
INFO - 2021-01-20 04:27:05 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:27:05 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:27:05 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:27:05 --> Final output sent to browser
INFO - 2021-01-20 04:27:07 --> Config Class Initialized
INFO - 2021-01-20 04:27:07 --> Hooks Class Initialized
INFO - 2021-01-20 04:27:07 --> Utf8 Class Initialized
INFO - 2021-01-20 04:27:07 --> URI Class Initialized
INFO - 2021-01-20 04:27:07 --> Router Class Initialized
INFO - 2021-01-20 04:27:07 --> Output Class Initialized
INFO - 2021-01-20 04:27:07 --> Security Class Initialized
INFO - 2021-01-20 04:27:07 --> Input Class Initialized
INFO - 2021-01-20 04:27:07 --> Language Class Initialized
INFO - 2021-01-20 04:27:07 --> Loader Class Initialized
INFO - 2021-01-20 04:27:07 --> Helper loaded: url_helper
INFO - 2021-01-20 04:27:07 --> Helper loaded: file_helper
INFO - 2021-01-20 04:27:07 --> Helper loaded: security_helper
INFO - 2021-01-20 04:27:07 --> Helper loaded: form_helper
INFO - 2021-01-20 04:27:07 --> Helper loaded: access_helper
INFO - 2021-01-20 04:27:07 --> Helper loaded: date_helper
INFO - 2021-01-20 04:27:07 --> Database Driver Class Initialized
INFO - 2021-01-20 04:27:07 --> User Agent Class Initialized
INFO - 2021-01-20 04:27:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:27:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:27:07 --> Pagination Class Initialized
INFO - 2021-01-20 04:27:07 --> Form Validation Class Initialized
INFO - 2021-01-20 04:27:07 --> Controller Class Initialized
INFO - 2021-01-20 04:27:07 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:27:07 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:27:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:27:07 --> Final output sent to browser
INFO - 2021-01-20 04:27:09 --> Config Class Initialized
INFO - 2021-01-20 04:27:09 --> Hooks Class Initialized
INFO - 2021-01-20 04:27:09 --> Utf8 Class Initialized
INFO - 2021-01-20 04:27:09 --> URI Class Initialized
INFO - 2021-01-20 04:27:09 --> Router Class Initialized
INFO - 2021-01-20 04:27:09 --> Output Class Initialized
INFO - 2021-01-20 04:27:09 --> Security Class Initialized
INFO - 2021-01-20 04:27:09 --> Input Class Initialized
INFO - 2021-01-20 04:27:09 --> Language Class Initialized
ERROR - 2021-01-20 04:27:09 --> 404 Page Not Found: Detail/5
INFO - 2021-01-20 04:28:05 --> Config Class Initialized
INFO - 2021-01-20 04:28:05 --> Hooks Class Initialized
INFO - 2021-01-20 04:28:05 --> Utf8 Class Initialized
INFO - 2021-01-20 04:28:05 --> URI Class Initialized
INFO - 2021-01-20 04:28:05 --> Router Class Initialized
INFO - 2021-01-20 04:28:05 --> Output Class Initialized
INFO - 2021-01-20 04:28:05 --> Security Class Initialized
INFO - 2021-01-20 04:28:05 --> Input Class Initialized
INFO - 2021-01-20 04:28:05 --> Language Class Initialized
ERROR - 2021-01-20 04:28:05 --> 404 Page Not Found: Detail/5
INFO - 2021-01-20 04:28:06 --> Config Class Initialized
INFO - 2021-01-20 04:28:06 --> Hooks Class Initialized
INFO - 2021-01-20 04:28:06 --> Utf8 Class Initialized
INFO - 2021-01-20 04:28:06 --> URI Class Initialized
INFO - 2021-01-20 04:28:06 --> Router Class Initialized
INFO - 2021-01-20 04:28:06 --> Output Class Initialized
INFO - 2021-01-20 04:28:06 --> Security Class Initialized
INFO - 2021-01-20 04:28:06 --> Input Class Initialized
INFO - 2021-01-20 04:28:06 --> Language Class Initialized
ERROR - 2021-01-20 04:28:06 --> 404 Page Not Found: Detail/5
INFO - 2021-01-20 04:28:21 --> Config Class Initialized
INFO - 2021-01-20 04:28:21 --> Hooks Class Initialized
INFO - 2021-01-20 04:28:21 --> Utf8 Class Initialized
INFO - 2021-01-20 04:28:21 --> URI Class Initialized
INFO - 2021-01-20 04:28:21 --> Router Class Initialized
INFO - 2021-01-20 04:28:21 --> Output Class Initialized
INFO - 2021-01-20 04:28:21 --> Security Class Initialized
INFO - 2021-01-20 04:28:21 --> Input Class Initialized
INFO - 2021-01-20 04:28:21 --> Language Class Initialized
ERROR - 2021-01-20 04:28:21 --> 404 Page Not Found: Detail/5
INFO - 2021-01-20 04:28:38 --> Config Class Initialized
INFO - 2021-01-20 04:28:38 --> Hooks Class Initialized
INFO - 2021-01-20 04:28:38 --> Utf8 Class Initialized
INFO - 2021-01-20 04:28:38 --> URI Class Initialized
INFO - 2021-01-20 04:28:38 --> Router Class Initialized
INFO - 2021-01-20 04:28:38 --> Output Class Initialized
INFO - 2021-01-20 04:28:38 --> Security Class Initialized
INFO - 2021-01-20 04:28:38 --> Input Class Initialized
INFO - 2021-01-20 04:28:38 --> Language Class Initialized
INFO - 2021-01-20 04:28:38 --> Loader Class Initialized
INFO - 2021-01-20 04:28:38 --> Helper loaded: url_helper
INFO - 2021-01-20 04:28:38 --> Helper loaded: file_helper
INFO - 2021-01-20 04:28:38 --> Helper loaded: security_helper
INFO - 2021-01-20 04:28:38 --> Helper loaded: form_helper
INFO - 2021-01-20 04:28:38 --> Helper loaded: access_helper
INFO - 2021-01-20 04:28:38 --> Helper loaded: date_helper
INFO - 2021-01-20 04:28:38 --> Database Driver Class Initialized
INFO - 2021-01-20 04:28:38 --> User Agent Class Initialized
INFO - 2021-01-20 04:28:38 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:28:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:28:38 --> Pagination Class Initialized
INFO - 2021-01-20 04:28:38 --> Form Validation Class Initialized
INFO - 2021-01-20 04:28:38 --> Controller Class Initialized
INFO - 2021-01-20 04:28:38 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:28:38 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:28:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:28:38 --> Final output sent to browser
INFO - 2021-01-20 04:28:39 --> Config Class Initialized
INFO - 2021-01-20 04:28:39 --> Hooks Class Initialized
INFO - 2021-01-20 04:28:39 --> Utf8 Class Initialized
INFO - 2021-01-20 04:28:39 --> URI Class Initialized
INFO - 2021-01-20 04:28:39 --> Router Class Initialized
INFO - 2021-01-20 04:28:39 --> Output Class Initialized
INFO - 2021-01-20 04:28:39 --> Security Class Initialized
INFO - 2021-01-20 04:28:39 --> Input Class Initialized
INFO - 2021-01-20 04:28:39 --> Language Class Initialized
INFO - 2021-01-20 04:28:39 --> Loader Class Initialized
INFO - 2021-01-20 04:28:39 --> Helper loaded: url_helper
INFO - 2021-01-20 04:28:39 --> Helper loaded: file_helper
INFO - 2021-01-20 04:28:39 --> Helper loaded: security_helper
INFO - 2021-01-20 04:28:39 --> Helper loaded: form_helper
INFO - 2021-01-20 04:28:39 --> Helper loaded: access_helper
INFO - 2021-01-20 04:28:39 --> Helper loaded: date_helper
INFO - 2021-01-20 04:28:39 --> Database Driver Class Initialized
INFO - 2021-01-20 04:28:39 --> User Agent Class Initialized
INFO - 2021-01-20 04:28:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:28:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:28:39 --> Pagination Class Initialized
INFO - 2021-01-20 04:28:39 --> Form Validation Class Initialized
INFO - 2021-01-20 04:28:39 --> Controller Class Initialized
INFO - 2021-01-20 04:28:39 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:28:39 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:28:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:28:39 --> Final output sent to browser
INFO - 2021-01-20 04:28:41 --> Config Class Initialized
INFO - 2021-01-20 04:28:41 --> Hooks Class Initialized
INFO - 2021-01-20 04:28:41 --> Utf8 Class Initialized
INFO - 2021-01-20 04:28:41 --> URI Class Initialized
INFO - 2021-01-20 04:28:41 --> Router Class Initialized
INFO - 2021-01-20 04:28:41 --> Output Class Initialized
INFO - 2021-01-20 04:28:41 --> Security Class Initialized
INFO - 2021-01-20 04:28:41 --> Input Class Initialized
INFO - 2021-01-20 04:28:41 --> Language Class Initialized
INFO - 2021-01-20 04:28:41 --> Loader Class Initialized
INFO - 2021-01-20 04:28:41 --> Helper loaded: url_helper
INFO - 2021-01-20 04:28:41 --> Helper loaded: file_helper
INFO - 2021-01-20 04:28:41 --> Helper loaded: security_helper
INFO - 2021-01-20 04:28:41 --> Helper loaded: form_helper
INFO - 2021-01-20 04:28:41 --> Helper loaded: access_helper
INFO - 2021-01-20 04:28:41 --> Helper loaded: date_helper
INFO - 2021-01-20 04:28:41 --> Database Driver Class Initialized
INFO - 2021-01-20 04:28:41 --> User Agent Class Initialized
INFO - 2021-01-20 04:28:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:28:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:28:41 --> Pagination Class Initialized
INFO - 2021-01-20 04:28:41 --> Form Validation Class Initialized
INFO - 2021-01-20 04:28:41 --> Controller Class Initialized
INFO - 2021-01-20 04:28:41 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:28:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:28:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:28:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:28:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/detail_pasien.php
INFO - 2021-01-20 04:28:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:28:41 --> Final output sent to browser
INFO - 2021-01-20 04:30:13 --> Config Class Initialized
INFO - 2021-01-20 04:30:13 --> Hooks Class Initialized
INFO - 2021-01-20 04:30:13 --> Utf8 Class Initialized
INFO - 2021-01-20 04:30:13 --> URI Class Initialized
INFO - 2021-01-20 04:30:13 --> Router Class Initialized
INFO - 2021-01-20 04:30:13 --> Output Class Initialized
INFO - 2021-01-20 04:30:13 --> Security Class Initialized
INFO - 2021-01-20 04:30:13 --> Input Class Initialized
INFO - 2021-01-20 04:30:13 --> Language Class Initialized
INFO - 2021-01-20 04:30:13 --> Loader Class Initialized
INFO - 2021-01-20 04:30:13 --> Helper loaded: url_helper
INFO - 2021-01-20 04:30:13 --> Helper loaded: file_helper
INFO - 2021-01-20 04:30:13 --> Helper loaded: security_helper
INFO - 2021-01-20 04:30:13 --> Helper loaded: form_helper
INFO - 2021-01-20 04:30:13 --> Helper loaded: access_helper
INFO - 2021-01-20 04:30:13 --> Helper loaded: date_helper
INFO - 2021-01-20 04:30:13 --> Database Driver Class Initialized
INFO - 2021-01-20 04:30:13 --> User Agent Class Initialized
INFO - 2021-01-20 04:30:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:30:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:30:13 --> Pagination Class Initialized
INFO - 2021-01-20 04:30:13 --> Form Validation Class Initialized
INFO - 2021-01-20 04:30:13 --> Controller Class Initialized
INFO - 2021-01-20 04:30:13 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:30:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:30:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:30:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:30:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/detail_pasien.php
INFO - 2021-01-20 04:30:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:30:13 --> Final output sent to browser
INFO - 2021-01-20 04:30:42 --> Config Class Initialized
INFO - 2021-01-20 04:30:42 --> Hooks Class Initialized
INFO - 2021-01-20 04:30:42 --> Utf8 Class Initialized
INFO - 2021-01-20 04:30:42 --> URI Class Initialized
INFO - 2021-01-20 04:30:42 --> Router Class Initialized
INFO - 2021-01-20 04:30:42 --> Output Class Initialized
INFO - 2021-01-20 04:30:42 --> Security Class Initialized
INFO - 2021-01-20 04:30:42 --> Input Class Initialized
INFO - 2021-01-20 04:30:42 --> Language Class Initialized
INFO - 2021-01-20 04:30:42 --> Loader Class Initialized
INFO - 2021-01-20 04:30:42 --> Helper loaded: url_helper
INFO - 2021-01-20 04:30:42 --> Helper loaded: file_helper
INFO - 2021-01-20 04:30:42 --> Helper loaded: security_helper
INFO - 2021-01-20 04:30:42 --> Helper loaded: form_helper
INFO - 2021-01-20 04:30:42 --> Helper loaded: access_helper
INFO - 2021-01-20 04:30:42 --> Helper loaded: date_helper
INFO - 2021-01-20 04:30:42 --> Database Driver Class Initialized
INFO - 2021-01-20 04:30:42 --> User Agent Class Initialized
INFO - 2021-01-20 04:30:42 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:30:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:30:42 --> Pagination Class Initialized
INFO - 2021-01-20 04:30:42 --> Form Validation Class Initialized
INFO - 2021-01-20 04:30:42 --> Controller Class Initialized
INFO - 2021-01-20 04:30:42 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:30:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:30:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:30:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
ERROR - 2021-01-20 04:30:42 --> Severity: Notice --> Undefined index: tipe C:\xampp\htdocs\poliklinik\application\views\pasien\detail_pasien.php 59
INFO - 2021-01-20 04:30:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/detail_pasien.php
INFO - 2021-01-20 04:30:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:30:42 --> Final output sent to browser
INFO - 2021-01-20 04:30:51 --> Config Class Initialized
INFO - 2021-01-20 04:30:51 --> Hooks Class Initialized
INFO - 2021-01-20 04:30:51 --> Utf8 Class Initialized
INFO - 2021-01-20 04:30:51 --> URI Class Initialized
INFO - 2021-01-20 04:30:51 --> Router Class Initialized
INFO - 2021-01-20 04:30:51 --> Output Class Initialized
INFO - 2021-01-20 04:30:51 --> Security Class Initialized
INFO - 2021-01-20 04:30:51 --> Input Class Initialized
INFO - 2021-01-20 04:30:51 --> Language Class Initialized
INFO - 2021-01-20 04:30:51 --> Loader Class Initialized
INFO - 2021-01-20 04:30:51 --> Helper loaded: url_helper
INFO - 2021-01-20 04:30:51 --> Helper loaded: file_helper
INFO - 2021-01-20 04:30:51 --> Helper loaded: security_helper
INFO - 2021-01-20 04:30:51 --> Helper loaded: form_helper
INFO - 2021-01-20 04:30:51 --> Helper loaded: access_helper
INFO - 2021-01-20 04:30:51 --> Helper loaded: date_helper
INFO - 2021-01-20 04:30:51 --> Database Driver Class Initialized
INFO - 2021-01-20 04:30:51 --> User Agent Class Initialized
INFO - 2021-01-20 04:30:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:30:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:30:51 --> Pagination Class Initialized
INFO - 2021-01-20 04:30:51 --> Form Validation Class Initialized
INFO - 2021-01-20 04:30:51 --> Controller Class Initialized
INFO - 2021-01-20 04:30:51 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:30:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:30:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:30:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:30:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/detail_pasien.php
INFO - 2021-01-20 04:30:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:30:51 --> Final output sent to browser
INFO - 2021-01-20 04:32:19 --> Config Class Initialized
INFO - 2021-01-20 04:32:19 --> Hooks Class Initialized
INFO - 2021-01-20 04:32:19 --> Utf8 Class Initialized
INFO - 2021-01-20 04:32:19 --> URI Class Initialized
INFO - 2021-01-20 04:32:19 --> Router Class Initialized
INFO - 2021-01-20 04:32:19 --> Output Class Initialized
INFO - 2021-01-20 04:32:19 --> Security Class Initialized
INFO - 2021-01-20 04:32:19 --> Input Class Initialized
INFO - 2021-01-20 04:32:19 --> Language Class Initialized
INFO - 2021-01-20 04:32:19 --> Loader Class Initialized
INFO - 2021-01-20 04:32:19 --> Helper loaded: url_helper
INFO - 2021-01-20 04:32:19 --> Helper loaded: file_helper
INFO - 2021-01-20 04:32:19 --> Helper loaded: security_helper
INFO - 2021-01-20 04:32:19 --> Helper loaded: form_helper
INFO - 2021-01-20 04:32:19 --> Helper loaded: access_helper
INFO - 2021-01-20 04:32:19 --> Helper loaded: date_helper
INFO - 2021-01-20 04:32:19 --> Database Driver Class Initialized
INFO - 2021-01-20 04:32:19 --> User Agent Class Initialized
INFO - 2021-01-20 04:32:19 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:32:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:32:19 --> Pagination Class Initialized
INFO - 2021-01-20 04:32:19 --> Form Validation Class Initialized
INFO - 2021-01-20 04:32:19 --> Controller Class Initialized
INFO - 2021-01-20 04:32:19 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:32:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:32:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:32:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:32:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/detail_pasien.php
INFO - 2021-01-20 04:32:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:32:19 --> Final output sent to browser
INFO - 2021-01-20 04:32:38 --> Config Class Initialized
INFO - 2021-01-20 04:32:38 --> Hooks Class Initialized
INFO - 2021-01-20 04:32:38 --> Utf8 Class Initialized
INFO - 2021-01-20 04:32:38 --> URI Class Initialized
INFO - 2021-01-20 04:32:38 --> Router Class Initialized
INFO - 2021-01-20 04:32:38 --> Output Class Initialized
INFO - 2021-01-20 04:32:38 --> Security Class Initialized
INFO - 2021-01-20 04:32:38 --> Input Class Initialized
INFO - 2021-01-20 04:32:38 --> Language Class Initialized
INFO - 2021-01-20 04:32:38 --> Loader Class Initialized
INFO - 2021-01-20 04:32:38 --> Helper loaded: url_helper
INFO - 2021-01-20 04:32:38 --> Helper loaded: file_helper
INFO - 2021-01-20 04:32:38 --> Helper loaded: security_helper
INFO - 2021-01-20 04:32:38 --> Helper loaded: form_helper
INFO - 2021-01-20 04:32:38 --> Helper loaded: access_helper
INFO - 2021-01-20 04:32:38 --> Helper loaded: date_helper
INFO - 2021-01-20 04:32:38 --> Database Driver Class Initialized
INFO - 2021-01-20 04:32:38 --> User Agent Class Initialized
INFO - 2021-01-20 04:32:38 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:32:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:32:38 --> Pagination Class Initialized
INFO - 2021-01-20 04:32:38 --> Form Validation Class Initialized
INFO - 2021-01-20 04:32:38 --> Controller Class Initialized
INFO - 2021-01-20 04:32:38 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:32:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:32:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:32:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:32:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/detail_pasien.php
INFO - 2021-01-20 04:32:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:32:38 --> Final output sent to browser
INFO - 2021-01-20 04:32:40 --> Config Class Initialized
INFO - 2021-01-20 04:32:40 --> Hooks Class Initialized
INFO - 2021-01-20 04:32:40 --> Utf8 Class Initialized
INFO - 2021-01-20 04:32:40 --> URI Class Initialized
INFO - 2021-01-20 04:32:40 --> Router Class Initialized
INFO - 2021-01-20 04:32:40 --> Output Class Initialized
INFO - 2021-01-20 04:32:40 --> Security Class Initialized
INFO - 2021-01-20 04:32:40 --> Input Class Initialized
INFO - 2021-01-20 04:32:40 --> Language Class Initialized
INFO - 2021-01-20 04:32:40 --> Loader Class Initialized
INFO - 2021-01-20 04:32:40 --> Helper loaded: url_helper
INFO - 2021-01-20 04:32:40 --> Helper loaded: file_helper
INFO - 2021-01-20 04:32:40 --> Helper loaded: security_helper
INFO - 2021-01-20 04:32:40 --> Helper loaded: form_helper
INFO - 2021-01-20 04:32:40 --> Helper loaded: access_helper
INFO - 2021-01-20 04:32:40 --> Helper loaded: date_helper
INFO - 2021-01-20 04:32:40 --> Database Driver Class Initialized
INFO - 2021-01-20 04:32:40 --> User Agent Class Initialized
INFO - 2021-01-20 04:32:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:32:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:32:40 --> Pagination Class Initialized
INFO - 2021-01-20 04:32:40 --> Form Validation Class Initialized
INFO - 2021-01-20 04:32:40 --> Controller Class Initialized
INFO - 2021-01-20 04:32:40 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:32:40 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:32:40 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:32:40 --> Final output sent to browser
INFO - 2021-01-20 04:32:45 --> Config Class Initialized
INFO - 2021-01-20 04:32:45 --> Hooks Class Initialized
INFO - 2021-01-20 04:32:45 --> Utf8 Class Initialized
INFO - 2021-01-20 04:32:45 --> URI Class Initialized
INFO - 2021-01-20 04:32:45 --> Router Class Initialized
INFO - 2021-01-20 04:32:45 --> Output Class Initialized
INFO - 2021-01-20 04:32:45 --> Security Class Initialized
INFO - 2021-01-20 04:32:45 --> Input Class Initialized
INFO - 2021-01-20 04:32:45 --> Language Class Initialized
INFO - 2021-01-20 04:32:45 --> Loader Class Initialized
INFO - 2021-01-20 04:32:45 --> Helper loaded: url_helper
INFO - 2021-01-20 04:32:45 --> Helper loaded: file_helper
INFO - 2021-01-20 04:32:45 --> Helper loaded: security_helper
INFO - 2021-01-20 04:32:45 --> Helper loaded: form_helper
INFO - 2021-01-20 04:32:45 --> Helper loaded: access_helper
INFO - 2021-01-20 04:32:45 --> Helper loaded: date_helper
INFO - 2021-01-20 04:32:45 --> Database Driver Class Initialized
INFO - 2021-01-20 04:32:45 --> User Agent Class Initialized
INFO - 2021-01-20 04:32:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:32:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:32:45 --> Pagination Class Initialized
INFO - 2021-01-20 04:32:45 --> Form Validation Class Initialized
INFO - 2021-01-20 04:32:45 --> Controller Class Initialized
INFO - 2021-01-20 04:32:45 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:32:45 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:32:45 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:32:45 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:32:45 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/detail_pasien.php
INFO - 2021-01-20 04:32:45 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:32:45 --> Final output sent to browser
INFO - 2021-01-20 04:32:46 --> Config Class Initialized
INFO - 2021-01-20 04:32:46 --> Hooks Class Initialized
INFO - 2021-01-20 04:32:46 --> Utf8 Class Initialized
INFO - 2021-01-20 04:32:46 --> URI Class Initialized
INFO - 2021-01-20 04:32:46 --> Router Class Initialized
INFO - 2021-01-20 04:32:46 --> Output Class Initialized
INFO - 2021-01-20 04:32:46 --> Security Class Initialized
INFO - 2021-01-20 04:32:46 --> Input Class Initialized
INFO - 2021-01-20 04:32:46 --> Language Class Initialized
INFO - 2021-01-20 04:32:46 --> Loader Class Initialized
INFO - 2021-01-20 04:32:46 --> Helper loaded: url_helper
INFO - 2021-01-20 04:32:46 --> Helper loaded: file_helper
INFO - 2021-01-20 04:32:46 --> Helper loaded: security_helper
INFO - 2021-01-20 04:32:46 --> Helper loaded: form_helper
INFO - 2021-01-20 04:32:46 --> Helper loaded: access_helper
INFO - 2021-01-20 04:32:46 --> Helper loaded: date_helper
INFO - 2021-01-20 04:32:46 --> Database Driver Class Initialized
INFO - 2021-01-20 04:32:46 --> User Agent Class Initialized
INFO - 2021-01-20 04:32:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:32:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:32:46 --> Pagination Class Initialized
INFO - 2021-01-20 04:32:46 --> Form Validation Class Initialized
INFO - 2021-01-20 04:32:46 --> Controller Class Initialized
INFO - 2021-01-20 04:32:46 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:32:46 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:32:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:32:46 --> Final output sent to browser
INFO - 2021-01-20 04:32:51 --> Config Class Initialized
INFO - 2021-01-20 04:32:51 --> Hooks Class Initialized
INFO - 2021-01-20 04:32:51 --> Utf8 Class Initialized
INFO - 2021-01-20 04:32:51 --> URI Class Initialized
INFO - 2021-01-20 04:32:51 --> Router Class Initialized
INFO - 2021-01-20 04:32:51 --> Output Class Initialized
INFO - 2021-01-20 04:32:51 --> Security Class Initialized
INFO - 2021-01-20 04:32:51 --> Input Class Initialized
INFO - 2021-01-20 04:32:51 --> Language Class Initialized
INFO - 2021-01-20 04:32:51 --> Loader Class Initialized
INFO - 2021-01-20 04:32:51 --> Helper loaded: url_helper
INFO - 2021-01-20 04:32:51 --> Helper loaded: file_helper
INFO - 2021-01-20 04:32:51 --> Helper loaded: security_helper
INFO - 2021-01-20 04:32:51 --> Helper loaded: form_helper
INFO - 2021-01-20 04:32:51 --> Helper loaded: access_helper
INFO - 2021-01-20 04:32:51 --> Helper loaded: date_helper
INFO - 2021-01-20 04:32:51 --> Database Driver Class Initialized
INFO - 2021-01-20 04:32:51 --> User Agent Class Initialized
INFO - 2021-01-20 04:32:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:32:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:32:51 --> Pagination Class Initialized
INFO - 2021-01-20 04:32:51 --> Form Validation Class Initialized
INFO - 2021-01-20 04:32:51 --> Controller Class Initialized
INFO - 2021-01-20 04:32:51 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:32:51 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:32:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:32:51 --> Final output sent to browser
INFO - 2021-01-20 04:32:59 --> Config Class Initialized
INFO - 2021-01-20 04:32:59 --> Hooks Class Initialized
INFO - 2021-01-20 04:32:59 --> Utf8 Class Initialized
INFO - 2021-01-20 04:32:59 --> URI Class Initialized
INFO - 2021-01-20 04:32:59 --> Router Class Initialized
INFO - 2021-01-20 04:32:59 --> Output Class Initialized
INFO - 2021-01-20 04:32:59 --> Security Class Initialized
INFO - 2021-01-20 04:32:59 --> Input Class Initialized
INFO - 2021-01-20 04:32:59 --> Language Class Initialized
ERROR - 2021-01-20 04:32:59 --> 404 Page Not Found: 1/index
INFO - 2021-01-20 04:33:00 --> Config Class Initialized
INFO - 2021-01-20 04:33:00 --> Hooks Class Initialized
INFO - 2021-01-20 04:33:00 --> Utf8 Class Initialized
INFO - 2021-01-20 04:33:00 --> URI Class Initialized
INFO - 2021-01-20 04:33:00 --> Router Class Initialized
INFO - 2021-01-20 04:33:00 --> Output Class Initialized
INFO - 2021-01-20 04:33:00 --> Security Class Initialized
INFO - 2021-01-20 04:33:00 --> Input Class Initialized
INFO - 2021-01-20 04:33:00 --> Language Class Initialized
INFO - 2021-01-20 04:33:00 --> Loader Class Initialized
INFO - 2021-01-20 04:33:00 --> Helper loaded: url_helper
INFO - 2021-01-20 04:33:00 --> Helper loaded: file_helper
INFO - 2021-01-20 04:33:00 --> Helper loaded: security_helper
INFO - 2021-01-20 04:33:00 --> Helper loaded: form_helper
INFO - 2021-01-20 04:33:00 --> Helper loaded: access_helper
INFO - 2021-01-20 04:33:00 --> Helper loaded: date_helper
INFO - 2021-01-20 04:33:00 --> Database Driver Class Initialized
INFO - 2021-01-20 04:33:00 --> User Agent Class Initialized
INFO - 2021-01-20 04:33:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:33:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:33:00 --> Pagination Class Initialized
INFO - 2021-01-20 04:33:00 --> Form Validation Class Initialized
INFO - 2021-01-20 04:33:00 --> Controller Class Initialized
INFO - 2021-01-20 04:33:00 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:33:00 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:33:00 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:33:00 --> Final output sent to browser
INFO - 2021-01-20 04:33:23 --> Config Class Initialized
INFO - 2021-01-20 04:33:23 --> Hooks Class Initialized
INFO - 2021-01-20 04:33:23 --> Utf8 Class Initialized
INFO - 2021-01-20 04:33:23 --> URI Class Initialized
INFO - 2021-01-20 04:33:23 --> Router Class Initialized
INFO - 2021-01-20 04:33:23 --> Output Class Initialized
INFO - 2021-01-20 04:33:23 --> Security Class Initialized
INFO - 2021-01-20 04:33:23 --> Input Class Initialized
INFO - 2021-01-20 04:33:23 --> Language Class Initialized
INFO - 2021-01-20 04:33:23 --> Loader Class Initialized
INFO - 2021-01-20 04:33:23 --> Helper loaded: url_helper
INFO - 2021-01-20 04:33:23 --> Helper loaded: file_helper
INFO - 2021-01-20 04:33:23 --> Helper loaded: security_helper
INFO - 2021-01-20 04:33:23 --> Helper loaded: form_helper
INFO - 2021-01-20 04:33:23 --> Helper loaded: access_helper
INFO - 2021-01-20 04:33:23 --> Helper loaded: date_helper
INFO - 2021-01-20 04:33:23 --> Database Driver Class Initialized
INFO - 2021-01-20 04:33:23 --> User Agent Class Initialized
INFO - 2021-01-20 04:33:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:33:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:33:23 --> Pagination Class Initialized
INFO - 2021-01-20 04:33:23 --> Form Validation Class Initialized
INFO - 2021-01-20 04:33:23 --> Controller Class Initialized
INFO - 2021-01-20 04:33:23 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:33:23 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:33:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:33:23 --> Final output sent to browser
INFO - 2021-01-20 04:33:25 --> Config Class Initialized
INFO - 2021-01-20 04:33:25 --> Hooks Class Initialized
INFO - 2021-01-20 04:33:25 --> Utf8 Class Initialized
INFO - 2021-01-20 04:33:25 --> URI Class Initialized
INFO - 2021-01-20 04:33:25 --> Router Class Initialized
INFO - 2021-01-20 04:33:25 --> Output Class Initialized
INFO - 2021-01-20 04:33:25 --> Security Class Initialized
INFO - 2021-01-20 04:33:25 --> Input Class Initialized
INFO - 2021-01-20 04:33:25 --> Language Class Initialized
INFO - 2021-01-20 04:33:25 --> Loader Class Initialized
INFO - 2021-01-20 04:33:25 --> Helper loaded: url_helper
INFO - 2021-01-20 04:33:25 --> Helper loaded: file_helper
INFO - 2021-01-20 04:33:25 --> Helper loaded: security_helper
INFO - 2021-01-20 04:33:25 --> Helper loaded: form_helper
INFO - 2021-01-20 04:33:25 --> Helper loaded: access_helper
INFO - 2021-01-20 04:33:25 --> Helper loaded: date_helper
INFO - 2021-01-20 04:33:25 --> Database Driver Class Initialized
INFO - 2021-01-20 04:33:25 --> User Agent Class Initialized
INFO - 2021-01-20 04:33:25 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:33:25 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:33:25 --> Pagination Class Initialized
INFO - 2021-01-20 04:33:25 --> Form Validation Class Initialized
INFO - 2021-01-20 04:33:25 --> Controller Class Initialized
INFO - 2021-01-20 04:33:25 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:33:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/header.php
INFO - 2021-01-20 04:33:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/navbar.php
INFO - 2021-01-20 04:33:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/sidebar.php
INFO - 2021-01-20 04:33:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/detail_pasien.php
INFO - 2021-01-20 04:33:25 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\templates/user/footer.php
INFO - 2021-01-20 04:33:25 --> Final output sent to browser
INFO - 2021-01-20 04:33:27 --> Config Class Initialized
INFO - 2021-01-20 04:33:27 --> Hooks Class Initialized
INFO - 2021-01-20 04:33:27 --> Utf8 Class Initialized
INFO - 2021-01-20 04:33:27 --> URI Class Initialized
INFO - 2021-01-20 04:33:27 --> Router Class Initialized
INFO - 2021-01-20 04:33:27 --> Output Class Initialized
INFO - 2021-01-20 04:33:27 --> Security Class Initialized
INFO - 2021-01-20 04:33:27 --> Input Class Initialized
INFO - 2021-01-20 04:33:27 --> Language Class Initialized
INFO - 2021-01-20 04:33:27 --> Loader Class Initialized
INFO - 2021-01-20 04:33:27 --> Helper loaded: url_helper
INFO - 2021-01-20 04:33:27 --> Helper loaded: file_helper
INFO - 2021-01-20 04:33:27 --> Helper loaded: security_helper
INFO - 2021-01-20 04:33:27 --> Helper loaded: form_helper
INFO - 2021-01-20 04:33:27 --> Helper loaded: access_helper
INFO - 2021-01-20 04:33:27 --> Helper loaded: date_helper
INFO - 2021-01-20 04:33:27 --> Database Driver Class Initialized
INFO - 2021-01-20 04:33:27 --> User Agent Class Initialized
INFO - 2021-01-20 04:33:27 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:33:27 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:33:27 --> Pagination Class Initialized
INFO - 2021-01-20 04:33:27 --> Form Validation Class Initialized
INFO - 2021-01-20 04:33:27 --> Controller Class Initialized
INFO - 2021-01-20 04:33:27 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:33:27 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:33:27 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:33:27 --> Final output sent to browser
INFO - 2021-01-20 04:34:01 --> Config Class Initialized
INFO - 2021-01-20 04:34:01 --> Hooks Class Initialized
INFO - 2021-01-20 04:34:01 --> Utf8 Class Initialized
INFO - 2021-01-20 04:34:01 --> URI Class Initialized
INFO - 2021-01-20 04:34:01 --> Router Class Initialized
INFO - 2021-01-20 04:34:01 --> Output Class Initialized
INFO - 2021-01-20 04:34:01 --> Security Class Initialized
INFO - 2021-01-20 04:34:01 --> Input Class Initialized
INFO - 2021-01-20 04:34:01 --> Language Class Initialized
INFO - 2021-01-20 04:34:01 --> Loader Class Initialized
INFO - 2021-01-20 04:34:01 --> Helper loaded: url_helper
INFO - 2021-01-20 04:34:01 --> Helper loaded: file_helper
INFO - 2021-01-20 04:34:01 --> Helper loaded: security_helper
INFO - 2021-01-20 04:34:01 --> Helper loaded: form_helper
INFO - 2021-01-20 04:34:01 --> Helper loaded: access_helper
INFO - 2021-01-20 04:34:01 --> Helper loaded: date_helper
INFO - 2021-01-20 04:34:01 --> Database Driver Class Initialized
INFO - 2021-01-20 04:34:01 --> User Agent Class Initialized
INFO - 2021-01-20 04:34:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:34:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:34:01 --> Pagination Class Initialized
INFO - 2021-01-20 04:34:01 --> Form Validation Class Initialized
INFO - 2021-01-20 04:34:01 --> Controller Class Initialized
INFO - 2021-01-20 04:34:01 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:34:01 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:34:01 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:34:01 --> Final output sent to browser
INFO - 2021-01-20 04:34:03 --> Config Class Initialized
INFO - 2021-01-20 04:34:03 --> Hooks Class Initialized
INFO - 2021-01-20 04:34:03 --> Utf8 Class Initialized
INFO - 2021-01-20 04:34:03 --> URI Class Initialized
INFO - 2021-01-20 04:34:03 --> Router Class Initialized
INFO - 2021-01-20 04:34:03 --> Output Class Initialized
INFO - 2021-01-20 04:34:03 --> Security Class Initialized
INFO - 2021-01-20 04:34:03 --> Input Class Initialized
INFO - 2021-01-20 04:34:03 --> Language Class Initialized
INFO - 2021-01-20 04:34:03 --> Loader Class Initialized
INFO - 2021-01-20 04:34:03 --> Helper loaded: url_helper
INFO - 2021-01-20 04:34:03 --> Helper loaded: file_helper
INFO - 2021-01-20 04:34:03 --> Helper loaded: security_helper
INFO - 2021-01-20 04:34:03 --> Helper loaded: form_helper
INFO - 2021-01-20 04:34:03 --> Helper loaded: access_helper
INFO - 2021-01-20 04:34:03 --> Helper loaded: date_helper
INFO - 2021-01-20 04:34:03 --> Database Driver Class Initialized
INFO - 2021-01-20 04:34:03 --> User Agent Class Initialized
INFO - 2021-01-20 04:34:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:34:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:34:03 --> Pagination Class Initialized
INFO - 2021-01-20 04:34:03 --> Form Validation Class Initialized
INFO - 2021-01-20 04:34:03 --> Controller Class Initialized
INFO - 2021-01-20 04:34:03 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:34:03 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:34:03 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien_karyawan.php
INFO - 2021-01-20 04:34:03 --> Final output sent to browser
INFO - 2021-01-20 04:34:04 --> Config Class Initialized
INFO - 2021-01-20 04:34:04 --> Hooks Class Initialized
INFO - 2021-01-20 04:34:04 --> Utf8 Class Initialized
INFO - 2021-01-20 04:34:04 --> URI Class Initialized
INFO - 2021-01-20 04:34:04 --> Router Class Initialized
INFO - 2021-01-20 04:34:04 --> Output Class Initialized
INFO - 2021-01-20 04:34:04 --> Security Class Initialized
INFO - 2021-01-20 04:34:04 --> Input Class Initialized
INFO - 2021-01-20 04:34:04 --> Language Class Initialized
INFO - 2021-01-20 04:34:04 --> Loader Class Initialized
INFO - 2021-01-20 04:34:04 --> Helper loaded: url_helper
INFO - 2021-01-20 04:34:04 --> Helper loaded: file_helper
INFO - 2021-01-20 04:34:04 --> Helper loaded: security_helper
INFO - 2021-01-20 04:34:04 --> Helper loaded: form_helper
INFO - 2021-01-20 04:34:04 --> Helper loaded: access_helper
INFO - 2021-01-20 04:34:04 --> Helper loaded: date_helper
INFO - 2021-01-20 04:34:04 --> Database Driver Class Initialized
INFO - 2021-01-20 04:34:04 --> User Agent Class Initialized
INFO - 2021-01-20 04:34:04 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:34:04 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:34:04 --> Pagination Class Initialized
INFO - 2021-01-20 04:34:04 --> Form Validation Class Initialized
INFO - 2021-01-20 04:34:04 --> Controller Class Initialized
INFO - 2021-01-20 04:34:04 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:34:04 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:34:04 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:34:04 --> Final output sent to browser
INFO - 2021-01-20 04:34:59 --> Config Class Initialized
INFO - 2021-01-20 04:34:59 --> Hooks Class Initialized
INFO - 2021-01-20 04:34:59 --> Utf8 Class Initialized
INFO - 2021-01-20 04:34:59 --> URI Class Initialized
INFO - 2021-01-20 04:34:59 --> Router Class Initialized
INFO - 2021-01-20 04:34:59 --> Output Class Initialized
INFO - 2021-01-20 04:34:59 --> Security Class Initialized
INFO - 2021-01-20 04:34:59 --> Input Class Initialized
INFO - 2021-01-20 04:34:59 --> Language Class Initialized
INFO - 2021-01-20 04:34:59 --> Loader Class Initialized
INFO - 2021-01-20 04:34:59 --> Helper loaded: url_helper
INFO - 2021-01-20 04:34:59 --> Helper loaded: file_helper
INFO - 2021-01-20 04:34:59 --> Helper loaded: security_helper
INFO - 2021-01-20 04:34:59 --> Helper loaded: form_helper
INFO - 2021-01-20 04:34:59 --> Helper loaded: access_helper
INFO - 2021-01-20 04:34:59 --> Helper loaded: date_helper
INFO - 2021-01-20 04:34:59 --> Database Driver Class Initialized
INFO - 2021-01-20 04:34:59 --> User Agent Class Initialized
INFO - 2021-01-20 04:34:59 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:34:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:34:59 --> Pagination Class Initialized
INFO - 2021-01-20 04:34:59 --> Form Validation Class Initialized
INFO - 2021-01-20 04:34:59 --> Controller Class Initialized
INFO - 2021-01-20 04:34:59 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:34:59 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:34:59 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:34:59 --> Final output sent to browser
INFO - 2021-01-20 04:40:41 --> Config Class Initialized
INFO - 2021-01-20 04:40:41 --> Hooks Class Initialized
INFO - 2021-01-20 04:40:41 --> Utf8 Class Initialized
INFO - 2021-01-20 04:40:41 --> URI Class Initialized
INFO - 2021-01-20 04:40:41 --> Router Class Initialized
INFO - 2021-01-20 04:40:41 --> Output Class Initialized
INFO - 2021-01-20 04:40:41 --> Security Class Initialized
INFO - 2021-01-20 04:40:41 --> Input Class Initialized
INFO - 2021-01-20 04:40:41 --> Language Class Initialized
INFO - 2021-01-20 04:40:41 --> Loader Class Initialized
INFO - 2021-01-20 04:40:41 --> Helper loaded: url_helper
INFO - 2021-01-20 04:40:41 --> Helper loaded: file_helper
INFO - 2021-01-20 04:40:41 --> Helper loaded: security_helper
INFO - 2021-01-20 04:40:41 --> Helper loaded: form_helper
INFO - 2021-01-20 04:40:41 --> Helper loaded: access_helper
INFO - 2021-01-20 04:40:41 --> Helper loaded: date_helper
INFO - 2021-01-20 04:40:41 --> Database Driver Class Initialized
INFO - 2021-01-20 04:40:41 --> User Agent Class Initialized
INFO - 2021-01-20 04:40:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:40:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:40:41 --> Pagination Class Initialized
INFO - 2021-01-20 04:40:41 --> Form Validation Class Initialized
INFO - 2021-01-20 04:40:41 --> Controller Class Initialized
INFO - 2021-01-20 04:40:41 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:40:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:40:41 --> Final output sent to browser
INFO - 2021-01-20 04:40:44 --> Config Class Initialized
INFO - 2021-01-20 04:40:44 --> Hooks Class Initialized
INFO - 2021-01-20 04:40:44 --> Utf8 Class Initialized
INFO - 2021-01-20 04:40:44 --> URI Class Initialized
INFO - 2021-01-20 04:40:44 --> Router Class Initialized
INFO - 2021-01-20 04:40:44 --> Output Class Initialized
INFO - 2021-01-20 04:40:44 --> Security Class Initialized
INFO - 2021-01-20 04:40:44 --> Input Class Initialized
INFO - 2021-01-20 04:40:44 --> Language Class Initialized
INFO - 2021-01-20 04:40:44 --> Loader Class Initialized
INFO - 2021-01-20 04:40:44 --> Helper loaded: url_helper
INFO - 2021-01-20 04:40:44 --> Helper loaded: file_helper
INFO - 2021-01-20 04:40:44 --> Helper loaded: security_helper
INFO - 2021-01-20 04:40:44 --> Helper loaded: form_helper
INFO - 2021-01-20 04:40:44 --> Helper loaded: access_helper
INFO - 2021-01-20 04:40:44 --> Helper loaded: date_helper
INFO - 2021-01-20 04:40:44 --> Database Driver Class Initialized
INFO - 2021-01-20 04:40:44 --> User Agent Class Initialized
INFO - 2021-01-20 04:40:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:40:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:40:44 --> Pagination Class Initialized
INFO - 2021-01-20 04:40:44 --> Form Validation Class Initialized
INFO - 2021-01-20 04:40:44 --> Controller Class Initialized
INFO - 2021-01-20 04:40:44 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:40:44 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:40:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:40:44 --> Final output sent to browser
INFO - 2021-01-20 04:40:46 --> Config Class Initialized
INFO - 2021-01-20 04:40:46 --> Hooks Class Initialized
INFO - 2021-01-20 04:40:46 --> Utf8 Class Initialized
INFO - 2021-01-20 04:40:46 --> URI Class Initialized
INFO - 2021-01-20 04:40:46 --> Router Class Initialized
INFO - 2021-01-20 04:40:46 --> Output Class Initialized
INFO - 2021-01-20 04:40:46 --> Security Class Initialized
INFO - 2021-01-20 04:40:46 --> Input Class Initialized
INFO - 2021-01-20 04:40:46 --> Language Class Initialized
INFO - 2021-01-20 04:40:46 --> Loader Class Initialized
INFO - 2021-01-20 04:40:46 --> Helper loaded: url_helper
INFO - 2021-01-20 04:40:46 --> Helper loaded: file_helper
INFO - 2021-01-20 04:40:46 --> Helper loaded: security_helper
INFO - 2021-01-20 04:40:46 --> Helper loaded: form_helper
INFO - 2021-01-20 04:40:46 --> Helper loaded: access_helper
INFO - 2021-01-20 04:40:46 --> Helper loaded: date_helper
INFO - 2021-01-20 04:40:46 --> Database Driver Class Initialized
INFO - 2021-01-20 04:40:46 --> User Agent Class Initialized
INFO - 2021-01-20 04:40:46 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:40:46 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:40:46 --> Pagination Class Initialized
INFO - 2021-01-20 04:40:46 --> Form Validation Class Initialized
INFO - 2021-01-20 04:40:46 --> Controller Class Initialized
INFO - 2021-01-20 04:40:46 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:40:46 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:40:46 --> Final output sent to browser
INFO - 2021-01-20 04:42:01 --> Config Class Initialized
INFO - 2021-01-20 04:42:01 --> Hooks Class Initialized
INFO - 2021-01-20 04:42:01 --> Utf8 Class Initialized
INFO - 2021-01-20 04:42:01 --> URI Class Initialized
INFO - 2021-01-20 04:42:01 --> Router Class Initialized
INFO - 2021-01-20 04:42:01 --> Output Class Initialized
INFO - 2021-01-20 04:42:01 --> Security Class Initialized
INFO - 2021-01-20 04:42:01 --> Input Class Initialized
INFO - 2021-01-20 04:42:01 --> Language Class Initialized
INFO - 2021-01-20 04:42:01 --> Loader Class Initialized
INFO - 2021-01-20 04:42:01 --> Helper loaded: url_helper
INFO - 2021-01-20 04:42:01 --> Helper loaded: file_helper
INFO - 2021-01-20 04:42:01 --> Helper loaded: security_helper
INFO - 2021-01-20 04:42:01 --> Helper loaded: form_helper
INFO - 2021-01-20 04:42:01 --> Helper loaded: access_helper
INFO - 2021-01-20 04:42:01 --> Helper loaded: date_helper
INFO - 2021-01-20 04:42:01 --> Database Driver Class Initialized
INFO - 2021-01-20 04:42:01 --> User Agent Class Initialized
INFO - 2021-01-20 04:42:01 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:42:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:42:01 --> Pagination Class Initialized
INFO - 2021-01-20 04:42:01 --> Form Validation Class Initialized
INFO - 2021-01-20 04:42:01 --> Controller Class Initialized
INFO - 2021-01-20 04:42:01 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:42:01 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:42:01 --> Final output sent to browser
INFO - 2021-01-20 04:42:09 --> Config Class Initialized
INFO - 2021-01-20 04:42:09 --> Hooks Class Initialized
INFO - 2021-01-20 04:42:09 --> Utf8 Class Initialized
INFO - 2021-01-20 04:42:09 --> URI Class Initialized
INFO - 2021-01-20 04:42:09 --> Router Class Initialized
INFO - 2021-01-20 04:42:09 --> Output Class Initialized
INFO - 2021-01-20 04:42:09 --> Security Class Initialized
INFO - 2021-01-20 04:42:09 --> Input Class Initialized
INFO - 2021-01-20 04:42:09 --> Language Class Initialized
INFO - 2021-01-20 04:42:09 --> Loader Class Initialized
INFO - 2021-01-20 04:42:09 --> Helper loaded: url_helper
INFO - 2021-01-20 04:42:09 --> Helper loaded: file_helper
INFO - 2021-01-20 04:42:09 --> Helper loaded: security_helper
INFO - 2021-01-20 04:42:09 --> Helper loaded: form_helper
INFO - 2021-01-20 04:42:09 --> Helper loaded: access_helper
INFO - 2021-01-20 04:42:09 --> Helper loaded: date_helper
INFO - 2021-01-20 04:42:09 --> Database Driver Class Initialized
INFO - 2021-01-20 04:42:09 --> User Agent Class Initialized
INFO - 2021-01-20 04:42:09 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:42:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:42:09 --> Pagination Class Initialized
INFO - 2021-01-20 04:42:09 --> Form Validation Class Initialized
INFO - 2021-01-20 04:42:09 --> Controller Class Initialized
INFO - 2021-01-20 04:42:09 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:42:09 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:42:09 --> Final output sent to browser
INFO - 2021-01-20 04:42:39 --> Config Class Initialized
INFO - 2021-01-20 04:42:39 --> Hooks Class Initialized
INFO - 2021-01-20 04:42:39 --> Utf8 Class Initialized
INFO - 2021-01-20 04:42:39 --> URI Class Initialized
INFO - 2021-01-20 04:42:39 --> Router Class Initialized
INFO - 2021-01-20 04:42:39 --> Output Class Initialized
INFO - 2021-01-20 04:42:39 --> Security Class Initialized
INFO - 2021-01-20 04:42:39 --> Input Class Initialized
INFO - 2021-01-20 04:42:39 --> Language Class Initialized
INFO - 2021-01-20 04:42:39 --> Loader Class Initialized
INFO - 2021-01-20 04:42:39 --> Helper loaded: url_helper
INFO - 2021-01-20 04:42:39 --> Helper loaded: file_helper
INFO - 2021-01-20 04:42:39 --> Helper loaded: security_helper
INFO - 2021-01-20 04:42:39 --> Helper loaded: form_helper
INFO - 2021-01-20 04:42:39 --> Helper loaded: access_helper
INFO - 2021-01-20 04:42:39 --> Helper loaded: date_helper
INFO - 2021-01-20 04:42:39 --> Database Driver Class Initialized
INFO - 2021-01-20 04:42:39 --> User Agent Class Initialized
INFO - 2021-01-20 04:42:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:42:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:42:39 --> Pagination Class Initialized
INFO - 2021-01-20 04:42:39 --> Form Validation Class Initialized
INFO - 2021-01-20 04:42:39 --> Controller Class Initialized
INFO - 2021-01-20 04:42:39 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:42:39 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:42:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:42:39 --> Final output sent to browser
INFO - 2021-01-20 04:42:50 --> Config Class Initialized
INFO - 2021-01-20 04:42:50 --> Hooks Class Initialized
INFO - 2021-01-20 04:42:50 --> Utf8 Class Initialized
INFO - 2021-01-20 04:42:50 --> URI Class Initialized
INFO - 2021-01-20 04:42:50 --> Router Class Initialized
INFO - 2021-01-20 04:42:50 --> Output Class Initialized
INFO - 2021-01-20 04:42:50 --> Security Class Initialized
INFO - 2021-01-20 04:42:50 --> Input Class Initialized
INFO - 2021-01-20 04:42:50 --> Language Class Initialized
INFO - 2021-01-20 04:42:50 --> Loader Class Initialized
INFO - 2021-01-20 04:42:50 --> Helper loaded: url_helper
INFO - 2021-01-20 04:42:50 --> Helper loaded: file_helper
INFO - 2021-01-20 04:42:50 --> Helper loaded: security_helper
INFO - 2021-01-20 04:42:50 --> Helper loaded: form_helper
INFO - 2021-01-20 04:42:50 --> Helper loaded: access_helper
INFO - 2021-01-20 04:42:50 --> Helper loaded: date_helper
INFO - 2021-01-20 04:42:50 --> Database Driver Class Initialized
INFO - 2021-01-20 04:42:50 --> User Agent Class Initialized
INFO - 2021-01-20 04:42:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:42:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:42:50 --> Pagination Class Initialized
INFO - 2021-01-20 04:42:50 --> Form Validation Class Initialized
INFO - 2021-01-20 04:42:50 --> Controller Class Initialized
INFO - 2021-01-20 04:42:50 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:42:50 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:42:50 --> Final output sent to browser
INFO - 2021-01-20 04:42:52 --> Config Class Initialized
INFO - 2021-01-20 04:42:52 --> Hooks Class Initialized
INFO - 2021-01-20 04:42:52 --> Utf8 Class Initialized
INFO - 2021-01-20 04:42:52 --> URI Class Initialized
INFO - 2021-01-20 04:42:52 --> Router Class Initialized
INFO - 2021-01-20 04:42:52 --> Output Class Initialized
INFO - 2021-01-20 04:42:52 --> Security Class Initialized
INFO - 2021-01-20 04:42:52 --> Input Class Initialized
INFO - 2021-01-20 04:42:52 --> Language Class Initialized
INFO - 2021-01-20 04:42:52 --> Loader Class Initialized
INFO - 2021-01-20 04:42:52 --> Helper loaded: url_helper
INFO - 2021-01-20 04:42:52 --> Helper loaded: file_helper
INFO - 2021-01-20 04:42:52 --> Helper loaded: security_helper
INFO - 2021-01-20 04:42:52 --> Helper loaded: form_helper
INFO - 2021-01-20 04:42:52 --> Helper loaded: access_helper
INFO - 2021-01-20 04:42:52 --> Helper loaded: date_helper
INFO - 2021-01-20 04:42:52 --> Database Driver Class Initialized
INFO - 2021-01-20 04:42:52 --> User Agent Class Initialized
INFO - 2021-01-20 04:42:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:42:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:42:52 --> Pagination Class Initialized
INFO - 2021-01-20 04:42:52 --> Form Validation Class Initialized
INFO - 2021-01-20 04:42:52 --> Controller Class Initialized
INFO - 2021-01-20 04:42:52 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:42:52 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:42:52 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:42:52 --> Final output sent to browser
INFO - 2021-01-20 04:42:54 --> Config Class Initialized
INFO - 2021-01-20 04:42:54 --> Hooks Class Initialized
INFO - 2021-01-20 04:42:54 --> Utf8 Class Initialized
INFO - 2021-01-20 04:42:54 --> URI Class Initialized
INFO - 2021-01-20 04:42:54 --> Router Class Initialized
INFO - 2021-01-20 04:42:54 --> Output Class Initialized
INFO - 2021-01-20 04:42:54 --> Security Class Initialized
INFO - 2021-01-20 04:42:54 --> Input Class Initialized
INFO - 2021-01-20 04:42:54 --> Language Class Initialized
INFO - 2021-01-20 04:42:54 --> Loader Class Initialized
INFO - 2021-01-20 04:42:54 --> Helper loaded: url_helper
INFO - 2021-01-20 04:42:54 --> Helper loaded: file_helper
INFO - 2021-01-20 04:42:54 --> Helper loaded: security_helper
INFO - 2021-01-20 04:42:54 --> Helper loaded: form_helper
INFO - 2021-01-20 04:42:54 --> Helper loaded: access_helper
INFO - 2021-01-20 04:42:54 --> Helper loaded: date_helper
INFO - 2021-01-20 04:42:55 --> Database Driver Class Initialized
INFO - 2021-01-20 04:42:55 --> User Agent Class Initialized
INFO - 2021-01-20 04:42:55 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:42:55 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:42:55 --> Pagination Class Initialized
INFO - 2021-01-20 04:42:55 --> Form Validation Class Initialized
INFO - 2021-01-20 04:42:55 --> Controller Class Initialized
INFO - 2021-01-20 04:42:55 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:42:55 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:42:55 --> Final output sent to browser
INFO - 2021-01-20 04:43:37 --> Config Class Initialized
INFO - 2021-01-20 04:43:37 --> Hooks Class Initialized
INFO - 2021-01-20 04:43:37 --> Utf8 Class Initialized
INFO - 2021-01-20 04:43:37 --> URI Class Initialized
INFO - 2021-01-20 04:43:37 --> Router Class Initialized
INFO - 2021-01-20 04:43:37 --> Output Class Initialized
INFO - 2021-01-20 04:43:37 --> Security Class Initialized
INFO - 2021-01-20 04:43:37 --> Input Class Initialized
INFO - 2021-01-20 04:43:37 --> Language Class Initialized
INFO - 2021-01-20 04:43:37 --> Loader Class Initialized
INFO - 2021-01-20 04:43:37 --> Helper loaded: url_helper
INFO - 2021-01-20 04:43:37 --> Helper loaded: file_helper
INFO - 2021-01-20 04:43:37 --> Helper loaded: security_helper
INFO - 2021-01-20 04:43:37 --> Helper loaded: form_helper
INFO - 2021-01-20 04:43:37 --> Helper loaded: access_helper
INFO - 2021-01-20 04:43:37 --> Helper loaded: date_helper
INFO - 2021-01-20 04:43:37 --> Database Driver Class Initialized
INFO - 2021-01-20 04:43:37 --> User Agent Class Initialized
INFO - 2021-01-20 04:43:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:43:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:43:37 --> Pagination Class Initialized
INFO - 2021-01-20 04:43:37 --> Form Validation Class Initialized
INFO - 2021-01-20 04:43:37 --> Controller Class Initialized
INFO - 2021-01-20 04:43:37 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:43:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:43:37 --> Final output sent to browser
INFO - 2021-01-20 04:44:06 --> Config Class Initialized
INFO - 2021-01-20 04:44:06 --> Hooks Class Initialized
INFO - 2021-01-20 04:44:06 --> Utf8 Class Initialized
INFO - 2021-01-20 04:44:06 --> URI Class Initialized
INFO - 2021-01-20 04:44:06 --> Router Class Initialized
INFO - 2021-01-20 04:44:06 --> Output Class Initialized
INFO - 2021-01-20 04:44:06 --> Security Class Initialized
INFO - 2021-01-20 04:44:06 --> Input Class Initialized
INFO - 2021-01-20 04:44:06 --> Language Class Initialized
INFO - 2021-01-20 04:44:06 --> Loader Class Initialized
INFO - 2021-01-20 04:44:06 --> Helper loaded: url_helper
INFO - 2021-01-20 04:44:06 --> Helper loaded: file_helper
INFO - 2021-01-20 04:44:06 --> Helper loaded: security_helper
INFO - 2021-01-20 04:44:06 --> Helper loaded: form_helper
INFO - 2021-01-20 04:44:06 --> Helper loaded: access_helper
INFO - 2021-01-20 04:44:06 --> Helper loaded: date_helper
INFO - 2021-01-20 04:44:06 --> Database Driver Class Initialized
INFO - 2021-01-20 04:44:06 --> User Agent Class Initialized
INFO - 2021-01-20 04:44:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:44:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:44:06 --> Pagination Class Initialized
INFO - 2021-01-20 04:44:06 --> Form Validation Class Initialized
INFO - 2021-01-20 04:44:06 --> Controller Class Initialized
INFO - 2021-01-20 04:44:06 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:44:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:44:06 --> Final output sent to browser
INFO - 2021-01-20 04:44:09 --> Config Class Initialized
INFO - 2021-01-20 04:44:09 --> Hooks Class Initialized
INFO - 2021-01-20 04:44:09 --> Utf8 Class Initialized
INFO - 2021-01-20 04:44:09 --> URI Class Initialized
INFO - 2021-01-20 04:44:09 --> Router Class Initialized
INFO - 2021-01-20 04:44:09 --> Output Class Initialized
INFO - 2021-01-20 04:44:09 --> Security Class Initialized
INFO - 2021-01-20 04:44:09 --> Input Class Initialized
INFO - 2021-01-20 04:44:09 --> Language Class Initialized
INFO - 2021-01-20 04:44:09 --> Loader Class Initialized
INFO - 2021-01-20 04:44:09 --> Helper loaded: url_helper
INFO - 2021-01-20 04:44:09 --> Helper loaded: file_helper
INFO - 2021-01-20 04:44:09 --> Helper loaded: security_helper
INFO - 2021-01-20 04:44:09 --> Helper loaded: form_helper
INFO - 2021-01-20 04:44:09 --> Helper loaded: access_helper
INFO - 2021-01-20 04:44:09 --> Helper loaded: date_helper
INFO - 2021-01-20 04:44:09 --> Database Driver Class Initialized
INFO - 2021-01-20 04:44:09 --> User Agent Class Initialized
INFO - 2021-01-20 04:44:09 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:44:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:44:09 --> Pagination Class Initialized
INFO - 2021-01-20 04:44:09 --> Form Validation Class Initialized
INFO - 2021-01-20 04:44:09 --> Controller Class Initialized
INFO - 2021-01-20 04:44:09 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:44:09 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/detail_riwayat.php
INFO - 2021-01-20 04:44:09 --> Final output sent to browser
INFO - 2021-01-20 04:44:52 --> Config Class Initialized
INFO - 2021-01-20 04:44:52 --> Hooks Class Initialized
INFO - 2021-01-20 04:44:52 --> Utf8 Class Initialized
INFO - 2021-01-20 04:44:52 --> URI Class Initialized
INFO - 2021-01-20 04:44:52 --> Router Class Initialized
INFO - 2021-01-20 04:44:52 --> Output Class Initialized
INFO - 2021-01-20 04:44:52 --> Security Class Initialized
INFO - 2021-01-20 04:44:52 --> Input Class Initialized
INFO - 2021-01-20 04:44:52 --> Language Class Initialized
INFO - 2021-01-20 04:44:52 --> Loader Class Initialized
INFO - 2021-01-20 04:44:52 --> Helper loaded: url_helper
INFO - 2021-01-20 04:44:52 --> Helper loaded: file_helper
INFO - 2021-01-20 04:44:52 --> Helper loaded: security_helper
INFO - 2021-01-20 04:44:52 --> Helper loaded: form_helper
INFO - 2021-01-20 04:44:52 --> Helper loaded: access_helper
INFO - 2021-01-20 04:44:52 --> Helper loaded: date_helper
INFO - 2021-01-20 04:44:52 --> Database Driver Class Initialized
INFO - 2021-01-20 04:44:52 --> User Agent Class Initialized
INFO - 2021-01-20 04:44:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:44:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:44:52 --> Pagination Class Initialized
INFO - 2021-01-20 04:44:52 --> Form Validation Class Initialized
INFO - 2021-01-20 04:44:52 --> Controller Class Initialized
INFO - 2021-01-20 04:44:52 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:44:52 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/detail_riwayat.php
INFO - 2021-01-20 04:44:52 --> Final output sent to browser
INFO - 2021-01-20 04:45:02 --> Config Class Initialized
INFO - 2021-01-20 04:45:02 --> Hooks Class Initialized
INFO - 2021-01-20 04:45:02 --> Utf8 Class Initialized
INFO - 2021-01-20 04:45:02 --> URI Class Initialized
INFO - 2021-01-20 04:45:02 --> Router Class Initialized
INFO - 2021-01-20 04:45:02 --> Output Class Initialized
INFO - 2021-01-20 04:45:02 --> Security Class Initialized
INFO - 2021-01-20 04:45:02 --> Input Class Initialized
INFO - 2021-01-20 04:45:02 --> Language Class Initialized
INFO - 2021-01-20 04:45:02 --> Loader Class Initialized
INFO - 2021-01-20 04:45:02 --> Helper loaded: url_helper
INFO - 2021-01-20 04:45:02 --> Helper loaded: file_helper
INFO - 2021-01-20 04:45:02 --> Helper loaded: security_helper
INFO - 2021-01-20 04:45:02 --> Helper loaded: form_helper
INFO - 2021-01-20 04:45:02 --> Helper loaded: access_helper
INFO - 2021-01-20 04:45:02 --> Helper loaded: date_helper
INFO - 2021-01-20 04:45:02 --> Database Driver Class Initialized
INFO - 2021-01-20 04:45:02 --> User Agent Class Initialized
INFO - 2021-01-20 04:45:02 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:45:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:45:02 --> Pagination Class Initialized
INFO - 2021-01-20 04:45:02 --> Form Validation Class Initialized
INFO - 2021-01-20 04:45:02 --> Controller Class Initialized
INFO - 2021-01-20 04:45:02 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:45:02 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/detail_riwayat.php
INFO - 2021-01-20 04:45:02 --> Final output sent to browser
INFO - 2021-01-20 04:45:11 --> Config Class Initialized
INFO - 2021-01-20 04:45:11 --> Hooks Class Initialized
INFO - 2021-01-20 04:45:11 --> Utf8 Class Initialized
INFO - 2021-01-20 04:45:11 --> URI Class Initialized
INFO - 2021-01-20 04:45:11 --> Router Class Initialized
INFO - 2021-01-20 04:45:11 --> Output Class Initialized
INFO - 2021-01-20 04:45:11 --> Security Class Initialized
INFO - 2021-01-20 04:45:11 --> Input Class Initialized
INFO - 2021-01-20 04:45:11 --> Language Class Initialized
INFO - 2021-01-20 04:45:11 --> Loader Class Initialized
INFO - 2021-01-20 04:45:11 --> Helper loaded: url_helper
INFO - 2021-01-20 04:45:11 --> Helper loaded: file_helper
INFO - 2021-01-20 04:45:11 --> Helper loaded: security_helper
INFO - 2021-01-20 04:45:11 --> Helper loaded: form_helper
INFO - 2021-01-20 04:45:11 --> Helper loaded: access_helper
INFO - 2021-01-20 04:45:11 --> Helper loaded: date_helper
INFO - 2021-01-20 04:45:11 --> Database Driver Class Initialized
INFO - 2021-01-20 04:45:11 --> User Agent Class Initialized
INFO - 2021-01-20 04:45:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:45:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:45:11 --> Pagination Class Initialized
INFO - 2021-01-20 04:45:11 --> Form Validation Class Initialized
INFO - 2021-01-20 04:45:11 --> Controller Class Initialized
INFO - 2021-01-20 04:45:11 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:45:11 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/detail_riwayat.php
INFO - 2021-01-20 04:45:11 --> Final output sent to browser
INFO - 2021-01-20 04:45:28 --> Config Class Initialized
INFO - 2021-01-20 04:45:28 --> Hooks Class Initialized
INFO - 2021-01-20 04:45:28 --> Utf8 Class Initialized
INFO - 2021-01-20 04:45:28 --> URI Class Initialized
INFO - 2021-01-20 04:45:28 --> Router Class Initialized
INFO - 2021-01-20 04:45:28 --> Output Class Initialized
INFO - 2021-01-20 04:45:28 --> Security Class Initialized
INFO - 2021-01-20 04:45:28 --> Input Class Initialized
INFO - 2021-01-20 04:45:28 --> Language Class Initialized
INFO - 2021-01-20 04:45:28 --> Loader Class Initialized
INFO - 2021-01-20 04:45:28 --> Helper loaded: url_helper
INFO - 2021-01-20 04:45:28 --> Helper loaded: file_helper
INFO - 2021-01-20 04:45:28 --> Helper loaded: security_helper
INFO - 2021-01-20 04:45:28 --> Helper loaded: form_helper
INFO - 2021-01-20 04:45:28 --> Helper loaded: access_helper
INFO - 2021-01-20 04:45:28 --> Helper loaded: date_helper
INFO - 2021-01-20 04:45:28 --> Database Driver Class Initialized
INFO - 2021-01-20 04:45:28 --> User Agent Class Initialized
INFO - 2021-01-20 04:45:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:45:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:45:28 --> Pagination Class Initialized
INFO - 2021-01-20 04:45:28 --> Form Validation Class Initialized
INFO - 2021-01-20 04:45:28 --> Controller Class Initialized
INFO - 2021-01-20 04:45:28 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:45:28 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:45:28 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:45:28 --> Final output sent to browser
INFO - 2021-01-20 04:45:38 --> Config Class Initialized
INFO - 2021-01-20 04:45:38 --> Hooks Class Initialized
INFO - 2021-01-20 04:45:38 --> Utf8 Class Initialized
INFO - 2021-01-20 04:45:38 --> URI Class Initialized
INFO - 2021-01-20 04:45:38 --> Router Class Initialized
INFO - 2021-01-20 04:45:38 --> Output Class Initialized
INFO - 2021-01-20 04:45:38 --> Security Class Initialized
INFO - 2021-01-20 04:45:38 --> Input Class Initialized
INFO - 2021-01-20 04:45:38 --> Language Class Initialized
INFO - 2021-01-20 04:45:38 --> Loader Class Initialized
INFO - 2021-01-20 04:45:38 --> Helper loaded: url_helper
INFO - 2021-01-20 04:45:38 --> Helper loaded: file_helper
INFO - 2021-01-20 04:45:38 --> Helper loaded: security_helper
INFO - 2021-01-20 04:45:38 --> Helper loaded: form_helper
INFO - 2021-01-20 04:45:38 --> Helper loaded: access_helper
INFO - 2021-01-20 04:45:38 --> Helper loaded: date_helper
INFO - 2021-01-20 04:45:38 --> Database Driver Class Initialized
INFO - 2021-01-20 04:45:38 --> User Agent Class Initialized
INFO - 2021-01-20 04:45:38 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:45:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:45:38 --> Pagination Class Initialized
INFO - 2021-01-20 04:45:38 --> Form Validation Class Initialized
INFO - 2021-01-20 04:45:38 --> Controller Class Initialized
INFO - 2021-01-20 04:45:38 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:45:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:45:38 --> Final output sent to browser
INFO - 2021-01-20 04:45:41 --> Config Class Initialized
INFO - 2021-01-20 04:45:41 --> Hooks Class Initialized
INFO - 2021-01-20 04:45:41 --> Utf8 Class Initialized
INFO - 2021-01-20 04:45:41 --> URI Class Initialized
INFO - 2021-01-20 04:45:41 --> Router Class Initialized
INFO - 2021-01-20 04:45:41 --> Output Class Initialized
INFO - 2021-01-20 04:45:41 --> Security Class Initialized
INFO - 2021-01-20 04:45:41 --> Input Class Initialized
INFO - 2021-01-20 04:45:41 --> Language Class Initialized
INFO - 2021-01-20 04:45:41 --> Loader Class Initialized
INFO - 2021-01-20 04:45:41 --> Helper loaded: url_helper
INFO - 2021-01-20 04:45:41 --> Helper loaded: file_helper
INFO - 2021-01-20 04:45:41 --> Helper loaded: security_helper
INFO - 2021-01-20 04:45:41 --> Helper loaded: form_helper
INFO - 2021-01-20 04:45:41 --> Helper loaded: access_helper
INFO - 2021-01-20 04:45:41 --> Helper loaded: date_helper
INFO - 2021-01-20 04:45:41 --> Database Driver Class Initialized
INFO - 2021-01-20 04:45:41 --> User Agent Class Initialized
INFO - 2021-01-20 04:45:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:45:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:45:41 --> Pagination Class Initialized
INFO - 2021-01-20 04:45:41 --> Form Validation Class Initialized
INFO - 2021-01-20 04:45:41 --> Controller Class Initialized
INFO - 2021-01-20 04:45:41 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:45:41 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:45:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:45:41 --> Final output sent to browser
INFO - 2021-01-20 04:46:06 --> Config Class Initialized
INFO - 2021-01-20 04:46:06 --> Hooks Class Initialized
INFO - 2021-01-20 04:46:07 --> Utf8 Class Initialized
INFO - 2021-01-20 04:46:07 --> URI Class Initialized
INFO - 2021-01-20 04:46:07 --> Router Class Initialized
INFO - 2021-01-20 04:46:07 --> Output Class Initialized
INFO - 2021-01-20 04:46:07 --> Security Class Initialized
INFO - 2021-01-20 04:46:07 --> Input Class Initialized
INFO - 2021-01-20 04:46:07 --> Language Class Initialized
INFO - 2021-01-20 04:46:07 --> Loader Class Initialized
INFO - 2021-01-20 04:46:07 --> Helper loaded: url_helper
INFO - 2021-01-20 04:46:07 --> Helper loaded: file_helper
INFO - 2021-01-20 04:46:07 --> Helper loaded: security_helper
INFO - 2021-01-20 04:46:07 --> Helper loaded: form_helper
INFO - 2021-01-20 04:46:07 --> Helper loaded: access_helper
INFO - 2021-01-20 04:46:07 --> Helper loaded: date_helper
INFO - 2021-01-20 04:46:07 --> Database Driver Class Initialized
INFO - 2021-01-20 04:46:07 --> User Agent Class Initialized
INFO - 2021-01-20 04:46:07 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:46:07 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:46:07 --> Pagination Class Initialized
INFO - 2021-01-20 04:46:07 --> Form Validation Class Initialized
INFO - 2021-01-20 04:46:07 --> Controller Class Initialized
INFO - 2021-01-20 04:46:07 --> Model "Pasien_model" initialized
INFO - 2021-01-20 04:46:07 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:46:07 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\pasien/pasien.php
INFO - 2021-01-20 04:46:07 --> Final output sent to browser
INFO - 2021-01-20 04:46:08 --> Config Class Initialized
INFO - 2021-01-20 04:46:08 --> Hooks Class Initialized
INFO - 2021-01-20 04:46:08 --> Utf8 Class Initialized
INFO - 2021-01-20 04:46:08 --> URI Class Initialized
INFO - 2021-01-20 04:46:08 --> Router Class Initialized
INFO - 2021-01-20 04:46:08 --> Output Class Initialized
INFO - 2021-01-20 04:46:08 --> Security Class Initialized
INFO - 2021-01-20 04:46:08 --> Input Class Initialized
INFO - 2021-01-20 04:46:08 --> Language Class Initialized
INFO - 2021-01-20 04:46:08 --> Loader Class Initialized
INFO - 2021-01-20 04:46:08 --> Helper loaded: url_helper
INFO - 2021-01-20 04:46:08 --> Helper loaded: file_helper
INFO - 2021-01-20 04:46:08 --> Helper loaded: security_helper
INFO - 2021-01-20 04:46:08 --> Helper loaded: form_helper
INFO - 2021-01-20 04:46:08 --> Helper loaded: access_helper
INFO - 2021-01-20 04:46:08 --> Helper loaded: date_helper
INFO - 2021-01-20 04:46:08 --> Database Driver Class Initialized
INFO - 2021-01-20 04:46:08 --> User Agent Class Initialized
INFO - 2021-01-20 04:46:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:46:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:46:08 --> Pagination Class Initialized
INFO - 2021-01-20 04:46:08 --> Form Validation Class Initialized
INFO - 2021-01-20 04:46:08 --> Controller Class Initialized
INFO - 2021-01-20 04:46:08 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:46:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:46:08 --> Final output sent to browser
INFO - 2021-01-20 04:46:11 --> Config Class Initialized
INFO - 2021-01-20 04:46:11 --> Hooks Class Initialized
INFO - 2021-01-20 04:46:11 --> Utf8 Class Initialized
INFO - 2021-01-20 04:46:11 --> URI Class Initialized
INFO - 2021-01-20 04:46:11 --> Router Class Initialized
INFO - 2021-01-20 04:46:11 --> Output Class Initialized
INFO - 2021-01-20 04:46:11 --> Security Class Initialized
INFO - 2021-01-20 04:46:11 --> Input Class Initialized
INFO - 2021-01-20 04:46:11 --> Language Class Initialized
INFO - 2021-01-20 04:46:11 --> Loader Class Initialized
INFO - 2021-01-20 04:46:11 --> Helper loaded: url_helper
INFO - 2021-01-20 04:46:11 --> Helper loaded: file_helper
INFO - 2021-01-20 04:46:11 --> Helper loaded: security_helper
INFO - 2021-01-20 04:46:11 --> Helper loaded: form_helper
INFO - 2021-01-20 04:46:11 --> Helper loaded: access_helper
INFO - 2021-01-20 04:46:11 --> Helper loaded: date_helper
INFO - 2021-01-20 04:46:11 --> Database Driver Class Initialized
INFO - 2021-01-20 04:46:11 --> User Agent Class Initialized
INFO - 2021-01-20 04:46:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:46:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:46:11 --> Pagination Class Initialized
INFO - 2021-01-20 04:46:11 --> Form Validation Class Initialized
INFO - 2021-01-20 04:46:11 --> Controller Class Initialized
INFO - 2021-01-20 04:46:11 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:46:11 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:46:11 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:46:11 --> Final output sent to browser
INFO - 2021-01-20 04:46:13 --> Config Class Initialized
INFO - 2021-01-20 04:46:13 --> Hooks Class Initialized
INFO - 2021-01-20 04:46:13 --> Utf8 Class Initialized
INFO - 2021-01-20 04:46:13 --> URI Class Initialized
INFO - 2021-01-20 04:46:13 --> Router Class Initialized
INFO - 2021-01-20 04:46:13 --> Output Class Initialized
INFO - 2021-01-20 04:46:13 --> Security Class Initialized
INFO - 2021-01-20 04:46:13 --> Input Class Initialized
INFO - 2021-01-20 04:46:13 --> Language Class Initialized
INFO - 2021-01-20 04:46:13 --> Loader Class Initialized
INFO - 2021-01-20 04:46:13 --> Helper loaded: url_helper
INFO - 2021-01-20 04:46:13 --> Helper loaded: file_helper
INFO - 2021-01-20 04:46:13 --> Helper loaded: security_helper
INFO - 2021-01-20 04:46:13 --> Helper loaded: form_helper
INFO - 2021-01-20 04:46:13 --> Helper loaded: access_helper
INFO - 2021-01-20 04:46:13 --> Helper loaded: date_helper
INFO - 2021-01-20 04:46:14 --> Database Driver Class Initialized
INFO - 2021-01-20 04:46:14 --> User Agent Class Initialized
INFO - 2021-01-20 04:46:14 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:46:14 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:46:14 --> Pagination Class Initialized
INFO - 2021-01-20 04:46:14 --> Form Validation Class Initialized
INFO - 2021-01-20 04:46:14 --> Controller Class Initialized
INFO - 2021-01-20 04:46:14 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:46:14 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:46:14 --> Final output sent to browser
INFO - 2021-01-20 04:46:18 --> Config Class Initialized
INFO - 2021-01-20 04:46:18 --> Hooks Class Initialized
INFO - 2021-01-20 04:46:18 --> Utf8 Class Initialized
INFO - 2021-01-20 04:46:18 --> URI Class Initialized
INFO - 2021-01-20 04:46:18 --> Router Class Initialized
INFO - 2021-01-20 04:46:18 --> Output Class Initialized
INFO - 2021-01-20 04:46:18 --> Security Class Initialized
INFO - 2021-01-20 04:46:18 --> Input Class Initialized
INFO - 2021-01-20 04:46:18 --> Language Class Initialized
INFO - 2021-01-20 04:46:18 --> Loader Class Initialized
INFO - 2021-01-20 04:46:18 --> Helper loaded: url_helper
INFO - 2021-01-20 04:46:18 --> Helper loaded: file_helper
INFO - 2021-01-20 04:46:18 --> Helper loaded: security_helper
INFO - 2021-01-20 04:46:18 --> Helper loaded: form_helper
INFO - 2021-01-20 04:46:18 --> Helper loaded: access_helper
INFO - 2021-01-20 04:46:18 --> Helper loaded: date_helper
INFO - 2021-01-20 04:46:18 --> Database Driver Class Initialized
INFO - 2021-01-20 04:46:18 --> User Agent Class Initialized
INFO - 2021-01-20 04:46:18 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:46:18 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:46:18 --> Pagination Class Initialized
INFO - 2021-01-20 04:46:18 --> Form Validation Class Initialized
INFO - 2021-01-20 04:46:18 --> Controller Class Initialized
INFO - 2021-01-20 04:46:18 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:46:18 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:46:18 --> Final output sent to browser
INFO - 2021-01-20 04:49:03 --> Config Class Initialized
INFO - 2021-01-20 04:49:03 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:03 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:03 --> URI Class Initialized
INFO - 2021-01-20 04:49:03 --> Router Class Initialized
INFO - 2021-01-20 04:49:03 --> Output Class Initialized
INFO - 2021-01-20 04:49:03 --> Security Class Initialized
INFO - 2021-01-20 04:49:03 --> Input Class Initialized
INFO - 2021-01-20 04:49:03 --> Language Class Initialized
INFO - 2021-01-20 04:49:03 --> Loader Class Initialized
INFO - 2021-01-20 04:49:03 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:03 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:03 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:03 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:03 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:03 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:03 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:03 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:03 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:03 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:03 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:03 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:03 --> Controller Class Initialized
INFO - 2021-01-20 04:49:03 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:03 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:49:03 --> Final output sent to browser
INFO - 2021-01-20 04:49:06 --> Config Class Initialized
INFO - 2021-01-20 04:49:06 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:06 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:06 --> URI Class Initialized
INFO - 2021-01-20 04:49:06 --> Router Class Initialized
INFO - 2021-01-20 04:49:06 --> Output Class Initialized
INFO - 2021-01-20 04:49:06 --> Security Class Initialized
INFO - 2021-01-20 04:49:06 --> Input Class Initialized
INFO - 2021-01-20 04:49:06 --> Language Class Initialized
INFO - 2021-01-20 04:49:06 --> Loader Class Initialized
INFO - 2021-01-20 04:49:06 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:06 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:06 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:06 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:06 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:06 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:06 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:06 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:06 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:06 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:06 --> Controller Class Initialized
INFO - 2021-01-20 04:49:06 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:06 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:49:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:49:06 --> Final output sent to browser
INFO - 2021-01-20 04:49:08 --> Config Class Initialized
INFO - 2021-01-20 04:49:08 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:08 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:08 --> URI Class Initialized
INFO - 2021-01-20 04:49:08 --> Router Class Initialized
INFO - 2021-01-20 04:49:08 --> Output Class Initialized
INFO - 2021-01-20 04:49:08 --> Security Class Initialized
INFO - 2021-01-20 04:49:08 --> Input Class Initialized
INFO - 2021-01-20 04:49:08 --> Language Class Initialized
INFO - 2021-01-20 04:49:08 --> Loader Class Initialized
INFO - 2021-01-20 04:49:08 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:08 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:08 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:08 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:08 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:08 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:08 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:08 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:08 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:08 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:08 --> Controller Class Initialized
INFO - 2021-01-20 04:49:08 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:49:08 --> Final output sent to browser
INFO - 2021-01-20 04:49:11 --> Config Class Initialized
INFO - 2021-01-20 04:49:11 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:11 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:11 --> URI Class Initialized
INFO - 2021-01-20 04:49:11 --> Router Class Initialized
INFO - 2021-01-20 04:49:11 --> Output Class Initialized
INFO - 2021-01-20 04:49:11 --> Security Class Initialized
INFO - 2021-01-20 04:49:11 --> Input Class Initialized
INFO - 2021-01-20 04:49:11 --> Language Class Initialized
INFO - 2021-01-20 04:49:11 --> Loader Class Initialized
INFO - 2021-01-20 04:49:11 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:11 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:11 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:11 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:11 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:11 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:11 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:11 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:11 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:11 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:11 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:11 --> Controller Class Initialized
INFO - 2021-01-20 04:49:11 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:11 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:49:11 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:49:11 --> Final output sent to browser
INFO - 2021-01-20 04:49:28 --> Config Class Initialized
INFO - 2021-01-20 04:49:28 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:28 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:28 --> URI Class Initialized
INFO - 2021-01-20 04:49:28 --> Router Class Initialized
INFO - 2021-01-20 04:49:28 --> Output Class Initialized
INFO - 2021-01-20 04:49:28 --> Security Class Initialized
INFO - 2021-01-20 04:49:28 --> Input Class Initialized
INFO - 2021-01-20 04:49:28 --> Language Class Initialized
INFO - 2021-01-20 04:49:28 --> Loader Class Initialized
INFO - 2021-01-20 04:49:28 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:28 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:28 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:28 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:28 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:28 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:28 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:28 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:28 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:28 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:28 --> Controller Class Initialized
INFO - 2021-01-20 04:49:28 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:28 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:49:28 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:49:28 --> Final output sent to browser
INFO - 2021-01-20 04:49:30 --> Config Class Initialized
INFO - 2021-01-20 04:49:30 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:30 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:30 --> URI Class Initialized
INFO - 2021-01-20 04:49:30 --> Router Class Initialized
INFO - 2021-01-20 04:49:30 --> Output Class Initialized
INFO - 2021-01-20 04:49:30 --> Security Class Initialized
INFO - 2021-01-20 04:49:30 --> Input Class Initialized
INFO - 2021-01-20 04:49:30 --> Language Class Initialized
INFO - 2021-01-20 04:49:30 --> Loader Class Initialized
INFO - 2021-01-20 04:49:30 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:30 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:30 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:30 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:30 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:30 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:30 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:30 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:30 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:30 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:30 --> Controller Class Initialized
INFO - 2021-01-20 04:49:30 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:30 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:49:30 --> Final output sent to browser
INFO - 2021-01-20 04:49:32 --> Config Class Initialized
INFO - 2021-01-20 04:49:32 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:32 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:32 --> URI Class Initialized
INFO - 2021-01-20 04:49:32 --> Router Class Initialized
INFO - 2021-01-20 04:49:32 --> Output Class Initialized
INFO - 2021-01-20 04:49:32 --> Security Class Initialized
INFO - 2021-01-20 04:49:32 --> Input Class Initialized
INFO - 2021-01-20 04:49:32 --> Language Class Initialized
INFO - 2021-01-20 04:49:32 --> Loader Class Initialized
INFO - 2021-01-20 04:49:32 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:32 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:32 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:32 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:32 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:32 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:32 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:32 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:32 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:32 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:32 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:32 --> Controller Class Initialized
INFO - 2021-01-20 04:49:32 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:32 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:49:32 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:49:32 --> Final output sent to browser
INFO - 2021-01-20 04:49:34 --> Config Class Initialized
INFO - 2021-01-20 04:49:34 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:34 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:34 --> URI Class Initialized
INFO - 2021-01-20 04:49:34 --> Router Class Initialized
INFO - 2021-01-20 04:49:34 --> Output Class Initialized
INFO - 2021-01-20 04:49:34 --> Security Class Initialized
INFO - 2021-01-20 04:49:34 --> Input Class Initialized
INFO - 2021-01-20 04:49:34 --> Language Class Initialized
INFO - 2021-01-20 04:49:34 --> Loader Class Initialized
INFO - 2021-01-20 04:49:34 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:34 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:34 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:34 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:34 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:34 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:34 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:34 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:34 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:34 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:34 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:34 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:34 --> Controller Class Initialized
INFO - 2021-01-20 04:49:34 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:34 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:49:34 --> Final output sent to browser
INFO - 2021-01-20 04:49:36 --> Config Class Initialized
INFO - 2021-01-20 04:49:36 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:36 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:36 --> URI Class Initialized
INFO - 2021-01-20 04:49:36 --> Router Class Initialized
INFO - 2021-01-20 04:49:36 --> Output Class Initialized
INFO - 2021-01-20 04:49:36 --> Security Class Initialized
INFO - 2021-01-20 04:49:36 --> Input Class Initialized
INFO - 2021-01-20 04:49:36 --> Language Class Initialized
INFO - 2021-01-20 04:49:36 --> Loader Class Initialized
INFO - 2021-01-20 04:49:36 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:36 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:36 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:36 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:36 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:36 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:36 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:36 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:36 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:36 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:36 --> Controller Class Initialized
INFO - 2021-01-20 04:49:36 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:36 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:49:36 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:49:36 --> Final output sent to browser
INFO - 2021-01-20 04:49:37 --> Config Class Initialized
INFO - 2021-01-20 04:49:37 --> Hooks Class Initialized
INFO - 2021-01-20 04:49:37 --> Utf8 Class Initialized
INFO - 2021-01-20 04:49:37 --> URI Class Initialized
INFO - 2021-01-20 04:49:37 --> Router Class Initialized
INFO - 2021-01-20 04:49:37 --> Output Class Initialized
INFO - 2021-01-20 04:49:37 --> Security Class Initialized
INFO - 2021-01-20 04:49:37 --> Input Class Initialized
INFO - 2021-01-20 04:49:37 --> Language Class Initialized
INFO - 2021-01-20 04:49:37 --> Loader Class Initialized
INFO - 2021-01-20 04:49:37 --> Helper loaded: url_helper
INFO - 2021-01-20 04:49:37 --> Helper loaded: file_helper
INFO - 2021-01-20 04:49:37 --> Helper loaded: security_helper
INFO - 2021-01-20 04:49:37 --> Helper loaded: form_helper
INFO - 2021-01-20 04:49:37 --> Helper loaded: access_helper
INFO - 2021-01-20 04:49:37 --> Helper loaded: date_helper
INFO - 2021-01-20 04:49:37 --> Database Driver Class Initialized
INFO - 2021-01-20 04:49:37 --> User Agent Class Initialized
INFO - 2021-01-20 04:49:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:49:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:49:37 --> Pagination Class Initialized
INFO - 2021-01-20 04:49:37 --> Form Validation Class Initialized
INFO - 2021-01-20 04:49:37 --> Controller Class Initialized
INFO - 2021-01-20 04:49:37 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:49:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:49:37 --> Final output sent to browser
INFO - 2021-01-20 04:50:21 --> Config Class Initialized
INFO - 2021-01-20 04:50:21 --> Hooks Class Initialized
INFO - 2021-01-20 04:50:21 --> Utf8 Class Initialized
INFO - 2021-01-20 04:50:21 --> URI Class Initialized
INFO - 2021-01-20 04:50:21 --> Router Class Initialized
INFO - 2021-01-20 04:50:21 --> Output Class Initialized
INFO - 2021-01-20 04:50:21 --> Security Class Initialized
INFO - 2021-01-20 04:50:21 --> Input Class Initialized
INFO - 2021-01-20 04:50:21 --> Language Class Initialized
INFO - 2021-01-20 04:50:21 --> Loader Class Initialized
INFO - 2021-01-20 04:50:21 --> Helper loaded: url_helper
INFO - 2021-01-20 04:50:21 --> Helper loaded: file_helper
INFO - 2021-01-20 04:50:21 --> Helper loaded: security_helper
INFO - 2021-01-20 04:50:21 --> Helper loaded: form_helper
INFO - 2021-01-20 04:50:21 --> Helper loaded: access_helper
INFO - 2021-01-20 04:50:21 --> Helper loaded: date_helper
INFO - 2021-01-20 04:50:21 --> Database Driver Class Initialized
INFO - 2021-01-20 04:50:21 --> User Agent Class Initialized
INFO - 2021-01-20 04:50:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:50:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:50:21 --> Pagination Class Initialized
INFO - 2021-01-20 04:50:21 --> Form Validation Class Initialized
INFO - 2021-01-20 04:50:21 --> Controller Class Initialized
INFO - 2021-01-20 04:50:21 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:50:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:50:21 --> Final output sent to browser
INFO - 2021-01-20 04:50:23 --> Config Class Initialized
INFO - 2021-01-20 04:50:23 --> Hooks Class Initialized
INFO - 2021-01-20 04:50:23 --> Utf8 Class Initialized
INFO - 2021-01-20 04:50:23 --> URI Class Initialized
INFO - 2021-01-20 04:50:23 --> Router Class Initialized
INFO - 2021-01-20 04:50:23 --> Output Class Initialized
INFO - 2021-01-20 04:50:23 --> Security Class Initialized
INFO - 2021-01-20 04:50:23 --> Input Class Initialized
INFO - 2021-01-20 04:50:23 --> Language Class Initialized
INFO - 2021-01-20 04:50:23 --> Loader Class Initialized
INFO - 2021-01-20 04:50:23 --> Helper loaded: url_helper
INFO - 2021-01-20 04:50:23 --> Helper loaded: file_helper
INFO - 2021-01-20 04:50:23 --> Helper loaded: security_helper
INFO - 2021-01-20 04:50:23 --> Helper loaded: form_helper
INFO - 2021-01-20 04:50:23 --> Helper loaded: access_helper
INFO - 2021-01-20 04:50:23 --> Helper loaded: date_helper
INFO - 2021-01-20 04:50:23 --> Database Driver Class Initialized
INFO - 2021-01-20 04:50:23 --> User Agent Class Initialized
INFO - 2021-01-20 04:50:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:50:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:50:23 --> Pagination Class Initialized
INFO - 2021-01-20 04:50:23 --> Form Validation Class Initialized
INFO - 2021-01-20 04:50:23 --> Controller Class Initialized
INFO - 2021-01-20 04:50:23 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:50:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:50:23 --> Final output sent to browser
INFO - 2021-01-20 04:50:49 --> Config Class Initialized
INFO - 2021-01-20 04:50:49 --> Hooks Class Initialized
INFO - 2021-01-20 04:50:49 --> Utf8 Class Initialized
INFO - 2021-01-20 04:50:49 --> URI Class Initialized
INFO - 2021-01-20 04:50:49 --> Router Class Initialized
INFO - 2021-01-20 04:50:49 --> Output Class Initialized
INFO - 2021-01-20 04:50:49 --> Security Class Initialized
INFO - 2021-01-20 04:50:49 --> Input Class Initialized
INFO - 2021-01-20 04:50:49 --> Language Class Initialized
INFO - 2021-01-20 04:50:49 --> Loader Class Initialized
INFO - 2021-01-20 04:50:49 --> Helper loaded: url_helper
INFO - 2021-01-20 04:50:49 --> Helper loaded: file_helper
INFO - 2021-01-20 04:50:49 --> Helper loaded: security_helper
INFO - 2021-01-20 04:50:49 --> Helper loaded: form_helper
INFO - 2021-01-20 04:50:49 --> Helper loaded: access_helper
INFO - 2021-01-20 04:50:49 --> Helper loaded: date_helper
INFO - 2021-01-20 04:50:49 --> Database Driver Class Initialized
INFO - 2021-01-20 04:50:49 --> User Agent Class Initialized
INFO - 2021-01-20 04:50:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:50:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:50:49 --> Pagination Class Initialized
INFO - 2021-01-20 04:50:49 --> Form Validation Class Initialized
INFO - 2021-01-20 04:50:49 --> Controller Class Initialized
INFO - 2021-01-20 04:50:49 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:50:49 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:50:49 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:50:49 --> Final output sent to browser
INFO - 2021-01-20 04:50:54 --> Config Class Initialized
INFO - 2021-01-20 04:50:54 --> Hooks Class Initialized
INFO - 2021-01-20 04:50:54 --> Utf8 Class Initialized
INFO - 2021-01-20 04:50:54 --> URI Class Initialized
INFO - 2021-01-20 04:50:54 --> Router Class Initialized
INFO - 2021-01-20 04:50:54 --> Output Class Initialized
INFO - 2021-01-20 04:50:54 --> Security Class Initialized
INFO - 2021-01-20 04:50:54 --> Input Class Initialized
INFO - 2021-01-20 04:50:54 --> Language Class Initialized
INFO - 2021-01-20 04:50:54 --> Loader Class Initialized
INFO - 2021-01-20 04:50:54 --> Helper loaded: url_helper
INFO - 2021-01-20 04:50:54 --> Helper loaded: file_helper
INFO - 2021-01-20 04:50:54 --> Helper loaded: security_helper
INFO - 2021-01-20 04:50:54 --> Helper loaded: form_helper
INFO - 2021-01-20 04:50:54 --> Helper loaded: access_helper
INFO - 2021-01-20 04:50:54 --> Helper loaded: date_helper
INFO - 2021-01-20 04:50:54 --> Database Driver Class Initialized
INFO - 2021-01-20 04:50:54 --> User Agent Class Initialized
INFO - 2021-01-20 04:50:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:50:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:50:54 --> Pagination Class Initialized
INFO - 2021-01-20 04:50:54 --> Form Validation Class Initialized
INFO - 2021-01-20 04:50:54 --> Controller Class Initialized
INFO - 2021-01-20 04:50:54 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:50:55 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:50:55 --> Final output sent to browser
INFO - 2021-01-20 04:52:41 --> Config Class Initialized
INFO - 2021-01-20 04:52:41 --> Hooks Class Initialized
INFO - 2021-01-20 04:52:41 --> Utf8 Class Initialized
INFO - 2021-01-20 04:52:41 --> URI Class Initialized
INFO - 2021-01-20 04:52:41 --> Router Class Initialized
INFO - 2021-01-20 04:52:41 --> Output Class Initialized
INFO - 2021-01-20 04:52:41 --> Security Class Initialized
INFO - 2021-01-20 04:52:41 --> Input Class Initialized
INFO - 2021-01-20 04:52:41 --> Language Class Initialized
INFO - 2021-01-20 04:52:42 --> Loader Class Initialized
INFO - 2021-01-20 04:52:42 --> Helper loaded: url_helper
INFO - 2021-01-20 04:52:42 --> Helper loaded: file_helper
INFO - 2021-01-20 04:52:42 --> Helper loaded: security_helper
INFO - 2021-01-20 04:52:42 --> Helper loaded: form_helper
INFO - 2021-01-20 04:52:42 --> Helper loaded: access_helper
INFO - 2021-01-20 04:52:42 --> Helper loaded: date_helper
INFO - 2021-01-20 04:52:42 --> Database Driver Class Initialized
INFO - 2021-01-20 04:52:42 --> User Agent Class Initialized
INFO - 2021-01-20 04:52:42 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:52:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:52:42 --> Pagination Class Initialized
INFO - 2021-01-20 04:52:42 --> Form Validation Class Initialized
INFO - 2021-01-20 04:52:42 --> Controller Class Initialized
INFO - 2021-01-20 04:52:42 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:52:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:52:42 --> Final output sent to browser
INFO - 2021-01-20 04:52:44 --> Config Class Initialized
INFO - 2021-01-20 04:52:44 --> Hooks Class Initialized
INFO - 2021-01-20 04:52:44 --> Utf8 Class Initialized
INFO - 2021-01-20 04:52:44 --> URI Class Initialized
INFO - 2021-01-20 04:52:44 --> Router Class Initialized
INFO - 2021-01-20 04:52:44 --> Output Class Initialized
INFO - 2021-01-20 04:52:44 --> Security Class Initialized
INFO - 2021-01-20 04:52:44 --> Input Class Initialized
INFO - 2021-01-20 04:52:44 --> Language Class Initialized
INFO - 2021-01-20 04:52:44 --> Loader Class Initialized
INFO - 2021-01-20 04:52:44 --> Helper loaded: url_helper
INFO - 2021-01-20 04:52:44 --> Helper loaded: file_helper
INFO - 2021-01-20 04:52:44 --> Helper loaded: security_helper
INFO - 2021-01-20 04:52:44 --> Helper loaded: form_helper
INFO - 2021-01-20 04:52:44 --> Helper loaded: access_helper
INFO - 2021-01-20 04:52:44 --> Helper loaded: date_helper
INFO - 2021-01-20 04:52:44 --> Database Driver Class Initialized
INFO - 2021-01-20 04:52:44 --> User Agent Class Initialized
INFO - 2021-01-20 04:52:44 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:52:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:52:44 --> Pagination Class Initialized
INFO - 2021-01-20 04:52:44 --> Form Validation Class Initialized
INFO - 2021-01-20 04:52:44 --> Controller Class Initialized
INFO - 2021-01-20 04:52:44 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:52:44 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:52:44 --> Final output sent to browser
INFO - 2021-01-20 04:52:47 --> Config Class Initialized
INFO - 2021-01-20 04:52:47 --> Hooks Class Initialized
INFO - 2021-01-20 04:52:47 --> Utf8 Class Initialized
INFO - 2021-01-20 04:52:47 --> URI Class Initialized
INFO - 2021-01-20 04:52:47 --> Router Class Initialized
INFO - 2021-01-20 04:52:47 --> Output Class Initialized
INFO - 2021-01-20 04:52:47 --> Security Class Initialized
INFO - 2021-01-20 04:52:47 --> Input Class Initialized
INFO - 2021-01-20 04:52:47 --> Language Class Initialized
INFO - 2021-01-20 04:52:47 --> Loader Class Initialized
INFO - 2021-01-20 04:52:47 --> Helper loaded: url_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: file_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: security_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: form_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: access_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: date_helper
INFO - 2021-01-20 04:52:47 --> Database Driver Class Initialized
INFO - 2021-01-20 04:52:47 --> User Agent Class Initialized
INFO - 2021-01-20 04:52:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:52:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:52:47 --> Pagination Class Initialized
INFO - 2021-01-20 04:52:47 --> Form Validation Class Initialized
INFO - 2021-01-20 04:52:47 --> Controller Class Initialized
INFO - 2021-01-20 04:52:47 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:52:47 --> Config Class Initialized
INFO - 2021-01-20 04:52:47 --> Hooks Class Initialized
INFO - 2021-01-20 04:52:47 --> Utf8 Class Initialized
INFO - 2021-01-20 04:52:47 --> URI Class Initialized
INFO - 2021-01-20 04:52:47 --> Router Class Initialized
INFO - 2021-01-20 04:52:47 --> Output Class Initialized
INFO - 2021-01-20 04:52:47 --> Security Class Initialized
INFO - 2021-01-20 04:52:47 --> Input Class Initialized
INFO - 2021-01-20 04:52:47 --> Language Class Initialized
INFO - 2021-01-20 04:52:47 --> Loader Class Initialized
INFO - 2021-01-20 04:52:47 --> Helper loaded: url_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: file_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: security_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: form_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: access_helper
INFO - 2021-01-20 04:52:47 --> Helper loaded: date_helper
INFO - 2021-01-20 04:52:47 --> Database Driver Class Initialized
INFO - 2021-01-20 04:52:47 --> User Agent Class Initialized
INFO - 2021-01-20 04:52:47 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:52:47 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:52:47 --> Pagination Class Initialized
INFO - 2021-01-20 04:52:47 --> Form Validation Class Initialized
INFO - 2021-01-20 04:52:47 --> Controller Class Initialized
INFO - 2021-01-20 04:52:47 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:52:47 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 04:52:47 --> Final output sent to browser
INFO - 2021-01-20 04:52:50 --> Config Class Initialized
INFO - 2021-01-20 04:52:50 --> Hooks Class Initialized
INFO - 2021-01-20 04:52:50 --> Utf8 Class Initialized
INFO - 2021-01-20 04:52:50 --> URI Class Initialized
INFO - 2021-01-20 04:52:50 --> Router Class Initialized
INFO - 2021-01-20 04:52:50 --> Output Class Initialized
INFO - 2021-01-20 04:52:50 --> Security Class Initialized
INFO - 2021-01-20 04:52:50 --> Input Class Initialized
INFO - 2021-01-20 04:52:50 --> Language Class Initialized
INFO - 2021-01-20 04:52:50 --> Loader Class Initialized
INFO - 2021-01-20 04:52:50 --> Helper loaded: url_helper
INFO - 2021-01-20 04:52:50 --> Helper loaded: file_helper
INFO - 2021-01-20 04:52:50 --> Helper loaded: security_helper
INFO - 2021-01-20 04:52:50 --> Helper loaded: form_helper
INFO - 2021-01-20 04:52:50 --> Helper loaded: access_helper
INFO - 2021-01-20 04:52:50 --> Helper loaded: date_helper
INFO - 2021-01-20 04:52:50 --> Database Driver Class Initialized
INFO - 2021-01-20 04:52:50 --> User Agent Class Initialized
INFO - 2021-01-20 04:52:50 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:52:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:52:50 --> Pagination Class Initialized
INFO - 2021-01-20 04:52:50 --> Form Validation Class Initialized
INFO - 2021-01-20 04:52:50 --> Controller Class Initialized
INFO - 2021-01-20 04:52:50 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:52:50 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:52:50 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:52:50 --> Final output sent to browser
INFO - 2021-01-20 04:52:51 --> Config Class Initialized
INFO - 2021-01-20 04:52:51 --> Hooks Class Initialized
INFO - 2021-01-20 04:52:51 --> Utf8 Class Initialized
INFO - 2021-01-20 04:52:51 --> URI Class Initialized
INFO - 2021-01-20 04:52:51 --> Router Class Initialized
INFO - 2021-01-20 04:52:51 --> Output Class Initialized
INFO - 2021-01-20 04:52:51 --> Security Class Initialized
INFO - 2021-01-20 04:52:51 --> Input Class Initialized
INFO - 2021-01-20 04:52:51 --> Language Class Initialized
INFO - 2021-01-20 04:52:51 --> Loader Class Initialized
INFO - 2021-01-20 04:52:51 --> Helper loaded: url_helper
INFO - 2021-01-20 04:52:51 --> Helper loaded: file_helper
INFO - 2021-01-20 04:52:51 --> Helper loaded: security_helper
INFO - 2021-01-20 04:52:51 --> Helper loaded: form_helper
INFO - 2021-01-20 04:52:51 --> Helper loaded: access_helper
INFO - 2021-01-20 04:52:51 --> Helper loaded: date_helper
INFO - 2021-01-20 04:52:51 --> Database Driver Class Initialized
INFO - 2021-01-20 04:52:51 --> User Agent Class Initialized
INFO - 2021-01-20 04:52:51 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:52:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:52:51 --> Pagination Class Initialized
INFO - 2021-01-20 04:52:51 --> Form Validation Class Initialized
INFO - 2021-01-20 04:52:51 --> Controller Class Initialized
INFO - 2021-01-20 04:52:51 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:52:51 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:52:51 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 04:52:51 --> Final output sent to browser
INFO - 2021-01-20 04:56:10 --> Config Class Initialized
INFO - 2021-01-20 04:56:10 --> Hooks Class Initialized
INFO - 2021-01-20 04:56:10 --> Utf8 Class Initialized
INFO - 2021-01-20 04:56:10 --> URI Class Initialized
INFO - 2021-01-20 04:56:10 --> Router Class Initialized
INFO - 2021-01-20 04:56:10 --> Output Class Initialized
INFO - 2021-01-20 04:56:10 --> Security Class Initialized
INFO - 2021-01-20 04:56:10 --> Input Class Initialized
INFO - 2021-01-20 04:56:10 --> Language Class Initialized
INFO - 2021-01-20 04:56:10 --> Loader Class Initialized
INFO - 2021-01-20 04:56:10 --> Helper loaded: url_helper
INFO - 2021-01-20 04:56:10 --> Helper loaded: file_helper
INFO - 2021-01-20 04:56:10 --> Helper loaded: security_helper
INFO - 2021-01-20 04:56:10 --> Helper loaded: form_helper
INFO - 2021-01-20 04:56:10 --> Helper loaded: access_helper
INFO - 2021-01-20 04:56:10 --> Helper loaded: date_helper
INFO - 2021-01-20 04:56:10 --> Database Driver Class Initialized
INFO - 2021-01-20 04:56:10 --> User Agent Class Initialized
INFO - 2021-01-20 04:56:10 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:56:10 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:56:10 --> Pagination Class Initialized
INFO - 2021-01-20 04:56:10 --> Form Validation Class Initialized
INFO - 2021-01-20 04:56:10 --> Controller Class Initialized
INFO - 2021-01-20 04:56:10 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:56:10 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 04:56:10 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 04:56:10 --> Final output sent to browser
INFO - 2021-01-20 04:56:22 --> Config Class Initialized
INFO - 2021-01-20 04:56:22 --> Hooks Class Initialized
INFO - 2021-01-20 04:56:22 --> Utf8 Class Initialized
INFO - 2021-01-20 04:56:22 --> URI Class Initialized
INFO - 2021-01-20 04:56:22 --> Router Class Initialized
INFO - 2021-01-20 04:56:22 --> Output Class Initialized
INFO - 2021-01-20 04:56:22 --> Security Class Initialized
INFO - 2021-01-20 04:56:22 --> Input Class Initialized
INFO - 2021-01-20 04:56:22 --> Language Class Initialized
INFO - 2021-01-20 04:56:22 --> Loader Class Initialized
INFO - 2021-01-20 04:56:22 --> Helper loaded: url_helper
INFO - 2021-01-20 04:56:22 --> Helper loaded: file_helper
INFO - 2021-01-20 04:56:22 --> Helper loaded: security_helper
INFO - 2021-01-20 04:56:22 --> Helper loaded: form_helper
INFO - 2021-01-20 04:56:22 --> Helper loaded: access_helper
INFO - 2021-01-20 04:56:22 --> Helper loaded: date_helper
INFO - 2021-01-20 04:56:22 --> Database Driver Class Initialized
INFO - 2021-01-20 04:56:22 --> User Agent Class Initialized
INFO - 2021-01-20 04:56:22 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:56:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:56:22 --> Pagination Class Initialized
INFO - 2021-01-20 04:56:22 --> Form Validation Class Initialized
INFO - 2021-01-20 04:56:22 --> Controller Class Initialized
INFO - 2021-01-20 04:56:22 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:56:22 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:56:22 --> Final output sent to browser
INFO - 2021-01-20 04:58:34 --> Config Class Initialized
INFO - 2021-01-20 04:58:34 --> Hooks Class Initialized
INFO - 2021-01-20 04:58:34 --> Utf8 Class Initialized
INFO - 2021-01-20 04:58:34 --> URI Class Initialized
INFO - 2021-01-20 04:58:34 --> Router Class Initialized
INFO - 2021-01-20 04:58:34 --> Output Class Initialized
INFO - 2021-01-20 04:58:34 --> Security Class Initialized
INFO - 2021-01-20 04:58:34 --> Input Class Initialized
INFO - 2021-01-20 04:58:34 --> Language Class Initialized
INFO - 2021-01-20 04:58:34 --> Loader Class Initialized
INFO - 2021-01-20 04:58:34 --> Helper loaded: url_helper
INFO - 2021-01-20 04:58:34 --> Helper loaded: file_helper
INFO - 2021-01-20 04:58:34 --> Helper loaded: security_helper
INFO - 2021-01-20 04:58:34 --> Helper loaded: form_helper
INFO - 2021-01-20 04:58:34 --> Helper loaded: access_helper
INFO - 2021-01-20 04:58:34 --> Helper loaded: date_helper
INFO - 2021-01-20 04:58:34 --> Database Driver Class Initialized
INFO - 2021-01-20 04:58:35 --> User Agent Class Initialized
INFO - 2021-01-20 04:58:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:58:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:58:35 --> Pagination Class Initialized
INFO - 2021-01-20 04:58:35 --> Form Validation Class Initialized
INFO - 2021-01-20 04:58:35 --> Controller Class Initialized
INFO - 2021-01-20 04:58:35 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:58:35 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:58:35 --> Final output sent to browser
INFO - 2021-01-20 04:58:36 --> Config Class Initialized
INFO - 2021-01-20 04:58:36 --> Hooks Class Initialized
INFO - 2021-01-20 04:58:36 --> Utf8 Class Initialized
INFO - 2021-01-20 04:58:36 --> URI Class Initialized
INFO - 2021-01-20 04:58:36 --> Router Class Initialized
INFO - 2021-01-20 04:58:36 --> Output Class Initialized
INFO - 2021-01-20 04:58:36 --> Security Class Initialized
INFO - 2021-01-20 04:58:36 --> Input Class Initialized
INFO - 2021-01-20 04:58:36 --> Language Class Initialized
INFO - 2021-01-20 04:58:36 --> Loader Class Initialized
INFO - 2021-01-20 04:58:36 --> Helper loaded: url_helper
INFO - 2021-01-20 04:58:36 --> Helper loaded: file_helper
INFO - 2021-01-20 04:58:36 --> Helper loaded: security_helper
INFO - 2021-01-20 04:58:36 --> Helper loaded: form_helper
INFO - 2021-01-20 04:58:36 --> Helper loaded: access_helper
INFO - 2021-01-20 04:58:36 --> Helper loaded: date_helper
INFO - 2021-01-20 04:58:36 --> Database Driver Class Initialized
INFO - 2021-01-20 04:58:36 --> User Agent Class Initialized
INFO - 2021-01-20 04:58:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 04:58:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 04:58:36 --> Pagination Class Initialized
INFO - 2021-01-20 04:58:36 --> Form Validation Class Initialized
INFO - 2021-01-20 04:58:36 --> Controller Class Initialized
INFO - 2021-01-20 04:58:36 --> Model "Periksa_model" initialized
INFO - 2021-01-20 04:58:36 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 04:58:36 --> Final output sent to browser
INFO - 2021-01-20 05:00:48 --> Config Class Initialized
INFO - 2021-01-20 05:00:48 --> Hooks Class Initialized
INFO - 2021-01-20 05:00:48 --> Utf8 Class Initialized
INFO - 2021-01-20 05:00:48 --> URI Class Initialized
INFO - 2021-01-20 05:00:48 --> Router Class Initialized
INFO - 2021-01-20 05:00:48 --> Output Class Initialized
INFO - 2021-01-20 05:00:48 --> Security Class Initialized
INFO - 2021-01-20 05:00:48 --> Input Class Initialized
INFO - 2021-01-20 05:00:48 --> Language Class Initialized
INFO - 2021-01-20 05:00:48 --> Loader Class Initialized
INFO - 2021-01-20 05:00:48 --> Helper loaded: url_helper
INFO - 2021-01-20 05:00:48 --> Helper loaded: file_helper
INFO - 2021-01-20 05:00:48 --> Helper loaded: security_helper
INFO - 2021-01-20 05:00:48 --> Helper loaded: form_helper
INFO - 2021-01-20 05:00:48 --> Helper loaded: access_helper
INFO - 2021-01-20 05:00:48 --> Helper loaded: date_helper
INFO - 2021-01-20 05:00:48 --> Database Driver Class Initialized
INFO - 2021-01-20 05:00:48 --> User Agent Class Initialized
INFO - 2021-01-20 05:00:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:00:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:00:48 --> Pagination Class Initialized
INFO - 2021-01-20 05:00:48 --> Form Validation Class Initialized
INFO - 2021-01-20 05:00:48 --> Controller Class Initialized
INFO - 2021-01-20 05:00:48 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:00:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 05:00:48 --> Final output sent to browser
INFO - 2021-01-20 05:00:49 --> Config Class Initialized
INFO - 2021-01-20 05:00:49 --> Hooks Class Initialized
INFO - 2021-01-20 05:00:49 --> Utf8 Class Initialized
INFO - 2021-01-20 05:00:49 --> URI Class Initialized
INFO - 2021-01-20 05:00:49 --> Router Class Initialized
INFO - 2021-01-20 05:00:49 --> Output Class Initialized
INFO - 2021-01-20 05:00:49 --> Security Class Initialized
INFO - 2021-01-20 05:00:49 --> Input Class Initialized
INFO - 2021-01-20 05:00:49 --> Language Class Initialized
INFO - 2021-01-20 05:00:49 --> Loader Class Initialized
INFO - 2021-01-20 05:00:49 --> Helper loaded: url_helper
INFO - 2021-01-20 05:00:49 --> Helper loaded: file_helper
INFO - 2021-01-20 05:00:49 --> Helper loaded: security_helper
INFO - 2021-01-20 05:00:49 --> Helper loaded: form_helper
INFO - 2021-01-20 05:00:49 --> Helper loaded: access_helper
INFO - 2021-01-20 05:00:49 --> Helper loaded: date_helper
INFO - 2021-01-20 05:00:49 --> Database Driver Class Initialized
INFO - 2021-01-20 05:00:49 --> User Agent Class Initialized
INFO - 2021-01-20 05:00:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:00:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:00:49 --> Pagination Class Initialized
INFO - 2021-01-20 05:00:49 --> Form Validation Class Initialized
INFO - 2021-01-20 05:00:49 --> Controller Class Initialized
INFO - 2021-01-20 05:00:49 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:00:49 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 05:00:49 --> Final output sent to browser
INFO - 2021-01-20 05:00:58 --> Config Class Initialized
INFO - 2021-01-20 05:00:58 --> Hooks Class Initialized
INFO - 2021-01-20 05:00:58 --> Utf8 Class Initialized
INFO - 2021-01-20 05:00:58 --> URI Class Initialized
INFO - 2021-01-20 05:00:58 --> Router Class Initialized
INFO - 2021-01-20 05:00:58 --> Output Class Initialized
INFO - 2021-01-20 05:00:58 --> Security Class Initialized
INFO - 2021-01-20 05:00:58 --> Input Class Initialized
INFO - 2021-01-20 05:00:58 --> Language Class Initialized
INFO - 2021-01-20 05:00:58 --> Loader Class Initialized
INFO - 2021-01-20 05:00:58 --> Helper loaded: url_helper
INFO - 2021-01-20 05:00:58 --> Helper loaded: file_helper
INFO - 2021-01-20 05:00:58 --> Helper loaded: security_helper
INFO - 2021-01-20 05:00:58 --> Helper loaded: form_helper
INFO - 2021-01-20 05:00:58 --> Helper loaded: access_helper
INFO - 2021-01-20 05:00:58 --> Helper loaded: date_helper
INFO - 2021-01-20 05:00:58 --> Database Driver Class Initialized
INFO - 2021-01-20 05:00:58 --> User Agent Class Initialized
INFO - 2021-01-20 05:00:58 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:00:58 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:00:58 --> Pagination Class Initialized
INFO - 2021-01-20 05:00:58 --> Form Validation Class Initialized
INFO - 2021-01-20 05:00:58 --> Controller Class Initialized
INFO - 2021-01-20 05:00:58 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:00:58 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 05:00:58 --> Final output sent to browser
INFO - 2021-01-20 05:00:59 --> Config Class Initialized
INFO - 2021-01-20 05:00:59 --> Hooks Class Initialized
INFO - 2021-01-20 05:00:59 --> Utf8 Class Initialized
INFO - 2021-01-20 05:00:59 --> URI Class Initialized
INFO - 2021-01-20 05:00:59 --> Router Class Initialized
INFO - 2021-01-20 05:00:59 --> Output Class Initialized
INFO - 2021-01-20 05:00:59 --> Security Class Initialized
INFO - 2021-01-20 05:00:59 --> Input Class Initialized
INFO - 2021-01-20 05:00:59 --> Language Class Initialized
INFO - 2021-01-20 05:00:59 --> Loader Class Initialized
INFO - 2021-01-20 05:00:59 --> Helper loaded: url_helper
INFO - 2021-01-20 05:00:59 --> Helper loaded: file_helper
INFO - 2021-01-20 05:00:59 --> Helper loaded: security_helper
INFO - 2021-01-20 05:00:59 --> Helper loaded: form_helper
INFO - 2021-01-20 05:00:59 --> Helper loaded: access_helper
INFO - 2021-01-20 05:00:59 --> Helper loaded: date_helper
INFO - 2021-01-20 05:00:59 --> Database Driver Class Initialized
INFO - 2021-01-20 05:00:59 --> User Agent Class Initialized
INFO - 2021-01-20 05:00:59 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:00:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:00:59 --> Pagination Class Initialized
INFO - 2021-01-20 05:00:59 --> Form Validation Class Initialized
INFO - 2021-01-20 05:00:59 --> Controller Class Initialized
INFO - 2021-01-20 05:00:59 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:00:59 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 05:00:59 --> Final output sent to browser
INFO - 2021-01-20 05:03:33 --> Config Class Initialized
INFO - 2021-01-20 05:03:33 --> Hooks Class Initialized
INFO - 2021-01-20 05:03:33 --> Utf8 Class Initialized
INFO - 2021-01-20 05:03:33 --> URI Class Initialized
INFO - 2021-01-20 05:03:33 --> Router Class Initialized
INFO - 2021-01-20 05:03:33 --> Output Class Initialized
INFO - 2021-01-20 05:03:33 --> Security Class Initialized
INFO - 2021-01-20 05:03:33 --> Input Class Initialized
INFO - 2021-01-20 05:03:33 --> Language Class Initialized
INFO - 2021-01-20 05:03:33 --> Loader Class Initialized
INFO - 2021-01-20 05:03:33 --> Helper loaded: url_helper
INFO - 2021-01-20 05:03:33 --> Helper loaded: file_helper
INFO - 2021-01-20 05:03:33 --> Helper loaded: security_helper
INFO - 2021-01-20 05:03:33 --> Helper loaded: form_helper
INFO - 2021-01-20 05:03:33 --> Helper loaded: access_helper
INFO - 2021-01-20 05:03:33 --> Helper loaded: date_helper
INFO - 2021-01-20 05:03:33 --> Database Driver Class Initialized
INFO - 2021-01-20 05:03:33 --> User Agent Class Initialized
INFO - 2021-01-20 05:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:03:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:03:33 --> Pagination Class Initialized
INFO - 2021-01-20 05:03:33 --> Form Validation Class Initialized
INFO - 2021-01-20 05:03:33 --> Controller Class Initialized
INFO - 2021-01-20 05:03:33 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:03:33 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:03:33 --> Final output sent to browser
INFO - 2021-01-20 05:03:42 --> Config Class Initialized
INFO - 2021-01-20 05:03:42 --> Hooks Class Initialized
INFO - 2021-01-20 05:03:42 --> Utf8 Class Initialized
INFO - 2021-01-20 05:03:42 --> URI Class Initialized
INFO - 2021-01-20 05:03:42 --> Router Class Initialized
INFO - 2021-01-20 05:03:42 --> Output Class Initialized
INFO - 2021-01-20 05:03:42 --> Security Class Initialized
INFO - 2021-01-20 05:03:42 --> Input Class Initialized
INFO - 2021-01-20 05:03:42 --> Language Class Initialized
INFO - 2021-01-20 05:03:42 --> Loader Class Initialized
INFO - 2021-01-20 05:03:42 --> Helper loaded: url_helper
INFO - 2021-01-20 05:03:42 --> Helper loaded: file_helper
INFO - 2021-01-20 05:03:42 --> Helper loaded: security_helper
INFO - 2021-01-20 05:03:42 --> Helper loaded: form_helper
INFO - 2021-01-20 05:03:42 --> Helper loaded: access_helper
INFO - 2021-01-20 05:03:42 --> Helper loaded: date_helper
INFO - 2021-01-20 05:03:42 --> Database Driver Class Initialized
INFO - 2021-01-20 05:03:42 --> User Agent Class Initialized
INFO - 2021-01-20 05:03:42 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:03:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:03:42 --> Pagination Class Initialized
INFO - 2021-01-20 05:03:42 --> Form Validation Class Initialized
INFO - 2021-01-20 05:03:42 --> Controller Class Initialized
INFO - 2021-01-20 05:03:42 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:03:42 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:03:42 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 05:03:42 --> Final output sent to browser
INFO - 2021-01-20 05:10:20 --> Config Class Initialized
INFO - 2021-01-20 05:10:20 --> Hooks Class Initialized
INFO - 2021-01-20 05:10:20 --> Utf8 Class Initialized
INFO - 2021-01-20 05:10:20 --> URI Class Initialized
INFO - 2021-01-20 05:10:20 --> Router Class Initialized
INFO - 2021-01-20 05:10:20 --> Output Class Initialized
INFO - 2021-01-20 05:10:20 --> Security Class Initialized
INFO - 2021-01-20 05:10:20 --> Input Class Initialized
INFO - 2021-01-20 05:10:20 --> Language Class Initialized
INFO - 2021-01-20 05:10:20 --> Loader Class Initialized
INFO - 2021-01-20 05:10:20 --> Helper loaded: url_helper
INFO - 2021-01-20 05:10:20 --> Helper loaded: file_helper
INFO - 2021-01-20 05:10:20 --> Helper loaded: security_helper
INFO - 2021-01-20 05:10:20 --> Helper loaded: form_helper
INFO - 2021-01-20 05:10:20 --> Helper loaded: access_helper
INFO - 2021-01-20 05:10:20 --> Helper loaded: date_helper
INFO - 2021-01-20 05:10:20 --> Database Driver Class Initialized
INFO - 2021-01-20 05:10:20 --> User Agent Class Initialized
INFO - 2021-01-20 05:10:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:10:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:10:20 --> Pagination Class Initialized
INFO - 2021-01-20 05:10:20 --> Form Validation Class Initialized
INFO - 2021-01-20 05:10:20 --> Controller Class Initialized
INFO - 2021-01-20 05:10:20 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:10:20 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:10:20 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:10:20 --> Final output sent to browser
INFO - 2021-01-20 05:13:31 --> Config Class Initialized
INFO - 2021-01-20 05:13:31 --> Hooks Class Initialized
INFO - 2021-01-20 05:13:31 --> Utf8 Class Initialized
INFO - 2021-01-20 05:13:31 --> URI Class Initialized
INFO - 2021-01-20 05:13:31 --> Router Class Initialized
INFO - 2021-01-20 05:13:31 --> Output Class Initialized
INFO - 2021-01-20 05:13:31 --> Security Class Initialized
INFO - 2021-01-20 05:13:31 --> Input Class Initialized
INFO - 2021-01-20 05:13:31 --> Language Class Initialized
INFO - 2021-01-20 05:13:31 --> Loader Class Initialized
INFO - 2021-01-20 05:13:31 --> Helper loaded: url_helper
INFO - 2021-01-20 05:13:31 --> Helper loaded: file_helper
INFO - 2021-01-20 05:13:31 --> Helper loaded: security_helper
INFO - 2021-01-20 05:13:31 --> Helper loaded: form_helper
INFO - 2021-01-20 05:13:31 --> Helper loaded: access_helper
INFO - 2021-01-20 05:13:31 --> Helper loaded: date_helper
INFO - 2021-01-20 05:13:31 --> Database Driver Class Initialized
INFO - 2021-01-20 05:13:31 --> User Agent Class Initialized
INFO - 2021-01-20 05:13:31 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:13:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:13:31 --> Pagination Class Initialized
INFO - 2021-01-20 05:13:31 --> Form Validation Class Initialized
INFO - 2021-01-20 05:13:31 --> Controller Class Initialized
INFO - 2021-01-20 05:13:31 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:13:31 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:13:31 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:13:31 --> Final output sent to browser
INFO - 2021-01-20 05:13:37 --> Config Class Initialized
INFO - 2021-01-20 05:13:37 --> Hooks Class Initialized
INFO - 2021-01-20 05:13:37 --> Utf8 Class Initialized
INFO - 2021-01-20 05:13:37 --> URI Class Initialized
INFO - 2021-01-20 05:13:37 --> Router Class Initialized
INFO - 2021-01-20 05:13:37 --> Output Class Initialized
INFO - 2021-01-20 05:13:37 --> Security Class Initialized
INFO - 2021-01-20 05:13:37 --> Input Class Initialized
INFO - 2021-01-20 05:13:37 --> Language Class Initialized
INFO - 2021-01-20 05:13:37 --> Loader Class Initialized
INFO - 2021-01-20 05:13:37 --> Helper loaded: url_helper
INFO - 2021-01-20 05:13:37 --> Helper loaded: file_helper
INFO - 2021-01-20 05:13:37 --> Helper loaded: security_helper
INFO - 2021-01-20 05:13:37 --> Helper loaded: form_helper
INFO - 2021-01-20 05:13:37 --> Helper loaded: access_helper
INFO - 2021-01-20 05:13:37 --> Helper loaded: date_helper
INFO - 2021-01-20 05:13:37 --> Database Driver Class Initialized
INFO - 2021-01-20 05:13:37 --> User Agent Class Initialized
INFO - 2021-01-20 05:13:37 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:13:37 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:13:37 --> Pagination Class Initialized
INFO - 2021-01-20 05:13:37 --> Form Validation Class Initialized
INFO - 2021-01-20 05:13:37 --> Controller Class Initialized
INFO - 2021-01-20 05:13:37 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:13:37 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:13:37 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:13:37 --> Final output sent to browser
INFO - 2021-01-20 05:14:00 --> Config Class Initialized
INFO - 2021-01-20 05:14:00 --> Hooks Class Initialized
INFO - 2021-01-20 05:14:00 --> Utf8 Class Initialized
INFO - 2021-01-20 05:14:00 --> URI Class Initialized
INFO - 2021-01-20 05:14:00 --> Router Class Initialized
INFO - 2021-01-20 05:14:00 --> Output Class Initialized
INFO - 2021-01-20 05:14:00 --> Security Class Initialized
INFO - 2021-01-20 05:14:00 --> Input Class Initialized
INFO - 2021-01-20 05:14:00 --> Language Class Initialized
INFO - 2021-01-20 05:14:00 --> Loader Class Initialized
INFO - 2021-01-20 05:14:00 --> Helper loaded: url_helper
INFO - 2021-01-20 05:14:00 --> Helper loaded: file_helper
INFO - 2021-01-20 05:14:00 --> Helper loaded: security_helper
INFO - 2021-01-20 05:14:00 --> Helper loaded: form_helper
INFO - 2021-01-20 05:14:00 --> Helper loaded: access_helper
INFO - 2021-01-20 05:14:00 --> Helper loaded: date_helper
INFO - 2021-01-20 05:14:00 --> Database Driver Class Initialized
INFO - 2021-01-20 05:14:00 --> User Agent Class Initialized
INFO - 2021-01-20 05:14:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:14:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:14:00 --> Pagination Class Initialized
INFO - 2021-01-20 05:14:00 --> Form Validation Class Initialized
INFO - 2021-01-20 05:14:00 --> Controller Class Initialized
INFO - 2021-01-20 05:14:00 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:14:00 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:14:00 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:14:00 --> Final output sent to browser
INFO - 2021-01-20 05:14:42 --> Config Class Initialized
INFO - 2021-01-20 05:14:42 --> Hooks Class Initialized
INFO - 2021-01-20 05:14:42 --> Utf8 Class Initialized
INFO - 2021-01-20 05:14:42 --> URI Class Initialized
INFO - 2021-01-20 05:14:42 --> Router Class Initialized
INFO - 2021-01-20 05:14:42 --> Output Class Initialized
INFO - 2021-01-20 05:14:42 --> Security Class Initialized
INFO - 2021-01-20 05:14:42 --> Input Class Initialized
INFO - 2021-01-20 05:14:42 --> Language Class Initialized
INFO - 2021-01-20 05:14:42 --> Loader Class Initialized
INFO - 2021-01-20 05:14:42 --> Helper loaded: url_helper
INFO - 2021-01-20 05:14:42 --> Helper loaded: file_helper
INFO - 2021-01-20 05:14:42 --> Helper loaded: security_helper
INFO - 2021-01-20 05:14:42 --> Helper loaded: form_helper
INFO - 2021-01-20 05:14:42 --> Helper loaded: access_helper
INFO - 2021-01-20 05:14:42 --> Helper loaded: date_helper
INFO - 2021-01-20 05:14:42 --> Database Driver Class Initialized
INFO - 2021-01-20 05:14:43 --> User Agent Class Initialized
INFO - 2021-01-20 05:14:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:14:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:14:43 --> Pagination Class Initialized
INFO - 2021-01-20 05:14:43 --> Form Validation Class Initialized
INFO - 2021-01-20 05:14:43 --> Controller Class Initialized
INFO - 2021-01-20 05:14:43 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:14:43 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:14:43 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:14:43 --> Final output sent to browser
INFO - 2021-01-20 05:14:45 --> Config Class Initialized
INFO - 2021-01-20 05:14:45 --> Hooks Class Initialized
INFO - 2021-01-20 05:14:45 --> Utf8 Class Initialized
INFO - 2021-01-20 05:14:45 --> URI Class Initialized
INFO - 2021-01-20 05:14:45 --> Router Class Initialized
INFO - 2021-01-20 05:14:45 --> Output Class Initialized
INFO - 2021-01-20 05:14:45 --> Security Class Initialized
INFO - 2021-01-20 05:14:45 --> Input Class Initialized
INFO - 2021-01-20 05:14:45 --> Language Class Initialized
INFO - 2021-01-20 05:14:45 --> Loader Class Initialized
INFO - 2021-01-20 05:14:45 --> Helper loaded: url_helper
INFO - 2021-01-20 05:14:45 --> Helper loaded: file_helper
INFO - 2021-01-20 05:14:45 --> Helper loaded: security_helper
INFO - 2021-01-20 05:14:45 --> Helper loaded: form_helper
INFO - 2021-01-20 05:14:45 --> Helper loaded: access_helper
INFO - 2021-01-20 05:14:45 --> Helper loaded: date_helper
INFO - 2021-01-20 05:14:45 --> Database Driver Class Initialized
INFO - 2021-01-20 05:14:45 --> User Agent Class Initialized
INFO - 2021-01-20 05:14:45 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:14:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:14:45 --> Pagination Class Initialized
INFO - 2021-01-20 05:14:45 --> Form Validation Class Initialized
INFO - 2021-01-20 05:14:45 --> Controller Class Initialized
INFO - 2021-01-20 05:14:45 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:14:45 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:14:45 --> Final output sent to browser
INFO - 2021-01-20 05:14:48 --> Config Class Initialized
INFO - 2021-01-20 05:14:48 --> Hooks Class Initialized
INFO - 2021-01-20 05:14:48 --> Utf8 Class Initialized
INFO - 2021-01-20 05:14:48 --> URI Class Initialized
INFO - 2021-01-20 05:14:48 --> Router Class Initialized
INFO - 2021-01-20 05:14:48 --> Output Class Initialized
INFO - 2021-01-20 05:14:48 --> Security Class Initialized
INFO - 2021-01-20 05:14:48 --> Input Class Initialized
INFO - 2021-01-20 05:14:48 --> Language Class Initialized
INFO - 2021-01-20 05:14:48 --> Loader Class Initialized
INFO - 2021-01-20 05:14:48 --> Helper loaded: url_helper
INFO - 2021-01-20 05:14:48 --> Helper loaded: file_helper
INFO - 2021-01-20 05:14:48 --> Helper loaded: security_helper
INFO - 2021-01-20 05:14:48 --> Helper loaded: form_helper
INFO - 2021-01-20 05:14:48 --> Helper loaded: access_helper
INFO - 2021-01-20 05:14:48 --> Helper loaded: date_helper
INFO - 2021-01-20 05:14:48 --> Database Driver Class Initialized
INFO - 2021-01-20 05:14:48 --> User Agent Class Initialized
INFO - 2021-01-20 05:14:48 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:14:48 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:14:48 --> Pagination Class Initialized
INFO - 2021-01-20 05:14:48 --> Form Validation Class Initialized
INFO - 2021-01-20 05:14:48 --> Controller Class Initialized
INFO - 2021-01-20 05:14:48 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:14:48 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:14:48 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:14:48 --> Final output sent to browser
INFO - 2021-01-20 05:14:49 --> Config Class Initialized
INFO - 2021-01-20 05:14:49 --> Hooks Class Initialized
INFO - 2021-01-20 05:14:49 --> Utf8 Class Initialized
INFO - 2021-01-20 05:14:49 --> URI Class Initialized
INFO - 2021-01-20 05:14:49 --> Router Class Initialized
INFO - 2021-01-20 05:14:49 --> Output Class Initialized
INFO - 2021-01-20 05:14:49 --> Security Class Initialized
INFO - 2021-01-20 05:14:49 --> Input Class Initialized
INFO - 2021-01-20 05:14:49 --> Language Class Initialized
INFO - 2021-01-20 05:14:49 --> Loader Class Initialized
INFO - 2021-01-20 05:14:49 --> Helper loaded: url_helper
INFO - 2021-01-20 05:14:49 --> Helper loaded: file_helper
INFO - 2021-01-20 05:14:49 --> Helper loaded: security_helper
INFO - 2021-01-20 05:14:49 --> Helper loaded: form_helper
INFO - 2021-01-20 05:14:49 --> Helper loaded: access_helper
INFO - 2021-01-20 05:14:49 --> Helper loaded: date_helper
INFO - 2021-01-20 05:14:49 --> Database Driver Class Initialized
INFO - 2021-01-20 05:14:49 --> User Agent Class Initialized
INFO - 2021-01-20 05:14:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:14:49 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:14:49 --> Pagination Class Initialized
INFO - 2021-01-20 05:14:49 --> Form Validation Class Initialized
INFO - 2021-01-20 05:14:49 --> Controller Class Initialized
INFO - 2021-01-20 05:14:49 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:14:49 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:14:49 --> Final output sent to browser
INFO - 2021-01-20 05:14:52 --> Config Class Initialized
INFO - 2021-01-20 05:14:52 --> Hooks Class Initialized
INFO - 2021-01-20 05:14:52 --> Utf8 Class Initialized
INFO - 2021-01-20 05:14:52 --> URI Class Initialized
INFO - 2021-01-20 05:14:52 --> Router Class Initialized
INFO - 2021-01-20 05:14:52 --> Output Class Initialized
INFO - 2021-01-20 05:14:52 --> Security Class Initialized
INFO - 2021-01-20 05:14:52 --> Input Class Initialized
INFO - 2021-01-20 05:14:52 --> Language Class Initialized
INFO - 2021-01-20 05:14:52 --> Loader Class Initialized
INFO - 2021-01-20 05:14:52 --> Helper loaded: url_helper
INFO - 2021-01-20 05:14:52 --> Helper loaded: file_helper
INFO - 2021-01-20 05:14:52 --> Helper loaded: security_helper
INFO - 2021-01-20 05:14:52 --> Helper loaded: form_helper
INFO - 2021-01-20 05:14:52 --> Helper loaded: access_helper
INFO - 2021-01-20 05:14:52 --> Helper loaded: date_helper
INFO - 2021-01-20 05:14:52 --> Database Driver Class Initialized
INFO - 2021-01-20 05:14:52 --> User Agent Class Initialized
INFO - 2021-01-20 05:14:52 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:14:52 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:14:52 --> Pagination Class Initialized
INFO - 2021-01-20 05:14:52 --> Form Validation Class Initialized
INFO - 2021-01-20 05:14:52 --> Controller Class Initialized
INFO - 2021-01-20 05:14:52 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:14:52 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:14:52 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 05:14:52 --> Final output sent to browser
INFO - 2021-01-20 05:14:54 --> Config Class Initialized
INFO - 2021-01-20 05:14:54 --> Hooks Class Initialized
INFO - 2021-01-20 05:14:54 --> Utf8 Class Initialized
INFO - 2021-01-20 05:14:54 --> URI Class Initialized
INFO - 2021-01-20 05:14:54 --> Router Class Initialized
INFO - 2021-01-20 05:14:54 --> Output Class Initialized
INFO - 2021-01-20 05:14:54 --> Security Class Initialized
INFO - 2021-01-20 05:14:54 --> Input Class Initialized
INFO - 2021-01-20 05:14:54 --> Language Class Initialized
INFO - 2021-01-20 05:14:54 --> Loader Class Initialized
INFO - 2021-01-20 05:14:54 --> Helper loaded: url_helper
INFO - 2021-01-20 05:14:54 --> Helper loaded: file_helper
INFO - 2021-01-20 05:14:54 --> Helper loaded: security_helper
INFO - 2021-01-20 05:14:54 --> Helper loaded: form_helper
INFO - 2021-01-20 05:14:54 --> Helper loaded: access_helper
INFO - 2021-01-20 05:14:54 --> Helper loaded: date_helper
INFO - 2021-01-20 05:14:54 --> Database Driver Class Initialized
INFO - 2021-01-20 05:14:54 --> User Agent Class Initialized
INFO - 2021-01-20 05:14:54 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:14:54 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:14:54 --> Pagination Class Initialized
INFO - 2021-01-20 05:14:54 --> Form Validation Class Initialized
INFO - 2021-01-20 05:14:54 --> Controller Class Initialized
INFO - 2021-01-20 05:14:54 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:14:54 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:14:54 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:14:54 --> Final output sent to browser
INFO - 2021-01-20 05:14:59 --> Config Class Initialized
INFO - 2021-01-20 05:14:59 --> Hooks Class Initialized
INFO - 2021-01-20 05:14:59 --> Utf8 Class Initialized
INFO - 2021-01-20 05:14:59 --> URI Class Initialized
INFO - 2021-01-20 05:14:59 --> Router Class Initialized
INFO - 2021-01-20 05:14:59 --> Output Class Initialized
INFO - 2021-01-20 05:14:59 --> Security Class Initialized
INFO - 2021-01-20 05:14:59 --> Input Class Initialized
INFO - 2021-01-20 05:14:59 --> Language Class Initialized
INFO - 2021-01-20 05:14:59 --> Loader Class Initialized
INFO - 2021-01-20 05:14:59 --> Helper loaded: url_helper
INFO - 2021-01-20 05:14:59 --> Helper loaded: file_helper
INFO - 2021-01-20 05:14:59 --> Helper loaded: security_helper
INFO - 2021-01-20 05:14:59 --> Helper loaded: form_helper
INFO - 2021-01-20 05:14:59 --> Helper loaded: access_helper
INFO - 2021-01-20 05:14:59 --> Helper loaded: date_helper
INFO - 2021-01-20 05:14:59 --> Database Driver Class Initialized
INFO - 2021-01-20 05:14:59 --> User Agent Class Initialized
INFO - 2021-01-20 05:14:59 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:14:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:14:59 --> Pagination Class Initialized
INFO - 2021-01-20 05:14:59 --> Form Validation Class Initialized
INFO - 2021-01-20 05:14:59 --> Controller Class Initialized
INFO - 2021-01-20 05:14:59 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:14:59 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:14:59 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:14:59 --> Final output sent to browser
INFO - 2021-01-20 05:22:13 --> Config Class Initialized
INFO - 2021-01-20 05:22:13 --> Hooks Class Initialized
INFO - 2021-01-20 05:22:13 --> Utf8 Class Initialized
INFO - 2021-01-20 05:22:13 --> URI Class Initialized
INFO - 2021-01-20 05:22:13 --> Router Class Initialized
INFO - 2021-01-20 05:22:13 --> Output Class Initialized
INFO - 2021-01-20 05:22:13 --> Security Class Initialized
INFO - 2021-01-20 05:22:13 --> Input Class Initialized
INFO - 2021-01-20 05:22:13 --> Language Class Initialized
INFO - 2021-01-20 05:22:13 --> Loader Class Initialized
INFO - 2021-01-20 05:22:13 --> Helper loaded: url_helper
INFO - 2021-01-20 05:22:13 --> Helper loaded: file_helper
INFO - 2021-01-20 05:22:13 --> Helper loaded: security_helper
INFO - 2021-01-20 05:22:13 --> Helper loaded: form_helper
INFO - 2021-01-20 05:22:13 --> Helper loaded: access_helper
INFO - 2021-01-20 05:22:13 --> Helper loaded: date_helper
INFO - 2021-01-20 05:22:13 --> Database Driver Class Initialized
INFO - 2021-01-20 05:22:13 --> User Agent Class Initialized
INFO - 2021-01-20 05:22:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:22:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:22:13 --> Pagination Class Initialized
INFO - 2021-01-20 05:22:13 --> Form Validation Class Initialized
INFO - 2021-01-20 05:22:13 --> Controller Class Initialized
INFO - 2021-01-20 05:22:13 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:22:13 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:22:13 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:22:13 --> Final output sent to browser
INFO - 2021-01-20 05:22:17 --> Config Class Initialized
INFO - 2021-01-20 05:22:17 --> Hooks Class Initialized
INFO - 2021-01-20 05:22:17 --> Utf8 Class Initialized
INFO - 2021-01-20 05:22:17 --> URI Class Initialized
INFO - 2021-01-20 05:22:17 --> Router Class Initialized
INFO - 2021-01-20 05:22:17 --> Output Class Initialized
INFO - 2021-01-20 05:22:17 --> Security Class Initialized
INFO - 2021-01-20 05:22:17 --> Input Class Initialized
INFO - 2021-01-20 05:22:17 --> Language Class Initialized
INFO - 2021-01-20 05:22:17 --> Loader Class Initialized
INFO - 2021-01-20 05:22:17 --> Helper loaded: url_helper
INFO - 2021-01-20 05:22:17 --> Helper loaded: file_helper
INFO - 2021-01-20 05:22:17 --> Helper loaded: security_helper
INFO - 2021-01-20 05:22:17 --> Helper loaded: form_helper
INFO - 2021-01-20 05:22:17 --> Helper loaded: access_helper
INFO - 2021-01-20 05:22:17 --> Helper loaded: date_helper
INFO - 2021-01-20 05:22:17 --> Database Driver Class Initialized
INFO - 2021-01-20 05:22:17 --> User Agent Class Initialized
INFO - 2021-01-20 05:22:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:22:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:22:17 --> Pagination Class Initialized
INFO - 2021-01-20 05:22:17 --> Form Validation Class Initialized
INFO - 2021-01-20 05:22:17 --> Controller Class Initialized
INFO - 2021-01-20 05:22:17 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:22:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:22:17 --> Final output sent to browser
INFO - 2021-01-20 05:22:18 --> Config Class Initialized
INFO - 2021-01-20 05:22:18 --> Hooks Class Initialized
INFO - 2021-01-20 05:22:18 --> Utf8 Class Initialized
INFO - 2021-01-20 05:22:18 --> URI Class Initialized
INFO - 2021-01-20 05:22:18 --> Router Class Initialized
INFO - 2021-01-20 05:22:18 --> Output Class Initialized
INFO - 2021-01-20 05:22:18 --> Security Class Initialized
INFO - 2021-01-20 05:22:18 --> Input Class Initialized
INFO - 2021-01-20 05:22:18 --> Language Class Initialized
INFO - 2021-01-20 05:22:18 --> Loader Class Initialized
INFO - 2021-01-20 05:22:18 --> Helper loaded: url_helper
INFO - 2021-01-20 05:22:18 --> Helper loaded: file_helper
INFO - 2021-01-20 05:22:18 --> Helper loaded: security_helper
INFO - 2021-01-20 05:22:18 --> Helper loaded: form_helper
INFO - 2021-01-20 05:22:18 --> Helper loaded: access_helper
INFO - 2021-01-20 05:22:19 --> Helper loaded: date_helper
INFO - 2021-01-20 05:22:19 --> Database Driver Class Initialized
INFO - 2021-01-20 05:22:19 --> User Agent Class Initialized
INFO - 2021-01-20 05:22:19 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:22:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:22:19 --> Pagination Class Initialized
INFO - 2021-01-20 05:22:19 --> Form Validation Class Initialized
INFO - 2021-01-20 05:22:19 --> Controller Class Initialized
INFO - 2021-01-20 05:22:19 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:22:19 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:22:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:22:19 --> Final output sent to browser
INFO - 2021-01-20 05:25:33 --> Config Class Initialized
INFO - 2021-01-20 05:25:33 --> Hooks Class Initialized
INFO - 2021-01-20 05:25:33 --> Utf8 Class Initialized
INFO - 2021-01-20 05:25:33 --> URI Class Initialized
INFO - 2021-01-20 05:25:33 --> Router Class Initialized
INFO - 2021-01-20 05:25:33 --> Output Class Initialized
INFO - 2021-01-20 05:25:33 --> Security Class Initialized
INFO - 2021-01-20 05:25:33 --> Input Class Initialized
INFO - 2021-01-20 05:25:33 --> Language Class Initialized
INFO - 2021-01-20 05:25:33 --> Loader Class Initialized
INFO - 2021-01-20 05:25:33 --> Helper loaded: url_helper
INFO - 2021-01-20 05:25:33 --> Helper loaded: file_helper
INFO - 2021-01-20 05:25:33 --> Helper loaded: security_helper
INFO - 2021-01-20 05:25:33 --> Helper loaded: form_helper
INFO - 2021-01-20 05:25:33 --> Helper loaded: access_helper
INFO - 2021-01-20 05:25:33 --> Helper loaded: date_helper
INFO - 2021-01-20 05:25:33 --> Database Driver Class Initialized
INFO - 2021-01-20 05:25:33 --> User Agent Class Initialized
INFO - 2021-01-20 05:25:33 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:25:33 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:25:33 --> Pagination Class Initialized
INFO - 2021-01-20 05:25:33 --> Form Validation Class Initialized
INFO - 2021-01-20 05:25:33 --> Controller Class Initialized
INFO - 2021-01-20 05:25:33 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:25:33 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:25:33 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:25:33 --> Final output sent to browser
INFO - 2021-01-20 05:25:36 --> Config Class Initialized
INFO - 2021-01-20 05:25:36 --> Hooks Class Initialized
INFO - 2021-01-20 05:25:36 --> Utf8 Class Initialized
INFO - 2021-01-20 05:25:36 --> URI Class Initialized
INFO - 2021-01-20 05:25:36 --> Router Class Initialized
INFO - 2021-01-20 05:25:36 --> Output Class Initialized
INFO - 2021-01-20 05:25:36 --> Security Class Initialized
INFO - 2021-01-20 05:25:36 --> Input Class Initialized
INFO - 2021-01-20 05:25:36 --> Language Class Initialized
INFO - 2021-01-20 05:25:36 --> Loader Class Initialized
INFO - 2021-01-20 05:25:36 --> Helper loaded: url_helper
INFO - 2021-01-20 05:25:36 --> Helper loaded: file_helper
INFO - 2021-01-20 05:25:36 --> Helper loaded: security_helper
INFO - 2021-01-20 05:25:36 --> Helper loaded: form_helper
INFO - 2021-01-20 05:25:36 --> Helper loaded: access_helper
INFO - 2021-01-20 05:25:36 --> Helper loaded: date_helper
INFO - 2021-01-20 05:25:36 --> Database Driver Class Initialized
INFO - 2021-01-20 05:25:36 --> User Agent Class Initialized
INFO - 2021-01-20 05:25:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:25:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:25:36 --> Pagination Class Initialized
INFO - 2021-01-20 05:25:36 --> Form Validation Class Initialized
INFO - 2021-01-20 05:25:36 --> Controller Class Initialized
INFO - 2021-01-20 05:25:36 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:25:36 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:25:36 --> Final output sent to browser
INFO - 2021-01-20 05:25:37 --> Config Class Initialized
INFO - 2021-01-20 05:25:37 --> Hooks Class Initialized
INFO - 2021-01-20 05:25:37 --> Utf8 Class Initialized
INFO - 2021-01-20 05:25:37 --> URI Class Initialized
INFO - 2021-01-20 05:25:37 --> Router Class Initialized
INFO - 2021-01-20 05:25:37 --> Output Class Initialized
INFO - 2021-01-20 05:25:37 --> Security Class Initialized
INFO - 2021-01-20 05:25:37 --> Input Class Initialized
INFO - 2021-01-20 05:25:37 --> Language Class Initialized
INFO - 2021-01-20 05:25:37 --> Loader Class Initialized
INFO - 2021-01-20 05:25:37 --> Helper loaded: url_helper
INFO - 2021-01-20 05:25:37 --> Helper loaded: file_helper
INFO - 2021-01-20 05:25:37 --> Helper loaded: security_helper
INFO - 2021-01-20 05:25:37 --> Helper loaded: form_helper
INFO - 2021-01-20 05:25:37 --> Helper loaded: access_helper
INFO - 2021-01-20 05:25:37 --> Helper loaded: date_helper
INFO - 2021-01-20 05:25:37 --> Database Driver Class Initialized
INFO - 2021-01-20 05:25:38 --> User Agent Class Initialized
INFO - 2021-01-20 05:25:38 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:25:38 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:25:38 --> Pagination Class Initialized
INFO - 2021-01-20 05:25:38 --> Form Validation Class Initialized
INFO - 2021-01-20 05:25:38 --> Controller Class Initialized
INFO - 2021-01-20 05:25:38 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:25:38 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:25:38 --> Final output sent to browser
INFO - 2021-01-20 05:25:39 --> Config Class Initialized
INFO - 2021-01-20 05:25:39 --> Hooks Class Initialized
INFO - 2021-01-20 05:25:39 --> Utf8 Class Initialized
INFO - 2021-01-20 05:25:39 --> URI Class Initialized
INFO - 2021-01-20 05:25:39 --> Router Class Initialized
INFO - 2021-01-20 05:25:39 --> Output Class Initialized
INFO - 2021-01-20 05:25:39 --> Security Class Initialized
INFO - 2021-01-20 05:25:39 --> Input Class Initialized
INFO - 2021-01-20 05:25:39 --> Language Class Initialized
INFO - 2021-01-20 05:25:39 --> Loader Class Initialized
INFO - 2021-01-20 05:25:39 --> Helper loaded: url_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: file_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: security_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: form_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: access_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: date_helper
INFO - 2021-01-20 05:25:39 --> Database Driver Class Initialized
INFO - 2021-01-20 05:25:39 --> User Agent Class Initialized
INFO - 2021-01-20 05:25:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:25:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:25:39 --> Pagination Class Initialized
INFO - 2021-01-20 05:25:39 --> Form Validation Class Initialized
INFO - 2021-01-20 05:25:39 --> Controller Class Initialized
INFO - 2021-01-20 05:25:39 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:25:39 --> Config Class Initialized
INFO - 2021-01-20 05:25:39 --> Hooks Class Initialized
INFO - 2021-01-20 05:25:39 --> Utf8 Class Initialized
INFO - 2021-01-20 05:25:39 --> URI Class Initialized
INFO - 2021-01-20 05:25:39 --> Router Class Initialized
INFO - 2021-01-20 05:25:39 --> Output Class Initialized
INFO - 2021-01-20 05:25:39 --> Security Class Initialized
INFO - 2021-01-20 05:25:39 --> Input Class Initialized
INFO - 2021-01-20 05:25:39 --> Language Class Initialized
INFO - 2021-01-20 05:25:39 --> Loader Class Initialized
INFO - 2021-01-20 05:25:39 --> Helper loaded: url_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: file_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: security_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: form_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: access_helper
INFO - 2021-01-20 05:25:39 --> Helper loaded: date_helper
INFO - 2021-01-20 05:25:39 --> Database Driver Class Initialized
INFO - 2021-01-20 05:25:39 --> User Agent Class Initialized
INFO - 2021-01-20 05:25:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:25:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:25:39 --> Pagination Class Initialized
INFO - 2021-01-20 05:25:39 --> Form Validation Class Initialized
INFO - 2021-01-20 05:25:39 --> Controller Class Initialized
INFO - 2021-01-20 05:25:39 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:25:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:25:39 --> Final output sent to browser
INFO - 2021-01-20 05:25:41 --> Config Class Initialized
INFO - 2021-01-20 05:25:41 --> Hooks Class Initialized
INFO - 2021-01-20 05:25:41 --> Utf8 Class Initialized
INFO - 2021-01-20 05:25:41 --> URI Class Initialized
INFO - 2021-01-20 05:25:41 --> Router Class Initialized
INFO - 2021-01-20 05:25:41 --> Output Class Initialized
INFO - 2021-01-20 05:25:41 --> Security Class Initialized
INFO - 2021-01-20 05:25:41 --> Input Class Initialized
INFO - 2021-01-20 05:25:41 --> Language Class Initialized
INFO - 2021-01-20 05:25:41 --> Loader Class Initialized
INFO - 2021-01-20 05:25:41 --> Helper loaded: url_helper
INFO - 2021-01-20 05:25:41 --> Helper loaded: file_helper
INFO - 2021-01-20 05:25:41 --> Helper loaded: security_helper
INFO - 2021-01-20 05:25:41 --> Helper loaded: form_helper
INFO - 2021-01-20 05:25:41 --> Helper loaded: access_helper
INFO - 2021-01-20 05:25:41 --> Helper loaded: date_helper
INFO - 2021-01-20 05:25:41 --> Database Driver Class Initialized
INFO - 2021-01-20 05:25:41 --> User Agent Class Initialized
INFO - 2021-01-20 05:25:41 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:25:41 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:25:41 --> Pagination Class Initialized
INFO - 2021-01-20 05:25:41 --> Form Validation Class Initialized
INFO - 2021-01-20 05:25:41 --> Controller Class Initialized
INFO - 2021-01-20 05:25:41 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:25:41 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:25:41 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 05:25:41 --> Final output sent to browser
INFO - 2021-01-20 05:25:53 --> Config Class Initialized
INFO - 2021-01-20 05:25:53 --> Hooks Class Initialized
INFO - 2021-01-20 05:25:53 --> Utf8 Class Initialized
INFO - 2021-01-20 05:25:53 --> URI Class Initialized
INFO - 2021-01-20 05:25:53 --> Router Class Initialized
INFO - 2021-01-20 05:25:53 --> Output Class Initialized
INFO - 2021-01-20 05:25:53 --> Security Class Initialized
INFO - 2021-01-20 05:25:53 --> Input Class Initialized
INFO - 2021-01-20 05:25:53 --> Language Class Initialized
INFO - 2021-01-20 05:25:53 --> Loader Class Initialized
INFO - 2021-01-20 05:25:53 --> Helper loaded: url_helper
INFO - 2021-01-20 05:25:53 --> Helper loaded: file_helper
INFO - 2021-01-20 05:25:53 --> Helper loaded: security_helper
INFO - 2021-01-20 05:25:53 --> Helper loaded: form_helper
INFO - 2021-01-20 05:25:53 --> Helper loaded: access_helper
INFO - 2021-01-20 05:25:53 --> Helper loaded: date_helper
INFO - 2021-01-20 05:25:53 --> Database Driver Class Initialized
INFO - 2021-01-20 05:25:53 --> User Agent Class Initialized
INFO - 2021-01-20 05:25:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:25:53 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:25:53 --> Pagination Class Initialized
INFO - 2021-01-20 05:25:53 --> Form Validation Class Initialized
INFO - 2021-01-20 05:25:53 --> Controller Class Initialized
INFO - 2021-01-20 05:25:53 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:25:53 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 05:25:53 --> Final output sent to browser
INFO - 2021-01-20 05:25:56 --> Config Class Initialized
INFO - 2021-01-20 05:25:56 --> Hooks Class Initialized
INFO - 2021-01-20 05:25:56 --> Utf8 Class Initialized
INFO - 2021-01-20 05:25:56 --> URI Class Initialized
INFO - 2021-01-20 05:25:56 --> Router Class Initialized
INFO - 2021-01-20 05:25:56 --> Output Class Initialized
INFO - 2021-01-20 05:25:56 --> Security Class Initialized
INFO - 2021-01-20 05:25:56 --> Input Class Initialized
INFO - 2021-01-20 05:25:56 --> Language Class Initialized
INFO - 2021-01-20 05:25:56 --> Loader Class Initialized
INFO - 2021-01-20 05:25:56 --> Helper loaded: url_helper
INFO - 2021-01-20 05:25:56 --> Helper loaded: file_helper
INFO - 2021-01-20 05:25:56 --> Helper loaded: security_helper
INFO - 2021-01-20 05:25:56 --> Helper loaded: form_helper
INFO - 2021-01-20 05:25:56 --> Helper loaded: access_helper
INFO - 2021-01-20 05:25:56 --> Helper loaded: date_helper
INFO - 2021-01-20 05:25:56 --> Database Driver Class Initialized
INFO - 2021-01-20 05:25:56 --> User Agent Class Initialized
INFO - 2021-01-20 05:25:56 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:25:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:25:56 --> Pagination Class Initialized
INFO - 2021-01-20 05:25:56 --> Form Validation Class Initialized
INFO - 2021-01-20 05:25:56 --> Controller Class Initialized
INFO - 2021-01-20 05:25:56 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:25:56 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 05:25:56 --> Final output sent to browser
INFO - 2021-01-20 05:26:36 --> Config Class Initialized
INFO - 2021-01-20 05:26:36 --> Hooks Class Initialized
INFO - 2021-01-20 05:26:36 --> Utf8 Class Initialized
INFO - 2021-01-20 05:26:36 --> URI Class Initialized
INFO - 2021-01-20 05:26:36 --> Router Class Initialized
INFO - 2021-01-20 05:26:36 --> Output Class Initialized
INFO - 2021-01-20 05:26:36 --> Security Class Initialized
INFO - 2021-01-20 05:26:36 --> Input Class Initialized
INFO - 2021-01-20 05:26:36 --> Language Class Initialized
INFO - 2021-01-20 05:26:36 --> Loader Class Initialized
INFO - 2021-01-20 05:26:36 --> Helper loaded: url_helper
INFO - 2021-01-20 05:26:36 --> Helper loaded: file_helper
INFO - 2021-01-20 05:26:36 --> Helper loaded: security_helper
INFO - 2021-01-20 05:26:36 --> Helper loaded: form_helper
INFO - 2021-01-20 05:26:36 --> Helper loaded: access_helper
INFO - 2021-01-20 05:26:36 --> Helper loaded: date_helper
INFO - 2021-01-20 05:26:36 --> Database Driver Class Initialized
INFO - 2021-01-20 05:26:36 --> User Agent Class Initialized
INFO - 2021-01-20 05:26:36 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:26:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:26:36 --> Pagination Class Initialized
INFO - 2021-01-20 05:26:36 --> Form Validation Class Initialized
INFO - 2021-01-20 05:26:36 --> Controller Class Initialized
INFO - 2021-01-20 05:26:36 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:26:36 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:26:36 --> Final output sent to browser
INFO - 2021-01-20 05:26:39 --> Config Class Initialized
INFO - 2021-01-20 05:26:39 --> Hooks Class Initialized
INFO - 2021-01-20 05:26:39 --> Utf8 Class Initialized
INFO - 2021-01-20 05:26:39 --> URI Class Initialized
INFO - 2021-01-20 05:26:39 --> Router Class Initialized
INFO - 2021-01-20 05:26:39 --> Output Class Initialized
INFO - 2021-01-20 05:26:39 --> Security Class Initialized
INFO - 2021-01-20 05:26:39 --> Input Class Initialized
INFO - 2021-01-20 05:26:39 --> Language Class Initialized
INFO - 2021-01-20 05:26:39 --> Loader Class Initialized
INFO - 2021-01-20 05:26:39 --> Helper loaded: url_helper
INFO - 2021-01-20 05:26:39 --> Helper loaded: file_helper
INFO - 2021-01-20 05:26:39 --> Helper loaded: security_helper
INFO - 2021-01-20 05:26:39 --> Helper loaded: form_helper
INFO - 2021-01-20 05:26:39 --> Helper loaded: access_helper
INFO - 2021-01-20 05:26:39 --> Helper loaded: date_helper
INFO - 2021-01-20 05:26:39 --> Database Driver Class Initialized
INFO - 2021-01-20 05:26:39 --> User Agent Class Initialized
INFO - 2021-01-20 05:26:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:26:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:26:39 --> Pagination Class Initialized
INFO - 2021-01-20 05:26:39 --> Form Validation Class Initialized
INFO - 2021-01-20 05:26:39 --> Controller Class Initialized
INFO - 2021-01-20 05:26:39 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:26:39 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:26:39 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 05:26:39 --> Final output sent to browser
INFO - 2021-01-20 05:28:17 --> Config Class Initialized
INFO - 2021-01-20 05:28:17 --> Hooks Class Initialized
INFO - 2021-01-20 05:28:17 --> Utf8 Class Initialized
INFO - 2021-01-20 05:28:17 --> URI Class Initialized
INFO - 2021-01-20 05:28:17 --> Router Class Initialized
INFO - 2021-01-20 05:28:17 --> Output Class Initialized
INFO - 2021-01-20 05:28:17 --> Security Class Initialized
INFO - 2021-01-20 05:28:17 --> Input Class Initialized
INFO - 2021-01-20 05:28:17 --> Language Class Initialized
INFO - 2021-01-20 05:28:17 --> Loader Class Initialized
INFO - 2021-01-20 05:28:17 --> Helper loaded: url_helper
INFO - 2021-01-20 05:28:17 --> Helper loaded: file_helper
INFO - 2021-01-20 05:28:17 --> Helper loaded: security_helper
INFO - 2021-01-20 05:28:17 --> Helper loaded: form_helper
INFO - 2021-01-20 05:28:17 --> Helper loaded: access_helper
INFO - 2021-01-20 05:28:17 --> Helper loaded: date_helper
INFO - 2021-01-20 05:28:17 --> Database Driver Class Initialized
INFO - 2021-01-20 05:28:17 --> User Agent Class Initialized
INFO - 2021-01-20 05:28:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:28:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:28:17 --> Pagination Class Initialized
INFO - 2021-01-20 05:28:17 --> Form Validation Class Initialized
INFO - 2021-01-20 05:28:17 --> Controller Class Initialized
INFO - 2021-01-20 05:28:17 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:28:17 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:28:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 05:28:17 --> Final output sent to browser
INFO - 2021-01-20 05:28:20 --> Config Class Initialized
INFO - 2021-01-20 05:28:20 --> Hooks Class Initialized
INFO - 2021-01-20 05:28:20 --> Utf8 Class Initialized
INFO - 2021-01-20 05:28:20 --> URI Class Initialized
INFO - 2021-01-20 05:28:20 --> Router Class Initialized
INFO - 2021-01-20 05:28:20 --> Output Class Initialized
INFO - 2021-01-20 05:28:20 --> Security Class Initialized
INFO - 2021-01-20 05:28:20 --> Input Class Initialized
INFO - 2021-01-20 05:28:20 --> Language Class Initialized
INFO - 2021-01-20 05:28:20 --> Loader Class Initialized
INFO - 2021-01-20 05:28:20 --> Helper loaded: url_helper
INFO - 2021-01-20 05:28:20 --> Helper loaded: file_helper
INFO - 2021-01-20 05:28:20 --> Helper loaded: security_helper
INFO - 2021-01-20 05:28:20 --> Helper loaded: form_helper
INFO - 2021-01-20 05:28:20 --> Helper loaded: access_helper
INFO - 2021-01-20 05:28:20 --> Helper loaded: date_helper
INFO - 2021-01-20 05:28:20 --> Database Driver Class Initialized
INFO - 2021-01-20 05:28:20 --> User Agent Class Initialized
INFO - 2021-01-20 05:28:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:28:20 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:28:20 --> Pagination Class Initialized
INFO - 2021-01-20 05:28:20 --> Form Validation Class Initialized
INFO - 2021-01-20 05:28:20 --> Controller Class Initialized
INFO - 2021-01-20 05:28:20 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:28:20 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 05:28:20 --> Final output sent to browser
INFO - 2021-01-20 05:28:23 --> Config Class Initialized
INFO - 2021-01-20 05:28:23 --> Hooks Class Initialized
INFO - 2021-01-20 05:28:23 --> Utf8 Class Initialized
INFO - 2021-01-20 05:28:23 --> URI Class Initialized
INFO - 2021-01-20 05:28:23 --> Router Class Initialized
INFO - 2021-01-20 05:28:23 --> Output Class Initialized
INFO - 2021-01-20 05:28:23 --> Security Class Initialized
INFO - 2021-01-20 05:28:23 --> Input Class Initialized
INFO - 2021-01-20 05:28:23 --> Language Class Initialized
INFO - 2021-01-20 05:28:23 --> Loader Class Initialized
INFO - 2021-01-20 05:28:23 --> Helper loaded: url_helper
INFO - 2021-01-20 05:28:23 --> Helper loaded: file_helper
INFO - 2021-01-20 05:28:23 --> Helper loaded: security_helper
INFO - 2021-01-20 05:28:23 --> Helper loaded: form_helper
INFO - 2021-01-20 05:28:23 --> Helper loaded: access_helper
INFO - 2021-01-20 05:28:23 --> Helper loaded: date_helper
INFO - 2021-01-20 05:28:23 --> Database Driver Class Initialized
INFO - 2021-01-20 05:28:23 --> User Agent Class Initialized
INFO - 2021-01-20 05:28:23 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:28:23 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:28:23 --> Pagination Class Initialized
INFO - 2021-01-20 05:28:23 --> Form Validation Class Initialized
INFO - 2021-01-20 05:28:23 --> Controller Class Initialized
INFO - 2021-01-20 05:28:23 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:28:23 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:28:23 --> Final output sent to browser
INFO - 2021-01-20 05:29:57 --> Config Class Initialized
INFO - 2021-01-20 05:29:57 --> Hooks Class Initialized
INFO - 2021-01-20 05:29:57 --> Utf8 Class Initialized
INFO - 2021-01-20 05:29:57 --> URI Class Initialized
INFO - 2021-01-20 05:29:57 --> Router Class Initialized
INFO - 2021-01-20 05:29:57 --> Output Class Initialized
INFO - 2021-01-20 05:29:57 --> Security Class Initialized
INFO - 2021-01-20 05:29:57 --> Input Class Initialized
INFO - 2021-01-20 05:29:57 --> Language Class Initialized
INFO - 2021-01-20 05:29:57 --> Loader Class Initialized
INFO - 2021-01-20 05:29:57 --> Helper loaded: url_helper
INFO - 2021-01-20 05:29:57 --> Helper loaded: file_helper
INFO - 2021-01-20 05:29:57 --> Helper loaded: security_helper
INFO - 2021-01-20 05:29:57 --> Helper loaded: form_helper
INFO - 2021-01-20 05:29:57 --> Helper loaded: access_helper
INFO - 2021-01-20 05:29:57 --> Helper loaded: date_helper
INFO - 2021-01-20 05:29:57 --> Database Driver Class Initialized
INFO - 2021-01-20 05:29:57 --> User Agent Class Initialized
INFO - 2021-01-20 05:29:57 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:29:57 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:29:57 --> Pagination Class Initialized
INFO - 2021-01-20 05:29:57 --> Form Validation Class Initialized
INFO - 2021-01-20 05:29:57 --> Controller Class Initialized
INFO - 2021-01-20 05:29:57 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:29:57 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:29:57 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 05:29:57 --> Final output sent to browser
INFO - 2021-01-20 05:30:06 --> Config Class Initialized
INFO - 2021-01-20 05:30:06 --> Hooks Class Initialized
INFO - 2021-01-20 05:30:06 --> Utf8 Class Initialized
INFO - 2021-01-20 05:30:06 --> URI Class Initialized
INFO - 2021-01-20 05:30:06 --> Router Class Initialized
INFO - 2021-01-20 05:30:06 --> Output Class Initialized
INFO - 2021-01-20 05:30:06 --> Security Class Initialized
INFO - 2021-01-20 05:30:06 --> Input Class Initialized
INFO - 2021-01-20 05:30:06 --> Language Class Initialized
INFO - 2021-01-20 05:30:06 --> Loader Class Initialized
INFO - 2021-01-20 05:30:06 --> Helper loaded: url_helper
INFO - 2021-01-20 05:30:06 --> Helper loaded: file_helper
INFO - 2021-01-20 05:30:06 --> Helper loaded: security_helper
INFO - 2021-01-20 05:30:06 --> Helper loaded: form_helper
INFO - 2021-01-20 05:30:06 --> Helper loaded: access_helper
INFO - 2021-01-20 05:30:06 --> Helper loaded: date_helper
INFO - 2021-01-20 05:30:06 --> Database Driver Class Initialized
INFO - 2021-01-20 05:30:06 --> User Agent Class Initialized
INFO - 2021-01-20 05:30:06 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:30:06 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:30:06 --> Pagination Class Initialized
INFO - 2021-01-20 05:30:06 --> Form Validation Class Initialized
INFO - 2021-01-20 05:30:06 --> Controller Class Initialized
INFO - 2021-01-20 05:30:06 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:30:06 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:30:06 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/periksa.php
INFO - 2021-01-20 05:30:06 --> Final output sent to browser
INFO - 2021-01-20 05:30:08 --> Config Class Initialized
INFO - 2021-01-20 05:30:08 --> Hooks Class Initialized
INFO - 2021-01-20 05:30:08 --> Utf8 Class Initialized
INFO - 2021-01-20 05:30:08 --> URI Class Initialized
INFO - 2021-01-20 05:30:08 --> Router Class Initialized
INFO - 2021-01-20 05:30:08 --> Output Class Initialized
INFO - 2021-01-20 05:30:08 --> Security Class Initialized
INFO - 2021-01-20 05:30:08 --> Input Class Initialized
INFO - 2021-01-20 05:30:08 --> Language Class Initialized
INFO - 2021-01-20 05:30:08 --> Loader Class Initialized
INFO - 2021-01-20 05:30:08 --> Helper loaded: url_helper
INFO - 2021-01-20 05:30:08 --> Helper loaded: file_helper
INFO - 2021-01-20 05:30:08 --> Helper loaded: security_helper
INFO - 2021-01-20 05:30:08 --> Helper loaded: form_helper
INFO - 2021-01-20 05:30:08 --> Helper loaded: access_helper
INFO - 2021-01-20 05:30:08 --> Helper loaded: date_helper
INFO - 2021-01-20 05:30:08 --> Database Driver Class Initialized
INFO - 2021-01-20 05:30:08 --> User Agent Class Initialized
INFO - 2021-01-20 05:30:08 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:30:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:30:08 --> Pagination Class Initialized
INFO - 2021-01-20 05:30:08 --> Form Validation Class Initialized
INFO - 2021-01-20 05:30:08 --> Controller Class Initialized
INFO - 2021-01-20 05:30:08 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:30:08 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:30:08 --> Final output sent to browser
INFO - 2021-01-20 05:30:17 --> Config Class Initialized
INFO - 2021-01-20 05:30:17 --> Hooks Class Initialized
INFO - 2021-01-20 05:30:17 --> Utf8 Class Initialized
INFO - 2021-01-20 05:30:17 --> URI Class Initialized
INFO - 2021-01-20 05:30:17 --> Router Class Initialized
INFO - 2021-01-20 05:30:17 --> Output Class Initialized
INFO - 2021-01-20 05:30:17 --> Security Class Initialized
INFO - 2021-01-20 05:30:17 --> Input Class Initialized
INFO - 2021-01-20 05:30:17 --> Language Class Initialized
INFO - 2021-01-20 05:30:17 --> Loader Class Initialized
INFO - 2021-01-20 05:30:17 --> Helper loaded: url_helper
INFO - 2021-01-20 05:30:17 --> Helper loaded: file_helper
INFO - 2021-01-20 05:30:17 --> Helper loaded: security_helper
INFO - 2021-01-20 05:30:17 --> Helper loaded: form_helper
INFO - 2021-01-20 05:30:17 --> Helper loaded: access_helper
INFO - 2021-01-20 05:30:17 --> Helper loaded: date_helper
INFO - 2021-01-20 05:30:17 --> Database Driver Class Initialized
INFO - 2021-01-20 05:30:17 --> User Agent Class Initialized
INFO - 2021-01-20 05:30:17 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:30:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:30:17 --> Pagination Class Initialized
INFO - 2021-01-20 05:30:17 --> Form Validation Class Initialized
INFO - 2021-01-20 05:30:17 --> Controller Class Initialized
INFO - 2021-01-20 05:30:17 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:30:17 --> Language file loaded: language/english/date_lang.php
INFO - 2021-01-20 05:30:17 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/cari_pasien.php
INFO - 2021-01-20 05:30:17 --> Final output sent to browser
INFO - 2021-01-20 05:30:19 --> Config Class Initialized
INFO - 2021-01-20 05:30:19 --> Hooks Class Initialized
INFO - 2021-01-20 05:30:19 --> Utf8 Class Initialized
INFO - 2021-01-20 05:30:19 --> URI Class Initialized
INFO - 2021-01-20 05:30:19 --> Router Class Initialized
INFO - 2021-01-20 05:30:19 --> Output Class Initialized
INFO - 2021-01-20 05:30:19 --> Security Class Initialized
INFO - 2021-01-20 05:30:19 --> Input Class Initialized
INFO - 2021-01-20 05:30:19 --> Language Class Initialized
INFO - 2021-01-20 05:30:19 --> Loader Class Initialized
INFO - 2021-01-20 05:30:19 --> Helper loaded: url_helper
INFO - 2021-01-20 05:30:19 --> Helper loaded: file_helper
INFO - 2021-01-20 05:30:19 --> Helper loaded: security_helper
INFO - 2021-01-20 05:30:19 --> Helper loaded: form_helper
INFO - 2021-01-20 05:30:19 --> Helper loaded: access_helper
INFO - 2021-01-20 05:30:19 --> Helper loaded: date_helper
INFO - 2021-01-20 05:30:19 --> Database Driver Class Initialized
INFO - 2021-01-20 05:30:19 --> User Agent Class Initialized
INFO - 2021-01-20 05:30:19 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:30:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:30:19 --> Pagination Class Initialized
INFO - 2021-01-20 05:30:19 --> Form Validation Class Initialized
INFO - 2021-01-20 05:30:19 --> Controller Class Initialized
INFO - 2021-01-20 05:30:19 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:30:19 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/riwayat.php
INFO - 2021-01-20 05:30:19 --> Final output sent to browser
INFO - 2021-01-20 05:30:21 --> Config Class Initialized
INFO - 2021-01-20 05:30:21 --> Hooks Class Initialized
INFO - 2021-01-20 05:30:21 --> Utf8 Class Initialized
INFO - 2021-01-20 05:30:21 --> URI Class Initialized
INFO - 2021-01-20 05:30:21 --> Router Class Initialized
INFO - 2021-01-20 05:30:21 --> Output Class Initialized
INFO - 2021-01-20 05:30:21 --> Security Class Initialized
INFO - 2021-01-20 05:30:21 --> Input Class Initialized
INFO - 2021-01-20 05:30:21 --> Language Class Initialized
INFO - 2021-01-20 05:30:21 --> Loader Class Initialized
INFO - 2021-01-20 05:30:21 --> Helper loaded: url_helper
INFO - 2021-01-20 05:30:21 --> Helper loaded: file_helper
INFO - 2021-01-20 05:30:21 --> Helper loaded: security_helper
INFO - 2021-01-20 05:30:21 --> Helper loaded: form_helper
INFO - 2021-01-20 05:30:21 --> Helper loaded: access_helper
INFO - 2021-01-20 05:30:21 --> Helper loaded: date_helper
INFO - 2021-01-20 05:30:21 --> Database Driver Class Initialized
INFO - 2021-01-20 05:30:21 --> User Agent Class Initialized
INFO - 2021-01-20 05:30:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-01-20 05:30:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-01-20 05:30:21 --> Pagination Class Initialized
INFO - 2021-01-20 05:30:21 --> Form Validation Class Initialized
INFO - 2021-01-20 05:30:21 --> Controller Class Initialized
INFO - 2021-01-20 05:30:21 --> Model "Periksa_model" initialized
INFO - 2021-01-20 05:30:21 --> File loaded: C:\xampp\htdocs\poliklinik\application\views\periksa/index.php
INFO - 2021-01-20 05:30:21 --> Final output sent to browser
