<?php
// sessionをスタートしてidを再生成しよう．
// 旧idと新idを表示しよう．
session_start();                           // セッション開始
$old_session_id = session_id();            // idの取得
session_regenerate_id(true);               // id新生成＆旧idを破棄
$new_session_id = session_id();            // 新idの取得
echo '<p>旧id' . $old_session_id . '</p>'; // idの確認
echo '<p>新id' . $new_session_id . '</p>';
?>