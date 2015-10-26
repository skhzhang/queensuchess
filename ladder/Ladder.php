<?php

class Ladder {

  private $filename;
  private $rankings;
  private $updateTime;

  public function __construct($nameOfFile) {
    $this->rankings = array();

    $this->filename = $nameOfFile;
    $file = file_get_contents($this->filename); // add contents of name specified by $this->filename into $file

    
    $this->rankings = explode("\n", $file); // populate rankings from $file

	date_default_timezone_set('America/Toronto'); // set timezone to EST
    $this->updateTime = date ("j M Y g:i A T", filemtime($this->filename)); // update time to defaulted to last modified time of file

  }

  public function getRankings() {
  	return $this->rankings;
  }

  public function getUpdateTime() {
  	return $this->updateTime;
  }

  public function setUpdateTime($updateTimeString) {
  	$this->updateTime = $updateTimeString;
  }

  public function __toString() {

  	$returnValue = "";
  	$returnValue .= <<<EOT

  		<table>
        	<tr>
            	<th>Rank</th>
            	<th>Player</th>
        	</tr>

EOT;

  	for ($i = 0; $i < sizeof($this->getRankings()) ; $i++) {
  		$rankNumber = $i + 1;
  		$returnValue .= <<<EOT

  			<tr>
            	<td>{$rankNumber}</td>
            	<td>{$this->getRankings()[$i]}</td>
        	</tr>

EOT;

  	}

	$returnValue .= <<<EOT

			<tr>
            	<td colspan="2"><strong>Rankings as of:</strong> {$this->getUpdateTime()}</td>
        	</tr>
		</table>

EOT;

  	return $returnValue;
  }

}



?>