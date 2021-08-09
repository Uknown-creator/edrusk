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
 * Strings for component 'report_coursesize', language 'ru', version '3.11'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupsize'] = 'Размер резервной копии';
$string['catsystembackupuse'] = 'Системные файлы и категории, используемые резервной копией - {$a}.';
$string['catsystemuse'] = 'Системные файлы и категории, используемые вне курсов и не являющиеся пользовательскими - {$a}.';
$string['coursebackupbytes'] = 'Для резервного копирования курса {$a->shortname} используется {$a->backupbytes} байт';
$string['coursebytes'] = 'Курсом {$a->shortname} используется {$a->bytes} байт';
$string['coursereport'] = 'Сводка типов плагинов. ПРИМЕЧАНИЕ. Перечень может быть меньше, чем в основном списке курсов, и, вероятно, является более точным.';
$string['coursesize'] = 'Размер курса';
$string['coursesize:view'] = 'Просматривать отчет о размере курса';
$string['coursesize_desc'] = '<p>Этот отчет содержит только приблизительные значения. Если файл  несколько раз использовался в курсе или в нескольких курсах, отчет учитывает каждый экземпляр, хотя Moodle хранит на диске только одну физическую версию.</p>';
$string['coursesummary'] = '(посмотреть статистику)';
$string['diskusage'] = 'Всего';
$string['emptycourseshidden'] = 'Курсы, которые не используют файловые хранилища, были исключены из этого отчета.';
$string['exportcsv'] = 'Export CSV';
$string['nouserfiles'] = 'Пользовательских файлов нет в списке.';
$string['pluginname'] = 'Размер курса';
$string['privacy:metadata'] = 'Плагин «Размер курса» не хранит никаких личных данных.';
$string['sharedusage'] = 'Совместное использование';
$string['sharedusagecourse'] = 'Приблизительно {$a} используется совместно с другими курсами.';
$string['sitefilesusage'] = 'Отчет об использовании файлов';
$string['sizepermitted'] = '(Возможно использовать {$a} Мб)';
$string['sizerecorded'] = '(Записано {$a})';
$string['totalsitedata'] = 'Всего использовано на сайте: {$a}';
$string['userstopnum'] = 'Популярные пользователи (ТОП-{$a})';
