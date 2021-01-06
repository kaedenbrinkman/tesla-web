<?php
include 'src/assets/client.php';
if ($_SERVER['request_method'] === "POST") {
    if (isset($_POST['psw']) && isset($_POST['email'])) {
        $_SESSION['access_token'] = $tesla->getAccessToken($_POST['email'], $_POST['psw']);
    }
    header('Location: /');
} else {
    include 'src/assets/head.php';
?>



    <form class="form-signin" method="post" action="/log-in.php">
        <img class="mb-4" src="https://tesla.com/favicon.ico" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="psw" class="form-control" placeholder="Password" required="">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">Privact</p>
    </form>



<?php
    include 'src/assets/foot.php';
}
?>