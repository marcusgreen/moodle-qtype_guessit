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

namespace qtype_guessit;


use \qtype_gapfill_test_helper as helper;
use qtype_guessit_question;

global $CFG;

require_once($CFG->dirroot . '/question/type/questionbase.php');
require_once($CFG->dirroot . '/question/engine/tests/helpers.php');
require_once($CFG->dirroot . '/question/type/guessit/question.php');

/**
 * Tests for Guess It
 *
 * @package    qtype_guessit
 * @category   test
 * @copyright  2025 Marcus Green
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class question_test extends \advanced_testcase {

    public function setUp(): void {
        $this->resetAfterTest();
    }

    public function test_case_sensitivity(): void {
        $question = new qtype_guessit_question();
        $question->casesensitive = true;

        $this->assertTrue($question->casesensitive,
            'Case sensitivity should be enabled when set to true');
    }


}
