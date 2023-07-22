<?php
// PukiWiki - Yet another WikiWikiWeb clone.
// zh-tw.lng.php
// Copyright
//   2002-2022 PukiWiki Development Team
//   2001-2002 Originally written by yu-ji
// License: GPL v2 or (at your option) any later version
//
// PukiWiki message file (japanese)

// ※此檔案的文字編碼需要和編碼設定一致

// Encoding hint
$_LANG['encode_hint']['zh-tw'] = 'ㄅ';

///////////////////////////////////////
// Page titles
$_title_cannotedit = '無法編輯 $1';
$_title_edit       = '編輯 $1';
$_title_preview    = '預覽 $1';
$_title_collided   = '$1 發生【更新衝突】';
$_title_updated    = '已更新 $1';
$_title_deleted    = '已刪除 $1';
$_title_help       = '幫助';
$_title_invalidwn  = '無效的 WikiName';
$_title_backuplist = '履歷一覽';

///////////////////////////////////////
// Messages
$_msg_unfreeze       = '解除鎖定';
$_msg_preview        = '確認下列預覽內容，沒有問題的話請按頁面下方的按鈕進行更新。';
$_msg_preview_delete = '（ページの内容は空です。更新するとこのページは削除されます。）';
$_msg_collided       = 'あなたがこのページを編集している間に、他の人が同じページを更新してしまったようです。<br />
今回追加した行は +で始まっています。<br />
!で始まる行が変更された可能性があります。<br />
!や+で始まる行を修正して再度ページの更新を行ってください。<br />';

$_msg_collided_auto  = 'あなたがこのページを編集している間に、他の人が同じページを更新してしまったようです。<br />
自動で衝突を解消しましたが、問題がある可能性があります。<br />
確認後、[ページの更新]を押してください。<br />';

$_msg_invalidiwn     = '$1 不是有效的 $2 。';
$_msg_invalidpass    = '密碼錯誤。';
$_msg_notfound       = '找不到指定的頁面。';
$_msg_addline        = '新增行會是<span class="diff_added">這個顏色</span>。';
$_msg_delline        = '刪除行會是<span class="diff_removed">這個顏色</span>。';
$_msg_goto           = '前往 $1 。';
$_msg_andresult      = '包含 $1 的頁面，從 <strong>$3</strong> 頁中找到了 <strong>$2</strong> 頁。';
$_msg_orresult       = '$1 のいずれかを含むページは <strong>$3</strong> ページ中、<strong>$2</strong> ページ見つかりました。';
$_msg_notfoundresult = '<strong>$3</strong> ページ中、$1 を含むページは見つかりませんでした。';
$_msg_prev_results   = '&lt;&lt; 前の $1 ページ';
$_msg_more_results   = '次の $1 ページ &gt;&gt;';
$_msg_symbol         = '記号';
$_msg_other          = '其他';
$_msg_help           = '查看文字語法';
$_msg_week           = array('日','一','二','三','四','五','六');
$_msg_content_back_to_top = '';
// $_msg_content_back_to_top = '<div class="jumpmenu"><a href="#navigator">&uarr;</a></div>';
$_msg_word           = 'これらのキーワードがハイライトされています：';
$_msg_unsupported_webbrowser = 'この機能はお使いのWebブラウザには対応していません。';
$_msg_use_alternative_link = 'リンク先の機能をご利用ください: $1';
$_msg_general_error  = '處理時發生錯誤。';

$_msg_edit_cancel_confirm = '編輯中的文字將會遺失。確定嗎 ?';
$_msg_edit_unloadbefore_message = '所輸入的資料不會儲存。';

///////////////////////////////////////
// Symbols
$_symbol_anchor   = '&dagger;';
$_symbol_noexists = '';

///////////////////////////////////////
// Form buttons
$_btn_preview   = '預覽';
$_btn_repreview = '再次預覽';
$_btn_update    = '更新頁面';
$_btn_cancel    = '取消';
$_btn_notchangetimestamp = '不更改時間標記';
$_btn_addtop    = '加至頁面上方';
$_btn_template  = '原型頁面';
$_btn_load      = '載入';
$_btn_edit      = '編輯';
$_btn_delete    = '刪除';

