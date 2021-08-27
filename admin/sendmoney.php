<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");


$query = "SELECT * FROM RequestMoney";
$res = mysqli_query($link, $query);
?> 
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Вывод денег</h1>
                        <p>
                                <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Дата</th>
                                            <th>Пользователь</th>
                                            <th>Сумма</th>
                                            <th>Статус</th>
                                            <th>Выплата</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($res)){

                                            $html = "";
                                            if($row['Status']=="Выплачено"){
                                                $html = "<td>Выплата сделана</td>";
                                            }
                                            else {
                                                $html = "<td><a href='money_hook.php?id=".$row['id']."'>Сделал выплату</a></td>";
                                            }

                                            echo "<tr>
                                                    <td>".$row['Date']."</td>
                                                    <td>".$row['Login']."</td>
                                                    <td>".$row['Money']."</td>
                                                    <td>".$row['Status']."</td>
                                                    ".$html."
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