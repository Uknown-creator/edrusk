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
 * Strings for component 'treasurehunt', language 'ru', version '3.11'.
 *
 * @package     treasurehunt
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytoend'] = 'Завершить выбранную игру до';
$string['activitytoend_help'] = 'Выбранная игра должна быть завершена до отображения текущей подсказки.
Для того, чтобы активный элемент курса отображался в списке, должна быть включено завершение элемента в настройках Moodle, курса и самого элемента.';
$string['activitytoendovercome'] = 'Игра «<strong>{$a}</strong>» пройдена';
$string['activitytoendwarning'] = 'Сначала вы должны завершить игру, чтобы найти выход.';
$string['actnotavailableyet'] = 'Игра пока недоступна';
$string['add'] = 'Добавить';
$string['addingroad'] = 'Добавить маршрут';
$string['addingstage'] = 'Добавить этап';
$string['addroad_tour'] = 'Добавьте один или несколько маршрутов, по которым пройдут ваши ученики.';
$string['addsimplequestion'] = 'Добавить простой вопрос';
$string['addsimplequestion_help'] = 'Добавляет простой вопрос перед отображением подсказки этого этапа';
$string['addstage_tour'] = 'Каждый маршрут должен иметь два или более этапа. Каждый этап дает ключ к поиску следующего.';
$string['aerialmap'] = 'Спутник';
$string['aerialview'] = 'Спутник';
$string['allowattemptsfromdate'] = 'Разрешить попытки с';
$string['allowattemptsfromdate_help'] = 'Если включено, ученики не смогут играть до этой даты.
Если отключено, ученики смогут сразу начать игру.';
$string['alwaysshowdescription'] = 'Всегда показывать описание';
$string['alwaysshowdescription_help'] = 'При отключенном параметре описание игры, приведенное выше, будет доступно студентам только после даты, указанной в параметре "Разрешить попытки с".';
$string['answerwarning'] = 'Вы должны сначала ответить на вопрос';
$string['areyousure'] = 'Вы уверены?';
$string['attempt'] = 'Попытка';
$string['attempthistory'] = 'История попыток {$a}';
$string['attemptsdeleted'] = 'Попытки удалены';
$string['autolocate_tour'] = 'Во время игры Вы можете самостоятельно определить свое местоположение с помощью этой кнопки, используя GPS вашего устройства. Пожалуйста, дайте разрешение на использование "местоположения".';
$string['availability'] = 'Доступность';
$string['back'] = 'Назад';
$string['backtocourse'] = 'Вернуться в курс';
$string['basemaps'] = 'Вид карты';
$string['browsemode'] = 'Просмотреть';
$string['cancel'] = 'Отмена';
$string['changecamera'] = 'Смена камеры';
$string['changetogroupmode'] = 'Игровой режим был изменён для групповой игры';
$string['changetoindividualmode'] = 'Игровой режим был изменён для индивидуальной игры';
$string['changetoplaywithmove'] = 'Режим игры изменился на игру с перемещением';
$string['changetoplaywithoutmoving'] = 'Режим игры изменился на статическую игру';
$string['cleartreasurehunt'] = 'Сброс игры';
$string['cleartreasurehunt_done'] = 'Игра была сброшена. Вся деятельность участников была удалена.';
$string['cleartreasurehuntconfirm'] = 'Остерегайтесь этого действия. При продолжении все записанные действия будут удалены. Обычно это действие требуется только в том случае, если вам нужно изменить количество дорог или этапов, но изменение блокируется, потому что кто-то начал играть в игру.';
$string['completionfinish'] = 'Требовать закончить этап.';
$string['completionfinish_help'] = 'Выполнено, когда пользователь проходит все этапы маршрута.';
$string['configintro'] = 'Заданные здесь значения используются в настройках по умолчанию, когда вы создаете новую охоту за сокровищами.';
$string['configmaximumgrade'] = 'Максимальная оценка по умолчанию за игру «Поиск сокровищ».';
$string['confirm'] = 'Применить';
$string['confirmdeletestage'] = 'Этап был успешно удален';
$string['continue'] = 'Продолжить';
$string['correctanswer'] = 'Правильный ответ';
$string['customlayername'] = 'Название слоя';
$string['customlayername_help'] = 'Если вы используете индивидуальный слой, заголовок необходим для отображения его на картах или у ваших пользователей. Если заголовок пуст, индивидуальный слой полностью отключается.';
$string['customlayertype'] = 'Тип слоя';
$string['customlayertype_help'] = 'Слой может быть только на заднем плане или может располагаться поверх стандартных базовых карт.';
$string['customlayerwms'] = 'Сервис WMS';
$string['customlayerwms_help'] = 'Использовать слой карты из сервиса OGC WMS. (Например, WMS лесных экосистем EUNIS можно настроить с помощью: WMS: <code style="overflow-wrap: break-word;word-wrap: break-word;">http://bio.discomap.eea.europa.eu/arcgis/services/Ecosystem/Ecosystems/MapServer/WMSServer</code> PARAMS: <code>LAYERS=4</code>)';
$string['custommapbaselayer'] = 'Изображение показывается в качестве ДОПОЛНИТЕЛЬНОГО фона карты';
$string['custommapimagefile'] = 'Пользовательское изображение для карты';
$string['custommapimagefile_help'] = 'Загрузите изображение достаточного разрешения и заполните следующие 4 поля координатами проекции над землей';
$string['custommapmaxlat'] = 'Северная широта';
$string['custommapmaxlat_help'] = 'Северная широта изображения. Использовать "." как десятичную запятую. Ниже 85 градусов и выше экватора.';
$string['custommapmaxlon'] = 'Восточная долгота';
$string['custommapmaxlon_help'] = 'Восточная долгота изображения. Использовать "." как десятичную запятую. Меньше 180 градусов и восточнее Гринвича.';
$string['custommapminlat'] = 'Южная широта';
$string['custommapminlat_help'] = 'Южная широта изображения. Использовать "." как десятичную запятую. Больше -85 градусов и ниже экватора.';
$string['custommapminlon'] = 'Западная долгота';
$string['custommapminlon_help'] = 'Западная долгота изображения. Использовать  "." как десятичную запятую. Больше -180 градусов и западнее Гринвича.';
$string['custommapnongeographic'] = 'Изображение не является географическим';
$string['custommaponlybaselayer'] = 'Изображение показывается ТОЛЬКО как фон карты';
$string['custommapoverlaylayer'] = 'Изображение выводится поверх стандартной карты';
$string['custommapping'] = 'Пользовательская карта';
$string['customwmsparams'] = 'параметры WMS';
$string['customwmsparams_help'] = 'Эти параметры определяют внешний вид карты. Формат соответствует следующему формату: "LAYERS=background,streets&STYLES=blue,default" (Например, EUNIS Forest Ecosystems WMS может быть сконфигурирована с помощью: WMS: <code style="overflow-wrap: break-word;word-wrap: break-word;">http://bio.discomap.eea.europa.eu/arcgis/services/Ecosystem/Ecosystems/MapServer/WMSServer</code> PARAMS: <code>LAYERS=4</code>)';
$string['cutoffdate'] = 'Дата истечения срока';
$string['cutoffdate_help'] = 'Если дата установлена, то без её продления попытки поиска сокровищ не будут приниматься после этой даты.';
$string['cutoffdatefromdatevalidation'] = 'Дата истечения срока должна стоять после даты на разрешение заявки.';
$string['discoveredlocation'] = 'Открытое местоположение';
$string['donetutorial'] = 'Конец';
$string['editactivity_help'] = 'Пошаговое руководство по созданию игры «Поиск сокровищ» Вы можете  <a href="http://juacas.github.io/moodle-mod_treasurehunt/create_activity.html"> найти на странице.</a>';
$string['editend_tour'] = 'Наслаждайтесь созданием захватывающих игр для своих учеников!';
$string['editingroad'] = 'Редактирование маршрута';
$string['editingstage'] = 'Редактирование этапа';
$string['editingtreasurehunt'] = 'Редактирование игры';
$string['edition'] = 'Панель редактирования';
$string['edition_help'] = 'Для создания локаций выберите этап, который хотите редактировать';
$string['editmode'] = 'Редактирование';
$string['editroad'] = 'Редактировать маршрут';
$string['editstage'] = 'Редактировать этап';
$string['edittreasurehunt'] = 'Изменить маршруты и этапы';
$string['errcorrectanswers'] = 'Выберите правильный ответ';
$string['errcorrectsetanswerblank'] = 'Правильный ответ задан, но ответ пуст.';
$string['erremptystage'] = 'Все этапы должны иметь по крайней мере одну геометрию, чтобы маршрут был действительным';
$string['errnocorrectanswers'] = 'Должен быть только один правильный ответ';
$string['errnumeric'] = 'Введите десятичное число';
$string['error'] = 'Ошибка';
$string['errpenalizationexceed'] = 'Штраф не может быть больше 100';
$string['errpenalizationfall'] = 'Штраф не может быть меньше 0';
$string['errsendinganswer'] = 'Маршрут был обновлен, когда вы отправляли ответ, попробуйте еще раз';
$string['errsendinglocation'] = 'Маршрут был обновлен, пока вы отправляли свое местоположение, попробуйте еще раз';
$string['errvalidroad'] = 'Должно быть по крайней мере два этапа, которые имеют по крайней мере одну геометрию, чтобы маршрут был действительным';
$string['eventattemptsubmitted'] = 'Попытка представлена';
$string['eventattemptsucceded'] = 'Этап пройден';
$string['eventhuntsucceded'] = 'Поиск сокровищ успешно окончен';
$string['eventplayerentered'] = 'Начавший игру участник';
$string['eventroadcreated'] = 'Маршрут создан';
$string['eventroaddeleted'] = 'Маршрут удален';
$string['eventroadupdated'] = 'Маршрут обновлен';
$string['eventstagecreated'] = 'Этап создан';
$string['eventstagedeleted'] = 'Этап удален';
$string['eventstageupdated'] = 'Этап обновлен';
$string['exit'] = 'Вернуться в курс';
$string['failedlocation'] = 'Неверное местоположение';
$string['faillocation'] = 'Это не подходящее место';
$string['gamemodeinfo'] = 'Режим игры: {$a}';
$string['gameupdatetime'] = 'Время обновления игры';
$string['gameupdatetime_help'] = 'Интервал времени в секундах между обновлением игры пользователем или другими.
Чем больше интервал, тем меньше запросов на обновление необходимо сделать, но больше времени уходит на то, чтобы сообщить о возможном изменении.
Он должен быть больше 0 секунд, иначе будет установлено время по умолчанию.';
$string['geolocation_needed'] = 'Чтобы играть в эту игру, нужна ваша геолокация.
<p>Чтобы активировать ее, перейдите в Настройки браузера -> Настройки сайта -> Местоположение и удалите исключение для этого сайта.
<p>Пожалуйста, перезагрузите эту страницу и нажмите "ДА", на запрос браузера о том, хотите ли вы поделиться своим местоположением.
<p>Для того, чтобы использовать GPS для обнаружения этого устройства во время поиска сокровищ, сервер должен быть доступен по защищенным URL-адресам HTTPS.
В противном случае можно использовать только режим "играть без движения", и игрокам нужно вручную указывать каждый этап на карте.
Если вы не можете решить эту проблему, обратитесь к администратору.';
$string['geolocation_needed_title'] = 'Это приложение требует геолокации';
$string['grade_explaination_fromabsolutetime'] = '{$a->rawscore}-{$a->penalization}%: Вы закончили охоту за {$a->yourtime}. Самое лучшее время было {$a->besttime}. Вы оштрафованы {$a->penalization}% из-за {$a->nolocationsfailed} неправильных мест, и {$a->noanswersfailed} неправильных ответов.';
$string['grade_explaination_fromposition'] = '{$a->rawscore}-{$a->penalization}%: Вы обнаружили {$a->nosuccessfulstages} этапы в положении {$a->position}. Вы оштрафованы {$a->penalization}% из-за {$a->nolocationsfailed} неправильных мест, и {$a->noanswersfailed} неправильных ответов.';
$string['grade_explaination_fromstages'] = '{$a->rawscore}-{$a->penalization}%: Вы обнаружили {$a->nosuccessfulstages} из {$a->nostages} этапов. Вы оштрафованы {$a->penalization}% из-за {$a->nolocationsfailed} неправильных мест, и {$a->noanswersfailed} неправильных ответов.';
$string['grade_explaination_fromtime'] = '{$a->rawscore}-{$a->penalization}%: Вам нужно за {$a->yourtime} завершить охоту. Самое лучшее время было {$a->besttime}. Вы оштрафованы {$a->penalization}% из-за {$a->nolocationsfailed} неправильных мест и {$a->noanswersfailed} неправильных ответов.';
$string['grade_explaination_temporary'] = 'Незаконченная охота, вы получаете 50% баллов от этапов: {$a->rawscore}-{$a->penalization}%: Вы обнаружили {$a->nosuccessfulstages} из {$a->nostages} этапов. Вы оштрафованы {$a->penalization}% из-за {$a->nolocationsfailed} неправильных мест и {$a->noanswersfailed} неправильных ответов.';
$string['gradefromabsolutetime'] = 'Оценка продолжительности поиска';
$string['gradefromposition'] = 'Оценка по позиции';
$string['gradefromstages'] = 'Оценка по этапам';
$string['gradefromtime'] = 'Оценка по времени окончания';
$string['grademethod'] = 'Метод оценки';
$string['grademethod_help'] = '<P><B>Оценка по этапам</B><P>
<UL>
<P>Каждый игрок (или команда) набирает очки пропорционально количеству пройденных этапов, составляющих 100%, когда маршрут полностью пройден, и 0%, когда не пройден ни один этап.</UL>

