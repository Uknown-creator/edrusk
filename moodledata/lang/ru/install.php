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
 * Strings for component 'install', language 'ru', version '4.0'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Указан неверный каталог администрирования';
$string['admindirname'] = 'Каталог администрирования';
$string['admindirsetting'] = 'На небольшом числе веб-хостингов путь «/admin» используется для доступа к панели управления или чему-то еще. К сожалению, это противоречит стандартному расположению страниц управления Moodle. Это можно исправить переименованием папки «admin» в каталоге Moodle и указанием здесь ее нового имени. Например: <br /> <br /><b>moodleadmin</b><br /> <br />
В Moodle все ссылки на «/admin» исправятся автоматически.';
$string['admindirsettinghead'] = 'Установка каталога администрирования';
$string['admindirsettingsub'] = 'На небольшом числе веб-хостингов путь «/admin» используется для доступа к панели управления или чему-то еще. К сожалению, это противоречит стандартному расположению страниц управления Moodle. Это можно исправить переименованием папки «admin» в каталоге Moodle и указанием здесь ее нового имени. Например: <br /> <br /><b>moodleadmin</b><br /> <br />
В Moodle все ссылки на «/admin» исправятся автоматически.';
$string['availablelangs'] = 'Доступные языковые пакеты';
$string['caution'] = 'Предупреждение';
$string['chooselanguage'] = 'Выберите язык';
$string['chooselanguagehead'] = 'Выберите язык';
$string['chooselanguagesub'] = 'Сейчас необходимо выбрать язык ТОЛЬКО для сообщений во время установки. Язык сайта и пользовательских интерфейсов можно будет указать далее в процессе установки.';
$string['cliadminemail'] = 'Новый адрес электронной почты администратора';
$string['cliadminpassword'] = 'Пароль нового администратора';
$string['cliadminusername'] = 'Логин учетной записи администратора';
$string['clialreadyconfigured'] = 'Файл config.php уже существует. Если Вы хотите установить Moodle на этот сайт, используйте admin/cli/install_database.php.';
$string['clialreadyinstalled'] = 'Файл config.php уже существует. Если Вы хотите обновить сайт Moodle, то используйте скрипт admin/cli/upgrade.php.';
$string['cliinstallfinished'] = 'Установка успешно завершена.';
$string['cliinstallheader'] = 'Программа установки Moodle {$a} в режиме командной строки';
$string['climustagreelicense'] = 'Чтобы принять условия лицензии в неинтерактивном режиме, укажите  параметр --agree-license';
$string['cliskipdatabase'] = 'Пропускаем установку базы данных.';
$string['clitablesexist'] = 'Таблицы базы данных уже существуют, невозможно продолжить установку в режиме командной строки.';
$string['compatibilitysettings'] = 'Проверка настроек PHP...';
$string['compatibilitysettingshead'] = 'Проверка настроек PHP...';
$string['compatibilitysettingssub'] = 'Ваш сервер должен пройти все перечисленные тесты, чтобы Moodle работал на нём корректно';
$string['configfilenotwritten'] = 'Программе установки не удалось создать файл настроек config.php с выбранными настройками, скорее всего из-за того, что в каталоге Moodle запрещена запись. Вы можете вручную создать в корневом каталоге Moodle файл config.php следующего содержания.';
$string['configfilewritten'] = 'Файл config.php успешно создан';
$string['configurationcomplete'] = 'Настройка завершена';
$string['configurationcompletehead'] = 'Настройка завершена';
$string['configurationcompletesub'] = 'Предпринята попытка сохранить файл настроек в корневом каталоге Moodle.';
$string['database'] = 'Название базы данных';
$string['databasehead'] = 'Настройки базы данных';
$string['databasehost'] = 'Сервер баз данных';
$string['databasename'] = 'Название базы данных';
$string['databasepass'] = 'Пароль';
$string['databaseport'] = 'Порт базы данных';
$string['databasesocket'] = 'Подключение через Unix-сокет';
$string['databasetypehead'] = 'Выберите драйвер базы данных';
$string['databasetypesub'] = 'Moodle поддерживает несколько типов серверов баз данных. Свяжитесь с администратором сервера, если не знаете, какой именно тип выбрать.';
$string['databaseuser'] = 'Пользователь базы данных';
$string['dataroot'] = 'Каталог данных';
$string['datarooterror'] = 'Не удается найти или создать указанный Вами «Каталог данных». Введите корректный путь или создайте этот каталог вручную.';
$string['datarootpermission'] = 'Разрешения на каталоги данных';
$string['datarootpublicerror'] = 'Указанный Вами «Каталог данных» доступен непосредственно через веб. Вам необходимо указать другой каталог.';
$string['dbconnectionerror'] = 'Не удается подключиться к базе данных с указанными параметрами. Проверьте настройки.';
$string['dbcreationerror'] = 'Обшибка создания базы данных. Не удается создать базу данных с указанными параметрами.';
$string['dbhost'] = 'Сервер базы данных';
$string['dbpass'] = 'Пароль';
$string['dbport'] = 'Порт';
$string['dbprefix'] = 'Префикс имен таблиц';
$string['dbtype'] = 'Тип';
$string['directorysettings'] = '<p>Пожалуйста, уточните расположение, в которое устанавливается Moodle.</p>

