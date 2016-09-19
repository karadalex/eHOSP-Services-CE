<?php

function qrphone($phoneNum) {
    $_png = QrCode::format('png')
                    ->size(256)
                    ->margin(0)
                    ->backgroundColor(235,235,235)
                    ->merge('/public/img/LOGO_big.png')
                    ->phoneNumber($phoneNum);
    $_png = base64_encode($_png);
    return $_png;
}