<P><B>Оценка от продолжительности охоты </B><P>
<UL>
<P>Охотник, который заканчивает путь за наименьшее время, выигрывает охоту и отмечает лучшее время.
Время отсчитывается с того момента, когда открывается начальный этап маршрута.
Это означает, что участники могут играть в разное время.
Оценка рассчитывается путем нахождения промежуточных значений между временем окончания, составляющим 50% от заданного времени окончания охоты,
и 100% от самого лучшего времени окончания. Игроки, которые не закончили
игру, получают оценку ниже 50, рассчитанную только по количеству пройденных этапов.
</UL>

<P><B>Оценка по времени окончания</B><P>
<UL>
<P>Охотник, который заканчивает игру первым, является победителем охоты.
Предполагается, что охотники играют одновременно.
Оценка рассчитывается путем нахождения промежуточных значений между временем окончания, составляющим 50% от заданного времени окончания охоты,
и 100% от самого лучшего времени окончания. Игроки, которые не закончили
игру получают оценку ниже 50, рассчитанную только по количеству пройденных этапов.
</UL>

<P><B>Оценка по позиции</B><P>
<UL>
<P>Оценка рассчитывается путем нахождения промежуточного значения между позицией в рейтинге,
таким образом, 100% набирает первый игрок и 50% последний .
Игроки, которые не закончили охоту, получают оценку ниже 50%.
просто по количеству решенных этапов.</UL>';
$string['grademethodinfo'] = 'Метод оценки: {$a->type}. Штраф за местоположение: {$a->gradepenlocation}%.
Штраф за ответ: {$a->gradepenanswer}%';
$string['gradepenanswer'] = 'Штраф за недостаточный ответ';
$string['gradepenlocation'] = 'Штраф за неудачу в местоположении';
$string['gradepenlocation_help'] = 'Штраф выражается в % от оценки.
Например, если штраф равен 5.4, то игрок с 3 неудачами будет оштрафован
на 16,2% от оценки, то есть получит 83,8% от оценки, рассчитанной по остальным критериям.';
$string['gradesdeleted'] = 'Оценки поиска сокровищ удалены';
$string['gradingsummary'] = 'Итоговая оценка';
$string['group'] = 'Группа';
$string['groupactivityovercome'] = 'Этап игры {$a->position} успешно завершен {$a->user}: {$a->date}';
$string['groupid'] = 'Группа назначена на маршрут';
$string['groupid_help'] = 'Пользователи в этой группе назначаются на этот маршрут, когда игра начнется.
Если есть только один маршрут и выбран вариант "нет", то все участники будут играть по этому маршруте';
$string['groupingid'] = 'Группировка назначена на маршрут';
$string['groupingid_help'] = 'Группы в этой группировке назначаются на этот маршрут, когда игра начинается';
$string['groupinvalidroad'] = '{$a} назначил недействительный маршрут.';
$string['grouplocationfailed'] = 'Неправильное местоположение {$a->user} на этапе {$a->position} в день: {$a->date}';
$string['grouplocationovercome'] = 'Правильное местоположение {$a->user} на этапе {$а->position} в день: {$а->date}';
$string['groupmode'] = 'Студенты играют в группах';
$string['groupmode_help'] = 'Если разрешено, студенты будут разделены на группы в зависимости от конфигурации групп курса.
Каждый член команды может решить текущий этап и достижение каждого партнера является общим для команды. <br/>
Это позволяет «распараллелить» охоту и охватить больше территории. Участники видят общую информацию для всей команды.';
$string['groupmultipleroads'] = '{$a} имеет несколько назначенных маршрутов.';
$string['groupquestionfailed'] = 'Неправильный ответ {$a->user} на вопрос этапа {$a->position} в день: {$a->date}';
$string['groupquestionovercome'] = 'Правильный ответ {$a->user} на вопрос этапа {$a->position} в день: {$a->date}';
$string['groups'] = 'Группы';
$string['groupstageovercome'] = 'Этап {$a->position} пройден {$a->user} в день: {$a->date}';
$string['hello'] = 'Привет';
$string['history'] = 'История';
$string['huntcompleted'] = 'Вы уже завершили этот поиск сокровищ';
$string['incorrectanswer'] = 'Неправильный ответ';
$string['info'] = 'Информация';
$string['infovalidatelocation'] = 'Подтвердить местоположение этого этапа';
$string['invalidassignedroad'] = 'Назначенный маршрут не подтвержден';
$string['invalroadid'] = 'Маршрут не подтвержден';
$string['lastsuccessfulstage_tour'] = 'На этой панели вы можете узнать свой последний успешный этап. Это может быть ваш успешный этап вашей группы.';
$string['layers'] = 'Слои';
$string['loading'] = 'Загрузка';
$string['lockedaclue'] = 'Вы должны сыграть в игру «<strong>{$a}</strong>» чтобы разблокировать ключ';
$string['lockedaqclue'] = 'Вы должны сыграть в игру «<strong>{$a}</strong>»  и правильно ответить на следующий
вопрос, чтобы разблокировать ключ';
$string['lockedclue'] = 'Заблокированный ключ';
$string['lockedqclue'] = 'Вы должны правильно ответить на следующий вопрос, чтобы разблокировать ключ';
$string['locktimeediting'] = 'Редактирование времени блокировки';
$string['locktimeediting_help'] = 'Время в секундах, в течение которого пользователь может редактировать без обновления блокировки.
Чем больше время, тем меньше запросов на обновление блокировки должно быть сделано, но дольше блокируется страница редактирования, как после того, как пользователь закончит.
Оно должно быть больше 5 секунд, иначе будет установлено время по умолчанию.';
$string['map_tour'] = 'На этой карте вы можете управлять всеми компонентами забавной геолокационной игры!';
$string['mapplay_tour'] = 'На этой карте вы можете увидеть все попытки этой геолокационной игры! Пройденные этапы помечаются <img src="pix/success_mark.png" width="28"/>, а проваленные этапы <img src="pix/failure_mark.png" width="28"/>';
$string['mapview'] = 'Карта';
$string['modify'] = 'Корректировать';
$string['modulename'] = 'Поиск сокровищ';
$string['modulename_help'] = 'Этот модуль будет использоваться для выполнения геолокационной игры.
Наружная, внутренняя и виртуальная карты погони за сокровищами с геолокацией и QR-кодами.
Этот модуль для Moodle позволяет организовать серьезные игры на открытом воздухе с вашими учениками.
Охота за Сокровищами обеспечивает браузерное игровое приложение (нет необходимости устанавливать какое-либо платформозависимое приложение) и географический редактор для кодирования этапов игры.
Игра может быть настроена с целым рядом опций, которые делают модуль очень гибким и полезным во многих ситуациях: индивидуальных/командных,
перемещение/маркировка, оценка по времени, позиции, окончанию и т.д.
<p><b><a href = "https://juacas.github.io/moodle-mod_treasurehunt/index.html">Более подробная информация и пошаговое руководство в этой онлайн-презентации.</a></b></p>';
$string['modulenameplural'] = 'Поиск сокровищ';
$string['movingplay'] = 'Игра с перемещением';
$string['multiplegroupingsplay'] = 'Ваша группа назначила более одного маршрута, поэтому вы не можете играть.';
$string['multiplegroupsplay'] = 'Вы назначили более одного маршрута, поэтому вы не можете играть.';
$string['multiplegroupssameroadplay'] = 'Вы принадлежите к нескольким группам, назначенным на один и тот же маршрут, поэтому вы не можете играть.';
$string['multipleteamsplay'] = 'В игре нельзя быть участником более чем одной группы.';
$string['mustanswerquestion'] = 'Вы должны правильно ответить на вопрос, прежде чем продолжить';
$string['mustcompleteactivity'] = 'Вы должны пройти игру, прежде чем продолжить';
$string['mustcompleteboth'] = 'Вы должны ответить на вопрос правильно и пройти игру, прежде чем продолжить';
$string['nextstep'] = 'Следующий';
$string['noanswerselected'] = 'Вы должны выбрать ответ';
$string['noattempts'] = 'Вы не делали попыток';
$string['noexsitsstage'] = 'В базе данных нет номера этапа {$a}. Перезагрузите страницу';
$string['nogroupassigned'] = 'Нет группы, назначенной на этот маршрут';
$string['nogroupingplay'] = 'Вы не в группе, назначенной на маршрут, поэтому не можете играть.';
$string['nogroupplay'] = 'У вас нет назначенного маршрута, поэтому вы не можете играть.';
$string['nogrouproad'] = '{$a} не имеет назначенного  маршрута.';
$string['nomarks'] = 'Сначала отметьте на карте нужную точку. Поместите <img src="pix/my_location.png" width="28"/>';
$string['noresults'] = 'Результатов не найдено.';
$string['noroads'] = 'Маршруты пока еще не добавлены';
$string['notchangeorderstage'] = 'Вы не можете изменить порядок этапов после того, как на маршруте были сделаны попытки';
$string['notcreatestage'] = 'Попытки уже были сделаны на этом маршруте, вы не можете добавить больше этапов';
$string['notdeletestage'] = 'Попытки уже были сделаны на этом маршруте, вы не можете удалить любой этап';
$string['noteam'] = 'Не является членом какой-либо группы';
$string['notreasurehunts'] = 'В этом курсе нет "Поиска сокровищ"';
$string['nouserassigned'] = 'Нет пользователя, назначенного на этот маршрут';
$string['nouserattempts'] = '{$a} не предпринял никаких попыток';
$string['nouserroad'] = '{$a} не имеет назначенного маршрута.';
$string['nousersprogress'] = 'Ни один пользователь (группа) не имеет продвижения на этом маршруте.';
$string['outoftime'] = 'Время истекло';
$string['overcomefirststage'] = 'Чтобы открыть первый этап, вы должны начать с отмеченной области на карте';
$string['play'] = 'Играть';
$string['playend_tour'] = 'Наслаждайтесь поиском сокровищ с друзьями!';
$string['playstagewithoutmoving'] = 'Откройте этап без перемещения';
$string['playstagewithoutmoving_help'] = 'Если эта опция включена, студенты могут открыть этот этап, не перемещаясь в любое место.
Чтобы сделать это, каждый раз, когда студент делает простой щелчок на карте, создается метка, стирая предыдущую, если таковые имеются, с указанием последней требуемой точки. По завершении этапа, игра изменится на значение настроек по умолчанию';
$string['playstagewithqr'] = 'Откройте этап, прочитав этот QR-текст';
$string['playstagewithqr_help'] = 'Если этот параметр имеет значение, студенты могут открыть этот этап, сканируя QR-код, доступный в этом месте.';
$string['playwithoutmoving'] = 'Игра без движения';
$string['playwithoutmoving_help'] = 'Если эта опция включена, учащиеся могут играть со своих компьютеров, не переходя к месту. Чтобы сделать это, каждый раз, когда студент делает простой щелчок на карте, создается метка, стирая предыдущую, если таковые имеются, с указанием последней требуемой точки.';
$string['pluginadministration'] = 'Управление игрой "Поиск сокровищ"';
$string['pluginname'] = 'Поиск сокровищ';
$string['prevstep'] = 'Предыдущий';
$string['privacy:metadata_treasurehunt_attempts'] = 'Поиск сокровищ сохраняет тип, время и место попыток, успехов и неудач пользователей во время игры';
$string['privacy:metadata_treasurehunt_attempts_groupid'] = 'Группа, в которой пользователь играл в игру.';
$string['privacy:metadata_treasurehunt_attempts_stageid'] = 'Данные этапа, который пытался решить пользователь.';
$string['privacy:metadata_treasurehunt_attempts_timecreated'] = 'Время, в которое пользователь совершил попытку.';
$string['privacy:metadata_treasurehunt_attempts_userid'] = 'Данные пользователя совершившего попытку.';
$string['privacy:metadata_treasurehunt_track'] = 'Поиск сокровищ сохраняет последовательность локаций, по которым проходит пользователь во время игры.';
$string['privacy:metadata_treasurehunt_track_location'] = 'Расположение пользователя в конкретный момент времени.';
$string['privacy:metadata_treasurehunt_track_timestamp'] = 'Время, в которое отслеживается пользователь.';
$string['privacy:metadata_treasurehunt_track_treasurehuntid'] = 'Данные поиска сокровищ, в который играет пользователь.';
$string['privacy:metadata_treasurehunt_track_userid'] = 'Данные отслеживаемого пользователя.';
$string['question'] = 'Вопрос';
$string['remove'] = 'Исключить';
$string['remove_tour'] = 'Вы можете удалить части геометрии местоположений. Просто выберите полигон и нажмите эту кнопку.';
$string['removealltreasurehuntattempts'] = 'Удалить все попытки поиска сокровищ';
$string['removedactivitytoend'] = 'Удалено действие для завершения';
$string['removedquestion'] = 'Вопрос удален';
$string['removeroadwarning'] = 'Если вы удалите маршрут, все связанные этапы будут удалены без возможности восстановления';
$string['removewarning'] = 'Если вы удалите его, вы не сможете его восстановить';
$string['restrictionsdiscoverstage'] = 'Ограничения на открытие стадии';
$string['reviewofplay'] = 'Обзор игры';
$string['road'] = 'Маршрут';
$string['roadended'] = 'Поздравляем! Этот маршрут завершен! Вы прошли "Поиск сокровищ". Вы можете проверить свою историю на карте.';
$string['roadmap'] = 'Схема';
$string['roadname'] = 'Название маршрута';
$string['roads_tour'] = 'В этой области вы найдете разные маршруты своей игры. Выберите один из них, чтобы отредактировать этапы.';
$string['roadview'] = 'Маршрут';
$string['save'] = 'Сохранить';
$string['save_tour'] = 'После рисования местоположения, не забудьте сохранить ваши изменения.';
$string['saveemptyridle'] = 'Все измененные этапы должны иметь геометрию перед сохранением';
$string['savewarning'] = 'Вы не сохранили изменения';
$string['scanQR_generatebutton'] = 'Сгенерировать QR-код';
$string['scanQR_scanbutton'] = 'Сканировать QR-код';
$string['search'] = 'Поиск';
$string['searching'] = 'Поиск';
$string['searchlocation'] = 'Место поиска';
$string['searchlocation_tour'] = 'С помощью этой области поиска вы можете быстро найти свой маршрут';
$string['send'] = 'Отправить';
$string['skiptutorial'] = 'Выход';
$string['stage'] = 'Этап';
$string['stageclue'] = 'Подсказка, чтобы найти следующий этап';
$string['stageclue_help'] = 'Здесь вы должны описать подсказку, чтобы добраться до следующего места.
В случае, если это последний этап, он должен оставить сообщение с обратной связью, указывающее, что поиск сокровищ завершен.';
$string['stagename'] = 'Название этапа';
$string['stageovercome'] = 'Этап пройден';
$string['stages'] = 'Этапы';
$string['stages_tour'] = 'В этой области вы найдете этапы выбранного маршрута. Выберите каждый этап, чтобы увеличить его до местоположения на карте и начните редактировать их геометрию, нажимая на них и на кнопки редактирования/рисования выше.';
$string['start'] = 'Старт';
$string['startfromhere'] = 'Вы можете начать только здесь';
$string['state'] = 'Статус';
$string['successlocation'] = 'Это подходящее место!';
$string['timeago'] = '{$a->shortduration} назад';
$string['timeagolong'] = '{$a->shortduration} назад ({$a->date})';
$string['timeat'] = '{$a->date}';
$string['timeexceeded'] = 'Вы превысили лимит времени для данной игры. Этот экран служит только для просмотра игры';
$string['timetocome'] = 'в {$a->shortduration}';
$string['timetocomelong'] = 'в {$a->shortduration} ({$a->date})';
$string['totaltime'] = 'Общее время';
$string['trackusers'] = 'Линии движения маршрутов';
$string['trackusers_help'] = 'Регистрируйте пути, созданные пользователями. Их можно увидеть на экране "просмотр треков".<br/>
Позиции пользователей регистрируются между попытками проверки (с каждым запросом).<br/>
Если у пользователя отключен GPS, то единственное место, о котором он может сообщить, - это со сканированными QR-кодами.<br/>
Если этот параметр <b>отключен</b>, записываются только местоположения попыток проверки.';
$string['trackviewer'] = 'Просмотр маршрутов';
$string['trackviewerrefreshtracks'] = 'Обновляет маршруты каждые {$a} секунд.';
$string['treasurehunt'] = 'Поиск сокровищ';
$string['treasurehunt:addinstance'] = 'Добавить новый "Поиск сокровищ"';
$string['treasurehunt:addroad'] = 'Добавить маршрут';
$string['treasurehunt:addstage'] = 'Добавить этап';
$string['treasurehunt:editroad'] = 'Редактировать маршрут';
$string['treasurehunt:editstage'] = 'Редактировать этап';
$string['treasurehunt:managetreasure'] = 'Управление Поиском сокровищ';
$string['treasurehunt:managetreasurehunt'] = 'Управление Поиском сокровищ';
$string['treasurehunt:play'] = 'Играть';
$string['treasurehunt:view'] = 'Посмотреть поиск сокровищ';
$string['treasurehuntclosed'] = 'Этот "Поиск сокровищ" закрыт {$a}';
$string['treasurehuntcloses'] = 'Поиск сокровищ закрывается';
$string['treasurehuntcloseson'] = 'Эта поиск сокровищ закроется {$a}';
$string['treasurehuntislocked'] = '{$a} редактирует этот поиск сокровищ прямо сейчас. Попробуйте отредактировать через несколько минут.';
$string['treasurehuntname'] = 'Название игры';
$string['treasurehuntnotavailable'] = 'Поиск сокровищ не будет доступен до {$a}';
$string['treasurehuntopenedon'] = 'Поиск сокровищ открылся {$a}';
$string['treasurehuntopens'] = 'Поиск сокровищ открывается';
$string['updates'] = 'Обновления';
$string['updatetimes'] = 'Время обновления';
$string['user'] = 'Пользователь';
$string['useractivityovercome'] = '<b> игра от Moodle для "этапа{$a->position}" успешно завершена </b> {$a->date}';
$string['userinvalidroad'] = '{$a} назначил недействительный маршрут.';
$string['userlocationfailed'] = '<b> не удалось выполнить "стадию {$a->position}" местоположение</b> {$a->date}';
$string['userlocationovercome'] = '<b>пройден "этап {$a->position}" местоположения</b> {$a->date}';
$string['usermultipleroads'] = '{$a} назначил более одного маршрута.';
$string['usermultiplesameroad'] = '{$a} состоит в нескольких группах, назначенных на один и тот же маршрут.';
$string['userprogress'] = 'Прогресс пользователя успешно обновлен';
$string['userquestionfailed'] = '<b>не удалось пройти "этап {$a->position}" ответ</b> {$a->date}';
$string['userquestionovercome'] = '<b>пройден стадии "этап {$a->position}" ответ</b> {$a->date}';
$string['usersprogress'] = 'Прогресс пользователя';
$string['usersprogress_help'] = 'Указывает прогресс этапов каждого студента / группы в соответствии с цветами:<br/>
 <B> Зеленый </B> цвет указывает на то, что этап был пройден без ошибок.<br/>
