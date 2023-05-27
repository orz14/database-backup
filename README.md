<h1 align="center">Simple Database Backup Tools</h1>

## How To Use

- Clone Repository Into htdocs

```bash
git clone https://github.com/orz14/database-backup.git backup
```

- Modify Config File in -> services/config.php

```bash
define('DB_HOST', 'localhost');  # database host
define('DB_USERNAME', 'root');   # database username
define('DB_PASSWORD', '');       # database password
define('OUTPUT', 'D:/XAMPP-Backup/database/');  # ends with a slash " / "
```

- Run In Browser

```bash
localhost/backup
```
