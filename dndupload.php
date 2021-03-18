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
 * Starting point for drag and drop course uploads
 *
 * @package    core
 * @subpackage lib
 * @copyright  2012 Davo smith
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define('AJAX_SCRIPT', true);

require_once(dirname(dirname(dirname(__FILE__))) . '/config.php');
require_once($CFG->dirroot . '/mod/equella/dnduploadlib.php');

$courseid = required_param('course', PARAM_INT);
$section = required_param('section', PARAM_INT);
$type = required_param('type', PARAM_TEXT);
$modulename = required_param('module', PARAM_PLUGIN);
$displayname = optional_param('displayname', null, PARAM_TEXT);
$contents = optional_param('contents', null, PARAM_RAW); // It will be up to each plugin to clean this data, before saving it.

$metadata = new stdClass();
$metadata->eqdndcopyright = optional_param('dndcopyright', '', PARAM_TEXT);
$metadata->eqdndsubject = optional_param('dndsubject', '', PARAM_TEXT);
$metadata->eqdndtitle = optional_param('dndtitle', '', PARAM_TEXT);
$metadata->eqdnddesc = optional_param('dnddesc', '', PARAM_TEXT);
$metadata->eqdndkw = optional_param('dndkw', '', PARAM_TEXT);

$PAGE->set_url('/mod/equella/dndupload.php');

$dndproc = new equella_dndupload_ajax_processor($courseid, $section, $type, $metadata);
$dndproc->process($displayname, $contents);
