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
 * Strings for component 'local_amos', language 'ru', version '4.0'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS — это центральный репозиторий строк Moodle и истории их изменения. AMOS отслеживает добавление английских строк в исходный код Moodle, собирает переводы, обслуживает типовые задачи управления переводом и генерирует языковые пакеты для развертывания на серверах c Moodle.</p>
<p>Дополнительную информацию можно найти в <a href="http://docs.moodle.org/en/AMOS">английской документации по AMOS</a>.</p>';
$string['amos'] = 'Инструмент перевода «AMOS»';
$string['amos:changecontriblang'] = 'Изменять язык вклада в перевод';
$string['amos:commit'] = 'Фиксировать строки этапа перевода в основном репозитории';
$string['amos:execute'] = 'Выполнять AMOScript';
$string['amos:importfile'] = 'Импортировать в этап переведенные строки из загружаемого файла';
$string['amos:importstrings'] = 'Импортировать строки (включая английский) непосредственно в основной репозиторий';
$string['amos:manage'] = 'Управлять порталом AMOS';
$string['amos:stage'] = 'Использовать инструмент перевода AMOS и собирать переведенные строки в виде этапа перевода.';
$string['amos:stash'] = 'Сохранять текущий этап перевода в постоянные копилки';
$string['amos:usegoogle'] = 'Использовать сервисы «Переводчика Google»';
$string['commitbutton'] = 'Зафиксировать';
$string['commitkeepstaged'] = 'Не очищать этап';
$string['commitmessage'] = 'Сообщение о фиксации';
$string['commitmessageempty'] = 'Пожалуйста, введите сообщение о фиксации';
$string['commitstage'] = 'Зафиксировать строки этапа';
$string['commitstage_help'] = 'Зафиксировать весь этап перевода в репозитории AMOS. Перед фиксацией этапа автоматически выполняются команды «Убрать нефиксируемые строки» и «Обновить». Сохраняются только строки, подлежащие фиксации. Это значит, что будут сохранены только те переводы, которые ниже отмечены зеленым. После фиксации, этап будет очищен.';
$string['committable'] = 'Вы можете фиксировать изменения в этом языковом пакете';
$string['committableall'] = 'все языки';
$string['committablenone'] = 'ни один язык не разрешен - свяжитесь с администратором AMOS';
$string['componentsall'] = 'Выбрать все';
$string['componentsapp'] = 'Мобильное приложение Moodle';
$string['componentsnone'] = 'Очистить выделение';
$string['componentsstandard'] = 'Выбрать стандартные';
$string['confirmaction'] = 'Это действие нельзя будет отменить? Вы уверены?';
$string['contribaccept'] = 'Принять';
$string['contribactions'] = 'Действия со вкладом в перевод';
$string['contribactions_help'] = 'В зависимости от Ваших прав и организации процесса приема вклада в перевод, Вам будут доступны некоторые из следующих действий:

* Применить - скопировать внесенный перевод в свой этап и не изменять рассматриваемую запись.
* Поручить мне - назначить самого себя в качестве ответственного за рассмотрение этого вклада и его интеграцию.
* Отказаться - освободить место ответственного за рассмотрение этого вклада.
* Начать рассмотрение - назначить себя ответственным, установить статус «На рассмотрении» и скопировать внесенный перевод в свой этап.
* Принять - отметить вклад как принятый.
* Отклонить - отметить вклад как отклоненный. Пожалуйста, укажите причины в комментарии.

