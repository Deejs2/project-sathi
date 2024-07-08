<?php
    set_session('isAuthenticated', false);
    header('Location: /landing');
    exit();
?>