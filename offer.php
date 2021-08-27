<?php
require($_SERVER['DOCUMENT_ROOT']."/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/template/left-bar.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");

$query = "SELECT * FROM Offers INNER JOIN accOffer ON Offers.id=accOffer.offerID AND accOffer.Email='all'";
$allOffer = mysqli_query($link, $query);

$user = $_SESSION['user'];
$querymy = "SELECT * FROM Offers INNER JOIN accOffer ON Offers.id=accOffer.offerID AND accOffer.Email='$user'";
$myOffer = mysqli_query($link, $querymy);
?>  
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Офферы</h1>
                        <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Мои офферы</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Все офферы</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Оффер</th>
                                            <th>Цели</th>
                                            <th>Страна</th>
                                            <th>Теги</th>
                                            <th>Показатели</th>
                                            <th>Конверсии</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($myOffer)){

                                                echo "<tr>
                                                <td>".$row['Name']."</td>
                                                <td>".$row['Target']."</td>
                                                <td>".$row['Country']."</td>
                                                <td>".$row['Tag']."</td>
                                                <td>CR 0,00$<p>EPC 0,00$</p></td>
                                                <td>0</td>
                                                </tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table table-bordered" id="allOffer" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Оффер</th>
                                            <th>Цели</th>
                                            <th>Страна</th>
                                            <th>Теги</th>
                                            <th>Показатели</th>
                                            <th>Конверсии</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Оффер</th>
                                            <th>Цели</th>
                                            <th>Страна</th>
                                            <th>Теги</th>
                                            <th>Показатели</th>
                                            <th>Конверсии</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($allOffer)){

                                                echo "<tr>
                                                <td>".$row['Name']."</td>
                                                <td>".$row['Target']."</td>
                                                <td>".$row['Country']."</td>
                                                <td>".$row['Tag']."</td>
                                                <td>CR 0,00$<p>EPC 0,00$</p></td>
                                                <td>0</td>
                                                </tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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