<p><b>Веб-адрес:</b> Укажите полный веб-адрес по которому будет осуществляться доступ к Moodle. Если Ваш сайт доступен по нескольким адресам, выберите наиболее простой и понятный студентам. Не нужно завершать адрес косой чертой (/)</p>

<p><b>Каталог Moodle:</b> Укажите полный путь к каталогу с этой установкой. Проверьте, чтобы верхний/нижний регистр был соблюден.</p>

<p><b>Каталог данных:</b> Вам необходимо указать место, в котором Moodle сможет хранить загружаемые файлы. Этот каталог должен быть доступен на чтение и НА ЗАПИСЬ пользователю, от чьего имени запущен веб-сервер (обычно «nobody» или «apache»), но при этом он не должен быть доступен непосредственно через веб.</p>>';
$string['directorysettingshead'] = 'Пожалуйста, уточните расположение, в которое устанавливается Moodle.';
$string['directorysettingssub'] = '<p><b>Веб-адрес:</b>
Укажите полный веб-адрес по которому будет осуществляться доступ к Moodle.
Если Ваш сайт доступен по нескольким адресам, выберите наиболее простой и понятный студентам. Не нужно завершать адрес косой чертой (/)</p>

<p><b>Каталог Moodle:</b>
Укажите полный путь к каталогу с этой установкой. Проверьте, чтобы верхний/нижний регистр был соблюден.</p>

<p><b>Каталог данных:</b>
Вам необходимо указать место, в котором Moodle сможет хранить загружаемые файлы. Этот каталог должен быть доступен на чтение и НА ЗАПИСЬ пользователю, от чьего имени запущен веб-сервер (обычно «nobody» или «apache»), но при этом он не должен быть доступен непосредственно через веб.</p>';
$string['dirroot'] = 'Каталог Moodle';
$string['dirrooterror'] = 'Похоже, что указано неверное значение параметра «Каталог Moodle» - по указанному пути не удалось найти установку Moodle. Значение параметра  было сброшено.';
$string['download'] = 'Скачать';
$string['downloadlanguagebutton'] = 'Загрузить языковой пакет для языка «{$a}»';
$string['downloadlanguagehead'] = 'Загрузка языкового пакета';
$string['downloadlanguagenotneeded'] = 'Вы можете продолжить установку используя стандартный языковой пакет «{$a}».';
$string['downloadlanguagesub'] = 'Теперь у Вас есть возможность загрузить языковой пакет и продолжить процесс установки на этом языке. <br /><br />Если загрузить языковой пакет не удастся, процесс установки продолжится на английском языке. (После окончания установки у Вас появится возможность загрузить и установить дополнительные языковые пакеты.)';
$string['doyouagree'] = 'Вы согласны? (да/нет):';
$string['environmenthead'] = 'Проверка среды...';
$string['environmentsub'] = 'Производится проверка того, все ли компоненты системы отвечают требованиям';
$string['environmentsub2'] = 'У каждой версии Moodle есть минимальные требования к версии PHP и набору обязательных расширений PHP.
Полная проверка среды осуществляется перед каждой установкой и обновлением.
Пожалуйста, свяжитесь с администратором сервера, если не знаете, как установить новую версию или включить расширения PHP.';
$string['errorsinenvironment'] = 'Проверка окружения не выполнена!';
$string['fail'] = 'Тест не пройден';
$string['fileuploads'] = 'Загрузка файлов';
$string['fileuploadserror'] = 'Должен быть «1»';
$string['fileuploadshelp'] = '<p>Похоже, что на Вашем сервере отключена загрузка файлов.</p>

