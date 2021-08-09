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
 * Strings for component 'local_ldap', language 'ru', version '4.0'.
 *
 * @package     local_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attributesynctask'] = 'Синхронизировать глобальные группы с LDAP-атрибутом';
$string['cohort_synching_ldap_attribute_attribute'] = 'Имя атрибута для поиска';
$string['cohort_synching_ldap_attribute_attribute_desc'] = 'Настройте атрибут пользователя LDAP для поиска (соблюдайте регистр)';
$string['cohort_synching_ldap_attribute_autocreate_cohorts'] = 'Автоматически создавать недостающие глобальные группы';
$string['cohort_synching_ldap_attribute_autocreate_cohorts_desc'] = 'Если выбран этот параметр, автоматически создаются недостающие глобальные группы';
$string['cohort_synching_ldap_attribute_idnumbers'] = 'Идентификаторы глобальных групп';
$string['cohort_synching_ldap_attribute_idnumbers_desc'] = 'Список идентификаторов глобальных групп, разделенных запятыми; если отсутствуют все отдельные значения атрибута, будет создана синхронизированная глобальная группа';
$string['cohort_synching_ldap_attribute_objectclass'] = 'Класс пользователя';
$string['cohort_synching_ldap_attribute_objectclass_desc'] = 'Используйте для переопределения значения по умолчанию, унаследованного от плагина аутентификации LDAP или CAS (соблюдайте регистр)';
$string['cohort_synching_ldap_groups_autocreate_cohorts'] = 'Автосоздание пропущенных глобальных групп';
$string['cohort_synching_ldap_groups_autocreate_cohorts_desc'] = 'Если выбран этот параметр, автоматически создаются недостающие глобальные группы';
$string['cohort_synchronized_with_attribute'] = 'Глобальная группа синхронизирована с атрибутом {$a} LDAP';
$string['cohort_synchronized_with_group'] = 'Глобальная группа синхронизирована с группой {$a} LDAP';
$string['group_attribute'] = 'Атрибут группы';
$string['group_attribute_desc'] = 'Атрибут именования ваших групп LDAP (обычно cn)';
$string['group_class'] = 'Класс группы';
$string['group_class_desc'] = 'Установите, если ваши группы принадлежат к другому классу, например group, groupOfNames...';
$string['groupsynctask'] = 'Синхронизировать глобальные группы из LDAP групп';
$string['pluginname'] = 'Скрипты синхронизации LDAP';
$string['privacy:metadata'] = 'Сценарии синхронизации LDAP не хранят никаких данных.';
$string['process_nested_groups'] = 'Обработка вложенных групп';
$string['process_nested_groups_desc'] = 'Если этот флажок установлен, группы LDAP, включённые в группы, будут обработаны';
$string['real_user_attribute'] = 'Настоящий класс пользователя';
$string['real_user_attribute_desc'] = 'Используйте, если ваш user_attribute находится в смешанном регистре в LDAP (sAMAccountName), но не в настройках Moodle CAS/LDAP';
$string['synccohortattribute'] = 'Синхронизация глобальных групп Moodle с атрибутом LDAP';
$string['synccohortgroup'] = 'Синхронизация глобальных групп Moodle с группами LDAP';
