<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
?>   
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Пользователи</h1>
                        <div class="row">
                        <div class="alert alert-danger" role="alert" id="errorAddUser" style="display: none;">
                        </div>
                        <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                        </div>
                        </div>
                        <div class="row">
                        <form action="" method="POST" id="addUserForm">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Введите Email юзера</label>
                            <input type="email" class="form-control" name="addUserEmail" aria-describedby="emailHelp" placeholder="Введите Email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Введите пароль юзера</label>
                            <input type="password" class="form-control" name="addUserPass" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-primary" id="buttonAddUser">Добавить</button>
                        </form>
                        </div>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                