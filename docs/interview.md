[TOC]

# 面试题

## PHP

### 基础

1. PHP中的变量作用域有哪些

```
全局作用域、函数作用域、类作用域、静态作用域
```

3. 如何在 PHP 中连接数据库？ PDO
4. 如何防止 SQL 注入攻击？  filter_var、htmlspecialchars
5. 如何处理 PHP 中的错误和异常？ try catch Exception finally | set_error_handler
6. 如何使用 PHP 实现文件上传？ $_FILES  move_uploaded_file
7. 如何使用 PHP 实现验证码功能？
8. 如何使用 PHP 实现分页功能？
9. 如何使用 PHP 实现登录和注册功能？
10. 如何使用 PHP 实现邮件发送功能？

### laravel

1. 什么是 Laravel？它有什么特点？

```
Modularity 模块化
Eloquent ORM 对象关系映射
Blade templating engine 模板引擎
Routing 路由
Middleware 中间件
Events and listeners 事件和监听器
Queues 队列
Caching 缓存
Authentication 认证
Testing 测试
```

3. Laravel 中的路由是什么？如何定义路由？
4. Laravel 中的中间件是什么？如何使用中间件？
5. Laravel 中的 Blade 模板引擎是什么？如何使用 Blade？
6. Laravel 中的 Eloquent ORM 是什么？如何使用 Eloquent？
7. Laravel 中的事件和监听器是什么？如何使用事件和监听器？ event provider handle  listen => event

```php
// Define the event
class UserRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}

// Register the listener
class SendWelcomeEmail
{
    public function handle(UserRegistered $event)
    {
        // Send welcome email to $event->user
    }
}

// Register the event and listener in EventServiceProvider
protected $listen = [
    UserRegistered::class => [
        SendWelcomeEmail::class,
    ],
];

event(new UserRegistered($user));
```

9. Laravel 中的队列是什么？如何使用队列？

```php
// php artisan make:job
// Define the job
class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        // Send welcome email to $this->user
    }
}

// Dispatch the job
SendWelcomeEmail::dispatch($user);
```

10. Laravel 中的缓存是什么？如何使用缓存？

```php
// config/cache.php
// Cache a value for 5 minutes
Cache::put('key', 'value', 5);
// Cache a value indefinitely
Cache::forever('key', 'value');

// Retrieve the cached value
$value = Cache::get('key');

```

12. Laravel 中的认证是什么？如何使用认证？

```php
// Define authentication routes
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Protect routes with middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

// Authenticate a user
if (Auth::attempt(['email' => $email, 'password' => $password])) {
    // Authentication passed...
    return redirect()->intended('dashboard');
}

// Protect routes with middleware in a controller
public function __construct()
{
    $this->middleware('auth');
}

```

14. Laravel 中的测试是什么？如何编写测试？phpUnit

```php
// Define a test
public function testBasicTest()
{
    // Make a GET request to the / endpoint
    $response = $this->get('/');

    // Assert that the response has a 200 status code
    $response->assertStatus(200);
}

// Define a test for a controller
public function testIndex()
{
    // Make a GET request to the /posts endpoint
    $response = $this->get('/posts');

    // Assert that the response has a 200 status code
    $response->assertStatus(200);

    // Assert that the response contains the word "Posts"
    $response->assertSee('Posts');
}

```

### mysql

1. 什么是 MySQL？它有什么特点？
2. MySQL 中的存储引擎有哪些？它们有什么区别？ InnoDB | MyISAM
3. 如何在 MySQL 中创建表？如何设置表的主键和索引？

```mysql
ALTER TABLE my_table ADD PRIMARY KEY (id);
ALTER TABLE my_table ADD INDEX name_index (name);
```

5. 如何在 MySQL 中进行增删改查操作？
6. 如何进行 MySQL 数据库备份和恢复？

```shell
mysqldump -u username -p database_name > backup.sql
mysql -u username -p database_name < backup.sql
```

8. 如何优化 MySQL 数据库的性能？ 索引、explain分析sql、使用mysql缓存、提升服务器配置、负载均衡

```
SET GLOBAL query_cache_size = 1000000;
SET GLOBAL innodb_buffer_pool_size = 1000000000;
```

10. 如何进行 MySQL 主从复制？master-slave replication