<p>Moodle может быть установлен, но без этой возможности; Вы не сможете загружать учебные файлы курсов и фотографии пользователей.</p>

<p>Чтобы включить загрузку файлов Вам (или вашему системному администратору) нужно отредактировать главный файл php.ini сервера и установить параметр
<b>file_uploads = 1</b>.</p>';
$string['inputdatadirectory'] = 'Каталог данных:';
$string['inputwebadress'] = 'Веб-адрес:';
$string['inputwebdirectory'] = 'Каталог Moodle:';
$string['installation'] = 'Установка';
$string['invaliddbprefix'] = 'Неверный префикс. Префикс может состоять только из строчных букв и символа подчеркивания.';
$string['langdownloaderror'] = 'К сожалению, не удалось установить язык «{$a}». Процесс установки продолжится на английском.';
$string['langdownloadok'] = 'Язык «{$a}» успешно установлен. Процесс установки продолжится на этом языке.';
$string['memorylimit'] = 'Ограничение памяти';
$string['memorylimiterror'] = 'Ограничение памяти в PHP установлено слишком маленьким. Впоследствии это может создать трудности.';
$string['memorylimithelp'] = '<p>Сейчас ограничение памяти в PHP на Вашем сервере установлено в {$a}.</p>

<p>Из-за этого у через какое-то время у Moodle могут возникнуть проблемы с памятью, особенно если у Вас будет много модулей и/или пользователей.</p>

