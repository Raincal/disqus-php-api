<?php
/**
 * 配置文件
 *
 * @author   fooleap <fooleap@gmail.com>
 * @version  2018-03-10 13:19:05
 * @link     https://github.com/fooleap/disqus-php-api
 *
 */
namespace Emojione;

/*
 * Disqus 设置
 *
 * DISQUS_PUBKEY    Disqus 公钥，无需修改
 * PUBLIC_KEY       Disqus APP 公钥，在 https://disqus.com/api/applications/ 申请注册后获得
 * SECRET_KEY       Disqus APP 私钥，在 https://disqus.com/api/applications/ 申请注册后获得
 * DISQUS_USERNAME  Disqus 用户名
 * DISQUS_EMAIL     Disqus 注册邮箱，重要
 * DISQUS_PASSWORD  Disqus 密码，重要
 * DISQUS_WEBSITE   网站域名，如：'http://blog.fooleap.org'
 * DISQUS_SHORTNAME 网站在 Disqus 对应的 Shortname
 * DISQUS_APPROVED  评论是否免审核，true 即跳过评论预审核，false 则按后台设置
 *
 * 留言者的名字为 DISQUS_USERNAME 或邮箱号为 DISQUS_EMAIL 皆视为管理员
 * 填写正确的邮箱、密码之后，将以网站管理员的身份去获取评论数据。
 * 发送评论请求时，请填写在此设置的用户名、邮箱信息，将以登录身份发表评论。
 *
 */

define('DISQUS_PUBKEY', 'E8Uh5l5fHZ6gD8U3KycjAIAk46f68Zw7C6eW8WSjZvCLXebZ7p0r1yrYDrLilk2F');
define('PUBLIC_KEY', getenv('PUBLIC_KEY'));
define('SECRET_KEY', getenv('SECRET_KEY'));
define('DISQUS_USERNAME', getenv('DISQUS_USERNAME'));
define('DISQUS_EMAIL', getenv('DISQUS_EMAIL'));
define('DISQUS_PASSWORD', getenv('DISQUS_PASSWORD'));
define('DISQUS_WEBSITE', getenv('DISQUS_WEBSITE'));
define('DISQUS_SHORTNAME', getenv('DISQUS_SHORTNAME'));
define('DISQUS_APPROVED', getenv('DISQUS_APPROVED'));

/*
 * 网络设置
 *
 * GFW_INSIDE     服务器是否在墙内，在墙内则为 true，将指定 IP
 * DISQUS_IP      disqus.com IP 地址，可选：151.101.0.134, 151.101.64.134, 151.101.128.134, 151.101.192.134
 * DISQUS_MEDIAIP uploads.services.disqus.com IP 地址，可选：151.101.24.64, 151.101.40.64, 151.101.52.64
 *
 */

define('GFW_INSIDE', getenv('GFW_INSIDE'));
define('DISQUS_IP', getenv('DISQUS_IP')); 
define('DISQUS_MEDIAIP', getenv('DISQUS_MEDIAIP'));

/*
 * 图片设置
 *
 * GRAVATAR_CDN     Gravatar 头像 CDN
 * EMOJI_PATH       Emoji 表情 PNG 资源路径
 *
 */
 
define('GRAVATAR_CDN', getenv('GRAVATAR_CDN'));
define('EMOJI_PATH', getenv('EMOJI_PATH'));

/*
 * PHP Mailer 设置
 *
 * SITE_NAME      网站名
 * SMTP_SECURE    安全协议
 * SMTP_HOST      邮箱服务器
 * SMTP_PORT      端口号
 * SMTP_USERNAME  SMTP 登录的账号，即邮箱号
 * SMTP_PASSWORD  SMTP 登录的账号，即邮箱密码
 *
 */

define('SITE_NAME', getenv('SITE_NAME'));
define('SMTP_SECURE', getenv('SMTP_SECURE'));
define('SMTP_HOST', getenv('SMTP_HOST'));
define('SMTP_PORT', getenv('SMTP_PORT'));
define('SMTP_USERNAME', getenv('SMTP_USERNAME'));
define('SMTP_PASSWORD', getenv('SMTP_PASSWORD'));
