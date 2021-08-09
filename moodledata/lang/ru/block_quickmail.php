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
 * Strings for component 'block_quickmail', language 'ru', version '4.0'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['allowstudents'] = 'Разрешить студентам использовать Быструю почту';
$string['alternate'] = 'Альтернативные электронные почты';
$string['alternate_body'] = '<p> {$a->fullname} добавил(а) адрес {$a->address} в качестве альтернативного адреса для курса {$a->course}. </p><p> Это письмо используется для проверки, что этот адрес существует, и владелец этого адреса имеет соответствующие полномочия в Moodle. </p><p> Если вы хотите завершить проверку, то перейдите в браузере по следующему адресу: {$a->url}. </p><p> Если содержание этого письма для вас не имеет никакого смысла, то, возможно, вы получили его по ошибке. Просто удалите это письмо. </p> Спасибо.';
$string['alternate_new'] = 'Добавить альтернативный адрес';
$string['alternate_subject'] = 'Альтернативный адрес подтвержден';
$string['backup_history'] = 'Включить историю Быстрой почты';
$string['drafts'] = 'Просмотреть черновики';
$string['no_alternates'] = 'Нет альтернативной электронной почты для {$a->fullname}.';
$string['no_drafts'] = 'У вас нет черновиков электронных писем';
$string['overwrite_history'] = 'Переписать историю Быстрой почты';
$string['pluginname'] = 'Быстрая почта';
$string['prepend_class'] = 'Прикрепить Название курса';
$string['prepend_class_desc'] = 'Прикрепить короткое название курса к письму';
$string['quickmail:addinstance'] = 'Добавлять новый блок Быстрая почта';
$string['quickmail:allowalternate'] = 'Добавлять альтернативный адрес электронной почты для разных курсов.';
$string['quickmail:canconfig'] = 'Настраивать Быструю почту';
$string['quickmail:cansend'] = 'Отправлять электронную почту через Быструю почту';
$string['receipt'] = 'Получить копию';
$string['receipt_help'] = 'Получать копии отправляемой электронной почты';
$string['restore_history'] = 'Восстановление истории Быстрой почты';
$string['save_draft'] = 'Сохранить черновик';
$string['signature'] = 'Подписи';
$string['strictferpa'] = 'Всегда Отдельные группы';
$string['subject'] = 'Тема';
$string['title'] = 'Название';