<p>Мы рекомендуем, если возможно, установить в PHP более высокое ограничение памяти, например 40M.
Это можно попробовать сделать следующими способами:</p>
<ol>
<li>Если есть возможность, перекомпилируйте PHP с ключом <i>--enable-memory-limit</i>.
В этом случае Moodle сможет самостоятельно установить ограничение памяти.</li>
<li>Если у Вас есть доступ к файлу php.ini, Вы можете изменить параметр <b>memory_limit</b>
на что-нибудь типа 40M. Если доступа у Вас нет, может быть у Вас есть возможность попросить администратора сделать это.</li>
<li>На некоторых серверах PHP можно создать в каталоге Moodle файл .htaccess содержащий следующую строку:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Тем не менее, на некоторых серверах из-за этого могут перестать работать <b>все</b> страницы PHP (Вы увидите ошибки на страницах). В этом случае Вам придется удалить файл .htaccess.</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'Расширение MySQLi для PHP сконфигурировано неверно, в результате чего невозможно установить связь с сервером MySQL. Проверьте настройки в файле php.ini или перекомпилируйте PHP.';
$string['nativeauroramysql'] = 'Aurora MySQL (native/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p> База данных - это место, где хранится большинство настроек и данных Moodle, и их необходимо сконфигурировать здесь. </p>
<p> Имя базы данных, имя пользователя и пароль являются обязательными полями; префикс таблицы не является обязательным. </p>
<p> Имя базы данных может содержать только буквенно-цифровые символы, доллар ($) и знак подчеркивания (_). </p>
<p> Если база данных в настоящее время не существует, а указанный вами пользователь имеет на то разрешение, Moodle попытается создать новую базу данных с корректными правами и настройками. </p>
<p> Этот драйвер несовместим с устаревшим вариантом MyISAM. </p>';
$string['nativemariadb'] = 'MariaDB («родной»/mariadb)';
$string['nativemariadbhelp'] = '<p>Здесь нужно указать настройки базы данных, в которой будут храниться основные данные Moodle. </p>
<p>Название базы данных, имя пользователя и пароль обязательны; префикс таблиц необязателен.</p>
<p>Название базы данных может содержать только буквенно-цифровые символы, знак доллара ($) и символ подчеркивания (_).</p>
<p> Если база данных в настоящее время не существует, а пользователь  имеет необходимые разрешения, Moodle попытается создать новую базу данных с корректными разрешениями и настройками. </p>
<p> Этот драйвер не совместим с устаревшей системой MyISAM. </p>';
$string['nativemysqli'] = 'Усовершенствованный MySQL («родной»/mysqli)';
$string['nativemysqlihelp'] = '<p>Здесь нужно указать настройки базы данных, в которой будут храниться основные данные Moodle. </p>
<p>Название базы данных, имя пользователя и пароль обязательны; префикс таблиц необязателен.</p>
<p>Название базы данных может содержать только буквенно-цифровые символы, знак доллара ($) и символ подчеркивания (_).</p>
<p> Если база данных в настоящее время не существует, а пользователь  имеет необходимые разрешения, Moodle попытается создать новую базу данных с корректными разрешениями и настройками. </p>';
$string['nativeoci'] = 'Oracle («родной»/oci)';
$string['nativeocihelp'] = 'Теперь Вам необходимо настроить базу данных, в которой будут храниться основные данные Moodle.
База данных, имя пользователя и пароль для доступа к ней должны быть уже созданы. Префикс имен таблиц является обязательным.';
$string['nativepgsql'] = 'PostgreSQL («родной»/pgsql)';
$string['nativepgsqlhelp'] = '<p>Здесь нужно указать настройки базы данных, в которой будут храниться основные данные Moodle. </p><p>Название базы данных, имя пользователя, пароль и префикс таблиц обязательны.</p><p> База данных должна уже существовать и пользователь должен иметь к ней доступ как на чтение, так и на запись. </p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft («родной»/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Теперь Вам необходимо настроить базу данных, в которой будут храниться основные данные Moodle.
База данных, имя пользователя и пароль для доступа к ней должны быть уже созданы. Префикс имен таблиц является обязательным.';
$string['nativesqlsrvnodriver'] = 'Драйвер PHP от Microsoft для SQL Server не установлен или неправильно сконфигурирован.';
$string['ociextensionisnotpresentinphp'] = 'Расширение OCI8 для PHP сконфигурировано неверно, в результате чего невозможно установить связь с сервером Oracle. Проверьте настройки в файле php.ini или перекомпилируйте PHP.';
$string['pass'] = 'Тест пройден';
$string['paths'] = 'Пути';
$string['pathserrcreatedataroot'] = 'Программа установки  не может создать каталог данных ({$a->dataroot}).';
$string['pathshead'] = 'Подтвердите пути';
$string['pathsrodataroot'] = 'Каталог данных недоступен для записи.';
$string['pathsroparentdataroot'] = 'Родительский каталог ({$a->parent}) не доступен для записи. Программа установки не может создать каталог данных ({$a->dataroot}).';
$string['pathssubadmindir'] = 'На небольшом числе веб-хостингов путь /admin используется для доступа к панели управления или чему-то еще. К сожалению, это противоречит стандартному расположению страниц управления Moodle. Это можно исправить путем переименования папки admin в каталоге Moodle и указания нового имени здесь. Например: <em>moodleadmin</em>. При этом все ссылки на панель управления Moodle исправятся автоматически.';
$string['pathssubdataroot'] = '<p>Каталог, в котором Moodle будет хранить все файлы, размещаемые пользователями. </p><p>Этот каталог должен быть доступен для чтения и ЗАПИСИ тому пользователю, от чьего имени запускается веб-сервер (обычно \'www-data\', \'nobody\' или \'apache\'). </p><p>Этот каталог не должен быть доступен напрямую через Интернет. </p><p>Программа установки попробует создать этот каталог, если он не существует. </p>';
$string['pathssubdirroot'] = '<p>Полный путь к каталогу установки Moodle.</p>';
$string['pathssubwwwroot'] = '<p>Полный веб-адрес, по которому будет доступен Moodle, т.е. адрес, который пользователи будут вводить в адресной строке своего браузера для доступа к сайту Moodle.</p>
<p>Использовать для доступа к Moodle несколько публичных адресов невозможно. Если у Вашего сайта есть еще несколько публичных адресов, то следует настроить постоянные перенаправления с этих адресов на указанный.</p>
</p>Если Ваш сайт доступен как из Интернета, так и из локальной сети (иногда называют Интранет), укажите здесь публичный адрес.</p>
</p>Если указанный здесь адрес неверный, измените URL в адресной строке браузера и перезапустите установку.</p>';
$string['pathsunsecuredataroot'] = 'Расположение каталога данных не отвечает требованиям безопасности';
$string['pathswrongadmindir'] = 'Каталог admin не существует';
$string['pgsqlextensionisnotpresentinphp'] = 'Расширение PGSQL для PHP сконфигурировано неверно, в результате чего невозможно установить связь с сервером PostgreSQL. Проверьте настройки в файле php.ini или перекомпилируйте PHP.';
$string['phpextension'] = 'Расширение PHP «{$a}»';
$string['phpversion'] = 'Версия PHP';
$string['phpversionhelp'] = '<p>Для Moodle необходим PHP версии не ниже 5.6.5 или 7.1 (есть некоторые проблемы с версией 7.0.x).</p>
<p>Сейчас у Вас используется версия {$a}</p>
<p>Вам нужно обновить PHP или переместиться на хостинг с более новой версией PHP!<br />';
$string['releasenoteslink'] = 'Информация об этой версии Moodle доступна в примечаниях к выпуску по ссылке {$a}';
$string['safemode'] = 'Безопасный режим';
$string['safemodeerror'] = 'У Moodle могут возникнуть проблемы при включенном режиме «Safe Mode»';
$string['safemodehelp'] = '<p>В режиме «safe mode» у Moodle могут возникнуть разнообразные сложности, например, невозможность создавать новые файлы.</p>

