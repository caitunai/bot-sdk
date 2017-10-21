<?php
/**
 * Copyright (c) 2017 Baidu, Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * @desc 入口文件
 **/

require "Bot.php";
$bot = new Bot();

header("Content-Type: application/json");

//记录整体执行时间
$bot->log->markStart('all_t');
$ret = $bot->run();
$bot->log->markEnd('all_t');

//打印日志
//or 在register_shutdown_function增加一个执行函数
$bot->log->notice('bot');

print $ret;
