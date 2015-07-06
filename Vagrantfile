# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "codekitchen/boot2docker" #boot2docker
  # config.vm.box = "ubuntu/trusty64" #ubuntu host

  config.vm.network(:forwarded_port, guest: 443, host: 443)
  config.vm.network(:forwarded_port, guest: 80, host: 80)
  config.vm.network(:forwarded_port, guest: 6379, host: 6379)
  config.vm.network(:forwarded_port, guest: 5672, host: 5672)
  config.vm.network(:forwarded_port, guest: 15672, host: 15672)

  config.vm.network "forwarded_port", guest: 2375, host: 2375, host_ip: "127.0.0.1", auto_correct: true, id: "docker"
  config.vm.network "forwarded_port", guest: 2376, host: 2376, host_ip: "127.0.0.1", auto_correct: true, id: "docker-ssl"

  # Create a private network for accessing VM without NAT
  # config.vm.network "private_network", ip: "192.168.10.10", id: "default-network", nic_type: "virtio"

  # config.vm.synced_folder ".", "/vagrant", type: "rsync" # rsync fails to install on boot2docker
  if ENV['B2D_NFS_SYNC']
    config.vm.synced_folder ".", "/vagrant", type: "nfs", mount_options: ["nolock", "vers=3", "udp"], id: "nfs-sync"
  end

  config.vm.provision :docker
  config.vm.provision :docker_compose, yml: "/vagrant/docker-compose.yml", project_name: "meetup-vagrant", run: "always"
  # config.vm.provision :docker_compose, yml: "/vagrant/docker-compose.yml", rebuild: true, project_name: "meetup-vagrant", run: "always"

  # Add bootlocal support
  if File.file?('./bootlocal.sh')
    config.vm.provision "shell", path: "bootlocal.sh", run: "always"
  end

end
