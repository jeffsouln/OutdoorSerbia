<?php
class Controller {
	public $layout = "layout";
	public $category;
	public $type;
	public function loadView($view,$data1=array(),$data2=array()){
		$this->data1 = $data1;
		if ($this->layout) {
			ob_start();
			$this->category = category::getAll();
			$this->type = isset($_GET['type'])?$_GET['type']:'main';
			include APP_DIR."view/".$this->layout.".php";
			$page = ob_get_clean();
		}
		ob_start();
		include APP_DIR."view/".$view.".php";
		$page_content = ob_get_clean();
		$page = str_replace("[MAIN_CONTENT]", $page_content, $page);
		echo $page;
	}
	public function main(){
		$this->type = isset($_GET['type'])?$_GET['type']:'main';
		if (isset($_GET['cat'])) {
			$all_news = News::getAllByCat($_GET['cat']);
			$blogs = Blog::getAllByCat($_GET['cat']);
		} else {
			$all_news = News::getAllNew();
			$blogs = Blog::getAllFavoriteNew();
		}
		$this->loadView($this->type,$all_news,$blogs);
	}
	public function article(){
		$article = $_GET['article'];
		$type = $_GET['type'];
		switch ($type) {
			case 'main':
				$news = News::getArticleByID($article);
				$all_news = News::getAllByCat($_GET['cat']);
				$this->loadView("articleNews",$news,$all_news);
				break;
			case 'blog':
				$blog = Blog::getArticleByID($article);
				$user = UserLogin::getByID($blog->user);
				$this->loadView("articleBlog",$blog,$user);
				break;
		}
	}
	public function register(){
		$all_news = News::getAllNew();
		$this->loadView('register');
	}

	public function login(){
		$all_news = News::getAllNew();
		$this->loadView('login',$all_news);
	}
	public function personal(){
		$all_news = News::getAllNew();
		if (isset($_SESSION['user'])&&isset($_SESSION['status'])){
			$status = $_SESSION['status'];
		} else {
			print_r($_SESSION);
			die("Nemate autorizaciju za pristup strani");
		}
		switch ($status) {
			case '1':
				$personalPage = "writeNews";
				break;
			case '2':
				$personalPage = "writeBlog";
			break;
			case '5':
				$personalPage = "admin";
			break;			
		}
		$this->loadView($personalPage,$all_news);
	}
	public function test(){
		$this->loadView('test');
	}	
}