```shell
# 配置主服务器=>备份主数据库=>配置从属服务器=>恢复备份

# Enable binary logging
log-bin=mysql-bin

# Create replication user
CREATE USER 'repl'@'slave_ip' IDENTIFIED BY 'password';
GRANT REPLICATION SLAVE ON *.* TO 'repl'@'slave_ip';

mysqldump -u username -p database_name > backup.sql

# Configure replication settings
CHANGE MASTER TO
    MASTER_HOST='master_ip',
    MASTER_USER='repl',
    MASTER_PASSWORD='password',
    MASTER_LOG_FILE='mysql-bin.000001',
    MASTER_LOG_POS=1234;

# Restore backup
mysql -u username -p database_name < backup.sql

START SLAVE;

```

12. 如何进行 MySQL 分区表的设计和使用？

```
CREATE TABLE my_table (
  id INT NOT NULL,
  name VARCHAR(50),
  created_at DATE
)
PARTITION BY RANGE (YEAR(created_at)) (
  PARTITION p0 VALUES LESS THAN (2010),
  PARTITION p1 VALUES LESS THAN (2015),
  PARTITION p2 VALUES LESS THAN MAXVALUE
);

```

14. 如何进行 MySQL 高可用架构的设计和实现？

```
主从复制
主主复制
MySQL Cluster 分布式数据库
```

16. 如何进行 MySQL 数据库的安全设置和管理？

```
强密码
防火墙拦截
软件更新
RBAC访问控制
备份和恢复
性能监控及优化
高可用和容灾方案
```

### redis

1. 什么是 Redis？它有什么特点？

```
内存存储
持久化存储
多种数据结构
分布式存储
事务支持
发布订阅功能
Lua脚本支持
高并发支持
```

3. Redis 中的数据结构有哪些？它们有什么特点？

```
string:键值对
hash:对象
list：有序元素
set：不重复元素
sorted set：不重复有序元素，按照score分值排序
```

5. 如何在 Redis 中实现分布式锁？ SETNX  DEL

```Lua
-- Acquire lock
local lock_key = "my_lock"
local lock_value = "unique_value"
local acquired = redis.call("SETNX", lock_key, lock_value)
if acquired == 1 then
    -- Lock acquired, set expiration time to prevent deadlocks
    redis.call("EXPIRE", lock_key, 60)
    return true
else
    -- Lock not acquired, return false
    return false
end

-- Release lock
local lock_key = "my_lock"
local lock_value = "unique_value"
local current_value = redis.call("GET", lock_key)
if current_value == lock_value then
    -- Lock owned by current client, delete it
    redis.call("DEL", lock_key)
    return true
else
    -- Lock not owned by current client, do nothing
    return false
end
```

```php
require 'vendor/autoload.php';

use Predis\Client;

// Connect to Redis server
$redis = new Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

// Acquire lock
$lock_key = "my_lock";
$lock_value = uniqid();
$acquired = $redis->set($lock_key, $lock_value, 'NX', 'EX', 60);
if ($acquired) {
    // Lock acquired, set expiration time to prevent deadlocks
    return true;
} else {
    // Lock not acquired, return false
    return false;
}

// Release lock
$current_value = $redis->get($lock_key);
if ($current_value == $lock_value) {
    // Lock owned by current client, delete it
    $redis->del($lock_key);
    return true;
} else {
    // Lock not owned by current client, do nothing
    return false;
}

```

7. 如何在 Redis 中实现延时队列？ zadd delayed_queue  zrangebyscore

```
require 'vendor/autoload.php';

use Predis\Client;

// Connect to Redis server
$redis = new Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

// Add job to delayed queue
$job_data = array('key' => 'value');
$job_data_json = json_encode($job_data);
$job_delay = 60; // delay job by 60 seconds
$job_id = uniqid();
$redis->zadd('delayed_queue', time() + $job_delay, $job_id);
$redis->set("job:$job_id", $job_data_json);

// Worker process
while (true) {
    $jobs = $redis->zrangebyscore('delayed_queue', '-inf', time(), array('limit' => array(0, 1)));
    if (count($jobs) > 0) {
        $job_id = $jobs[0];
        $job_data_json = $redis->get("job:$job_id");
        $job_data = json_decode($job_data_json, true);
        // process job
        $redis->del("job:$job_id");
        $redis->zrem('delayed_queue', $job_id);
    } else {
        sleep(1);
    }
}

```

9. 如何在 Redis 中实现发布订阅功能？subscribe publish

```
require 'vendor/autoload.php';

use Predis\Client;

// Connect to Redis server
$redis = new Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

// Subscribe to channel
$channel = 'my_channel';
$redis->subscribe([$channel], function ($redis, $channel, $message) {
    echo "Received message on channel $channel: $message\n";
});

// Publish message to channel
$message = 'Hello, world!';
$redis->publish($channel, $message);
```

