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
 * Strings for component 'studentquiz', language 'ru', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Прервать';
$string['add_comment'] = 'Добавить комментарий';
$string['add_reply'] = 'Добавить ответ';
$string['after_answering_end_date'] = 'СтудТест закрыт для ответов  {$a}';
$string['after_submission_end_date'] = 'СтудТест закрыт для подачи вопросов {$a}.';
$string['anonymous_user_name'] = 'Анонимный пользователь #{$a}';
$string['answeringndbeforestart'] = 'Срок окончания ответов не может быть назначен раньше даты начала ответов';
$string['api_state_change_success_content'] = 'Состояние вопроса/отображение вопроса успешно изменено';
$string['api_state_change_success_title'] = 'Успешно';
$string['approve'] = 'Одобрить';
$string['approve_toggle'] = 'Отклонить/Принять';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Одобрено';
$string['approved_veryshort'] = 'Одобрено';
$string['approveselectedscheck'] = 'Вы уверены, что хотите отклонить/принять следующие вопросы? <br /><br />{$a}';
$string['average_column_name'] = 'В среднем';
$string['before_answering_end_date'] = 'Окончание ответов на СтудТест {$a}.';
$string['before_answering_start_date'] = 'Открыто для ответов с {$a}.';
$string['before_submission_end_date'] = 'Закрывается для приёма вопросов после {$a}.';
$string['before_submission_start_date'] = 'Открывается для приёма вопросов с {$a}.';
$string['changeselectedsstate'] = 'Изменить состояние следующих вопросов: <br /><br />{$a}';
$string['collapseall'] = 'Свернуть все комментарии';
$string['collapsecomment'] = 'Свернуть комментарий';
$string['comment_column_name'] = 'Комментарии';
$string['comment_error'] = 'Пожалуйста, прокомментируйте';
$string['comment_error_unsaved'] = 'Вы хотите вначале сохранить комментарий?';
$string['comment_help'] = 'Напишите комментарий';
$string['comment_help_help'] = 'Напишите комментарий к вопросу';
$string['comment_veryshort'] = 'Коммент';
$string['confirmdeletecomment'] = 'Вы уверены что хотите удалить этот комментарий?';
$string['createnewquestion'] = 'Создайте новый вопрос';
$string['createnewquestionfirst'] = 'Создайте первый вопрос';
$string['creator_anonym_fullname'] = 'Анонимный студент';
$string['current_of_total'] = '{$a->current} из {$a->total}';
$string['delete'] = 'Удалить';
$string['deletecomment'] = 'Удалить комментарий';
$string['deletedbyauthor'] = 'Этот комментарий был удален {$a}.';
$string['deletedbyuser'] = 'Этот комментарий был удален пользователем {$a->user} {$a->date}.';
$string['deletedcomment'] = 'Комментарий удален.';
$string['describe_already_deleted'] = 'Этот комментарий уже удален';
$string['describe_not_creator'] = 'Это не ваш комментарий';
$string['describe_out_of_time_delete'] = 'Этот комментарий невозможно удалить';
$string['difficulty_all_column_name'] = 'Трудности сообщества';
$string['difficulty_level_column_name'] = 'Сложность вопроса';
$string['difficulty_title'] = 'Уровень сложности';
$string['editorplaceholder'] = 'Введите ваш комментарий здесь...';
$string['emailcommentaddedbody'] = 'Уважаемый {$a->recepientname},

Ваш вопрос «{$a->questionname}» для теста «{$a->modulename}» в курсе «{$a->coursename}» был прокомментирован пользователем {$a->actorname} в {$a->timestamp}.

Комментарий: «{$a->commenttext}».

Вы можете просмотреть вопрос здесь: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'Ваш вопрос  «{$a->questionname}» был прокомментирован пользователем {$a->actorname}.';
$string['emailcommentaddedsubject'] = 'На этот вопрос получен комментарий: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Уважаемый {$a->recepientname},
Комментарий на Ваш вопрос «{$a->questionname}» для теста «{$a->modulename}» в курсе «{$a->coursename}» был удален  пользователем  {$a->actorname}  в {$a->timestamp}.

