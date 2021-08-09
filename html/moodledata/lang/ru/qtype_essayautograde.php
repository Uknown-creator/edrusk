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
 * Strings for component 'qtype_essayautograde', language 'ru', version '3.11'.
 *
 * @package     qtype_essayautograde
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['showtextstats'] = 'Показать статистику по тексту?';
$string['showtextstats_help'] = 'Если эта опция включена, будет отображаться статистика о тексте.';
$string['showtostudentsonly'] = 'Да, показывать только студентам';
$string['showtoteachersandstudents'] = 'Да, показывать преподавателям и студентам';
$string['showtoteachersonly'] = 'Да, показывать только преподавателям';
$string['targetphrase'] = 'Целевых фраз [{no}]';
$string['targetphrase_help'] = 'Поставьте оценку, если эта целевая фраза имеется в эссе.

> ** Например: ** Если используется [Окончательно], поставьте [10% от оценки вопроса.]

Целевая фраза может представлять собой отдельную фразу или список фраз, разделенных запятой "," или словом "ИЛИ" (верхний регистр).

> ** Например: ** Если используется [Наконец ИЛИ В конце], поставьте [10% от оценки вопроса.]

Вопросительный знак "?" в тексте соответствует любому отдельному символу, а звездочка "*" соответствует произвольному числу символов (включая нулевые символы).

> ** Например: ** Если используется [Сначала \\ * Затем \\ * Окончательно], поставьте [50% от оценки вопроса.]';
$string['targetphrases'] = 'Целевые фразы';
$string['textstatistics'] = 'Текстовая статистика';
$string['textstatitems'] = 'Элементы статистики';
$string['textstatitems_help'] = 'Выберите здесь любые элементы, которые вы хотите учитывать в текстовой статистике, отображающиеся на страницах оценки и обзора.';
$string['uniquewords'] = 'Уникальные слова';
$string['words'] = 'Слов';
$string['wordspersentence'] = 'Слов в предложении';
