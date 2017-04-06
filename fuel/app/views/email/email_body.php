<div style="padding-top: 300px">
    <p>
        これは24時間後にリセットされます。
        <br><br>
        パスワードリセットをリクエストしていない場合は、このメールを無視するか、質問がある場合はサポート（<a href="<?php echo isset($contactlink) ? $contactlink : ''; ?>">こにちはへ</a>）にお問い合わせください。
        <br><br>
        上記のボタンに問題がある場合は、下のURLをコピーしてウェブブラウザに貼り付けてください。 
        <br><br>
        <?php echo isset($resetlink) ? '<a href="'.$resetlink.'">'.$resetlink.'</a>' : ''; ?>
    </p>
</div>