///////////////////////////////////////
// Authentication
$_title_cannotread = '$1 不可閱讀';
$_msg_auth         = 'PukiWikiAuth';

///////////////////////////////////////
// Page name
$rule_page = 'FormattingRules';	// Formatting rules
$help_page = 'Help';		// Help

/////////////////////////////////////////////////
// 題名が未記入の場合の表記 (article)
$_no_subject = '無題';

/////////////////////////////////////////////////
// 名前が未記入の場合の表記 (article, comment, pcomment)
$_no_name = '';

/////////////////////////////////////////////////
// Skin
/////////////////////////////////////////////////

$_LANG['skin']['add']       = '新增';
$_LANG['skin']['backup']    = '履歴';
$_LANG['skin']['copy']      = '複製';
$_LANG['skin']['diff']      = '差異';
$_LANG['skin']['edit']      = '編輯';
$_LANG['skin']['filelist']  = '檔名一覽';	// List of filenames
$_LANG['skin']['freeze']    = '鎖定';
$_LANG['skin']['help']      = '幫助';
$_LANG['skin']['list']      = '一覽';	        // List of pages
$_LANG['skin']['new']       = '新增';
$_LANG['skin']['rdf']       = '近期更新的 RDF';	// RDF of RecentChanges
$_LANG['skin']['recent']    = '近期更新';	    // RecentChanges
$_LANG['skin']['reload']    = '重新載入';
$_LANG['skin']['rename']    = '改名';	    // Rename a page (and related)
$_LANG['skin']['rss']       = '近期更新的 RSS';	// RSS of RecentChanges
$_LANG['skin']['rss10']     = & $_LANG['skin']['rss'];
$_LANG['skin']['rss20']     = & $_LANG['skin']['rss'];
$_LANG['skin']['search']    = '搜尋';
$_LANG['skin']['top']       = '首頁';	        // Top page
$_LANG['skin']['unfreeze']  = '解鎖';
$_LANG['skin']['upload']    = '上傳';	        // Attach a file
$_LANG['skin']['login']     = '登入';
$_LANG['skin']['logout']    = '登出';

///////////////////////////////////////
// Plug-in message
///////////////////////////////////////
// add.inc.php
$_title_add = '新增至 $1';
$_msg_add   = 'ページへの追加は、現在のページ内容に改行が二つと入力内容が追加されます。';

///////////////////////////////////////
// article.inc.php
$_btn_name    = 'お名前';
$_btn_article = '記事の投稿';
$_btn_subject = '題名: ';
$_msg_article_mail_sender = '投稿者: ';
$_msg_article_mail_page   = '投稿先: ';


///////////////////////////////////////
// attach.inc.php
$_attach_messages = array(
	'msg_uploaded' => '已上傳至 $1',
	'msg_deleted'  => '已從 $1 刪除檔案',
	'msg_freezed'  => '已鎖定上傳檔案。',
	'msg_unfreezed'=> '已解除鎖定上傳檔案。',
	'msg_renamed'  => '已更改上傳檔案的名稱。',
	'msg_upload'   => '上傳至 $1',
	'msg_info'     => '上傳檔案的資訊',
	'msg_confirm'  => '<p>刪除 %s 。</p>',
	'msg_list'     => '上傳檔案一覽',
	'msg_listpage' => '$1 的上傳檔案一覽',
	'msg_listall'  => '全頁面的上傳檔案一覽',
	'msg_file'     => '上傳檔案',
	'msg_maxsize'  => '可上傳的最大檔案大小為 %s 。',
	'msg_count'    => ' <span class="small">%s次</span>',
	'msg_password' => '密碼',
	'msg_adminpass'=> '管理員密碼',
	'msg_delete'   => '刪除此檔案。',
	'msg_freeze'   => '鎖定此檔案。',
	'msg_unfreeze' => '解鎖此檔案。',
	'msg_isfreeze' => '此檔案已被鎖定。',
	'msg_rename'   => '更改名稱。',
	'msg_newname'  => '新名稱',
	'msg_require'  => '(需要管理員密碼)',
	'msg_filesize' => '大小',
	'msg_date'     => '上傳時間',
	'msg_dlcount'  => '存取次數',
	'msg_md5hash'  => 'MD5 雜湊值',
	'msg_page'     => '頁面',
	'msg_filename' => '儲存檔案名稱',
	'err_noparm'   => '$1 へはアップロード・削除はできません',
	'err_exceed'   => '$1 へのファイルサイズが大きすぎます',
	'err_exists'   => '$1 に同じファイル名が存在します',
	'err_notfound' => '$1 にそのファイルは見つかりません',
	'err_noexist'  => '沒有上傳檔案。',
	'err_delete'   => '無法從 $1 刪除檔案',
	'err_rename'   => '無法更改檔案名稱',
	'err_password' => '密碼錯誤。',
	'err_adminpass'=> '管理員密碼錯誤。',
	'btn_upload'   => '上傳',
	'btn_info'     => '詳細',
	'btn_submit'   => '執行'
);

