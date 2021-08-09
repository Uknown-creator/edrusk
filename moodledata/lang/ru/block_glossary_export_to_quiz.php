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
 * Strings for component 'block_glossary_export_to_quiz', language 'ru', version '4.0'.
 *
 * @package     block_glossary_export_to_quiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allentries'] = 'Все записи';
$string['clicktoexport'] = 'Нажмите, чтобы экспортировать записи этого глоссария в тест (XML)';
$string['concept'] = 'Алфавитный порядок';
$string['ddwtosinstructions'] = 'Перетащите каждый термин в соответствии с его определением.';
$string['emptyglossaries'] = 'Глоссарии этого курса пусты (нет записей)';
$string['emptyglossary'] = 'Этот глоссарий курса пуст (нет записей)';
$string['exportentriestoxml'] = 'Экспорт записей в Тест (XML)';
$string['exportmediafiles'] = 'Экспортировать изображения и аудио/видео-файлы?';
$string['exportmediafiles_help'] = 'Вы хотите экспортировать изображения (аудио, видео), которые могут быть в определениях этого глоссария?
Некоторые типы вопросов не совсем совместимы с частью элементов мультимедиа.';
$string['extrawronganswer'] = 'Добавить еще один неправильный ответ?';
$string['extrawronganswer_help'] = 'Вы хотите добавить дополнительный отвлекающий неправильный ответ к каждому вопросу?';
$string['firstmodified'] = 'Сначала самые старые записи';
$string['gapfillddinstructions'] = 'Выберите из каждого выпадающего списка термин, соответствующий его определению';
$string['generalhelp'] = 'Блок справки';
$string['glossary_export_to_quiz:addinstance'] = 'Добавить новый блок «Экспорт глоссария в тест»';
$string['glossary_export_to_quiz:myaddinstance'] = 'Добавить новый блок «Экспорт глоссария в тест» в Личный кабинет.';
$string['lastmodified'] = 'Сначала самые свежие записи';
$string['limitnum'] = 'Максимальное количество записей для экспорта';
$string['limitnum_help'] = 'Оставьте это поле со значением по умолчанию "0", чтобы экспортировать ВСЕ записи из выбранного Глоссария или Категории.
Эта опция может быть полезна для экспорта ограниченного количества записей из очень больших глоссариев.';
$string['matchinstructions'] = 'Сопоставьте определения и термины';
$string['nbchoices'] = 'Количество вариантов';
$string['nbchoices_help'] = 'Выберите, сколько вариантов ответов вы хотите сделать доступными.';
$string['noglossaries'] = 'В этом курсе нет глоссариев';
$string['notenoughentriesavailable'] = 'Недостаточно доступных записей ({$a->numentries}) для этого типа вопроса (необходимый минимум  записей - {$a->nbchoices}).';
$string['notenoughentriesselected'] = 'Выбрано недостаточно записей ({$a-> numentries}) для этого типа вопроса (необходимый минимум записей - {$a->nbchoices}).';
$string['notyetconfigured'] = '<b>Включите редактирование</b>, чтобы настроить этот блок.';
$string['notyetconfiguredediting'] = 'Нажмите значок Действия, чтобы настроить этот блок.';
$string['numentries'] = 'Экспорт {$a} записей';
$string['numquestions'] = 'и создать {$a} вопросов';
$string['pluginname'] = 'Экспорт глоссария в тест';
$string['pluginname_help'] = 'Щелкните правой кнопкой мыши ссылку <b>Дополнительная справка</b>, чтобы просмотреть документацию Moodle.';
$string['privacy:metadata'] = 'Блок «Экспорт глоссария в тест» не хранит никаких личных данных.';
$string['questiontype_help'] = 'Выберите тип вопроса, в который вы хотите экспортировать записи глоссария.';
$string['random'] = 'Случайный';
$string['selectglossary'] = 'Выберите глоссарий для экспорта';
$string['selectglossary_help'] = 'Выберите из выпадающего списка глоссарий, который вы хотите использовать для экспорта его записей в банк вопросов теста.
Если этот глоссарий содержит категории, вы можете выбрать только одну категорию для экспорта записей.
Чтобы отменить выбор или сбросить блок, просто оставьте выпадающий список в позиции «Выбрать ...».';
$string['shuffleanswers'] = 'Перемешать ответы';
$string['shuffleanswers_help'] = 'Если включено, то порядок вариантов ответов случайным образом перетасовывается для каждой попытки.';
$string['sortingorder'] = 'Порядок сортировки';
$string['sortingorder_help'] = 'Этот параметр определяет порядок сортировки экспортированных записей глоссария при их импорте в банк данных вопросов.
Его можно использовать совместно с Максимальным количеством записей для создания теста с целью проверки последних записей глоссария (особенно большого).';
