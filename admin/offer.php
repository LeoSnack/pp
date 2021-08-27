<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");

$query = "SELECT * FROM Offers";
$res = mysqli_query($link, $query);

?>   
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Офферы</h1>
                        <h3 class="mt-4">Добавить оффер</h3>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                <div class="row">
                                    <form action="" method="POST" id="addOfferForm">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="addOfferName" aria-describedby="emailHelp" placeholder="Введите название">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="addOfferTarget" aria-describedby="emailHelp" placeholder="Введите цель">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="addOfferCoun" aria-describedby="emailHelp" placeholder="Введите страну">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="addOfferTag" aria-describedby="emailHelp" placeholder="Введите Tag">
                                      </div>
                                      <button type="submit" class="btn btn-primary" id="buttonAddOffer">Добавить</button>
                                    </form>
                                </div>
                            </br>
                        <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Оффер</th>
                                            <th>Цели</th>
                                            <th>Страна</th>
                                            <th>Теги</th>
                                            <th>Редактировать</th>
                                            <th>Удалить</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($res)){
                                            echo "<tr>
                                                    <td>".$row['id']."</td>
                                                    <td>".$row['Name']."</td>
                                                    <td>".$row['Target']."</td>
                                                    <td>".$row['Country']."</td>
                                                    <td>".$row['Tag']."</td>
                                                    <td><a href='offerEdit.php?id=".$row['id']."'>Редактировать</a></td>
                                                    <td><a href='offerDel.php?id=".$row['id']."'>Удалить</a></td>
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