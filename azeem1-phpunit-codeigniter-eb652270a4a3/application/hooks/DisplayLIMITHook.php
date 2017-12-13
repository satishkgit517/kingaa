<?php

/**
 * This is used to do the unit tests when the environemnt is testing 
 * 
 * @author  Azeem <jazeem.lk@gmail.com>
 */

class DisplayLimitHook {
	public function captureOutput() {
		$this->CI =& get_instance();
		$output = $this->CI->output->get_output();
		if (ENVIRONMENT != 'testing') {
			echo $output;
		}
	}
}