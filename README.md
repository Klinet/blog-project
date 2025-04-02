# Blog Project

# Feature branch terv
1) git main/dev
Struktúra – PSR-4, jól szervezett mappák (Domains, Interfaces, Infrastructure, Shared)
Bővíthetőség – eseményvezérelt minta, singleton szolgáltatók, DDD-alapú modulok
DDD – Domains/Post/..., Services, Repositories, Events, stb.
OOP Design Patterns – Factory, Singleton, Dependency Isolation
Modularitás – minden logika szét van választva, lazán csatolt komponensek

2) git checkout -b feature/database-building
SQL szerkezet – migrációs fájlban, ACID-kompatibilisen
Tesztadatok – factory + seeder rendszerrel, faker + user-post kapcsolatokkal

3) git checkout -b feature/smarty-bootstrap

git checkout -b feature/user-auth
git checkout -b feature/admin-post-crud
git checkout -b feature/guest-post-list
git checkout -b feature/security-validation