Внесший вклад пользователь информируется по электронной почте при любых изменениях статуса вклада.';
$string['contribapply'] = 'Применить';
$string['contribassignee'] = 'Ответственный';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Поручить мне';
$string['contribauthor'] = 'Автор';
$string['contribclosedno'] = 'Скрыть рассмотренный вклад';
$string['contribclosedyes'] = 'Показать рассмотренный вклад';
$string['contribcomponents'] = 'Компоненты';
$string['contribid'] = 'Идентификатор';
$string['contribincomingnone'] = 'Входящих предложений о вкладе нет';
$string['contribincomingsome'] = 'Входящие предложения о вкладе ({$a})';
$string['contriblanguage'] = 'Язык';
$string['contriblanguagebutton'] = 'Преобразовать';
$string['contriblanguagechange'] = 'Как исправить неправильно указанный язык';
$string['contriblanguagechange_help'] = 'Если при отправке вклада в перевод по ошибке был неправильно указан язык, выберите правильный язык в выпадающем списке ниже и нажмите кнопку «Преобразовать».';
$string['contriblanguagereport'] = 'Как сообщить о неправильно указанном языке';
$string['contriblanguagereport_help'] = 'Если при отправке вклада в перевод по ошибке был неправильно указан язык, пожалуйста, скопируйте URL вклада и отправьте его по электронной почте по адресу «translation@moodle.org». Язык вклада в перевод будет исправлен на правильный.';
$string['contriblanguagewrong'] = 'Неправильно указан язык?';
$string['contribnotif'] = '[AMOS] Уведомление о вкладе в перевод (№{$a->id})';
$string['contribnotifaccepted'] = 'Пользователь {$a->fullname} принял Ваш вклад в перевод №{$a->id} «{$a->subject}»

---------------------------------------------------------------------
Страница вклада в перевод: {$a->contriburl}';
$string['contribnotifcommented'] = 'Пользователь {$a->fullname} оставил комментарий по поводу вклада в перевод №{$a->id} «{$a->subject}»
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
Страница вклада в перевод: {$a->contriburl}';
$string['contribnotifconverted'] = 'Пользователь {$a->fullname} преобразовал Ваш вклад в перевод №{$a->id} «{$a->subject}»

Спасибо за Ваш вклад в перевод. Но похоже, что по ошибке был неправильно указан язык перевода. Поэтому Ваш вклад в перевод был отклонен в неправильно указанном языковом пакете и перенесен в правильный для рассмотрения ответственным за языковой пакет. Никаких дополнительных действий от Вас не требуется.

Впредь, перед тем как приступить к переводу, обязательно проверьте, что выбрали именно свой язык.

---------------------------------------------------------------------
Страница исходного вклада в перевод: {$a->contriborigurl}
Страница исправленного вклада в перевод: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Ожидаются Ваши действия над вкладом в перевод №{$a->id} «{$a->subject}».

Предполагается, что Вы, как ответственный за языковой пакет, рассмотрите вклад в перевод и, при необходимости, зафиксируете предлагаемые изменения. После этого необходимо установить для вклада в перевод статус  «Принят» или «Отклонен».

Дополнительная информация (на английском языке):  {$a->docsurl}
---------------------------------------------------------------------
Страница вклада в перевод: {$a->contriburl}';
$string['contribnotifrejected'] = 'Ответственный за языковой пакет {$a->fullname} отклонил Ваш вклад в перевод №{$a->id} «{$a->subject}»

---------------------------------------------------------------------
Страница вклада в перевод: {$a->contriburl}';
$string['contribnotifsubmitted'] = 'Пользователь {$a->fullname} представил новый перевод №{$a->id} «{$a->subject}»
---------------------------------------------------------------------

{$a->message}

* Язык: {$a->language}
* Компоненты: {$a->components}
* Число строк: {$a->strings}

---------------------------------------------------------------------
Страница вклада в перевод: {$a->contriburl}';
$string['contribreject'] = 'Отклонить';
$string['contribresign'] = 'Отказаться';
$string['contribstaged'] = 'Этап содержит вклад <a href="contrib.php?id={$a->id}">№{$a->id}</a> пользователя {$a->author}';
$string['contribstagedinfo'] = 'Этап содержит вклад';
$string['contribstagedinfo_help'] = 'Этап содержит строки, являющиеся присланным членом сообщества вкладом в перевод. Предполагается, что ответственный за языковой пакет просмотрит их, после чего установит соответствующий статус вклада: «Принят» (если строки были зафиксированы) или «Отклонен» (если по какой-то причине строки не могут быть включены в официальный языковой пакет).';
$string['contribstartreview'] = 'Начать рассмотрение';
$string['contribstatus'] = 'Статус';
$string['contribstatus0'] = 'Новый';
$string['contribstatus10'] = 'На рассмотрении';
$string['contribstatus20'] = 'Отклонен';
$string['contribstatus30'] = 'Принят';
$string['contribstatus_help'] = 'Процесс обработки внесенных переводов состоит из следующих этапов:

