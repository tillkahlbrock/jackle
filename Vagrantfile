Vagrant.configure("2") do |config|
  config.vm.box = "precise"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "manifests"
    puppet.manifest_file = "jackle.pp"
  end
  config.vm.network :forwarded_port, host: 6666, guest: 80
end
