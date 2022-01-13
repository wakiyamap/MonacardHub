<?php

class config {

    // 管理者の名前
    public static $ADMINISTRATOR_NAME = "Anonymous";

    // 外部APIと通信する時のSSL設定
    // 基本的にはtrueにして、テスト環境などでエラーが出るときだけ一時的にfalseにしてください。
    public static $SETTING_CURLOPT_SSL_VERIFYPEER = false;

    // counterparty apiのURL。APIノードが落ちているときは変更してください。
    public static $COUNTERPARTY_API_URL = "https://monapa.electrum-mona.org/_api";
    //public static $COUNTERPARTY_API_URL = "https://mpchain.info/api/cb";
    //public static $COUNTERPARTY_API_URL = "https://wallet.monaparty.me/_api";

}