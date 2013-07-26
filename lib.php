<?php
$coursetypes=array();
$coursetypes[]=array('type'=>'c0','typeId' => 'c0','search'=>'Informationsportal','order'=>0,'full'=>'Fachhochschule Lübeck','short'=>'FHL');
$coursetypes[]=array('type'=>'c1','typeId' => 'c0','search'=>'Mitarbeiter/innen FHL','order'=>1,'full'=>'Fachhochschule Lübeck','short'=>'FHL');
$coursetypes[]=array('type'=>'c2','typeId' => 'c0','search'=>'Train the VFH-Trainer','order'=>2,'full'=>'Fachhochschule Lübeck','short'=>'FHL');
$coursetypes[]=array('type'=>'c3','typeId' => 'c3','search'=>'Fachbereich','order'=>3,'full'=>'Studiengangskurse','short'=>'Studiengang');
$coursetypes[]=array('type'=>'c4','typeId' => 'c3','search'=>'Fachschaft','order'=>4,'full'=>'Studiengangskurse','short'=>'Studiengang');
$coursetypes[]=array('type'=>'c5','typeId' => 'c5','search'=>'Fachausschuss','order'=>5,'full'=>'Fachausschusskurse','short'=>'Fachausschuss');
// (Rieger) $coursetypes[]=array('type'=>'c6','typeId' => 'c0','search'=>'Gemeinsamer Koordinierungsausschuss','order'=>6,'full'=>'Gemeinsamer Koordinierungsausschuss','short'=>'GEMKA');
$coursetypes[]=array('type'=>'c6','typeId' => 'c0','search'=>'Gemeinsamer Koordinierungsausschuss','order'=>6,'full'=>'Fachhochschule Lübeck','short'=>'FHL');
$coursetypes[]=array('type'=>'c7','typeId' => 'c7','search'=>'VFH FV','order'=>7,'full'=>'Fachverbundskurse','short'=>'Fachverbünde');
$coursetypes[]=array('type'=>'c8','typeId' => 'c8','search'=>'WS15','order'=>8,'full'=>'Wintersemester 15/16','short'=>'WS 15/16');
$coursetypes[]=array('type'=>'c9','typeId' => 'c9','search'=>'SS15','order'=>9,'full'=>'Sommersemester 15','short'=>'SS 15');
$coursetypes[]=array('type'=>'c10','typeId' => 'c10','search'=>'WS14','order'=>10,'full'=>'Wintersemester 14/15','short'=>'WS 14/15');
$coursetypes[]=array('type'=>'c11','typeId' => 'c11','search'=>'SS14','order'=>11,'full'=>'Sommersemester 14','short'=>'SS 14');
$coursetypes[]=array('type'=>'c12','typeId' => 'c12','search'=>'WS13','order'=>12,'full'=>'Wintersemester 13/14','short'=>'WS 13/14');
$coursetypes[]=array('type'=>'c13','typeId' => 'c13','search'=>'SS13','order'=>13,'full'=>'Sommersemester 13','short'=>'SS 13');
$coursetypes[]=array('type'=>'c14','typeId' => 'c14','search'=>'WS12','order'=>14,'full'=>'Wintersemester 12/13','short'=>'WS 12/13');
$coursetypes[]=array('type'=>'c15','typeId' => 'c15','search'=>'SS12','order'=>15,'full'=>'Sommersemester 12','short'=>'SS 12'); 
$coursetypes[]=array('type'=>'c16','typeId' => 'c16','search'=>'WS11','order'=>16,'full'=>'Wintersemester 11/12','short'=>'WS 11/12');
$coursetypes[]=array('type'=>'c17','typeId' => 'c17','search'=>'SS11','order'=>17,'full'=>'Sommersemester 11','short'=>'SS 11');
$coursetypes[]=array('type'=>'c18','typeId' => 'c18','search'=>'WS10','order'=>18,'full'=>'Wintersemester 10/11','short'=>'WS 10/11');
$coursetypes[]=array('type'=>'c19','typeId' => 'c19','search'=>'SS10','order'=>19,'full'=>'Sommersemester 10','short'=>'SS 10');
$coursetypes[]=array('type'=>'c20','typeId' => 'c20','search'=>'WS09','order'=>20,'full'=>'Wintersemester 09/10','short'=>'WS 09/10');
$coursetypes[]=array('type'=>'c21','typeId' => 'c21','search'=>'SS09','order'=>21,'full'=>'Sommersemester 09','short'=>'SS 09');
$coursetypes[]=array('type'=>'c22','typeId' => 'c22','search'=>'WS08','order'=>22,'full'=>'Wintersemester 08/09','short'=>'WS 08/09');
$coursetypes[]=array('type'=>'c23','typeId' => 'c23','search'=>'SS08','order'=>23,'full'=>'Sommersemester 08','short'=>'SS 08');
$coursetypes[]=array('type'=>'c24','typeId' => 'c24','search'=>'WS07','order'=>24,'full'=>'Wintersemester 07/08','short'=>'WS 07/08');
$coursetypes[]=array('type'=>'c25','typeId' => 'c25','search'=>'SS07','order'=>25,'full'=>'Sommersemester 07','short'=>'SS 07');
$coursetypes[]=array('type'=>'c26','typeId' => 'c26','search'=>'WS06','order'=>26,'full'=>'Wintersemester 06/07','short'=>'WS 06/07');
$coursetypes[]=array('type'=>'c27','typeId' => 'c27','search'=>'SS06','order'=>27,'full'=>'Sommersemester 06','short'=>'SS 06');
$coursetypes[]=array('type'=>'c28','typeId' => 'c28','search'=>'WS05','order'=>28,'full'=>'Wintersemester 05/06','short'=>'WS 05/06');
$coursetypes[]=array('type'=>'c29','typeId' => 'c29','search'=>'SS05','order'=>29,'full'=>'Sommersemester 05','short'=>'SS 05');
$coursetypes[]=array('type'=>'c30','typeId' => 'c30','search'=>'§$%xyz_weitere_kurse','order'=>30,'full'=>'Weitere Kurse','short'=>'Weitere');

