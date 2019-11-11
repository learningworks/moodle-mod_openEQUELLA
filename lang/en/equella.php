<?php
// This file is part of the EQUELLA module - http://git.io/vUuof
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

$string['pluginname'] = 'Te Kete (openEQUELLA) Resource';
$string['pluginadministration'] = 'Te Kete (openEQUELLA) administration';
$string['modulename'] = 'Te Kete (openEQUELLA) Resource';
$string['modulename_help'] = 'The Te Kete (openEQUELLA) module enables a tutor to link to content stored in the Te Kete repository. Users are automatically authenticated to Te Kete when they choose a resource.';
$string['modulenameplural'] = 'Te Kete (openEQUELLA) Resource';
$string['description'] = 'Content';
$string['chooseeqeullaresources'] = 'Choose Te Kete (openEQUELLA) Resource';
$string['noinstances'] = 'There are no Te Kete (openEQUELLA) Resources in this course';
$string['modulenameplural'] = 'Te Kete (openEQUELLA) Resource ';
$string['notsubmittedyet'] = 'Te Kete (openEQUELLA) Resource not submitted yet';
$string['clicktoopen'] = 'Click {$a} link to open resource.';
$string['crontask'] = 'Te Kete (openEQUELLA) Resource cron task';
// Course page drag and drop dialog
$string['dnduploadresource'] = 'Contribute to Te Kete';
$string['dnduploadresourcemetadata'] = 'Contribute to Te Kete with meta data';
$string['mustloggintoview'] = 'Please log in to view this page.';

////////////////////////////////////////////////////////
// Permissions
$string['equella:addinstance'] = 'Add a new Te Kete (openEQUELLA) Resource';
$string['equella:manage'] = 'Manage an Te Kete (openEQUELLA) Resource';
$string['equella:view'] = 'View Te Kete (openEQUELLA) Resource';
$string['equella:manage'] = 'Manage Te Kete (openEQUELLA) Resource';

////////////////////////////////////////////////////////
// OPTIONS
$string['option.pagewindow.header'] = 'Display options';
$string['option.pagewindow'] = 'Display';
$string['option.pagewindow.same'] = 'Same window';
$string['option.pagewindow.new'] = 'New window';
$string['option.popup.width'] = 'Default window width (in pixels)';
$string['option.popup.height'] = 'Default window height (in pixels)';
$string['option.popup.resizable'] = 'Allow the window to be resized';
$string['option.popup.scrollbars'] = 'Allow the window to be scrolled';
$string['option.popup.directories'] = 'Show the directory links';
$string['option.popup.location'] = 'Show the location bar';
$string['option.popup.menubar'] = 'Show the menu bar';
$string['option.popup.toolbar'] = 'Show the toolbar';
$string['option.popup.status'] = 'Show the status bar';

////////////////////////////////////////////////////////
// CONFIGURATION: General Settings

$string['config.general.heading'] = 'General Settings';

$string['config.changelog.title'] = 'View change log';
$string['config.changelog.desc'] = 'View bug fixes, new features added to current openEQUELLA module release.';

$string['config.url.title'] = 'Te Kete (openEQUELLA) URL';
$string['config.url.desc'] = 'The URL to Te Kete (openEQUELLA). Should end with /signon.do (e.g. http://lcms.institution.edu.au/signon.do)';

$string['config.action.title'] = 'Te Kete (openEQUELLA) action';
$string['config.action.desc'] = 'The action string for Te Kete (openEQUELLA). Please note:
   1. Use "selectOrAdd" for EQUELLA 6.0 and older, for EQUELLA 6.1 onward please use "structured"
   2. There should not be a ? or a & at the start or end of the string.';

$string['config.restriction.title'] = 'Restrict selections';
$string['config.restriction.desc'] = 'Choose whether course editors should only be able to select items, attachments, packages or anything. Please note that the restrictions only working for EQUELLA 6.0 and higher.';
$string['config.restriction.none'] = 'No restrictions';

$string['config.restriction.itemsonly'] = 'Items only';
$string['config.restriction.attachmentsonly'] = 'Attachments only';
$string['config.restriction.packagesonly'] = 'Packages only';

$string['config.options.title'] = 'Te Kete (openEQUELLA) options';
$string['config.options.desc'] = 'The options string for Te Kete (openEQUELLA) (e.g. allPowerSearches=true&contributionCollectionIds=uuid1,uuid2). Please note that there should not be a ? or a & at the start or end of the string.  This field is optional.';

$string['config.adminuser.title'] = 'Te Kete (openEQUELLA) administrator username';
$string['config.adminuser.desc'] = 'The username of an administrative account in Te Kete (openEQUELLA).  This account is used by high-level admin functions such as the Backup Course To Te Kete (openEQUELLA) block, and also for background tasks that don\'t have a user session such as openEQUELLA Resource Checker.  When an activity requires an session with this user, they will be logged in using the Default shared secret values configured below.';

