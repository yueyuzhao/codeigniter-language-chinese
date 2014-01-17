<?php

$lang['email_must_be_array'] = "Email的校验方法必须以数组方式传递。";
$lang['email_invalid_address'] = "无效的Email地址: %s";
$lang['email_attachment_missing'] = "无法找到以下Email附件: %s";
$lang['email_attachment_unreadable'] = "无法打开此附件: %s";
$lang['email_no_recipients'] = "您必须包含: To（收件人）, Cc（抄送）, 或 Bcc（秘密抄送）";
$lang['email_send_failure_phpmail'] = "无法使用PHP的mail()发送Email。您的服务器配置可能禁止使用该方法发送Email。";
$lang['email_send_failure_sendmail'] = "无法使用PHP的Sendmail发送Email。您的服务器配置可能禁止使用该方法发送Email。";
$lang['email_send_failure_smtp'] = "无法使用PHP的SMTP发送Email。 您的服务器配置可能禁止使用该方法发送Email。";
$lang['email_sent'] = "您的消息已成功通过%s协议发送。";
$lang['email_no_socket'] = "Sendmail无法打开端口。 请检查配置";
$lang['email_no_hostname'] = "您没指定SMTP的主机名。";
$lang['email_smtp_error'] = "发生了以下SMTP错误: %s";
$lang['email_no_smtp_unpw'] = "错误: 您必须指定SMTP的用户名和密码";
$lang['email_failed_smtp_login'] = "制定AUTH LOGIN命令失败. 错误消息: %s";
$lang['email_smtp_auth_un'] = "认证用户名失败。 错误消息: %s";
$lang['email_smtp_auth_pw'] = "认证密码失败。.错误消息: %s";
$lang['email_smtp_data_failure'] = "无法发送数据: %s";
$lang['email_exit_status'] = "退出状态码: %s";


/* End of file email_lang.php */
/* Location: ./application/language/chinese/email_lang.php */