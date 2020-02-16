<body>
    <ul class="breadcrumb">
      <li class="active">Dashboard</li>
    </ul>

  <?php $date = date("z"); ?>

  <div class="btn-toolbar">
      <form action="<?= base_url() ?>Ponto/entry">
        <button name="entry" class="btn btn-mini">Chegada Empresa</button>
      </form>

      <form action="<?= base_url() ?>Ponto/elunch">
        <button name="elunch" class="btn btn-mini">Saída Almoço</button>
        <input type="text" value="<?= $date ?>" hidden>
      </form>

      <form action="<?= base_url() ?>Ponto/rlunch">
        <button name="rlunch" class="btn btn-mini">Retorno Almoço</button>
        <input type="text" value="<?= $date ?>" hidden >
      </form>

      
      <form action="<?= base_url() ?>Ponto/exit_comp">
        <button class="btn btn-mini">Saída Empresa</button>
        <input type="text" value="<?= $date ?>" hidden >
      </form>
      
  </div>

  <div class="btn-toolbar">
    <form action="<?= base_url() ?>Ponto/index">
        <button class="btn btn-primary">Lançamento Manual</button>
    </form>
  </div>

  <div class="well">
      <table class="table">
        <thead>
          <tr>
            <th style="text-align:center;" >Data de Lançamento</th>
            <th style="text-align:center;" >Entrada na Empresa</th>
            <th style="text-align:center;" >Saída para Almoço</th>
            <th style="text-align:center;" >Volta do Almoço</th>
            <th style="text-align:center;" >Saída da Empresa</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          // echo '<pre>';
          // var_dump($users);
          // var_dump($_SESSION['logged_user']);
          // echo '</pre>';
          foreach ($users as $user) {
            echo '<tr>';
            echo '<td style="text-align:center;" >'.$user['data_cad'].'</td>';
            echo '<td style="text-align:center;" >'.$user['hr_chegada_emp'].'</td>';
            echo '<td style="text-align:center;" >'.$user['hr_saida_alm'].'</td>';
            echo '<td style="text-align:center;" >'.$user['hr_volta_alm'].'</td>';
            echo '<td style="text-align:center;" >'.$user['hr_saida_emp'].'</td>';
            echo '</tr>';
          }
          ?>
          
        </tbody>
      </table>
  </div>
</body>