* Новый - вклад был представлен, но еще не был рассмотрен
* На рассмотрении - рассмотрение вклада было поручено ответственному за языковой пакет
* Отклонен - ответственный за языковой пакет отклонил вклад и, возможно, оставил объяснение в виде комментария
* Принят - вклад был принят ответственным за языковой пакет';
$string['contribstrings'] = 'Строки';
$string['contribstringseq'] = '{$a->orig} - новая(ые)';
$string['contribstringsnone'] = '{$a->orig} (все строки уже переведены в языковом пакете)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} из них были переведены ранее)';
$string['contribsubject'] = 'Тема';
$string['contribsubmittednone'] = 'Нет представленных предложений о вкладе';
$string['contribsubmittedsome'] = 'Ваши предложения о вкладе ({$a})';
$string['contribtimemodified'] = 'Изменен';
$string['contribute'] = 'Внесите свой вклад';
$string['contributenow'] = 'Начните сейчас!';
$string['contributestats'] = '<strong>{$a->count}</strong> - столько строк переводов загружено участниками сообщества в AMOS на текущий момент.';
$string['contributethanks'] = 'Выражаем благодарность {$a->listcontributors} за их недавний вклад в перевод!';
$string['contributethankslist'] = '{$a->contributor1}, {$a->contributor2}, {$a->contributor3} и {$a->contributor4}';
$string['contributions'] = 'Вклады';
$string['creditsaddcontributor'] = 'Добавить участника';
$string['creditsaddmaintainer'] = 'Добавить ответственного';
$string['creditscontact'] = 'Отправить сообщение';
$string['creditscontributors'] = 'Другие участники';
$string['creditsdelcontributor'] = 'Убрать участника';
$string['creditsdelmaintainer'] = 'Убрать ответственного';
$string['creditsmaintainedby'] = 'Ответственные';
$string['creditsnomaintainer'] = 'Пока нет ответственных. <a href="{$a->url}">Станьте первым!</a>';
$string['creditsthanks'] = 'На этой странице мы хотели бы поблагодарить всех, кто внес свой вклад в перевод Moodle. Их работа сделала возможным распространение Moodle во всем мире.';
$string['creditstitlelong'] = 'Ответственные за языковые пакеты и участники';
$string['creditstitleshort'] = 'Участники';
$string['diff'] = 'Сравнить';
$string['diffstringmode'] = 'Переключить режим сравнения';
$string['err_exception'] = 'Ошибка: {$a}';
$string['err_invalidlangcode'] = 'Некорректный код языка';
$string['err_parser'] = 'Ошибка синтаксического анализа: {$a}';
$string['filtercmp'] = 'Компоненты';
$string['filtercmp_desc'] = 'Выводить строки, относящиеся к следующим компонентам';
$string['filtercmpnothingselected'] = 'Выберите один или несколько компонентов';
$string['filterlng'] = 'Языки';
$string['filterlng_desc'] = 'Выводить переводы на следующие языки';
$string['filterlngnothingselected'] = 'Выберите язык(и)';
$string['filtermis'] = 'Прочее';
$string['filtermis_desc'] = 'Дополнительные условия для отбора выводимых строк';
$string['filtermisfapp'] = 'только строки мобильного приложения Moodle';
$string['filtermisfhas'] = 'только переведенные строки';
$string['filtermisfhlp'] = 'только строки справки';
$string['filtermisfmis'] = 'только еще не переведенные и устаревшие строки';
$string['filtermisfout'] = 'только устаревшие строки';
$string['filtermisfstg'] = 'только строки этого этапа';
$string['filtersid'] = 'Идентификатор строки';
$string['filtersid_desc'] = 'Индекс строки в массиве';
$string['filtersidpartial'] = 'совпадение с частью строки';
$string['filtertxt'] = 'Подстрока';
$string['filtertxt_desc'] = 'Строка должна содержать указанный текст';
$string['filtertxtcasesensitive'] = 'с учетом регистра';
$string['filtertxtregex'] = 'регулярное выражение';
$string['filterver'] = 'Версия';
$string['filterver_desc'] = 'Выводить строки из этой версии Moodle';
$string['filtervernothingselected'] = 'Выберите версию(и)';
$string['foundmissing'] = 'Отсутствует: {$a}';
$string['foundmissingonthispage'] = 'На этой странице: {$a}';
$string['foundtotal'] = 'Найдено: {$a}';
$string['googletranslate'] = 'спросить google';
$string['importfile'] = 'Импортировать переведенные строки из файла';
$string['importfile_help'] = 'Если у Вас есть строки, переведенные оффлайн, Вы можете загрузить их в текущий этап с помощью этой формы.

