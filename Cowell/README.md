#### Component load order
- Bản chất \<sequence\> sẽ giúp sắp sếp lại thứ tự load module trong config.php
Nên khi thêm \<sequence\> cần regenerate lại file config.php để có hiệu lực.

#### Override order
- Module muốn override layout file, template file,...cần được load sau module bị override trong (config.php)
- Module muốn override class (ko phải setup classes) thì không cần quan tâm thứ tự load trong (config.php)
- Nếu 2 module cùng override 1 class, module load sau trong (config.php) sẽ có hiệu lực
