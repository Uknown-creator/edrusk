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
 * Strings for component 'tool_policy', language 'ru', version '3.11'.
 *
 * @package     tool_policy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Я подтверждаю, что получил запрос на то, чтобы подтвердить согласие от имени вышеупомянутых пользователей.';
$string['acceptancenote'] = 'Заметки';
$string['acceptancepolicies'] = 'Политики';
$string['acceptancessavedsucessfully'] = 'Согласия успешно сохранены.';
$string['acceptancestatusaccepted'] = 'Подтверждено согласие';
$string['acceptancestatusacceptedbehalf'] = 'Подтверждено согласие от имени пользователя';
$string['acceptancestatusdeclined'] = 'Отказ соглашаться';
$string['acceptancestatusdeclinedbehalf'] = 'Отказ соглашаться от имени пользователя';
$string['acceptancestatusoverall'] = 'Все политики';
$string['acceptancestatuspartial'] = 'Частично принято';
$string['acceptancestatuspending'] = 'Ожидает решения';
$string['acceptanceusers'] = 'Пользователи';
$string['actions'] = 'Действия';
$string['activate'] = 'Установить статус «Активно»';
$string['activateconfirm'] = '<p>Вы собираетесь активировать политику <em>«{$a->name}»</em> и сделать версию <em>«{$a->revision}»</em> текущей.</p><p>Все пользователи должны будут согласиться с этой новой версией политики, чтобы иметь возможность использовать сайт.</p>';
$string['activateconfirmyes'] = 'Активировать';
$string['activating'] = 'Активация политики';
$string['agreepolicies'] = 'Вы должны подтвердить согласие со следующими политиками';
$string['backtoprevious'] = 'Вернуться на предыдущую страницу';
$string['backtotop'] = 'Вернуться к началу';
$string['cachedef_policy_optional'] = 'Кэш отметки Обязательно/Необязательно для версий политик';
$string['consentbulk'] = 'Подтвердить согласие';
$string['consentpagetitle'] = 'Согласие с политиками';
$string['contactdpo'] = 'По любым вопросам, связанным с политикой, обращайтесь к сотруднику по вопросам обработки персональных данных и конфиденциальности.';
$string['dataproc'] = 'Обработка персональных данных';
$string['declineacknowledgement'] = 'Я подтверждаю, что получил запрос на то, чтобы отказаться соглашаться с политикой от имени вышеупомянутых пользователей.';
$string['declinethepolicy'] = 'Отказ соглашаться';
$string['deleteconfirm'] = '<p>Вы уверены, что хотите удалить политику <em>«{$a->name}»</em>?</p><p>Эту операцию отменить нельзя.</p>';
$string['deleting'] = 'Удаление версии';
$string['editingpolicydocument'] = 'Изменение политики';
$string['errorpolicyversioncompulsory'] = 'Нельзя отказываться от обязательных политик!';
$string['errorpolicyversionnotfound'] = 'Не существует версии политики с этим идентификатором.';
$string['errorsaveasdraft'] = 'Незначительное изменение не может быть сохранено как черновик';
$string['errorusercantviewpolicyversion'] = 'Пользователь не имеет доступа к этой версии политики.';
$string['event_acceptance_created'] = 'Создано согласие пользователя с политикой';
$string['event_acceptance_updated'] = 'Обновлено согласие пользователя с политикой';
$string['filtercapabilityno'] = 'Разрешение: Не могут подтверждать согласие';
$string['filtercapabilityyes'] = 'Разрешение: Могут подтверждать согласие';
$string['filterplaceholder'] = 'Искать по ключевому слову или выбрать фильтр';
$string['filterpolicy'] = 'Политика: {$a}';
$string['filterrevision'] = 'Версия: {$a}';
$string['filterrevisionstatus'] = 'Версия: {$a->name} ({$a->status})';
$string['filterrole'] = 'Роль: {$a}';
$string['filters'] = 'Фильтры';
$string['filterstatusdeclined'] = 'Статус: отказ соглашаться';
$string['filterstatuspending'] = 'Статус: ожидает решения';
$string['filterstatusyes'] = 'Статус: подтверждено согласие';
$string['guestconsent:continue'] = 'Продолжить';
$string['guestconsentmessage'] = 'Продолжая просматривать этот сайт, Вы соглашаетесь с нашими политиками:';
$string['iagree'] = 'Я согласен с «{$a}»';
$string['iagreetothepolicy'] = 'Подтверждаю согласие';
$string['idontagree'] = 'Нет, я не согласен с «{$a}»';
$string['inactivate'] = 'Установить статус «Неактивно»';
$string['inactivating'] = 'Деактивация политики';
$string['inactivatingconfirm'] = '<p>Вы собираетесь деактивировать политику <em>«{$a->name}»</em> версии <em>«{$a->revision}»</em>.</p>';
$string['inactivatingconfirmyes'] = 'Деактивировать';
$string['invalidversionid'] = 'Нет политики с этим идентификатором!';
$string['irevokethepolicy'] = 'Отозвать согласие пользователя';
$string['listactivepolicies'] = 'Список активных политик';
$string['managepolicies'] = 'Управление политиками';
$string['minorchange'] = 'Незначительное изменение';
$string['minorchangeinfo'] = 'Незначительное изменение не меняет смысла политики. Пользователи не обязаны снова соглашаться с политикой, если изменение помечено как незначительное.';
$string['movedown'] = 'Опустить ниже';
$string['moveup'] = 'Поднять выше';
$string['mustagreetocontinue'] = 'Прежде чем продолжить, Вы должны ознакомиться со всеми этими политиками.';
$string['newpolicy'] = 'Новая политика';
$string['newversion'] = 'Новая версия';
$string['noactivepolicies'] = 'Нет политик с активной версией.';
$string['nofiltersapplied'] = 'Фильтры не применены';
$string['nopermissiontoagreedocs'] = 'Нет права соглашаться с политикой';
$string['nopermissiontoagreedocs_desc'] = 'К сожалению, у вас нет необходимых прав для того, чтобы согласиться с политикой.<br />Вы не сможете использовать этот сайт, пока не будет дано согласие со следующими политиками:';
$string['nopermissiontoagreedocsbehalf'] = 'Нет разрешения соглашаться с политикой от имени этого пользователя';
$string['nopermissiontoagreedocsbehalf_desc'] = 'К сожалению, у вас нет необходимого разрешения для принятия следующих политик от имени пользователя {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Для получения дополнительной помощи свяжитесь с';
$string['nopermissiontoviewpolicyversion'] = 'У вас нет прав для просмотра этой версии политики.';
$string['nopolicies'] = 'Нет политик с активной версией для зарегистрированных пользователей.';
$string['pluginname'] = 'Политики';
$string['policiesagreements'] = 'Политики и согласия';
$string['policy:accept'] = 'Подтверждать согласие с политиками';
$string['policy:acceptbehalf'] = 'Подтверждать согласие с политиками от имени другого лица';
$string['policy:managedocs'] = 'Управлять политиками';
$string['policy:viewacceptances'] = 'Просмотр отчетов о согласиях пользователей с политиками';
$string['policydocaudience'] = 'Требуется согласие от';
$string['policydocaudience0'] = 'Все пользователи';
$string['policydocaudience1'] = 'Аутентифицированные пользователи';
$string['policydocaudience2'] = 'Гости';
$string['policydoccontent'] = 'Полная версия политики';
$string['policydochdrpolicy'] = 'Политика';
$string['policydochdrversion'] = 'Версия документа';
$string['policydocname'] = 'Название';
$string['policydocoptional'] = 'Согласие необязательно';
$string['policydocoptionalno'] = 'Обязательно';
$string['policydocoptionalyes'] = 'Необязательно';
$string['policydocrevision'] = 'Версия';
$string['policydocsummary'] = 'Краткое изложение';
$string['policydocsummary_help'] = 'Этот текст должен содержать краткое изложение политики, желательно в упрощенной и легкодоступной форме с использованием простого  и понятного языка.';
$string['policydoctype'] = 'Тип';
$string['policydoctype0'] = 'Политика сайта';
$string['policydoctype1'] = 'Политика в отношении обработки персональных данных и конфиденциальности';
$string['policydoctype2'] = 'Политика в отношении третьих лиц';
$string['policydoctype99'] = 'Другая политика';
$string['policydocuments'] = 'Тексты политики';
$string['policynamedversion'] = 'Политика {$a->name} (version {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = 'Показать эту политику перед отображением других политик';
$string['policyversionacceptedinbehalf'] = 'Согласие с этой политикой было дано от вашего имени.';
$string['policyversionacceptedinotherlang'] = 'Согласие на эту версию политики было дано на другом языке.';
$string['previousversions'] = 'Предыдущие версии - {$a}';
$string['privacy:metadata:acceptances'] = 'Информация о подтверждении согласия пользователей с политикой.';
$string['privacy:metadata:acceptances:lang'] = 'Язык, используемый для отображения политики, когда было подтверждено согласие.';
$string['privacy:metadata:acceptances:note'] = 'Любые комментарии, добавленные пользователем при подтверждении согласия от имени другого пользователя.';
$string['privacy:metadata:acceptances:policyversionid'] = 'Версия политики, для которой было подтверждено согласие.';
$string['privacy:metadata:acceptances:status'] = 'Статус согласия.';
$string['privacy:metadata:acceptances:timecreated'] = 'Время, когда пользователь подтвердил согласие с политикой.';
$string['privacy:metadata:acceptances:timemodified'] = 'Время, когда пользователь обновил свое согласие.';
$string['privacy:metadata:acceptances:userid'] = 'Пользователь, к которому относится данное согласие.';
$string['privacy:metadata:acceptances:usermodified'] = 'Пользователь, подтвердивший согласие с политикой, если осуществлено от имени другого лица.';
$string['privacy:metadata:subsystem:corefiles'] = 'Инструмент политики хранит файлы, включенные в краткое содержание и полную версию политики.';
$string['privacy:metadata:versions'] = 'Информация о версии политики.';
$string['privacy:metadata:versions:archived'] = 'Статус политики (активно или неактивно).';
$string['privacy:metadata:versions:audience'] = 'Тип пользователей, которые должны подтвердить свое согласие.';
$string['privacy:metadata:versions:content'] = 'Содержимое этой версии политики.';
$string['privacy:metadata:versions:contentformat'] = 'Формат поля содержимого.';
$string['privacy:metadata:versions:name'] = 'Название политики.';
$string['privacy:metadata:versions:policyid'] = 'Политика, с которой связана эта версия.';
$string['privacy:metadata:versions:revision'] = 'Пересмотренное название этой версии политики.';
$string['privacy:metadata:versions:summary'] = 'Краткое изложение этой версии политики.';
$string['privacy:metadata:versions:summaryformat'] = 'Формат поля краткого изложения';
$string['privacy:metadata:versions:timecreated'] = 'Время, когда была создана эта версия политики.';
$string['privacy:metadata:versions:timemodified'] = 'Время, когда была изменена эта версия политики.';
$string['privacy:metadata:versions:type'] = 'Тип политики.';
$string['privacy:metadata:versions:usermodified'] = 'Пользователь, который изменил политику.';
$string['privacysettings'] = 'Настройки конфиденциальности';
$string['readpolicy'] = 'Пожалуйста, ознакомьтесь с «{$a}»';
$string['refertofullpolicytext'] = 'Пожалуйста, обратитесь к полной версии документа «{$a}», если Вы хотите просмотреть весь текст.';
$string['response'] = 'Ответ';
$string['responseby'] = 'Респондент';
$string['responseon'] = 'Дата';
$string['revokeacknowledgement'] = 'Я подтверждаю, что мной получен запрос на отзыв согласия от имени вышеупомянутых пользователей.';
$string['save'] = 'Сохранить';
$string['saveasdraft'] = 'Сохранить как черновик';
$string['selectpolicyandversion'] = 'Используйте фильтр выше, чтобы выбрать политику и/или версию';
$string['selectuser'] = 'Выберите пользователя {$a}';
$string['selectusersforconsent'] = 'Выберите пользователей, чтобы подтвердить согласие от их имени.';
$string['settodraft'] = 'Создать новый черновик';
$string['status'] = 'Статус политики';
$string['status0'] = 'Черновик';
$string['status1'] = 'Активно';
$string['status2'] = 'Неактивно';
$string['statusformtitleaccept'] = 'Подтверждение согласия с политикой';
$string['statusformtitledecline'] = 'Отказ соглашаться с политикой';
$string['statusformtitlerevoke'] = 'Отзыв согласия с политикой';
$string['statusinfo'] = 'Политика со статусом «Активно» требует, чтобы пользователи давали свое согласие либо при первом входе в систему, либо (для существующих пользователей) при следующем входе в систему.';
$string['steppolicies'] = 'Политика {$a->numpolicy} из {$a->totalpolicies}';
$string['useracceptanceactionaccept'] = 'Подтвердить согласие';
$string['useracceptanceactionacceptone'] = 'Подтвердить согласие с «{$a}»';
$string['useracceptanceactionacceptpending'] = 'Подтвердить согласие с ожидающими решения политиками';
$string['useracceptanceactiondecline'] = 'Отказ соглашаться';
$string['useracceptanceactiondeclineone'] = 'Отказ соглашаться с «{$a}»';
$string['useracceptanceactiondeclinepending'] = 'Отказ соглашаться с ожидающими решения политиками';
$string['useracceptanceactiondetails'] = 'Подробности';
$string['useracceptanceactionrevoke'] = 'Отозвать';
$string['useracceptanceactionrevokeall'] = 'Отозвать все согласия';
$string['useracceptanceactionrevokeone'] = 'Отозвать согласие с «{$a}»';
$string['useracceptancecount'] = '{$a->agreedcount} из {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'н/д';
$string['useracceptances'] = 'Согласия пользователей с политиками';
$string['userpolicysettings'] = 'Политики';
$string['usersaccepted'] = 'Согласия';
$string['viewarchived'] = 'Просмотр предыдущих версий';
$string['viewconsentpageforuser'] = 'Просмотр этой страницы от имени {$a}';
