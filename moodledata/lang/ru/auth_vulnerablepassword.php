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
 * Strings for component 'auth_vulnerablepassword', language 'ru', version '4.0'.
 *
 * @package     auth_vulnerablepassword
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgements'] = 'Подтверждения';
$string['acknowledgementsdesc'] = 'Этот плагин использует
<a href="https://haveibeenpwned.com/"> API сайта Pwned </a> </a>. <br>
Создано <a href="https://www.troyhunt.com/"> Troy Hunt </a>. <br>
Идея была основана на аналогичном проекте Wordpress
<a href="https://www.wordfence.com/blog/2018/03/password-leak-attacks-wordpress/">
Wordfence </a>. <br>
Плагин был создан <a href="https://joshwillcock.co.uk/">
Josh Willcock </a> для участников
из <a href="https://charitylearning.org/">
Благотворительного учебного консорциума </a>.';
$string['auth_description'] = 'Этот плагин проверяет, не был ли скомпрометирован пароль пользователя, и предупреждает их, если им необходимо изменить его.';
$string['auth_pluginname'] = 'Уязвимый пароль';
$string['auth_vulnerablepassworddescription'] = 'Этот плагин проверяет, не был ли скомпрометирован пароль пользователя, и предупреждает их, если им необходимо изменить его.';
$string['continuetodashboard'] = 'Перейти в Личный кабинет';
$string['howdoesthiswork'] = 'Как это работает?';
$string['howdoesthisworkdesc'] = 'Очень важно, чтобы мы не отправляли ваш пароль для проверки третьей стороне. Поэтому, когда вы предоставляете нам свой пароль, мы зашифруем его с помощью метода SHA-1 (<a href="https://en.wikipedia.org/wiki/SHA-1">
https://en.wikipedia.org/wiki/SHA-1 </a>).
Например, пароль «Password123» будет зашифрован как
«B2e98ad6f6eb8508dd6a14cfa704bad7f05f6fb1».
Затем мы запрашиваем у API все пароли, которые начинаются с «B2e98». Таким образом, ваш пароль никогда не отправляется за пределы LMS. Затем мы получим список всех паролей, начинающихся с «B2e98» и проверим, есть ли оставшиеся 35 символов вашего зашифрованный пароля в этом списке, Если это произойдет, мы дадим вам знать немедленно.';
$string['howdoweknowthis'] = 'Как это работает?';
$string['howdoweknowthisdesc'] = 'Мы интегрировали эту платформу с публичным сервисом «Have I Been Pwned» , созданным Troy Hunt (<a href="https://www.troyhunt.com/"> https://www.troyhunt.com/ </a>).
Troy  создал «Have I Been Pwned» (<a href="https://haveibeenpwned.com/">
https://haveibeenpwned.com/ </a>), что позволяет проверить, есть ли ваши данные в этих списках. Если ваше имя пользователя или пароль появляются в списке, где более 5 миллиардов аккаунтов из более чем 300 утечек, то Вы будете предупреждены.';
$string['pluginname'] = 'Уязвимый пароль';
$string['resetyourpassword'] = 'Сбросить пароль';
$string['whatshouldido'] = 'Что мне делать?';
$string['whatshouldidodesc'] = 'Если вы видели это предупреждение, то введенный вами пароль появляется один или несколько раз в этих списках. Вы должны изменить свой пароль для любой учетной записи, которая использует этот пароль, а не только здесь. Хакеры понимают, что многие люди используют один и тот же пароль в разных местах. Это означает, что если они получили ваш пароль от Facebook, то они будут надеяться, что этот же пароль подойдет и для вашей электронной почты.';
$string['yourpasswordisvulnerabledesc'] = 'За последние несколько лет хакеры взломали большое количество организаций и получили учетные данные. Обычно это имена пользователей, электронная почта, адреса, пароли и иногда банковские реквизиты. Эта информация часто предназначена для продажи в даркнете или открытой публикации';
$string['yourpasswordisvulnerableheader'] = 'Ваш пароль уязвим';
