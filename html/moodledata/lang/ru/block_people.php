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
 * Strings for component 'block_people', language 'ru', version '3.11'.
 *
 * @package     block_people
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['noparticipantslist'] = 'Просмотр списка участников запрещен в этом курсе';
$string['participantslist'] = 'Посмотреть список участников';
$string['people:addinstance'] = 'Добавлять новый блок «Люди»';
$string['people:myaddinstance'] = 'Добавлять новый блок «Пользователи» в Личный кабинет';
$string['pluginname'] = 'Люди';
$string['privacy:metadata'] = 'Плагин «Люди» предоставляет расширенные функциональные возможности пользователям Moodle, но не хранит никаких личных данных.';
$string['resetvisibilityerror'] = 'Упс... К сожалению, что-то пошло не так при обновлении таблиц базы данных ... <br/> Параметр "Сброс видимости" был сброшен.';
$string['resetvisibilitysuccess'] = 'Успешно! Все экземпляры блока «Люди» видимы (снова). <br/> Параметр «Сброс видимости» был сброшен.';
$string['setting_hideblock'] = 'Сокрытие блока';
$string['setting_hideblock_desc'] = 'При включенном параметре пользователь может скрывать блок. <br/>
Важное замечание: <br/>
Отключение этого параметра полностью удалит элемент меню «показ / скрытие  блока». Это означает, что пользователи больше не могут скрывать этот блок, но, с другой стороны, блоки, которые уже скрыты, также не смогут больше отображаться. Если вы хотите включить эту функцию, рассмотрите возможность использования следующей функции для сброса видимости для всех экземпляров блока «Люди».';
$string['setting_hideblockheading'] = 'Сокрытие блока';
$string['setting_linkparticipantspage'] = 'Показать ссылку на страницу участника';
$string['setting_linkparticipantspage_desc'] = 'При включении этого параметра в блоке будет показана ссылка на страницу участников курса.';
$string['setting_multipleroles'] = 'Показывать множественные роли';
$string['setting_multipleroles_desc'] = 'Этот параметр позволяет вам контролировать, будут ли пользователи, имеющие более одной из настроенных выше ролей, перечислены в этом блоке один или несколько раз. Если этот параметр отключен, то пользователи будут перечислены только с первой ролью, которую они имеют в соответствии с глобальным порядком сортировки ролей. При включенном параметре пользователи будут перечислены с каждой из своих ролей.';
$string['setting_participantspageheading'] = 'Страница участников';
$string['setting_resetvisibility'] = 'Сброс видимости';
$string['setting_resetvisibility_desc'] = 'При установке флажка отображение всех существующих экземпляров  блока «Люди» будет установлено на видимость (снова). <br/>
Пожалуйста, обратите внимание: <br/>
После сохранения этой опции будут запущены операции базы данных для сброса видимости, и этот флажок будет снят снова. При следующем включении и сохранении этой функции операции базы данных снова будут сброшены.';
$string['setting_roles'] = 'Показать эти роли';
$string['setting_roles_desc'] = 'Этот параметр позволяет вам контролировать, какие пользователи отображаются в этом блоке. У пользователей, перечисляемых в блоке, должна быть хотя бы одна из этих ролей в курсе.';
$string['setting_rolesheading'] = 'Роли';
