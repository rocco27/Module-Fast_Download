<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2016 The OGP Development Team
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

define('create_alias', "Stwórz alias oraz folder");
define('save_as', "Zapisz jako");
define('failure', "Błąd, nie udało się wygenerować pliku dla aliasu");
define('success', "Powodzenie");
define('fast_download_service_for', "Pobieranie usługi przekierowania dla %s");
define('to_the_path', "Do ścieżki");
define('at_url', "URL");
define('create_alias_for', "Stwórz alias dla");
define('fast_dl', "Przekierowywanie pobrań (FastDL)");
define('current_aliases_at_remote_server', "Bieżące aliasy na serwerze hosta");
define('delete_selected_aliases', "Usuń wybrane aliasy");
define('no_aliases_defined', "Nie istnieją jeszcze aliasy zdefiniowane przez OGP dla tego serwera hosta.");
define('fastdl_port', "Port");
define('fastdl_port_info', "Port na którym będzie działał/nasłuchiwał Fast Download.");
define('fastdl_ip', "Adres");
define('fastdl_ip_info', "Adres IP lub domeny, w której twój serwer Fast Download będzie działał, domena musi znajdować się w /etc/hosts.");
define('listing', "Lista");
define('listing_info', "Jeśli 'włączony', serwer wyświetli zawartość folderów.");
define('fast_dl_advanced', "Zaawansowane Ustawienia");
define('apply_settings_and_restart_fastdl', "Zapisz konfigurację oraz wykonaj restart daemona.");
define('stop_fastdl', "Zatrzymaj Fast Download Daemon");
define('fast_download_daemon_running', "Fast Download Daemon jest uruchomiony.");
define('fast_download_daemon_not_running', "Fast Download Daemon jest zatrzymany.");
define('fastdl_could_not_be_restarted', "Nie można zrestartować usługi Fast Download.");
define('configuration_file_could_not_be_written', "Nie można zapisać pliku konfiguracyjnego.");
define('remove_folders', "Usuń folder dla wybranych aliasów.");
define('remove_folder', "Usuń folder");
define('delete_alias', "Usuń alias");
define('no_game_homes_assigned', "Brak serwerów gry przeznaczonych dla Ciebie. Musisz zwrócić się do admin OGP by przypisać dla Ciebie serwery.");
define('select_remote_server', "Wybierz serwer hosta");
define('access_rules', "Zasady dostępu");
define('create_aliases', "Stwórz Alias");
define('select_game', "Wybierz grę");
define('games_without_specified_rules', "Gry bez określonych reguł");
define('match_file_extension', "Dopasować rozszerzenie pliku");
define('match_file_extension_info', "Określ rozszerzenia, oddzielaj przecinkami, <br>które będzie możliwość pobrać<br>, <b>pozostałe będą niedostępne</b>.");
define('match_client_ip', "Dopasuj klienta IP");
define('match_client_ip_info', "Połączenia z pasującym adresem IP zostaną przyznane,<br>
puste dla nieograniczonego dostępu.<br>Możesz użyć wiele adresów IP lub zakresów oddzielonych przecinkami:<br>
/xx podsieci<br> Przykład: 10.0.0.0/16<br> /xxx.xxx.xxx.xxx podsieci<br> Przykład: 10.0.0.0/255.0.0.0<br> Dzielniki<br> Przykład: 10.0.0.5-230<br> Gwiazdki<br> Przykład: 10.0.*.*");
define('save_access_rules', "Zapisz reguły dostępu");
define('create_access_rules', "Stwórz reguły dostępu");
define('invalid_entries_found', "Znaleziono nieprawidłowe wpisy");
define('game_name', "Nazwa Gry");
define('alias_already_exists', "Alias %s już istnieje.");
define('warning_access_rules_applied_once_alias_created', "UWAGA: Reguły dostępu są stosowane przy tworzeniu aliasu. W obecnych aliasach nie będą stosowane żadne zmiany.");
define('autostart_on_agent_startup', "Autostart on Agent startup");
define('autostart_on_agent_startup_info', "Start the fast download daemon automatically when the Agent starts.");
define('port_forwarded_to_80', "Przekierowanie portu na 80");
define('port_forwarded_to_80_info', "Włącz tą opcję gdy Fast Download będzie działał na domyślnym porcie 80,  port nie będzie wyświetlony w adresie URL");
?>