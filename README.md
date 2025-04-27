# TideVault

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

## 简介

**TideVault** 是一个基于 PHP 和 Hack 构建的现代化密码管理器，旨在提供安全、高效且易用的密码存储与管理服务。通过结合 PHP 的高效性和 Hack 的灵活性，TideVault 为用户提供了强大的功能和扩展能力。

## 功能特点

- **安全加密存储**: 使用先进的加密算法确保密码安全
- **多语言支持**: 后端核心由 PHP 和 Hack 构建，前端采用 JavaScript
- **模块化设计**: 易于扩展和集成第三方服务
- **响应式界面**: 支持桌面端和移动端访问
- **强密码生成**: 自动生成高强度密码，满足各种复杂性需求

## 技术栈

- **后端语言**:  
  - PHP (58.2%)  
  - Hack (36.1%)  
- **前端语言**: JavaScript (5.7%)  
- **加密技术**: 使用 OpenSSL 和其他安全库

## 快速开始

### 1. 克隆仓库
```bash
git clone https://github.com/xiaoxiaodebai/TideVault.git
cd TideVault
```

### 2.安装依赖

确保您已安装 PHP 和 Composer，然后运行以下命令：
```bash
composer install
```
### 3. 配置环境

复制 `.env.example` 文件并重命名为 `.env`，修改其中的配置以适配您的环境：

```bash
cp .env.example .env
```

### 4. 启动服务

使用内置的 PHP 服务器或其他 Web 服务器启动项目：

```bash
php -S localhost:8080 -t public
```

访问 [http://localhost:8080](http://localhost:8080) 查看应用。

## 使用说明

### 创建密码

1. 登录账户
2. 进入 **密码生成** 页面
3. 设置密码长度和复杂度要求
4. 点击 **生成** 按钮，保存生成的密码

### 查看密码

1. 登录账户
2. 进入 **密码管理** 页面
3. 查找并查看已保存的密码记录

## 贡献指南

我们欢迎社区贡献！如果您想为 TideVault 做出贡献，请按照以下步骤操作：

1. Fork 本仓库
2. 创建新分支 (`git checkout -b feature/your-feature`)
3. 提交更改 (`git commit -m 'Add some feature'`)
4. 推送到分支 (`git push origin feature/your-feature`)
5. 提交 Pull Request

## 社区支持

有任何问题或建议？请 [提交 Issue](https://github.com/cryotx/TideVault/issues) 或加入我们的讨论。

## 许可证

本项目基于 [MIT License](LICENSE) 开源，您可以自由使用和修改。

---
**TideVault** 希望成为您管理密码的最佳选择!
```
