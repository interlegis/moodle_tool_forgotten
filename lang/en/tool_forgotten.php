<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'forgotten', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   moodle
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Password recovery by CPF field';
$string['searchbycpf'] = 'Search by CPF';
$string['cpf'] = 'CPF';
$string['cpffieldnotfound'] = 'This site has not a CPF field defined.';
$string['usercpfnotfound'] = 'No user with this CPF was found.';
$string['searchbyusername'] = 'Search by username';
$string['username'] = 'Username';
$string['search'] = 'Search';
$string['searchbyemail'] = 'Search by email address';
$string['email'] = 'Email address';
$string['invalidemail'] = 'Invalid email address';
$string['forgottenduplicate'] = 'The email address is shared by several accounts, please enter username instead';
$string['confirmednot'] = 'Your registration has not yet been confirmed!';
$string['emailnotfound'] = 'The email address was not found in the database';
$string['usernamenotfound'] = 'The username was not found in the database';
$string['usernameoremail'] = 'Enter either username or email address or CPF';
$string['passwordforgotten'] = 'Forgotten password';
$string['login'] = 'Login';
$string['loginalready'] = 'You are already logged in';
$string['emailpasswordsent'] = 'Thank you for confirming the change of password.
An email containing your new password has been sent to your address at<br /><b>{$a->email}</b>.<br />
The new password was automatically generated - you might like to
<a href="{$a->link}">change your password</a> to something easier to remember.';
$string['emailpasswordconfirmmaybesent'] = '<p>If you supplied a correct username or email address then an email should have been sent to you.</p>
   <p>It contains easy instructions to confirm and complete this password change.
If you continue to have difficulty, please contact the site administrator.</p>';
$string['passwordforgotteninstructions2'] = 'To reset your password, submit your username or your email address below. If we can find you in the database, an email will be sent to your email address, with instructions how to get access again.';