///////////////////////////////////////
// back.inc.php
$_msg_back_word = '戻る';

///////////////////////////////////////
// backup.inc.php
$_title_backup_delete  = '刪除 $1 的履歷';
$_title_backupdiff     = '$1 的履歷差異(No.$2)';
$_title_backupnowdiff  = '$1 的履歷與現在的差異(No.$2)';
$_title_backupsource   = '$1 的履歷原始內容(No.$2)';
$_title_backup         = '$1 的履歷(No.$2)';
$_title_pagebackuplist = '$1 的履歷一覽';
$_title_backuplist     = '履歷一覽';
$_msg_backup_deleted   = '已刪除 $1 的履歷。';
$_msg_backup_adminpass = '請輸入刪除用的密碼。';
$_msg_backuplist       = '履歷一覽';
$_msg_nobackup         = '$1 沒有履歷。';
$_msg_diff             = '差異';
$_msg_nowdiff          = '與現在的差異';
$_msg_source           = '原始內容';
$_msg_backup           = '履歷';
$_msg_view             = '顯示 $1';
$_msg_deleted          = '$1 已被刪除。';

///////////////////////////////////////
// calendar_viewer.inc.php
$_err_calendar_viewer_param2 = '第2引数が変だよ';
$_msg_calendar_viewer_right  = '次の%d件&gt;&gt;';
$_msg_calendar_viewer_left   = '&lt;&lt;前の%d件';
$_msg_calendar_viewer_restrict = '$1 は閲覧制限がかかっているためcalendar_viewerによる参照はできません';

///////////////////////////////////////
// calendar2.inc.php
$_calendar2_plugin_edit  = '[この日記を編集]';
$_calendar2_plugin_empty = '%sは空です。';

///////////////////////////////////////
// comment.inc.php
$_btn_name    = 'お名前: ';
$_btn_comment = 'コメントの挿入';
$_msg_comment = 'コメント: ';
$_title_comment_collided = '$1 發生了【更新衝突】';
$_msg_comment_collided   = 'あなたがこのページを編集している間に、他の人が同じページを更新してしまったようです。<br />
コメントを追加しましたが、違う位置に挿入されているかもしれません。<br />';
$_comment_plugin_fail_msg = 'あなたがこのページを編集している間に、他の人が同じページを更新してしまったようです。<br />
コメントの追加に失敗しました。<br />';

///////////////////////////////////////
// deleted.inc.php
$_deleted_plugin_title = '刪除頁面一覽';
$_deleted_plugin_title_withfilename = '刪除頁面檔案一覽';

///////////////////////////////////////
// diff.inc.php
$_title_diff = '$1 的更改點';
$_title_diff_delete  = '刪除 $1 的差異';
$_msg_diff_deleted   = '已刪除 $1 的差異。';
$_msg_diff_adminpass = '請輸入刪除用的密碼。';