// function get_course_type($coursename) {
	// global $coursetypes;
	// foreach ($coursetypes as $coursetype) {
		// if (strstr($coursename,$coursetype['search'])) {
			// return ($coursetype);
		// }
	// }
	////(Rieger) $default=array('type'=>'c30','search'=>'','order'=>30,'full'=>'Weitere Kurse','Weitere');
	// $default=array('type'=>'c30','typeId' => 'c30','search'=>'','order'=>30,'full'=>'Weitere Kurse','short'=>'Weitere');
	// return $default;
// }

function get_course_type($coursename) {
	if ($coursename == "Informationsportal" or $coursename == "Mitarbeiter/innen FHL") {
		$default = array('type'=>'c0','typeId' => 'c0','search'=>'Informationsportal','order'=>0,'full'=>'Fachhochschule Lübeck','short'=>'FHL');
	}
	else {
		$default=array('type'=>'c30','typeId' => 'c30','search'=>'','order'=>30,'full'=>'Weitere Kurse','short'=>'Weitere');
	}
	return $default;
}

function cmp_vfh ($a, $b) {
	$ct_a=get_course_type($a->fullname);
	$ct_b=get_course_type($b->fullname);
	if ($ct_a['order'] == $ct_b['order']) { return strcmp($a->fullname,$b->fullname); }
	return ($ct_a['order'] < $ct_b['order']) ? -1 : 1;
}

// function getCoursetypeName($ctype, $short = true)    {
	// global $coursetypes;
	// foreach ($coursetypes as $coursetype) {
		// if ($coursetype['type']==$ctype) {
			// if ($short==true) {
				// return $coursetype['short'];
			// } else {
				// return $coursetype['full'];
			// }
		// }
	// }
// }

function getCoursetypeName($ctype, $short = true)    {
	if ($short==true) {
		if ($ctype == "c0") {
			return "FHL";
		}
		else {
			return "Weitere";
		}
	} else {
		if ($ctype == "c0") {
			return "Fachhochschule Lübeck";
		}
		else {
			return "Weitere Kurse";
		}
	}
}

function getCoursetypeNode($rootNode, $course) {
	global $PAGE;

	$ct=get_course_type($course->fullname);
	// (Rieger) $cto=$ct['type'];
	$cto=$ct['typeId'];
	$parent = $rootNode->find($cto,navigation_node::TYPE_ROOTNODE);

	if(!$parent) {
		$text = "";
		if (isset($ct["short"])) {
			$text=$ct['short'];
		}
		$parent = $rootNode->add($text, null, navigation_node::TYPE_ROOTNODE, $text, $cto);
		if (($PAGE->pagetype == "site-index") && ($cto == 0)) {
			$parent->parent->forceopen = true;
			$parent->forceopen = true;
		}
	}

	return $parent;
}