* Файл должен быть корректным языковым PHP файлом Moodle. Примеры можно увидеть в каталоге «/lang/en/» Вашей установки Moodle.
* Имя файла должно соответствовать одной из английских строк, определяющих нужный компонент (например, «moodle.php», «assignment.php» или «enrol_manual.php»).

Все найденные в файле строки будут добавлены в этап перевода для выбранных версии и языка.

Несколько файлов PHP могут быть обработаны одновременно, если Вы поместите их в ZIP-файл.';
$string['language'] = 'Язык';
$string['languagepacks'] = 'Дополнительные языковые пакеты можно установить на ваш сайт с системой Moodle через меню <em>Администрирование > Язык > Языковые пакеты</em> или вручную. Дополнительные сведения смотрите на странице <a href="https://docs.moodle.org/en/Language_packs">Language packs documentation (на английском языке)</a>.';
$string['languages'] = 'Языки';
$string['languagesall'] = 'Выбрать все';
$string['languagesnone'] = 'Очистить выделение';
$string['lastavailable'] = 'Последняя доступная версия';
$string['lessfilteringoptions'] = 'Меньше настроек';
$string['log'] = 'Журнал';
$string['logfilterbranch'] = 'Версии';
$string['logfiltercommithash'] = 'Хэш git';
$string['logfiltercommitmsg'] = 'Сообщение о фиксации содержит';
$string['logfiltercommits'] = 'Фильтр фиксаций';
$string['logfiltercommittedafter'] = 'Представленные после';
$string['logfiltercommittedbefore'] = 'Представленные до';
$string['logfiltercomponent'] = 'Компоненты';
$string['logfilterlang'] = 'Языки';
$string['logfiltershow'] = 'Вывести отфильтрованные фиксации и строки';
$string['logfiltersource'] = 'Источник';
$string['logfiltersourceamos'] = 'amos (переводчик с веб-интерфейсом)';
$string['logfiltersourceautomerge'] = 'автоперенос (перевод скопирован из другой ветви)';
$string['logfiltersourcebot'] = 'bot (операции по пакетной обработке, выполненные скриптом)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOScript в сообщениях о фиксациях)';
$string['logfiltersourcefixdrift'] = 'fixdrift (исправленный перенос между AMOS и git)';
$string['logfiltersourcegit'] = 'git (зеркало в git исходного кода Moodle и языковых пакетов для версий 1.x)';
$string['logfiltersourceimport'] = 'import (строки, импортированные из плагинов)';
$string['logfiltersourcerevclean'] = 'revclean (процесс обратной чистки)';
$string['logfilterstringid'] = 'Идентификатор строки';
$string['logfilterstrings'] = 'Фильтр строк';
$string['logfilterusergrp'] = 'Зафиксировавший';
$string['logfilterusergrpor'] = 'или';
$string['maintainers'] = 'Ответственные';
$string['manageamos'] = 'Управление AMOS';
$string['markuptodate'] = 'Пометить перевод как актуальный';
$string['markuptodatelabel'] = 'отметить перевод как актуальный';
$string['messageprovider:checker'] = 'Результаты проверки языкового пакета';
$string['messageprovider:contribution'] = 'Уведомления о вкладе в перевод';
$string['morefilteringoptions'] = 'Больше настроек';
$string['newlanguage'] = 'Новый язык';
$string['nodiffs'] = 'Различий не найдено';
$string['nofiletoimport'] = 'Пожалуйста, укажите файл в форме импорта.';
$string['nologsfound'] = 'Ни одной строки не найдено. Пожалуйста, измените настройки фильтра.';
$string['nostringsfound'] = 'Ни одной строки не найдено.';
$string['nostringtoimport'] = 'В файле не найдено корректных строк. Убедитесь в корректности имени файла и в том, что он правильно отформатирован.';
$string['nothingtostage'] = 'В результате операции не найдено сток, которые можно было бы поместить в этап перевода.';
$string['novalidzip'] = 'Не удается извлечь архив.';
$string['numofcommitsabovelimit'] = 'Найдено {$a->found} фиксаций, соответствующих фильтру, используются {$a->limit} наиболее свежих.';
$string['numofcommitsunderlimit'] = 'Найдено {$a->found} фиксаций, соответствующих фильтру';
$string['numofmatchingstrings'] = 'Фильтру строк соответствуют {$a->strings} изменения(ий) строк в {$a->commits} фиксации(ях).';
$string['outdatednotcommitted'] = 'Устаревшая строка';
$string['outdatednotcommitted_help'] = 'AMOS определил, что строка может устареть, так как после перевода произошли изменения в английской версии. Проверьте перевод.';
$string['outdatednotcommittedwarning'] = 'Устарела';
$string['ownstashactions'] = 'Действия с копилкой';
$string['ownstashactions_help'] = '* Применить - скопировать переведенные строки из копилки в текущий этап и не изменять копилку. Если строка уже присутствует в текущем этапе, она будет перезаписана строкой из копилки.
* Вытряхнуть - переместить переведенные строки из копилки в текущий этап и опустошить копилку. (То есть Применить и Выбросить).
* Выбросить - выбросить все накопленные строки.
* Направить ответственным - открывает форму для отправки копилки на рассмотрение официальным ответственным за языковой пакет, чтобы они могли внести Ваш вклад в официальный языковой пакет.';
$string['ownstashes'] = 'Ваши копилки';
$string['ownstashes_help'] = 'Это список всех Ваших копилок.';
$string['ownstashesnone'] = 'У Вас не найдено копилок';
$string['permalink'] = 'Постоянная ссылка';
$string['placeholder'] = 'Подстановки';
$string['placeholder_help'] = 'Подстановки - это специальные выражения вида «{$a}» или «{$a->something}» в строке. Когда строка выводится они заменяются конкретными значениями.

