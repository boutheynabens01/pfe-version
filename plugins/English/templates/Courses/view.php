<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $course
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Courses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="courses view content">
            <h3><?= h($course->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($course->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $course->hasValue('category') ? $this->Html->link($course->category->name, ['controller' => 'CourseCategories', 'action' => 'view', $course->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($course->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($course->created_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($course->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Chapters') ?></h4>
                <?php if (!empty($course->chapters)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Content') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th><?= __('Order Number') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->chapters as $chapter) : ?>
                        <tr>
                            <td><?= h($chapter->id) ?></td>
                            <td><?= h($chapter->title) ?></td>
                            <td><?= h($chapter->content) ?></td>
                            <td><?= h($chapter->course_id) ?></td>
                            <td><?= h($chapter->order_number) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Chapters', 'action' => 'view', $chapter->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Chapters', 'action' => 'edit', $chapter->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chapters', 'action' => 'delete', $chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapter->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>