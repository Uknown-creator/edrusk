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
 * Strings for component 'report_benchmark', language 'ru', version '3.11'.
 *
 * @package     report_benchmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Тест производительности системы';
$string['benchfail'] = '<b>Осторожно!</b><br/>Кажется, у вашего Moodle есть некоторые трудности.';
$string['benchmark'] = 'Тест производительности';
$string['benchmark:view'] = 'Посмотреть отчет о тестах';
$string['benchshare'] = 'Поделитесь своим результатом на форуме';
$string['benchsuccess'] = '<b>Поздравляем!</b><br/>Кажется, ваш Moodle работает отлично.';
$string['cloadmoreinfo'] = 'Запустите файл конфигурации &laquo;config.php&raquo;';
$string['cloadname'] = 'Время загрузки Moodle';
$string['coursereadmoreinfo'] = 'Проверка скорости чтения из курса';
$string['coursereadname'] = 'Чтение курса';
$string['coursewritemoreinfo'] = 'Проверка скорости базы данных записи в курс';
$string['coursewritename'] = 'Курс, проверяемый на запись';
$string['description'] = 'Описание';
$string['during'] = 'Время в секундах';
$string['filereadmoreinfo'] = 'Проверка скорости чтения из временной папки Moodle';
$string['filereadname'] = 'Чтение файлов';
$string['filewritemoreinfo'] = 'Проверка скорости записи во временную папку Moodle';
$string['filewritename'] = 'Создание файлов';
$string['info'] = 'Этот тест должен длиться менее 1 минуты и будет прерван через 2 минуты. Пожалуйста, подождите, пока не появятся результаты.';
$string['infoaverage'] = 'Рекомендуется пройти этот тест несколько раз, чтобы получить среднее значение.';
$string['infodisclaimer'] = 'Не рекомендуется запускать этот тест на работающей системе.';
$string['infodisclamer'] = 'Не рекомендуется запускать этот тест на работающей системе.';
$string['limit'] = 'Допустимый предел';
$string['loginguestmoreinfo'] = 'Измеряет время загрузки страницы входа гостевой учетной записи';
$string['loginguestname'] = 'Время входа для гостевой учетной записи';
$string['loginusermoreinfo'] = 'Измеряет время загрузки поддельной учетной записи пользователя';
$string['loginusername'] = 'Время входа для поддельной учетной записи пользователя';
$string['modulename'] = 'Тест производительности Moodle';
$string['modulenameplural'] = 'Тесты производительности Moodle';
$string['over'] = 'Критический предел';
$string['pluginname'] = 'Тест производительности Moodle';
$string['points'] = '{$a} очков';
$string['privacy:no_data_reason'] = 'Отчеты плагинов тестов сами не хранят данные. Это просто доступ к данным из других плагинов';
$string['processormoreinfo'] = 'Вызов цикличной функции для проверки скорости процессора';
$string['processorname'] = 'Вызов функции цикла';
$string['querytype1moreinfo'] = 'Проверка скорости базы данных при выполнении сложного SQL-запроса';
$string['querytype1name'] = 'Сложный SQL-запрос (n°1)';
$string['querytype2moreinfo'] = 'Проверка скорости базы данных при выполнении сложного SQL-запроса';
$string['querytype2name'] = 'Сложный SQL-запрос (n°2)';
$string['redo'] = 'Запустить тест снова';
$string['score'] = 'Оценка';
$string['scoremsg'] = 'Оценка теста производительности';
$string['seconde'] = '{$a} с';
$string['slowdatabaselabel'] = 'База данных кажется слишком медленной.';
$string['slowdatabasesolution'] = '<ul><li>Проверьте <a href="http://dev.mysql.com/doc/refman/5.7/en/mysqlcheck.html" target="_blank">целостность базы данных</a></li><li>Оптимизируйте <a href="http://dev.mysql.com/doc/refman/5.7/en/server-parameters.html" target="_blank">базу данных</a></li></ul>';
$string['slowharddrivelabel'] = 'Жесткий диск кажется слишком медленным.';
$string['slowharddrivesolution'] = '<ul><li>Проверьте состояние жесткого диска и/или временной папки</li><li>Смените жесткий диск или временную папку</li></ul>';
$string['slowprocessorlabel'] = 'Процессор кажется слишком медленным.';
$string['slowprocessorsolution'] = '<ul><li>Убедитесь, что конфигурация вашего оборудования соответствует требованиям для запуска Moodle.</li></ul>';
$string['slowserverlabel'] = 'Веб-сервер кажется слишком медленным.';
$string['slowserversolution'] = '<ul><li>Установите на своем Apache режим <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">мультипроцессинга</a> или переключитесь на <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li>Если Moodle установлен на локальном компьютере, попробуйте отключить антивирус. Делайте это с осторожностью.</li></ul>';
$string['slowweblabel'] = 'Страница входа слишком медленная для загрузки.';
$string['slowwebsolution'] = '<ul><li>Очистить кеш Moodle</a></li></ul>';
$string['start'] = 'Начать тест';
$string['total'] = 'Общее время';
