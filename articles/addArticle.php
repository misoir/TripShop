<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');

    
    include('path_articles.php');
//    include('paths.php');
    include(DIR_MAIN.'header.php');
    require_once DIR_MAIN.'tools/http.php';
    if(!isset($_SESSION['logged']) ||  $_SESSION['logged']==0)
    {
        redirect(DIR_MAIN.'index.php');
    }
?>
<div class="center_80">
    <form method="post" <?php echo "action=\"".DIR_TRANSACT_ARTICLE_PHP."\"";?>>
        <fieldset>
            <legend>Dodaj artykuł</legend>
            <div class="control-group">
                <label class="control-label" for="titleInput" >Tytuł</label>
                <input type="text" class="input-xlarge" name="title" id="titleInput" placeholder="Podaj tytuł" style="width: 80%;" maxlength="45">
            </div>
            <div class="control-group">
                <label class="control-label" for="imageInput">Obrazek</label>
                <input type="text" class="input-xlarge" name="image" id="imageInput" placeholder="Podaj źródło obrazka" style="width: 80%;">
            </div>
            <div class="control-group">
                <label class="control-label" for="contentInput">Tekst</label>
                <!--<input type="text" class="form-control" id="contentImput">--> 
                <textarea class="input-xlarge" name="content" rows="10" style="width: 80%;"></textarea>
            </div>
            <div class="control-group">  
                <button type="submit" class="btn btn-success" value="addArticle" name="action">Dodaj artykuł</button>  
                <!--<button class="btn">Cancel</button>-->  
            </div>
        </fieldset>
    </form>
</div>
<?php include(DIR_MAIN.'footer.php'); ?>
