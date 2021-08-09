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
 * Strings for component 'tool_usersuspension', language 'ru', version '4.0'.
 *
 * @package     tool_usersuspension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-exclusion'] = 'Вы уверены, что хотите удалить эту запись из списка исключений?';
$string['action:delete-exclusion'] = 'Удалить запись из списка исключений';
$string['action:exclude:add:cohort'] = 'Добавить исключение для группы';
$string['action:exclude:add:user'] = 'Добавить исключение для пользователя';
$string['button:backtocourse'] = 'Вернуться к курсу';
$string['button:backtoexclusions'] = 'Вернуться к списку исключений';
$string['button:backtouploadform'] = 'Вернуться к форме загрузки';
$string['button:continue'] = 'Продолжить';
$string['config:cleanlogs:disabled'] = 'Автоматическая очистка логов отключена в глобальных настройках';
$string['config:cleanup:disabled'] = 'Опция "очистка" отключена в глобальных настройках инструмента';
$string['config:fromfolder:disabled'] = 'Опция "заблокировать из файла" отключена в глобальных настройках инструмента';
$string['config:smartdetect:disabled'] = 'Опция "умное обнаружение" отключена в глобальных настройках инструмента';
$string['config:tool:disabled'] = 'Утилита отключена в глобальных настройках инструмента';
$string['csv:delimiter'] = 'Разделитель';
$string['csv:enclosure'] = 'Закрывающий символ';
$string['csv:upload:continue'] = 'Продолжить';
$string['email:user:delete:body'] = '<p>Уважаемый {$a->name}</p>
<p>Ваш аккаунт был удалён спустя {$a->timesuspended} блокировки</p>
<p>С уважением,<br/>{$a->signature}</p>';
$string['email:user:delete:subject'] = 'Ваш аккаунт был удалён';
$string['email:user:suspend:auto:body'] = '<p>Уважаемый {$a->name}</p>
<p>Ваш аккаунт был заблокирован будучи неактивным {$a->timesuspended}</p>
<p>Если вы считаете, что это ошибка, или хотите восстановить аккаунт, свяжитесь с {$a->contact}</p>
<p>С уважением,<br/>{$a->signature}</p>';
$string['email:user:suspend:manual:body'] = '<p>Уважаемый {$a->name}</p>
<p>Ваш аккаунт был заблокирован</p>
<p>Если вы считаете, что это ошибка, или хотите восстановить аккаунт, свяжитесь с {$a->contact}</p>
<p>С уважением,<br/>{$a->signature}</p>';
$string['email:user:suspend:subject'] = 'Ваш аккаунт был заблокирован';
$string['email:user:unsuspend:body'] = '<p>Уважаемый {$a->name}</p>
<p>Ваш аккаунт был восстановлен</p>
<p>Если вы считаете, что это ошибка, или хотите снова заблокировать аккаунт, свяжитесь с {$a->contact}</p>
<p>С уважением,<br/>{$a->signature}</p>';
$string['email:user:unsuspend:subject'] = 'Ваш аккаунт был восстановлен';
$string['err:statustable:set_sql'] = 'set_sql() отключен. Эта таблица не может быть настроена.';
$string['excludeuser'] = 'исключить пользователя из обработки';
$string['form:static:uploadfile:desc'] = 'Здесь вы можете загрузить список заблокированных пользователей<br/>
Возможно 2 конфигурации CSV-файла:<br/>
<ol>
<li>"простой" - файл содержит только адреса эл. почты пользователей, которых нужно заблокировать</li>
<li>"особый" - файл состоит из 2 колонок, обозначающих тип значения и значение<br/>
Возможные типы значения:
<ul><li>email: требует адрес эл. почты пользователя в колонке значения</li>
<li>idnumber: требует idnumber пользователя в колонке значения</li>
<li>username: требует логин пользователя в колонке значения</li>
</ul></ol>';
$string['info:no-exclusion-cohorts'] = 'Все группы уже добавлены в список исключений';
$string['label:users:excluded'] = 'Исключенные пользователи';
$string['label:users:potential'] = 'Кандидаты на блокировку';
$string['link:currentstatus:overview'] = 'Просмотреть текущие изменения статусов';
$string['link:exclude:overview'] = 'Список исключений';
$string['link:log:overview'] = 'Просмотреть логи изменения статусов';
$string['link:upload'] = 'Загрузить файл блокировок';
$string['link:viewstatus'] = 'Просмотреть список статусов';
$string['msg:exclusion:cohort:none-selected'] = 'Не выбраны группы для исключения';
$string['msg:exclusion:record:cohort:inserted'] = 'Исключение для группы \'{$a->name}\' добавлено';
$string['msg:exclusion:record:exists'] = 'Исключение уже существует (запись не была добавлена)';
$string['msg:exclusion:record:inserted'] = 'Исключение добавлено';
$string['msg:exclusion:record:user:deleted'] = 'Исключение для пользователя \'{$a->fullname}\' удалено';
$string['msg:exclusion:record:user:inserted'] = 'Исключение для пользователя \'{$a->fullname}\' добавлено';
$string['msg:exclusion:records:cohort:deleted'] = 'Исключения для групп удалены';
$string['msg:exclusion:records:deleted'] = 'Исключения удалены';
$string['msg:exclusion:records:user:deleted'] = 'Исключения для пользователей удалены';
$string['msg:file-not-readable'] = 'Загруженный файл \'{$a}\' не читается';
$string['msg:file-not-writeable'] = 'Загруженный файл \'{$a}\' недоступен для записи или не может быть удалён';
$string['msg:file:upload:fail'] = 'Загруженный файл не может быть сохранён. Обработка прервана.';
$string['msg:user:not-found'] = 'пользователь не найден';
$string['msg:user:suspend:failed'] = 'Пользователь \'{$a->username}\' не может быть заблокирован';
$string['msg:user:suspend:success'] = 'Пользователь \'{$a->username}\' заблокирован';
$string['msg:user:unsuspend:failed'] = 'Пользователь \'{$a->username}\' не может быть восстановлен';
$string['msg:user:unsuspend:success'] = 'Пользователь \'{$a->username}\' восстановлен';
$string['notify:load-exclude-list'] = 'Загрузка списка исключений';
$string['notify:load-file'] = 'Открываем файл \'{$a}\\';
$string['notify:load-file-fail'] = 'Файл \'{$a}\\ не открывается для чтения';
$string['notify:suspend-excluded-user'] = 'Пользователь: {$a->username} (id={$a->id}) в списке исключений: блокировка отменена';
$string['notify:suspend-user'] = 'блокировка пользователя {$a->username} (id={$a->id})';
$string['notify:unknown-suspend-type'] = 'Неизвестный тип блокировки \'{$a}\\';
$string['page:view:exclude.php:introduction'] = '<p>На этой странице отображены исключения.<br/>
Исключенные пользователи не обрабатываются утилитой<br/>
При исключении группы, все пользователи из этой группы не будут обрабатываться.
Используйте опции на этой странице чтобы добавить группы или пользователей в список исключений.</p>';
$string['page:view:log.php:introduction'] = 'Эта таблица отображает логи статусов, полученных пользователями в результате обработки или работы с инструментом вручную. В зависимости от конфигурации, он покажет статус блокировки или статус удаления пользователей и время выполнения действий.';
$string['page:view:statuslist.php:introduction:delete'] = '<p>На этой странице отображены пользователи, которые будут удалены через время, определённое в настройках</p>';
$string['page:view:statuslist.php:introduction:status'] = '<p>На этой странице отображены пользователи, находящихся под контролем утилиты.<br/>
Пользователи, не находящиеся в списке исключённых, находятся под контролем утилиты и могут быть заблокированы или удалены утилитой автоматически.<br/>
В этом списке не будут отображаться исключенные пользователи или пользователи из исключённых групп, в отличие от списка пользователей для администратора.</p>';
$string['page:view:statuslist.php:introduction:suspended'] = '<p>В этом списке отображены заблокированные пользователи</p>';
$string['page:view:statuslist.php:introduction:tosuspend'] = '<p>В этом списке отображаются пользователи, которые будут заблокированы через определённый период времени</p>';
$string['pluginname'] = 'Блокировка пользователей';
$string['privacy:metadata:tool_usersuspension:mailedto'] = 'Адрес восстановленного пользователя';
$string['privacy:metadata:tool_usersuspension:mailsent'] = 'Было ли отправлено письмо';
$string['privacy:metadata:tool_usersuspension:status'] = 'Статус блокировки';
$string['privacy:metadata:tool_usersuspension:timecreated'] = 'Время создания записи';
$string['privacy:metadata:tool_usersuspension:type'] = 'Ложное название типа удаления (всегда \'user\')';
$string['privacy:metadata:tool_usersuspension:userid'] = 'ИД пользователя чей аккаунт был восстановлен';
$string['promo'] = 'плагин usersuspension для Moodle';
$string['promodesc'] = 'Плагин написан Sebsoft Managed Hosting & Software Development
    (<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
    {$a}<br /><br />';
$string['setting:cleanlogsafter'] = 'Частота очистки логов';
$string['setting:cleanup_deleteafter'] = 'Время перед удалением';
$string['setting:cleanup_interval'] = 'Интервал очистки';
$string['setting:desc:cleanlogsafter'] = 'Настройте частоту очистки логов. Все логи старше этого значения будут удалены физически.';
$string['setting:desc:cleanup_deleteafter'] = 'Время между блокировкой и удалением пользователя';
$string['setting:desc:cleanup_interval'] = 'Интервал выполнения очистки';
$string['setting:desc:enablecleanlogs'] = 'Включает автоматическую очистку логов';
$string['setting:desc:enablecleanup'] = 'Включает очистку';
$string['setting:desc:enabled'] = 'Включает утилиту';
$string['setting:desc:enablefromfolder'] = 'Включает блокировку пользователей из загружаемого CSV';
$string['setting:desc:enablefromupload'] = 'Включает блокировку пользователей из загруженного файла';
$string['setting:desc:enablesmartdetect'] = 'Включает умное обнаружение';
$string['setting:desc:senddeleteemail'] = 'Информировать пользователя письмом об удалении?';
$string['setting:desc:sendsuspendemail'] = 'Информировать пользователя письмом об блокировке?';
$string['setting:desc:smartdetect_interval'] = 'Интервал запуска умного обнаружения';
$string['setting:desc:smartdetect_suspendafter'] = 'Время, через которое неактивные пользователи будут заблокированы';
$string['setting:desc:uploaddetect_interval'] = 'Интервал проверки папки на новые файлы';
$string['setting:desc:uploadfilename'] = 'Имя загружаемого файла блокировок';
$string['setting:desc:uploadfolder'] = 'Местоположение папки для загрузки файла';
$string['setting:enablecleanlogs'] = 'Включить очистку логов';
$string['setting:enablecleanup'] = 'Включить очистку';
$string['setting:enabled'] = 'Включить';
$string['setting:enablefromfolder'] = 'Автоматическая блокировка из файла CSV';
$string['setting:enablefromupload'] = 'Включить загрузку';
$string['setting:enablesmartdetect'] = 'Включить умное обнаружение';
$string['setting:senddeleteemail'] = 'Отправлять письмо об удалении?';
$string['setting:sendsuspendemail'] = 'Отправлять письмо об блокировке?';
$string['setting:smartdetect_interval'] = 'Интервал умного обнаружения';
$string['setting:smartdetect_suspendafter'] = 'Время неактивности';
$string['setting:uploaddetect_interval'] = 'Интервал обработки папки';
$string['setting:uploadfilename'] = 'Имя загружаемого файла';
$string['setting:uploadfolder'] = 'Папка загрузки';
$string['status:deleted'] = 'удален';
$string['status:suspended'] = 'заблокирован';
$string['status:unsuspended'] = 'восстановлен';
$string['suspensionsettings'] = 'Настройки Блокировки пользователей';
$string['suspensionsettingscleanup'] = 'Очистка';
$string['suspensionsettingscleanupdesc'] = 'Настройки параметров очистки.<br/>
Для автоматизации очистки пользователей используется процесс очистки, который удаляет заблокированных пользователей. Включите и настройте эту функцию, если необходимо удалять заблокированных пользователей через определённый промежуток времени.
Если пользователей нельзя удалять, отключите эту функцию.';
$string['suspensionsettingsfolder'] = 'Блокировка из папки';
$string['suspensionsettingsfolderdesc'] = 'Настройка параметров "блокировки из папки"<br/>
С помощью этого инструмента вы можете автоматизировать блокировку пользователей, загружая CSV список в определённую папку на сервере. Файл будет автоматически обработан согласно настройкам.
Внимание: загруженный файл будет удалён после обработки!';
$string['suspensionsettingssmartdetect'] = 'Умное обнаружение';
$string['suspensionsettingssmartdetectdesc'] = 'Настройка параметров "умного обнаружения".<br/>
Умное обнаружение автоматически запускается с определённым интервалом, и блокирует аккаунты, которые согласно установленным параметрам будут отмечены как неактивные.';
$string['suspensionsettingsupload'] = 'Загрузка заблокированных';
$string['suspensionsettingsuploaddesc'] = 'Настройка параметров "загрузки заблокированных"';
$string['table:exclusions'] = 'Исключения';
$string['table:log:all'] = 'Лог блокировок';
$string['table:log:latest'] = 'Лог последних блокировок';
$string['table:logs'] = 'Логи';
$string['table:status:delete'] = 'На удаление';
$string['table:status:status'] = 'На рассмотрении';
$string['table:status:suspended'] = 'Заблокированные';
$string['table:status:tosuspend'] = 'На блокировку';
$string['task:delete'] = 'Usersuspension задача: автоматическое удаление заблокированных пользователей';
$string['task:fromfolder'] = 'Usersuspension задача: автоматическая блокировка пользователей по загруженному файлу';
$string['task:logclean'] = 'Очистка логов Блокировки Пользователей';
$string['task:mark'] = 'Usersuspension задача: автоматическая блокировка пользователей';
$string['thead:action'] = 'Действия';
$string['thead:lastlogin'] = 'Последний вход';
$string['thead:mailedto'] = 'Отправлено';
$string['thead:mailsent'] = 'Письмо отправлено';
$string['thead:name'] = 'Имя';
$string['thead:status'] = 'Статус';
$string['thead:timecreated'] = 'Время создания';
$string['thead:timemodified'] = 'Время изменения';
$string['thead:type'] = 'Тип';
$string['thead:userid'] = 'ID пользователя';
$string['thead:username'] = 'Логин';