///////////////////////////////////////
// filelist.inc.php (list.inc.php)
$_title_filelist = '頁面檔案一覽';

///////////////////////////////////////
// freeze.inc.php
$_title_isfreezed = '$1 已被鎖定';
$_title_freezed   = '已鎖定 $1';
$_title_freeze    = '鎖定 $1';
$_msg_freezing    = '請輸入鎖定用的密碼。';
$_btn_freeze      = '鎖定';

///////////////////////////////////////
// insert.inc.php
$_btn_insert = '追加';

///////////////////////////////////////
// include.inc.php
$_msg_include_restrict = '$1 は閲覧制限がかかっているためincludeできません';

///////////////////////////////////////
// interwiki.inc.php
$_title_invalidiwn = '無效的 InterWikiName';

///////////////////////////////////////
// list.inc.php
$_title_list = '頁面一覽';

///////////////////////////////////////
// ls2.inc.php
$_ls2_err_nopages = '<p>\'$1\' には、下位層のページがありません。</p>';
$_ls2_msg_title   = '以 \'$1\' 開始的頁面一覽';

///////////////////////////////////////
// memo.inc.php
$_btn_memo_update = 'メモ更新';

///////////////////////////////////////
// navi.inc.php
$_navi_prev = 'Prev';
$_navi_next = 'Next';
$_navi_up   = 'Up';
$_navi_home = 'Home';

///////////////////////////////////////
// newpage.inc.php
$_msg_newpage = '新增頁面';

///////////////////////////////////////
// paint.inc.php
$_paint_messages = array(
	'field_name'    => 'お名前',
	'field_filename'=> 'ファイル名',
	'field_comment' => 'コメント',
	'btn_submit'    => 'paint',
	'msg_max'       => '(最大 %d x %d)',
	'msg_title'     => 'Paint and Attach to $1',
	'msg_title_collided' => '$1 で【更新の衝突】が起きました',
	'msg_collided'  => 'あなたが画像を編集している間に、他の人が同じページを更新してしまったようです。<br />
画像とコメントを追加しましたが、違う位置に挿入されているかもしれません。<br />'
);

///////////////////////////////////////
// pcomment.inc.php
$_pcmt_messages = array(
	'btn_name'     => '名稱: ',
	'btn_comment'  => '加入留言',
	'msg_comment'  => '留言: ',
	'msg_recent'   => '顯示最新的 %d 件內容。',
	'msg_all'      => '前往留言頁面',
	'msg_none'     => '沒有留言。',
	'title_collided' => '$1 發生了【更新衝突】',
	'msg_collided' => 'あなたがこのページを編集している間に、他の人が同じページを更新してしまったようです。<br />
コメントを追加しましたが、違う位置に挿入されているかもしれません。<br />',
	'err_pagename' => 'ページ名 [[%s]] は使用できません。 正しいページ名を指定してください。',
);
$_msg_pcomment_restrict = '由於設有閱覽限制，無法從 $1 讀取留言。';

///////////////////////////////////////
// popular.inc.php
$_popular_plugin_frame       = '<h5>人気の%d件</h5><div>%s</div>';
$_popular_plugin_today_frame = '<h5>今日の%d件</h5><div>%s</div>';

///////////////////////////////////////
// recent.inc.php
$_recent_plugin_frame = '<h5>最新の%d件</h5>
<div>%s</div>';

///////////////////////////////////////
// rename.inc.php
$_rename_messages  = array(
	'err' => '<p>エラー:%s</p>',
	'err_nomatch'    => 'マッチするページがありません。',
	'err_notvalid'   => 'リネーム後のページ名が正しくありません。',
	'err_adminpass'  => '管理員密碼錯誤。',
	'err_notpage'    => '%sはページ名ではありません。',
	'err_norename'   => '%sをリネームすることはできません。',
	'err_already'    => 'ページがすでに存在します。:%s',
	'err_already_below' => '以下のファイルがすでに存在します。',
	'msg_title'      => 'ページ名の変更',
	'msg_page'       => '変更元ページを指定',
	'msg_regex'      => '正規表現で置換',
	'msg_related'    => '関連ページ',
	'msg_do_related' => '関連ページもリネームする',
	'msg_rename'     => '%sの名前を変更します。',
	'msg_oldname'    => '現在の名前',
	'msg_newname'    => '新しい名前',
	'msg_adminpass'  => '管理員密碼',
	'msg_arrow'      => '→',
	'msg_exist_none' => 'そのページを処理しない',
	'msg_exist_overwrite' => 'そのファイルを上書きする',
	'msg_confirm'    => '以下のファイルをリネームします。',
	'msg_result'     => '以下のファイルを上書きしました。',
	'btn_submit'     => '実行',
	'btn_next'       => '次へ'
);

