<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- Свойство width определяет виртуальную ширину окна просмотра, значение device-width — физическую ширину устройства, 
    initial-scale управляет начальным уровнем масштабирования, initial-scale=1 означает, что 1 пиксель окна просмотра = 1 пиксель CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <!-- Если IE то включить скрипт для поддержки html5 тегов. -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belpromstandart</title>
  <link rel="icon" href="img/favicon.ico">

  <link rel="stylesheet" href="./css/vendor/header/libs.header.min.css">
  <link rel="stylesheet" href="./css/header/style.header.min.css">

  <script src="./js/vendor/header/libs.header.min.js"></script>
  <script src="./js/header/header.min.js"></script>
</head>

<body>

  <main>

  <section class="register-form">
    <div class="register-form__left-side">
      <h3 class="register-form__left-side-title">Sign&nbsp;up</h3>
    </div>
    
    <div class="register-form__right-side">
      <div class="register-form__wrap" id="formWrap">

        <i class="background"></i>

        <h1 class="register-form__right-side-title">New user?</h1>
        <h2 class="register-form__right-side-subtitle">Use the form below to create your account.</h2>

        <form action="./mail.php" method="GET" id="registrationForm" class="register-form__box">
          <!-- Start Hidden Fields -->
          <input type="hidden" name="form_subject" value="Запрос с сайта" autocomplete="off">
          <input type="hidden" name="project_name" value="" autocomplete="off">
          <input type="hidden" name="robot_email" value="robot@test.ru" autocomplete="off">
          <input type="hidden" name="manager_email" value="artem.kuznecov.samara@gmail.com" autocomplete="off">
          <input type="hidden" name="hidden_copy_emails" value="artemijeka@gmail.com" autocomplete="off">
          <input type="hidden" name="user_name_b" value="" autocomplete="off">
          <!-- END Hidden Fields -->
          <input type="email" name="user_email_b" value="" class="hidden" autocomplete="off">
          <input type="text" name="user_city_b" value="" class="p-a zi-999" style="border-color: transparent">
          <style>.hidden{display:none}.p-a{position:absolute}.zi-999{z-index:-999}</style>
          <!-- END check -->
          <input type="hidden" class="hidden" autocomplete="off" name="Request URI" value="<?=$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" />
          <!-- END service information -->

          <div class="register-form__box-item first-name">
            <label class="register-form__box-label" for="firstName">First Name</label>
            <br>
            <input class="register-form__box-input" type="text" name="First Name" id="firstName">
          </div>

          <div class="register-form__box-item last-name">
            <label class="register-form__box-label" for="lastName">Last Name</label>
            <br>
            <input class="register-form__box-input" type="text" name="Last Name" id="lastName">
          </div>  

          <div class="register-form__box-item nationality">
            <label class="register-form__box-label" for="nationality">Nationality</label>
            <br>
            <select class="register-form__box-input wide" id="nationality" name="Nationality">
              <option id="american">American</option>
              <option id="russian">Russian</option>
              <option id="china">Chinese</option>
              <option id="japan">Japanese</option>
            </select>
          </div>

          <div class="register-form__box-item email">
            <label class="register-form__box-label" for="email">E-mail</label>
            <br>
            <input class="register-form__box-input" type="email" name="Email" id="email"><i></i>
          </div>

          <div class="register-form__box-item birth-day">
            <label class="register-form__box-label" for="birthDay">Date of Birth</label>
            <br>
            <select class="register-form__box-input register-form__box-input-day" id="birthDay" name="Birth Day">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select>

            <select class="register-form__box-input register-form__box-input-month" id="birthMonth" name="Birth Month">
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select>

            <select class="register-form__box-input register-form__box-input-year" id="birthYear" name="Birth Year">
              <option>2020</option>
              <option>2019</option>
              <option>2018</option>
              <option>2017</option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
              <option>2013</option>
              <option>2012</option>
              <option>2011</option>
              <option>2010</option>
              <option>2009</option>
              <option>2008</option>
              <option>2007</option>
              <option>2006</option>
              <option>2005</option>
              <option>2004</option>
              <option>2003</option>
              <option>2002</option>
              <option>2001</option>
              <option>2000</option>
              <option>1999</option>
              <option>1998</option>
              <option>1997</option>
              <option>1996</option>
              <option>1995</option>
              <option>1994</option>
              <option>1993</option>
              <option>1992</option>
              <option>1991</option>
              <option>1990</option>
              <option>1989</option>
              <option>1988</option>
              <option>1987</option>
              <option>1986</option>
              <option>1985</option>
              <option>1984</option>
              <option>1983</option>
              <option>1982</option>
              <option>1981</option>
              <option>1980</option>
              <option>1979</option>
              <option>1978</option>
              <option>1977</option>
              <option>1976</option>
              <option>1975</option>
              <option>1974</option>
              <option>1973</option>
              <option>1972</option>
              <option>1971</option>
              <option>1970</option>
              <option>1969</option>
              <option>1968</option>
              <option>1967</option>
              <option>1966</option>
              <option>1965</option>
              <option>1964</option>
              <option>1963</option>
              <option>1962</option>
              <option>1961</option>
              <option>1960</option>
              <option>1959</option>
              <option>1958</option>
              <option>1957</option>
              <option>1956</option>
              <option>1955</option>
              <option>1954</option>
              <option>1953</option>
              <option>1952</option>
              <option>1951</option>
              <option>1950</option>
              <option>1949</option>
              <option>1948</option>
              <option>1947</option>
              <option>1946</option>
              <option>1945</option>
              <option>1944</option>
              <option>1943</option>
              <option>1942</option>
              <option>1941</option>
              <option>1940</option>
              <option>1939</option>
              <option>1938</option>
              <option>1937</option>
              <option>1936</option>
              <option>1935</option>
              <option>1934</option>
              <option>1933</option>
              <option>1932</option>
              <option>1931</option>
              <option>1930</option>
              <option>1929</option>
              <option>1928</option>
              <option>1927</option>
              <option>1926</option>
              <option>1925</option>
              <option>1924</option>
              <option>1923</option>
              <option>1922</option>
              <option>1921</option>
              <option>1920</option>
            </select>
          </div>

          <div class="register-form__box-item gender">
            <label class="register-form__box-label">Gender</label>
            <br>
            <label for="genderMale" class="register-form__box-input-title">
              <input checked="checked" class="register-form__box-input register-form__box-input-gender" type="radio" name="Gender" value="Male" id="genderMale">
              <span class="register-form__box-input checkmark"></span>
              Male
            </label>
            <label for="genderFemale" class="register-form__box-input-title">
              <input class="register-form__box-input register-form__box-input-gender" type="radio" name="Gender" value="Female" id="genderFemale">
              <span class="register-form__box-input checkmark"></span>
              Female
            </label>          
          </div>

          <div class="register-form__box-item password">
            <label class="register-form__box-label" for="password">Password</label>
            <br>
            <input class="register-form__box-input" type="password" name="password" id="password"><i></i>
          </div>

          <div class="register-form__box-item conf-password">
            <label class="register-form__box-label" for="confirmPassword">Confirm Password</label>
            <br>
            <input class="register-form__box-input" type="password" name="confirm_password" id="confirmPassword"><i></i>
          </div>

          <div class="register-form__box-item password-notice o-0 td-300" id="passwordNotice">
            Please enter a password of uppercase and lowercase letters and numbers, at least 8 characters.
          </div>

          <span class="register-form__login">Have an account? <a href="#" class="register-form__login-link">Login</a></span>

          <input type="submit" class="register-form__btn-complite" value="Complete Signup" name="submit">
        </form>

      </div><!-- /.register-form__wrap -->


      <div class="register-form__ok hidden" id="formSended">
        <h3 class="register-form__ok-title">Thank You!</h3>
        <h4 class="register-form__ok-subtitle">you registered!</h4>
      </div>
    </div><!-- /.register-form__right-side -->

  </section>

  </main>

  <!-- Если ниже чем IE9 то подгрузить скрипт для поддержки @media запросов. -->
  <!--[if lt IE 9]>
        <script src="https://cdn.jsdelivr.net/npm/css3-mediaqueries-js@1.0.0/css3-mediaqueries.js"></script>
    <![endif]-->
    
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

  <link rel="stylesheet" href="./css/vendor/footer/libs.footer.min.css">
  <link rel="stylesheet" href="./css/footer/style.footer.min.css">

  <script src="./js/vendor/footer/libs.footer.min.js"></script>
  <script src="./js/footer/footer.min.js"></script>

</body>

</html>