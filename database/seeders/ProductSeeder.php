<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Sofá Cama Retrátil e Reclinável 4 Lugares 240cm em Veludo com Molas Palmeira CabeCasa MadeiraMadeira',
                'description' => 'O Sofá Cama Palmeira MadeiraMadeira é a solução perfeita para quem tem pouco espaço disponível. Com ele você poderá acomodar suas visitas com conforto e praticidade. Produzido em madeira maciça de eucalipto, com as seguintes medidas (A x L x P): 103cm x 240cm x 112cm. Depois nos conte como foi a experiência de compra e como ficou seu ambiente nos comentários',
                'price' => 5234.23,
            ],
            [
                'name' => 'Sofá Cama Retrátil e Reclinável 4 Lugares 240cm em Veludo com Molas Palmeira CabeCasa MadeiraMadeira Bege',
                'description' => 'O Sofá Cama Palmeira MadeiraMadeira é a solução perfeita para quem tem pouco espaço disponível. Com ele você poderá acomodar suas visitas com conforto e praticidade. Produzido em madeira maciça de eucalipto, com as seguintes medidas (A x L x P): 103cm x 240cm x 112cm. Depois nos conte como foi a experiência de compra e como ficou seu ambiente nos comentários.',
                'price' => 3129.89,
            ],
            [
                'name' => 'Sofá Prime 5 Lugares, Retrátil, Reclinável, 2,50M com Molas Yescasa Cinza',
                'description' => 'O Sofá Prime é perfeito para o seu lar. Fabricado com material de alta qualidade retrátil e reclinável, possui estrutura em madeira eucalipto reflorestada. Assento retrátil de ferro com pillow, espuma de densidade D-33, coberto com manta acrílica TNT resinado e mola. O revestimento em tecido veludo nobre e pês de madeira. Conta com percintas elásticas italiana em sua estrutura que confere maior durabilidade e resistência por mais tempo. Vai deixar o ambiente muito mais aconchegante e perfeito para relaxar a descansar.',
                'price' => 2629.91,
            ],
            [
                'name' => 'Sofá Cama Melissa 3 Lugares 180cm Viero Safira',
                'description' => 'Com 3 lugares e 2 almofadas que podem ser utilizadas como travesseiros, encostos reclináveis se encaixa perfeitamente em qualquer ambiente. Além de possuir design diferenciado, praticidade e conforto .',
                'price' => 873.90,
            ],
            [
                'name' => 'Sofá Orquídea 3 Lugares em Veludo Cabecasa Madeiramadeira Bege',
                'description' => 'O Sofá Orquídea MadeiraMadeira conta com conforto, materiais nobres, durabilidade e versatilidade com um preço que cabe no bolso. O conforto é garantido pelo tecido nobre de veludo, pela espuma macia no assento e pelo encosto com 3 camadas de conforto. Possui ainda alta durabilidade, estrutura de madeira maciça de eucalipto e garantia de 2 anos. Garanta o seu Orquídea e receba as visitas com muito mais conforto e elegância.',
                'price' => 1589.90,
            ],
        ];

        Product::insert($products);
    }
}
