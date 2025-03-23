<?php include('layouts/header.php'); ?>

<div class="container mt-5 text-center">
    <h1 style="color: #FFD700;">Qual é o seu signo?</h1>

    <form id="signo-form" method="POST" action="show_zodiac_sign.php"
style="background-color: #333333; padding: 20px; border-radius: 10px;">
        <div class="mb-3">
            <label for="data_nascimento" class="form-label" style="color: #E0E0E0;">Informe sua data de nascimento</label> 
        <br>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required style="background-color: #222222; color: #FFFFFF; border: none; border-radius: 5px;">
        </div>
        <div class="text-center">
             <button type="submit" class="btn" style="background-color: #0056B3; color: #FFFFFF; border-radius: 25px;">Ver meu signo</button>
        </div>
    </form>
</div>

<?php include('layouts/footer.php'); ?>