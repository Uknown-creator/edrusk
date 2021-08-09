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
 * Strings for component 'fileconverter_onedrive', language 'ru', version '4.0'.
 *
 * @package     fileconverter_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disabled'] = 'Отключен';
$string['downloadfailed'] = 'Moodle не может загрузить конвертированный файл от Microsoft.';
$string['issuer'] = 'Сервис OAuth 2';
$string['issuer_help'] = 'Служба OAuth 2 используется для доступа к Microsoft OneDrive.';
$string['nodownloadurl'] = 'API конвертирования Microsoft Graph не отправил URL-адрес конвертированному документу';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:fileconverter_onedrive:externalpurpose'] = 'Эта информация отправляется в Microsoft OneDrive API для конвертирования файла в альтернативный формат. Файл временно хранится на диске Microsoft OneDrive и удаляется после завершения преобразования.';
$string['privacy:metadata:fileconverter_onedrive:filecontent'] = 'Содержимое файла.';
$string['privacy:metadata:fileconverter_onedrive:params'] = 'Параметры запроса передаются в Microsoft OneDrive API.';
$string['test_conversion'] = 'Тестирование конвертации документов';
$string['test_conversionnotready'] = 'Этот конвертер документов не настроен должным образом.';
$string['test_conversionready'] = 'Этот конвертер документов настроен правильно.';
$string['test_converter'] = 'Проверьте, работает ли этот конвертер правильно.';
$string['test_issuerinvalid'] = 'Служба OAuth в настройках конвертера документов имеет недопустимое значение.';
$string['test_issuernotconnected'] = 'Служба OAuth, установленная в настройках конвертера документов, не имеет подключенной системной учетной записи.';
$string['test_issuernotenabled'] = 'Служба OAuth, установленная в настройках конвертера документов не включена.';
$string['test_issuernotset'] = 'Служба OAuth должна быть установлена в настройках конвертера документов.';
$string['uploadfailed'] = 'Файл не был загружен в Microsoft OneDrive.';