function courseSortVFH($mycourses, $sortByShortName = true ) {
	usort($mycourses, "cmp_vfh");
	return $mycourses;
}


function printCoursesVFH($courses, array $remote_courses=array()) {
	global $CFG, $USER, $DB, $OUTPUT;

	/* (Rieger)
	$htmlarray = array();
	if ($modules = $DB->get_records('modules')) {
		foreach ($modules as $mod) {
			if (file_exists(dirname(dirname(dirname(__FILE__))).'/mod/'.$mod->name.'/lib.php')) {
				include_once(dirname(dirname(dirname(__FILE__))).'/mod/'.$mod->name.'/lib.php');
				$fname = $mod->name.'_print_overview';
				if (function_exists($fname)) {
					$fname($courses,$htmlarray);
				}
			}
		}
	}
	*/

	$courses=courseSortVFH($courses, $sortByShortName = false);


	foreach ($courses as $course) {
		$ct=get_course_type($course->fullname);
		// (Rieger) $ctt=$ct['type']; 
		$ctt=$ct['typeId'];
		//echo $ctt."<br />";
		$courseList[$ctt][] = $course;
	}
	foreach (array_keys($courseList) as $startDay) {
		echo $OUTPUT->box_start((end(array_keys($courseList)) == $startDay)?'coursebox_last':'coursebox');
		$semesterName = getCoursetypeName($startDay);
		$semesterText = getCoursetypeName($startDay,false);
		$attributes = array('title' => s($semesterName));
			
		if (empty($course->visible)) {
			$attributes['class'] = 'dimmed';
		}
		echo $OUTPUT->heading($semesterText,2);
		echo $OUTPUT->container_start('courses_of_semester');
		foreach ($courseList[$startDay] as $course) {
			$attributes = array('title' => s(format_string($course->fullname)));
			if (empty($course->visible)) {			// (Rieger) nicht verfügbare Kurse grau anzeigen
				$attributes['class'] = 'dimmed';
			}
			echo '<div style="margin: 1px 1px 1px 3px;"><!-- dbg -->';
			echo $OUTPUT->heading(html_writer::link(
			new moodle_url('/course/view.php', array('id' => $course->id)), format_string($course->fullname), $attributes), 3);
			/* // added by JR
			$userrole = strtolower(get_user_roles_in_course($USER->id, $course->id));
			if (strpos($userrole, "student") !== false) {
				$context = get_context_instance(CONTEXT_COURSE, $course->id);
				$courseusers = get_enrolled_users($context, '', 0, 'u.id, u.firstname, u.lastname', 'lastname ASC, firstname ASC', 0, 0);
				echo "<div class=\"teachers\">";
				foreach ($courseusers as $courseuser) {
					$role = strtolower(get_user_roles_in_course($courseuser->id, $course->id));
					if (strpos($role, "teacher") !== false and strpos($role, "non-editing teacher") === false) {
						$attributes['class'] = 'teachers';
						echo "Teacher: ".
							html_writer::link(new moodle_url('/user/view.php', array('id' => $courseuser->id, 'course' => 1)), $courseuser->firstname." ".$courseuser->lastname).
							"<br />";
					}
				}
				echo "</div>";
			}
			// JR end */
			/* (Rieger) entfernt damit keine Aufgaben usw. in der Kursübersicht angezeigt werden
			if (array_key_exists($course->id,$htmlarray)) {
				foreach ($htmlarray[$course->id] as $modname => $html) {
					echo $html;
				}
			}
			*/
			echo "</div>";
		}
		echo $OUTPUT->container_end();
		echo $OUTPUT->box_end();
	}

	if (!empty($remote_courses)) {
		echo $OUTPUT->heading(get_string('remotecourses', 'mnet'));
	}
	foreach ($remote_courses as $course) {
		echo $OUTPUT->box_start('coursebox');
		$attributes = array('title' => s($course->fullname));
		echo $OUTPUT->heading(html_writer::link(
		new moodle_url('/auth/mnet/jump.php', array('hostid' => $course->hostid, 'wantsurl' => '/course/view.php?id='.$course->remoteid)),
		format_string($course->shortname),
		$attributes) . ' (' . format_string($course->hostname) . ')', 3);
		echo $OUTPUT->box_end();
	}
}


