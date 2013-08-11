<?php 
    include('path_equipment.php');
    include(DIR_MAIN.'header.php'); 
    
    require_once DIR_DB_CONNECTION_PHP;
    $query ='SELECT * FROM equipment WHERE id=' . $_REQUEST['id'];
    $answer = mysql_query($query);
    $data = mysql_fetch_array($answer)
    
?>
<style type="text/css">
    #item_desc
    {
        margin-top: 15px;
        height: 400px;
        display: table;
        /*float:left;*/
    }
    #image
    {
        /*width: 50%;*/
        display: table-cell;
        /*position: relative;*/
        float: left;
        height: 400px;
        line-height: 400px;
        text-align: center;
    }
    #image img
    {
        vertical-align: middle;
        max-width: 80%;
        max-height: 80%;
    }
    #description
    {
        /*vertical-align: text-top;*/
        /*width: 50%;*/
        display: table-cell;
        float: left;
    }
</style>
<div>
    <div class="center_80 radius_border" id="item_desc">
        <div class="col-1-2" id="image">
            <?php 
              echo  "<img src=\"" . DIR_IMG . $data['image_url'] . "\">";
            ?>
        </div>
        <div class="col-1-2" id="description">
            <div>
            <?php
              echo "<h3>".$data['name']."</h3>";
            ?>
            </div><div>
            <?php
              echo "<br>";
              echo $data['description'];
            ?>
            </div>
        </div>
    </div>
</div>

<?php
    include(DIR_MAIN.'footer.php'); 
?>