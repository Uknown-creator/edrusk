<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_o365', language 'ru', version '3.11'.
 *
 * @package     local_o365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_healthcheck'] = 'Проверка состояния';
$string['acp_maintenance'] = 'Инструменты обслуживания';
$string['acp_maintenance_cleandeltatoken'] = 'Очистить дельта-токены синхронизации пользователей';
$string['acp_maintenance_cleandeltatoken_desc'] = 'Если синхронизация пользователя не происходит полностью после обновления параметров синхронизации пользователя, это может быть вызвано старым дельта-токеном синхронизации. Очистка токена принудительно удалит  полную повторную синхронизацию в следующий раз, когда будет запущена синхронизация пользователя.';
$string['acp_maintenance_coursegroupscheck'] = 'Воссоздать удаленные группы Microsoft 365';
$string['acp_maintenance_coursegroupscheck_desc'] = 'Это проверит наличие любых команд Microsoft 365, которые могли быть удалены вручную, и воссоздаст их.';
$string['acp_maintenance_coursegroupusers'] = 'Повторная синхронизация пользователей в группах для курсов.';
$string['acp_maintenance_coursegroupusers_desc'] = 'Это повторно синхронизирует членство пользователя во всех группах Office 365, созданных для всех курсов Moodle. Это гарантирует, что только те пользователи, которые зарегистрированы в курсе Moodle, входят в группу Office 365. <br /> <b> Примечание: </b> Если вы добавили в группу курсов дополнительных пользователей, которые не зарегистрированы в соответствующем курсе Moodle, они будут удалены.';
$string['acp_maintenance_debugdata'] = 'Создать пакет данных отладки';
$string['acp_maintenance_debugdata_desc'] = 'Это создаст пакет, содержащий различную информацию о вашей среде Moodle и Microsoft 365, чтобы помочь разработчикам в решении любых проблем, которые могут у вас возникнуть. По запросу разработчика запустите этот инструмент и отправьте полученный файл для загрузки. Примечание: Хотя этот пакет не содержит конфиденциальных данных, мы просим вас открыто не публиковать этот файл и не отправлять его ненадежной стороне.';
$string['acp_maintenance_desc'] = 'Эти инструменты могут помочь вам решить некоторые распространенные проблемы.';
$string['acp_maintenance_warning'] = 'Предупреждение: это дополнительные инструменты. Пожалуйста, используйте их, только если вы понимаете, что делаете.';
$string['acp_parentsite_desc'] = 'Сайт для обмена данными курса Moodle.';
$string['acp_parentsite_name'] = 'Сайт Moodle';
$string['acp_sharepointcourseselect'] = 'Выбор курса SharePoint';
$string['acp_sharepointcourseselect_applyfilter'] = 'Применить фильтр';
$string['acp_sharepointcourseselect_bulk'] = 'Массовые операции';
$string['acp_sharepointcourseselect_desc'] = 'Выберите, для каких курсов будут созданы сайты SharePoint. По умолчанию сайты не создаются. Затем вы можете выбрать конкретные курсы («Пользовательские») или создать сайт SharePoint для всех курсов Moodle («Синхронизировать все»).';
$string['acp_sharepointcourseselect_enableshown'] = 'Вернуться к настройкам';
$string['acp_sharepointcourseselect_filter'] = 'Фильтр курсов';
$string['acp_sharepointcourseselect_filtercategory'] = 'Фильтр по категории курса';
$string['acp_sharepointcourseselect_filterstring'] = 'Фильтр по строке поиска';
$string['acp_sharepointcourseselect_instr'] = 'Чтобы отсортировать по столбцу, выберите заголовок столбца. Установите флажок для всех курсов, которые будут связаны с ресурсом SharePoint. Чтобы по умолчанию включить все курсы, отключите эту пользовательскую функцию в настройках администратора.';
$string['acp_sharepointcourseselect_instr_header'] = 'Инструкции';
$string['acp_sharepointcourseselect_none'] = 'Нет <br /> Сайты SharePoint не создаются.';
$string['acp_sharepointcourseselect_off_header'] = 'Не включено';
$string['acp_sharepointcourseselect_off_instr'] = 'Выбор пользовательского курса SharePoint не включен. Включите его в настройках плагина, чтобы использовать эту функцию.';
$string['acp_sharepointcourseselect_onall'] = 'Синхронизировать все <br /> Для каждого курса Moodle на этом сайте будет создан сайт SharePoint.';
$string['acp_sharepointcourseselect_oncustom'] = 'Пользовательские <a href="{$a}">Индивидуальные настройки</a><br />  Выберите, какие курсы Moodle будут связаны с сайтом SharePoint.';
$string['acp_sharepointcourseselect_searchwarning'] = 'Примечание: Поиск приведет к потере всех несохраненных изменений. Нажмите «Сохранить изменения», чтобы убедиться, что ваши изменения сохранены.';
$string['acp_sharepointcourseselect_syncopt'] = 'Синхронизация SharePoint-сайтов';
$string['acp_sharepointcourseselect_syncopt_btn'] = 'Синхронизация с SharePoint-сайтами';
$string['acp_sharepointcourseselect_syncopt_inst'] = 'Поскольку эта функциональность была недавно обновлена, приведенная здесь информация может быть неточной. Используйте кнопку ниже, чтобы синхронизировать это отображение с существующими дочерними сайтами курса в SharePoint. Эта операция может занять некоторое время.';
$string['acp_sharepointcourseselectlabel_enabled'] = 'Разрешить';
$string['acp_sharepointcustom_savemessage'] = 'Ваши изменения были сохранены.';
$string['acp_teamconnections'] = 'Связи команд';
$string['acp_teamconnections_actions'] = 'Действия';
$string['acp_teamconnections_cache_last_updated'] = 'Последний раз кэш команд обновлялся {$a->lastupdated}. Щелкните <a href="{$a->updateurl}">здесь</a> для обновления кэша.';
$string['acp_teamconnections_cache_never_updated'] = 'Кэш команд никогда не обновлялся. Для обновления щелкните <a href="{$a->updateurl}">здесь</a>.';
$string['acp_teamconnections_connected_team'] = 'Связанная команда';
$string['acp_teamconnections_connection_completed'] = 'Курс успешно подсоединен к команде';
$string['acp_teamconnections_course_connected'] = 'Курс успешно связан с командой';
$string['acp_teamconnections_current_connection'] = 'ТЕКУЩАЯ СВЯЗЬ';
$string['acp_teamconnections_exception_course_not_connected_to_group'] = 'Курс не связан с Группой.';
$string['acp_teamconnections_exception_course_not_exist'] = 'Курса для связывания не существует.';
$string['acp_teamconnections_exception_invalid_team_id'] = 'Неверный ID команды';
$string['acp_teamconnections_exception_no_unified_token'] = 'Не удалось получить единый токен для вызовов API.';
$string['acp_teamconnections_exception_not_configured'] = 'Microsoft 365 настроен не полностью.';
$string['acp_teamconnections_exception_team_already_connected'] = 'Команда уже связана с другим курсом';
$string['acp_teamconnections_exception_team_creation'] = 'При создании команды произошла ошибка . Подробности: {$a}';
$string['acp_teamconnections_exception_team_does_not_exist'] = 'Не существует Команды, с которой пытается связаться курс.';
$string['acp_teamconnections_exception_team_no_owner'] = 'Не удается найти подходящего владельца команды.';
$string['acp_teamconnections_form_connect_course'] = 'Управление связью команды для курса {$a}';
$string['acp_teamconnections_form_team'] = 'Выбрать команду';
$string['acp_teamconnections_group_only'] = '(Только группа)';
$string['acp_teamconnections_invalid_connection'] = 'Неверные связи';
$string['acp_teamconnections_not_connected'] = 'Нет связей';
$string['acp_teamconnections_sync_disabled'] = 'Перед управлением подключениями Групп необходимо сначала включить синхронизацию курса.';
$string['acp_teamconnections_table_cannot_create_team_from_group'] = 'Невозможно создать команду из группы - нет владельца';
$string['acp_teamconnections_table_complete_connection'] = 'Подключиться к Команде, связанной с группой';
$string['acp_teamconnections_table_connect'] = 'Связать';
$string['acp_teamconnections_table_connect_to_different_team'] = 'Связать с другой командой';
$string['acp_teamconnections_table_create_team'] = 'Создать команду';
$string['acp_teamconnections_table_update'] = 'Обновить';
$string['acp_teamconnections_team_already_connected'] = 'Курс уже связан с Командой.';
$string['acp_teamconnections_team_created'] = 'Команда для курса успешно создана.';
$string['acp_teamconnections_team_exists_but_not_connected'] = 'Курс настроен для подключения только к Группе, однако  существует Команда, связанная с Группой.';
$string['acp_teamconnections_teams_cache_updated'] = 'Кэш команд успешно обновлен.';
$string['acp_teamconnections_title'] = 'Управление связями Команд';
$string['acp_tenants_actions'] = 'Действия';
$string['acp_tenants_add'] = 'Добавить нового клиента';
$string['acp_tenants_errornotsetup'] = 'Пожалуйста, завершите процесс установки плагина перед добавлением дополнительных клиентов.';
$string['acp_tenants_hosttenant'] = 'Хост клиента: {$a}';
$string['acp_tenants_intro'] = '<b>Как работает многопользовательский доступ:</b><br />Многопользовательский режим позволяет нескольким клиентам Microsoft 365 получить доступ к вашему сайту Moodle.<br /><br /> Вот как это сделать: <ol> <li>Войдите в Moodle от имени администратора, который не использует плагин аутентификации OpenID Connect.</li> <li>Отключите в Moodle плагин аутентификации OpenID Connect. (Используйте <a href="{$a}/admin/settings.php?section=manageauths">страницу управления плагинами аутентификации</a>.)</li> <li>Перейдите в Azure AD и найдите приложение, которое вы настроили для Moodle</li> <li>Включите многопользовательский режим в приложении Azure AD и сохраните изменения.</li> <li>Для каждого включаемого клиента нажмите «Добавить нового клиента» и войдите в систему с учетной записью администратора того клиента, которого вы хотите включить.</li> <li>После того, как вы добавили всех нужных вам клиентов, снова включите в Moodle плагин аутентификации OpenID Connect.</li> <li>Готово! Чтобы в будущем добавить дополнительных клиентов, просто нажмите кнопку «Добавить нового клиента» и войдите в систему с учетной записью администратора этого клиента.</li> </ol> <b>Важное примечание:</b> Многопользовательская среда Azure AD позволяет всем клиентам Microsoft 365 доступ к вашему приложению при включении. Добавление клиентов позволяет нам ограничить доступ к Moodle только настроенным клиентам. <b>Если вы удалите всех клиентов из этого списка перед отключением многопользовательского режима в Azure AD или включите аутентификацию OpenID Connect в Moodle с пустым списком, ваш сайт Moodle будет открыт для всех клиентов Microsoft 365.</b>';
$string['acp_tenants_none'] = 'Вы не настроили клиентов. Если вы включили многопользовательский доступ в Azure AD, ваш сайт Moodle может быть открыт для всех пользователей Office 365';
$string['acp_tenants_revokeaccess'] = 'Отменить доступ';
$string['acp_tenants_tenant'] = 'Клиент';
$string['acp_tenants_title'] = 'Многопользовательский доступ';
$string['acp_tenants_title_desc'] = 'Эта страница поможет вам настроить многопользовательский доступ к Moodle из Office 365.';
$string['acp_tenantsadd_desc'] = 'Чтобы предоставить доступ дополнительному клиенту, нажмите ниже кнопку и войдите в Microsoft 365, используя учетную запись администратора нового клиента. Вы вернетесь к списку дополнительных клиентов, где будет указан новый клиент. После этого вы сможете использовать Moodle с новым клиентом.';
$string['acp_tenantsadd_linktext'] = 'Перейдите на страницу входа в Microsoft 365';
$string['acp_userconnections'] = 'Связи пользователей';
$string['acp_userconnections_column_actions'] = 'Действия';
$string['acp_userconnections_column_muser'] = 'Пользователь Moodle';
$string['acp_userconnections_column_o365user'] = 'Пользователь Office 365';
$string['acp_userconnections_column_status'] = 'Состояние соединения';
$string['acp_userconnections_column_usinglogin'] = 'Используемый логин';
$string['acp_userconnections_filtering_muserfullname'] = 'Полное имя пользователя Moodle';
$string['acp_userconnections_filtering_musername'] = 'Логин Moodle';
$string['acp_userconnections_filtering_o365username'] = 'Логин Office 365';
$string['acp_userconnections_manualmatch_details'] = 'Эта страница позволяет сопоставить одного пользователя Moodle с одним пользователем Microsoft 365.';
$string['acp_userconnections_manualmatch_error_muserconnected'] = 'Пользователь Moodle уже связан с пользователем Microsoft 365';
$string['acp_userconnections_manualmatch_error_muserconnected2'] = 'Пользователь Moodle уже связан с пользователем Microsoft 365 (2)';
$string['acp_userconnections_manualmatch_error_musermatched'] = 'Пользователь Moodle уже сопоставлен пользователю Microsoft 365';
$string['acp_userconnections_manualmatch_error_o365userconnected'] = 'Пользователь Microsoft 365 уже связан с другим пользователем Moodle';
$string['acp_userconnections_manualmatch_error_o365usermatched'] = 'Пользователь Microsoft 365 уже сопоставлен с другим пользователем Moodle';
$string['acp_userconnections_manualmatch_musername'] = 'Пользователь Moodle';
$string['acp_userconnections_manualmatch_o365username'] = 'Логин Microsoft 365';
$string['acp_userconnections_manualmatch_title'] = 'Соответствие пользователя вручную';
$string['acp_userconnections_manualmatch_uselogin'] = 'Войти с помощью Microsoft 365';
$string['acp_userconnections_resync_nodata'] = 'Не удалось найти информацию, сохраненную Microsoft 365 для этого пользователя.';
$string['acp_userconnections_resync_notconnected'] = 'Этот пользователь не подключен к Microsoft 365';
$string['acp_userconnections_table_connected'] = 'Связано';
$string['acp_userconnections_table_disconnect'] = 'Разъединено';
$string['acp_userconnections_table_disconnect_confirmmsg'] = 'Это отключит пользователя Moodle "{$a}" от Microsoft 365. Нажмите на ссылку ниже, чтобы продолжить.';
$string['acp_userconnections_table_match'] = 'Совпадение';
$string['acp_userconnections_table_matched'] = 'Совпадает с существующим пользователем. <br /> В ожидании завершения';
$string['acp_userconnections_table_noconnection'] = 'Нет соединения';
$string['acp_userconnections_table_resync'] = 'Повторная синхронизация';
$string['acp_userconnections_table_synced'] = 'Синхронизировано с Azure AD. <br /> Ожидается начальный вход.';
$string['acp_userconnections_table_unmatch'] = 'Несовпадение';
$string['acp_userconnections_table_unmatch_confirmmsg'] = 'Это не поставило в соответствие пользователя "{$a}"  из Office 365 в Moodle. Нажмите на ссылку ниже, чтобы продолжить.';
$string['acp_usergroupcustom'] = 'Настройка Teams';
$string['acp_usergroupcustom_bulk'] = 'Массовые операции';
$string['acp_usergroupcustom_bulk_disable'] = 'Отключено все';
$string['acp_usergroupcustom_bulk_enable'] = 'Включено все';
$string['acp_usergroupcustom_bulk_help'] = 'Переключатели функций работают только с курсами на текущей странице.';
$string['acp_usergroupcustom_enabled'] = 'Только группа';
$string['acp_usergroupcustom_new_course'] = 'Включено по умолчанию для нового курса';
$string['acp_usergroupcustom_new_course_desc'] = 'При включенном параметре для всех вновь созданных курсов по умолчанию будет включена синхронизация.';
$string['acp_usergroupcustom_off'] = 'Отключено <br /> Отключить создание команд для всех курсов Moodle.';
$string['acp_usergroupcustom_onall'] = 'Все функции включены <br /> Включены группы курсов (т.е. Команды) для всех курсов и предоставлены все функции групп в блоке Microsoft для всех курсов.';
$string['acp_usergroupcustom_oncustom'] = 'Настройка <br /> Позволяет выбрать, для каких курсов создавать группы в курсах (т.е. Команды), а также выбрать, какие функции групп доступны в блоке Microsoft для каждого курса. <br> <span id="adminsetting_usergroups" style="font-weight: bold"><a href="{$a}"> Настройка групп</a> </span>';
$string['acp_usergroupcustom_savemessage'] = 'Ваши изменения были сохранены.';
$string['acp_usergroupcustom_searchwarning'] = 'Примечание: При поиске все изменения будут утеряны. Нажмите «Сохранить изменения», чтобы сохранить ваши изменения.';
$string['acp_usermatch'] = 'Сопоставление пользователя';
$string['acp_usermatch_desc'] = 'Этот инструмент позволяет сопоставить пользователей Moodle с пользователями Microsoft 365. Загрузите файл, содержащий пользователей Moodle и связанных пользователей Microsoft 365, и задача cron проверит данные и настроит соответствие.';
$string['acp_usermatch_matchqueue'] = 'Шаг 2: Очередь сопоствлений';
$string['acp_usermatch_matchqueue_clearall'] = 'Очистить все';
$string['acp_usermatch_matchqueue_clearerrors'] = 'Очистить ошибки';
$string['acp_usermatch_matchqueue_clearqueued'] = 'Очистить очередь';
$string['acp_usermatch_matchqueue_clearsuccess'] = 'Очищено';
$string['acp_usermatch_matchqueue_column_muser'] = 'Логин Moodle';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Логин Office 365';
$string['acp_usermatch_matchqueue_column_openidconnect'] = 'OpenID Connect';
$string['acp_usermatch_matchqueue_column_status'] = 'Состояние';
$string['acp_usermatch_matchqueue_desc'] = 'В этой таблице показано текущее состояние операции сопоставления. Каждый раз при запуске соответствующего задания cron  будет обрабатываться пакет следующих пользователей. <br /> <b> Примечание: </b> Эта страница не обновляется динамически, обновите эту страницу, чтобы посмотреть текущее состояние.';
$string['acp_usermatch_matchqueue_empty'] = 'Очередь сопоставлений в настоящее время пуста. Загрузите файл данных с помощью средства выбора файлов выше, чтобы добавить пользователей в очередь';
$string['acp_usermatch_matchqueue_status_error'] = 'Ошибка: {$a}';
$string['acp_usermatch_matchqueue_status_queued'] = 'В очереди';
$string['acp_usermatch_matchqueue_status_success'] = 'Успешно';
$string['acp_usermatch_upload'] = 'Шаг 1: Загрузить новые сопоставления';
$string['acp_usermatch_upload_desc'] = 'Загрузите файл данных, содержащий имена пользователей Moodle и Microsoft 365, чтобы сопоставить пользователей Moodle с пользователями Microsoft 365. <br /> <br /> Этот файл должен представлять собой простой текстовый CSV-файл, содержащий три элемента в строке: логин Moodle, логин Microsoft 365  и 1 или 0, чтобы изменить метод аутентификации пользователей на OpenID Connect или связанную учетную запись соответственно. Не включайте заголовки или дополнительные данные. <br /> Например: <pre>moodleuser1,bob.smith@example.onmicrosoft.com,1<br />moodleuser2,john.doe@example.onmicrosoft.com,0</pre>';
$string['acp_usermatch_upload_err_badmime'] = 'Тип {$a} не поддерживается. Загрузите текстовый CSV-файл.';
$string['acp_usermatch_upload_err_data'] = 'Строка #{$a} содержит недопустимые данные. Каждая строка в CSV-файле должна содержать два элемента: имя пользователя Moodle и имя пользователя Microsoft 365.';
$string['acp_usermatch_upload_err_fileopen'] = 'Не удалось открыть файл для обработки. Правильны ли разрешения в каталоге Moodledata?';
$string['acp_usermatch_upload_err_nofile'] = 'Не получен файл для добавления в очередь.';
$string['acp_usermatch_upload_submit'] = 'Добавить файл данных для очереди сопоставления';
$string['acp_usrgroupcustom_enable_all'] = 'Включить синхронизацию для всех курсов';
$string['assignment'] = 'Задание';
$string['calendar_event'] = 'Просмотр деталей';
$string['calendar_setting'] = 'Включить синхронизацию календаря Outlook';
$string['calendar_site'] = 'Календарь сайта';
$string['calendar_user'] = 'Персональный (пользовательский) календарь';
$string['course_assignment_submitted_due'] = 'Курс - {$a->course} &nbsp; | &nbsp; Задание -{$a->assignment} <br /> Отправлено - {$a->submittedon} &nbsp; | &nbsp; Дата выполнения - {$a->duedate}';
$string['course_selector_label'] = 'Выберите существующий курс';
$string['due_date'] = 'Дата выполнения - {$a}';
$string['error_missing_app_id'] = 'Отсутствует настройка идентификатора приложения.';
$string['error_missing_bot_settings'] = 'Функция бота включена, но настройки бота отсутствуют.';
$string['erroracpapcantgettenant'] = 'Не удалось получить клиента Azure AD, введите вручную.';
$string['erroracpauthoidcnotconfig'] = 'Пожалуйста, сначала установите учетные данные приложения в auth_oidc.';
$string['erroracpcantgettenant'] = 'Не удалось получить URL OneDrive, введите его вручную.';
$string['erroracplocalo365notconfig'] = 'Пожалуйста, сначала настройте local_o365.';
$string['erroracpnosptoken'] = 'Не было доступного ключа SharePoint, и его не удалось получить.';
$string['errorchecksystemapiuser'] = 'Не удалось получить ключ пользователя системного API. Запустите проверку работоспособности, убедитесь, что ваш cron Moodle запущен, и обновите пользователя системного API, если это необходимо.';
$string['errorcouldnotcreatespgroup'] = 'Не удалось создать группу SharePoint.';
$string['errorcouldnotrefreshtoken'] = 'Не удалось обновить ключ';
$string['errorcoursenotsubsiteenabled'] = 'В этом курсе не разрешен дочерний сайт SharePoint.';
$string['errorcreatingsharepointclient'] = 'Не удалось получить клиента API SharePoint';
$string['errorcreatingteamfromgroup'] = 'Не удалось создать команду из группы. Убедитесь, что группа существует и у неё есть владелец.';
$string['errorhttpclientbadtempfileloc'] = 'Не удалось открыть временное местоположение для сохранения файла.';
$string['errornodirectaccess'] = 'Прямой доступ к странице запрещен';
$string['erroro365apibadcall'] = 'Ошибка в вызове API';
$string['erroro365apibadcall_message'] = 'Ошибка в вызове API: {$a}';
$string['erroro365apibadpermission'] = 'Разрешение не найдено';
$string['erroro365apicouldnotcreatesite'] = 'Проблема создания сайта.';
$string['erroro365apicoursenotfound'] = 'Курс не найден.';
$string['erroro365apiinvalidmethod'] = 'Неверный http-метод передан в вызов API';
$string['erroro365apiinvalidtoken'] = 'Неверный или просроченный ключ.';
$string['erroro365apinoparentinfo'] = 'Не удалось найти информацию о родительской папке';
$string['erroro365apinotimplemented'] = 'Это должно быть отменено.';
$string['erroro365apinotoken'] = 'Нет ключа для данного ресурса и пользователя и не удалось получить его. Срок действия ключа пользователя истек?';
$string['erroro365apisiteexistsnolocal'] = 'Сайт уже существует, но не возможно найти локальную запись.';
$string['errorprovisioningapp'] = 'Не удалось обеспечить приложение Moodle в Команде.';
$string['errorusermatched'] = 'Учетная запись Microsoft 365 «{$a->aadupn}» уже сопоставлена с пользователем Moodle «{$a->username}«. Чтобы завершить связывание, сначала войдите в систему как пользователь Moodle и следуйте инструкциям в блоке Microsoft.';
$string['eventapifail'] = 'Ошибка API';
$string['eventcalendarsubscribed'] = 'Пользователь подписался на календарь';
$string['eventcalendarunsubscribed'] = 'Пользователь отписался от календаря';
$string['grade_date'] = 'Оценка - {$a->grade} &nbsp; | &nbsp; Дата - {$a->date}';
$string['groups'] = 'Группы Microsoft 365';
$string['groups_calendar'] = 'Календарь';
$string['groups_columnname'] = 'Название';
$string['groups_conversations'] = 'Обсуждения';
$string['groups_edit_description'] = 'Описание группы';
$string['groups_edit_name'] = 'Название группы';
$string['groups_edit_nameexists'] = 'Группа {$a} уже существует, выберите другое название.';
$string['groups_edit_newpicture'] = 'Значок группы';
$string['groups_edit_newpicture_help'] = 'Изображение, загруженное для значка группы, будет использоваться для группы Moodle и группы Microsoft 365.';
$string['groups_editsettings'] = 'Изменить настройки группы';
$string['groups_manage'] = 'Управление группами';
$string['groups_manage_pending'] = 'Ваша группа Microsoft 365 будет создана в ближайшее время.';
$string['groups_more'] = 'Подробнее...';
$string['groups_notebook'] = 'Тетрадь класса';
$string['groups_notenabled'] = 'Группы Microsoft 365 не включены для этого курса.';
$string['groups_notenabledforcourse'] = 'Группы Microsoft 365 не включены для этого курса.';
$string['groups_onedrive'] = 'Файлы';
$string['groups_pending'] = 'Эта группа Microsoft 365 будет создана в ближайшее время, повторите попытку позже.';
$string['groups_studygroup'] = 'Учебная группа';
$string['groups_studygroups'] = 'Учебные группы';
$string['groups_team'] = 'Команды';
$string['groups_total'] = 'Всего групп: {$a}';
$string['healthcheck_fixlink'] = 'Нажмите здесь, чтобы исправить это';
$string['healthcheck_ratelimit_result_disabled'] = 'Функции ограничения скорости были отключены.';
$string['healthcheck_ratelimit_result_notice'] = 'Включено небольшое регулирование при увеличенной нагрузке сайта Moodle. <br /> <br /> Все функции Microsoft 365 работоспособны, но запросы распределяются медленнее, чтобы предотвратить прерывание работы служб Microsoft 365. Как только активность Moodle уменьшится, все вернется к стандартным значениям. <br />(Уровень {$a->level} / начало {$a->timestart})';
$string['healthcheck_ratelimit_result_passed'] = 'Вызовы API Microsoft 365 выполняются на полной скорости.';
$string['healthcheck_ratelimit_result_warning'] = 'Включено увеличенное регулирование для обработки значительной нагрузки сайта Moodle. <br /> <br /> Все функции Microsoft 365 по-прежнему работают, но запросы Microsoft 365 могут занять больше времени. Как только активность сайта Moodle снизится, все вернется к стандартным значениям.<br />(Уровень {$a->level} / начало {$a->timestart})';
$string['healthcheck_ratelimit_title'] = 'Регулирование API';
$string['healthcheck_systemapiuser_title'] = 'Пользователь системного API';
$string['healthcheck_systemtoken_result_badtoken'] = 'Не удалось связаться с Microsoft 365 в качестве пользователя системного API. Обычно это можно решить путем сброса пользователя системного API.';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'В плагине OpenID Connect отсутствуют учетные данные приложения. Без этих учетных данных Moodle не сможет установить связь с Microsoft 365. Нажмите здесь, чтобы перейти на страницу настроек и ввести свои учетные данные.';
$string['healthcheck_systemtoken_result_notoken'] = 'У Moodle нет ключа для связи с Microsoft 365 как пользователя системного API. Обычно это можно решить путем сброса пользователя системного API.';
$string['healthcheck_systemtoken_result_passed'] = 'Moodle может общаться с Microsoft 365 как пользователь системного API';
$string['help_message'] = 'Всем привет! Я ваш помощник в Moodle. Вы можете задать мне следующие вопросы:';
$string['help_user_appassign'] = 'Справка о назначении пользователей приложению';
$string['help_user_appassign_help'] = 'Это приведет к тому, что все учетные записи Azure AD с соответствующими учетными записями Moodle будут назначены приложению Azure, созданному для этой установки Moodle, если они еще не назначены.';
$string['help_user_create'] = 'Справка по созданию аккаунта';
$string['help_user_create_help'] = 'Это создаст пользователей в Moodle от каждого пользователя в Azure AD. Будут созданы учетные записи только тех пользователей, которые в настоящее время не имеют учетных записей в Moodle, . Новые учетные записи будут настроены для использования их учетных данных Microsoft 365 для входа в Moodle (с помощью плагина аутентификации OpenID Connect) и смогут использовать все функции интеграции Microsoft 365 с Moodle.';
$string['help_user_delete'] = 'Справка по удалению аккаунтов';
$string['help_user_delete_help'] = 'Это удалит пользователей из Moodle, если они помечены как удаленные в Azure Active Directory. Это будет работать, только если включена опция приостановки пользователя. Учетная запись Moodle будет удалена и вся связанная с ней информация пользователя будет удалена из Moodle. Будьте осторожны!';
$string['help_user_disabledsync'] = 'Справка по состоянию отключенной синхронизации';
$string['help_user_disabledsync_help'] = 'Это приостановит / возобновит работу пользователей в Moodle, если их связанные учетные записи в Azure Active Directory помечены как запрещенные / разрешенные для входа.';
$string['help_user_emailsync_help'] = 'Включение этой опции будет сопоставлять логины пользователей Azure с адресами электронной почты пользователей moodle вместо поведения по умолчанию, при котором логины пользователей Azure сопоставляются с логинами пользователей moodle.';
$string['help_user_guestsync'] = 'Справка по синхронизации гостя';
$string['help_user_guestsync_help'] = 'Если этот параметр включен, пользователи-гости в Azure AD будут синхронизироваться с Moodle в задаче синхронизации пользователей.';
$string['help_user_match'] = 'Справка по сопоставлению аккаунтов';
$string['help_user_match_help'] = 'В результате мы рассмотрим каждого пользователя в связанной Azure Active Directory и попытаемся сопоставить его с пользователем в Moodle. Это совпадение основано на именах пользователей в Azure AD и Moodle. Совпадения не учитывают регистр и игнорируют клиента Microsoft 365. Например, «BoB.SmiTh» в Moodle будет соответствовать «bob.smith@example.onmicrosoft.com». У соответствующих пользователей будут подключены учетные записи Moodle и Microsoft 365, и они смогут использовать все функции интеграции Microsoft 365 / Moodle. Метод аутентификации пользователя не изменится, если не активирован ниже расположенный параметр.';
$string['help_user_matchswitchauth'] = 'Справка по переключению совпадающих учетных записей';
$string['help_user_matchswitchauth_help'] = 'Для этого необходимо выше включить параметр «Соответствовать существующим пользователям Moodle». Включение этого параметра при сопоставлении пользователей переключит их метод аутентификации на OpenID Connect. Затем они смогут войти в Moodle со своими учетными данными Microsoft 365. Примечание: Убедитесь, что подключаемый модуль аутентификации OpenID Connect включен, если вы хотите использовать этот параметр.';
$string['help_user_nodelta'] = 'Справка по выполнению полной синхронизации';
$string['help_user_nodelta_help'] = 'По умолчанию синхронизация пользователей будет синхронизировать только изменения из Azure AD. Установка этой опции заставит пользователя синхронизироваться каждый раз.';
$string['help_user_photosync'] = 'Справка по синхронизации фотографии пользователя Microsoft 365 (Cron)';
$string['help_user_photosync_help'] = 'Это приведет к тому, что фотографии всех пользователей Moodle будут синхронизированы с их фотографиями в Microsoft 365.';
$string['help_user_photosynconlogin'] = 'Справка по синхронизации фотографии пользователя Microsoft 365 (Вход)';
$string['help_user_photosynconlogin_help'] = 'Это приведет к тому, что фотография пользователя в Moodle будет синхронизирована с его фотографией в Microsoft 365, когда этот пользователь войдет в систему. Обратите внимание, что для этого требуется, чтобы пользователь посетил страницу Moodle, содержащую блок Microsoft.';
$string['help_user_reenable'] = 'Справка по повторному включению учетных записей';
$string['help_user_reenable_help'] = 'Это повторно включит приостановленные учетные записи Moodle, если они будут возвращены из Azure Active Directory.';
$string['help_user_suspend_help'] = 'Это приведет к приостановке доступа пользователей к Moodle, если они отмечены как удаленные в Azure Active Directory.';
$string['help_user_tzsync_help'] = 'Это приведет к синхронизации часовых поясов всех пользователей Moodle с их предпочтениями часового пояса в Outlook.';
$string['help_user_tzsynconlogin_help'] = 'Это приведет к синхронизации часового пояса пользователя Moodle с его предпочтениями часового пояса в Outlook. Обратите внимание, что для этого требуется, чтобы пользователь посетил страницу, содержащую блок Microsoft в Moodle.';
$string['help_user_update'] = 'Справка по обновлению всех учетных записей';
$string['help_user_update_help'] = 'Это обновит всех пользователей Moodle от каждого пользователя в связанной Azure Active Directory.';
$string['last_login_date'] = 'Дата последнего входа - {$a}';
$string['list_of_absent_students'] = 'Список студентов, которые отсутствовали в этом месяце:';
$string['list_of_assignments_grades_compared'] = 'Список ваших оценок по сравнению со средними оценками класса:';
$string['list_of_assignments_needs_grading'] = 'Список заданий, которые необходимо оценить:';
$string['list_of_due_assignments'] = 'Список подлежащих выполнению заданий';
$string['list_of_incomplete_assignments'] = 'Список незавершенных заданий:';
$string['list_of_last_logged_students'] = 'Список последних вошедших студентов:';
$string['list_of_late_submissions'] = 'Список студентов, которые недавно ответили на задания:';
$string['list_of_latest_logged_students'] = 'Список последних вошедших студентов:';
$string['list_of_recent_grades'] = 'Список ваших последних оценок:';
$string['list_of_students_with_least_score'] = 'Список студентов с наименьшим количеством баллов в последнем задании:';
$string['list_of_students_with_name'] = 'Студенты с именем {$a}:';
$string['never'] = 'Никогда';
$string['no_absent_users_found'] = 'Отсутствующие пользователи не найдены';
$string['no_assignments_for_grading_found'] = 'Заданий для оценивания не найдено';
$string['no_assignments_found'] = 'Не найдено ни одного задания';
$string['no_graded_assignments_found'] = 'Оцененные задания не найден';
$string['no_grades_found'] = 'Оценки не найдены';
$string['no_late_submissions_found'] = 'Запоздалые ответы не найдены';
$string['no_user_with_name_found'] = 'Пользователь с таким именем не найден';
$string['no_users_found'] = 'Пользователи не найдены';
$string['o365:manageconnectionlink'] = 'Создавать связи';
$string['o365:manageconnectionunlink'] = 'Разрывать связи';
$string['o365:managegroups'] = 'Управление группами';
$string['o365:teammember'] = 'Участник команды';
$string['o365:teamowner'] = 'Владелец команды';
$string['o365:viewgroups'] = 'Просмотр групп';
$string['other_login'] = 'Вход вручную';
$string['participants_submitted_needs_grading'] = 'Участников - {$a->participants} &nbsp; | &nbsp; Ответов - {$a->submitted} &nbsp; | &nbsp; Нужно оценить - {$a->needsgrading}';
$string['pending_submissions_due_date'] = 'Ожидаемые ответы - {$a->incomplete} / {$a->total} &nbsp; |  &nbsp; Срок - {$a->duedate}';
$string['personal_calendar'] = 'Персональный';
$string['pluginname'] = 'Интеграция с Microsoft 365';
$string['privacy:metadata:local_o365'] = 'Плагин Локальный Microsoft 365';
$string['privacy:metadata:local_o365_appassign'] = 'Информация о назначениях ролей приложения Microsoft 365';
$string['privacy:metadata:local_o365_appassign:assigned'] = 'Был ли пользователь назначен приложению';
$string['privacy:metadata:local_o365_appassign:muserid'] = 'ID пользователя Moodle';
$string['privacy:metadata:local_o365_appassign:photoid'] = 'ID фотографии пользователя в Microsoft 365';
$string['privacy:metadata:local_o365_appassign:photoupdated'] = 'Когда фотография пользователя последний раз обновлялась из Microsoft 365';
$string['privacy:metadata:local_o365_calidmap'] = 'Информация о связях между событиями календаря Microsoft 365 и событиями календаря Moodle.';
$string['privacy:metadata:local_o365_calidmap:eventid'] = 'ID события в Moodle.';
$string['privacy:metadata:local_o365_calidmap:origin'] = 'Где произошло событие  - либо в Moodle, либо в Microsoft 365';
$string['privacy:metadata:local_o365_calidmap:outlookeventid'] = 'ID события в Outlook.';
$string['privacy:metadata:local_o365_calidmap:userid'] = 'ID пользователя, которому принадлежит событие.';
$string['privacy:metadata:local_o365_calsettings'] = 'Информация о настройках синхронизации календаря';
$string['privacy:metadata:local_o365_calsettings:o365calid'] = 'ID календаря в Microsoft 365';
$string['privacy:metadata:local_o365_calsettings:timecreated'] = 'Время создания записи';
$string['privacy:metadata:local_o365_calsettings:user_id'] = 'ID пользователя Moodle';
$string['privacy:metadata:local_o365_calsub'] = 'Информация о синхронизации подписок между календарями Moodle и Outlook';
$string['privacy:metadata:local_o365_calsub:caltype'] = 'Тип календаря Moodle (сайт, курс, пользователь)';
$string['privacy:metadata:local_o365_calsub:caltypeid'] = 'ID связанного календаря Moodle';
$string['privacy:metadata:local_o365_calsub:isprimary'] = 'Основной ли это календарь';
$string['privacy:metadata:local_o365_calsub:o365calid'] = 'ID календаря Microsoft 365';
$string['privacy:metadata:local_o365_calsub:syncbehav'] = 'Поведение синхронизации (например, Moodle для Outlook или Outlook для Moodle)';
$string['privacy:metadata:local_o365_calsub:timecreated'] = 'Время создания подписк';
$string['privacy:metadata:local_o365_calsub:user_id'] = 'ID пользователя Moodle, который подписан';
$string['privacy:metadata:local_o365_connections'] = 'Информация о связях между пользователями Moodle и Microsoft 365, которые еще не подтверждены';
$string['privacy:metadata:local_o365_connections:aadupn'] = 'UPN пользователя Microsoft 365';
$string['privacy:metadata:local_o365_connections:muserid'] = 'ID пользователя Moodle';
$string['privacy:metadata:local_o365_connections:uselogin'] = 'Нужно ли переключать метод аутентификации пользователя после завершения.';
$string['privacy:metadata:local_o365_matchqueue'] = 'Информация о пользователе Moodle для сопоставления пользователю Microsoft 365';
$string['privacy:metadata:local_o365_matchqueue:completed'] = 'Была ли запись обработана';
$string['privacy:metadata:local_o365_matchqueue:errormessage'] = 'Сообщение об ошибке (если есть)';
$string['privacy:metadata:local_o365_matchqueue:musername'] = 'Логин пользователя Moodle.';
$string['privacy:metadata:local_o365_matchqueue:o365username'] = 'Логин пользователя Microsoft 365.';
$string['privacy:metadata:local_o365_matchqueue:openidconnect'] = 'Нужно ли переключать пользователя на аутентификацию OpenID Connect, когда соответствие выполнено';
$string['privacy:metadata:local_o365_objects'] = 'MicrosoftИнформация о связях между объектами Moodle и Office 365';
$string['privacy:metadata:local_o365_objects:metadata'] = 'Любые связанные метаданные';
$string['privacy:metadata:local_o365_objects:moodleid'] = 'ID объекта в Moodle';
$string['privacy:metadata:local_o365_objects:o365name'] = 'Удобочитаемое имя объекта в Microsoft 365';
$string['privacy:metadata:local_o365_objects:objectid'] = 'ID объекта Microsoft 365';
$string['privacy:metadata:local_o365_objects:subtype'] = 'Подтип объекта.';
$string['privacy:metadata:local_o365_objects:tenant'] = 'Клиент, которому принадлежит объект (в многопользовательской среде)';
$string['privacy:metadata:local_o365_objects:timecreated'] = 'Время создания записи.';
$string['privacy:metadata:local_o365_objects:timemodified'] = 'Время изменения записи.';
$string['privacy:metadata:local_o365_objects:type'] = 'Тип объекта (группа, пользователь, курс и т.д.)';
$string['privacy:metadata:local_o365_spgroupassign'] = 'Информация о заданиях группы';
$string['privacy:metadata:local_o365_spgroupassign:groupid'] = 'ID группы в Microsoft 365';
$string['privacy:metadata:local_o365_spgroupassign:timecreated'] = 'Время создания записи.';
$string['privacy:metadata:local_o365_spgroupassign:userid'] = 'ID пользователя Moodle';
$string['privacy:metadata:local_o365_token'] = 'Информация о ключах API Microsoft 365 для пользователей';
$string['privacy:metadata:local_o365_token:expiry'] = 'Время истечения ключа';
$string['privacy:metadata:local_o365_token:token'] = 'Токен';
$string['privacy:metadata:local_o365_token:tokenresource'] = 'Ресурс токена.';
$string['privacy:metadata:local_o365_token:user_id'] = 'ID пользователя Moodle';
$string['question_student_assignments_compared'] = 'Как выполнены мною последние задания по сравнению с классом?';
$string['question_student_assignments_due'] = 'Какие задания должны быть дальше?';
$string['question_student_latest_grades'] = 'Какие последние оценки мною получены?';
$string['question_teacher_absent_students'] = 'Какие студенты отсутствовали в этом месяце?';
$string['question_teacher_assignments_for_grading'] = 'Какие задания еще предстоит оценить?';
$string['question_teacher_assignments_incomplete_submissions'] = 'На сколько заданий имеются не все ответы?';
$string['question_teacher_last_logged_students'] = 'Какие студенты вошли в Moodle (сначала последние)?';
$string['question_teacher_late_submissions'] = 'Какие студенты недавно сделали ответы?';
$string['question_teacher_latest_logged_students'] = 'Какие студенты вошли в Moodle (сначала первые)?';
$string['question_teacher_least_scored_in_assignment'] = 'Какие студенты набрали меньше всего баллов за последнее задание?';
$string['question_teacher_student_last_logged'] = 'Когда Имя_Фамилия последний раз входил в Moodle?';
$string['settings_aadsync'] = 'Синхронизация пользователей с Azure AD';
$string['settings_aadsync_appassign'] = 'Назначить пользователей приложению  Azure во время синхронизации';
$string['settings_aadsync_create'] = 'Создать учетные записи в Moodle для пользователей Azure AD';
$string['settings_aadsync_delete'] = 'Удалять ранее синхронизированные учетные записи в Moodle при их удалении из Azure AD (выше требуется опция «приостановить»)';
$string['settings_aadsync_details'] = 'При включенном параметре пользователи Moodle и Azure AD синхронизируются в соответствии с указанными выше настройками. <br /> <br /> <b> Примечание: </b>Задание синхронизации выполняется в Cron Moodle и синхронизирует 1000 пользователей одновременно. По умолчанию это выполняется один раз в сутки в 01:00. Чтобы ускорить синхронизацию больших групп пользователей, вы можете увеличить частоту выполнения задачи <b> синхронизации пользователей с Azure AD</b>, используя <a href="{$a}">страницу управления запланированными задачами.</a><br /><br />';
$string['settings_aadsync_disabledsync'] = 'Синхронизировать разрешение/запрещение входа';
$string['settings_aadsync_emailsync'] = 'При синхронизации сопоставить логины Azure с адресами электронной почты moodle вместо логинов moodle';
$string['settings_aadsync_guestsync'] = 'Синхронизация пользователей-гостей';
$string['settings_aadsync_match'] = 'Сопоставить ранее существовавших пользователей Moodle с одноименными учетными записями в Azure AD';
$string['settings_aadsync_matchswitchauth'] = 'Переключить совпадающих пользователей на проверку аутентификации через Microsoft 365 (OpenID Connect)';
$string['settings_aadsync_nodelta'] = 'Выполнять полную синхронизацию при каждом запуске';
$string['settings_aadsync_photosync'] = 'Синхронизировать фотографии пользователя Microsoft 365 с Moodle при выполнении cron.';
$string['settings_aadsync_photosynconlogin'] = 'Синхронизировать  фотографии пользователя Microsoft 365 с Moodle при входе.';
$string['settings_aadsync_reenable'] = 'Повторно включить приостановленные учетные записи для пользователей в Azure AD';
$string['settings_aadsync_suspend'] = 'Приостановить в Moodle ранее синхронизированные учетные записи при их удалении из Azure AD';
$string['settings_aadsync_update'] = 'Обновить все учетные записи в Moodle для пользователей Azure AD';
$string['settings_aadtenant'] = 'Клиент Azure AD';
$string['settings_aadtenant_details'] = 'Используется для идентификации вашей организации в Azure AD. Например: «contoso.onmicrosoft.com».';
$string['settings_aadtenant_error'] = 'Нам не удалось обнаружить вашего клиента Azure AD. <br /> Убедитесь, что «Windows Azure Active Directory» был добавлен в зарегистрированное приложение Azure AD и включено разрешение «Чтение данных каталога».';
$string['settings_addsync_tzsync'] = 'Синхронизировать часовой пояс Outlook и Moodle при выполнении cron.';
$string['settings_addsync_tzsynconlogin'] = 'Синхронизировать часовой пояс Outlook и Moodle при входе.';
$string['settings_adminconsent'] = 'Согласие администратора';
$string['settings_adminconsent_btn'] = 'Предоставить согласие администратора';
$string['settings_adminconsent_details'] = 'Чтобы разрешить доступ к некоторым необходимым разрешениям, необходимо предоставить согласие администратора. Нажмите эту кнопку, затем войдите в систему с учетной записью администратора Azure, чтобы дать согласие. Это необходимо делать всякий раз, когда вы меняете разрешения «Администратор» в Azure.';
$string['settings_azuresetup'] = 'Настройка Azure AD';
$string['settings_azuresetup_appdatadesc'] = 'Проверяет, что в Azure AD установлены правильные параметры.';
$string['settings_azuresetup_appdataheader'] = 'Регистрация приложения Azure AD';
$string['settings_azuresetup_appdatareplyurlcorrect'] = 'URL для ответа корректный';
$string['settings_azuresetup_appdatareplyurlgeneralerror'] = 'Не удалось проверить URL-адрес.';
$string['settings_azuresetup_appdatareplyurlincorrect'] = 'URL для ответа не корректный';
$string['settings_azuresetup_appdatasignonurlcorrect'] = 'URL для входа корректный';
$string['settings_azuresetup_appdatasignonurlgeneralerror'] = 'Не удалось проверить URL для входа.';
$string['settings_azuresetup_appdatasignonurlincorrect'] = 'URL для входа не корректный';
$string['settings_azuresetup_apppermscorrect'] = 'Разрешения приложений правильные';
$string['settings_azuresetup_checking'] = 'Проверка ...';
$string['settings_azuresetup_correctval'] = 'Правильное значение:';
$string['settings_azuresetup_details'] = 'Этот инструмент с помощью Azure AD проверяет правильность настроек. <br /> <b> Примечание: </b> Изменения в Azure AD могут появиться здесь не сразу. Если вы внесли изменение в Azure AD и не видите его здесь, подождите немного и попробуйте снова.';
$string['settings_azuresetup_detectedval'] = 'Определенное значение:';
$string['settings_azuresetup_errorcheck'] = 'Произошла ошибка при настройке Azure AD.';
$string['settings_azuresetup_legacydesc'] = 'API Microsoft 365 состоит из прикладных API-интерфейсов';
$string['settings_azuresetup_legacyerror'] = 'Произошла ошибка при проверке настроек API Microsoft 365.';
$string['settings_azuresetup_legacyheader'] = 'API Microsoft 365';
$string['settings_azuresetup_missingappperms'] = 'Отсутствующие разрешения для приложений:';
$string['settings_azuresetup_missingperms'] = 'Отсутствующие разрешения:';
$string['settings_azuresetup_noinfo'] = 'Пока нет информации о настройке Azure AD. Для проверки нажмите кнопку «Обновить».';
$string['settings_azuresetup_permscorrect'] = 'Разрешения корректны.';
$string['settings_azuresetup_strtenanterror'] = 'Используйте кнопку «Определить», чтобы задать клиента Azure AD перед обновлением настроек Azure AD.';
$string['settings_azuresetup_strunifiedpermerror'] = 'Произошла ошибка при проверке разрешений Microsoft Graph API.';
$string['settings_azuresetup_unifiedactive'] = 'Microsoft Graph API активен.';
$string['settings_azuresetup_unifieddesc'] = 'Microsoft Graph API обеспечивает связь между Moodle и Microsoft 365.';
$string['settings_azuresetup_unifiederror'] = 'При проверке поддержки Microsoft Graph API произошла ошибка.';
$string['settings_azuresetup_unifiedheader'] = 'Microsoft Graph API';
$string['settings_azuresetup_unifiedmissing'] = 'Microsoft Graph API не найден в этом приложении.';
$string['settings_azuresetup_update'] = 'Обновить';
$string['settings_bot_app_id'] = 'Идентификатор бота';
$string['settings_bot_app_password'] = 'Пароль бота';
$string['settings_bot_app_password_desc'] = 'Нажмите «Создать новый пароль» на странице приложения и вставьте одноразовый пароль.';
$string['settings_bot_feature_enabled'] = 'Функция бота включена';
$string['settings_bot_sharedsecret'] = 'Общий ключ Moodle';
$string['settings_bot_sharedsecret_desc'] = 'Вставьте этот пароль в поле «Общий ключ Moodle» в шаблоне Azure Bot.';
$string['settings_bot_webhook_endpoint'] = 'Конечная точка бота';
$string['settings_bot_webhook_endpoint_desc'] = 'Формат: https://<moodlebotname\\>.azurewebsites.net/api/webhook';
$string['settings_check_moodle_settings'] = 'Проверить настройки Moodle';
$string['settings_clientid'] = 'Идентификатор приложения';
$string['settings_clientsecret'] = 'Ключ приложения';
$string['settings_course_reset_teams_details'] = 'Действия, которые должны быть выполнены в связанной с курсом Команде или Группе при очистке курса.';
$string['settings_course_reset_teams_option_do_nothing'] = 'Ничего не делать. <br/> Команда или группа все еще связаны с курсом. Отчисление пользователя приведет к его удалению из Команды или Группы.';
$string['settings_course_reset_teams_option_force_archive'] = 'Отключить Команду или Группу от курса и создать новую. <br/> Существующая Команда или Группа, связанная с курсом, будет переименована в соответствии с настройками. Если команда связана с курсом, то она будет заархивирована. Будет создана новая команда или группа, которая подключится к курсу.';
$string['settings_course_reset_teams_option_per_course'] = 'Разрешить настройки для курса. <br/> Для этого необходимо добавить в курс блок Microsoft. Пользователи с правом очистки курса в блоке могут выбрать, что делать при очистке курса.';
$string['settings_customtheme'] = 'Пользовательская тема (Продвинутая)';
$string['settings_customtheme_desc'] = 'Рекомендуемая тема - «boost_o365teams». Однако вы можете выбрать другую имеющуюся настраиваемую тему, адаптированную для использования на вкладке «Команды». <br/>
Обратите внимание, что настраиваемая тема, установленная на уровне курса или категории, будет иметь приоритет над этими настройками. То есть курс будет  по умолчанию использовать тему курса или категории в приложении Moodle в Teams. Это можно изменить, обновив $CFG->themeorder в config.php на «array (\'session\', \'course\', \'category\', \'user\', \'cohort\', \'site\');».';
$string['settings_debugmode'] = 'Запись сообщений об отладке';
$string['settings_debugmode_details'] = 'Если этот параметр включен, в журнал Moodle будет заноситься информация, которая может помочь в выявлении проблем. <a href="{$a}">Просмотр сообщений журнала.</a>';
$string['settings_detectoidc'] = 'Учетные данные приложения';
$string['settings_detectoidc_credsinvalid'] = 'Учетные данные не были установлены или являются неполными.';
$string['settings_detectoidc_credsvalid'] = 'Учетные данные были установлены.';
$string['settings_detectoidc_details'] = 'Moodle нужны учетные данные, чтобы идентифицировать себя при взаимодействии с Microsoft 365. Они устанавливаются в плагине аутентификации OpenID Connect.';
$string['settings_detectperms'] = 'Разрешения приложений';
$string['settings_detectperms_details'] = 'При использовании функций плагина в Azure AD для приложения должны быть установлены правильные разрешения.';
$string['settings_detectperms_errorfix'] = 'Произошла ошибка при попытке исправить разрешения. Пожалуйста, установите вручную в Azure AD.';
$string['settings_detectperms_fixperms'] = 'Исправить разрешения';
$string['settings_detectperms_fixprereq'] = 'Чтобы исправить это автоматически, пользователь системного API должен быть администратором, а разрешение «Доступ к каталогу вашей организации» должно быть включено в Azure AD для приложения «Windows Azure Active Directory».';
$string['settings_detectperms_invalid'] = 'Проверить разрешения в Azure AD';
$string['settings_detectperms_missing'] = 'Отсутствуют:';
$string['settings_detectperms_nocreds'] = 'Учетные данные приложения должны быть установлены в первую очередь. См. настройки  выше.';
$string['settings_detectperms_nounified'] = 'Microsoft Graph API отсутствует, некоторые новые функции могут не работать.';
$string['settings_detectperms_unifiednomissing'] = 'Все унифицированные разрешения присутствуют.';
$string['settings_detectperms_update'] = 'Обновить';
$string['settings_detectperms_valid'] = 'Разрешения были установлены.';
$string['settings_disablegraphapi'] = 'Отключить Microsoft Graph API';
$string['settings_disablegraphapi_details'] = 'Отключите использование Microsoft Graph API и принудительно используйте устаревший API. Это должно быть включено, только если у вас есть проблемы с Graph API.';
$string['settings_download_teams_tab_app_manifest'] = 'Загрузить файл манифеста';
$string['settings_download_teams_tab_app_manifest_reminder'] = 'Сохраните все ваши изменения перед загрузкой манифеста.';
$string['settings_enableapponlyaccess'] = 'Доступ приложения';
$string['settings_enableapponlyaccess_details'] = '<b>Рекомендуется</b>. Используя этот метод, интеграция получает доступ к Microsoft 365 напрямую, используя «Разрешения приложений» Azure. Это самый простой и рекомендуемый способ подключения к Microsoft 365, но он требует включения нескольких дополнительных разрешений в Azure.
<br /><br /><b>- ИЛИ -</b><br />';
$string['settings_fieldmap'] = 'Сопоставление полей пользователя';
$string['settings_fieldmap_addmapping'] = 'Добавить сопоставление';
$string['settings_fieldmap_details'] = 'Настройте сопоставление между полями пользователей в Microsoft 365 и Moodle.';
$string['settings_fieldmap_field_businessPhones'] = 'Служебный телефон';
$string['settings_fieldmap_field_city'] = 'Город';
$string['settings_fieldmap_field_companyName'] = 'Название компании';
$string['settings_fieldmap_field_country'] = 'Страна';
$string['settings_fieldmap_field_department'] = 'Отдел';
$string['settings_fieldmap_field_displayName'] = 'Отображаемое имя';
$string['settings_fieldmap_field_employeeId'] = 'ID сотрудника';
$string['settings_fieldmap_field_extensionattribute'] = 'Атрибут расширения {$a}';
$string['settings_fieldmap_field_faxNumber'] = 'Номер факса';
$string['settings_fieldmap_field_givenName'] = 'Собственное имя';
$string['settings_fieldmap_field_groups'] = 'Группы';
$string['settings_fieldmap_field_jobTitle'] = 'Должность';
$string['settings_fieldmap_field_mail'] = 'Эл. почта';
$string['settings_fieldmap_field_manager'] = 'Упраляющий';
$string['settings_fieldmap_field_mobile'] = 'Мобильный телефон';
$string['settings_fieldmap_field_mobilePhone'] = 'Мобильный телефон';
$string['settings_fieldmap_field_objectId'] = 'ID объекта';
$string['settings_fieldmap_field_officeLocation'] = 'Офис';
$string['settings_fieldmap_field_postalCode'] = 'Почтовый индекс';
$string['settings_fieldmap_field_preferredLanguage'] = 'Язык';
$string['settings_fieldmap_field_preferredName'] = 'Предпочитаемое имя';
$string['settings_fieldmap_field_roles'] = 'Роли';
$string['settings_fieldmap_field_state'] = 'Область';
$string['settings_fieldmap_field_streetAddress'] = 'Улица';
$string['settings_fieldmap_field_surname'] = 'Фамилия';
$string['settings_fieldmap_field_teams'] = 'Команды';
$string['settings_fieldmap_field_telephoneNumber'] = 'Номер телефона';
$string['settings_fieldmap_field_userPrincipalName'] = 'Логин (UPN)';
$string['settings_fieldmap_header_behavior'] = 'Обновления';
$string['settings_fieldmap_header_local'] = 'Поле Moodle';
$string['settings_fieldmap_header_remote'] = 'Поле Active Directory';
$string['settings_fieldmap_update_always'] = 'При входе и создании';
$string['settings_group_creation_fallback'] = 'Резервный вариант создания группы';
$string['settings_group_creation_fallback_details'] = 'Если этот параметр включен и в курсе с включенной опцией  «Синхронизация команд» нет зарегистрированного пользователя, которого можно рассматривать как владельца группы, то сначала будет создана группа. Команда будет создана из группы позже, после того, как подходящий владелец команды будет зачислен на курс Moodle. Обратите внимание, что команда, созданная таким образом, будет стандартной командой, а не командой класса.

Если этот параметр отключен, то Moodle всегда будет пытаться создать команду класса из синхронизированного курса. Создание команды будет пропущено до тех пор, пока на курс не будет зачислен подходящий владелец команды.

Подходящий владелец команды - это пользователь, имеющий в курсе право «Владелец команды» (local/o365:teamowner) .';
$string['settings_group_display_name_course'] = 'Атрибут курса в отображаемом имени группы';
$string['settings_group_display_name_prefix'] = 'Префикс отображаемого имени группы';
$string['settings_group_display_name_suffix'] = 'Суффикс отображаемого имени группы';
$string['settings_group_mail_alias_course'] = 'Атрибут курса в почтовом псевдониме группы';
$string['settings_group_mail_alias_suffix'] = 'Суффикс почтового псевдонима группы';
$string['settings_group_name_sync'] = 'Обновить название группы при обновлении курса';
$string['settings_group_name_sync_desc'] = 'Если этот параметр включен, то при обновлении курса Moodle название группы будет обновлено в соответствии с последними настройками названия группы. Заметьте, псевдоним электронной почты группы не будет обновлен.';
$string['settings_group_names_sample'] = 'Предположим, что у курса есть:
<ul>
<li>Полное название: <b>Sample course 15</b>
<li>Краткое название: <b>sample 15</b></li>
<li>Созданный Moodle ID: <b>2</b></li>
<li>Номер ID: <b>Sample ID 15</b></li>
</ul>
В ваших текущих настройках для создания группы будет использоваться отображаемое имя "<b>{$a->displayname}</b>" и почтовый псевдоним "<b>{$a->mailalias}</b>".  Нажмите ниже кнопку «Сохранить изменения», чтобы увидеть, как ваши настройки изменят это.';
$string['settings_group_short_name_prefix'] = 'Префикс почтового псевдонима группы';
$string['settings_header_advanced'] = 'Расширенные настройки';
$string['settings_header_moodle_app'] = 'Приложение Teams Moodle';
$string['settings_header_sds'] = 'Синхронизации сведений о школе (предварительный просмотр)';
$string['settings_header_setup'] = 'Установка';
$string['settings_header_syncsettings'] = 'Настройки синхронизации';
$string['settings_header_teams'] = 'Настройки Teams';
$string['settings_header_tools'] = 'Инструменты';
$string['settings_healthcheck'] = 'Проверка работоспособности';
$string['settings_healthcheck_details'] = 'Если что-то не работает должным образом, проверка работоспособности обычно позволяет определить проблему и предложить решения.';
$string['settings_healthcheck_linktext'] = 'Выполнить проверку работоспособности';
$string['settings_main_name_option_full_name'] = 'Полное название';
$string['settings_main_name_option_id'] = 'Созданный Moodle ID';
$string['settings_main_name_option_id_number'] = 'Номер ID';
$string['settings_main_name_option_short_name'] = 'Краткое название';
$string['settings_maintenance'] = 'Обслуживание';
$string['settings_maintenance_details'] = 'Различные задачи обслуживания доступны для решения некоторых распространенных проблем.';
$string['settings_maintenance_linktext'] = 'Просмотр инструментов обслуживания';
$string['settings_migration'] = '<b> Примечание: Эта версия удаляет устаревший API Microsoft 365. Если вы еще не можете перейти на Graph API, то можете добавить "$CFG->local_o365_forcelegacyapi = true;" в config.php Moodle. Однако эта опция будет удалена в следующей версии. Дополнительную информацию см. в <a href="https://docs.moodle.org/34/en/Office365"> документации по интеграции </a></b>.';
$string['settings_moodle_app_id'] = 'ID приложения Moodle';
$string['settings_moodle_app_id_desc'] = 'Идентификатор загруженного приложения Moodle в каталогах приложений Teams. <br/>
Если настроено, Moodle попытается создать вкладку Moodle со ссылкой на курс Moodle в канале «Общие» созданной (связанной) команды.';
$string['settings_moodle_app_id_desc_auto_id'] = '<br/>
Автоматически определяемое значение: «<span class="local_o365_settings_moodle_app_id">{$a}</span>».';
$string['settings_moodlesettingssetup'] = 'Настройка Moodle';
$string['settings_moodlesettingssetup_details'] = 'Это обеспечит следующее:
<ul class = "local_o365_settings_teams_horizontal_spacer">
<li> Open ID включен. </li>
<li> Встраивание фрейма включено. </li>
<li> Веб-службы включены. </li>
<li> Rest-протокол включен. </li>
<li> Веб-службы Microsoft 365 включены. </li>
<li> У аутентифицированного пользователя есть разрешение на создание токена веб-службы. </li>
<li> У аутентифицированного пользователя есть разрешение на использование Rest-протокола. </li>
</ul>';
$string['settings_moodlesetup_checking'] = 'Проверяется ...';
$string['settings_notice_createtokenallowed'] = 'Разрешение на создание токена веб-службы предоставлено';
$string['settings_notice_createtokenalreadyallowed'] = 'Разрешение на создание токена веб-службы уже предоставлено';
$string['settings_notice_createtokennotallowed'] = 'Возникла проблема с предоставлением разрешения на создание токена веб-службы.';
$string['settings_notice_o365servicealreadyenabled'] = 'Веб-службы O365 уже были включены';
$string['settings_notice_o365serviceenabled'] = 'Веб-службы O365 успешно включены';
$string['settings_notice_oidcalreadyenabled'] = 'Open ID Connect уже был включен';
$string['settings_notice_oidcenabled'] = 'Open ID Connect успешно включен';
$string['settings_notice_oidcnotenabled'] = 'Open ID Connect не может быть включен';
$string['settings_notice_restalreadyenabled'] = 'Протокол REST уже был включен';
$string['settings_notice_restenabled'] = 'Протокол REST успешно включен';
$string['settings_notice_restnotenabled'] = 'Протокол REST не может быть включен';
$string['settings_notice_restusageallowed'] = 'Разрешение на использование протокола REST предоставлено';
$string['settings_notice_restusagealreadyallowed'] = 'Разрешение на использование протокола REST уже было предоставлено';
$string['settings_notice_restusagenotallowed'] = 'Не удалось разрешить использование протокола REST.';
$string['settings_notice_webservicesframealreadyenabled'] = 'Веб-службы уже были включены, также разрешено и встраивание фреймов.';
$string['settings_notice_webservicesframeenabled'] = 'Веб-сервисы успешно включены, теперь также разрешено встраивание фреймов';
$string['settings_o365china'] = 'Microsoft 365 для Китая.';
$string['settings_o365china_details'] = 'Отметьте, если вы используете Microsoft 365 для Китая.';
$string['settings_odburl'] = 'URL OneDrive для бизнеса';
$string['settings_odburl_details'] = 'URL-адрес, используемый для доступа к OneDrive для бизнеса. Обычно это может быть определено вашим клиентом Azure AD. Например, если ваш клиент Azure AD - «contoso.onmicrosoft.com», это, скорее всего, «contoso-my.sharepoint.com». Введите только доменное имя, НЕ включайте http:// или https://';
$string['settings_odburl_error'] = 'Не удалось определить URL-адрес OneDrive для бизнеса. <br /> Убедитесь, что «Microsoft 365 SharePoint Online» добавлено в зарегистрированное приложение в Azure AD.';
$string['settings_odburl_error_graph'] = 'Не удалось определить URL-адрес OneDrive для бизнеса, введите его вручную. Обычно он совпадает с URL-адресом, который вы используете для доступа к OneDrive.';
$string['settings_options_usersync'] = 'Синхронизация пользователя';
$string['settings_options_usersync_desc'] = 'Следующие параметры управляют синхронизацией пользователей между Microsoft 365 и Moodle.';
$string['settings_photoexpire'] = 'Время обновления фото пользователя';
$string['settings_photoexpire_details'] = 'Количество часов ожидания перед обновлением фотографий профиля. Более продолжительное время поможет увеличить производительность.';
$string['settings_previewfeatures'] = 'Включить функции предварительного просмотра';
$string['settings_previewfeatures_details'] = 'Включить функции, предоставляемые в режиме «предварительного просмотра». Эти функции используют новые API или являются экспериментальными. Эти функции могут быть нестабильными, но они могут дать максимальную оценку того, что произойдет в ближайшем будущем.';
$string['settings_publish_manifest_instruction'] = '<a href="https://docs.microsoft.com/en-us/microsoftteams/platform/concepts/apps/apps-upload" target="_blank">Щелкните здесь, </a>чтобы узнать, как опубликовать загруженный файл манифеста приложения Moodle для всех пользователей в Teams.';
$string['settings_reset_group_name_prefix'] = 'Префикс сброса имени группы';
$string['settings_reset_group_name_prefix_details'] = 'При очистке курса, связанного с группой, к имени существующей группы будет добавлен этот префикс.';
$string['settings_reset_team_name_prefix'] = 'Префикс сброса имени команды';
$string['settings_reset_team_name_prefix_details'] = 'При очистке курса, связанного с командой, к имени существующей связанной команды будет добавлен этот префикс.';
$string['settings_sds_coursecreation'] = 'Создание курса';
$string['settings_sds_coursecreation_desc'] = 'Эти параметры управляют созданием курса в Moodle на основе информации в SDS.';
$string['settings_sds_coursecreation_enabled'] = 'Создать курсы';
$string['settings_sds_coursecreation_enabled_desc'] = 'Создать курсы для этих школ.';
$string['settings_sds_enrolment_enabled'] = 'Записать пользователей.';
$string['settings_sds_enrolment_enabled_desc'] = 'Записывать студентов и преподавателей на курсы, созданные из SDS.';
$string['settings_sds_fieldmap'] = 'Сопоставление полей';
$string['settings_sds_fieldmap_details'] = 'Это управляет, как сопоставляются поля между SDS и Moodle.';
$string['settings_sds_fieldmap_f_givenName'] = 'Имя';
$string['settings_sds_fieldmap_f_mailNickname'] = 'Уникальный псевдоним студента';
$string['settings_sds_fieldmap_f_pre_AnchorId'] = 'Внутренний уникальный идентификатор студента.';
$string['settings_sds_fieldmap_f_pre_DateOfBirth'] = 'Дата рождения';
$string['settings_sds_fieldmap_f_pre_Email'] = 'Личный адрес электронной почты';
$string['settings_sds_fieldmap_f_pre_EnglishLanguageLearnersStatus'] = 'Состояние изучения английского языка';
$string['settings_sds_fieldmap_f_pre_Gender'] = 'Пол';
$string['settings_sds_fieldmap_f_pre_Grade'] = 'Уровень образования';
$string['settings_sds_fieldmap_f_pre_GraduationYear'] = 'Год выпуска';
$string['settings_sds_fieldmap_f_pre_MailingAddress'] = 'Почтовый адрес';
$string['settings_sds_fieldmap_f_pre_MailingCity'] = 'Почтовый адрес города';
$string['settings_sds_fieldmap_f_pre_MailingCountry'] = 'Почтовый адрес страны';
$string['settings_sds_fieldmap_f_pre_MailingLatitude'] = 'Широта почтового адреса';
$string['settings_sds_fieldmap_f_pre_MailingLongitude'] = 'Долгота почтового адреса';
$string['settings_sds_fieldmap_f_pre_MailingState'] = 'Страна почтового адреса';
$string['settings_sds_fieldmap_f_pre_MailingZip'] = 'Индекс почтового адреса';
$string['settings_sds_fieldmap_f_pre_MiddleName'] = 'Отчество';
$string['settings_sds_fieldmap_f_pre_ObjectType'] = 'Тип объекта («Студент»)';
$string['settings_sds_fieldmap_f_pre_ResidenceAddress'] = 'Адрес проживания';
$string['settings_sds_fieldmap_f_pre_ResidenceCity'] = 'Город проживания';
$string['settings_sds_fieldmap_f_pre_ResidenceCountry'] = 'Страна проживания';
$string['settings_sds_fieldmap_f_pre_ResidenceLatitude'] = 'Широта адреса проживания';
$string['settings_sds_fieldmap_f_pre_ResidenceLongitude'] = 'Долгота адреса проживания';
$string['settings_sds_fieldmap_f_pre_ResidenceState'] = 'Штат проживания';
$string['settings_sds_fieldmap_f_pre_ResidenceZip'] = 'Почтовый индекс';
$string['settings_sds_fieldmap_f_pre_StudentNumber'] = 'Номер присвоенный округу/школе';
$string['settings_sds_fieldmap_f_pre_StudentStatus'] = 'Студенческий статус';
$string['settings_sds_fieldmap_f_pre_SyncSource_SchoolId'] = 'ID школы';
$string['settings_sds_fieldmap_f_surname'] = 'Фамилия';
$string['settings_sds_fieldmap_f_userPrincipalName'] = 'Официальный адрес электронной почты';
$string['settings_sds_fieldmap_remotecolumn'] = 'Поле SDS';
$string['settings_sds_intro_desc'] = 'Инструмент синхронизации сведений о школе («SDS») позволяет синхронизировать информацию, импортированную в Azure AD из внешних систем в Moodle.<a href="https://sis.microsoft.com/" target="_blank">Подробнее ... </a><br /><br />Процесс синхронизации школьных данных происходит в Cron Moodle в 3 часа ночи по местному серверному времени. Чтобы изменить это расписание, перейдите на <a href="{$a}"> страницу управления запланированными задачами..</a><br /><br />';
$string['settings_sds_intro_previewwarning'] = '<div class="alert"><b>Это функция предварительного просмотра </b> <br /> Функции предварительного просмотра могут работать не так, как задумано, или могут работать без предупреждения. Пожалуйста, используйте с осторожностью.</div>';
$string['settings_sds_noschools'] = '<div class="alert alert-info">У вас нет доступных школ в синхронизации сведений о школе.</div>';
$string['settings_sds_profilesync'] = 'Синхронизация данных профиля';
$string['settings_sds_profilesync_desc'] = 'Эти параметры управляют синхронизацией данных профиля между данными SDS и Moodle.';
$string['settings_sds_profilesync_enabled'] = 'Включить';
$string['settings_sds_profilesync_enabled_desc'] = 'Включить синхронизацию данных профиля при синхронизации с SDS';
$string['settings_secthead_advanced'] = 'Расширенные настройки';
$string['settings_secthead_advanced_desc'] = 'Эти настройки управляют другими функциями пакета плагинов. Будьте осторожны! Это может привести к непредвиденным последствиям.';
$string['settings_secthead_coursesync'] = 'Синхронизация курса';
$string['settings_secthead_coursesync_desc'] = 'Нижеследующие настройки управляют синхронизацией курса между Moodle и командой/группой Microsoft 365.';
$string['settings_secthead_group_name'] = 'Название группы';
$string['settings_secthead_group_name_desc'] = 'Если курс настроен на создание группы Outlook вместо Microsoft Teams, отображаемое имя и краткое имя группы будут построены следующим образом. <br/>
<ul>
<li> Можно определить отображаемое имя (displayName) и почтовый псевдоним (mailNickname) группы, и они могут быть разными. </li>
<li> К настройкам почтового псевдонима  применяется политика именования групп, Попытка создать группу с почтовым псевдонимом, не соответствующим политике именования групп, определенной в вашей организации, потерпит неудачу. </li>
<li> Почтовый псевдоним группы должен быть уникальным, иначе создание группы не удастся. </li>
<li> Внесенные здесь изменения повлияют только на создание будущих групп, но не на существующие. </li>
<li> Все пробелы будут удалены из почтового псевдонима группы. </li>
<li> В псевдониме групповой почты можно использовать только прописные и строчные буквы, цифры, дефис и _. </li>
<li> Почтовый псевдоним группы, включая префикс и суффикс, не может превышать 64 символа. </li>
</ul>';
$string['settings_secthead_legacy'] = 'Наследуемое';
$string['settings_secthead_legacy_desc'] = 'Эти настройки и функции устарели и могут быть удалены в ближайшее время.';
$string['settings_secthead_preview'] = 'Предварительный просмотр';
$string['settings_secthead_team_name'] = 'Название команды';
$string['settings_secthead_team_name_desc'] = 'Если курс настроен на создание Microsoft Teams, название команды будет построено следующим образом. <br/>
<ul>
<li> Можно определить только отображаемые названия команд. Короткие названия связанных групп будут автоматически сгенерированы. </li>
<li> Политики именования групп не применяются при создании команд. </li>
<li> Внесенные здесь изменения повлияют только на создание будущей команды, но не на существующие. </li>
</ul>';
$string['settings_serviceresourceabstract_detect'] = 'Определить';
$string['settings_serviceresourceabstract_detecting'] = 'Определяется...';
$string['settings_serviceresourceabstract_empty'] = 'Пожалуйста, введите значение или нажмите «Определить», чтобы попытаться определить правильное значение.';
$string['settings_serviceresourceabstract_error'] = 'Произошла ошибка при определении настройки. Пожалуйста, установите вручную.';
$string['settings_serviceresourceabstract_invalid'] = 'Это значение не может использоваться.';
$string['settings_serviceresourceabstract_nocreds'] = 'Сначала установите учетные данные приложения.';
$string['settings_serviceresourceabstract_noperms'] = 'Возникла проблема с определением этого параметра. <br /> Убедитесь, что «Windows Azure Active Directory» был добавлен в зарегистрированное приложение Azure AD и включено разрешение «Чтение данных каталога».';
$string['settings_serviceresourceabstract_valid'] = '{$a} можно использовать.';
$string['settings_set_moodle_app_id_instruction'] = 'Чтобы найти ID приложения Moodle вручную, выполните следующие действия:
<ol>
<li> Загрузите загруженный файл манифеста в каталог приложений Teams вашего клиента. </li>
<li> Найдите приложение в каталоге приложений Teams. </li>
<li> Щелкните значок параметра приложения, расположенный в правом верхнем углу изображения приложения. </li>
<li> Нажмите "Копировать ссылку". </li>
<li> В текстовом редакторе вставьте скопированный контент. Он должен содержать URL-адрес, например https://teams.microsoft.com/l/app/00112233-4455-6677-8899-aabbccddeeff. </li>
</ol>
Последняя часть URL-адреса, то есть <span class="local_o365_settings_moodle_app_id">00112233-4455-6677-8899-aabbccddeeff</span> является идентификатором приложения.';
$string['settings_setup_step1'] = 'Шаг 1/3: Регистрация Moodle в Azure AD';
$string['settings_setup_step1_continue'] = '<b>После ввода идентификатора приложения и ключа для продолжения нажмите внизу страницы «Сохранить изменения». </b><br /><br /><br /><br /><br />';
$string['settings_setup_step1_credentials_end'] = 'Если вы не можете настроить приложение AzureAD через PowerShell, <a href="https://aka.ms/MoodleTeamsManualSetup" target="_blank">щелкните здесь</a> для получения инструкций по ручной настройке. Примечание: Эти настройки сохраняются в плагине аутентификации OpenID Connect. Чтобы настроить дополнительные параметры входа в систему, перейдите на  <a href="{$a->oidcsettings}"> страницу настроек OpenID Connect</a><br /><br />';
$string['settings_setup_step1_desc'] = 'Зарегистрируйте новое приложение Azure AD для своего клиента Microsoft 365 с помощью Windows PowerShell:

 <a href="{$a}/local/o365/scripts/Moodle-AzureAD-Powershell.zip" class="btn btn-primary" target="_blank">Download PowerShell Script</a>

 <p style="margin-top:10px"><a href="https://aka.ms/MoodleTeamsPowerShellReadMe" target="_blank">Щелкните здесь</a>, чтобы прочитать инструкцию по запуску скрипта. Используйте следующую ссылку в качестве URL Moodle:</p><h5><b>{$a}</b></h5>';
$string['settings_setup_step1clientcreds'] = '<br />После успешного выполнения сценария скопируйте возвращенные сценарием идентификатор приложения и ключ приложения в ниже расположенные поля:';
$string['settings_setup_step2'] = 'Шаг 2/3: Выбор способа подключения';
$string['settings_setup_step2_continue'] = '<b>Для продолжения выберите способ подключения, затем нажмите кнопку «Сохранить изменения».</b><br /><br /><br /><br /><br />';
$string['settings_setup_step2_desc'] = 'В этом разделе вы можете выбрать способ подключения пакета интеграции Microsoft 365 к Azure. Подключение может осуществляться через «Доступ приложения» или от имени пользователя, которого вы назначили «системным» пользователем.';
$string['settings_setup_step3'] = 'Шаг 3/3: Согласие администратора и дополнительная информация';
$string['settings_setup_step3_desc'] = 'Этот последний шаг позволяет администратору дать согласие на использование некоторых разрешений Azure и собрать дополнительную информацию о вашей среде Microsoft 365. <br /> <br />';
$string['settings_setup_step4'] = 'Проверить настройки';
$string['settings_setup_step4_desc'] = 'Настройка завершена. Нажмите ниже кнопку «Обновить», чтобы проверить ваши настройки.';
$string['settings_sharepointlink'] = 'Ссылка на SharePoint';
$string['settings_sharepointlink_changelink'] = 'Заменить сайт';
$string['settings_sharepointlink_connected'] = 'Moodle подключен к этому сайту SharePoint.';
$string['settings_sharepointlink_details'] = 'Чтобы соединить Moodle и SharePoint, введите полный URL-адрес сайта SharePoint для подключения к Moodle. Если сайт не существует, Moodle попытается его создать.';
$string['settings_sharepointlink_enterurl'] = 'Выше ведите URL';
$string['settings_sharepointlink_error'] = 'При настройке SharePoint возникла проблема. <br /> <br /> <ul> <li> Если у вас включено ведение журнала отладки (настройка «Запись отладочных сообщений» выше), дополнительная информация может быть доступна в отчете журнала Moodle. (Администрирование сайта> Отчеты> Журналы). </li><li> Чтобы повторить настройку, нажмите «Заменить сайт», выберите новый сайт SharePoint, нажмите «Сохранить изменения» в нижней части этой страницы и запустите Cron Moodle.</ul>';
$string['settings_sharepointlink_initializing'] = 'Moodle настраивает этот сайт SharePoint. Это произойдет во время следующего запуска cron Moodle.';
$string['settings_sharepointlink_status_checking'] = 'Проверка введенного сайта SharePoint ...';
$string['settings_sharepointlink_status_invalid'] = 'Этот сайт SharePoint. не пригоден для использования.';
$string['settings_sharepointlink_status_notempty'] = 'Этот сайт пригоден для использования, но уже существует. Moodle может конфликтовать с существующим содержимым. Для достижения наилучших результатов введите несуществующий сайт SharePoint и Moodle создаст его.';
$string['settings_sharepointlink_status_valid'] = 'Этот сайт SharePoint будет создан Moodle и использован для контента Moodle.';
$string['settings_switchauthminupnsplit0'] = 'Минимальная длина не совпадающего имени пользователя Microsoft 365 для изменения';
$string['settings_switchauthminupnsplit0_details'] = 'При включенной настройке «Изменять сопоставляемых пользователей Microsoft 365» этот параметр устанавливает минимальную длину для имен пользователей без домена клиента (часть @ example.onmicrosoft.com), которая будет меняться. Это помогает избежать изменения учетных записей с общими именами, такими как «admin», которые не обязательно совпадают в Moodle и Azure AD.';
$string['settings_systemapiuser'] = 'Пользователь системного API';
$string['settings_systemapiuser_change'] = 'Заменить пользователя';
$string['settings_systemapiuser_details'] = 'Чтобы использовать этот метод, отключите «Доступ приложения», нажмите «Сохранить изменения», затем нажмите кнопку «Установить пользователя». <br /> Используя этот метод подключения, интеграция связывается с Azure от имени выбранного вами пользователя. Это требует меньше разрешений, но требует выделенного пользователя. Возможно, вы захотите использовать этот метод, если не можете включить дополнительные разрешения, необходимые для доступа к приложению, или если у вас есть особые проблемы безопасности с выделенным пользователем.';
$string['settings_systemapiuser_setuser'] = 'Установить пользователя';
$string['settings_systemapiuser_usernotset'] = 'Нет установленного пользователя.';
$string['settings_systemapiuser_userset'] = '{$a}';
$string['settings_team_name_course'] = 'Атрибут курса в названии команды';
$string['settings_team_name_prefix'] = 'Префикс названия команд';
$string['settings_team_name_sample'] = 'Предположим, что у курса есть:
<ul>
<li>Полное имя: <b>Образец курса</b>
<li>Краткое имя: <b>образец 15</b></li>
<li>Созданный Moodle ID: <b>2</b></li>
<li>Номер ID: <b>ID образца 15</b></li>
</ul>
В ваших текущих настройках для создания команды будет использоваться имя "<b>{$a}</b>". Нажмите ниже кнопку «Сохранить изменения», чтобы увидеть, как ваши настройки изменят его.';
$string['settings_team_name_suffix'] = 'Суффикс названия команд';
$string['settings_team_name_sync'] = 'Обновить названия команд при обновлении курса';
$string['settings_team_name_sync_desc'] = 'Если этот параметр включен, то при обновлении курса Moodle название команды будет обновлено в соответствии с последними настройками названия команд.';
$string['settings_teamconnections'] = 'Связи команд';
$string['settings_teamconnections_details'] = 'Просматривайте и управляйте связями между курсом Moodle и Microsoft Teams.';
$string['settings_teamconnections_linktext'] = 'Управление связями команд';
$string['settings_teams_additional_instructions'] = '<p class = "local_o365_settings_teams_horizontal_spacer">
Перейдите в раздел <a href="https://aka.ms/MoodleBotRegistration" target="_blank"> регистрации приложений на портале Azure </a> и зарегистрируйте новое приложение. Ниже введите идентификатор приложения и пароль клиента:
</p>';
$string['settings_teams_banner_1'] = 'Приложение Moodle для <a href="https://aka.ms/MoodleLearnTeams" target="_blank">Microsoft Teams</a> позволяет легко получать доступ и совместно работать над курсами Moodle в Teams. Приложение Moodle также имеет бота Moodle Assistant, который будет отправлять уведомления Moodle студентам и преподавателям и отвечать на вопросы об их курсах, заданиях, оценках и студентах - прямо в Teams!';
$string['settings_teams_banner_2'] = 'Чтобы подготовить бота Moodle Assistant для своего клиента Microsoft 365 необходимо развернуть его в  <a href="https://aka.ms/MoodleLearnAzure" target="_blank">Microsoft Azure</a>. Если у вас нет активной подписки Azure, вы можете <a href="https://aka.ms/MoodleTeamsAzureFree" target="_blank">получить ее бесплатно</a>!';
$string['settings_teams_deploy_bot_1'] = 'После того как вы выполнили вышеуказанные действия и получили активную подписку Azure, нажмите здесь, чтобы развернуть бота:';
$string['settings_teams_deploy_bot_2'] = 'Нужна помощь?';
$string['settings_teams_download_json'] = 'Скачать JSON';
$string['settings_teams_download_json_desc'] = 'После ввода вверху идентификатора и пароля клиента нажмите ниже кнопку, чтобы скачать файл JSON для развертывания.';
$string['settings_teams_moodle_app_external_id'] = 'ID приложения Microsoft для приложения Moodle Teams';
$string['settings_teams_moodle_app_external_id_desc'] = 'Следует установить значение по умолчанию, если вашему клиенту не требуется несколько приложений Moodle Teams для подключения к разным сайтам Moodle.';
$string['settings_teams_moodle_app_short_name'] = 'Название приложения Teams';
$string['settings_teams_moodle_app_short_name_desc'] = 'Можно установить значение по умолчанию, если вашему клиенту не требуется несколько приложений Moodle Teams для подключения к разным сайтам Moodle.';
$string['settings_teams_moodle_setup_heading'] = '<h4 class="local_o365_settings_teams_h4_spacer"> Настройте свое приложение Moodle для Microsoft Teams </h4>';
$string['settings_tools_tenants'] = 'Клиенты';
$string['settings_tools_tenants_details'] = 'Управление доступом к дополнительным клиентам Microsoft 365.';
$string['settings_tools_tenants_linktext'] = 'Настройки дополнительных клиентов';
$string['settings_userconnections'] = 'Связи пользователей';
$string['settings_userconnections_details'] = 'Просмотр и управление связями между пользователями Moodle и Microsoft 365.';
$string['settings_userconnections_linktext'] = 'Управление связями пользователей';
$string['settings_usergroups'] = 'Teams';
$string['settings_usergroups_controlled_per_course'] = 'Разрешить в курсе настройку синхронизации курса';
$string['settings_usergroups_controlled_per_course_details'] = 'Если в разделе «Синхронизация команд» установлено значение «Настройка» и этот параметр включен, то пользователи Moodle, которые имеют право выступать в качестве владельцев команд, смогут в курсе управлять синхронизацией курса из блока Microsoft.';
$string['settings_usergroups_courses_per_task'] = 'Количество синхронизируемых курсов при запуске задачи';
$string['settings_usergroups_courses_per_task_details'] = 'Сколько курсов должно обрабатываться при каждом запуске задачи синхронизации состояния Команды/Группы.';
$string['settings_usergroups_details'] = 'Если этот параметр включен, он будет создавать и поддерживать команду (Team) для каждого курса на сайте (по умолчанию - отключено). Это создаст все необходимые команды при каждом запуске cron (и добавит всех текущих участников). После этого членство в Команде будет сохраняться независимо от регистрации пользователей в курсах Moodle.';
$string['settings_usergroups_prefer_class_team'] = 'Создавать команды класса (вместо стандартных команд)';
$string['settings_usergroups_prefer_class_team_details'] = 'Если этот параметр включен, то, при возможности, созданные из Moodle команды будут использовать образовательный шаблон (что приведет к созданию команды класса).';
$string['settings_usermatch'] = 'Сопоставление пользователя';
$string['settings_usermatch_details'] = 'Этот инструмент позволяет сопоставлять пользователей Moodle с пользователями Microsoft 365 на основе загруженного файла с данными пользователей.';
$string['settings_usersynccreationrestriction'] = 'Ограничения создания пользователя';
$string['settings_usersynccreationrestriction_details'] = 'Если этот параметр включен, то во время синхронизации пользователей будут создаваться только пользователи, имеющие указанное значение для указанного поля Azure AD.';
$string['settings_usersynccreationrestriction_fieldval'] = 'Значение поля';
$string['settings_usersynccreationrestriction_o365group'] = 'Членство в группе Microsoft 365';
$string['settings_usersynccreationrestriction_regex'] = 'Значение является регулярным выражением';
$string['sorry_do_not_understand'] = 'Простите, я не понимаю';
$string['sso_login'] = 'Вход в Microsoft 365';
$string['tab_moodle'] = 'Moodle';
$string['tab_name'] = 'Название вкладки';
$string['task_bot'] = 'Задача сообщения бота';
$string['task_calendarsyncin'] = 'Синхронизировать события Office 365 в Moodle';
$string['task_groupcreate'] = 'Создание групп пользователей в Microsoft 365';
$string['task_processmatchqueue'] = 'Процесс очередности сопоставлений';
$string['task_processmatchqueue_err_museralreadymatched'] = 'Пользователь Moodle уже сопоставлен пользователю Microsoft 365.';
$string['task_processmatchqueue_err_museralreadyo365'] = 'Пользователь Moodle уже связан с Microsoft 365.';
$string['task_processmatchqueue_err_nomuser'] = 'Пользователь Moodle с таким логином не найден.';
$string['task_processmatchqueue_err_noo365user'] = 'Пользователь Microsoft 365 с таким логином не найден.';
$string['task_processmatchqueue_err_o365useralreadyconnected'] = 'Пользователь Microsoft 365 уже связан с пользователем Moodle.';
$string['task_processmatchqueue_err_o365useralreadymatched'] = 'Пользователь Microsoft 365 уже сопоставлен с пользователем Moodle.';
$string['task_refreshsystemrefreshtoken'] = 'Обновление ключа пользователя системного API';
$string['task_sds_sync'] = 'Синхронизация с SDS';
$string['task_sharepointinit'] = 'Инициализировать SharePoint';
$string['task_syncusers'] = 'Синхронизация пользователей с Azure AD';
$string['teams_no_course'] = 'Нет курсов для добавления';
$string['ucp_calsync_availcal'] = 'Доступные календари Moodle';
$string['ucp_calsync_desc'] = 'Выбранные календари будут синхронизироваться из Moodle с вашим календарем Outlook.';
$string['ucp_calsync_title'] = 'Настройки синхронизации календаря Outlook';
$string['ucp_connection_aadlogin'] = 'Использовать свои учетные данные Microsoft 365 для входа в Moodle <br />';
$string['ucp_connection_aadlogin_active'] = 'Вы используете учетную запись Microsoft 365 «{$a}» для входа в Moodle.';
$string['ucp_connection_aadlogin_desc_authcode'] = 'Вместо того, чтобы вводить логин и пароль на странице входа в Moodle, на странице входа Вы увидите раздел «Вход в систему с помощью учетной записи на {$a}». Вы нажмете на ссылку и будете перенаправлены на страницу входа в Microsoft 365. После успешного входа в Microsoft 365 Вы вернетесь в Moodle и войдете в свою учетную запись.';
$string['ucp_connection_aadlogin_desc_rocreds'] = 'Вместо логина и пароля Moodle вы будете вводить логин и пароль Microsoft 365 на странице входа в Moodle.';
$string['ucp_connection_aadlogin_start'] = 'Начать использовать Microsoft 365 для входа в Moodle';
$string['ucp_connection_aadlogin_stop'] = 'Прекратить использовать Microsoft 365 для входа в Moodle';
$string['ucp_connection_desc'] = 'Здесь вы можете настроить способ подключения к Microsoft 365. Для использования функций Microsoft 365 необходимо подключиться к учетной записи Microsoft 365.  Ниже указано, как это может быть достигнуто.';
$string['ucp_connection_disconnected'] = 'Вы не подключены к Microsoft 365.';
$string['ucp_connection_linked'] = 'Свяжите свои учетные записи Moodle и Microsoft 365';
$string['ucp_connection_linked_active'] = 'Вы связаны с учетной записью Microsoft 365 «{$a}».';
$string['ucp_connection_linked_desc'] = 'Связывание учетных записей Moodle и Microsoft 365 позволит вам использовать в Moodle функции Microsoft 365 без изменения способа входа в Moodle. <br /> Нажав ниже на ссылку, вы отправитесь в Microsoft 365 для одноразового входа, после чего вернетесь сюда. Вы сможете использовать все функции Microsoft 365, не внося никаких других изменений в свою учетную запись Moodle - вы будете входить в Moodle как всегда.';
$string['ucp_connection_linked_migrate'] = 'Переключиться на связанный аккаунт';
$string['ucp_connection_linked_start'] = 'Связать свою учетную запись Moodle с учетной записью Microsoft 365.';
$string['ucp_connection_linked_stop'] = 'Отменить связь своей учетной записи Moodle с учетной записью Microsoft 365.';
$string['ucp_connection_options'] = 'Параметры подключения:';
$string['ucp_connection_start'] = 'Подключиться к Microsoft 365';
$string['ucp_connection_status'] = 'Подключение к Microsoft 365:';
$string['ucp_connection_stop'] = 'Отключиться от Microsoft 365';
$string['ucp_connectionstatus'] = 'Состояние подключения';
$string['ucp_features'] = 'Возможности Microsoft 365';
$string['ucp_features_intro'] = 'Ниже приведен список возможностей Microsoft 365, которые можно использовать для улучшения Moodle.';
$string['ucp_features_intro_notconnected'] = 'Некоторые из них могут быть недоступны, пока вы не подключитесь к Microsoft 365.';
$string['ucp_general_intro'] = 'Здесь вы можете управлять своим подключением к Microsoft 365.';
$string['ucp_general_intro_notconnected_nopermissions'] = 'Чтобы подключиться к Microsoft 365, вам необходимо связаться с администратором сайта.';
$string['ucp_index_aadlogin_active'] = 'В настоящее время вы используете Microsoft 365 для входа в Moodle';
$string['ucp_index_aadlogin_desc'] = 'Вы можете использовать свои учетные данные Microsoft 365 для входа в Moodle.';
$string['ucp_index_aadlogin_inactive'] = 'Вы не используете Microsoft 365 для входа в Moodle';
$string['ucp_index_aadlogin_title'] = 'Вход в Microsoft 365';
$string['ucp_index_calendar_desc'] = 'Здесь вы можете настроить синхронизацию между календарями Moodle и Outlook. Вы можете экспортировать события календаря Moodle в Outlook и переносить события Outlook в Moodle.';
$string['ucp_index_calendar_title'] = 'Настройки синхронизации календаря Outlook';
$string['ucp_index_connection_desc'] = 'Настроить подключение к Microsoft 365.';
$string['ucp_index_connection_title'] = 'Настройки подключения к Microsoft 365';
$string['ucp_index_connectionstatus_connect'] = 'Нажмите здесь для подключения.';
$string['ucp_index_connectionstatus_connected'] = 'В настоящее время вы подключены к Microsoft 365';
$string['ucp_index_connectionstatus_disconnect'] = 'Отключить';
$string['ucp_index_connectionstatus_login'] = 'Нажмите здесь для входа.';
$string['ucp_index_connectionstatus_manage'] = 'Управление подключением';
$string['ucp_index_connectionstatus_matched'] = 'Вы сопоставлены с пользователем Microsoft 365 <small> "{$a}" </small>. Чтобы завершить подключение, перейдите по ссылке ниже и войдите в Microsoft 365.';
$string['ucp_index_connectionstatus_notconnected'] = 'В данный момент вы не подключены к Microsoft 365';
$string['ucp_index_connectionstatus_reconnect'] = 'Обновить подключение';
$string['ucp_index_connectionstatus_title'] = 'Состояние подключения';
$string['ucp_index_connectionstatus_usinglinked'] = 'Вы связаны с учетной записью Microsoft 365.';
$string['ucp_index_connectionstatus_usinglogin'] = 'В настоящее время вы используете Microsoft 365 для входа в Moodle.';
$string['ucp_index_onenote_desc'] = 'Интеграция OneNote позволяет использовать OneNote Microsoft 365 в Moodle. Вы можете выполнять задания с помощью OneNote и легко делать заметки для своих курсов.';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_notconnected'] = 'Перед посещением подключитесь к Microsoft 365.';
$string['ucp_o365accountconnected'] = 'Эта учетная запись Microsoft 365 уже связана с другой учетной записью Moodle.';
$string['ucp_options'] = 'Опции';
$string['ucp_status_disabled'] = 'Нет подключено';
$string['ucp_status_enabled'] = 'Активно';
$string['ucp_syncdir_both'] = 'Обновить Outlook и Moodle';
$string['ucp_syncdir_in'] = 'Из Outlook в Moodle';
$string['ucp_syncdir_out'] = 'Из Moodle в Outlook';
$string['ucp_syncdir_title'] = 'Поведение синхронизации:';
$string['ucp_syncwith_title'] = 'Название календаря Outlook для синхронизации:';
$string['ucp_title'] = 'Microsoft 365 / Панель управления Moodle';
$string['webservices_error_assignnotfound'] = 'Запись о задании не найдена.';
$string['webservices_error_couldnotsavegrade'] = 'Не удалось сохранить оценку.';
$string['webservices_error_invalidassignment'] = 'Задание с полученным ID нельзя использовать с этой функцией веб-сервисов.';
$string['webservices_error_modulenotfound'] = 'Модуль с полученным ID  не найден';
$string['webservices_error_sectionnotfound'] = 'Раздел курса не может быть найден.';
$string['your_grade'] = 'Ваша оценка - {$a}';
$string['your_grade_class_grade'] = 'Ваша оценка - {$a->usergrade} &nbsp; | &nbsp; Средняя оценка класса - {$a->classgrade}';
