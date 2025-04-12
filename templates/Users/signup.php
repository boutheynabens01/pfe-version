<!-- in /templates/Users/signup.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Sign Up</h3>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Create your account') ?></legend>
        
        <?= $this->Form->control('fullname', ['required' => true]) ?>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true, 'type' => 'password']) ?>
        <?= $this->Form->control('phone') ?>
        <?= $this->Form->control('address') ?>
        <?= $this->Form->control('age') ?>
        <?= $this->Form->control('birthdate', ['type' => 'date']) ?>
        <?= $this->Form->control('profilepicture', ['type' => 'file']) ?>
        <?= $this->Form->control('bio', ['type' => 'textarea']) ?>
        <?= $this->Form->control('gender', ['type' => 'select', 'options' => ['man' => 'Man', 'woman' => 'Woman']]) ?>
        <?= $this->Form->control('role', [
            'type' => 'select',
            'options' => [
                'authenticated' => 'Authenticated',
                'staff' => 'Staff',
                'admin' => 'Admin'
            ],
            'default' => 'authenticated'
        ]) ?>

    </fieldset>
    <?= $this->Form->submit(__('Sign Up')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Already have an account? Login here", ['action' => 'login']) ?>
</div>
