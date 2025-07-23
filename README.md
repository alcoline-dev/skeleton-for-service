# Symfony Docker Installer v.2.0

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