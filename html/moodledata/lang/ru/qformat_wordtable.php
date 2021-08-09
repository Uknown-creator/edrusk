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
 * Strings for component 'qformat_wordtable', language 'ru', version '3.11'.
 *
 * @package     qformat_wordtable
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Не удается открыть временный файл <b>{$a}</b>';
$string['cannotreadzippedfile'] = 'Не удается прочитать заархивированный файл <b>{$a}</b>';
$string['cannotwritetotempfile'] = 'Не удается записать во временный файл <b>{$a}</b>';
$string['cloze_distractor_column_label'] = 'Дистракторы';
$string['cloze_feedback_column_label'] = 'Отзыв на дистрактор';
$string['cloze_instructions'] = 'Используйте <strong>жирный</strong> шрифт для вопросов Множественного выбора, <em>курсив</em> - для Короткого ответа, <u>подчеркивание</u> - для Числовых вопросов.';
$string['cloze_mcformat_label'] = 'Ориентация (ВС - выпадающий список; В - вертикальная; Г - горизонтальная)';
$string['description_instructions'] = 'Это не вопрос. Это способ добавить некоторые инструкции, рубрику или другое содержимое к элементу курса. Принцип работы схож с метками, которые используются для добавления содержимого на страницу курса.';
$string['docnotsupported'] = 'Файлы в формате Word 2003 не поддерживаются: <b>{$a}</b>, используйте Moodle2Word 3.x';
$string['essay_instructions'] = 'Ответ в форме нескольких предложений или абзацев. Оценивается вручную.';
$string['export_type_set'] = 'Тип экспорта вопроса был установлен на';
$string['htmldocnotsupported'] = 'Неверный формат Word: пожалуйста, используйте <i>Файл > Сохранить как...</i> чтобы сохранить <b>{$a}</b> в собственном формате Word 2010 (.docx) и импортируйте снова';
$string['htmlnotsupported'] = 'Файлы в формате HTML не поддерживаются: <b>{$a}</b>';
$string['interface_language_mismatch'] = 'Не удалось импортировать вопросы, поскольку язык меток в файле Word не совпадает с языком интерфейса Moodle.';
$string['multichoice_instructions'] = 'Ответ в формате выбора одного или нескольких вариантов из заранее определенного списка.';
$string['noquestions'] = 'Вопросы для экспорта не найдены';
$string['pluginname'] = 'Формат таблицы Word 2010 (верстка)';
$string['pluginname_help'] = 'Конвертирование файлов Microsoft Word 2010 в формат Moodle Question XML для импорта и конвертирование файлов Moodle Question XML в формат, подходящий для редактирования в Microsoft Word.';
$string['preview_question_not_found'] = 'Вопрос не найден, название/ID курса: {$a}';
$string['privacy:metadata'] = 'Формат вопросов плагина WordTable не сохраняет данные пользователя.';
$string['stylesheetunavailable'] = 'Таблица стилей XSLT <b>{$a}</b> недоступна';
$string['tempfile'] = 'Временный XML файл: <b>{$a}</b>';
$string['templateunavailable'] = 'Шаблон XHTML <b>{$a}</b>, совместимый с Word, недоступен';
$string['transformationfailed'] = 'Не удалось преобразовать XSLT (<b>{$a}</b>)';
$string['truefalse_instructions'] = 'Установить оценку "100" для правильного ответа.';
$string['unsupported_instructions'] = 'Импортирование этого типа вопроса не поддерживается.';
$string['word_about_moodle2word'] = 'О Moodle2Word';
$string['word_about_moodle2word_screentip'] = 'О шаблонах Moodle2Word и плагинах Moodle';
$string['word_addcategory_supertip'] = 'Названия категорий используют стиль "Заголовок 1"';
$string['word_conversionfailed'] = 'Не удалось импортировать вопросы';
$string['word_conversionsucceeded'] = 'Импорт вопросов прошел <b>успешно</br>, <br>нажмите<b>"Закрыть"</b>, чтобы продолжить.';
$string['word_conversionsucceeded2'] = 'Импорт вопросов прошел <b>успешно</br>, для продолжения <br>нажмите кнопку <b>"Продолжить"</b>.';
$string['word_convert_images'] = 'Конвертировать изображения';
$string['word_convert_images_screentip'] = 'Импортировать изображения в экспортированные вопросы';
$string['word_convert_images_supertip'] = 'Вставить изображения в файл Word';
$string['word_currentquestion'] = '(Текущий вопрос)';
$string['word_import_mathtype'] = 'Импортировать изображение MathType';
$string['word_import_mathtype_screentip'] = 'Импортировать изображение MathType Equation';
$string['word_import_mathtype_supertip'] = 'Запустить после команды MathType "Экспорт уравнений"';
$string['word_import_screentip'] = 'Загрузить и импортировать все вопросы на сервер Moodle';
$string['word_login_supertip'] = 'Выбрать собственный сервер Moodle';
$string['word_multiple_answer'] = 'Множественный выбор';
$string['word_new_question_file'] = 'Файл с новыми вопросами';
$string['word_new_question_file_screentip'] = 'Вопросы должны быть сохранены в формате Word 2010 (.docx)';
$string['word_new_question_file_supertip'] = 'Каждый файл Word должен содержать несколько категорий';
$string['word_preview'] = 'Предварительный просмотр текущего вопроса';
$string['word_preview_supertip'] = 'Курсор должен быть внутри таблицы';
$string['word_setunset_assessment_screentip'] = 'Версия вопросов для печати';
$string['word_setunset_assessment_supertip'] = 'Скрыть метаданные вопроса (название, индикаторы правильного ответа, отзыв и т.д.)';
$string['word_setunset_assessment_view'] = 'Установить/сбросить оценочный просмотр';
$string['word_showhide_assessment_screentip'] = 'Показать метаданные вопросов для редактирования, скрыть для просмотра версии для печати';
$string['word_showhide_assessment_supertip'] = 'Показывает или скрывает скрытый текст';
$string['word_showhide_assessment_view'] = 'Показать/скрыть оценочный просмотр';
$string['word_shuffle_screentip'] = 'Перемешать ответы на тестовые вопросы';
$string['word_shuffle_supertip'] = 'Лучше перемешать несколько раз';
$string['word_view'] = 'Просмотр';
$string['wordtable'] = 'Формат таблицы Microsoft Word 2010 (верстка)';
$string['wordtable_help'] = 'Конвертирование файлов Microsoft Word 2010 в формат Moodle Question XML для импорта и конвертирование файлов Moodle Question XML в формат, подходящий для редактирования в Microsoft Word.';
$string['xmlnotsupported'] = 'Файлы в формате XML не поддерживаются: <b>{$a}</b>';
$string['xsltunavailable'] = 'Необходима библиотека XSLT, установленная в PHP, чтобы сохранить этот файл Word';
