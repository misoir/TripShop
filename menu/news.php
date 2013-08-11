<?php 
    include('path_menu.php');
    require DIR_DB_CONNECTION_PHP;
    require_once DIR_VIEW_PHP;
    include(DIR_MAIN.'header.php'); 
?>
                    
                        <div id="newsBoard">
                            <div class="col-3-4" id="horizontalHeadlinesBoard">
                            <?php
                            //    db_connect();
                                $query = 'SELECT url FROM articles ORDER BY date DESC';
                                $answer = mysql_query($query);
                                for($i=0; $i<3; $i++):

                                $data = mysql_fetch_array($answer);
                            //    $article = simplexml_load_file($articlesTab[$i]);
                                $article = simplexml_load_file(DIR_ARTICLES.$data[url]);

                                $date = '';
                                $date .= $article->date->day;
                                $date .= "-";
                                $date .= $article->date->month;
                                $date .= "-";
                                $date .= $article->date->year;
                                horizontal_headline($article->image, $article->title, $date, $article->author, $article->content, $article->url);
                                endfor;
                            ?>
                            </div>
                            <div class="col-1-4" id="verticalHeadlinesBoard">
                            <?php
                                $query1 = 'SELECT `name`, `description`, `image_url`, `id` FROM `tripboard`.`equipment` ORDER BY date DESC';
                                $answer1 = mysql_query($query1);
                                for($i=0; $i<3; $i++):
                                    $data1 = mysql_fetch_array($answer1);
                                    vertical_headline($data1['image_url'],$data1['name'],$data1['description'],$data1['id']);
                                endfor;
                            ?>
                            </div>
                        </div>
    <?php
        include(DIR_MAIN.'footer.php'); 
    ?>
<script>
    $(".headline > div").attr("style","float:left;");
</script>