<?php
	function insert($d){
		$this->inc_order($d['parent_id']);
		$d = $this->prep_sql($d);
		if (@mysql_query("INSERT INTO `$this->tbl` SET $d")){ return true; }
		else return false;
	}
?>