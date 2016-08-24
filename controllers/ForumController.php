<?php
class ForumController extends BaseController
{
    protected $commentsModel;

    function __construct($controllerName, $actionName)
    {
        parent::__construct($controllerName, $actionName);
        $this->commentsModel = new CommentsModel();
    }

    public function index()
    {
        $this->posts = $this->model->getLastPosts(4);
        
    }

    public function add()
    {
        if($this->isPost && $this->isLoggedIn){
            $title = $_POST['title'];
            $body = $_POST['body'];
            $post_id = $this->model->add($title,$body,$_SESSION['userID']);
            if($post_id != 0){
                $this->redirect("forum","read",array($post_id));
            }
            else{
                $this->addErrorMessage("Can't add post in comments.");
            }
        }
    }
    
    public function read(int $id)
    {
        $post = $this->model->getByID($id);
        if(!$post){
            $this->addErrorMessage("Can't find this page.");
            $this->redirect("post");
        }
        $this->post = $post;
        $this->comments = $this->commentsModel->getPostComments($id);
        if($this->isPost){
            $comment = $_POST['comment'];
            if(strlen($comment) == 0){
                $this->addErrorMessage("You must enter same comment!");
            }
            else{
                if($this->commentsModel->addPostComment($comment,$id,$_SESSION['userID'])){
                    $this->redirect("forum", "read", array($id));
                }
            }
        }
    }
}