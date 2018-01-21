<?php 
  global $templates, $db, $auth;
  # Preassign data to the layout
  $templates->addData(['company' => 'Име на компанията'], 'layout');

  # Logout
  if(isset($_GET['logout']) && $auth->isLogged()){
    $auth->logout($auth->getSessionHash());
    setcookie('authID', null, -1, '/');
    header('Location: /');
  }
  
  $name = "";
  
  if(isset($_POST['username']) && isset($_POST['password'])){
    $email = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $remember = 1;
    $login = $auth->login($email, $password, $remember);

    if (!$login['error']) {
        setcookie('authID', $login["hash"], $login["expire"], '/');
        # Redirect to refresh the session
        header('Location: /');
    }else{
      $name .= "Wrong credentials!";
    }

  }
  
  
  if($auth->isLogged()){
    $name .= '<a href="?logout">logout</a>';
  }else{
    $name .= "Please login!";
  }
  
  

echo $templates->render('profile', ['name' => $name]);


 ?>
