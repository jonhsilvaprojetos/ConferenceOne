        <div class="form-edita-reg">
        <h3>Meu Perfil</h3>
        <form action="../valida_update_reg.php" method="POST" enctype="multipart/form-data">

            <label for="nome">Nome completo</label>
            <input class="form-control form-control-lg" type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $_SESSION['user_nome'] ?>"/><br />
            
            <label for="nome">E-mail</label>
            <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="E-mail" value="<?php echo $_SESSION['user_email'] ?>"/><br />

            <label for="nome">Senha</label>
            <input class="form-control form-control-lg" type="password" name="senha" id="senha" placeholder="Senha" require/><br />
            
            <label for="">Foto avatar</label>
            <div class="input-group file-avatar">    
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Selecione... <input type="file" name="avatar" id="avatar" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" placeholder="Tam Max. 2MB" readonly>
            </div><br /><!-- final input group -->
            <?php
            if(isset($_SESSION['msg-sucesso-edit'])){
                echo $_SESSION['msg-sucesso-edit'];
                unset($_SESSION['msg-sucesso-edit']);
            }
            ?>
            <button class="btn btn-success btn-lg btn-salva-dados" type="submit">Salvar <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
             </button>
        </form>
        </div>
        


