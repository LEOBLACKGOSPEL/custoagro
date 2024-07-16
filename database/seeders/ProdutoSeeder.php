<?php

// database/seeders/ProdutoSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        Produto::factory()->count(30)->create();
    }
}
