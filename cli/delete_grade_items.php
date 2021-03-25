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

define('CLI_SCRIPT', true);

require(__DIR__ . '/../../../config.php');
require_once("{$CFG->libdir}/clilib.php");
require_once("{$CFG->libdir}/cronlib.php");
require_once("{$CFG->libdir}/gradelib.php");

list($options, $unrecognized) = cli_get_params(
    [
        'courseid' => false,
        'execute' => false,
        'showdebugging' => false,
        'silent' => false,
        'help' => false,
    ],
    [
        's' => 'silent',
        'h' => 'help',
        'e' => 'execute'
    ]
);

if ($options['help']) {
    $help = <<<EOT
Equella delete grade items.

Options:
 -h, --help                Print out this help
     --showdebugging       Show developer level debugging information
 -e, --execute            
     --courseid            Delete Equella grade items for a specific course id
 -s, --silent              Suppress output to stout

Example:
\$sudo -u www-data /usr/bin/php mod/equella/cli/delete_grade_items --execute

EOT;

    echo $help;
    die;
}

if ($unrecognized) {
    $unrecognized = implode("\n  ", $unrecognized);
    cli_error(get_string('cliunknowoption', 'admin', $unrecognized));
}

if ($options['showdebugging']) {
    set_debugging(DEBUG_DEVELOPER, true);
}

if (!$options['execute']) {
    $options['silent'] = false;
}

$trace = new text_progress_trace();
if ($options['silent']) {
    $trace = new null_progress_trace();
}

// Increase memory limit.
raise_memory_limit(MEMORY_EXTRA);

// Emulate normal session - we use admin account by default.
cron_setup_user();

$sql = "SELECT DISTINCT(gi.courseid) courseid
          FROM {grade_items} gi
         WHERE gi.itemtype = itemtype AND gi.itemmodule = :itemmodule";
$params = ['itemtype' => 'mod', 'itemmodule' => 'equella'];
if ($options['courseid']) {
    $course = get_course($options['courseid']);
    $sql .= " AND courseid = :courseid";
    $params['courseid'] = $course->id;
}
$sql .= " ORDER BY courseid";
$courseids = $DB->get_records_sql($sql, $params);
foreach (array_keys($courseids) as $courseid) {
    $course = get_course($courseid);
    $params['courseid'] = $course->id;
    $gradeitems = grade_item::fetch_all($params);
    $gradeitemcount = count($gradeitems);
    $trace->output("{$gradeitemcount} Equella grade book items found for {$course->fullname}");
    if ($gradeitems) {
        foreach ($gradeitems as $gradeitem) {
            /** @var $gradeitem grade_item */
            $trace->output("Deleted Equella grade item {$gradeitem->get_name()}", 1);
            if ($options['execute']) $gradeitem->delete('mod/equella');
        }
        $trace->output("Forcing regrade of final grades");
        grade_regrade_final_grades($course->id);
    }
}
