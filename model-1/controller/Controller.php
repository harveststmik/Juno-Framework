<?php
	class Controller {

		private $__viewPath;
		private $__layout;

		public function __construct() {
			$this->__layout = 'main';
			$this->__viewPath = __DIR__.'/../view';
		}

		public function render($data) {
			if(is_array($data)) {

			}
			else {
				$viewFile = $data.'.php';
			}
			$layout = $this->__viewPath.'/layout/'.$this->__layout.'.php';
			$controller = strtolower(str_replace('Controller','',get_class($this)));
			$view = $this->__viewPath.'/'.$controller.'/'.$viewFile;

			ob_start();
			include($view);
			$content = ob_get_contents();
			ob_clean();
			include($layout);
			$out = ob_get_clean();
			echo $out;
		}

		public function layout($layout) {
			$this->__layout = $layout;
		}
	}