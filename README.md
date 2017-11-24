# Ingredients de Kebab!

# Reference

# CRUD

## Create
### Formulaire
GET /add.php

### Ajout en base
POST /doadd.php
```sql
INSERT INTO 
  `ingredient` 
  (`id`, `nom`, `type`)
VALUES
  (NULL, 'Salade', 'Filling')
;
```

## Read
### Liste
GET /
GET /index.php
```sql
SELECT 
  id, 
  nom, 
  type 
FROM
  ingredient
;
```

### Details
GET /details.php?id={id}
```sql
SELECT 
  id, 
  nom, 
  type 
FROM
  ingredient
WHERE 
  id = 1
;
```

## Update
### Formulaire
GET /edit.php
```sql
SELECT 
  id, 
  nom, 
  type 
FROM
  ingredient
WHERE 
  id = 1
;
```

### Modification en base
POST /doedit.php
```sql
UPDATE 
  `ingredient` 
SET 
  `nom` = 'Laitue' 
WHERE 
  `id` = 1
;
```

## Delete
### Confirmation
GET /delete.php
```sql
SELECT 
  id, 
  nom, 
  type 
FROM
  ingredient
WHERE 
  id = 1
;
```

### Suppression en base
POST /dodelete.php
```sql
DELETE FROM 
  `ingredient` 
WHERE 
  `id` = 2
;
```
