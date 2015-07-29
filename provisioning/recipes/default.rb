mysql_chef_gem 'default' do
    action :install
end

mysql2_chef_gem 'default' do
    action :install
end

mysql_service node['symfonybundles']['db']['dbname'] do
    port '3306'
    version '5.5'
    initial_root_password 'rootroot'
    action [:create, :start]
end

mysql_client node['symfonybundles']['db']['dbname'] do
    action :create
end

# Create mysql connection binding
mysql_connection_info = {
    :host => node['symfonybundles']['db']['host'],
    :username => node['symfonybundles']['db']['username'],
    :socket => "/var/run/mysql-#{node['symfonybundles']['db']['dbname']}/mysqld.sock",
    :password => node['symfonybundles']['db']['root_password']
}

# Metadata dependency on the database cookbook provides
# acces to the mysql_database provider

mysql_database node['symfonybundles']['db']['dbname'] do
    connection mysql_connection_info
    action :create
end

mysql_database_user 'mcadare' do
    connection mysql_connection_info
    password 'mcadare'
    host          '%'
    action [:create, :grant]
end
