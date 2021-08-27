<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");

$query = "SELECT * FROM accOffer";
$res = mysqli_query($link, $query);

?>   
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Доступы к офферам</h3>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                <div class="row">
                                    <form action="" method="POST" id="accOffer">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="accOfferID" aria-describedby="emailHelp" placeholder="Введите ID оффера">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="accOfferEmail" aria-describedby="emailHelp" placeholder="Введите Email веба">
                                      </div>
                                      <button type="submit" class="btn btn-primary" id="buttonAccOffer">Добавить</button>
                                    </form>
                                </div>
                            </br>
                        <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Оффер айди</th>
                                            <th>Кому доступен</th>
                                            <th>Удалить</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($res)){
                                            echo "<tr>
                                                    <td>".$row['offerID']."</td>
                                                    <td>".$row['Email']."</td>
                                                    <td><a href='accOfferDel.php?id=".$row['id']."'>Удалить</a></td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                