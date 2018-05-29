<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2018 The OGP Development Team
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

define('OGP_LANG_create_alias', "إنشاء الاسم المستعار والمجلد");
define('OGP_LANG_save_as', "الحفظ في");
define('OGP_LANG_failure', "حدث خطأ، فشلت في إنشاء ملف الاسم المستعار");
define('OGP_LANG_success', "نجح");
define('OGP_LANG_fast_download_service_for', "خدمة إعادة توجيه التحميلات ل %s");
define('OGP_LANG_to_the_path', "إلى مسار");
define('OGP_LANG_at_url', "في رابط");
define('OGP_LANG_create_alias_for', "إنشاء اسم مستعار ل");
define('OGP_LANG_fast_dl', "إعادة توجيه التحميلات (تحميل سريع)");
define('OGP_LANG_current_aliases_at_remote_server', "الأسماء المستعارة الحالية في سيرفر التحكم");
define('OGP_LANG_delete_selected_aliases', "حذف الأسماء المستعارة المحددة");
define('OGP_LANG_no_aliases_defined', "لا توجد أسماء مستعارة على شبكة الإنترنت تحددها OGP لسيرفر التحكم.");
define('OGP_LANG_fastdl_port', "بورت");
define('OGP_LANG_fastdl_port_info', "Port on which your Fast Download Daemon will start.");
define('OGP_LANG_fastdl_ip', "عنوان");
define('OGP_LANG_fastdl_ip_info', "عنوان الأي بي أو المجال الذي سيبدأ فيه خادم التحميل السريع، يجب أن يكون المجال مدرجا في / /etc/hosts.");
define('OGP_LANG_listing', "قائمة");
define('OGP_LANG_listing_info', "If 'on', the server will list the contents of folders.");
define('OGP_LANG_fast_dl_advanced', "إعدادات متقدمة");
define('OGP_LANG_apply_settings_and_restart_fastdl', "حفظ التكوين الخفي وإعادة تشغيله");
define('OGP_LANG_stop_fastdl', "توقيف التحميل السريع الخفي");
define('OGP_LANG_fast_download_daemon_running', "التحميل السريع الخفي قيد التشغيل.");
define('OGP_LANG_fast_download_daemon_not_running', "التحميل السريع الخفي ليس قيد التشغيل.");
define('OGP_LANG_fastdl_could_not_be_restarted', "تعذر إعادة تشغيل خدمة التحميل السريع.");
define('OGP_LANG_configuration_file_could_not_be_written', "The configuration file could not be written.");
define('OGP_LANG_remove_folders', "إزالة المجلد للأسماء المستعارة المحددة.");
define('OGP_LANG_remove_folder', "إزالة المجلد");
define('OGP_LANG_delete_alias', "حذف الاسم المستعار");
define('OGP_LANG_no_game_homes_assigned', "No game servers assigned for you. You need to ask your OGP admin to assign games for you.");
define('OGP_LANG_select_remote_server', "حدد سيرفر التحكم");
define('OGP_LANG_access_rules', "قواعد الوصول");
define('OGP_LANG_create_aliases', "إنشاء الأسماء المستعارة");
define('OGP_LANG_select_game', "حدد اللعبة");
define('OGP_LANG_games_without_specified_rules', "ألعاب بدون قواعد محددة");
define('OGP_LANG_match_file_extension', "Match file extension");
define('OGP_LANG_match_file_extension_info', "Specify extensions separated by coma,<br> the matching files will be accessible.<br><b>Blank for unrestricted access</b>.");
define('OGP_LANG_match_client_ip', "Match client IP");
define('OGP_LANG_match_client_ip_info', "Connections with matching IP will be granted,<br>blank for unrestricted access. You can use<br>multiple IPs or ranges separated by coma:<br>/xx subnets<br>Example: 10.0.0.0/16<br>/xxx.xxx.xxx.xxx subnets<br>Example: 10.0.0.0/255.0.0.0<br>Hyphen ranges<br>Example: 10.0.0.5-230<br>Asterisk matching<br>Example: 10.0.*.*");
define('OGP_LANG_save_access_rules', "حفظ قواعد الوصول");
define('OGP_LANG_create_access_rules', "إنشاء قواعد الوصول");
define('OGP_LANG_invalid_entries_found', "تم العثور على إدخالات غير صالحة");
define('OGP_LANG_game_name', "إسم اللعبة");
define('OGP_LANG_alias_already_exists', "الاسم المستعار %s موجود من قبل.");
define('OGP_LANG_warning_access_rules_applied_once_alias_created', "WARNING: Access rules are applied when the alias is created. No changes will be applied to the current aliases.");
define('OGP_LANG_autostart_on_agent_startup', "بدء التشغيل التلقائي على بدء تشغيل الوكيل");
define('OGP_LANG_autostart_on_agent_startup_info', "Start the fast download daemon automatically when the Agent starts.");
define('OGP_LANG_port_forwarded_to_80', "تم توجيه المنفذ من 80");
define('OGP_LANG_port_forwarded_to_80_info', "Enable this option if the port configured for this fast download daemon has been forwarded from port 80, so the port will be hidden at URLs.");
define('OGP_LANG_current_access_rules', "Current access rules");
?>