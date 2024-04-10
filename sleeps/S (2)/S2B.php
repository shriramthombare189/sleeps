<?php
$doc = new DOMDocument();
$doc->load('Student.xml');
echo $doc->saveXML();
$doc->save('Student.doc');
$students = $doc->getElementsByTagName('student');
foreach ($students as $student) {
    $names = $student->getElementsByTagName('name');
    $name = $names->item(0)->nodeValue;
    echo 'Student Name: ' . $name . '<br>';
}
?>