10. 如何在 Redis 中实现缓存穿透和缓存击穿的解决方案？

```
/**
缓存穿透:当请求一个不存在的键时，就会发生缓存穿透，导致请求每次都命中数据库。
为了防止这种情况，您可以使用一种称为“缓存空对象”的技术。
这包括缓存短时间内不返回数据(例如，空集或null值)的请求结果。
这确保了在缓存过期时间内对同一键的后续请求不会不必要地命中数据库。

缓存崩溃:当一个流行的键过期，同时对该键发出大量请求，导致请求每次都命中数据库时，就会发生缓存崩溃。
为了防止这种情况，您可以使用一种称为“缓存踩踏保护”的技术。
这涉及到使用分布式锁来确保一次只允许一个请求为给定的键重新生成缓存。
这可以防止多个请求同时到达数据库并导致瓶颈。
*/
require 'vendor/autoload.php';

use Predis\Client;

// Connect to Redis server
$redis = new Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

// Get data from cache or database
$key = 'my_key';
$data = $redis->get($key);
if ($data === null) {
    // Acquire lock
    $lock_key = "lock:$key";
    $lock_value = uniqid();
    $acquired = $redis->set($lock_key, $lock_value, 'NX', 'EX', 60);
    if ($acquired) {
        // Lock acquired, regenerate cache
        $data = // generate data from database
        $redis->set($key, $data, 'EX', 300);
        // Release lock
        $current_value = $redis->get($lock_key);
        if ($current_value == $lock_value) {
            $redis->del($lock_key);
        }
    } else {
        // Lock not acquired, wait and try again
        sleep(1);
        $data = $redis->get($key);
    }
}

```

11. 如何在 Redis 中实现高并发计数器？ incr decr

```
require 'vendor/autoload.php';

use Predis\Client;

// Connect to Redis server
$redis = new Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

// Increment counter
$key = 'my_counter';
$redis->incr($key);

```

13. 如何在 Redis 中实现限流功能？ setnx expire

```
require 'vendor/autoload.php';

use Predis\Client;

// Connect to Redis server
$redis = new Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

// Check if request is allowed
$key = 'my_key';
$allowed = $redis->setnx($key, 1);
if ($allowed) {
    // Request allowed, set expiration time
    $redis->expire($key, 60);
    // Process request
} else {
    // Request rate limited
}

```

14. 如何在 Redis 中实现分布式会话？ sentinel setex

```php
require 'vendor/autoload.php';

use Predis\Client;

// Connect to Redis Sentinel
$sentinel = new Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 26379,
]);

// Get Redis master
$master = $sentinel->sentinel('get-master-addr-by-name', 'mymaster');

// Connect to Redis server
$redis = new Client([
    'scheme' => 'tcp',
    'host'   => $master[0],
    'port'   => $master[1],
]);

// Set session data
$session_id = 'my_session_id';
$session_data = // session data
$redis->setex($session_id, 3600, $session_data);

```

15. 如何在 Redis 中实现分布式事务？ watch multi incr exec

```
require 'vendor/autoload.php';

use Predis\Client;

// Connect to Redis server
$redis = new Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

// Watch key
$key = 'my_key';
$redis->watch($key);

// Start transaction
$redis->multi();

// Modify key
$redis->incr($key);

// Execute transaction
$result = $redis->exec();

if ($result === null) {
    // Transaction aborted
} else {
    // Transaction succeeded
}

```

### rabbitmq

1. 什么是 RabbitMQ？它有什么特点？
2. RabbitMQ 中的消息队列是什么？如何使用消息队列？
3. RabbitMQ 中的交换机是什么？有哪些类型？
4. RabbitMQ 中的路由是什么？如何进行路由？
5. RabbitMQ 中的 ACK 是什么？如何进行 ACK？
6. RabbitMQ 中的死信队列是什么？如何使用死信队列？
7. RabbitMQ 中的延迟队列是什么？如何使用延迟队列？
8. RabbitMQ 中的 RPC 是什么？如何使用 RPC？
9. RabbitMQ 中的集群是什么？如何搭建 RabbitMQ 集群？
10. RabbitMQ 中的监控和管理是什么？如何进行监控和管理？

### elasticsearch

