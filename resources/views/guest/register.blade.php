<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUKA | Inscription</title>
    @vite(['resources/css/app.css', 'resources/css/auth.css'])
</head>

<body>
    <div class="container">
        <section class="container-form">
            <h1>Inscription</h1>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf

                <div class="input-group">
                    <label for="name">Nom</label>
                    <input type="text" name="name" class="input-item">
                </div>

                <div class="input-group">
                    <label for="firstname">Prenom</label>
                    <input type="text" name="firstname" class="input-item">
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="input-item">
                </div>

                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" class="input-item">
                </div>

                <div class="input-group">
                    <label for="confirm-password">Confirmation de mot de passe</label>
                    <input type="password" name="confirm_password" class="input-item">
                </div>

                <div class="container-footer">
                    <button type="submit" class="btn-primary" style="width: 100%;">S'inscrire</button>
                    <p class="txt-small" style="text-align: center;">
                        Vous avez deja un compte?
                        <span>
                            <a href="{{ route('login') }}" style="color: var(--primary);">
                                Se Connecter
                            </a>
                        </span>
                    </p>
                    <div class="container-fieldset">
                        <fieldset>
                            <legend>ou</legend>
                        </fieldset>
                    </div>

                    <div class="container-btn">
                        <a href="#" class="btn-bordered" style="width: 45%;text-align: center; color: var(--dark);text-decoration: none;">Google</a>
                        <a href="#" class="btn-bordered" style="width: 45%;text-align: center; color: var(--dark);text-decoration: none;">Facebook</a>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>

</html>