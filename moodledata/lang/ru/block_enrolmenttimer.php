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
 * Strings for component 'block_enrolmenttimer', language 'ru', version '4.0'.
 *
 * @package     block_enrolmenttimer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activecountdown'] = 'Активный обратный отсчет';
$string['activecountdown_help'] = 'Активно отсчитывайте оставшееся время, когда студент должен получить доступ к курсу, используя JavaScript';
$string['completionpercentage'] = 'Процент уведомления';
$string['completionpercentage_help'] = 'Это процент, который студент должен получить в «Итоговом курсе», чтобы ему было отправлено электронное письмо о завершении.';
$string['completionsmessage'] = 'Письмо по электронной почте о завершении курса';
$string['completionsmessage_help'] = 'Отправляемое письмо с поздравлением студента с окончанием курса. Здесь вы можете использовать следующие настройки: [[user_name]] [[course_name]]';
$string['completionsmessagechk'] = 'Включить отправку письма по электронной почте о завершении курса';
$string['completionsmessagechk_help'] = 'Включает / отключает электронное письмо о завершении курса';
$string['daystoalertenrolmentend'] = 'Дней до оповещения';
$string['daystoalertenrolmentend_help'] = 'Количество дней до окончания обучения, когда отправляется оповещение по электронной почте.';
$string['displayNothingNoDateSet'] = 'Скрыть блок (дата окончания курса не установлена)';
$string['displayNothingNoDateSet_help'] = 'Скрывает блок для пользователей, у которых не задана дата окончания доступа к курсу. Если этот параметр отключен, студентам будет показано сообщение о том, что дата окончания доступа к курсу отсутствует';
$string['displayTextCounter'] = 'Показать текстовый счетчик';
$string['displayTextCounter_help'] = 'Отображает текстовый счетчик, который находится ниже основного счетчика';
$string['displayUnitLabels'] = 'Показать метки элементов';
$string['displayUnitLabels_help'] = 'Отображает каждый элемент ниже основного счетчика';
$string['emailsubject'] = 'Тема электронного письма';
$string['emailsubject_completion_default'] = 'Курс завершен';
$string['emailsubject_expiring_default'] = 'Срок обучения истекает';
$string['emailsubject_help'] = 'Тема письма, которое будет отправлено пользователю';
$string['enrolmenttimer'] = 'Таймер доступа к курсу';
$string['enrolmenttimer:addinstance'] = 'Добавлять новый блок  «Таймер доступа к курсу»';
$string['expirytext'] = 'до истечения записи на курс';
$string['forceDefaults'] = 'Принудительно установить значения по умолчанию';
$string['forceDefaults_help'] = 'Отключает возможность для учителей изменять настройки для каждого экземпляра блока';
$string['forceTwoDigits'] = '2 цифры';
$string['forceTwoDigits_help'] = 'Всегда показывать как минимум 2 цифры (например, 01 час осталось)';
$string['instance_title'] = 'Установите заголовок этого блока';
$string['key_days'] = 'дней';
$string['key_hours'] = 'часов';
$string['key_minutes'] = 'минут';
$string['key_months'] = 'месяцев';
$string['key_seconds'] = 'секунд';
$string['key_weeks'] = 'недель';
$string['key_years'] = 'лет';
$string['noDateSet'] = 'Ваш доступ не истекает';
$string['pluginname'] = 'Таймер доступа к курсу';
$string['privacy:metadata'] = 'Блок таймера доступа только обрабатывает пользовательские данные.';
$string['settings_general'] = 'Общие настройки';
$string['settings_notifications_alert'] = 'Настройки уведомлений по электронной почте';
$string['settings_notifications_completion'] = 'Настройки уведомлений по электронной почте о завершении доступа';
$string['settings_notifications_defaults'] = 'Установить значения по умолчанию для настроек';
$string['timeleftmessage'] = 'Сообщение об оставшемся времени';
$string['timeleftmessage_help'] = 'Электронное письмо, которое будет отправлено студенту с указанием количества времени, оставшегося для обучения на курсе. Например, осталось 10 дней. Здесь вы можете использовать следующие настройки; [[user_name]] [[course_name]] [[days_to_alert]]';
$string['timeleftmessagechk'] = 'Включить электронное письмо с предупреждением о времени доступа';
$string['timeleftmessagechk_help'] = 'Включает / отключает оповещение по электронной почте';