1. 什么是 Elasticsearch？它有什么特点？
2. Elasticsearch 中的索引是什么？如何创建索引？
3. Elasticsearch 中的分片和副本是什么？它们有什么作用？
4. Elasticsearch 中的查询是什么？有哪些类型？
5. Elasticsearch 中的聚合是什么？有哪些类型？
6. Elasticsearch 中的映射是什么？如何定义映射？
7. Elasticsearch 中的倒排索引是什么？有什么作用？
8. Elasticsearch 中的分词器是什么？有哪些类型？
9. Elasticsearch 中的同步和异步操作是什么？如何进行同步和异步操作？
10. Elasticsearch 中的集群是什么？如何搭建 Elasticsearch 集群？

### docker

1. 什么是 Docker？它有什么特点？
2. Docker 中的镜像是什么？如何创建和使用镜像？
3. Docker 中的容器是什么？如何创建和管理容器？
4. Docker 中的网络是什么？如何进行容器间的网络通信？
5. Docker 中的数据卷是什么？如何使用数据卷进行数据持久化？
6. Docker 中的 Compose 是什么？如何使用 Compose 进行多容器应用的管理？
7. Docker 中的 Swarm 是什么？如何使用 Swarm 进行容器编排和集群管理？
8. Docker 中的安全是什么？如何进行 Docker 安全设置和管理？
9. Docker 中的监控和日志是什么？如何进行 Docker 监控和日志管理？
10. Docker 中的持续集成和持续部署是什么？如何使用 Docker 进行 CI/CD？

### hyperf

1. 什么是 Hyperf？它有什么特点？

```
High performance 高性能、并发
Flexible architecture 
Scalability 可伸缩性、支持分布式部署和负载平衡
Dependency injection 依赖注入 Hyperf-DI
Middleware
Database support 
RPC support:基于HTTP和TCP的RPC协议
```

3. Hyperf 中的依赖注入是什么？如何使用依赖注入？

```

```

5. Hyperf 中的协程是什么？如何使用协程？
6. Hyperf 中的中间件是什么？如何使用中间件？
7. Hyperf 中的路由是什么？如何定义路由？
8. Hyperf 中的异常处理是什么？如何处理异常？
9. Hyperf 中的数据库连接是什么？如何连接数据库？
10. Hyperf 中的缓存是什么？如何使用缓存？
11. Hyperf 中的验证器是什么？如何使用验证器？
12. Hyperf 中的事件和监听器是什么？如何使用事件和监听器？

### 微服务

1. 什么是微服务？它有什么特点？
2. 微服务架构中的服务注册和发现是什么？如何实现服务注册和发现？
3. 微服务架构中的负载均衡是什么？如何实现负载均衡？
4. 微服务架构中的熔断器是什么？如何实现熔断器？
5. 微服务架构中的分布式事务是什么？如何实现分布式事务？
6. 微服务架构中的消息队列是什么？如何使用消息队列？
7. 微服务架构中的 API 网关是什么？如何实现 API 网关？
8. 微服务架构中的配置中心是什么？如何实现配置中心？
9. 微服务架构中的日志收集和分析是什么？如何实现日志收集和分析？
10. 微服务架构中的监控和告警是什么？如何实现监控和告警？

### vue

1. 什么是 Vue？它有什么特点？
2. Vue 中的生命周期钩子有哪些？它们的作用是什么？
3. Vue 中的组件通信有哪些方式？它们的优缺点是什么？
4. Vue 中的路由是什么？如何定义路由？
5. Vue 中的 Vuex 是什么？如何使用 Vuex 进行状态管理？
6. Vue 中的指令是什么？有哪些常用指令？
7. Vue 中的过滤器是什么？如何使用过滤器？
8. Vue 中的 Mixin 是什么？如何使用 Mixin？
9. Vue 中的插件是什么？如何编写插件？
10. Vue 中的服务端渲染是什么？如何进行服务端渲染？

### react

1. 什么是 React？它有什么特点？
2. React 中的 Virtual DOM 是什么？如何使用 Virtual DOM？
3. React 中的组件是什么？如何定义组件？
4. React 中的状态和属性是什么？它们有什么区别？
5. React 中的生命周期钩子有哪些？它们的作用是什么？
6. React 中的事件处理是什么？如何处理事件？
7. React 中的条件渲染和列表渲染是什么？如何进行条件渲染和列表渲染？
8. React 中的表单处理是什么？如何处理表单？
9. React 中的路由是什么？如何定义路由？
10. React 中的 Redux 是什么？如何使用 Redux 进行状态管理？

### restful

