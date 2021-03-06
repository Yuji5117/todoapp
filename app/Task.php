<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    const STATUS = [
        1 => ['label' => '未着手'],
        1 => ['label' => '着手中'],
        1 => ['label' => '完了'],
    ];



    public function getStatusLarabelAttribue()
    {
        $status = $this ->attributes['status'];

        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
    }

    
}
