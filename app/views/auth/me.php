<?php /* shows current session info */ ?>
<div class="card">
  <div class="card-body">
    <h5>Logged In</h5>
    <pre><?php var_export($u ?? null); ?></pre>
  </div>
</div>
 
