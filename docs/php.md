1. 简历（技术栈体现技术深度，项目经验介绍项目和使用技能）
2. 自我介绍（介绍学历，工作经验，项目介绍要详尽来体现你做了什么，对公司的项目熟练度）
3. 工作中遇到有难度的问题，如何解决的（错误示范：我们就是增删改查，没什么难的）
4. PHP相关
    

    1 OOP思想、说明三大特性、五大基本原则
    
    2 DI、IOC，常用设计模式及使用场景
    
    3 PHP7 性能优化点及新特性有哪些
    
    4 底层原理、垃圾回收机制
    
    5 cgi、fast-cgi、php-fpm
    
    6 php-fpm进程管理几种方式[https://blog.csdn.net/liuqun0319/article/details/92573976](https://blog.csdn.net/liuqun0319/article/details/92573976)
    
    []()
    
    7 nginx和fpm通信方式
    
    8 composer自动加载原理
    
    9 tp、laravel框架
    
    10 正则表达式
    
5. mysql
    1. 如何优化mysql （选引擎、设计表、索引、sql调优、数据清理、碎片、读写分离、集群、缓存、nosql数据库）
    2. 如何优化一条sql （explain字段解释，左前缀，计算和隐式转换等）
    3. 索引数据结构，hash索引，btree和b+tree区别
    4. 主从复制原理
    5. innodb和myisam区别
    6. char和varchar区别 使用场景（注意说varchar修改导致页分裂原理）
    7. 事务ACID，隔离级别
    8. 幻读产生及如何解决
    9. 如何防止sql注入的
    10. 聚簇索引和非聚簇索引、回表是什么
    11. Sql题 例如：查询每个班级前3的学生
6. redis
    1. 五种基本类型及使用场景
    2. list结构，为什么链表和压缩链表[https://zhuanlan.zhihu.com/p/102422311](https://zhuanlan.zhihu.com/p/102422311)
    3. 持久化方式、原理，如何选择
    4. 分布式锁如何实现 （注意锁缓存时间及误解锁问题）
    5. 主从、集群如何配置，哨兵原理
    6. redis和memcache的区别
    7. 秒杀系统注意哪些问题（系统负载和超卖两方面回答）
7. nginx
    1. 负载均衡如何配置，有几种方式
    2. nginx和php-fpm通信方式
    3. 状态码含义
8. 网络
    
    1 tcp 三次握手、四次挥手 为什么握手三次，挥手四次
    
    2 udp和tcp区别
    
    3 websocket如何建立连接的，升级请求包含哪些内容
    
    4 http协议、一次请求包含哪些内容
    
    5 https区别，https加密方式
    
    6 一次网页输入地址到展示的完整过程
    ```
    The user enters the URL (Uniform Resource Locator) of the webpage into their web browser.
    The browser sends a DNS (Domain Name System) request to a DNS server to resolve the domain name in the URL to an IP (Internet Protocol) address.
    The browser establishes a TCP (Transmission Control Protocol) connection with the web server at the IP address obtained in step 2.
    The browser sends an HTTP (Hypertext Transfer Protocol) request to the web server, specifying the resource (webpage) to be retrieved.
    The web server receives the request and sends an HTTP response containing the requested resource back to the browser.
    The browser receives the response and renders the webpage using HTML (Hypertext Markup Language), CSS (Cascading Style Sheets), and JavaScript.
    The browser may also send additional requests for resources such as images, stylesheets, and scripts referenced in the HTML of the webpage.
    ```
    1. get和post区别
    2. 网络七层模型
       ```
       Physical layer
        Data link layer
        Network layer
        Transport layer
        Session layer
        Presentation layer
        Application layer
       ```
    4. 五大网络io模型
       ```
        Blocking I/O
        Non-blocking I/O
        I/O multiplexing (select and poll)
        Signal-driven I/O (SIGIO)
        Asynchronous I/O (AIO)
       ```
9. 其他问题
    1. 常用算法（五种排序、二分查找、树广度深度遍历、猴子选大王、汉诺塔、斐波那契数列）
    2. docker一些命令
       ```
       # Build an image from a Dockerfile
        docker build -t image_name .
        
        # List all running containers
        docker ps
        
        # List all containers, including stopped ones
        docker ps -a
        
        # Start a container
        docker start container_name
        
        # Stop a container
        docker stop container_name
        
        # Remove a container
        docker rm container_name
        
        # Remove an image
        docker rmi image_name
        
        # Pull an image from a registry
        docker pull image_name
        
        # Push an image to a registry
        docker push image_name
        
        # Run a command in a new container
        docker run image_name command
        
        # Attach to a running container
        docker attach container_name
        
        # Inspect a container
        docker inspect container_name
        
        # View logs for a container
        docker logs container_name

       ```
    4. 如何处理高并发（高性能xxx、高可用xxx、高扩展xxx）
       ```
       高性能主要是通过优化代码和使用高性能的服务器硬件来实现；CDN
       高可用则是通过使用负载均衡Nginx、多台服务器和容错机制来保证系统的可用性；
       高扩展则是通过分布式架构Dubbo、Redis缓存和异步处理RabbitMQ等方式来实现系统的扩展性
       ```
    6. xss，csrf攻击及如何防范
    7. linux相关（常用命令、awk、crontab、服务重启）
    8. 队列 如何保证不重复消费的
10. 未来两年你有什么规划
    1. 看你是否有规划能力
    2. 看你是否有上进心
11. 面试官：你有什么想问的吗
    1. 问技术（团队情况、业务方向、使用了哪些技术、加班情况、对我评价）
    2. 问hr （福利待遇、晋升机制）
