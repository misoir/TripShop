<?php 
    include('path_menu.php');
    include(DIR_MAIN.'header.php'); 
?>
                    
                        <div id="newsBoard">
                            <div class="headline">
                                <div  class="col-1-4 headlineImage">
                                    <div>
                                        <img class="absoluteCenter" src="http://4.bp.blogspot.com/_VZIxcvJd3x0/S-m_2n02WaI/AAAAAAAAAAk/JY_Gv6GLaZI/S1600-R/227045_p.jpg">
                                    </div>
                                </div>
                                <div  class="col-3-4 headlineDescr">
                                    <div>
                                    <h2 style="margin-bottom:0;">Szok! Kolejny artykuł!</h2>
                                    </div>
                                    <div class="dateAuthor" >
                                        <?php // echo date('d-m-Y'); ?> Michał Lipiński
                                        
                                    </div>
                                    <div>    
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>

<?php
    $articlesTab[0]=DIR_ARTICLES.'2013/08/PierwszyArtykul.xml';
    $articlesTab[1]=DIR_ARTICLES.'2013/08/drugiArtykul.xml';
    for($i=0; $i<2; $i++):
    
    $article = simplexml_load_file($articlesTab[$i]);
?>
                            <div class="headline">
                                <div  class="col-1-4 headlineImage">
                                    <img class="absoluteCenter" <?php echo "src=\"".$article->image."\""?>>
                                </div>
                                <div  class="col-3-4 headlineDescr">
                                    <div>
                                    <h2 style="margin-bottom:0;"><?php echo $article->title ?> </h2>
                                    </div>
                                    <div class="dateAuthor" >
                                        <?php 
                                            echo $article->date->day;
                                            echo "-";
                                            echo $article->date->month;
                                            echo "-";
                                            echo $article->date->year;
                                            echo $article->author;
                                        ?>
                                    </div>
                                    <div>
                                        <p>
                                            <?echo substr($article->content,0,strrpos(substr($article->content,0,400)," "))."..."; ?>
                                            <a href="#">czytaj dalej</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
<?php 
    endfor;
include(DIR_MAIN.'footer.php'); 
?>
<script>
    $(".headline > div").attr("style","float:left;");
</script>