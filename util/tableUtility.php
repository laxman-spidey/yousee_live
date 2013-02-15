<?php
class tableUtility
{
	private $queryResult;
	private $headElements;
	private $horizontal=TRUE;

	// constructor
	public function tableUtility($queryResult,$tableHeadElements)
	{
		$this->queryResult=$queryResult;
		$this->headElements=$tableHeadElements;
	}
	// sets the alignment of the table.
	public function setHorizontalTable($isHorizontal)
	{
		$this->horizontal=$isHorizontal;
	}
	// displays table
	public function generateTable()
	{
		$i = 0;
		echo "<table style='font-size:12px'>";
		if ($this->horizontal==TRUE)
		{
			$this->generateHorizontalTable();
		}
		else
		{
			$this->generateVerticalTable();
		}
		echo "</table>";
	}
	private function generateVerticalTable()
	{
		//display the data
		$i = 1;
		while ($rows = mysql_fetch_array($this->queryResult,MYSQL_ASSOC))
		{
			// variable for coloring oddeven rows
			$oddeven = $i & 1;
			if ($oddeven == 0)
			{
				$color = "CCCFFF";
			}
			else
			{
				$color = "FFFFFF";
			}
			echo "<tr bgcolor=\"$color\">";
			foreach ($rows as $data)
			{
				echo "<td align=\"right\">".$data ."</td>";
				echo "<td align=\"right\">".$this->headElements[$i]."</td>";
			}
			
			echo "</tr>";
			$i++;
		}

	}
	private function generateHorizontalTable()
	{
		echo "<thead><tr>";
		foreach ($this->headElements as $element)
		{
			echo "<th bgcolor=\"CCCCFF\">". $element . "</th>";
		}
		echo "</thead></tr>";

		//display the data
		$i = 1;
		while ($rows = mysql_fetch_array($this->queryResult,MYSQL_ASSOC))
		{
			// variable for coloring oddeven rows
			$oddeven = $i & 1;
			if ($oddeven == 0)
			{
				$color = "CCCFFF";
			}
			else
			{
				$color = "FFFFFF";
			}
			echo "<tr bgcolor=\"$color\">";
			foreach ($rows as $data){echo "<td align=\"right\">".$data ."</td>";}
			echo "</tr>";
			$i++;
		}
	}

}
?>