<?php

/**
 * @name 清空游戏大厅
 * @desc 使用GameMemoryShare清空游戏头信息
 */

app\util\memory\GameMemoryShare::getInstance()->deleteAll();