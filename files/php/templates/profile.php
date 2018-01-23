<?php $this->layout('layout', ['title' => 'Дрешник - магазин за най-уникалните дрехи на света!']) ?>

<h1>User Profile</h1>
<p>Hello, <?=$this->e($name)?>!</p>

<?php $this->insert('catfull') ?>

<?php $this->push('scripts') ?>
    <script>
        // Some JavaScript
    </script>
<?php $this->end() ?>