1. 什么是 RESTful 架构？它有什么特点？
2. RESTful 架构中的资源是什么？如何定义资源？
3. RESTful 架构中的 URI 是什么？如何设计 URI？
4. RESTful 架构中的 HTTP 方法是什么？它们有什么作用？
5. RESTful 架构中的状态码是什么？有哪些常见的状态码？
6. RESTful 架构中的数据格式是什么？有哪些常见的数据格式？
7. RESTful 架构中的认证和授权是什么？如何进行认证和授权？
8. RESTful 架构中的版本控制是什么？如何进行版本控制？
9. RESTful 架构中的缓存是什么？如何使用缓存？
10. RESTful 架构中的安全是什么？如何进行安全设置和管理？

### nginx

1. 什么是 Nginx？它有什么特点？
2. Nginx 中的反向代理是什么？如何配置反向代理？
3. Nginx 中的负载均衡是什么？有哪些负载均衡算法？
4. Nginx 中的缓存是什么？如何使用缓存？
5. Nginx 中的日志是什么？如何进行日志记录和分析？
6. Nginx 中的安全是什么？如何进行安全设置和管理？
7. Nginx 中的 HTTPS 是什么？如何配置 HTTPS？
8. Nginx 中的限流是什么？如何进行限流？
9. Nginx 中的高可用架构是什么？如何实现高可用架构？
10. Nginx 中的监控和管理是什么？如何进行监控和管理？

### linux shell

1. 什么是 Linux？它有什么特点？
2. Linux 中的文件系统是什么？如何进行文件操作？
3. Linux 中的进程是什么？如何进行进程管理？
4. Linux 中的用户和权限是什么？如何进行用户和权限管理？
5. Linux 中的网络是什么？如何进行网络配置和管理？
6. Linux 中的 Shell 是什么？如何编写 Shell 脚本？
7. Linux 中的软件包管理是什么？如何进行软件包管理？
8. Linux 中的系统日志是什么？如何进行系统日志管理？
9. Linux 中的性能监控是什么？如何进行性能监控？
10. Linux 中的安全是什么？如何进行安全设置和管理？

#### 常用linux命令

1. cd：切换目录
2. ls：列出目录下的文件和子目录
3. pwd：显示当前目录的路径
4. mkdir：创建新目录
5. rm：删除文件或目录
6. cp：复制文件或目录
7. mv：移动文件或目录
8. touch：创建新文件
9. cat：查看文件内容
10. grep：在文件中查找指定字符串
11. chmod：修改文件或目录的权限
12. chown：修改文件或目录的所有者
13. ps：显示当前进程状态
14. top：实时显示系统资源占用情况
15. kill：终止指定进程
16. ifconfig：显示网络接口信息
17. ping：测试网络连接
18. netstat：显示网络连接状态
19. ssh：远程登录到另一台计算机
20. scp：在计算机之间复制文件或目录

### Git

1. 什么是 Git？它有什么特点？
2. Git 中的分支是什么？如何创建和合并分支？
3. Git 中的提交是什么？如何进行提交？
4. Git 中的远程仓库是什么？如何进行远程仓库操作？
5. Git 中的标签是什么？如何创建和使用标签？
6. Git 中的冲突是什么？如何解决冲突？
7. Git 中的回滚是什么？如何进行回滚操作？
8. Git 中的子模块是什么？如何使用子模块？
9. Git 中的钩子是什么？如何使用钩子？
10. Git 中的工作流是什么？如何进行团队协作？

### rust开发生态

1. Cargo：Rust 的官方包管理器和构建工具。Cargo 管理 Rust 应用程序的依赖项，并处理构建和测试过程。

2. Crates.io：Rust 的官方包存储库。开发者可以在这里发布和共享自己编写的 Rust crate，也可以从中下载其他开发者编写的 crate。

3. Rust 标准库：Rust 标准库提供了很多常用的功能，例如字符串处理、文件操作、网络编程等。

4. Rustup：Rust 的官方工具链管理器。Rustup 可以帮助开发者安装、管理和更新 Rust 工具链和相关组件。

5. Rust 编辑器和 IDE 插件：Rust 支持多种编辑器和 IDE，例如 Visual Studio Code、Sublime Text、Vim、Emacs 等。同时也有很多插件和扩展，以提供更好的 Rust 开发体验。

6. Rust 框架和库：Rust 生态系统中有很多优秀的框架和库，以帮助开发者更快速、更方便地构建 Rust 应用程序。例如 Rocket、Actix、Tokio、Diesel 等。

### rust resources

1. The Rust Programming Language book - This is the official book for learning Rust. It covers everything from the basics of the language to advanced concepts like concurrency and error handling.

2. Rust by Example - This is an interactive book that teaches Rust through examples. It's a great resource for those who learn better by doing.

