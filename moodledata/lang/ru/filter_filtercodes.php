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
 * Strings for component 'filter_filtercodes', language 'ru', version '4.0'.
 *
 * @package     filter_filtercodes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contentmissing'] = '<h1>Содержимое отсутствует.</h1><p>Пожалуйста, проинформируйте об этом вебмастера.</p>';
$string['disabled_customnav_description'] = '<strong>Обратите внимание на поддержку пользовательского меню</strong> - чтобы включить поддержку FilterCodes в пользовательском меню Вашего сайта Moodle, Вам может потребоваться настроить тему или ядро Moodle. <a href="https://github.com/michael-milette/moodle-filter_filtercodes#can-i-use-filtercodes-in-moodles-custom-menus">Информация о том, как добавить поддержку FilterCodes в пользовательские меню</a>.';
$string['enable_customnav'] = 'Поддержка пользовательской навигации';
$string['enable_scrape'] = 'Поддержка тегов очистки';
$string['enable_scrape_description'] = 'Включить тег очистки.';
$string['escapebraces'] = 'Выходные теги';
$string['escapebraces_desc'] = 'Когда этот параметр включен, Вы сможете отображать теги FilterCode без их интерпретации, заключив свой тег в [квадратные скобки]. Это может быть очень полезно при создании документации FilterCodes для преподавателей и создателей курсов на вашем сайте Moodle. <br> <br> Пример: [{fullname}] не будет отображать полное имя пользователя, а вместо него отобразит тег {fullname} без квадратных скобок.';
$string['privacy:metadata'] = 'Плагин Filter Codes не сохраняет никаких личных данных ни о каких пользователях.';
