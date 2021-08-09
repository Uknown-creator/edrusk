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
 * Strings for component 'enrol_autoenrol', language 'ru', version '4.0'.
 *
 * @package     enrol_autoenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = 'Всегда подписывать';
$string['alwaysenrol_help'] = 'При выборе значениея "ДА" плагины будт всегда подписывать пользователей, даже если они уже имеют доступ к курсу через другой метод записи.';
$string['auto'] = 'Авто';
$string['auto_desc'] = 'Эта группа была автоматически создана плагином «Автоматическое зачисление». Группа будет удалена, если вы уберете этот плагин из курса.';
$string['autoenrol:config'] = 'Настройка автоматической подписки';
$string['autoenrol:hideshowinstance'] = 'Включать или отключать случаи автоматического зачисления';
$string['autoenrol:manage'] = 'Управлять автоматически зачисленными пользователями';
$string['autoenrol:method'] = 'Пользователь может записаться на курс при входе на сайт';
$string['autoenrol:unenrol'] = 'Пользователь может отписывать автоподписанных пользователей';
$string['autoenrol:unenrolself'] = 'Отчислять себя, если ранее был записан';
$string['cannotenrol'] = 'Вы не можете записаться на этот курс, используя автоматическое зачисление.';
$string['config'] = 'Конфигурация';
$string['countlimit'] = 'Лимит';
$string['countlimit_help'] = 'Этот экземпляр будет подсчитать количество учащихся и может остановить подписку пользователей, когда оно достигнет определенного уровня. Установка по умолчанию 0 означает неограниченную подписку.';
$string['customwelcomemessage'] = 'Настраиваемое приветственное сообщение';
$string['customwelcomemessage_help'] = 'Настраиваемое приветственное сообщение может быть добавлено как текст или авто-формат Moodle и содержать в себе теги HTML и многоязычные теги.

В сообщение можно включать следующие подстановки:

* Название курса {$a->coursename}
* Ссылка на страницу профиля пользователя {$a->profileurl}
* Электронная почта пользователя {$a->email}
* Полное имя пользователя {$a->fullname}';
$string['defaultrole'] = 'Назначение роли по умолчанию';
$string['defaultrole_desc'] = 'Выберите роль, которая будет назначена пользователю во время автоматической регистраций';
$string['editselectedusers'] = 'Изменить зачисления выбранных пользователей';
$string['emptyfield'] = 'Нет {$a}';
$string['enrolenddate'] = 'Дата окончания';
$string['enrolenddate_help'] = 'При включенном параметре пользователи смогут записываться только до этой даты.';
$string['enrolstartdate'] = 'Дата начала';
$string['enrolstartdate_help'] = 'Если включено, пользователи будут записываться только начиная с этой даты.';
$string['filter'] = 'Разрешить только';
$string['filter_help'] = 'Вы можете использовать поле группы, чтобы фильтровать тип пользователя, который вы хотите записывать на курс. Например, если вы сгруппировали по способу аутентификации и применили фильтр "вручную", тогда на курс будут записаны только те пользователи, которые зарегистрированы непосредственно на вашем сайте.';
$string['filtering'] = 'Фильтр пользователя';
$string['g_auth'] = 'Метод авторизации';
$string['g_dept'] = 'Факультет';
$string['g_email'] = 'Адрес электронной почты';
$string['g_inst'] = 'Институт';
$string['g_lang'] = 'Язык';
$string['g_none'] = 'Выбрать...';
$string['general'] = 'Общее';
$string['groupon'] = 'Объединять в группы по';
$string['groupon_help'] = 'При автоматическом зачислении можно при записи пользователей автоматически добавлять их в группу, основываясь на одном из этих полей пользователя.';
$string['instancename'] = 'Пользовательское название';
$string['instancename_help'] = 'Вы можете добавить название, чтобы было ясно, что данный тп подписки делает. Эта опция полезна, если в курсе используется несколько экземпляров спсоба записи AutoEnrol';
$string['m_course'] = 'Загрузка курса';
$string['m_site'] = 'Во время входа на сайт';
$string['method'] = 'Когда подписывать';
$string['method_help'] = 'Опытные пользователи могут использовать эту настройку для изменения поведения плагина таким образом, чтобы пользователи записывались на курс при входе в систему, вместо ожидания доступа к курсу. Это полезно для курсов, которые по умолчанию должны быть видимы в списке "Мои курсы" пользователей.';
$string['pluginname'] = 'Автоподписка Auto Enrol';
$string['pluginname_desc'] = 'Модуль реализует автоматическую подписку зарегистрированных пользователей на определенные курсы. Этот функционал похож на гостевой доступ, но при этом студентам открывается доступ к полному функционалу курса и они становятся его полноправными участниками. После установки подобной настройки все зарегистрированные пользователи не будут сразу подписаны на выбранный курс, но каждый из них будет добавлен в курс в момент авторизации в системе под своим логином и паролем.';
$string['removegroups'] = 'Удалять группы';
$string['removegroups_desc'] = 'Когда способ записи удаляется из курса удалять ли группы, которые были созданы этим способом записи? Обращаем внимание, что данный модуль позволяет в настройках курса группировать пользователей по почтовому адресу, языку, методу авторизации и т.д.';
$string['role'] = 'Роль';
$string['role_help'] = 'Опытные пользователи могут использовать эту настройку для изменения уровня прав зачисленных пользователей.';
$string['sendcoursewelcomemessage'] = 'Отправить приветственное сообщение курса';
$string['sendcoursewelcomemessage_help'] = 'Когда пользователь автоматически зачисляется на курс, ему по электронной почте может быть отправлено приветственное сообщение от имени контактного лица курса (по умолчанию - учителя). Если такую роль имеют несколько пользователей, то письмо отправляется от имени того пользователя, которому первым была назначена эта роль.';
$string['softmatch'] = 'Нестрогое соответствие';
$string['softmatch_help'] = 'При включенном параметре автоматическое зачисление будет записывать пользователя и тогда, когда он частично подходит под  значение «Допускать только», вместо того, чтобы требовать полного соответствия . Нестрогое соответствие также не чувствительно к регистру. Значение «Фильтровать по» будет использоваться для названия группы.';
$string['unenrolselfconfirm'] = 'Вы действительно хотите отписаться от курса «{$a}»?
Потом вы можете повторно записаться на этот курс, но при этом может быть утрачена информация об оценках и отправленных ответах на задания.';
$string['warning'] = 'Осторожно!';
$string['warning_message'] = 'Добавление этот плагин для вашего курса позволит любым зарегистрированным пользователям Moodle получить доступ к вашему курсу. Добавляйте этот способ записи , только если вы хотите, открыть доступ к вашему курсу для всех пользователей Moodle.';
$string['welcomemessage'] = 'Приветственное сообщение';
$string['welcometocourse'] = 'Добро пожаловать в {$a}';