3. Rust Programming for Beginners - This is a free online course that covers the basics of Rust programming. It includes video tutorials, quizzes, and exercises to help you learn.

4. Rust Cookbook - This is a collection of practical examples that show you how to solve common problems in Rust. It's a great resource for those who want to learn Rust by doing.

5. Rust Essentials - This is a comprehensive guide to Rust programming. It covers everything from the basics to advanced concepts like macros and unsafe code.

6. Rust Programming Tutorials - This is a series of video tutorials that cover the basics of Rust programming. It's a great resource for visual learners.

7. Rustlings - This is a set of exercises that help you learn Rust by doing. It covers everything from basic syntax to advanced topics like macros and traits.

8. Rust Language Cheat Sheet - This is a quick reference guide to Rust programming. It's a great resource for those who want to quickly look up syntax or concepts.

9. Rustacean Station - This is a weekly newsletter that covers the latest news and developments in the Rust community. It's a great way to stay up-to-date with what's happening in the world of Rust.

10. Rust Community Discord - This is a Discord server where you can connect with other Rust programmers and get help with your code. It's a great resource for those who want to be part of the Rust community.

Github:

1. Rust Programming Language
2. Rust by Example
3. Rustlings
4. Rust Cookbook
5. Rustacean Station
6. Rust Language Cheat Sheet
7. Awesome Rust
8. rust-lang/rust
9. actix/actix-web - A powerful, high-performance web framework for Rust
10. tokio-rs/tokio - A runtime for writing asynchronous Rust applications
11. burntsushi/ripgrep - A fast, user-friendly alternative to grep
12. rust-lang/cargo - The official Rust package manager,
13. serde-rs/serde - A powerful Rust serialization framework,
14. rust-lang/mdBook - A tool to create modern, fast static websites from Markdown files,
15. rust-lang-nursery/rustfmt - A tool to format Rust code according to community standards,
16. rust-lang-nursery/rust-clippy - A collection of lints to catch common mistakes and improve Rust code,
17. rust-lang-nursery/rustup.rs

### Algorithm-算法

### OOD-面向对象设计

1. 设计一个支持百万用户的系统
2. 设计一个限流组件
3. 设计一个短链接系统
4. 设计基于位置的服务
5. 设计指标和监控和告警系统
6. 设计分布式键值数据库
7. 设计 S3 对象存储

### System Design-系统设计

### itv

