# 表结构设计
#用户文章表
id          用户id
user_id     文章表的用户id
## 文章表
article_id  文章id        
user_id     用户id
tag         标志
extend_id   扩展id
full_title  标题
sub_title   副标题
keyword     关键字
body        文章内容
intro       简介
author      作者
source      来源
image       图片
is_top      置顶
is_view     是否显示
desc        排序

## tag表
tag_id      
tag_name

## tag_article表
tag_id
article_id

##文章扩展表
extend_id
extend_custom_id

##扩展表
extend_custom_id
custom_type

##网站配置表
web_id
web_name
web_contact


##微信

##用户