Текст комментария:  «{$a->commenttext}».

Вы можете просмотреть вопрос здесь: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'Комментарий к вашему вопросу «{$a->questionname}» был удален пользователем {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Комментарий к этому вопросу был удалён: {$a->questionname}';
$string['emailminecommentdeletedbody'] = 'Уважаемый {$a->recepientname},
Ваш комментарий на вопрос «{$a->questionname}» для теста «{$a->modulename}» в курсе «{$a->coursename}» был удален  пользователем  {$a->actorname}  в {$a->timestamp}.

Текст комментария: «{$a->commenttext}».

Вы можете просмотреть вопрос здесь: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Ваш комментарий к вопросу «{$a->questionname}» был удален пользователем {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Комментарий к этому вопросу был удален: {$a->questionname}';
$string['error_form_validation'] = '{$a}';
$string['error_sendalert'] = 'Произошла ошибка при отправке вашего отчета в {$a}.
Отчет не удалось отправить.';
$string['expandall'] = 'Развернуть все комментарии';
$string['expandcomment'] = 'Развернуть комментарий';
$string['filter'] = 'Фильтр';
$string['filter_advanced_element'] = '{$a} (Элемент продвинутого уровня)';
$string['filter_comment_label_date'] = 'Дата';
$string['filter_comment_label_forename'] = 'Имя';
$string['filter_comment_label_sort_by'] = 'Сортировать по:';
$string['filter_comment_label_sort_toggle'] = 'Сортировать по {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Фамилия';
$string['filter_ishigher'] = 'выше';
$string['filter_islower'] = 'ниже';
$string['filter_label_approved'] = 'Одобренный вопрос';
$string['filter_label_comment'] = 'Комментарии';
$string['filter_label_createdate'] = 'Создание';
$string['filter_label_difficulty_level'] = 'Сложность вопроса';
$string['filter_label_fast_filters'] = 'Быстрый фильтр вопросов';
$string['filter_label_myattempts'] = 'Мои попытки';
$string['filter_label_mydifficulty'] = 'Мои затруднения';
$string['filter_label_mylastattempt'] = 'Моя последняя попытка';
$string['filter_label_myrate'] = 'Мой рейтинг';
$string['filter_label_onlyapproved'] = 'Одобрено';
$string['filter_label_onlyapproved_help'] = 'Вопросы, одобренные учителем';
$string['filter_label_onlydifficult'] = 'Сложно для всех';
$string['filter_label_onlydifficult_help'] = 'Вопрос со средним уровнем сложности выше {$a} %';
$string['filter_label_onlydifficultforme'] = 'Сложно для меня';
$string['filter_label_onlydifficultforme_help'] = 'Вопрос с персональным уровнем сложности выше {$a} %';
$string['filter_label_onlygood'] = 'Хорошо';
$string['filter_label_onlygood_help'] = 'Вопрос со средним рейтингом по меньшей мере {$a} звёзд';
$string['filter_label_onlymine'] = 'Мои';
$string['filter_label_onlymine_help'] = 'Вопросы, созданные Вами';
$string['filter_label_onlynew'] = 'Неотвеченные';
$string['filter_label_onlynew_help'] = 'Неотвеченные вами ранее вопросы';
$string['filter_label_question'] = 'Наименование вопроса';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'Содержание вопроса';
$string['filter_label_rates'] = 'Рейтинг';
$string['filter_label_show_mine'] = 'Мои вопросы';
$string['filter_label_tags'] = 'Тэг';
$string['finish_button'] = 'Завершить';
$string['image_placeholder'] = '[Изображение]';
$string['invalidcomment'] = 'Комментарий недействителен';
$string['invalidemail'] = 'Адрес электронной почты недействителен. Пожалуйста введите индивидуальный адрес электронной почты.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Последняя попытка верна';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Последняя попытка неверна';
$string['latest_column_name'] = 'Самые последние';
$string['manager_anonym_fullname'] = 'Анонимный модератор';
$string['message'] = 'Сообщение';
$string['messageprovider:commentadded'] = 'Уведомление о новом комментарии';
$string['messageprovider:commentdeleted'] = 'Уведомление о удаленном комментарии';
$string['messageprovider:minecommentdeleted'] = 'Уведомление "Мой комментарий удален"';
$string['migrate_already_done'] = 'Ничего не произошло, так как этот элемент был уже успешно перенесен.';
$string['migrate_ask'] = 'Скорость в версии СтудТеста 3.2.1. была улучшена, но эта группа вопросов создана в предыдущей версии. Вопросы и тесты будут загружаться быстрее, если вы перенесете их в улучшенную версию. Изменится только скорость загрузки; всё остальное останется прежним.';
$string['migrate_studentquiz'] = 'Перенесите ответы СтудТеста ранних версий в более быструю версию 3.2.1. с совокупными значениями';
$string['migrate_studentquiz_short'] = 'Ускорить загрузку группы вопросов';
$string['migrated_successful'] = 'Элемент успешно перенесен';
$string['mine_column_name'] = 'Мой';
$string['missingparam'] = 'Запрашиваемый параметр неверен или отсутствует';
$string['moderator'] = 'Модератор';
$string['modulename'] = 'СтудТест';
$string['modulename_help'] = 'Элемент СтудТест позволяет студентам добавлять вопросы для остальных участников. На главной странице СтудТеста студенты могут отфильтровать вопросы. Также они могут использовать отфильтрованные вопросы, чтобы попрактиковаться отвечать. Учитель может  сделать созданные вопросы анонимными. <br><br> В СтудТесте студенты могут получать баллы, что будет мотивировать их создавать вопросы и практиковаться. Баллы указаны в рейтинговой таблице.';
$string['modulenameplural'] = 'СтудТесты';
$string['more'] = 'Больше';
$string['myattempts_column_name'] = 'Мои попытки';
$string['mydifficulty_column_name'] = 'Уровень сложности';
$string['mylastattempt_column_name'] = 'Моя последняя попытка';
$string['myrate_column_name'] = 'Мой рейтинг';
$string['nav_export'] = 'Экспорт';
$string['nav_import'] = 'Импорт';
$string['needtoallowatleastoneqtype'] = 'Следует указать, по меньшей мере, один тип вопроса';
$string['next_button'] = 'Следующий';
$string['no_comment'] = 'недоступно';
$string['no_comments'] = 'Без комментариев';
$string['no_difficulty_level'] = 'недоступно';
$string['no_myattempts'] = 'недоступно';
$string['no_mylastattempt'] = 'недоступно';
$string['no_mylastattempt_label'] = 'На этот вопрос ещё не отвечали';
$string['no_questions_add'] = 'В этом СтудТесте вопросов нет.  Вы можете добавить свои вопросы.';
$string['no_questions_filter'] = 'По вашему запросу ничего не найдено.  Сбросьте настройки фильтра, чтобы посмотреть все варианты.';
$string['no_questions_selected_message'] = 'Выберите хотя бы один вопрос для того, чтобы начать тест.';
$string['no_rates'] = 'недоступно';
$string['no_tags'] = 'недоступно';
$string['not_approved'] = '✗';
$string['num_questions'] = 'Вопросов - {$a}';
$string['number_column_name'] = 'Количество';
$string['numberreply'] = 'Ответы - {$a}';
$string['onlyrootcommentcanreply'] = 'Только первый уровень комментария может быть ответом';
$string['pagesize'] = 'Размер страницы';
$string['please_enrole_message'] = 'Запишитесь на курс, чтобы увидеть свои достижения';
$string['pluginadministration'] = 'Управление СтудТестом';
$string['pluginname'] = 'СтудТест';
$string['previous_button'] = 'Предыдущий';
$string['privacy:metadata:mod_studentquiz_comment_sort'] = 'Предпочтения пользователя для типа фильтра комментариев.';
$string['privacy:metadata:studentquiz_attempt'] = 'Отображает попытку пользователя ответить на группу вопросов';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'Идентификатор категории';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'Идентификатор использования вопроса.';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'Идентификатор СтудТеста';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'Идентификатор пользователя';
$string['privacy:metadata:studentquiz_comment'] = 'Сохранить комментарии к вопросу';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Комментарии к вопросу';
$string['privacy:metadata:studentquiz_comment:parentid'] = 'Идентификатор родительского комментария. 0: комментарий верхнего уровня.';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'Идентификатор вопроса';
$string['privacy:metadata:studentquiz_comment:userid'] = 'Идентификатор пользователя';
$string['privacy:metadata:studentquiz_progress'] = 'Сохранить информацию о достижениях студента по этому вопросу';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Количество попыток ответа на вопрос';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Количество правильных ответов.';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0: последний ответ был неправильным или неопределенным, 1: последний ответ был правильным';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'Идентификатор вопроса';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'Идентификатор СтудТеста';
$string['privacy:metadata:studentquiz_progress:userid'] = 'Идентификатор пользователя';
$string['privacy:metadata:studentquiz_rate'] = 'Сохранить рейтинги вопросов';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'Идентификатор вопроса.';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Рейтинги этого вопроса';
$string['privacy:metadata:studentquiz_rate:userid'] = 'Идентификатор пользователя';
$string['progress_bar_caption'] = 'Ваши достижения в элементе «СтудТест»';
$string['questionsinuse'] = '(*Вопросы, отмеченные звездочкой, уже используются в других тестах)';
$string['ranking_block_title'] = 'Рейтинг';
$string['ranking_block_title_anonymised'] = 'Рейтинг (анонимный)';
$string['rate_all_column_name'] = 'Рейтинг сообщества';
$string['rate_column_name'] = 'Рейтинг';
$string['rate_error'] = 'Пожалуйста, оцените';
$string['rate_help'] = 'Оцените этот вопрос';
$string['rate_help_help'] = 'Оцените этот вопрос. <br />1 звезда - очень плохо, 5 - отлично';
$string['rate_multi_stars_desc'] = 'Выбрано звёзд - {$a}';
$string['rate_one_star_desc'] = 'Выбрана 1 звезда';
$string['rate_points'] = 'Баллы';
$string['rate_title'] = 'Оцените';
$string['ratingbar_title'] = 'Рейтинги';
$string['remove_comment'] = 'Удалить';
$string['remove_comment_label'] = 'Удалить комментарий';
$string['replies'] = 'Ответы';
$string['reply'] = 'Ответ';
$string['replycomment'] = 'Ответ';
$string['report_comment_condition1'] = 'Оскорбление';
$string['report_comment_condition2'] = 'Агрессия';
$string['report_comment_condition3'] = 'Непристойное содержание, например - порнография';
$string['report_comment_condition4'] = 'Клевета или оскорбление достоинства';
$string['report_comment_condition5'] = 'Нарушение авторских прав';
$string['report_comment_condition6'] = 'Нарушает правила по другим причинам';
$string['report_comment_condition_more'] = 'Дополнительная информация (по желанию)';
$string['report_comment_emailappendix'] = 'Вы получаете это письмо, потому что ваш адрес электронной почты используется на СтудТесте для отправки неприемлемого комментария.';
$string['report_comment_emailpreface'] = 'На комментарий пожаловались: {$a->fullname} ({$a->username},
{$a->email}).';
$string['report_comment_emailsubject'] = 'Пожаловаться на комментарий {$a->commentid}: {$a->coursename} {$a->studentquizname}';
$string['report_comment_feedback'] = 'Ваша жалоба отправлена и будет рассмотрена.';
$string['report_comment_info'] = 'Функция «Жалоба» отправит комментарий на проверку. <strong>Пожалуйста, используйте эту функцию только в том случае, если вы считаете, что комментарий нарушает правила</strong>.';
$string['report_comment_invalid'] = 'Необходимо указать причину, чтобы отправить жалобу .';
$string['report_comment_invalid_checkbox'] = 'Необходимо выделить минимум одну причину.';
$string['report_comment_link_text'] = 'Предварительный просмотр';
$string['report_comment_not_available'] = 'Функция «Жалоба» отключена.';
$string['report_comment_pagename'] = 'Пожаловаться на комментарий как на неприемлемый';
$string['report_comment_reasons'] = 'Причины жалобы на комментарий:';
$string['report_comment_reporter_detail'] = '{$a->fullname} ({$a->username}; {$a->email}; {$a->ip})';
$string['report_comment_reporter_info'] = '<strong>Подробности от заявителя</strong>:';
$string['report_comment_submit'] = 'Отправить жалобу';
$string['reportcomment'] = 'Жалоба';
$string['reportcomment_title'] = 'Пожаловаться на комментарий как на неприемлемый';
$string['reportquiz_admin_title'] = 'Статистика по студенту';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Средний балл сообщества за последние правильные ответы';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Средний балл сообщества за последние неправильные ответы';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Процент правильных ответов в сообществе';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Сумма правильных ответов/сумма всех ответов';
$string['reportquiz_stats_all_progress'] = 'Средние показатели достижений сообщества';
$string['reportquiz_stats_all_progress_help'] = 'Средние достижения сообщества по всем участникам';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Среднее количество правильных ответов по сообществу';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Среднее количество неправильных ответов по сообществу';
$string['reportquiz_stats_all_questions_answered'] = 'Среднее количество всех ответов по сообществу';
$string['reportquiz_stats_all_questions_answered_help'] = 'Среднее количество ответов, данное всеми участниками сообщества';
$string['reportquiz_stats_all_questions_approved'] = 'Количество одобренных вопросов';
$string['reportquiz_stats_all_questions_approved_help'] = 'Учитель может одобрять вопросы для подтверждения их корректности. Здесь показано количество всех вопросов СтудТеста, получивших одобрение.';
$string['reportquiz_stats_all_questions_created'] = 'Количество вопросов в СтудТесте';
$string['reportquiz_stats_all_questions_created_help'] = 'Количество вопросов, созданных сообществом';
$string['reportquiz_stats_all_rates_average'] = 'Средний рейтинг по всем вопросам';
$string['reportquiz_stats_all_rates_average_help'] = 'Рейтинг каждого вопроса определяется средним количеством звёзд, полученных от всего сообщества. Например, сообщество создало 4 вопроса. Если вопрос А получил от сообщества 3 звезды, вопрос В - 4 звезды, вопрос С- 2 звезды и вопрос D - 5 звезд, то средний рейтинг за все вопросы равен 3,5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Количество Ваших последних правильных ответов';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Количество Ваших последних неправильных ответов';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Процент ваших правильных ответов';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Процент всех ваших правильных ответов от количества всех Ваших ответов в СтудТесте. Частично правильные ответы считаются неправильными.';
$string['reportquiz_stats_own_progress'] = 'Личные  достижения';
$string['reportquiz_stats_own_progress_help'] = 'Процент ваших последних  правильных ответов от количества всех Ваших ответов в СтудТесте. Частично правильные ответы считаются неправильными.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Общее количество Ваших правильных ответов';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Общее количество Ваших неправильных ответов';
$string['reportquiz_stats_own_questions_answered'] = 'Общее количество Ваших ответов';
$string['reportquiz_stats_own_questions_answered_help'] = 'Количество всех Ваших правильных ответов в СтудТесте.';
$string['reportquiz_stats_own_questions_approved'] = 'Количество Ваших одобренных вопросов';
$string['reportquiz_stats_own_questions_approved_help'] = 'Учитель может одобрять вопросы для подтверждения их корректности. Здесь показано количество созданных Вами для СтудТеста вопросов, получивших одобрение.';
$string['reportquiz_stats_own_questions_created'] = 'Количество созданных Вами вопросов';
$string['reportquiz_stats_own_questions_created_help'] = 'Количество вопросов, созданных Вами для СтудТеста';
$string['reportquiz_stats_own_rates_average'] = 'Ваш  средний рейтинг';
$string['reportquiz_stats_own_rates_average_help'] = 'Рейтинг каждого вопроса определяется количеством звёзд, полученных от всего сообщества. Например, вы создали вопросы А и В. Если вопрос А получил от сообщества 3 звезды, а вопрос В - 4 звезды, то ваш средний рейтинг вопросов составит 3,5.';
$string['reportquiz_stats_title'] = 'Статистика';
$string['reportquiz_total_attempt'] = 'Количество попыток прохождения теста';
$string['reportquiz_total_obtained_marks'] = 'Общий балл';
$string['reportquiz_total_questions_answered'] = 'Всего ответов';
$string['reportquiz_total_questions_right'] = 'Всего правильных ответов';
$string['reportquiz_total_questions_wrong'] = 'Неправильные ответы';
$string['reportquiz_total_users'] = 'Количество участников';
$string['reportrank_table_column_approvedquestions'] = 'Баллы за одобренные ответы';
$string['reportrank_table_column_communitystatus'] = 'Статистика сообщества';
$string['reportrank_table_column_correctanswers'] = 'Правильные ответы';
$string['reportrank_table_column_countquestions'] = 'Баллы за созданные вопросы';
$string['reportrank_table_column_description'] = 'Описание';
$string['reportrank_table_column_factor'] = 'Коэффициент';
$string['reportrank_table_column_fullname'] = 'Полное имя';
$string['reportrank_table_column_incorrectanswers'] = 'Неправильные ответы';
$string['reportrank_table_column_lastcorrectanswers'] = 'Баллы за последние правильные попытки';
$string['reportrank_table_column_lastincorrectanswers'] = 'Баллы за последние неправильные попытки';
$string['reportrank_table_column_points'] = 'Баллы';
$string['reportrank_table_column_progress'] = 'Личные достижения';
$string['reportrank_table_column_quantifier_name'] = 'Имя';
$string['reportrank_table_column_rank'] = 'Место в рейтинге';
$string['reportrank_table_column_summeanrates'] = 'Баллы за полученные звёзды';
$string['reportrank_table_column_total_points'] = 'Итого баллов';
$string['reportrank_table_column_value'] = 'Значение';
$string['reportrank_table_column_yourstatus'] = 'Личная статистика';
$string['reportrank_table_quantifier_caption'] = 'Как высчитываются Ваши баллы';
$string['reportrank_table_title'] = 'Рейтинг студентов - первая десятка';
$string['reportrank_table_title_for_manager'] = 'Рейтинг студентов';
$string['reportrank_title'] = 'Рейтинг';
$string['review_button'] = 'Просмотр';
$string['setting_question_publishing'] = 'Публикация вопроса';
$string['setting_question_publishing_automatic'] = 'Автоматически публиковать новые вопросы';
$string['setting_question_publishing_help'] = 'Опубликованные вопросы появляются в пуле вопросов, чтобы другие студенты могли ответить. Разрешить всем вопросам публиковаться автоматически или запрашивать подтверждение до их публикации. <br> Обратите внимание, что этот параметр не может быть изменен после того, как вопрос был создан в СтудТесте.';
$string['setting_question_publishing_require_approval'] = 'Запрашивать подтверждение перед публикацией';
$string['settings_allowallqtypes'] = 'Разрешить все типы вопросов';
$string['settings_allowedqtypes'] = 'Разрешённые типы вопросов';
$string['settings_allowedqtypes_help'] = 'Ограничить разрешенные типы вопросов выбранными вопросами';
$string['settings_anonymous'] = 'Режим анонимности';
$string['settings_anonymous_help'] = 'Студенты могут видеть имена участников';
$string['settings_anonymous_label'] = 'Сделать студентов анонимными';
$string['settings_approvedquantifier'] = 'Коэффициент одобренных вопросов';
$string['settings_approvedquantifier_help'] = 'Баллы за каждый одобренный вопрос';
$string['settings_approvedquantifier_label'] = 'Баллы за каждый одобренный вопрос';
$string['settings_availability_close_answering_from'] = 'Закрыто для ответов с';
$string['settings_availability_close_submission_from'] = 'Закрыто для отправки вопросов с';
$string['settings_availability_open_answering_from'] = 'Открыто для ответов с';
$string['settings_availability_open_submission_from'] = 'Открыто для отправки вопросов с';
$string['settings_commentdeletionperiod'] = 'Время на удаление комментариев (минуты)';
$string['settings_commentdeletionperiod_help'] = 'Установите период времени (в минутах), в течение которого кнопка Удалить будет доступна учащимся для удаления их собственных комментариев (или ответов на комментарий) после их публикации. Допустимы значения в диапазоне 0-60 минут, по умолчанию - 10. Если период удаления - 0, учащиеся не смогут удалить свои собственные комментарии. Обратите внимание, что учителя и администраторы всегда смогут удалять комментарии учащихся, а также просматривать содержимое любого удаленного комментария.';
$string['settings_excluderoles'] = 'Исключить роли в рейтинге';
$string['settings_excluderoles_help'] = 'Выбранные роли скрыты в рейтинге.  Участники с этими ролями могут по-прежнему работать с элементом СтудТест.';
$string['settings_excluderoles_label'] = 'Исключить следующие роли в рейтинге';
$string['settings_forcecommenting'] = 'Обязательный комментарий';
$string['settings_forcecommenting_help'] = 'Комментирование в этой попытке обязательно';
$string['settings_forcerating'] = 'Обязательный рейтинг';
$string['settings_forcerating_help'] = 'Выставление рейтинговой оценки для этого вопроса обязательно';
$string['settings_lastcorrectanswerquantifier'] = 'Коээфициент последних правильных ответов';
$string['settings_lastcorrectanswerquantifier_help'] = 'Баллы за каждый правильный ответ при последней попытке';
$string['settings_lastcorrectanswerquantifier_label'] = 'Баллы за последние правильные ответы';
$string['settings_lastincorrectanswerquantifier'] = 'Коэффициент последних неправильных ответов';
$string['settings_lastincorrectanswerquantifier_help'] = 'Баллы за каждый неправильный или частично неправильный ответ при последней попытке';
$string['settings_lastincorrectanswerquantifier_label'] = 'Баллы за последние неправильные ответы';
$string['settings_questionquantifier'] = 'Коэффициент созданных вопросов';
$string['settings_questionquantifier_help'] = 'Баллы за каждый созданный вопрос';
$string['settings_questionquantifier_label'] = 'Баллы за каждый созданный вопрос';
$string['settings_ratequantifier'] = 'Коэффициент рейтинга';
$string['settings_ratequantifier_help'] = 'Баллы за каждую полученную звезду';
$string['settings_ratequantifier_label'] = 'Множитель для среднего количества звёзд, полученных за вопрос';
$string['settings_removeqbehavior'] = 'Удалить плагин СтудТест';
$string['settings_removeqbehavior_help'] = 'Эта информация появится один раз во время обновления. Мы обнаружили, что у вас установлен плагин поведения вопросов СтудТест. Данный плагин больше не требуется, и мы попытаемся удалить его автоматически. Если вы по-прежнему видите эти настройки,  вручную удалите плагин поведения вопросов СтудТест  <a href="{$a}">здесь</a>.';
$string['settings_removeqbehavior_label'] = 'Удалить плагин поведения вопросов СтудТест';
$string['settings_reportingemail'] = 'Электронная почта для сообщений об оскорбительных комментариях';
$string['settings_reportingemail_help'] = 'Если указана эта электронная почта, то рядом с каждым комментарием появится кнопка Жалоба. Пользователи смогут пожаловаться на оскорбительный комментарии. Жалобы будут направлены на указанную электронную почту.
Если не заполнить это поле, функция Жалоба будет недоступна (исключение - электронная почта для жалоб указана на уровне сайта).
Можно добавить несколько адресов электронной почты, разделив их точкой с запятой.';
$string['settings_section_description_default'] = 'Параметры по умолчанию для создания нового СтудТеста';
$string['settings_section_header_question'] = 'Настройки вопроса';
$string['settings_section_header_ranking'] = 'Настройки рейтинга';
$string['show_less'] = 'Показать меньше';
$string['show_more'] = 'Показать больше';
$string['slot_of_slot'] = 'Вопрос {$a->slot} из {$a->slots} в этой группе вопросов';
$string['start_quiz_button'] = 'Начать тест';
$string['state_approved'] = 'Одобрено';
$string['state_change_tooltip_approved'] = 'Вопрос одобрен. Нажмите здесь, чтобы изменить статус этого вопроса';
$string['state_change_tooltip_changed'] = 'Вопрос изменен. Нажмите здесь, чтобы изменить статус этого вопроса';
$string['state_change_tooltip_disapproved'] = 'Вопрос не одобрен. Нажмите здесь, чтобы изменить статус этого вопроса';
$string['state_change_tooltip_new'] = 'Новый вопрос. Нажмите здесь, чтобы изменить статус этого вопроса';
$string['state_changed'] = 'Изменено';
$string['state_column_name'] = 'Состояние';
$string['state_column_name_veryshort'] = 'Состояние';
$string['state_disapproved'] = 'Отклонено';
$string['state_new'] = 'Новый';
$string['state_toggle'] = 'Изменить состояние';
$string['statistic_block_approvals'] = 'Вопрос одобрен';
$string['statistic_block_created'] = 'Вопросы созданы';
$string['statistic_block_disapprovals'] = 'Вопросы не получили одобрения';
$string['statistic_block_new_changed'] = 'Новый/измененный вопрос';
$string['statistic_block_progress_available'] = 'Доступные вопросы';
$string['statistic_block_progress_last_attempt_correct'] = 'Последняя попытка правильная';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Последняя попытка неправильная';
$string['statistic_block_progress_never'] = 'На вопросы не было предоставлено ответов';
$string['statistic_block_title'] = 'Мои достижения';
$string['studentquiz'] = 'СтудТест';
$string['studentquiz:addinstance'] = 'Добавить новый экземпляр для СтудТеста';
$string['studentquiz:emailnotifyapproved'] = 'Уведомление об одобрении вопроса';
$string['studentquiz:emailnotifychanged'] = 'Уведомление об изменении вопрооса';
$string['studentquiz:emailnotifycommentadded'] = 'Уведомление о новом комментарии';
$string['studentquiz:emailnotifycommentdeleted'] = 'Уведомление об удалении комментария';
$string['studentquiz:manage'] = 'Модерировать вопросы СтудТеста';
$string['studentquiz:previewothers'] = 'Предварительный просмотр вопросов других участников';
$string['studentquiz:submit'] = 'Отправить свой вопрос';
$string['studentquiz:unhideanonymous'] = 'Открывать настоящие имена даже в анонимном режиме';
$string['studentquiz:view'] = 'Просмотр вопросов';
$string['studentquizname'] = 'Название СтудТеста';
$string['studentquizname_help'] = 'Название СтудТеста';
$string['submissionendbeforestart'] = 'Дата срока окончания не может быть раньше даты начала';
$string['tags'] = 'Тэги';
$string['unapprove'] = 'Отклонить';
