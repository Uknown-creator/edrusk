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
 * Strings for component 'enrol_fee', language 'ru', version '4.0'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Назначить роль';
$string['cost'] = 'Оплата за зачисление';
$string['costerror'] = 'Оплата за зачисление должна быть в виде числа';
$string['currency'] = 'Валюта';
$string['defaultrole'] = 'Назначаемая по умолчанию роль';
$string['defaultrole_desc'] = 'Выберите роль, которую нужно назначить пользователям после совершения платежа.';
$string['enrolenddate'] = 'Дата окончания';
$string['enrolenddate_help'] = 'Если этот параметр включен, то пользователи могут быть зачислены только до этой даты.';
$string['enrolenddaterror'] = 'Дата окончания зачисления не может быть раньше даты начала.';
$string['enrolperiod'] = 'Продолжительность зачисления';
$string['enrolperiod_desc'] = 'Срок действия зачисления по умолчанию. Если установлено значение 0, то продолжительность зачисления по умолчанию не ограничена.';
$string['enrolperiod_help'] = 'Срок действия зачисления, начиная с момента зачисления пользователя. Если отключено, то продолжительность зачисления будет неограниченной.';
$string['enrolstartdate'] = 'Дата начала';
$string['enrolstartdate_help'] = 'Если этот параметр включен, то пользователи могут быть зарегистрированы только с этой даты.';
$string['expiredaction'] = 'Действие по истечении срока зачисления';
$string['expiredaction_help'] = 'Выберите действие, которое будет выполняться по истечении срока зачисления пользователя. Обратите внимание, что при отчислении некоторые пользовательские данные и настройки удаляются.';
$string['fee:manage'] = 'Управлять зачислением пользователей';
$string['fee:unenrol'] = 'Отчислять пользователя из курса';
$string['fee:unenrolself'] = 'Отчислять себя из курса';
$string['nocost'] = 'Запись на этот курс бесплатна!';
$string['paymentaccount'] = 'Платежный счет';
$string['paymentaccount_help'] = 'Оплата за зачисление будет производиться на этот счет.';
$string['pluginname'] = 'Зачисление за оплату';
$string['pluginname_desc'] = 'Зачисление за оплату позволяет настраивать платные курсы. Если плата за какой-либо курс установлена равной нулю, то студенту не нужно платить за запись на курс. Существует оплата за весь сайт, которая устанавливается по умолчанию для всего сайта. Затем вы можете установить для каждого курса его индивидуальную настройку. В оплате за курс не учитывается плата за сайт.';
$string['privacy:metadata'] = 'Плагин «Зачисление за оплату» не хранит никаких личных данных.';
$string['purchasedescription'] = 'Запись на курс {$a}';
$string['sendpaymentbutton'] = 'Выберите способ оплаты';
$string['status_desc'] = 'Разрешить по умолчанию пользователям оплачивать зачисление на курс.';
