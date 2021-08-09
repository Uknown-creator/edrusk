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
 * Strings for component 'vpl', language 'ru', version '3.11'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = 'Ошибка компиляции или подготовки выполнения кода.';
$string['about'] = 'О модуле...';
$string['acceptcertificates'] = 'Разрешать самоподписанные сертификаты';
$string['acceptcertificates_description'] = 'Снимите этот флажок, если на сервере-исполнителе кода не используются самоподписанные сертификаты';
$string['acceptcertificatesnote'] = '<p>Вы используете защищённое соединение.</p>
<p>Чтобы установить защищённое соединение с сервером-исполнителем кода, требуется принять сертификаты этого сервера.</p>
<p>При возникновении проблем, вы можете попробовать использовать http-соединение (незащищённое) или другой браузер.</p>
<p>Пожалуйста, перейдите по следующим ссылкам (server #) и примите предлагаемый сертификат</p>';
$string['addfile'] = 'Добавить файл';
$string['advanced'] = 'Дополнительно';
$string['allfiles'] = 'Все файлы';
$string['allsubmissions'] = 'Все ответы';
$string['always_use_ws'] = 'Всегда использовать незащищённый (ws) websocket-протокол';
$string['always_use_wss'] = 'Всегда использовать защищённый (wss) websocket-протокол';
$string['anyfile'] = 'Любой файл';
$string['attemptnumber'] = 'Номер попытки {$a}';
$string['autodetect'] = 'Автоматически определять';
$string['automaticevaluation'] = 'Автоматическое тестирование';
$string['automaticgrading'] = 'Автоматическая оценка';
$string['averageperiods'] = 'Среднее время {$a}';
$string['averagetime'] = 'Среднее время {$a}';
$string['basedon'] = 'Основано на';
$string['basic'] = 'Базовое';
$string['binaryfile'] = 'Двоичный файл';
$string['breakpoint'] = 'Точка останова';
$string['browserupdate'] = 'Пожалуйста, обновите ваш браузер до последней версии<br />или используйте другой - с поддержкой Websocket';
$string['calculate'] = 'Рассчитать';
$string['changesNotSaved'] = 'Изменения не были сохранены';
$string['check_jail_servers'] = 'Проверить серверы-исполнители кода';
$string['check_jail_servers_help'] = '<p>На этой странице проводится проверка и отображается статус серверов-исполнителей кода, используемых в данном модуле.</p>';
$string['clipboard'] = 'Буфер обмена';
$string['closed'] = 'Закрыто';
$string['comments'] = 'Комментарии';
$string['compilation'] = 'Компиляция';
$string['connected'] = 'соединение установлено';
$string['connecting'] = 'идет соединение';
$string['connection_closed'] = 'соединение закрыто';
$string['connection_fail'] = 'не удалось соединиться';
$string['console'] = 'Консоль';
$string['control'] = 'Контроль';
$string['copy'] = 'Копировать';
$string['create_new_file'] = 'Создать новый файл';
$string['crontask'] = 'Фоновая обработка для модуля Virtual Programming Lab';
$string['currentstatus'] = 'Текущее состояние';
$string['cut'] = 'Вырезать';
$string['datesubmitted'] = 'Дата отправки';
$string['debug'] = 'Отладить';
$string['debugging'] = 'Отладка';
$string['debugscript'] = 'Отладка скриптов';
$string['debugscript_help'] = 'Выберите скрипт отладки для использования в этом действии';
$string['defaultexefilesize'] = 'Максимальный размер исполняемого файла по умолчанию';
$string['defaultexememory'] = 'Максимальное количество используемой памяти по умолчанию';
$string['defaultexeprocesses'] = 'Максимальное число процессов по умолчанию';
$string['defaultexetime'] = 'Максимальное время исполнения кода по умолчанию';
$string['defaultfilesize'] = 'Максимальный размер загружаемого файла по умолчанию';
$string['defaultresourcelimits'] = 'Ограничения на ресурсы исполняемых файлов по умолчанию';
$string['delete'] = 'Удалить';
$string['delete_file_fq'] = 'удалить файл \'{\\$a}\'?';
$string['delete_file_q'] = 'Удалить файл?';
$string['deleteallsubmissions'] = 'Удалить все ответы';
$string['depends_on_https'] = 'Использовать ws или wss в зависимости от применяемого протокола - http или https';
$string['description'] = 'Описание';
$string['diff'] = 'разница';
$string['discard_submission_period'] = 'Период удаления ответов';
$string['discard_submission_period_description'] = 'VPL сохраняет версии ответов каждый раз, как только студент нажимает на кнопку «Сохранить». Эта опция позволяет удалить версии, отправленные в пределах заданного периода. Сохраняется последний ответ и, как минимум, один ответ для каждого периода';
$string['download'] = 'Скачать';
$string['downloadallsubmissions'] = 'Скачать все ответы';
$string['downloadsubmissions'] = 'Скачать ответы';
$string['duedate'] = 'Срок сдачи';
$string['edit'] = 'Править';
$string['editing'] = 'Правка';
$string['editortheme'] = 'Тема редактора';
$string['error:inconsistency'] = 'Обнаружено несоответствие \'{\\$a}\'';
$string['error:recordnotdeleted'] = 'Запись не удалена \'{\\$a}\'';
$string['error:recordnotinserted'] = 'Запись не вставлена \'{\\$a}\'';
$string['error:recordnotupdated'] = 'Запись не обновлена \'{\\$a}\'';
$string['error:recursivedefinition'] = 'Рекурсивное определение VPL';
$string['error:uninstalling'] = 'Ошибка при удалении VPL. Возможно, не все данные были удалены';
$string['error:zipnotfound'] = 'ZIP-файл не найден';
$string['evaluate'] = 'Протестировать';
$string['evaluateonsubmission'] = 'Тестировать только при отправке';
$string['evaluating'] = 'Идет тестирование';
$string['evaluation'] = 'Результаты тестирования';
$string['examples'] = 'Примеры';
$string['execution'] = 'Исполнение';
$string['executionfiles'] = 'Исполняемые файлы';
$string['executionfiles_help'] = '<h2>Введение</h2>
<p>Здесь можно задать файлы, необходимые для подготовки исполнения, отладки или оценки ответа: файлы сценариев, программные тестовые коды и файлы данных.</p>
<h2>Сценарий по умолчанию для запуска и отладки</h2>
<p>Если не задать файлы сценариев для запуска или отладки ответов, то система попытается определить используемый язык на основе расширения файла, а затем запустит предопределенный сценарий.
<h2>Автоматическая оценка</h2>
<p>Включает в себя функции, предназначенные для облегчения оценки студенческих ответов.
Позволяет запустить программу студента и сравнить ее вывод с эталонным для заданных входных данных.
Чтобы настроить тестирование, необходимо настроить файл "vpl_evaluate.cases".
<p>Файл "vpl_evaluate.cases" имеет следующий формат:
<ul>
<li> "<strong>case </strong>= Описание": блок заголовка. Не обязательно. Начало описания тестовых данных.</li>
<li> "<strong>input </strong>= текст": блок входных данных. Может быть на нескольких строках. Данные идут до следующего блока.</li>
<li> "<strong>output </strong>= текст": блок выходных данных. Может быть на нескольких строках. Данные идут до следующего блока. В тестируемом случае может быть несколько правильных выходных данных. Существует три типа выходных данных: числа, текст, точное совпадение:
<ul>
<li> <strong>числа</strong>: определяется как последовательность чисел (целых и с плавающей точкой). В выходных данных проверяются только числа, весь остальной текст игнорируется. Для сопоставления чисел с плавающей точкой задается допустимая погрешность</li>
<li> <strong>текст</strong>: определяется как текст без двойных кавычек. Проверяются только слова, остальные символы игнорируются. Сравнение нечувствительно к регистру</li>
<li> <strong>точное совпадение</strong>: определяется как текст в двойных кавычках. Проверяется точное совпадение.</li>
</ul>
</li>
<li> "<strong>grade reduction</strong> = [балл|процент%]" : блок штрафов за неверный ответ. По умолчанию ошибка уменьшает оценку студента (начиная с максимальной оценки) на величину (диапазон оценки / число тестовых случаев), но при использовании данного блока можно переопределить штраф в баллах или процентах.</li>
</ul>
</p>
<h2>Справка</h2>
<p>Создать новый файл можно, написав его имя в диалоге «<b>Создать</b>» и нажав после этого кнопку «<b>Ок</b>».</p>
<p>Загрузить существующий файл можно при помощи функции «<b>Импорт</b>».<p>Все добавляемые или загружаемые файлы можно редактировать; все файлы, за исключением трех, указанных ниже, можно переименовывать и удалять.</p>
<h2>Запуск, исполнение и оценка вручную</h2>
<p>Можно задать три файла сценария для подготовки каждого из действий.
Эти файлы имеют предопределенные имена: <b>vpl_run.sh</b> (исполнение),
<b>vpl_debug.sh</b> (отладка), <b>vpl_evaluate.sh</b> (оценка).</p>
<p>При выполнении любого из этих файлов сценариев будет создан файл <b>vpl_execution</b>.
Данный файл должен быть бинарным исполняемым файлом или скриптом, начинающимся с "#!/bin/sh ".
Если не сгенерировать этот файл, нельзя будет выполнить требуемое действие.</p>
<p>Если настраиваемый модуль основан на другом модуле, файлы другого модуля будут добавлены к списку автоматически.
Содержимое файлов vpl_run.sh, vpl_debug.sh, vpl_evaluate.sh будет объединено с содержимым соответствующих файлов, начиная с уровня наибольшей вложенности в цепочке модулей "Основано на...".</P>
<p>Наконец, файл <b>vpl_environment.sh</b> добавляется автоматически.
Он содержит информацию об ответе студента. Для описания информации используются следующие переменные окружения: </p>
<ul> <li> LANG: используемый язык. </li>
<li> LC_ALL: то же, что и LANG. </li>
<li> VPL_MAXTIME: максимальное время исполнения в секундах. </li>
<li> VPL_FILEBASEURL: ссылка для доступа к файлам курса. </li>
<li> VPL_SUBFILE#: имя каждого файла, отправленного студентом. # меняется от 0 до числа отправленных файлов. </Li>
<li> VPL_SUBFILES: список всех отправленных файлов. </li>
<li> VPL_VARIATION + id: где id - порядок варианта, начиная с 0; а значение представляет собой номер варианта. </li>
</ul>
Если требуемое действие - тестирование (оценка), то добавляются следующие переменные:
<ul>
<li>VPL_MAXTIME: максимальное время исполнения в секундах.</li>
<li>VPL_MAXMEMORY: максимальный объем используемой памяти</li>
<li>VPL_MAXFILESIZE: максимальный размер файла, который может быть создан, в байтах.</li>
<li>VPL_MAXPROCESSES: максимальное число одновременно запущенных процессов.</li>
<Li>VPL_FILEBASEURL: ссылка для доступа к файлам курса.</Li>
<li>VPL_GRADEMIN: наименьшая оценка за модуль</li>
<li>VPL_GRADEMAX: максимальная оценка за модуль</li>
</ul>
<h2>Результат оценивания</h2>
<p>Результаты тестирования обрабатываются, из них извлекаются (по возможности) комментарии и предложения по оценке. Комментарии могут быть представлены в двух видах: строковый комментарий, начинающийся с \'Comment :=>>\', или блочный комментарий, начинающийся со строки, содержащей только \'<|--\', и заканчивающийся строкой, содержащей только \'--|>\'.
Оценка берется из последней строки, начинающейся с \'Grade :=>>\'.
</p>';
$string['executionoptions'] = 'Параметры исполнения';
$string['executionoptions_help'] = '<p>На этой странице задаются различные параметры, влияющие на исполнение кода</p>
<ul>
<li><b>Основано на</b>: другой модуль VPL, откуда импортируется часть настроек, как-то:
<ul><li>исполняемые файлы (объединяются с заданными файлами сценариев);</li>
<li>ограничения системных ресурсов при исполнении;</li>
<li>варианты (объединяются, создаются мультиварианты);</li>
<li>максимальный размер каждого файла, отправляемого в качестве ответа.</li>
</ul>
</li>
<li><b>Запустить</b>, <b>Отладить</b> и <b>Протестировать</b>: необходимо установить «Да», чтобы разрешить выполнение соответствующего действия при редактировании ответа. Это влияет только на студентов; пользователи, которым разрешено оценивание в курсе, всегда могут выполнять все действия.</li>
<li><b>Тестировать только при отправке</b>: ответ тестируется автоматически при его загрузке.</li>
<li><b>Автоматическая оценка</b>: если результат тестирования включает оценки, они автоматически используются для оценивания ответа.</li>
</ul>';
$string['file'] = 'Файл';
$string['fileNotChanged'] = 'Файл не изменился';
$string['file_name'] = 'Имя файла';
$string['fileadded'] = 'Файл \'{\\$a}\' добавлен';
$string['filedeleted'] = 'Файл \'{\\$a}\' удален';
$string['filelist'] = 'Список файлов';
$string['filenotadded'] = 'Файл не был добавлен';
$string['filenotdeleted'] = 'Файл «{$a}» НЕ был удалён';
$string['filenotrenamed'] = 'Файл «{$a}» НЕ был переименован';
$string['filerenamed'] = 'Файл \'{\\$a->from}\' был переименован в \'{\\$a->to}\'';
$string['filesChangedNotSaved'] = 'Файлы были изменены, но изменения не были сохранены';
$string['filesNotChanged'] = 'Файлы не изменились';
$string['filestoscan'] = 'Файлы для сканирования';
$string['fileupdated'] = 'Файл \'{\\$a}\' был обновлён';
$string['finalreduction'] = 'Окончательное снижение';
$string['finalreduction_help'] = '<b>FR [NE/FE R]</b><br>
<b>FR</b> Снижение итоговой оценки. <br>
<b>NE</b> Автоматические оценки, запрашиваемые учащимся.<br>
<b>FE</b> Разрешены бесплатные оценки.<br>
<b>R</b> Понижение класса по оценке. Если это процент, он применяется к предыдущему результату.<br>';
$string['find'] = 'Найти';
$string['find_replace'] = 'Найти/заменить';
$string['freeevaluations'] = 'Свободные оценки';
$string['freeevaluations_help'] = 'Количество автоматических оценок, которые не уменьшают итоговый результат';
$string['fulldescription'] = 'Полное описание';
$string['fulldescription_help'] = '<p>Здесь нужно ввести полное описание задания.</p>
<p>При пустом поле будет отображено краткое описание.</p>
<p>Если Вы хотите использовать автоматическую оценку, то убедитесь, что инструкции подробны и непротиворечивы.</p>';
$string['fullscreen'] = 'Полный экран';
$string['functions'] = 'Функции';
$string['getjails'] = 'Получить список серверов-исполнителей кода';
$string['gradeandnext'] = 'Оценить и перейти к следующему';
$string['graded'] = 'Оценено';
$string['gradedbyuser'] = 'Оценено пользователем';
$string['gradedon'] = 'Протестировано';
$string['gradedonby'] = 'Проверено {$a->date}, преподаватель: {$a->gradername}';
$string['gradenotremoved'] = 'Оценка НЕ была удалена. Проверьте настройки модуля в журнале оценок';
$string['gradenotsaved'] = 'Оценка НЕ была сохранена. Проверьте настройки модуля в журнале оценок';
$string['gradeoptions'] = 'Параметры оценки';
$string['grader'] = 'Кто оценил';
$string['gradercomments'] = 'Отчёт об оценивании';
$string['graderemoved'] = 'Оценка удалена';
$string['groupwork'] = 'Групповая работа';
$string['inconsistentgroup'] = 'Вы состоите в нескольких группах (0 o >1)!';
$string['incorrect_file_name'] = 'Неправильное имя файла';
$string['indicator:cognitivedepth'] = 'VPL когнитивный';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на когнитивной глубине, достигнутой учащимся в процессе работы с VPL.';
$string['indicator:socialbreadth'] = 'VPL социальный';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на социальной широте охвата учащегося в рамках деятельности VPL.';
$string['individualwork'] = 'Индивидуальная работа';
$string['inputoutput'] = 'Ввод/Вывод';
$string['instanceselection'] = 'Выбор VPL';
$string['intermediate'] = 'средний';
$string['isexample'] = 'Этот модуль служит примером';
$string['jail_servers'] = 'Список серверов-исполнителей кода';
$string['jail_servers_config'] = 'Конфигурация серверов-исполнителей кода';
$string['jail_servers_description'] = 'Каждому серверу соответствует одна строка';
$string['joinedfiles'] = 'Объединить выбранные файлы';
$string['keepfiles'] = 'Файлы, сохраняемые при исполнении';
$string['keepfiles_help'] = '<p>Из соображений безопасности файлы, добавленные как "Исполняемые файлы", удаляются перед запуском файла vpl_execution.</p>
Если какой-либо из этих файлов необходим во время исполнения (например, в качестве тестовых данных), то его здесь нужно отметить.';
$string['keyboard'] = 'Клавиатура';
$string['lasterror'] = 'Информация о последней ошибке';
$string['lasterrordate'] = 'Дата последней ошибки';
$string['listofcomments'] = 'Список комментариев';
$string['lists'] = 'Списки';
$string['listsimilarity'] = 'Список найденных схожих участков кода';
$string['listwatermarks'] = 'Список водяных знаков';
$string['load'] = 'Загрузить';
$string['loading'] = 'Загрузка';
$string['local_jail_servers'] = 'Локальные серверы-исполнители кода';
$string['local_jail_servers_help'] = '<p>Здесь можно настроить локальные серверы-исполнители кода для данного модуля и всех модулей, основанных на нём.</p>
<p>Введите в каждой строке полный URL-адрес сервера. В списке могут быть пустые строки и комментарии (строки, начинающиеся с символа «#»).</p>
<p>Данный модуль будет использовать следующие серверы-исполнители кода:
серверы, заданные здесь
плюс список серверов в модуле «Основано на...»
плюс список общих серверов-исполнителей кода.
Если вы хотите, чтобы данный модуль и модули, основанные на нём, НЕ могли использовать другие серверы, необходимо добавить строку «end_of_jails» в конец списка серверов.
</p>';
$string['manualgrading'] = 'Оценивание вручную';
$string['math'] = 'математика';
$string['maxexefilesize'] = 'Максимальный размер исполняемого файла';
$string['maxexememory'] = 'Максимальный объем используемой памяти';
$string['maxexeprocesses'] = 'Максимальное число процессов';
$string['maxexetime'] = 'Максимальное время исполнения';
$string['maxfiles'] = 'Максимальное число файлов';
$string['maxfilesexceeded'] = 'Превышено максимально возможное число файлов';
$string['maxfilesize'] = 'Максимальный размер файла для загрузки';
$string['maxfilesizeexceeded'] = 'Превышен максимально возможный размер файла';
$string['maximumperiod'] = 'Наибольшее время {$a}';
$string['maxpostsizeexceeded'] = 'Превышен максимальный размер сообщения на сервере. Пожалуйста, удалите файлы или уменьшите размер файлов';
$string['maxresourcelimits'] = 'Ограничение системных ресурсов при исполнении';
$string['maxsimilarityoutput'] = 'Максимальное число наиболее схожих пар';
$string['menucheck_jail_servers'] = 'Проверить серверы-исполнители кода';
$string['menuexecutionfiles'] = 'Исполняемые фалйы';
$string['menuexecutionoptions'] = 'Параметры';
$string['menukeepfiles'] = 'Удерживаемые файлы';
$string['menulocal_jail_servers'] = 'Локальные серверы-исполнители кода';
$string['menuresourcelimits'] = 'Ограничения на ресурсы';
$string['minsimlevel'] = 'Наименьший отображаемый уровень сходства';
$string['moduleconfigtitle'] = 'Настройка модуля «Виртуальная лаборатория программирования»';
$string['modulename'] = 'Виртуальная лаборатория программирования';
$string['modulename_help'] = '<p>VPL - это элемент курса для Moodle, предназначенный для управления задачами на программирование. Отличительные возможности VPL:
</p>
<ul>
<li>Возможность правки исходного программного кода в браузере</li>
<li>Студенты могут интерактивно запускать программы в браузере</li>
<li>Вы можете запускать тесты для проверки программ.</li>
<li>Позволяет искать сходство в отправленных ответах.</li>
<li>Поддерживает установку ограничений на редактирование и запрет вставки текста из внешних источников.</li>
</ul>
<p><a href="http://vpl.dis.ulpgc.es">Домашняя страница Виртуальной лаборатории программирования </a></p>';
$string['modulenameplural'] = 'Виртуальные лаборатории программирования';
$string['multidelete'] = 'Несколько удалений';
$string['nevaluations'] = '{$a} автоматические оценки сделаны';
$string['new'] = 'Создать';
$string['new_file_name'] = 'Имя создаваемого файла';
$string['next'] = 'Далее';
$string['nojailavailable'] = 'Нет доступных серверов-исполнителей кода';
$string['noright'] = 'У вас нет прав доступа к';
$string['nosubmission'] = 'Нет доступных ответов';
$string['notexecuted'] = 'Не выполнено';
$string['notgraded'] = 'Не оценено';
$string['notsaved'] = 'Не сохранено';
$string['novpls'] = 'Виртуальная лаборатория программирования не определена';
$string['nowatermark'] = 'Собственные водяные знаки {$a}';
$string['nsubmissions'] = '{$a} ответов';
$string['numcluster'] = 'Кластер {$a}';
$string['open'] = 'Открыть';
$string['operatorsvalues'] = 'Операторы/значения';
$string['opnotallowfromclient'] = 'С этого компьютера выполнение данного действия запрещено';
$string['options'] = 'Параметры';
$string['optionsnotsaved'] = 'Параметры НЕ были сохранены';
$string['optionssaved'] = 'Параметры сохранены';
$string['origin'] = 'Оригинал';
$string['othersources'] = 'Другие источники для сканирования';
$string['outofmemory'] = 'Недостаточно памяти';
$string['paste'] = 'Вставить';
$string['pause'] = 'Пауза';
$string['pluginadministration'] = 'Управление модулем «Виртуальная лаборатория программирования»';
$string['pluginname'] = 'Виртуальная лаборатория программирования';
$string['previoussubmissionslist'] = 'Список предыдущих ответов';
$string['print'] = 'Печать';
$string['privacy:metadata:vpl'] = 'Информация о VPL';
$string['privacy:metadata:vpl:course'] = 'ID курса';
$string['privacy:metadata:vpl:duedate'] = 'Крайний срок';
$string['privacy:metadata:vpl:freeevaluations'] = 'Количество доступных автоматических оценок (без штрафов)';
$string['privacy:metadata:vpl:grade'] = 'Оценка заданий';
$string['privacy:metadata:vpl:id'] = 'Идентификационный номер задания';
$string['privacy:metadata:vpl:name'] = 'Название задания';
$string['privacy:metadata:vpl:reductionbyevaluation'] = 'Понижение оценки за каждый студенческий запрос автоматической оценки';
$string['privacy:metadata:vpl:shortdescription'] = 'Краткое описание задания';
$string['privacy:metadata:vpl:startdate'] = 'Дата начала задания';
$string['privacy:metadata:vpl_acetheme'] = 'Пользовательская тема для IDE';
$string['privacy:metadata:vpl_assigned_variations'] = 'Информация о назначенном варианте задания, если таковая имеется';
$string['privacy:metadata:vpl_assigned_variations:description'] = 'Описание назначенного варианта';
$string['privacy:metadata:vpl_assigned_variations:userid'] = 'ID пользователя БД.';
$string['privacy:metadata:vpl_assigned_variations:vplid'] = 'ID VPL DB';
$string['privacy:metadata:vpl_editor_fontsize'] = 'Пользовательский размер шрифта в IDE.';
$string['privacy:metadata:vpl_running_processes'] = 'Информация о запущенных процессах пользователя по заданию';
$string['privacy:metadata:vpl_running_processes:server'] = 'Сервер, выполняющий задачу';
$string['privacy:metadata:vpl_running_processes:starttime'] = 'Дата начала выполнения задачи';
$string['privacy:metadata:vpl_running_processes:userid'] = 'ID пользователя БД.';
$string['privacy:metadata:vpl_running_processes:vplid'] = 'ID VPL DB';
$string['privacy:metadata:vpl_submissions'] = 'Информация о попытках/ответах и их оценке';
$string['privacy:metadata:vpl_submissions:dategraded'] = 'Дата и время оценки ответа';
$string['privacy:metadata:vpl_submissions:datesubmitted'] = 'Дата и время ответа';
$string['privacy:metadata:vpl_submissions:grade'] = 'Отметка для этого представления. Это значение может не совпадать со значением в журнале оценок.';
$string['privacy:metadata:vpl_submissions:gradercomments'] = 'Комментарии оценивающего об этом ответе';
$string['privacy:metadata:vpl_submissions:graderid'] = 'ID оценщика';
$string['privacy:metadata:vpl_submissions:groupid'] = 'ID группы';
$string['privacy:metadata:vpl_submissions:nevaluations'] = 'Количество запрошенных студентом автоматических оценок до отправки этого ответа';
$string['privacy:metadata:vpl_submissions:studentcomments'] = 'Комментарии, написанные студентом по поводу работы';
$string['privacy:metadata:vpl_submissions:userid'] = 'ID пользователя';
$string['privacy:metadata:vpl_terminaltheme'] = 'Пользовательские предпочтения по сочетанию цветов терминала';
$string['privacy:runningprocesspath'] = 'Исполняющийся_процесс_{$a}';
$string['privacy:submissionpath'] = 'представление ответа_{$a}';
$string['privacy:variationpath'] = 'назначенные_варианты';
$string['proposedgrade'] = 'Предлагаемая оценка: {$a}';
$string['proxy'] = 'прокси';
$string['proxy_description'] = 'Прокси-сервер для подсоединения Moodle к серверам-исполнителям кода';
$string['redo'] = 'Повторить';
$string['reductionbyevaluation'] = 'Сокращение путем автоматической оценки';
$string['reductionbyevaluation_help'] = 'Уменьшите итоговый результат на величину или процент для каждой автоматической оценки, запрошенной учащимся';
$string['regularscreen'] = 'Обычный режим';
$string['removebreakpoint'] = 'Удалить точку останова';
$string['removegrade'] = 'Удалить оценку';
$string['rename'] = 'Переименовать';
$string['rename_file'] = 'Переименовать файл';
$string['replace_find'] = 'Заменить/найти';
$string['replacenewer'] = 'Более новая версия уже была сохранена.
Заменить более новую версию этой?';
$string['requestedfiles'] = 'Требуемые файлы';
$string['requestedfiles_help'] = '<p>Здесь вы можете установить имена и первоначальное содержание для файлов, требуемых от студентов (вплоть до максимального числа файлов, указанных в описании).</p>
<p>Если не задавать имена для всех файлов, то безымянные файлы считаются опциональными и могут иметь любое имя.</p>
<p>Вы также можете добавить содержание в требуемые файлы, оно будет доступно в редакторе при его первом открытии, если до этого не было предыдущих ответов на задание.</p>';
$string['requirednet'] = 'Разрешить отправку ответов из сети';
$string['requiredpassword'] = 'Требуется пароль';
$string['resetfiles'] = 'Сбросить файлы';
$string['resetvpl'] = 'Сбросить {$a}';
$string['resourcelimits'] = 'Ограничение ресурсов';
$string['resourcelimits_help'] = '<p>Можно установить ограничения на время исполнения, объем используемой памяти, размер исполняемого файла и число одновременно исполняемых процессов.</p>
<p>Данные ограничения используются при выполнении сценариев vpl_run.sh, vpl_debug.sh, vpl_evaluate.sh, а также файла vpl_execution, созданного этими сценариями.</p>
<p>Если данный модуль основан на другом, то на значения ограничений могут влиять соответствующие ограничения, заданные в базовом модуле, его родительских модулях или в глобальных настройках VPL.</p>';
$string['restrictededitor'] = 'Запретить загрузку внешних файлов, вставку и перетаскивание внешнего содержимого';
$string['resume'] = 'Продолжить';
$string['retrieve'] = 'Получить результаты';
$string['run'] = 'Выполнить';
$string['running'] = 'Исполнение';
$string['runscript'] = 'Запустить скрипт';
$string['runscript_help'] = 'Выберите скрипт для запуска, который будет использоваться в этом действии';
$string['save'] = 'Сохранить';
$string['savecontinue'] = 'Сохранить и продолжить';
$string['saved'] = 'Сохранено';
$string['savedfile'] = 'Файл \'{$a}\' сохранен';
$string['saveforotheruser'] = 'Вы уверены, что сохраняете заявку для другого пользователя?';
$string['saveoptions'] = 'сохранить параметры';
$string['saving'] = 'Сохранение';
$string['scanactivity'] = 'Элемент курса';
$string['scandirectory'] = 'Папка';
$string['scanningdir'] = 'Сканирование папки ...';
$string['scanoptions'] = 'Настройки сканирования';
$string['scanother'] = 'Сканировать добавленные источники на сходство';
$string['scanzipfile'] = 'Заархивировать файл (zip)';
$string['sebkeys'] = 'Ключ(и) экзамена SEB';
$string['sebkeys_help'] = 'Ключ(и) экзамена SEB (макс. 3), полученный из файла .seb. Он более надежен, чем проверка браузера. <br>https://safeexambrowser.org';
$string['sebrequired'] = 'Требуется Safe Exam Browser';
$string['sebrequired_help'] = 'Требуется правильная настройка браузера SEB';
$string['select_all'] = 'Выбрать все';
$string['selectbreakpoint'] = 'Выберите точку останова';
$string['server'] = 'Сервер';
$string['serverexecutionerror'] = 'Ошибка сервера-исполнителя кода';
$string['shortcuts'] = 'Горячие клавиши';
$string['shortdescription'] = 'Краткое описание';
$string['similarity'] = 'Сходство';
$string['similarto'] = 'Похоже на';
$string['start'] = 'Старт';
$string['startanimate'] = 'Запустить анимацию';
$string['startdate'] = 'Доступно с';
$string['step'] = 'Шаг';
$string['stop'] = 'Стоп';
$string['submission'] = 'Отправка ответов';
$string['submissionperiod'] = 'Период отправки';
$string['submissionrestrictions'] = 'Ограничения отправки';
$string['submissions'] = 'Отправленные ответы';
$string['submissionselection'] = 'Выбор ответов';
$string['submissionslist'] = 'Список отправленных ответов';
$string['submissionview'] = 'Просмотр отправленного ответа';
$string['submittedby'] = 'Отправил {$a}';
$string['submittedon'] = 'Отправлено в';
$string['submittedonp'] = 'Отправлено в {$a}';
$string['sureresetfiles'] = 'Вы уверены, что хотите потерять все изменения и сбросить файлы к их исходному состоянию?';
$string['test'] = 'Тест модуля';
$string['testcases'] = 'Тестовые данные';
$string['testcases_help'] = '<p>Позволяет запустить студенческую программу и сравнить её вывод с заданным эталоном. Чтобы настроить тестируемые параметры, необходимо задать ввод/вывод программы в файле "vpl_evaluate.cases".</p>
<p>Формат файла "vpl_evaluate.cases" следующий:
<ul>
<li> "<strong>case </strong>= Описание": блок заголовка. Не обязательно. Начало описания тестовых данных.</li>
<li> "<strong>input </strong>= текст": блок входных данных. Может быть на нескольких строках. Данные идут до следующего блока.</li>
<li> "<strong>output </strong>= текст": блок выходных данных. Может быть на нескольких строках. Данные идут до следующего блока. В тестируемом случае может быть несколько правильных выходных данных. Существует три типа выходных данных: числа, текст, точное совпадение:
<ul>
<li> <strong>числа</strong>: определяется как последовательность чисел (целых и с плавающей точкой). В выходных данных проверяются только числа, весь остальной текст игнорируется. Для сопоставления чисел с плавающей точкой задается допустимая погрешность</li>
<li> <strong>текст</strong>: определяется как текст без двойных кавычек. Проверяются только слова, остальные символы игнорируются. Сравнение не чувствительно к регистру</li>
<li> <strong>точное совпадение</strong>: определяется как текст в двойных кавычках. Проверяется точное совпадение.</li>
</ul>
</li>
<li> "<strong>grade reduction</strong> = [балл|процент%]" : блок штрафов за неверный ответ. По умолчанию ошибка уменьшает оценку студента (начиная с максимальной оценки) на величину (диапазон оценки / число тестовых случаев), но при использовании данного блока можно переопределить штраф в баллах или процентах.</li>
</ul>';
$string['text'] = 'Текст';
$string['timeleft'] = 'Осталось времени';
$string['timelimited'] = 'Время ограничено';
$string['timeout'] = 'Таймаут';
$string['timespent'] = 'Проведенное время';
$string['timespent_help'] = 'Время, затраченное на это задание, основано на сохраненных версиях.<br>На гистограмме показано количество студентов за диапазон времени.';
$string['timeunlimited'] = 'Время не ограничено';
$string['totalnumberoferrors'] = 'Ошибки';
$string['undo'] = 'Отменить';
$string['unexpected_file_name'] = 'Неправильное имя файла: ожидается \'{$a->expected}\', обнаружено \'{$a->found}\'';
$string['unzipping'] = 'Распаковка...';
$string['update'] = 'Обновить';
$string['updating'] = 'Обновление';
$string['uploadfile'] = 'Загрузить файл';
$string['usevariations'] = 'Использовать варианты';
$string['usewatermarks'] = 'Использовать водяные знаки';
$string['usewatermarks_description'] = 'Добавлять водяные знаки к студенческим файлам (только для поддерживаемых языков)';
$string['variables'] = 'Переменные';
$string['variation'] = 'Вариант {$a}';
$string['variation_options'] = 'Настройки вариантов';
$string['variations'] = 'Варианты';
$string['variations_help'] = '<p>В модуле можно использовать несколько вариантов заданий. Эти варианты распределяются между студентами случайным образом.</p>
<p>Здесь вы можете указать, есть ли варианты в данном модуле; задать название набора вариантов и добавить требуемые варианты.</p>
<p>Каждый вариант имеет свои идентификационный код и описание. Идентификационный код используется файлом <b>vpl_enviroment.sh</b> для передачи информации о выданных студентам вариантах в файлы сценариев. Описание варианта требуется оформить в виде HTML-кода. Оно будет показано студентам, получившим соответствующий вариант.</p>';
$string['variations_unused'] = 'В модуле есть варианты, но они отключены';
$string['variationtitle'] = 'Название набора вариантов';
$string['varidentification'] = 'Идентификационный код';
$string['visiblegrade'] = 'Видимый';
$string['vpl'] = 'Виртуальная лаборатория программирования';
$string['vpl:addinstance'] = 'Добавлять новые экземпляры модуля «Виртуальная лаборатория программирования»';
$string['vpl:grade'] = 'Оценивать задания в модуле «Виртуальная лаборатория программирования»';
$string['vpl:manage'] = 'Управлять заданиями в модуле «Виртуальная лаборатория программирования»';
$string['vpl:setjails'] = 'Указывать серверы-исполнители кода для отдельных экземпляров модуля «Виртуальная лаборатория программирования»';
$string['vpl:similarity'] = 'Осуществлять поиск похожих работ в модуле «Виртуальная лаборатория программирования»';
$string['vpl:submit'] = 'Отправлять ответы на задания в модуле «Виртуальная лаборатория программирования»';
$string['vpl:view'] = 'Видеть полное описание задания в модуле «Виртуальная лаборатория программирования»';
$string['vpl_debug.sh'] = 'Выполняется скрипт подготовки отладки';
$string['vpl_evaluate.cases'] = 'Тестовые данные для оценивания';
$string['vpl_evaluate.sh'] = 'Выполняется скрипт подготовки оценивания';
$string['vpl_run.sh'] = 'Выполняется скрипт подготовки выполнения';
$string['websocket_protocol'] = 'Протокол WebSocket';
$string['websocket_protocol_description'] = 'Тип протокола WebSocket (ws:// или wss://), используемого браузером для подключения к серверам-исполнителям кода';
$string['workingperiods'] = 'Время работы';
$string['worktype'] = 'Тип работы';
