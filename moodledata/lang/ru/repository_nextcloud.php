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
 * Strings for component 'repository_nextcloud', language 'ru', version '4.0'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'внутренний и внешний';
$string['cannotconnect'] = 'Пользователь не может быть аутентифицирован. Пожалуйста, войдите в систему и загрузите файл.';
$string['chooseissuer'] = 'Эмитент';
$string['chooseissuer_help'] = 'Чтобы добавить нового эмитента, перейдите в Администрирование сайта / Сервер / Службы OAuth 2.';
$string['configplugin'] = 'Конфигурация хранилища Nextcloud';
$string['configuration_exception'] = 'Произошла ошибка в конфигурации клиента OAuth 2: {$a}';
$string['contactadminwith'] = 'Запрошенное действие не может быть выполнено. Если это происходит неоднократно, обратитесь к администратору сайта со следующей дополнительной информацией: <br>"<i>{$a}</i>".';
$string['couldnotmove'] = 'Запрошенный файл не удалось переместить в папку {$a}.';
$string['endpointnotdefined'] = 'Конечная точка {$a} не определена.';
$string['external'] = 'Внешний (в Moodle хранятся только ссылки)';
$string['filenotaccessed'] = 'Запрошенный файл не доступен. Проверьте, что вы вошли с нужным аккаунтом и правильно выбрали файл.';
$string['fileoptions'] = 'Здесь можно настроить типы и значения по умолчанию для возвращаемых файлов. Обратите внимание, что все файлы, связанные  ссылками с внешними, будут обновлены, так как владельцем является системная учетная запись Moodle.';
$string['foldername'] = 'Имя папки, созданной в личном пространстве пользователей Nextcloud, в которой хранятся все ссылки с контролируемым доступом.';
$string['foldername_help'] = 'Чтобы пользователи могли находить файлы, к которым им предоставлен доступ, общие ресурсы сохраняются в определенной папке.

Этот параметр определяет имя папки. Рекомендуется выбрать имя, связанное с вашим сайтом Moodle.';
$string['internal'] = 'Внутренний (файлы, хранящиеся в Moodle)';
$string['invalidresponse'] = 'Неверный ответ сервера.';
$string['issuervalidation_invalid'] = 'В настоящее время эмитент {$a} активен, однако он не обеспечивает все необходимые конечные точки. Хранилище работать не будет.';
$string['issuervalidation_valid'] = 'В настоящее время эмитент {$a} активен.';
$string['issuervalidation_without'] = 'Вы еще не выбрали сервер Nextcloud в качестве эмитента OAuth 2.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Просматривать Nextcloud';
$string['no_right_issuers'] = 'Ни один из существующих эмитентов не реализует все необходимые конечные точки. Пожалуйста, зарегистрируйте подходящего эмитента.';
$string['noclientconnection'] = 'Клиенты OAuth не могут быть подключены.';
$string['notauthorized'] = 'У вас нет прав на выполнение этого запроса. Убедитесь, что вы авторизованы с нужной учетной записью.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Ссылка на конфигурацию служб OAuth 2"> Конфигурация служб OAuth 2</a>';
$string['pathnotcreated'] = 'Путь к папке {$a} не может быть создан системной учетной записью.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Хранилище Nextcloud';
$string['privacy:metadata'] = 'Плагин Хранилище Nextcloud не хранит никаких личных данных и не передает данные пользователя в отдаленную систему.';
$string['request_exception'] = 'Запрос к {$a->instance} не выполнен. {$a->errormessage}';
$string['requestnotexecuted'] = 'Запрос не может быть выполнен. Если это происходит неоднократно, обратитесь к администратору сайта.';
$string['right_issuers'] = 'Следующие эмитенты обеспечивают необходимые конечные точки: <br> {$a}';
$string['supportedreturntypes'] = 'Поддерживаемые файлы';