///////////////////////////////////////
// search.inc.php
$_title_search  = '搜尋';
$_title_result  = '$1 的搜尋結果';
$_msg_searching = '從所有頁面搜尋單詞。大小寫文字沒有區別。';
$_btn_search    = '搜尋';
$_btn_and       = 'AND 搜尋';
$_btn_or        = 'OR 搜尋';
$_search_pages  = '搜尋以 $1 開頭的頁面';
$_search_all    = '搜尋所有頁面';
$_search_searching = '搜尋中...';
$_search_showing_result = '顯示搜尋結果';
$_search_detail = '顯示詳細內容';

///////////////////////////////////////
// source.inc.php
$_source_messages = array(
	'msg_title'    => '$1のソース',
	'msg_notfound' => '$1が見つかりません',
	'err_notfound' => 'ページのソースを表示できません。'
);

///////////////////////////////////////
// template.inc.php
$_msg_template_start   = '開始行:<br />';
$_msg_template_end     = '終了行:<br />';
$_msg_template_page    = '$1/複製';
$_msg_template_refer   = 'ページ名:';
$_msg_template_force   = '既存のページ名で編集する';
$_err_template_already = '$1 はすでに存在します。';
$_err_template_invalid = '$1 は有効なページ名ではありません。';
$_btn_template_create  = '作成';
$_title_template       = '$1 をテンプレートにして作成';

///////////////////////////////////////
// tracker.inc.php
$_tracker_messages = array(
	'msg_list'   => '$1 の項目一覧',
	'msg_back'   => '<p>$1</p>',
	'msg_limit'  => '全$1件中、上位$2件を表示しています。',
	'btn_page'   => 'ページ名',
	'btn_name'   => 'ページ名',
	'btn_real'   => 'ページ名',
	'btn_submit' => '追加',
	'btn_date'   => '日付',
	'btn_refer'  => '参照',
	'btn_base'   => '基底',
	'btn_update' => '更新日時',
	'btn_past'   => '経過',
);

///////////////////////////////////////
// unfreeze.inc.php
$_title_isunfreezed = '$1 は凍結されていません';
$_title_unfreezed   = '$1 の凍結を解除しました';
$_title_unfreeze    = '$1 の凍結解除';
$_msg_unfreezing    = '凍結解除用のパスワードを入力してください。';
$_btn_unfreeze      = '凍結解除';

///////////////////////////////////////
// versionlist.inc.php
$_title_versionlist = '構成ファイルのバージョン一覧';

///////////////////////////////////////
// vote.inc.php
$_vote_plugin_choice = '選項';
$_vote_plugin_votes  = '投票';

///////////////////////////////////////
// yetlist.inc.php
$_title_yetlist = '未作成のページ一覧';
$_err_notexist  = '未作成のページはありません。';

///////////////////////////////////////
// loginform.inc.php
$_loginform_messages = array(
	'username' => 'ユーザー名:',
	'password' => 'パスワード:',
	'login' => 'ログイン',
	'invalid_username_or_password' => 'ユーザー名またはパスワードが違います'
);

///////////////////////////////////////
// external_link.inc.php
$_external_link_messages = array(
	'page_title' => '外部リンク: %s',
	'desc' => '選択されたURLは本サイトのコンテンツではありません。',
	'wait_n_seconds' => '%s 秒後に自動的に移動します。',
);
