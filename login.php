<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
  html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  font-family: Helvetica, Arial, sans-serif;
  overflow: hidden;
}

.ghost {
  position: absolute;
  left: -100%;
}

.framed {
  position: absolute;
  top: 50%; left: 50%;
  width: 15rem;
  margin-left: -7.5rem;
}

.logo {
  margin-top: -9em;
  cursor: default;
}

.form {
  margin-top: -4.5em;
  transition: 1s ease-in-out;
}

.input {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
  font-size: 1.125rem;
  line-height: 3rem;
  width: 100%; height: 3rem;
  color: #444;
  background-color: rgba(255,255,255,.9);
  border: 0;
  border-top: 1px solid rgba(255,255,255,0.7);
  padding: 0 1rem;
  font-family: 'Open Sans', sans-serif;
}
  .input:focus {
    outline: none;
  }
  .input--top {
    border-radius: 0.5rem 0.5rem 0 0;
    border-top: 0;
  }
  .input--submit {
    background-color: rgba(92,168,214,0.9);
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    border-top: 0;
    border-radius: 0 0 0.5rem 0.5rem;
    margin-bottom: 1rem;
  }

.text {
  color: #fff;
  text-shadow: 0 1px 1px rgba(0,0,0,0.8);
  text-decoration: none;
}
  .text--small {
    opacity: 0.85;
    font-size: 0.75rem;
    cursor: pointer;
  }
    .text--small:hover {
      opacity: 1;
    }
  .text--omega {
    width: 200%;
    margin: 0 0 1rem -50%;
    font-size: 1.5rem;
    line-height: 1.125;
    font-weight: normal;
  }
  .text--centered {
    display: block;
    text-align: center;
  }
  .text--border-right {
    border-right: 1px solid rgba(255,255,255,0.5);
    margin-right: 0.75rem;
    padding-right: 0.75rem;
  }

.legal {
  position: absolute;
  bottom: 1.125rem; left: 1.125rem;
}

.photo-cred {
  position: absolute;
  right: 1.125rem; bottom: 1.125rem;
}

.fullscreen-bg {
  position: fixed;
  z-index: -1;
  top:0; right:0; bottom:0; left:0;
  background-size: cover;
}

#toggle--login:checked ~ .form--signup { left:200%; visibility:hidden; }
#toggle--signup:checked ~ .form--login { left:-100%; visibility:hidden; }

@media (height:300px){.legal,.photo-cred{display:none}}
  </style>
<body>
  <input type="radio" checked id="toggle--login" name="toggle" class="ghost" />
  <input type="radio" id="toggle--signup" name="toggle" class="ghost" />

  <form class="form form--login framed" method="post" action="log-in.php">
    <input type="email" name="login-email" placeholder="Email" class="input input--top" />
    <input type="password" name="login-password" placeholder="Password" class="input" />
    <input type="submit" value="Log in" class="input input--submit" />

    <label for="toggle--signup" class="text text--small text--centered">New? <b>Sign up</b></label>
  </form>
  <form class="form form--signup framed" method="post" action="sign-up.php">

    <input type="email" name="signup-email" placeholder="Email" class="input input--top" />
    <input type="password" name="signup-password" placeholder="Password" class="input" />
    <input type="text" name="signup-username" placeholder="Username" class="input" />
    <input type="submit" value="Sign up" class="input input--submit" />

    <label for="toggle--login" class="text text--small text--centered">Not new? <b>Log in</b></label>
  </form>
  <div class="legal">
    <a class="text text--small text--border-right" href="javascript:;">Terms</a>
    <a class="text text--small text--border-right" href="javascript:;">Privacy</a>
    <a class="text text--small" href="javascript:;">Password help</a>
  </div>

  <div class="photo-cred">
    <a class="text text--small" title="Check out their blog." href="http://cabinporn.com/post/125371354365/the-cabin-book-book-in-the-wild-21-in-the-us" target="_blank">Photo posted by <b>cabinporn</b></a>
  </div>

  <div class="fullscreen-bg"></div>
</body>
