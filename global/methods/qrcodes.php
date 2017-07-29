<?php

function qrphone($phoneNum) {
    $_png = QrCode::format('png')
                    ->size(256)
                    ->margin(0)
                    ->backgroundColor(235,235,235)
                    ->merge('/public/img/256x256.png')
                    ->phoneNumber($phoneNum);
    $_png = base64_encode($_png);
    return $_png;
}
