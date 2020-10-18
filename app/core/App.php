 <?php 


class App {
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function	__construct()
	{
		$url = $this->parseURL();
		// kelola controller
		if(file_exists('../app/controllers/'. ucfirst($url[0]) .'.php')) {
			// jika ada, timpa controller defaultnya ditimpa dengan url yg baru
			$this->controller = ucfirst($url[0]);
			unset($url[0]);
		}
		
		// jika controller yang diminta tidak ada, gunakan controller default
		require_once '../app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

		// kelola method
		if (isset($url[1])) {
			if(method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// kelola parameter
		if(!empty($url)) {
			$this->params = array_values($url);
		}

		// jalankan controllaer dan method serta kirimkan params jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);
		
	}

	public function parseURL()
	// untuk memecah url dan merapikannya
	{
		if(isset($_GET['url'])) {
			$url = rtrim($_GET['url'],'/');					// hilangkan '/' terakhir
			$url = filter_var($url, FILTER_SANITIZE_URL); 	//bersihkan url dari url yang berbahaya
			$url = explode('/', $url);
			return $url;	
		}
	}



}