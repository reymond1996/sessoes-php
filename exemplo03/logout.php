<?php
session_start();

/* session_unset() - destroi uma derteminado sessao*/
/* session_destroy() - destroi todas as sessoes*/

session_destroy();
header("location:index.php");
