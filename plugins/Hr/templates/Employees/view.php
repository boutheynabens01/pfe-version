<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="employees view content">
            <h3><?= h($employee->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $employee->hasValue('user') ? $this->Html->link($employee->user->state, ['controller' => 'Users', 'action' => 'view', $employee->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($employee->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salary') ?></th>
                    <td><?= $employee->salary === null ? '' : $this->Number->format($employee->salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hire Date') ?></th>
                    <td><?= h($employee->hire_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>