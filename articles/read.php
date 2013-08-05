<?php
    include('path_articles.php');
//    include('paths.php');
    include(DIR_MAIN.'header.php'); 
?>
                    
                        <div class="" id="readArticle">
                            <?php 
                            $article_url = $_REQUEST['url']; 
                            $article = simplexml_load_file($article_url);
//                            echo $article->content;
                            ?>
                            <div id="article_title">
                                <h6 align="right">
                                    <?php 
                                        echo $article->date->day;
                                        echo "-";
                                        echo $article->date->month;
                                        echo "-";
                                        echo $article->date->year;
                                        echo $article->author;
                                    ?>
                                </h6>
                                <h1>
                                    <?php echo $article->title; ?>
                                </h1>
                            </div>
                            <div id="article_content">
                                <img <?php echo "src=\"" . $article->image . "\"" ?>  width="300" height="300" alt="obrazek" align="left">
                                <?php 
                                    echo $article->content;
                                ?>
                            </div>
                        </div>

<?php include(DIR_MAIN.'footer.php'); ?>

<script>
    $('#article_content p').attr("style","text-indent: 10%;");
</script>