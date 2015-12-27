<?php

Class Recommand {
	private function connectDb() {
		$con = mysql_connect("localhost","root","");
		mysql_query("set names utf8");
		mysql_select_db("test", $con);
	}

	private function makeSql($names){ //多关键字查询sql
		$sql = 'where name ';
		if(!$names || empty($names)) return '';
		for($i=0;$i<count($names);$i++) {
			if($i==0) $sql.= "like '%$names[$i]%'";
			else $sql.= "or name like '%$names[$i]%'";
		}
		return $sql;
	}

	private function setKeyWordCookie($keyWord) {
		setcookie('rec', $keyWord);
	}

	private function makeResult($partSql, $limit = 50) {
		$limit = "LIMIT 0,{$limit}";
		$sql = "select * from BOOK1 $partSql ".$limit;
		$sql1= "select * from CLOTH1 $partSql ".$limit;
		$sql2= "select * from LIFETHING1 $partSql ".$limit;

		$results = [];
		$results[0] = mysql_query($sql);
		$results[1] = mysql_query($sql1);
		$results[2] = mysql_query($sql2);

		return $results;
	}

	public static function searchResult() {
		self::connectDb();
		$name = $_POST['query'];
		$name1=split(' ',$name);

		$name2 = self::makeSql($name1);
		self::setKeyWordCookie($name2);

		return self::makeResult($name2);
	}

	public static function getKeyWordItem($keySql) {
		self::connectDb();
		return self::makeResult($keySql, 2);
	}
}