Очень важно сохранять их в переводе в точно таком же виде, как в исходной строке. Не переводите их и не меняйте направление текста в них.';
$string['placeholderwarning'] = 'содержит подстановки';
$string['pluginclasscore'] = 'Подсистемы ядра';
$string['pluginclassnonstandard'] = 'Нестандартные плагины';
$string['pluginclassstandard'] = 'Стандартные плагины';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = '{$a->author} - вклад в перевод №{$a->id}';
$string['presetcommitmessage2'] = 'В ветку {$a->target} добавлены недостающие строки из ветки {$a->source}';
$string['presetcommitmessage3'] = 'Исправление различий между {$a->versiona} и {$a->versionb}';
$string['privileges'] = 'Ваши привилегии';
$string['privilegesnone'] = 'Вы не можете редактировать публичную информацию.';
$string['processing'] = 'Обработка ...';
$string['quicklinks'] = 'Быстрый переход';
$string['quicklinks_amos'] = 'AMOS - инструмент перевода Moodle';
$string['quicklinks_forum'] = 'Форум системы AMOS (на английском языке)';
$string['quicklinks_manual'] = 'Руководство пользователя (на английском языке)';
$string['quicklinks_newcomers'] = 'Помощь для начинающих (на английском языке)';
$string['requestactions'] = 'Действие';
$string['requestactions_help'] = '* Применить - скопировать переведенный строки из запроса на добавление в Вашу этап. Если строка уже есть в текущем этапе, она будет заменена строкой из копилки.
* Скрыть - заблокировать запрос на добавление, чтобы он больше не отображался.';
$string['savefilter'] = 'Вывести строки';
$string['script'] = 'AMOScript';
$string['script_help'] = 'AMOScript - это набор команд для управления репозиторием AMOS.';
$string['scriptexecute'] = 'Выполнить и поместить результат в этап перевода';
$string['sourceversion'] = 'Исходная версия';
$string['stage'] = 'Этап';
$string['stageactions'] = 'Действия над этапом';
$string['stageactions_help'] = '* Редактировать строки этого этапа - устанавливает настройки фильтра перевода так, чтобы отображались только строки текущего этапа.
* Убрать нефиксируемые строки - из этапа убираются все строки, которые не разрешено фиксировать. Это действие автоматически выполняется перед фиксацией.
* Обновить - из этапа удаляются все переводы, которые или не изменяют текущий перевод, или старше, чем наиболее свежие переводы в репозитории. Это действие автоматически выполняется перед фиксацией.
* Очистить этап - этап очищается, при этом все сделанные переводы пропадают.';
$string['stagedownload'] = 'Скачать';
$string['stageedit'] = 'Редактировать строки этого этапа';
$string['stageprune'] = 'Убрать нефиксируемые строки';
$string['stagerebase'] = 'Обновить';
$string['stagestringsnocommit'] = 'Строк в этапе: {$a->staged}';
$string['stagestringsnone'] = 'В этапе нет ни одной строки';
$string['stagestringssome'] = 'Строк в этапе: {$a->staged}. Из них может быть зафиксировано: {$a->committable}.';
$string['stagesubmit'] = 'Направить ответственным за языковой пакет';
$string['stagetoolopen'] = 'Открыть этап';
$string['stagetranslation'] = 'Перевод';
$string['stagetranslation_help'] = 'Отображаются строки перевода этого этапа, предназначенные для фиксации. Цвет фона ячейки обозначает следующее:

