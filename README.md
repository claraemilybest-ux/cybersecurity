# cybersecurity
...existing code...
## Quick setup

1. Copy project to server: /var/www/myapp
2. Create DB:
   sudo mysql -u root -p < /var/www/myapp/sql/setup.sql
3. Put Apache vhost at /etc/apache2/sites-available/myapp.conf and add `Listen 8080` to /etc/apache2/ports.conf
4. Enable site and reload:
   sudo a2ensite myapp.conf
   sudo systemctl restart apache2
5. Add DNS A record `app.example.com` -> your-server-ip
6. Visit http://app.example.com:8080/

DB credentials (default for testing):
- DB: cyberapp
- User: cyberuser
- Pass: cyberpass

Adjust credentials / permissions for production use.
