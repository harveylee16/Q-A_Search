<?php
require_once("libs/database.php");
class list_table extends database
{
	public function add_Data($doc, $question, $answer, $status, $raise_by, $date_raised, $pic_answer, $require_fd, $date_closed)
	{
	    $sql="INSERT INTO list VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	    $this->setQuery($sql);
	    return $this->execute(array(NULL, $doc, $question, $answer, $status, $raise_by, $date_raised, $pic_answer, $require_fd, $date_closed));
	}
}
?>