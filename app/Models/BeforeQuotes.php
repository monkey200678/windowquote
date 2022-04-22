<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class BeforeQuotes extends Model {
        use HasFactory;

        protected $fillable = [
            'width',
            'height',
            'exterior_color',
            'interior_color',
            'warranty',
            'install',
            'glass',
            'foam_field',
            'win_type',
            'standard',
            'quote_number'
        ];
        public $timestamps = true;

    }