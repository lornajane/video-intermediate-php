require "Article.php";

class HeadlineArticle extends Article {
    protected $excerpt;

    public function getExcerpt() {
        return $this->excerpt;
    }
}
