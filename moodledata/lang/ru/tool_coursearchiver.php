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
 * Strings for component 'tool_coursearchiver', language 'ru', version '4.0'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anycategory'] = 'Любая категория';
$string['archive'] = 'Архив Курсов';
$string['archivedeletesetting'] = 'Отсрочка удаления архива';
$string['archivedeletesetting_help'] = 'На сколько дней будет отложено удаление архива?';
$string['archiveemail'] = 'Отправить "Курс для архивирования" по электронной почте';
$string['archivelimit'] = 'Ограничитель поиска в архиве';
$string['archivelimitstring'] = 'Показываемый максимум';
$string['archivelist'] = 'Архив курса';
$string['archivelocation'] = 'Подкаталог архива курса';
$string['archiverecoverform'] = 'В ожидании удаления';
$string['archivewarningemailsetting'] = 'Предупреждение по электронной почте для архивирования курса по умолчанию';
$string['archivewarningsubject'] = 'Примечание: Курсы будут заархивированы в ближайшее время.';
$string['back'] = 'Начать сначала';
$string['cannotdeletecoursenotexist'] = 'Невозможно удалить курс, который не существует';
$string['category'] = 'Категория';
$string['cli_cannot_continue'] = '\\nОСТАНОВЛЕНО: недостаточно данных для продолжения.\\n';
$string['cli_question_archive'] = 'Архивировать и удалить эти курсы ({$a})?';
$string['cli_question_archiveemail'] = 'Отправить этим {$a} пользователям письмо "Курс в архиве" ?';
$string['cli_question_delete'] = 'Удалить эти курсы ({$a})?';
$string['cli_question_hide'] = 'Скрыть эти курсы ({$a})?';
$string['cli_question_hideemail'] = 'Отправить этим {$a} пользователям письмо «Курс будет скрыт»?';
$string['confirm'] = 'Продолжить';
$string['confirmdelete'] = 'Вы уверены, что хотите удалить?';
$string['confirmmessage'] = 'Вы уверены, что хотите {$a}';
$string['confirmmessagearchive'] = 'архивировать и удалить эти курсы ({$a})?';
$string['confirmmessagearchiveemail'] = 'отправить электронные письма владельцам этих курсов ({$a})?';
$string['confirmmessagedelete'] = 'полностью удалить эти курсы ({$a})?';
$string['confirmmessagehide'] = 'скрыть эти курсы ({$a})?';
$string['confirmmessagehideemail'] = 'отправить электронное письмо владельцам этих курсов ({$a})?';
$string['confirmrestore'] = 'Восстановить в ожидании удаления архива?';
$string['course_skipped'] = '{$a->fullname} будет пропущен в течение следующих {$a->optoutmonths} месяцев.';
$string['coursearchiver'] = 'Архиватор курсов';
$string['coursearchiver_settings'] = 'Настройки архиватора курса';
$string['coursearchiverpath'] = 'Папка для хранения архивных курсов';
$string['coursedeleted'] = 'Курс удален';
$string['coursedeletionnotallowed'] = 'Удаление курса запрещено';
$string['coursefullname'] = 'Полное имя курса';
$string['courseid'] = 'ID курса';
$string['courseidnum'] = 'Номер ID курса';
$string['courseselector'] = 'Результаты поиска курса';
$string['courseshortname'] = 'Краткое имя курса';
$string['courseteacher'] = 'Логин/электронная почта учителя';
$string['createdbefore'] = 'Создано до';
$string['crontask'] = 'Задание по удалению архива курса';
$string['delete'] = 'Удалить курсы';
$string['deletedarchiveemails'] = 'Адреса электронной почты учителя';
$string['deselectall'] = 'Отменить все';
$string['email'] = 'Отправить электронное письмо';
$string['emailselector'] = 'Пользователи выбраны для получения писем.';
$string['empty'] = 'пустой';
$string['emptycourse'] = 'Пустой курс';
$string['emptyonly'] = 'Вернуть только пустые курсы';
$string['error_key'] = 'Неверный ключ безопасности.';
$string['error_nocourseid'] = 'Запись курса не содержит ID';
$string['errorarchivefile'] = 'Файл архива курса не существует.';
$string['errorarchivepath'] = 'Не удалось создать путь к архиву.';
$string['errorarchivingcourse'] = 'Курс ({$a->id}) {$a->fullname} не удалось заархивировать.';
$string['errorbackup'] = 'Ошибка резервного копирования.';
$string['errordeletingcourse'] = 'Курс ({$a->id}) {$a->fullname} не удалось удалить.';
$string['erroremptysearch'] = 'Нет критериев поиска.';
$string['errorhidingcourse'] = 'Курс ({$a->id}) {$a->fullname} не удалось скрыть.';
$string['errorinsufficientdata'] = 'Недостаточно информации для выполнения этого действия';
$string['errornoform'] = 'Отсутствует форма.';
$string['errornonnumericid'] = 'ID курса должен быть числовым';
$string['errors'] = 'Ошибки';
$string['errors_count'] = 'Ошибки: {$a}';
$string['errorsendingemail'] = 'Не удалось отправить письмо пользователю {$a->firstname} {$a->lastname} ({$a->email}).';
$string['errorvalidarchive'] = 'Недопустимый файл резервной копии.';
$string['hide'] = 'Скрыть курсы';
$string['hideemail'] = 'Отправить "Курс, который будет скрыт" на почту';
$string['includesubcat'] = 'Включить курсы в подкатегории';
$string['never'] = 'Никогда';
$string['nocoursesfound'] = 'Не найдено ни одного курса.';
$string['notices'] = 'Уведомления';
$string['notices_count'] = 'Уведомления: {$a}';
$string['status'] = 'Статус';
