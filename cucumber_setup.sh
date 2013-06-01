sudo apt-get install ruby ruby1.9.1-dev irb libxml2-dev libxslt1-dev libc6-dev-i386 libopenssl-ruby

wget http://production.cf.rubygems.org/rubygems/rubygems-2.0.3.tgz

tar xzvf rubygems-2.0.3.tgz

rm rubygems-2.0.3.tgz

cd rubygems-2.0.3/

sudo ruby setup.rb

gem sources -a http://gems.github.com

sudo gem install cucumber mechanize rspec webrat
