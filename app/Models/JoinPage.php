<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JoinPage extends Model
{
    protected $table = 'joins';

    protected $guarded = [];

    public function ruleList(): array
    {
        return array_values(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', (string) $this->rules) ?: [])));
    }
}
