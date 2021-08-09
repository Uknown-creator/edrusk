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
 * Strings for component 'repository_onedrive', language 'ru', version '4.0'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Доступ';
$string['both'] = 'Внутренние и внешние';
$string['cachedef_folder'] = 'ID файлов OneDrive для папок в системной учетной записи';
$string['configplugin'] = 'Настройка плагина OneDrive';
$string['confirmimportskydrive'] = 'Вы действительно хотите импортировать все файлы из хранилища Microsoft SkyDrive в хранилище Microsoft OneDrive? Для продолжения работы хранилище Microsoft OneDrive должно быть настроено для работы с импортированными файлами. Предупреждение: Это действие не может быть отменено!';
$string['defaultreturntype'] = 'Возвращаемый тип по умолчанию';
$string['external'] = 'Внешние (только ссылки, хранящиеся в Moodle)';
$string['fileoptions'] = 'Здесь настраиваются типы и значения по умолчанию для возвращаемых файлов. Обратите внимание, что все файлы, связанные извне, будут обновляться, чтобы владельцем была системная учетная запись Moodle.';
$string['importskydrivefiles'] = 'Импорт файлов из хранилища Microsoft SkyDrive';
$string['internal'] = 'Внутренние (файлы, хранящиеся в Moodle)';
$string['issuer'] = 'Служба OAuth 2';
$string['issuer_help'] = 'Выберите службу OAuth 2, настроенную для работы с API OneDrive. Если служба еще не существует, вам необходимо ее создать.';
$string['mysitenotfound'] = 'Вы никогда раньше не заходили в OneDrive. Вы должны войти в OneDrive хотя бы один раз, прежде чем сможете использовать его с Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Ссылка на конфигурацию служб OAuth 2"> Конфигурация служб OAuth 2</a>';
$string['onedrive:view'] = 'Просматривать хранилище OneDrive';
$string['owner'] = 'Владелец:  {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'Репозиторий Microsoft OneDrive хранит временные права доступа и передает данные пользователя из Moodle в удаленную систему.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'Microsoft OneDrive с разрешенным временным доступом элементам по ID.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'ID разрешения для временного доступа Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Дата и время создания временного доступа к Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'Дата и время изменения разрешения временного доступа Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'ID пользователя, изменяющего временное право доступа к Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Поисковый текстовый запрос пользователя хранилища. Microsoft OneDrive.';
$string['removetempaccesstask'] = 'Удаление временного доступа для записи из контролируемых ссылок';
$string['searchfor'] = 'Поиск {$a}';
$string['servicenotenabled'] = 'Доступ не настроен.';
$string['skydrivefilesexist'] = 'Найдены файлы в хранилище Microsoft SkyDrive. Это хранилище устарело, однако файлы могут быть импортированы в хранилище Microsoft OneDrive.';
$string['skydrivefilesimported'] = 'Все файлы были импортированы из хранилище Microsoft SkyDrive.';
$string['skydrivefilesnotimported'] = 'Некоторые файлы не могут быть импортированы из хранилища Microsoft SkyDrive.';
$string['supportedreturntypes'] = 'Поддерживаемые файлы';
