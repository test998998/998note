# Centos必装系列
## 更新系统
yum update
yum upgrade

## IPsec VPN一键搭建
wget https://git.io/vpnsetup-centos -O vpnsetup.sh && sudo sh vpnsetup.sh


yum install tmux
yum install python


## Sqlmap安装

## Nmap安装
安装所需环境：
yum install git autoconf gcc gcc-c++ make automake -y

安装到：
cd /usr/src
git clone https://github.com/nmap/nmap.git
cd nmap
./configure
make
make install
make clean
nmap version