请写出HTTP的请求响应报文格式，要求如下：
使用POST方法
请求地址：<http://www.example.com:8080/order/filter>
参数：a=1，b=2
需要用户登录的cookie值，cookie项为PHPSESSID，其值为”A12345678”
指明响应的格式为json格式
响应的语言为中文
可接受压缩格式。
响应的数据格式为JSON，数据是{"code":0","msg":"ok"}
响应强制无缓存

请求:
POST /order/filter HTTP/1.1
Host: www.example.com:8080
Content-Type: application/x-www-form-urlencoded
Content-Length: 7
Cookie: PHPSESSID=A12345678
Accept-Encoding: gzip, deflate
Cache-Control: no-cache

a=1&b=2

响应：
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8
Content-Encoding: gzip
Content-Language: zh-CN
Cache-Control: no-cache, no-store, must-revalidate
Expires: 0
Pragma: no-cache
Content-Length: 23

{"code":0,"msg":"ok"}

什么是CSRF/XSS攻击，如何规避？

CSRF（Cross-site request forgery）跨站请求伪造，是一种常见的Web攻击，攻击者通过伪造用户的请求让服务器执行恶意操作，如转账、删除数据等。攻击者通常会通过诱导用户点击链接或访问恶意网站的方式来实现攻击。规避CSRF攻击的方法包括使用验证码、检查Referer、使用Token等。

XSS（Cross-site scripting）跨站脚本攻击，是一种常见的Web攻击，攻击者通过注入恶意脚本来获取用户的敏感信息，如Cookie、密码等。攻击者通常会通过在输入框中注入脚本或者构造恶意链接的方式来实现攻击。规避XSS攻击的方法包括对用户输入进行过滤、转义、限制输入长度等。

// To prevent CSRF attacks in PHP, you can use the following methods:
// 1. Use CSRF tokens: Generate a unique token for each user session and include it in each form. When the form is submitted, check that the token matches the one stored in the session.
// 2. Use the SameSite attribute: Set the SameSite attribute to "Strict" or "Lax" on cookies that are used for authentication. This prevents the cookie from being sent in cross-site requests.
// 3. Use HTTP-only cookies: Set the HttpOnly attribute on cookies that are used for authentication. This prevents the cookie from being accessed by JavaScript, which can help prevent XSS attacks.
// 4. Check the Referer header: Check that the Referer header matches the current domain before processing any requests. This can help prevent CSRF attacks that originate from other sites.

// Example of using CSRF tokens in PHP:
session_start();
if (!isset($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

// In the form:
<input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">

// When processing the form:
session_start();
if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
  die("CSRF token validation failed");
}
// continue processing the form data

// Note: This is just one example of how to prevent CSRF attacks in PHP. There are many other methods and libraries available that can help with this.

// To prevent XSS attacks in PHP, you can use the following methods:
// 1. Use htmlspecialchars() function: This function converts special characters to their HTML entities, which prevents them from being interpreted as HTML or JavaScript code.
// 2. Use filter_input() function: This function filters user input to remove any HTML or JavaScript code.
// 3. Use Content Security Policy (CSP): This is a header that tells the browser which sources of content are allowed to be loaded on a web page. It can help prevent XSS attacks by blocking the execution of scripts from untrusted sources.
// 4. Use HTTP-only cookies: Set the HttpOnly attribute on cookies that are used for authentication. This prevents the cookie from being accessed by JavaScript, which can help prevent XSS attacks.

// Example of using htmlspecialchars() function in PHP:
$user_input = "<script>alert('XSS attack!');</script>";
echo htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8');

// Output: &lt;script&gt;alert(&#039;XSS attack!&#039;);&lt;/script&gt;

CSRF（Cross-Site Request Forgery，跨站请求伪造）攻击是指攻击者通过伪造用户已经授权过的请求，欺骗用户在未经意识的情况下执行某些危险操作，比如修改账户信息、转账等。攻击者可以通过各种手段，如伪造图片、iframe、链接等诱骗用户，从而达到攻击的目的。规避CSRF攻击的方法包括：

    在表单中添加CSRF token：在表单中添加一个随机生成的token，每次提交表单时，将该token一起提交，并且在后台校验该token是否有效。

    验证referer：检查请求的Referer值，确保请求是从自己的网站发出的。

    添加验证码：在关键操作中添加验证码的方式，可以有效地防止CSRF攻击。

XSS（Cross Site Scripting，跨站脚本攻击）是指攻击者利用Web应用程序对用户输入数据的过滤不足的漏洞，向网页中注入恶意脚本，从而在用户浏览页面时对用户进行攻击，比如盗取用户的cookie、窃取用户的隐私等。规避XSS攻击的方法包括：

    对用户输入的数据进行过滤和转义：过滤用户输入的特殊字符，如"<"、">"、"&"等，可以防止XSS攻击。

    使用内容安全策略（CSP）：在Web应用程序的响应头中设置Content-Security-Policy头，限制网页可以加载的资源和脚本，从而防止恶意脚本的注入。

    使用htmlspecialchars等函数对输出的数据进行转义，防止恶意脚本的注入。

在PHP中，可以使用内置函数进行数据的过滤和转义，比如htmlentities、htmlspecialchars等函数，也可以使用第三方安全类库，如HTML Purifier等。此外，还可以在PHP中使用CSRF token、Referer验证、验证码等方法来规避CSRF攻击。

---

在不考虑效率的情况下，尽可能使用多种方法将类似于1234567890整型数值转换成1,234,567,890 每3位用逗号隔开的形式。每种方法2分（无上限）
1
$num = 1234567890;
echo number_format($num);
2
echo preg_replace("/(?<=\d)(?=(\d{3})+(?!\d))/u", ",", $num);
3
$parts = array_reverse(str_split($num, 3));
echo implode(",", $parts);
4
$formatted = sprintf("%'.09d", $num);
echo str_replace("000", ",", $formatted);
5
function formatNumber($num) {
    if(strlen($num) <= 3) {
        return $num;
    }
    else {
        return formatNumber(substr($num, 0, -3)) . ',' . substr($num, -3);
    }
}
$num = 1234567890;
echo formatNumber($num);

--- 

身份证正则匹配提取出生日期
// Use regular expression to validate and extract the birth date from the given ID number
$id_number = "513436196903107115";
$pattern = "/^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})(\d|X)$/";
if (preg_match($pattern, $id_number, $matches)) {
  $birth_date = $matches[2] . "-" . $matches[3] . "-" . $matches[4];
  echo "The birth date is: " . $birth_date;
} else {
  echo "Invalid ID number";
}

倒置字符串
// Reverse a string using only strlen
function reverse_string($str) {
  $len = strlen($str);
  $result = '';
  for ($i = $len - 1; $i >= 0; $i--) {
    $result .= $str[$i];
  }
  return $result;
}

$str = "abc你好def";
echo reverse_string($str);
// Output: fed好你cba

一种时间复杂度低于O(N2)的排序算法是快速排序（Quick Sort）。其排序原理是通过选取一个基准值（pivot），将数组分为两个子数组，一个子数组中的所有元素都小于基准值，另一个子数组中的所有元素都大于基准值。然后递归地对子数组进行排序，直到子数组的长度为1或0。在实现时，可以选取数组的第一个元素作为基准值，然后通过两个指针从数组的两端开始扫描，将小于基准值的元素交换到左边，大于基准值的元素交换到右边，最后将基准值交换到中间位置。快速排序的时间复杂度为O(NlogN)，空间复杂度为O(logN)。

平均分配
公司正在搞营销活动，奖品分为一、二、三等奖，以及“谢谢参与”。要求控制一、二、三等奖与“谢谢参与”比例分别为5%（共5个奖品）、15%（共100个奖品）、25%（共200个奖品）、55%，要求在8am-8pm之间尽可能地平均分配中奖人数，请写出实现的思路。

// Define the total number of prizes
$total_prizes = 310;

// Define the percentage of each prize
$first_prize_percentage = 0.05;
$second_prize_percentage = 0.15;
$third_prize_percentage = 0.25;
$thanks_percentage = 0.55;

// Calculate the number of each prize
$first_prize_num = round($total_prizes *$first_prize_percentage);
$second_prize_num = round($total_prizes* $second_prize_percentage);
$third_prize_num = round($total_prizes * $third_prize_percentage);
$thanks_num = $total_prizes - $first_prize_num - $second_prize_num - $third_prize_num;

// Define the time range for the promotion
$start_time = strtotime('8:00:00');
$end_time = strtotime('20:00:00');
$duration = $end_time - $start_time;

// Calculate the number of winners per hour for each prize
$first_prize_per_hour = round($first_prize_num / ($duration / 3600));
$second_prize_per_hour = round($second_prize_num / ($duration / 3600));
$third_prize_per_hour = round($third_prize_num / ($duration / 3600));
$thanks_per_hour = round($thanks_num / ($duration / 3600));

// Output the result
echo "First prize per hour: " . $first_prize_per_hour . PHP_EOL;
echo "Second prize per hour: " . $second_prize_per_hour . PHP_EOL;
echo "Third prize per hour: " . $third_prize_per_hour . PHP_EOL;
echo "Thanks per hour: " . $thanks_per_hour . PHP_EOL;

// 有一本英文读本小说，内容为英文单词和数字构成，该小说约5MB的大小，每页以“PAGE XXX”分隔，现在需要实现一个程序，快速地查找并输出一个单词或数字在这本小说里的页码、行数、位置。示例：hello：p21,r1,w14;p25,r10,w3;p28,r5,w7其中，p表示页码，r表示行数，w表示第几个单词。请写出实现的思路。

// 获取文件
$file_path = "path/to/novel.txt";
$search_term = "hello";

// 读取文件内容
$file_handle = fopen($file_path, "r");

// 初始化页码、行数、位置
$page_num = 1;
$row_num = 1;
$word_num = 1;

// 遍历文件内容
while (!feof($file_handle)) {
  $line = fgets($file_handle);
  
  // 内容搜索匹配
  if (strpos($line, $search_term) !== false) {
    // 输出页码、行数、位置
    echo $search_term . ": p" . $page_num . ",r" . $row_num . ",w" . $word_num . ";";
  }
  
  // 检查行是否包含页码
  if (strpos($line, "PAGE") !== false) {
    // 增加页码，重置行数、位置计数
    $page_num++;
    $row_num = 1;
    $word_num = 1;
  } else {
    // 行数增加、位置计数重置
    $row_num++;
    $word_num = 1;
  }
  
  // 遍历每个文字
  $words = explode(" ", $line);
  foreach ($words as $word) {
    // 检索匹配
    if (strpos($word, $search_term) !== false) {
      // 输出页码、行数、位置
      echo $search_term . ": p" . $page_num . ",r" . $row_num . ",w" . $word_num . ";";
    }

    $word_num++;
  }
}

// 关闭文件处理
fclose($file_handle);

某趟航班会途经若干个城市已知条件:1.此航班每个城市只会经过一次,同时每天的航线是固定2.每天只会有一趟航班，并且不存在航行中途跨天的情况另获取到的此航班的数据信息如下：
请通过算法获取：航班CA1197的飞行路线
