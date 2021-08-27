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

                                    <div class="offers">
        <div class="offer">
            <div class="offer__wrapper">
                <div class="offer__conversion">
                    <h2>Конверсии</h2>
                    <form>
                        <div class="offer__flex">
                            <div class="offer__search offer__date">2021-04-02 → 2021-04-08</div>
                            <input type="text" class="offer__search offer__id" placeholder="Поиск по ID">
                            <input type="text" class="offer__search offer__user" placeholder="Поиск по Юзеру">
                        </div>
                        <div class="offer__selects">
                            <select name="offer" id="select_offer" class="offer__select">
                                <option value="none" hidden>Выберите оффер</option>
                                <option value="offer1">Оффер 1</option>
                                <option value="offer2">Оффер 2</option>
                                <option value="offer3">Оффер 3</option>
                            </select>
                            <select name="type" id="offer_type" class="offer__select">
                                <option value="none" hidden>Выберите тип</option>
                                <option value="type1">Тип трафика 1</option>
                                <option value="type2">Тип трафика 2</option>
                                <option value="type3">Тип трафика 3</option>
                            </select>
                            <select name="sort" id="offer_sort" class="offer__select">
                                <option value="none" hidden>Сортировка</option>
                                <option value="sort1">По возрастанию денег</option>
                                <option value="sort2">По убыванию денег</option>
                                <option value="sort3">По номеру ID (1-N)</option>
                            </select>
                        </div>
                        <div class="offer__line"></div>
                        <input type="submit" class="offer__button" value="ОБНОВИТЬ">
                    </form>
                </div>
                
            </div>
        </div>
        <div class="offerItems">
            <div class="offerItems__item">
                <div class="user">
                    <div class="user__num">1</div>
                    <div class="user__photo"><img src="../img/user.png"></div>
                    <div class="user__info">
                        <div class="user__name"><span>User: </span>Sneg</div>
                        <div class="user__id"><span>ID:</span>(#1381)</div>
                    </div>
                </div>
                <div class="offerItems__money money">
                    <div class="money__sale">
                        <div class="money__img"><img src="../img/bags.png" alt=""></div>
                        <div class="money__title">Продажи за сегодня</div>
                        <div class="money__sum">198</div>
                    </div>
                    <div class="money__earn">
                        <div class="money__img"><img src="../img/coins.png" alt=""></div>
                        <div class="money__title">Заработано за сегодня</div>
                        <div class="money__sum">71120 ₽</div>
                    </div>
                </div>
            </div>
            <div class="offerItems__item">
                <div class="user">
                    <div class="user__num">2</div>
                    <div class="user__photo"><img src="../img/user.png"></div>
                    <div class="user__info">
                        <div class="user__name"><span>User: </span>*************</div>
                        <div class="user__id"><span>ID:</span>(#***)</div>
                    </div>
                </div>
                <div class="offerItems__money money">
                    <div class="money__sale">
                        <div class="money__img"><img src="../img/bags.png" alt=""></div>
                        <div class="money__title">Продажи за сегодня</div>
                        <div class="money__sum">***</div>
                    </div>
                    <div class="money__earn">
                        <div class="money__img"><img src="../img/coins.png" alt=""></div>
                        <div class="money__title">Заработано за сегодня</div>
                        <div class="money__sum">***** ₽</div>
                    </div>
                </div>
            </div>
            <div class="offerItems__item">
                <div class="user">
                    <div class="user__num">3</div>
                    <div class="user__photo"><img src="../img/user.png"></div>
                    <div class="user__info">
                        <div class="user__name"><span>User: </span>*************</div>
                        <div class="user__id"><span>ID:</span>(#***)</div>
                    </div>
                </div>
                <div class="offerItems__money money">
                    <div class="money__sale">
                        <div class="money__img"><img src="../img/bags.png" alt=""></div>
                        <div class="money__title">Продажи за сегодня</div>
                        <div class="money__sum">***</div>
                    </div>
                    <div class="money__earn">
                        <div class="money__img"><img src="../img/coins.png" alt=""></div>
                        <div class="money__title">Заработано за сегодня</div>
                        <div class="money__sum">***** ₽</div>
                    </div>
                </div>
            </div>
            <div class="offerItems__item">
                <div class="user">
                    <div class="user__num">4</div>
                    <div class="user__photo"><img src="../img/user.png"></div>
                    <div class="user__info">
                        <div class="user__name"><span>User: </span>*************</div>
                        <div class="user__id"><span>ID:</span>(#***)</div>
                    </div>
                </div>
                <div class="offerItems__money money">
                    <div class="money__sale">
                        <div class="money__img"><img src="../img/bags.png" alt=""></div>
                        <div class="money__title">Продажи за сегодня</div>
                        <div class="money__sum">***</div>
                    </div>
                    <div class="money__earn">
                        <div class="money__img"><img src="../img/coins.png" alt=""></div>
                        <div class="money__title">Заработано за сегодня</div>
                        <div class="money__sum">***** ₽</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            </br>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                