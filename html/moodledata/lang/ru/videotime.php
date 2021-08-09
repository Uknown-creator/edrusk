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
 * Strings for component 'videotime', language 'ru', version '3.11'.
 *
 * @package     videotime
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_name'] = 'Название элемента курса';
$string['activity_name_help'] = 'Имя, отображаемое в курсе для этого элемента курса Video Time.';
$string['albums'] = 'Альбомы';
$string['api_not_authenticated'] = 'API Vimeo не аутентифицирован.';
$string['api_not_configured'] = 'API Vimeo не настроен.';
$string['apply'] = 'Применить';
$string['authenticate_vimeo'] = 'Аутентификация в Vimeo';
$string['authenticate_vimeo_success'] = 'Аутентификация в Vimeo прошла успешно. Теперь вы можете использовать функции, основанные на API Vimeo.';
$string['authenticated'] = 'Аутентифицированный';
$string['browsevideos'] = 'Просмотр списка видео';
$string['choose_video'] = 'Выбрать видео';
$string['choose_video_confirm'] = 'Вы уверены, что хотите выбрать видео?';
$string['cleanupalbumsandtags'] = 'Очистка альбомов и тегов';
$string['client_id'] = 'Vimeo Client ID';
$string['client_id_help'] = 'Идентификатор клиента (Client ID) генерируется, когда вы создаете приложение (App) под своей учетной записью Vimeo. Перейдите на https://developer.vimeo.com/apps/new, чтобы начать этот процесс.';
$string['columns'] = 'Количество столбцов';
$string['columns_help'] = 'Выберите ширину для этого видео при отображении в режиме предварительного просмотра. Количество столбцов - это количество видео, которое можно отобразить в одном ряду.';
$string['completion_on_finish'] = 'Завершение по завершении видео';
$string['completion_on_percent'] = 'Завершение по проценту просмотренного';
$string['completion_on_view'] = 'Завершение по времени просмотра';
$string['configure_vimeo_first'] = 'Вы должны настроить приложение (App) в Vimeo перед аутентификацией.';
$string['confirmation'] = 'Подтверждение';
$string['create_vimeo_app'] = 'Создать приложение Vimeo';
$string['default'] = 'По умолчанию';
$string['deletesessiondata'] = 'Удалить данные сеанса';
$string['discover_videos'] = 'Откройте для себя видео Vimeo';
$string['discovering_videos'] = 'Обнаружено {$a->count} видео';
$string['display_options'] = 'Показать варианты';
$string['done'] = 'Готово';
$string['duration'] = 'Продолжительность';
$string['embed_options'] = 'Встраивание';
$string['embed_options_defaults'] = 'Параметры встраивания по умолчанию';
$string['embeds'] = 'Встраивание';
$string['estimated_request_time'] = 'Примерное время до завершения';
$string['force_help'] = 'Если этот флажок установлен, значения по умолчанию будут перекрывать настройки конкретного экземпляра.';
$string['goback'] = 'Вернуться назад';
$string['invalid_session_state'] = 'Неверное состояние сеанса.';
$string['label_mode'] = 'Режим метки';
$string['mode'] = 'Режим';
$string['more'] = 'Больше';
$string['needs_authentication'] = 'Требуется повторная аутентификация';
$string['next_activity'] = 'Следующий элемент курса';
$string['next_activity_auto'] = 'Автоматически перейти к следующему элементу курса';
$string['next_activity_auto_help'] = 'Автоматически загружать следующий элемент курса, когда студент заканчивает видео.';
$string['next_activity_button'] = 'Включить кнопку «Следующий элемент курса»';
$string['next_activity_button_help'] = 'Отображать над видео кнопку, которая перенаправляет на следующий элемент курса, который пользователь должен пройти.';
$string['next_activity_in_course'] = 'По умолчанию: следующий элемент курса';
$string['normal_mode'] = 'Нормальный режим';
$string['not_authenticated'] = 'Не аутентифицирован';
$string['of'] = 'из';
$string['option_autoplay'] = 'Автозапуск';
$string['option_autoplay_help'] = 'Автоматически начать воспроизведение видео. Обратите внимание, что это не будет работать на тех устройствах или браузерах, которые блокируют автозапуск.';
$string['option_color_help'] = 'Укажите цвет элементов управления видео. Цвета могут быть переопределены настройками встраивания видео.';
$string['option_height'] = 'Высота';
$string['option_height_help'] = 'Точная высота видео. По умолчанию используется высота самой большой доступной версии видео.';
$string['option_maxheight'] = 'Максимальная высота';
$string['option_maxheight_help'] = 'То же, что высота, но видео не будет превышать собственный размер видео.';
$string['option_maxwidth'] = 'Максимальная ширина';
$string['option_maxwidth_help'] = 'То же, что ширина, но видео не будет превышать собственный размер видео.';
$string['option_muted'] = 'Выключить звук';
$string['option_muted_help'] = 'Выключить звук в этом видео при загрузке. Это требуется для автозапуска видео в некоторых браузерах.';
$string['option_portrait'] = 'Портрет';
$string['option_portrait_help'] = 'Отображать на видео портрет (изображение профиля автора видео)';
$string['option_responsive'] = 'Адаптивный режим';
$string['option_responsive_help'] = 'Если этот флажок установлен, проигрыватель видео будет реагировать на изменения и адаптироваться к размеру страницы или экрана.';
$string['option_speed'] = 'Скорость';
$string['option_speed_help'] = 'Показать элементы управления скоростью в меню настроек и включить API скорости воспроизведения (доступно для учетных записей PRO и Business).';
$string['option_title'] = 'Заголовок';
$string['option_title_help'] = 'Показать заголовок на видео.';
$string['option_width'] = 'Ширина';
$string['option_width_help'] = 'Точная ширина видео. По умолчанию используется ширина самой большой доступной версии видео.';
$string['pluginadministration'] = 'Администрирование плагина «Video Time»';
$string['pluginname'] = 'Video Time';
$string['privacy:metadata'] = 'Модуль элемента курса «Video Time» не хранит никаких личных данных.';
$string['process_videos'] = 'Обрабатывать видео';
$string['process_videos_help'] = 'Видео будут обработаны с помощью задания планировщика. Для больших учетных записей Vimeo может потребоваться время для полной обработки всех видео.';
$string['pull_from_vimeo'] = 'Извлечь метаданные из Vimeo';
