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
- Database Sharding 数据库分片/数据分块
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
- TCP/IP协议族
- IP地址、子网掩码、网关
- ARP协议
- DNS解析
- HTTP协议
- HTTPS协议
- WebSocket协议

### 操作系统

- 进程和线程
- 进程同步和互斥
- 死锁
- 内存管理
- 文件系统
- I/O系统

### 计算机组成原理

- 计算机系统基本组成
- 总线结构
- 存储器层次结构
- 输入输出系统
- 中央处理器
- 指令系统
- CPU的运行过程
- 性能指标

### 数据库

- 数据库基础知识
- 数据库设计
- 数据库范式
- 数据库索引
- 数据库事务
- 数据库锁
- 数据库备份与恢复
- 数据库性能优化
