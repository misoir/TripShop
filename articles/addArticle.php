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
    
//    echo "<script src=\"".DIR_MAIN."js/jquery.validate.js\"></script>";   
//    echo "<script src=\"".DIR_MAIN."js/jquery-1.7.2.js\"></script>";
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

<script>
//    jQuery.validator.setDefaults({
////    debug: true,
////    success: "valid"
//});
        $(document).ready(function() {
		$("#addArticleForm").validate({
			rules: {
				title: {
					required: true,
					minlength: 3
				},
				image: {
                                        requires: false,
					url: true
				},
				content: {
					required: true
				}
			},
			messages: {
				title: {
					required: 'Pole wymagane',
					minlength: 'Wpisz tytuł'
				},
				image: {
					url: 'Wpisz poprawny adres URL'
				},
				content: {
					required: 'Pole wymagane'
				}
			}
		});
	});
</script>
<div class="center_80">
    <form method="post" id="addArticleForm" <?php echo "action=\"".DIR_TRANSACT_ARTICLE_PHP."\"";?>>
        <fieldset>
            <legend>Dodaj artykuł</legend>
            <div class="control-group">
                <label class="control-label" for="titleInput" >Tytuł<em>*</em></label>
                <input type="text" class="input-xlarge"  name="title" id="titleInput" placeholder="Podaj tytuł" style="width: 80%;" maxlength="45">
                <!--<input id="titleInput" name="name" size="25" class="required" minlength="2" />-->

            </div>
            <div class="control-group">
                <label class="control-label" for="imageInput">Obrazek</label>
                <input type="text" class="input-xlarge required" name="image" id="imageInput" placeholder="Podaj źródło obrazka" style="width: 80%;">
            </div>
            <div class="control-group">
                <label class="control-label" for="contentInput">Tekst<em>*</em></label>
                <textarea class="input-xlarge" name="content" rows="10" style="width: 80%;"></textarea>
            </div>
            <div class="control-group">  
                <button type="submit" class="btn btn-success" value="addArticle" name="action">Dodaj artykuł</button>  
		<!--<input class="submit" type="submit" value="Wyslij !" />-->
            </div>
        </fieldset>
    </form>
</div>
<?php include(DIR_MAIN.'footer.php'); ?>
