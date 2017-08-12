<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2017 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('create_alias', "Mappa és álnév létrehozása");
define('save_as', "Mentés mint");
define('failure', "Hiba, nem sikerült az álnév fájl generálása");
define('success', "Sikeres");
define('fast_download_service_for', "Letöltések átirányítási szolgáltatása a %s-hoz");
define('to_the_path', "To the path");
define('at_url', "URL címen");
define('create_alias_for', "Álnév létrehozása ehhez");
define('fast_dl', "Átirányított letöltések (FastDL)");
define('current_aliases_at_remote_server', "Aktuális álnevek a távoli szerverhez");
define('delete_selected_aliases', "A kiválasztott álnevek törlése");
define('no_aliases_defined', "There are no web aliases defined by OGP for this remote server yet.");
define('fastdl_port', "Port");
define('fastdl_port_info', "A port, amelyen a gyors letöltési démonod el fog indulni.");
define('fastdl_ip', "Cím");
define('fastdl_ip_info', "Az IP cím vagy domain amin a Gyorsletöltési Démon szolgáltatás elindul. A domainek az '/etc/hosts' fájlban listázva kell lennie.");
define('listing', "Felsorolás");
define('listing_info', "Ha 'bekapcsolva', a szerver listázni fogja a mappák tartalmát.");
define('fast_dl_advanced', "További beállítások");
define('apply_settings_and_restart_fastdl', "Mentsd a démon konfigurációját és indítsd újra");
define('stop_fastdl', "Gyors letöltési démon leállítása.");
define('fast_download_daemon_running', "A gyors letöltés démon fut.");
define('fast_download_daemon_not_running', "A gyors letöltés démon nem fut.");
define('fastdl_could_not_be_restarted', "A gyors letöltés szolgáltatást nem lehet újraindítani.");
define('configuration_file_could_not_be_written', "A konfigurációs fájl nem írható.");
define('remove_folders', "Mappa eltávolítása a kiválasztott álnevek.");
define('remove_folder', "Könyvtár eltávolítása");
define('delete_alias', "Álvév törlése");
define('no_game_homes_assigned', "No game servers assigned for you. You need to ask your OGP admin to assign games for you.");
define('select_remote_server', "Válassz távoli szervert");
define('access_rules', "Hozzáférési szabályok");
define('create_aliases', "Álnév létrehozása");
define('select_game', "Válassz játékot");
define('games_without_specified_rules', "Játékok speciális szabályok nélkül.");
define('match_file_extension', "Fájl kiterjesztés párosítás");
define('match_file_extension_info', "Kiterjesztések meghatározása vesszővel elválasztva,<br>a megfelelő fájlok hozzáférhetőek lesznek.<br><b>Hagyd üresen a korlátlan hozzáféréshez</ b>.");
define('match_client_ip', "Kliens IP párosítás");
define('match_client_ip_info', "Connections with matching IP will be granted,<br>blank for unrestricted access. You can use<br>multiple IPs or ranges separated by coma:<br>/xx subnets<br>Example: 10.0.0.0/16<br>/xxx.xxx.xxx.xxx subnets<br>Example: 10.0.0.0/255.0.0.0<br>Hyphen ranges<br>Example: 10.0.0.5-230<br>Asterisk matching<br>Example: 10.0.*.*");
define('save_access_rules', "Hozzáférési szabályok mentése");
define('create_access_rules', "Hozzáférési szabályok létrehozása");
define('invalid_entries_found', "Érvénytelen bejegyzés található");
define('game_name', "Játék neve");
define('alias_already_exists', "%s álnév már létezik.");
define('warning_access_rules_applied_once_alias_created', "WARNING: Access rules are applied when the alias is created. No changes will be applied to the current aliases.");
define('autostart_on_agent_startup', "Automata indítás az Agent elindulásakor");
define('autostart_on_agent_startup_info', "A gyors letöltési démon automatikus elindítása, amikor az Agent elindul.");
define('port_forwarded_to_80', "Port továbbítása 80-ról");
define('port_forwarded_to_80_info', "Enable this option if the port configured for this fast download daemon has been forwarded from port 80, so the port will be hidden at URLs.");
?>