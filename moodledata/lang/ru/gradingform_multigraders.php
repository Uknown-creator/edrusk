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
 * Strings for component 'gradingform_multigraders', language 'ru', version '4.0'.
 *
 * @package     gradingform_multigraders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Добавить часто используемый комментарий';
$string['auto_calculate_final_method'] = 'Метод автоматического вычисления следующей оценки и результатов';
$string['auto_calculate_final_method_0'] = 'последняя из предыдущих оценок';
$string['auto_calculate_final_method_1'] = 'минимальная из предыдущих оценок';
$string['auto_calculate_final_method_2'] = 'максимальная из предыдущих оценок';
$string['auto_calculate_final_method_3'] = 'среднее по предыдущим оценкам';
$string['auto_calculate_final_method_help'] = 'Окончательная оценка определяется последним проверяющим, однако система автоматически рассчитывает следующую оценку в зависимости от предыдущей на основе выбранного здесь алгоритма. Этот же метод используется и для определения следующего результата.';
$string['backtoediting'] = 'Обратно к редактированию';
$string['blind_marking'] = 'Слепое оценивание';
$string['blind_marking_explained'] = 'Включен режим "слепого оценивания" - дополнительные проверяющие не могут видеть предыдущие оценки, они доступны только первому (основному) проверяющему.  Однако, когда оценка публикуется, все участники могут видеть все оценки.';
$string['blind_marking_help'] = 'Если флажок установлен, дополнительные проверяющие не могут видеть предыдущие оценки, они доступны только первому (основному) проверяющему.';
$string['clicktocopy'] = 'Копировать заметки в область отзыва в виде комментария';
$string['clicktodeleteadmin'] = 'Удалить все данные по оценкам в этом задании';
$string['clicktoedit'] = 'Нажмите, чтобы редактировать';
$string['comment'] = 'Комментировать';
$string['criteria'] = 'Критерии оценивания';
$string['definition'] = 'Определение';
$string['description'] = 'Описание шаблона';
$string['editdefinition'] = 'Редактировать настройки проверки несколькими преподавателями';
$string['err_gradeinvalid'] = 'Некорректная оценка';
$string['err_gradeoutofbounds'] = 'Оценка выходит за пределы разрешенного диапазона';
$string['err_noformula'] = 'Не определена формула для расчета оценки по результатам. Пожалуйста, перейдите на страницу "Оценки", чтобы определить формулу';
$string['feedback_label'] = 'Заметки';
$string['final_grade_check'] = 'Опубликовать оценку?';
$string['final_grade_message'] = 'Оценка опубликована';
$string['finalgradefinished_noaccess'] = '{$a} завершил(а) оценивание этого элемента. Вы не можете вносить изменения.';
$string['finalgradenotdecidedyet'] = 'Окончательная оценка еще не опубликована';
$string['finalgradestarted_noaccess'] = '{$a} начал(а) оценивать эту работу. Вас нет в списке дополнительных проверяющих. Вы не можете вносить изменения';
$string['finalgradestarted_nosecond'] = '{$a} начал(а) оценивать эту работу.';
$string['graderdetails_display'] = 'Оценено: {$a}';
$string['gradingdisabled'] = 'Оценка этого элемента отключена, она либо заблокирована, либо переопределена.';
$string['gradingof'] = 'Оценка {$a}';
$string['instancedetails_display'] = 'Добавлено оценок - {$a}.';
$string['maxscore'] = 'Наибольший результат';
$string['message_assign_name'] = 'Задание {$a}';
$string['message_footer'] = '<br/><span style="font-size:80%">[автоматическое сообщение, сгенерированное плагином "Несколько проверяющих"]</span><br/>';
$string['message_header'] = '<br/>';
$string['message_smallmessage1'] = '{$a} запросил дополнительную проверку.';
$string['message_smallmessage2'] = 'Пожалуйста, найдите время, чтобы оценить эту работу.';
$string['message_smallmessage3'] = '{$a} завершил(а) дополнительную проверку';
$string['message_smallmessage4'] = 'Пожалуйста, посмотрите и определите окончательную оценку.';
$string['message_student_name'] = 'Студент {$a}';
$string['message_subject'] = 'Требуется дополнительная проверка работы {$a}';
$string['message_subject_to_initial'] = 'Завершена дополнительная проверка работы {$a}';
$string['messageprovider:secondgrading'] = 'Уведомления о заданиях, в которых требуется дополнительная проверка';
$string['needregrademessage'] = 'Определение оценки несколькими преподавателями было изменено после того, как этот студент был оценен. Студент не может видеть результат, пока {$a} не проверит опубликованную оценку.';
$string['no_grade'] = 'Нет оценки';
$string['pluginname'] = 'Несколько проверяющих';
$string['previewdefinition'] = 'Просмотреть определение';
$string['privacy:metadata'] = 'Этот плагин не хранит никаких личных данных пользователя. Любая отображаемая информация о пользователях хранится в другом месте в Moodle.';
$string['require_second_grader'] = 'Требуется дополнительная проверка работы вторым преподавателем';
$string['restoredfromdraft'] = 'ПРИМЕЧАНИЕ. Последняя попытка оценки этого человека не была сохранена должным образом, поэтому были восстановлены черновые оценки .';
$string['save'] = 'Сохранить';
$string['score'] = 'балл';
$string['secondary_graders'] = 'Дополнительные проверяющие';
$string['secondary_graders_help'] = 'Это список преподавателей, которых необходимо уведомить в случае, если требуется дополнительная проверка';
$string['secondary_graders_list'] = 'Назначенные дополнительные проверяющие: {$a}.';
$string['show_intermediary_to_students'] = 'Показывать заметки дополнительных проверяющих студентам?';
$string['show_intermediary_to_students_explained'] = 'Студент также может видеть все заметки дополнительных проверяющих, когда оценка опубликована.';
$string['show_intermediary_to_students_help'] = 'Если флажок установлен, дополнительные проверяющие могут выбрать, будут ли их заметки видны учащимся при публикации оценки.';
$string['timestamp_format'] = 'd/m/Y H:i:s';
$string['useralreadygradedthisitem'] = 'Вы уже оценили эту работу, кто-то еще должен определить окончательную оценку и дать отзыв в виде комментария.';
$string['useralreadygradedthisitemfinal'] = 'Только {$a} может изменить окончательную оценку и заметки.';
$string['visible_to_students'] = 'Показывать заметки студенту?';