$string['config.open.newwindow'] = 'Open Te Kete (openEQUELLA) resource in new window';
$string['config.window.width'] = 'Default window width';
$string['config.window.height'] = 'Default window height';

////////////////////////////////////////////////////////
// CONFIGURATION: LTI
$string['config.enablelti'] = 'Enable LTI';
$string['config.enablelti.desc'] = 'When LTI is enabled, Shared secrets are disabled for Te Kete (openEQUELLA) selection sessions. LTI must be enabled to store QTI quiz scores in the Moodle gradebook when QTI 2.1 quizzes linked to courses from openEQUELLA are launched. If this functionality is not required, LTI doesn’t have to be enabled, and shared secrets can still be used. Shared secrets are stored regardless, as they are still used for the Moodle blocks and Drag and Drop functions.';
$string['config.lti.heading'] = 'LTI Settings';
$string['config.lti_oauth_heading'] = 'LTI OAuth client settings';
$string['config.lti.help'] =  '';
$string['config.lti.key.title'] = 'Client ID';
$string['config.lti.key.help'] = 'Client ID is required if LTI is enabled.';
$string['config.lti.secret.title'] = 'Client secret';
$string['config.lti.secret.help'] = 'Client secret is required if LTI is enabled.';
$string['config.lti.liscallback.title'] = 'Outcome callback URL';

////////////////////////////////////////////////////////
// CONFIGURATION: Shared Secrets

$string['config.sharedsecrets.heading'] = 'Shared Secret Settings';
$string['config.sharedsecrets.help'] =  '<p>Below you can set a default Te Kete (openEQUELLA) shared secret for single signing-on users.  You can configure different shared secrets for general (read) usage, and a specialised role based shared secret for each <em>write</em> role in your Moodle site.  If a shared secret ID is not configured for a role then the default shared secret ID and shared secret are used.</p><p>All shared secret IDs and shared secrets must also be configured within openEQUELLA and the shared secret module enabled.  This configuration is found in the openEQUELLA Administration Console under User Management > Shared Secrets.</p>';

$string['config.group'] = '{$a} role settings';
$string['config.group.default'] = 'Default';
$string['config.group.noname'] = 'Role "{$a}" settings';
$string['config.group.manager'] = 'Manager role settings';
$string['config.group.coursecreator'] = 'Course creator role settings';
$string['config.group.editingteacher'] = 'Editing teacher role settings';
$string['config.group.teacher'] = 'Teacher role settings';
$string['config.group.student'] = 'Student role settings';
$string['config.group.guest'] = 'Guest role settings';
$string['config.group.user'] = 'User role settings';
$string['config.group.frontpage'] = 'Frontpage role settings';

$string['config.sharedid.title'] = 'Shared secret ID';
$string['config.sharedsecret.title'] = 'Shared secret';

////////////////////////////////////////////////////////
// CONFIGURATION: Drag and drop
//
$string['config.dnd.heading'] = 'Drag and drop options';
$string['config.dnd.help'] = '';
$string['interceptfiles'] = 'Intercept drag and drop files';
$string['interceptfilesintro'] = 'Select the action required when dragging and dropping files onto the course page';
$string['interceptnone'] = 'Don\'t intercept files';
$string['interceptauto'] = 'Auto contribute files in openEQUELLA';
$string['interceptask']  = 'Display file destination dialog';
$string['interceptmetadata']  = 'Auto contribute file to openEQUELLA with meta data';

////////////////////////////////////////////////////////
// EQUELLA Resource Checker

$string['checker.subject'] = 'Te Kete (openEQUELLA) Resource Resource Checker';
$string['checker.message'] = 'The URL for one of the Te Kete (openEQUELLA) Resource was found to be unavailable:<br>
<br>
<a href="{$a->url}">{$a->url}</a><br>
Name: {$a->name}<br>
Unit: <a href="{$a->courseurl}">{$a->coursename}</a><br>
<br>
You have received this email because you have sufficient permission to fix this.';

////////////////////////////////////////////////////////
// Errors and stuff
$string['restapinolocation'] = 'No location returned';

////////////////////////////////////////////////////////
// EQUELLA LMS PUSH
/*
$string['push.name'] = 'Name';
$string['push.description'] = 'Description';
$string['push.views'] = 'Total views';
$string['push.version'] = 'Version';
$string['push.version.latest'] = 'Latest version';
$string['push.archived'] = 'Visible';
$string['push.archived.yes'] = 'yes';
$string['push.archived.no'] = 'no';
$string['push.attachment'] = 'Selected attachment';
*/

$string['webserviceerror'] = '{$a}';
