<?php

session_start();
session_destroy();

header('location: ../index0.html?logout=success');