<!DOCTYPE HTML>
<html lang="ru" class="h-100">
<?php
$data = [ 'title' => 'Qvinciy' ];
Core\Viewer::file('layouts/head.php', $data); ?>
<body class="d-flex flex-column h-100">

    <div class="container">
      <header class="blog-header py-3 ">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Главная</a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">QVINCIY</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-secondary" href="/user/login">Вход</a>
        </div>
    </div>
</header>
</div>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Рейтинг</th>
          <th scope="col">Номер</th>
          <th scope="col">Баланс</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Shimoron</td>
      <td>134 ₽</td>
  </tr>
</tbody>
</table>
</div>
</main>

<footer class="footer mt-auto py-3 ">
    <div class="container">
      <div class="row">
          <div class="col-6 col-md">
            <h5>Подробнее</h5>
            <ul class="list-unstyled text-small">
              <li>QVINCIY - это рейтинг людей по всему миру, зависящий от цены купленного места. В свою очередь, место - это показатель того, насколько Вы признаны в рейтинге за счет своих денежных средств среди остальных участников.</li>
          </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Договор публичной оферты</h5>
        <ul class="list-unstyled text-small">
          <li>Настоящий договор между владельцем сайта в сети интернет ФИО и пользователем услуг сайта в сети интернет, именуемым в дальнейшем "Покупатель" определяет условия приобретения услуг через сайт Настоящий договор - оферта действует с ____</li>
      </ul>
  </div>
  <div class="col-6 col-md">
    <h5>Пользовательское соглашение</h5>
    <ul class="list-unstyled text-small">
      <li>Настоящее Пользовательское соглашение регулирует отношение между пользователем сети Интернет (далее - Пользователь) и владельцем сайта в сети интернет, возникающие при ипользовании интернет-ресурса на условиях, указанных в Пользовательском соглашении</li>
  </ul>
</div>
</div>
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>