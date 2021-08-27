<?php
require($_SERVER['DOCUMENT_ROOT']."/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/template/left-bar.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");


$user = $_SESSION['user'];
$query = "SELECT * FROM RequestMoney WHERE Login='$user'";
$res = mysqli_query($link, $query);
?>  
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Вывод денег</h1>
                        <div class="alert alert-success" id="successReqMoney" role="alert" style="display: none;"></div>
                        <div class="alert alert-danger" role="alert" id="errorReqMoney" style="display: none;">
                        </div>
                        <form action="" method="POST" id="getMoneyForm">
                            <input type="hidden" name="getMoneyUser" value="test">
                            <?php echo "<input type='hidden' name='getMoneyUserID' value='".$_SESSION['user']."'>";?>
                            <button type="button" class="btn btn-success" id="getMoneyUser">
                        </form>
                        Сделать запрос</button>
                        <p>
                                <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Дата</th>
                                            <th>Сумма</th>
                                            <th>Статус</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($res)){
                                            echo "<tr>
                                                    <td>".$row['Date']."</td>
                                                    <td>".$row['Money']."</td>
                                                    <td>".$row['Status']."</td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                </p>
                    </div>
                </main>
<style>
tfoot {
     display: table-header-group;
}
</style>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                