package { 'apache2':
    ensure => present,
}
->
package {
  "php5-mysql":
    ensure  => present;
  "mysql-client":
    ensure  => present;
}
->
file { '/etc/apache2/sites-available/default':
    ensure => link,
    source => '/vagrant/config/apache-default-site',
}
->
file { '/etc/apache2/sites-enabled/000-default':
    ensure => link,
    target => '/etc/apache2/sites-available/default',
}
->
exec { 'remove old httpd root':
    command => '/bin/rm -rf /var/www',
}
->
exec { 'link httpd root':
    command => '/bin/ln -fs /vagrant/app /var/www',
}
->
file { '/etc/apache2/mods-enabled/rewrite.load':
    ensure => link,
    target => '/etc/apache2/mods-available/rewrite.load',
}
->
service { 'apache2':
    ensure     => running,
    enable     => true,
    subscribe  => File['/etc/apache2/sites-available/default'],
}