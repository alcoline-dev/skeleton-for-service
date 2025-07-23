```
   __  ____________      ______          __       _____                 ____                     ____           __        ____                    ___ 
  / / / / ____/ __ \    /_  __/__  _____/ /_     / ___/__  ______ ___  / __/___  ____  __  __   /  _/___  _____/ /_____ _/ / /__  _____   _   __ |__ \ 
 / / / / /_  / / / /_____/ / / _ \/ ___/ __ \    \__ \/ / / / __ `__ \/ /_/ __ \/ __ \/ / / /   / // __ \/ ___/ __/ __ `/ / / _ \/ ___/  | | / / __/ /
/ /_/ / __/ / /_/ /_____/ / /  __/ /__/ / / /   ___/ / /_/ / / / / / / __/ /_/ / / / / /_/ /  _/ // / / (__  ) /_/ /_/ / / /  __/ /      | |/ / / __/ 
\____/_/    \____/     /_/  \___/\___/_/ /_/   /____/\__, /_/ /_/ /_/_/  \____/_/ /_/\__, /  /___/_/ /_/____/\__/\__,_/_/_/\___/_/       |___(_)____/ 
 
```

## About

- Symfony (version defined interactively)
- PHP-FPM 8.4
- MySQL 8
- nginx (latest)

## Quick Start

### 1. Init project
Copy the `.env.install.dist` file to `.env.install`

Change the `PROJECT_NAME` variable in `.env.install`,
and any other variables if needed

### 2. Run installer

```bash
make install-init

Enter Symfony version to install (or press Enter to use latest):

...

Enter the git repository url for your new project (or press Enter to skip):
```
#### Warning: if you specify a repository that already contains data, it will be lost. This action is irreversible.


### 3. Profit

See all available make targets in [Makefile.md](Makefile.md)

You can define your own commands in [MakefileCustom](MakefileCustom)