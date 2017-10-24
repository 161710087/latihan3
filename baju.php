<?php
class baju
{
	public $kemeja;
	public $kaosp;
	public $kaospe;
	public $switer;
	function __construct ($kemeja, $kaosp, $kaospe, $switer)
	{
		$this->kemeja = $kemeja;
		$this->kaosp = $kaosp;
		$this->kaospe = $kaospe;
		$this->switer = $switer;
		
	}
	public function get_kemeja()
	{
	return $this->kemeja;
	}
	public function get_kaosp()
	{
	return $this->kaosp;
	}
	public function get_kaospe()
	{
	return $this->kaospe;
	}
	public function get_switer()
	{
	return $this->switer;
	}

}
?>
