# CMP6210

# A1 - Basic Cloud Infrastructure
## Task List
- [x] VPC 
- [x] Subnets 
  - [x] Private 
  - [x] Public 
- [x] Route Tables 
- [x] EC2 
- [x] RDS 
- [ ] Extra - (No need to write about this)
  - [ ] CloudFormation Script 
  - [ ] Make sure Nextcloud works 

## AWS Accounts
- Testing - Tomas 
- Production - ???

# Miscellaneous
- [Link to Folder](https://mailbcuac-my.sharepoint.com/:f:/r/personal/tomas_zakrocki_mail_bcu_ac_uk/Documents/CMP6210%20-%20Group%2020?csf=1&web=1&e=WG6ql5)

# Ansible Configuration Details
Ansible tasks are split into different `.yml` files within the tasks directory, the idea is to ensure setting up the webapp is reproducible. 

The server will be running Debian 12, so the script is designed specifically for Debian (and Debian-based) distributions. This script will not work on any other distributions. 
