name             "symfonybundles"
maintainer       "meven"
maintainer_email "meven.cadare@gmail.fr"
license          "All rights reserved"
long_description IO.read(File.join(File.dirname(__FILE__), '../README.md'))
version          "1.0.0"

depends 'mysql_chef_gem'
depends 'mysql2_chef_gem', '~> 1.0'
depends 'mysql', '~> 6.0'
depends 'database', '~> 4.0'
