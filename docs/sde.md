[toc]

# SDE

---

## Interview

### OA

- 在线笔试：算法题 * 2

### phone interview

- 简历简介
- 项目经验
- 算法题+提问

### onsite

- 4-5轮面试
- 白板代码、真机运行，讲解
- algorithm
- OOD
- system design

---

## algorithm

- 参考资料
  - [https://zhuanlan.zhihu.com/p/516357989](https://zhuanlan.zhihu.com/p/516357989)
  - [https://zhuanlan.zhihu.com/p/516344917](https://zhuanlan.zhihu.com/p/516344917)
  - [https://zhuanlan.zhihu.com/p/516280348](https://zhuanlan.zhihu.com/p/516280348)
  - [https://www.cspiration.com/#/leetcodeClassification](https://www.cspiration.com/#/leetcodeClassification)
- 基础
  - 数据结构
    - 数据结构（低级的）：数组，链表，栈，队列，树，图，堆，HashTable等
    - 数据结构（高级的）：线段树，树状数组，并查集，字典树等
  - 算法
    - 算法（低级的）：排序算法（八种），DFS，BFS，二分查找，回溯，分治，递归，动态规划，拓扑排序，贪心等
    - 算法（高级的）：Sliding window，扫描线算法（图形学），蓄水池算法，flood fill（图形学）等
    - 更难的其实也涉及到很多：KMP，马拉车等
  - 其他知识
    位运算（Bit），基础数据结构实现（LinkedList Deque等实现），一些设计思想（Design），数学知识（Math），通配符，转义字符，记忆化搜索等。
    如果用的是Java，其实别的语言也一样，Java 还有一些常用的数据结构：TreeMap，TreeSet，PriorityQueue，Deque 等
    Dijkstra，二分图，红黑树知识等；
    Java的基础：Heap实现，HashMap，HashSet具体区别等，equals hashcode重写等
  - 分类
    Array 数组
    String 
    Math
    Tree 树
    Backtracking 回溯
    Dynamic Programming 动态规划
    LinkedList 链表
    Binary Search 二分查找
    Matrix 矩阵
    DFS深度优先搜索 & BFS宽度优先搜索： dfs是舍弃时间换取空间，bfs是舍去空间换取时间
    Stack & PriorityQueue 堆栈、队列
    Bit Manipulation 位运算
    Topological Sort 拓扑排序
    Random
    Graph 图
    Union Find 并查集
    Trie 字典树
    Design 

## OOD

### Object-Oriented Programming Principles

- Encapsulation封装
- Inheritance继承
- Polymorphism多态
- Abstraction抽象

### Design Patterns

- Creational Patterns (e.g. Singleton, Factory, Builder)单例、工厂、建造者
- Structural Patterns (e.g. Adapter, Decorator, Facade)适配器、装饰者、门面
- Behavioral Patterns (e.g. Observer, Strategy, Command)观察者、策略、命令

### SOLID Principles

- Single Responsibility Principle 单一职责
- Open/Closed Principle 开闭
- Liskov Substitution Principle 里氏替换
- Interface Segregation Principle 接口隔离
- Dependency Inversion Principle 依赖反转

### OOD resources

- "Head First Design Patterns" by Eric Freeman and Elisabeth Robson
- "Design Patterns: Elements of Reusable Object-Oriented Software" by Erich Gamma, Richard Helm, Ralph Johnson, and John Vlissides
- "Clean Architecture: A Craftsman's Guide to Software Structure and Design" by Robert C. Martin
- <https://github.com/iluwatar/java-design-patterns>
- <https://github.com/DesignPatternsPHP/DesignPatternsPHP>
- [https://designpatternsphp.readthedocs.io/zh_CN/latest/README.html](https://designpatternsphp.readthedocs.io/zh_CN/latest/README.html)

## system design

### System Design Fundamentals: 高性能、高扩展、高可用

- Scalability 可扩展性、可伸缩性
- Availability 可用性
- Reliability 可靠性
- Maintainability 可维护性
- Cost-Effectiveness 经济性

### System Design Concepts

- Load Balancing 负载均衡
- Caching 缓存
- Database Sharding 数据库分片
- Replication 主从复制
- Microservices 微服务
  - 1.通过服务实现组件化
  - 2.按业务能力来划分服务和开发团队
  - 3.去中心化
  - 4.基础设施自动化（devops、自动化部署）
- Service-Oriented Architecture (SOA) 面向服务架构
  - 区别

    ![Untitled](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/46d5459a-e10a-429d-a320-a02a09241ad9/Untitled.png)

  - SOA 和微服务架构的差别

    ```markdown
    1.微服务去中心化，去掉ESB企业总线。微服务不再强调传统SOA架构里面比较重的ESB企业服务总线，同时SOA的思想进入到单个业务系统内部实现真正的组件化
    
    2.Docker容器技术的出现，为微服务提供了更便利的条件，比如更小的部署单元，每个服务可以通过类似Node或者Spring Boot等技术跑在自己的进程中。
    
    3.SOA注重的是系统集成方面，而微服务关注的是完全分离
    ```

- Message Queues 消息队列
- API Design 接口设计

### System Design Patterns

- Circuit Breaker模拟断路器模式
- Retry重试机制
- Timeout超时处理
- Bulkhead线程隔离，并发控制
- Throttling节流
- Leader Election分布式选举算法
- Eventual Consistency分布式事务最终一致性

### System Design Case Studies

- Designing Twitter
  - [https://cnwangzhou.gitbook.io/grokking-system-design/ch6](https://cnwangzhou.gitbook.io/grokking-system-design/ch6)
- Designing Instagram
  - [https://cnwangzhou.gitbook.io/grokking-system-design/ch3](https://cnwangzhou.gitbook.io/grokking-system-design/ch3)
- Designing WhatsApp
  - [https://cnwangzhou.gitbook.io/grokking-system-design/ch5](https://cnwangzhou.gitbook.io/grokking-system-design/ch5)
- Designing Uber
  - [https://cnwangzhou.gitbook.io/grokking-system-design/ch14](https://cnwangzhou.gitbook.io/grokking-system-design/ch14)
- Designing Netflix/Youtube
  - [https://cnwangzhou.gitbook.io/grokking-system-design/ch7](https://cnwangzhou.gitbook.io/grokking-system-design/ch7)

### System Design resources

- "System Design Interview" by Alex Xu
- "Grokking the System Design Interview" by Eduonix Learning Solutions
- "Designing Data-Intensive Applications" by Martin Kleppmann
- [https://cnwangzhou.gitbook.io/grokking-system-design/](https://cnwangzhou.gitbook.io/grokking-system-design/)
- <https://github.com/donnemartin/system-design-primer>
- <https://github.com/checkcheckzz/system-design-interview>
- <https://github.com/Vonng/ddia>
- [http://ddia.vonng.com/#/](http://ddia.vonng.com/#/)

---

## CS基础

### 计算机网络

- OSI七层模型
  1. 物理层
The physical layer is the first layer of the OSI model and is responsible for the transmission and reception of unstructured raw data between a device and a physical transmission medium.

  2. 数据链路层
The data link layer is responsible for the reliable transfer of data between adjacent nodes on a network, providing error detection and correction mechanisms. It is the second layer of the OSI model.

  3. 网络层
  4. 传输层
  5. 会话层
  6. 表示层
  7. 应用层

- TCP/IP协议族
  - TCP协议：提供可靠的、面向连接的数据传输服务
  - IP协议：提供无连接的、不可靠的数据传输服务
  - ICMP协议：提供网络诊断和错误报告服务
  - ARP协议：将IP地址映射到MAC地址
  - RARP协议：将MAC地址映射到IP地址
  - DHCP协议：动态分配IP地址

- IP地址、子网掩码、网关
// IP地址：用于标识网络中的设备，是一个32位的二进制数，通常用点分十进制表示
// 子网掩码：用于划分网络和主机，是一个32位的二进制数，通常用点分十进制表示
// 网关：用于连接不同网络之间的设备，是一个IP地址，通常是所在网络的第一个可用IP地址

- ARP协议
// ARP协议用于将IP地址映射到MAC地址，即通过IP地址找到对应的物理地址，以便实现数据包的传输。

- DNS解析
// DNS解析是将域名解析为IP地址的过程，通常使用DNS服务器进行解析。DNS服务器会将域名解析为对应的IP地址，以便客户端能够访问该域名对应的服务器。

- HTTP协议
  HTTP是一种应用层协议，用于在Web浏览器和Web服务器之间传输数据。它是无状态的，即服务器不会在请求之间保留任何数据。HTTP请求由请求方法、请求URI、协议版本、请求头部和请求正文组成。HTTP响应由协议版本、状态码、状态消息、响应头部和响应正文组成。

- HTTPS协议
  HTTPS协议：是一种基于TLS/SSL协议的加密传输协议，用于在Web浏览器和Web服务器之间传输数据。它通过使用公钥加密和私钥解密的方式，保证了数据在传输过程中的安全性。

- WebSocket协议
  WebSocket协议是一种基于TCP协议的应用层协议，它提供了双向通信的功能，允许服务器主动向客户端推送数据。相比于HTTP协议，它更加高效、实时。${INSERT_HERE}

### 操作系统

- 进程和线程
- 进程：是操作系统中的一个概念，表示正在运行的一个程序。每个进程都有自己的地址空间、数据栈、文件描述符等资源。进程之间是相互独立的，它们之间的通信需要通过操作系统提供的IPC机制来实现。
- 线程：是进程中的一个执行单元，一个进程可以包含多个线程。线程共享进程的地址空间和其他资源，每个线程有自己的栈空间。线程之间的通信可以通过共享内存等方式来实现，相比于进程之间的通信，线程之间的通信更加高效。

- 进程同步和互斥
// 进程同步和互斥是操作系统中的重要概念，用于协调多个进程之间的访问共享资源的行为。
// 进程同步是指多个进程之间按照一定的顺序执行，以避免出现竞争条件和死锁等问题。
// 进程互斥是指多个进程之间对共享资源的访问是互斥的，即同一时刻只能有一个进程访问共享资源，以避免出现数据不一致等问题。

- 死锁
// 死锁是指两个或多个进程在执行过程中，因争夺资源而造成的一种互相等待的现象，若无外力作用，它们都将无法继续执行下去。解决死锁问题的方法包括资源预分配、避免死锁、检测死锁和恢复死锁等。

- 内存管理
// 内存管理是操作系统中的一个重要概念，用于管理计算机的内存资源。它包括内存分配、内存回收、内存保护等功能，以确保每个进程都能够获得足够的内存空间，并且不会越界访问其他进程的内存空间。常见的内存管理算法包括分页、分段、虚拟内存等。

- 文件系统
// 文件系统是操作系统中的一个重要概念，用于管理计算机中的文件和目录。它提供了一种组织和访问文件的方式，使得用户可以方便地创建、修改、删除和查找文件。常见的文件系统包括FAT、NTFS、EXT等。文件系统还提供了对文件的保护机制，以确保只有授权用户才能访问文件。

- I/O系统
// I/O系统是操作系统中的一个重要概念，用于管理计算机与外部设备之间的数据传输。它包括设备驱动程序、中断处理程序、缓存管理等功能，以确保数据能够在计算机和外部设备之间高效地传输。常见的外部设备包括键盘、鼠标、打印机、磁盘等。I/O系统还提供了对设备的保护机制，以确保只有授权用户才能访问设备。

### 计算机组成原理

- 计算机系统基本组成
- CPU
// CPU是计算机系统中的核心部件，负责执行指令、控制程序运行、处理数据等任务。它由运算器、控制器、寄存器等部件组成，是计算机系统中最重要的组成部分。

- 存储器
// 存储器是计算机系统中用于存储数据和程序的设备，包括内存和外存。内存是计算机系统中最快的存储设备，用于存储正在运行的程序和数据；外存则用于长期存储数据和程序，如硬盘、光盘等。

- 输入输出设备
// 输入输出设备是计算机系统中用于与外部环境进行信息交换的设备，包括键盘、鼠标、显示器、打印机等。它们通过I/O系统与计算机系统进行数据传输，使得用户可以与计算机进行交互。

- 总线结构
// 总线结构是计算机系统中用于连接各个部件的一种通信方式，它包括地址总线、数据总线和控制总线三种类型。地址总线用于传输内存地址，数据总线用于传输数据，控制总线用于传输控制信号。总线结构的设计直接影响计算机系统的性能和扩展性，因此需要根据具体的应用场景进行优化。

- 存储器层次结构
// 存储器层次结构是计算机系统中用于解决存储器容量和速度矛盾的一种技术。它将存储器按照速度和容量划分为多个层次，每个层次的存储器速度越快、容量越小，而层次越低的存储器速度越慢、容量越大。在计算机系统中，CPU首先从最高层次的存储器中读取数据，如果数据不在该层次的存储器中，则从下一层次的存储器中读取，直到找到数据为止。这种存储器层次结构可以提高计算机系统的性能，同时也可以降低成本。

- 输入输出系统
// 输入输出系统是计算机系统中用于与外部环境进行信息交换的一种系统，它包括输入设备和输出设备两部分。输入设备用于将外部环境中的信息输入到计算机系统中，如键盘、鼠标等；输出设备则用于将计算机系统中的信息输出到外部环境中，如显示器、打印机等。输入输出系统通过I/O接口与计算机系统进行数据传输，使得用户可以与计算机进行交互。

- 中央处理器
// 中央处理器是计算机系统中的核心部件，负责执行指令和控制计算机系统的运行。它包括运算器、控制器和寄存器三个部分，其中运算器用于执行算术和逻辑运算，控制器用于控制指令的执行和数据的传输，寄存器则用于存储指令和数据。中央处理器的性能直接影响计算机系统的运行速度和效率，因此需要根据具体的应用场景进行优化。

- 指令系统
// 指令系统是计算机系统中用于执行指令的一种系统，它包括指令集和指令执行机制两部分。指令集是计算机系统中可执行的指令的集合，每个指令都对应着一种操作，如加法、减法、乘法等。指令执行机制则是计算机系统中用于执行指令的一种机制，它包括取指、译码、执行和访存四个阶段，其中取指阶段用于从存储器中读取指令，译码阶段用于将指令翻译成机器语言，执行阶段用于执行指令，访存阶段用于访问存储器。指令系统的设计直接影响计算机系统的性能和功能，因此需要根据具体的应用场景进行优化。

- CPU的运行过程
// 1. 取指阶段：从存储器中读取指令
// 2. 译码阶段：将指令翻译成机器语言
// 3. 执行阶段：执行指令
// 4. 访存阶段：访问存储器

- 性能指标
// 性能指标是衡量计算机系统性能的指标，包括响应时间、吞吐量、并发性、可靠性等。响应时间是指从请求发出到响应返回所需的时间，吞吐量是指单位时间内处理的请求或数据量，并发性是指系统同时处理多个请求或数据的能力，可靠性是指系统在一定时间内正常运行的能力。优化指令系统设计可以提高计算机系统的性能指标。

### 数据库

- 数据库基础知识
// 数据库是指按照数据结构来组织、存储和管理数据的仓库，它是计算机系统中的重要组成部分。数据库可以分为关系型数据库和非关系型数据库两种类型，其中关系型数据库采用表格的形式来存储数据，而非关系型数据库则采用键值对、文档等形式来存储数据。数据库的设计需要考虑数据的完整性、一致性、安全性等因素，同时还需要考虑数据库的性能和可扩展性。常见的关系型数据库包括MySQL、Oracle、SQL Server等，而常见的非关系型数据库包括MongoDB、Redis等。

- 数据库设计
// 数据库设计是指根据应用场景和需求，设计数据库的结构、关系、约束等，以满足数据的存储、查询、更新等操作。数据库设计需要考虑数据的完整性、一致性、安全性等因素，同时还需要考虑数据库的性能和可扩展性。常见的数据库设计范式包括第一范式、第二范式、第三范式等，其中第一范式要求每个属性都是原子性的，第二范式要求每个非主属性都完全依赖于主键，第三范式要求每个非主属性都不依赖于其他非主属性。数据库设计的好坏直接影响到数据库的性能和可维护性，因此需要根据具体的应用场景进行优化。

- 数据库范式
// 数据库范式是指数据库设计中的一种规范化方法，它通过消除冗余数据和不合理的数据依赖关系，提高了数据库的数据完整性和一致性。常见的数据库范式包括第一范式、第二范式、第三范式等，其中第一范式要求每个属性都是原子性的，第二范式要求每个非主属性都完全依赖于主键，第三范式要求每个非主属性都不依赖于其他非主属性。数据库范式的好坏直接影响到数据库的性能和可维护性，因此需要根据具体的应用场景进行优化。

- 数据库索引
// 数据库索引是一种数据结构，它可以加速数据库表的查找和排序操作。索引可以理解为是一本书的目录，它记录了每个关键字出现的位置，当我们需要查找某个关键字时，可以直接通过索引快速定位到对应的位置，而不需要遍历整个表。常见的索引类型包括B树索引、哈希索引、全文索引等，不同的索引类型适用于不同的场景。索引的好坏也会直接影响到数据库的性能和可维护性，因此需要根据具体的应用场景进行优化。

- 数据库事务
// 数据库事务是指一组数据库操作，它们被视为单个逻辑工作单元，要么全部执行成功，要么全部回滚到初始状态。事务可以保证数据库的一致性和完整性，避免了数据的不一致和丢失。事务具有ACID特性，即原子性、一致性、隔离性和持久性。原子性指事务中的所有操作要么全部执行成功，要么全部回滚；一致性指事务执行前后，数据库的状态必须保持一致；隔离性指多个事务并发执行时，彼此之间不能干扰；持久性指事务执行成功后，对数据库的修改必须永久保存。事务的使用可以提高数据库的可靠性和安全性，但也会增加数据库的负担，因此需要根据具体的应用场景进行优化。

- 数据库锁
// 数据库锁是一种机制，它可以控制对数据库中共享资源的访问，避免了并发操作时的数据不一致和冲突问题。常见的数据库锁包括共享锁、排他锁、行级锁、表级锁等，不同的锁适用于不同的场景。共享锁可以允许多个事务同时读取同一份数据，但不能进行修改操作；排他锁可以保证在事务修改数据时，其他事务不能读取或修改该数据；行级锁可以锁定表中的某一行数据，而不是整个表，从而提高并发性能；表级锁可以锁定整个表，从而保证数据的一致性和完整性。数据库锁的使用可以提高数据库的并发性能和可靠性，但也会增加数据库的负担，因此需要根据具体的应用场景进行优化。

- 数据库备份与恢复
// 数据库备份是指将数据库中的数据和结构复制到另一个位置，以便在数据丢失或损坏时进行恢复。常见的数据库备份方式包括物理备份和逻辑备份。物理备份是指直接复制数据库文件，包括数据文件和日志文件等，它可以快速地进行备份和恢复，但需要占用较多的磁盘空间。逻辑备份是指将数据库中的数据导出为文本格式或SQL语句，以便在需要时进行恢复，它可以节省磁盘空间，但备份和恢复的速度较慢。数据库备份需要根据具体的应用场景进行优化，例如选择合适的备份方式、备份频率和备份存储位置等。

// 数据库恢复是指在数据库出现故障或数据丢失时，将备份的数据和结构恢复到原来的状态。常见的数据库恢复方式包括完全恢复和部分恢复。完全恢复是指将整个数据库恢复到某个时间点的状态，它可以保证数据的完整性和一致性，但需要较长的恢复时间。部分恢复是指只恢复部分数据或表，它可以缩短恢复时间，但可能会导致数据的不一致。数据库恢复需要根据具体的应用场景进行优化，例如选择合适的恢复方式、恢复时间和恢复粒度等。

- 数据库性能优化

- 索引
// 1. Use indexes on frequently queried columns to speed up SELECT statements.
// Example: CREATE INDEX idx_name ON table_name (column_name);

- 避免*查询
// 2. Avoid using SELECT* and instead specify only the necessary columns to reduce the amount of data retrieved.

- 分页
// 3. Use LIMIT to restrict the number of rows returned by a query, especially for large tables.

- 连表查询替代子查询，大表join小表
// 4. Use INNER JOIN instead of WHERE IN or WHERE EXISTS for better performance.

- 存储过程或预处理语句
// 5. Use stored procedures or prepared statements to reduce the overhead of compiling and optimizing SQL statements.
// Example: CREATE PROCEDURE procedure_name AS SELECT column1, column2 FROM table_name WHERE column_name = @parameter;

- 预处理语句避免sql注入攻击，重用查询执行计划，查询缓存
// 3. Use prepared statements to avoid SQL injection attacks and improve performance by reusing query execution plans.

- 表结构优化，减少冗余数据。减少表关联
// 4. Normalize your database schema to reduce data redundancy and improve query performance.

- 查询缓存
// 5. Use caching to reduce the number of database queries and improve response times.

- 性能监控，慢查询语句统计
// 6. Monitor database performance regularly and optimize queries as needed.