<p>Режим «Safe mode» обычно используется только параноиками на публичных веб-хостингах, поэтому для сайта Moodle Вам может понадобится всего лишь сменить веб-хостинг.</p>

<p>Вы, конечно, можете попробовать продолжить установку, но тогда возможен ряд проблем в будущем.</p>';
$string['sessionautostart'] = 'Параметр «session.autostart»';
$string['sessionautostarterror'] = 'Должен быть «0»';
$string['sessionautostarthelp'] = '<p>Moodle требуется поддержка сессий и без нее он не будет работать.</p>

<p>Необходимый режим работы с сессиями может быть установлены в файле php.ini. Установите session.auto_start = 0.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'Расширение SQLite для PHP настроено неверно. Проверьте настройки в файле php.ini или перекомпилируйте PHP.';
$string['upgradingqtypeplugin'] = 'Обновление плагина вопрос/тип';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Вы видите эту страницу, потому что успешно установили и запустили на своем компьютере набор программ <strong>{$a->packname} {$a->packversion}</strong>. Поздравляем!';
$string['welcomep30'] = 'Эта версия набора программ <strong>{$a->installername}</strong> включает следующие программы, необходимые для создания среды, в которой будет работать <strong>Moodle</strong>:';
$string['welcomep40'] = 'Также в этот набор входит <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Порядок использования приложений, входящих в этот набор, регламентируется соответствующими лицензиями. Набор программ <strong>{$a->installername}</strong> является <a href="http://www.opensource.org/docs/definition_plain.html">открытым программным обеспечением</a> и распространяется на условиях лицензии <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'На следующих страницах Вы сможете за несколько простых шагов настроить и установить <strong>Moodle</strong> на свой компьютер. Вы сможете принять настройки по умолчанию или изменить их в зависимости от своих потребностей.';
$string['welcomep70'] = 'Нажмите кнопку «Далее» чтобы продолжить процесс установки <strong>Moodle</strong>.';
$string['wwwroot'] = 'Веб-адрес';
$string['wwwrooterror'] = 'Похоже, что указано неверное значение параметра «Веб-адрес» - по указанному пути не удалось найти эту установку Moodle. Значение параметра было сброшено.';
