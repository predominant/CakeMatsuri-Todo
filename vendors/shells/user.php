<?php
class UserShell extends Shell {
	public $uses = array('User');
	
	public function main() {
		
	}
	
	public function import() {
		$file = $this->args[0];
		App::import('Core', array('File', 'Security'));
		$file = new File($file);
		if (!$file->exists()) {
			$this->out('Error: File does not exist: ' . $file->name);
			return;
		}
		
		$row = 1;
		$handle = fopen($file->path, 'r');
		while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
		    $num = count($data);
			if ($num != 4) {
				continue;
			}
//		    echo "<p> $num fields in line $row: <br /></p>\n";
		    $row++;
		
			$this->User->create(array(
				'username' => $data[1],
				'password' => Security::hash($data[2]),
				'email' => $data[3]));
			if ($this->User->save()) {
				$this->out('Saved: ' . $data[1]);
			} else {
				$this->out('Error: Failed saving: ' . $data[1]);
			}
		}
		fclose($handle);
	}
}
?>