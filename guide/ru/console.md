Консольные команды
===

## Поиск и добавление правил

Команда поиска правил и добавления в RBAC

```
php yii rbac/rule/add
```

Сканируется файловая система сайта на наличие правил для RBAC.
Затем в RBAC добавляются те правила, которых еще нет.
Существующие правила в RBAC не затираются.

## Генерация констант

Команда генерации констант для ролей, правил и полномочий

```
php yii rbac/const/generate
```
