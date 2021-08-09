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
 * Strings for component 'tool_timezoneimport', language 'ru', version '4.0'.
 *
 * @package     tool_timezoneimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configintrotimezones'] = 'На этой странице можно загрузить новую информацию о часовых поясах мира (включая правила перехода на летнее и зимнее время) и обновить информацию в локальной базе данных.
Эти источники будут проверены в следующем порядке: {$a}Вы хотите обновить информацию о часовых поясах?';
$string['importtimezones'] = 'Обновить полный список часовых поясов';
$string['importtimezonescount'] = 'Импортировано записей: {$a->count}. Источник: {$a->source}.';
$string['importtimezonesfailed'] = 'Источники не найдены! (Плохие новости)';
$string['pluginname'] = 'Обновление часовых поясов';
$string['updatetimezones'] = 'Обновить список часовых поясов';
