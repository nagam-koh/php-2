<?php
$kingaku = 5470;
$amari = $kingaku % 4;
$hitori = ($kingaku - $amari) / 4;
echo "1人{$hitori}円、不足{$amari}円";
