<?php
class DatabaseModel
{
	private function fileds()
	{
		$string = array();
		foreach ($this->rows as $row)
		{
			if(is_int($this->$row) || is_double($this->$row))
			{
				$string[] = $row . "= ".$this->$row."";
			}
			else
			{
				$string[] = $row . "= '".$this->$row."'";
			}
			 
		}
		return implode(", ", $string);
	}

	public static function  read($sql , $type = PDO::FETCH_ASSOC , $class = null)
	{
		global $dbh;
		$result = $dbh->query($sql);
		if($result)
		{
			if(null !== $class && $type == PDO::FETCH_CLASS )
			{
				$data = $result->fetchAll($type , $class);
			}
			else
			{
				$data = $result->fetchAll($type);
			}
			if(count($data) == 1)
			{
				$data = array_shift($data);
			}
			return $data;
		}
		else
		{
			return false;
		}
	}

	private function add()
	{
		global $dbh;
		$sql = "INSERT INTO ".$this->tablename." SET " . $this->fileds();
		$affectedrows = $dbh->exec($sql);
		if($affectedrows != false)
		{
			$this->id = $dbh->lastInsertId();
		}
		else
		{
			return false;
		}
		return true;
	}

	private function update()
	{
		global $dbh;
		$sql = "UPDATE ".$this->tablename." SET " . $this->fileds() .'WHERE id=' .$this->id;
		$affectedrows = $dbh->exec($sql);
		return $affectedrows != false ? true : false;
		 
	}

	public function delete()
	{
		global $dbh;
		$sql = "DELETE FROM ".$this->tablename." WHERE id= '".$this->id."' ";
		$affectedrows = $dbh->exec($sql) or die('erore sql');
		return $affectedrows != false ? true : false;
		 
	}

	public function save()
	{
		return ($this->id === null) ? $this->add() : $this->update();
	}


}