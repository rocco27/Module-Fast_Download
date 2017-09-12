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

define('create_alias', "Создайте аляс и папку");
define('save_as', "Сохранить как...");
define('failure', "Ошибка, не удалось сгенерировать файл аляса");
define('success', "Успешно");
define('fast_download_service_for', "Служба перенаправления загрузок для %s");
define('to_the_path', "Путь к файлам");
define('at_url', "URL-адрес");
define('create_alias_for', "Создать аляс для");
define('fast_dl', "Перенаправление загрузки (FastDL)");
define('current_aliases_at_remote_server', "Текущие аляс на удаленном сервере");
define('delete_selected_aliases', "Удалить выбранные алясы");
define('no_aliases_defined', "Нет никаких сетевых алясов, определенных OGP для этого удаленного сервера.");
define('fastdl_port', "Порт");
define('fastdl_port_info', "Порт, на котором будет запущен ваш сервер быстрой загрузки 'Fast Download'.");
define('fastdl_ip', "Адрес");
define('fastdl_ip_info', "The IP address or domain in which your Fast Download server will start, the domain must to be listed at /etc/hosts.");
define('listing', "Список");
define('listing_info', "Если «включено», сервер отобразит содержимое папок.");
define('fast_dl_advanced', "Расширенные настройки");
define('apply_settings_and_restart_fastdl', "Сохраните конфигурацию службы и перезапустите его.");
define('stop_fastdl', "Остановить службу Fast Download");
define('fast_download_daemon_running', "Служба Быстрой загрузки 'Fast Download' запущена.");
define('fast_download_daemon_not_running', "Служба Быстрой загрузки 'Fast Download' НЕ запущена.");
define('fastdl_could_not_be_restarted', "Службу Быстрой загрузки 'Fast Download' не удалось перезапустить.");
define('configuration_file_could_not_be_written', "Файл конфигурации не может быть записан.");
define('remove_folders', "Удалить папку для выбранных алаясов");
define('remove_folder', "Удалить папку");
define('delete_alias', "Удалить Аляс");
define('no_game_homes_assigned', "У вас нету привязанных . Обратитесь к администратору для решения этой проблемы.");
define('select_remote_server', "Выберите удаленный хост");
define('access_rules', "Правила доступа");
define('create_aliases', "Создать Аляс");
define('select_game', "Выберите игру");
define('games_without_specified_rules', "Игры без заданных правил");
define('match_file_extension', "Разрешить файлы с расширением");
define('match_file_extension_info', "Доступные файлы для скачивания будут только те,<br> у которых будет совпадать расширение с тем что вписано тут через запятую ',' <br><b>Оставте поле пустым что бы разрешить все!</b>.");
define('match_client_ip', "Разрешенные IP-адреса клиента");
define('match_client_ip_info', "Подключаться смогут только те, IP у которых будет доступ, вписав их через запятую ',' <br> Оставте поле пустым что бы разрешить подключением ВСЕМ!<br>Вы можете разрешить несколько IP-адресов<br>подсеть /xx <br> Например: 10.0.0.0/16 <br> подсеть  /xxx.xxx.xxx.xxx <br> Пример: 10.0.0.0/255.0.0.0 <br> Диапазоны <br>Пример: 10.0.0.5-230<br>Маску <br>Пример: 10.0.*.*");
define('save_access_rules', "Сохранить правила доступа");
define('create_access_rules', "Создать правила доступа");
define('invalid_entries_found', "Найдены не правильные записи");
define('game_name', "Название игры");
define('alias_already_exists', "Аляс %s уже существует.");
define('warning_access_rules_applied_once_alias_created', "ВНИМАНИЕ: Правила доступа применяются при создании аляса. Никакие изменения не будут применены к текущим алясам.");
define('autostart_on_agent_startup', "Автозапуск при запуске агента");
define('autostart_on_agent_startup_info', "Запускать службу Быстрой загрузки 'Fast Download' автоматически при запуске Агента");
define('port_forwarded_to_80', "Порт переадресован из 80");
define('port_forwarded_to_80_info', "Включите эту опцию, если порт, настроенный для этой службы Быстрой загрузки 'Fast Download', был перенаправлен из порта 80, тогда порт будет скрыт в URL-адресах.");
?>