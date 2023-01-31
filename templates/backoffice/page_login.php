

<div class="white-box author-white-box">
    <div class="padding-35 desktop-padding-90">
        <h2 class=" menu-selected">Área reservada</h2>
    </div>
</div>
<div class="padding-35 desktop-padding-90 desktop-margin-90 d-flex flex-column align-items-center">
        <form class="form login" method="POST" action="<?php echo url_generate(['route' => 'authenticate']); ?>">
            <h3 class="leter-type-t1">Login</h3>
            <div class="section">
                <label class="label-font-style" for="username">Utilizador</label> </br>
                <input class="input-width-50" type="text" name="username"  id="username">
            </div>
            <div class="section">
                <label class="label-font-style" for="password">Senha</label></br>
                <input class="input-width-50" type="password" name="password"  id="password">
            </div>
            <div class="section  d-flex flex-column align-items-center">
                <button class="cor-laranja pagination-font-style" type="submit">Guardar</button>
            </div>
        </form>