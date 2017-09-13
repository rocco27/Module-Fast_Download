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

define('create_alias', "Alias und Ordner erstellen ");
define('save_as', "Speichern als");
define('failure', "Fehler, konnte die Alias-Datei nicht generieren");
define('success', "Erfolg");
define('fast_download_service_for', "Downloads Umleitungsservice für %s");
define('to_the_path', "Zum Pfad");
define('at_url', "zu URL");
define('create_alias_for', "Alias erstellen für");
define('fast_dl', "Weiterleiten von Downloads (FastDL)");
define('current_aliases_at_remote_server', "Aktuelle Aliase auf dem entfernten Server");
define('delete_selected_aliases', "Ausgewählte Aliase löschen");
define('no_aliases_defined', "Derzeit wurde kein Web-Alias via OGP für diesen Remote Server definiert.");
define('fastdl_port', "Port");
define('fastdl_port_info', "Port on which your Fast Download Daemon will start.");
define('fastdl_ip', "Adresse");
define('fastdl_ip_info', "Die IP Addresse oder Domain Name, in welchem Ihr Fast Download Server starten möchte, muss unter /etc/hosts aufgeführt sein.");
define('listing', "Auflistung");
define('listing_info', "Wenn 'an', wird der Server den Inhalt der Ordner auflisten.");
define('fast_dl_advanced', "Erweiterte Einstellungen");
define('apply_settings_and_restart_fastdl', "Daemon Konfiguration speichern und neustarten");
define('stop_fastdl', "FastDL Daemon anhalten.");
define('fast_download_daemon_running', "FastDL Daemon läuft.");
define('fast_download_daemon_not_running', "FastDL Daemon läuft nicht.");
define('fastdl_could_not_be_restarted', "Der FastDL Dienst konnte nicht neu gestartet werden.");
define('configuration_file_could_not_be_written', "Die Konfigurationsdatei konnte nicht geschrieben werden.");
define('remove_folders', "Ordner für ausgewählte Aliase entfernen.");
define('remove_folder', "Ordner löschen");
define('delete_alias', "Alias löschen");
define('no_game_homes_assigned', "Es wurden Ihnen keine Gameserver zugewiesen. Sie müssen einen OGP Admin bitten, sich einen Gameserver zuweisen zu lassen.");
define('select_remote_server', "Remote Server auswählen");
define('access_rules', "Zugriffsregeln");
define('create_aliases', "Aliase erstellen");
define('select_game', "Spiel auswählen");
define('games_without_specified_rules', "Spiele ohne spezifizierte Regeln");
define('match_file_extension', "Identische Dateierweiterung");
define('match_file_extension_info', "Zugriffe via Kommagetrennte Dateierweiterungen erlauben.<br> <b>Leer für uneingeschränkten Zugriff</b>.");
define('match_client_ip', "Client IP identisch");
define('match_client_ip_info', "Zugriff für eingegebene IP's erlauben,<br>leer für uneingeschränkten Zugriff. Sie können auch<br>mehrere IP Adressen oder ganze IP Ranges kommagetrennt einfügen.<br>/xx Subnetze<br>Beispiel: 10.0.0.0/16<br>/xxx.xxx.xxx.xxx Subnetze<br>Beispiel: 10.0.0.0/255.0.0.0<br>Hyphen Ranges<br>Beispiel: 10.0.0.5-230<br>Asterisk Treffer<br>Beispiel: 10.0.*.*");
define('save_access_rules', "Zugriffsregeln speichern");
define('create_access_rules', "Zugriffsregeln erstellen");
define('invalid_entries_found', "Ungültige Einträge gefunden");
define('game_name', "Spielname");
define('alias_already_exists', "Alias %s existiert bereits.");
define('warning_access_rules_applied_once_alias_created', "WARNUNG: beim Erstellen des Alias werden Zugriffsregeln angewendet. Auf die aktuellen Aliase werden keine Änderungen übernommen.");
define('autostart_on_agent_startup', "Autostart on Agent startup");
define('autostart_on_agent_startup_info', "Start the fast download daemon automatically when the Agent starts.");
define('port_forwarded_to_80', "Port weitergeleitet von 80");
define('port_forwarded_to_80_info', "Aktivieren Sie diese Option, wenn der für diesen FastDL Daemon konfigurierte Port von Port 80 aus weitergeleitet wurde, sodass der Port bei URLs verborgen bleibt.");
?>