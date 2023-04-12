![ProxmoxVE_PHP_API](https://upload.wikimedia.org/wikipedia/en/thumb/2/25/Proxmox-VE-logo.svg/600px-Proxmox-VE-logo.svg.png)

# ProxmoxVE PHP API

This is a updated version of Saleh7's ProxmoxVE_PHP_API. When using this libary you are going to need the [Proxmox Documentation](https://pve.proxmox.com/pve-docs/api-viewer/index.html) for request bodies.

## Table of Contents
- [ProxmoxVE PHP API](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/proxmoxve-php-api)
  - [Table of Contents](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/table-of-contents)
  - [Contributing](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/contributing)
  - [Installation](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/installation)
  - [Usage](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/usage)
    - [Quick Usage](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/usage#quick-usage)
    - [Use API Token](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/usage#use-api-token)
    - [Example](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/usage#example)
    - [Create LXC container](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/usage#create-lxc-container)
    - [Delete LXC container](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/usage#delete-lxc-container)
    - [Create VM](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/usage#create-vm)
    - [Delete VM](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/usage#delete-vm)
  - [Request](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/request)
  - [Access](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/access)
  - [Domains](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/domains)
  - [Groups](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/groups)
  - [Roles](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/roles)
  - [Users](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/users)
  - [Cluster](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/cluster)
  - [Backup](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/backup)
  - [Config](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/config)
  - [Firewall](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/firewall)
  - [High Availability](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/high-availability)
  - [Replication](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/replication)
  - [Pools](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/pools)
  - [Storage](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/storage)
  - [Nodes](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/nodes)
  - [Apt](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/apt)
  - [Ceph](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/ceph)
  - [Disks](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/disks)
  - [Nodes Firewall](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/nodes-firewall)
  - [Lxc](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/lxc)
  - [Network](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/network)
  - [Qemu](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/qemu)
  - [Nodes Replication](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/nodes-replication)
  - [Scan](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/scan)
  - [Service](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/service)
  - [Nodes Storage](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/nodes-storage)
  - [Tasks](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/tasks)
  - [Vzdump](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/vzdump)
  - [SDN](https://github.com/GJSBRT/ProxmoxVE_PHP_API/wiki/sdn)

## Contributing
This library does not contain the whole Proxmox API anymore. If you are missing an API call, feel free to add it and submit a PR.

## Installation
To install ProxmoxVE_PHP_API, simply:

```bash
composer require gjsbrt/proxmox-ve_php_api
```
