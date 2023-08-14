<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todos".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $due_date
 * @property int|null $priority
 * @property int|null $status
 * @property string $created_at
 * @property string $updated_at
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description'], 'string'],
            [['due_date', 'created_at', 'updated_at'], 'safe'],
            [['priority', 'status'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'due_date' => 'Due Date',
            'priority' => 'Priority',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