* Зеленый - Вы добавили недостающий перевод строки и Вам разрешено зафиксировать перевод.
* Желтый - Вы изменили строку перевода и Вам разрешено зафиксировать перевод.
* Голубой -  Вы изменили строки перевода или добавили недостающие, но Вам не разрешено зафиксировать перевод для данного языка.
* Бесцветный - перевод в этом этапе совпадает с текущим переводом, поэтому его не нужно фиксировать.';
$string['stageunstageall'] = 'Очистить этап';
$string['stashactions'] = 'Сохранить проделанную работу';
$string['stashactions_help'] = 'Копилка - это снимок текущего этапа перевода. Копилки могут быть направлены официальным ответственным за языковой пакет для включения в языковой пакет.';
$string['stashapply'] = 'Применить';
$string['stashautosave'] = 'Копилка с автоматически сохраненной резервной копией';
$string['stashautosave_help'] = 'Эта копилка содержит наиболее свежий снимок Вашего этапа. Ее можно использовать, например, как резервную копию, в том случае, когда все строки были случайно очищены.
Используйте команду «Применить», чтобы скопировать все строки из копилки обратно в этап (при этом соответствующие строки этого этапа будут заменены).';
$string['stashcomponents'] = '<span>Компоненты:</span> {$a}';
$string['stashdownload'] = 'Скачать';
$string['stashdrop'] = 'Выбросить';
$string['stashes'] = 'Копилки';
$string['stashlanguages'] = '<span>Языки:</span> {$a}';
$string['stashpop'] = 'Вытряхнуть';
$string['stashpush'] = 'Сложить все строки этого этапа в новую копилку';
$string['stashstrings'] = '<span>Число строк:</span> {$a}';
$string['stashsubmit'] = 'Направить ответственным';
$string['stashsubmitdetails'] = 'Подробности вклада';
$string['stashsubmitmessage'] = 'Сообщение';
$string['stashsubmitsubject'] = 'Тема';
$string['stashtitle'] = 'Название копилки';
$string['stashtitledefault'] = 'Идет работа - {$a->time}';
$string['stdvernotebetween'] = 'Стандартный с {$a->from} до {$a->to}';
$string['stdvernotefrom'] = 'Стандартный с {$a->from}';
$string['stdvernoteto'] = 'Стандартный до {$a->to}';
$string['stringhistory'] = 'история';
$string['strings'] = 'Строки';
$string['stringversionnotlatest'] = 'существует более новая версия';
$string['submitting'] = 'Отправка вклада на рассмотрение';
$string['submitting_help'] = 'Это действие приведет к отправке строк официальным ответственным за языковой пакет. У ответственных будет возможность добавить результаты Вашего труда к своему этапу перевода, рассмотреть их и, в конце концов, зафиксировать изменения. Пожалуйста, расскажите в сообщении для них о своей работе и о том, почему же Вы хотите, чтобы ваш вклад был учтен.';
$string['targetversion'] = 'Конечная версия';
$string['timeline'] = 'История изменения строки';
$string['timelineheading'] = 'История изменения строки: {$a->component} | {$a->strname}';
$string['translatortool'] = 'Переводчик';
$string['translatortoolopen'] = 'Открыть переводчик';
$string['translatortranslation'] = 'Перевод';
$string['translatortranslation_help'] = 'Щелкните на ячейке, чтобы превратить ее в поле для редактирования. Введите перевод и щелкните вне ячейки, чтобы добавить перевод в текущий этап.
Цвет фона ячейки обозначает следующее:

