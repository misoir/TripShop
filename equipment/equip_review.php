<?php 
    include('path_equipment.php');
    include(DIR_MAIN.'header.php'); 
?>
<div class="center_80" id="equipReview">
    <div>
        <h3>
            <?php echo ucwords($_REQUEST['cat']); ?>
        </h3>
    </div>
    <div id="equipTable">
        <!--<table id="equipTable">-->
            <?php
                require_once DIR_DB_CONNECTION_PHP;
                $query = "SELECT e.id, e.name, e.image_url FROM equipment e INNER JOIN "; 
                if(isset($_REQUEST['cat']))
                {
//                    echo "wszedłem1";
                    $query .= "categories c ON e.category=c.id WHERE c.name=\"";
                    $query .= $_REQUEST['cat'];
                }
                elseif (isset($_REQUEST['prod']))
                {
//                    echo "wszedłem2";
                    $query .= "producers p ON e.producer=p.id WHERE p.name=\"";
                    $query .= $_REQUEST['prod'];
                }
                $query .= "\" ORDER BY e.name ASC;";
//                echo "<br>".$query;
                $answer = mysql_query($query);
//                $data = mysql_fetch_array($answer);
//                print_r($answer);
//                echo "<br>";
//                print_r($data);
                while($data = mysql_fetch_array($answer)):
                    $item = "<div class=\"inline_box\">";
                        $item .= "<div name=\"item_box\" class=\"radius_border\">";
                            $item .= "<div name=\"image\">";
                                    $item .= "<img src=\"" . DIR_IMG . $data['image_url'] . "\">";
                            $item .= "</div>";
                            $item .= "<div name=\"name\">";
                                $item .= "<a class =\"looks_like_no_link\"href=\"" . DIR_EQUIP_SHOW_PHP . "?id=" . $data['id'] . "\">" . $data['name'] . "</a>";
                            $item .= "</div>";
                        $item .= "</div>";
                    $item .= "</div>";
                    echo $item;
//                    if($i==0) echo "<tr>";
//                    $item = "<td align=\"center\">";
//                        $item .= "<div name=\"image\">";
//                                $item .= "<img src=\"" . DIR_IMG . $data['image_url'] . "\">";
//                        $item .= "</div>";
//                        $item .= "<div name=\"title\">";
//                            $item .= $data['name'];
//                        $item .= "</div>";
//                     $item .= "</td>";
//                     echo $item;
////                    echo "<td><img src=\"" . DIR_IMG . $data['image_url'] . "\"><br> ";
////                    echo $data['name'] . "</td>";
//                    if($i==2){
//                        echo "</tr>";
//                        $i = 0;
//                        $row = TRUE;
//                    }
//                    $i++;
                endwhile;
//                if(!isset($row)) echo "</tr>";
            ?>
        <!--</table>-->
    </div>
</div>
<script>//
//    $("div[name='item_box']").attr("style","min-heigth:230px;");
//</script>
<?php
    include(DIR_MAIN.'footer.php'); 
?>