<form method="POST" action="connexion.php">
                                <div class="form">
                                    <div class="form-group">
                                        <label for="mail">Adresse mail</label>
                                        <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" value="<?= isset($_POST['mail']) ? $_POST['mail'] : "" ?>">
                                        <div class="text-danger">
                                    <span><?= isset($errorMessage["mail"]) ? $errorMessage["mail"] : "" ?></span>
                                    </div>
                                    </div>
                                   




                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                        <div class="text-danger">
                                    <span><?= isset($errorMessage["password"]) ? $errorMessage["password"] : "" ?></span>
                                    </div>
                                    </div>
                                    <div>
                                    </div>
                                    
                                    <button type="submit" name="submitButton" class="btn btn-primary mt-3 mb-3">Envoyer</button>
                            </form>