* Зеленый - строка уже переведена и Вам разрешено изменить перевод.
* Желтый - Возможно, что строка устарела. Английская версия строки могла измениться после перевода.
* Красный - Строка не переведена.
* Голубой - Вы изменили перевод и он сохранен в текущем этапе.
* Серый - эту строку нельзя перевести с помощью AMOS. Например, строки для Moodle 1.9 можно редактировать только устаревшим способом, работая напрямую с CVS.

У ответственных за перевод отображается красная отметка в правом верхнем углу тех ячеек, которые им разрешено зафиксировать.';
$string['typecontrib'] = 'Дополнительные плагины';
$string['typecontribbadge'] = 'Дополнительный';
$string['typecore'] = 'Подсистемы ядра';
$string['typecorebadge'] = 'Ядро';
$string['typestandard'] = 'Стандартные плагины';
$string['typestandardbadge'] = 'Стандартный';
$string['unableenfixaddon'] = 'Исправления английских строк разрешены только для стандартных плагинов';
$string['unableenfixcountries'] = 'Названия стран скопированы из ISO 3166-1';
$string['unableunmaintained'] = 'На текущий момент нет ответственного за языковой пакет «{$a}», поэтому вклады в перевод не принимаются. Пожалуйста, подумайте, возможно Вы захотите стать ответственным за этот языковой пакет.';
$string['unstage'] = 'Убрать из этапа';
$string['unstageconfirm'] = 'Подтвердите удаление из этапа';
$string['unstageconfirmlong'] = '<p>Вы собираетесь удалить из текущего этапа перевод строки <code>{$a->stringid}</code>, компонент <code>{$a->component}</code>, языковой пакет <code>{$a->language}</code>.</p><p>Вы уверены?</p>';
$string['unstaging'] = 'Удаление из этапа';
$string['untranslate'] = 'удалить перевод';
$string['untranslateconfirm'] = '<p>Вы собираетесь удалить существующий перевод строки <code>{$a->stringid}</code>, компонент <code>{$a->component}</code> из версии <code>{$a->since}</code> и всех более новых версий языкового пакета <code>{$a->language}</code>.</p><p>Вы уверены?</p>';
$string['untranslatetitle'] = 'Удаление перевода из языкового пакета';
$string['untranslating'] = 'Удаление перевода';
$string['userdefaultreset'] = 'Сбросить к моим настройкам по умолчанию';
$string['userdefaultsave'] = 'Сохранить как мои настройки по умолчанию';
$string['version'] = 'Версия';
