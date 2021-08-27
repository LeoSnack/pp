<?php
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/function.php");

$id = getUrlQuery($_SERVER['REQUEST_URI'], 'id');

$query = "SELECT * FROM Offers WHERE id='$id'";
$res = mysqli_query($link, $query);

    $name = "";
    $target = "";
    $country = "";
    $tag = "";
while($row=mysqli_fetch_array($res)){
        $name = $row['Name'];
        $target = $row['Target'];
        $country = $row['Country'];
        $tag = $row['Tag'];
    }

if(!empty($_POST["editOfferName"]) && !empty($_POST["editOfferTarget"]) && !empty($_POST["editOfferCoun"]) && !empty($_POST["editOfferTag"])){
        
        $nameN = trim($_POST["editOfferName"]);
        $targetN = trim($_POST["editOfferTarget"]);
        $countryN = trim($_POST["editOfferCoun"]);
        $tagN = trim($_POST["editOfferTag"]);

            $query ="UPDATE Offers SET Name='$nameN', Target='$targetN', Country='$countryN', Tag='$tagN' WHERE id='$id'";
            $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            header("Refresh:0");
    }
    mysqli_close($link);

    require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
    require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
?>   
                <main>
                    <div class="container-fluid">
                        <a href="/admin/offer.php">Вернуться к офферам</a>
                        <h1 class="mt-4">Редактировать оффер</h1>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                <div class="row">
                                    <form action="" method="POST" id="editOfferForm" autocomplete="off" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='editOfferName' aria-describedby='emailHelp' placeholder='Введите название' value='".$name."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='editOfferTarget' placeholder='Введите цель' value='".$target."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='editOfferCoun' placeholder='Введите страну' value='".$country."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='editOfferTag' placeholder='Введите Tag' value='".$tag."'>";?>
                                      </div>
                                      <button type="submit" class="btn btn-primary" id="buttonEditOffer">Обновить
                                    </button>
                                    </form>
                                </div>
                            </br>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                