<B> Желтый </B> цвет указывает на то, что этап был пройден с ошибками.<br/>
<B> Красный</B> цвет указывает на то, что этап не был пройден и были допущены ошибки.<br/>
<B> Серый </B> цвет указывает на то, что этап не был пройден и никаких ошибок не было сделано.';
$string['userstageovercome'] = '<b> этап {$a->position} пройден</b>: {$a->date}';
$string['validatelocation'] = 'Проверить местоположение';
$string['validatelocation_tour'] = 'Если вы уверены в местоположении этапа, вы должны указать свою позицию, чтобы проверить, правы ли вы.';
$string['validateqr'] = 'Сканировать QR-код';
$string['warmatchanswer'] = 'Ответ не соответствует вопросу';
$string['warnqrscanner'] = '<table><tr><td> Этот поиск сокровищ включает {$а} этапы с QR-кодами.
Пожалуйста, убедитесь, что ваше устройство может сканировать коды из веб-браузера. Отображение с камеры должно появиться ниже. Попробуйте прочитать любой QR-код
подобный этому.</td><td> <a href="pix/qr.png">
 <img src="pix/qr.png" align="top" width="100"></a></td></tr></table>';
$string['warnqrscannererror'] = 'Этот поиск сокровищ включает в себя этапы {$a} с QR-кодами.
Похоже, что ваше устройство не может использовать камеру с этим приложением. Пожалуйста, дайте разрешение на доступ к камере.
Если вы не можете активировать камеру, Это устройство может не подойти для игры в поиск сокровищ.';
$string['warnqrscannersuccess'] = 'Этот поиск сокровищ включает в себя этапы {$a} с QR-кодами.
Похоже, что вы прошли QR-тест с этим устройством.';
$string['warnunsecuregeolocation'] = 'Геолокация может не работать на вашем сервере. Это <b>серьезная ошибка в конфигурации</b>, вызванная
конфигурацией вашего сервера. Геолокация запрещена для небезопасных серверов, использующих HTTP вместо HTTPS. Для того чтобы использовать GPS
чтобы определять местоположение студентов во время поиска сокровищ, доступ к серверу должен осуществляться по защищенным HTTPS-адресам. В противном случае, можно использовать только режим "играть без передвижения"
и игрокам необходимо вручную указать каждый этап на карте.
Пожалуйста, свяжитесь с вашим администратором.
(Ссылки <a href="https://www.chromestatus.com/feature/5636088701911040">Chrome</a>, <a href="https://blog.mozilla.org/security/2015/04/30/deprecating-non-secure-http/">Firefox</a>)';
$string['warnusersgroup'] = 'Следующие пользователи принадлежат более чем к одной группе: {$a}, поэтому они не могут играть в эту игру.';
$string['warnusersgrouping'] = 'Следующие группы принадлежат более чем к одному потоку: {$a}, поэтому не могут играть в игру.';
$string['warnusersoutside'] = 'Следующие пользователи не принадлежат к какой-либо группе / потоку: {$a}, поэтому не могут играть в эту игру.';
$string['welcome_edit_tour'] = 'Добро пожаловать на страницу авторов "Поиска сокровищ"!';
$string['welcome_play_tour'] = 'Добро пожаловать в "Поиск сокровищ"! Это основной интерфейс для поиска и обретения ваших сокровищ.';
