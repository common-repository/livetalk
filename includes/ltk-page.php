<div class="wrap">
  <h1>LiveTalk Chatbot</h1>
  <p>
    Para ativar seu chatbot, acesse o <a href="https://app.livetalk.ai" target="_blank">painel LiveTalk</a>.<br /> Preencha o campo abaixo com seu token de integração, que pode ser encontrado no menu "Configurações / Integrações / Wordpress".
  </p>

  <form method="post" action="options.php">
    <?php
      settings_fields( 'ltk-group' );
    ?>
  
    <table class="form-table" style="width: 300px">
      <tr>
        <th scope="row">
          <label for="token">Token</label>
        </th>
        <th>
          <input class="regular-text code" type="text" name="ltk_token" value="<?php echo esc_attr( get_option('ltk_token') ); ?>" />
        </th>
      </tr>
    </table>
    <?php submit_button(); ?>
  </form>
</div>