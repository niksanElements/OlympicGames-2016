<?php


class NewsController extends BaseController
{
    protected $commentModel;
    // Here we get the last 8 news and pass them in  $this->news
    // We get the users news title  too, and pass them in $this->userNews

    function __construct($controllerName, $actionName)
    {
        parent::__construct($controllerName, $actionName);
        $this->commentModel = new CommentsModel();
    }

    public function index()
    {
        $this->news = $this->model->getLastNews(8);
        $this->last10News = $this->model->getLastNews(10);
        if($this->isRedactor) {
            $user_id = intval($_SESSION['userID']);
            $this->userNews = $this->model->getUserNewsTitles($user_id);
        }
    }

    public function read(int $id)
    {
        $news = $this->model->getByID($id);
        if(!$news){
            $this->addErrorMessage("Can't find this page.");
            $this->redirect("news");
        }
        $this->news = $news;
        $this->comments = $this->commentModel->getNewsComments($id);
        if($this->isPost){
            $comment = $_POST['comment'];
            if(strlen($comment) == 0){
                $this->addErrorMessage("You must enter same comment!");
            }
            else{
                if($this->commentModel->addNewsComment($comment,$id,$_SESSION['userID'])){
                    $this->redirect("news", "read", array($id));
                }
            }
        }
    }

    public function create()
    {
        if($this->isRedactor) {
            if ($this->isPost) {
                $title = $_POST['title'];
                $body = $_POST['body'];

                if ($this->checkContent($title, $body) &&
                    $this->model->insert($title, $body, $_SESSION['userID'])
                ) {

                    $this->addInfoMessage('Successful creaate!');
                    $this->redirect("news");
                }
            }
        }
        else{
            $this->addErrorMessage("You must't be logged in as redacotr!!");
            $this->redirect("news");
        }
    }

    public function remove(int $id)
    {
        if($this->isRedactor || $this->isAdmin ) {
            $news = $this->model->getById($id);
            if ($this->isPost) {
                $title = $_POST['title'];
                if ($title === $news['title']) {
                    $this->commentModel->deleteNewsComments($id);   
                    if ($this->model->remove($id)) {
                        $this->addInfoMessage("Successful delete!!");
                        $this->redirect("news");
                    } else {
                        $this->addErrorMessage("Can't delete this publication.");

                        $this->redirect("news", "read", array($id));
                    }
                } else {
                    $this->addErrorMessage("Wrong title.");
                    $this->redirect("news", "read", array($id));
                }
            }
        }
        else{
            $this->addErrorMessage("You must't be logged in as redacotr!!");
            $this->redirect("news");
        }
    }

    public function edit(int $id)
    {
        if($this->isRedactor || $this->isAdmin) {
            $this->news = $this->model->getById($id);
            if ($this->isPost) {
                $title = $_POST['title'];
                $body = $_POST['body'];
                if ($this->checkContent($title, $body)
                    && $this->model->update($id, $title, $body)
                ) {

                    $this->addInfoMessage('Successful change!');
                    $this->redirect("news");
                }
            }
        }
        else{
            $this->addErrorMessage("You must't be logged in as redacotr!!");
            $this->redirect("news");
        }
    }

    private function checkContent($title,$body) : bool
    {
        $isCorect = 1;
        if(strlen($title) < 4){
            $this->addErrorMessage("Short title!");
            $isCorect = 0;
        }
        if(strlen($body) < 50){
            $this->addErrorMessage("Short content!");
            $isCorect = 0;
        }
        return $isCorect == 1;
    }
}