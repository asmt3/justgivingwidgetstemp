<?php 

App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class ImportantCssController extends AppController {

	function process($name) {

		$dir = new Folder(CSS . 'widgets/');
		$files = $dir->find($name . '.css');

		if (count($files)) {

			$file = new File($dir->pwd() . DS . $files[0]);

			$content = $file->read();

			// add !important to every rule
			$contentButImportant = str_replace(';', ' !important;', $content);

		} else {
			throw new NotFoundException('This CSS file does not exist');
		}

		$this->layout = false;
		$this->set(compact('contentButImportant'));

	}

}

?>