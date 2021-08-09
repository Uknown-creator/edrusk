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
 * Strings for component 'tool_opencast', language 'ru', version '4.0'.
 *
 * @package     tool_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apipassword'] = 'Пароль для пользователя API';
$string['apipassworddesc'] = 'Установите пароль для суперпользователя, который делает вызовы API.';
$string['apipasswordempty'] = 'Пароль для пользователя API установлен неправильно, перейдите в настройки инструмента opencast, чтобы исправить это';
$string['apiurl'] = 'Opencast API url';
$string['apiurldesc'] = 'Настройте базовый URL адрес системы Opencast, например: opencast.example.com';
$string['apiurlempty'] = 'URL для Opencast API настроен неправильно, перейдите в настройки инструмента opencast, чтобы исправить это';
$string['apiusername'] = 'Имя пользователя для вызовов API';
$string['apiusernamedesc'] = 'Для всех вызовов API Moodle использует этот пользователь. Авторизация осуществляется путем добавления подходящих ролей в вызов';
$string['apiusernameempty'] = 'Имя пользователя для пользователя Opencast API настроено неправильно, перейдите в настройки инструмента opencast, чтобы исправить это';
$string['connecttimeout'] = 'Тайм-аут соединения';
$string['connecttimeoutdesc'] = 'Установите время в секундах истечения времени ожидания, пока Moodle пытается подключиться к opencast';
$string['needphp55orhigher'] = 'Требуется версия PHP 5.5 или выше';
$string['opencast:externalapi'] = 'Доступ к веб-сервисам tool_opencast';
$string['opencast:instructor'] = 'Дает роль инструктора в opencast';
$string['opencast:learner'] = 'Дает роль ученика в opencast';
$string['pluginname'] = 'Opencast API';
$string['privacy:metadata'] = 'Инструмент администратора предоставляет только конечные точки API и общие настройки для набора плагинов opencast.
Сохраняет, к какому курсу относится серия opencast, но не хранит никаких персональных данных.';
$string['serverconnectionerror'] = 'Возникла проблема с подключением к серверу opencast. Пожалуйста, проверьте свои учетные данные и настройки сети.';
$string['wrongmimetypedetected'] = 'Обнаружен неправильный тип файла при попытке загрузить {$a->filename} из курса {$a->coursename},
     Вы можете загружать только видео-файлы!';
