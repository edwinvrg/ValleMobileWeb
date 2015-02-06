<?php

use ValleMovil\Entities\Image;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ImagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $images= ['https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10898042_907290025982893_6692115733914182205_n.jpg?oh=0af91f821f1a1268ad2915deda102377&oe=556B720B&__gda__=1431672499_bddefd2bf16e1d73af13ec4f684a45eb',
        'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/10550922_907060909339138_1146519870086983934_n.jpg?oh=8f3f86f5f36b916b6b4416fe28c82d6c&oe=556455F3&__gda__=1431549893_66ba9e392476207e144488d2e9088504',
        'https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/1796418_907060872672475_8791060598792531166_n.jpg?oh=5a3b636640a5909111832fdc7cb8c477&oe=55635F0C&__gda__=1432081559_d3efbd9117acbb2fee1680ddaa82b94a',
        'https://scontent-a-atl.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/10926375_907060852672477_1581884731868107487_n.jpg?oh=15f0485e0af2f1c808375d764e984d92&oe=5549A813',
        'https://scontent-b-atl.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10931343_907060829339146_8520854411554640685_n.jpg?oh=16785ae32ee9da4e98d972db7477f96a&oe=5568E37A',
        'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10931204_907060759339153_5717096664917705739_n.jpg?oh=1920d3dd5701c0fe19bd0ed3bea74ccb&oe=55667C40&__gda__=1432009628_573b14976f70ab0b18276393649a76c5',
        'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/62647_907060742672488_234784023425942960_n.jpg?oh=ca6b56473fad289a5f840b11474c879e&oe=5556647C&__gda__=1432229554_f1734df8cd35a9806c89b84372f6e53a',
        'https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10891949_906893099355919_3624458481389331605_n.jpg?oh=adab748e3460edcb559e00032c1aef1a&oe=555D84EF&__gda__=1431136855_8727ccffeba28ac9f2c2969316941392',
        'https://scontent-a-atl.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/10917391_906781762700386_8805221169303716510_n.jpg?oh=b2c156980a48651203ac65668704ced1&oe=55601F9C',
        'https://scontent-a-atl.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10428684_895609627150933_4344155541790777433_n.jpg?oh=3be2f2c904273da00f0978fc7dd5c495&oe=555D3445',
        'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10881606_894935467218349_7878531246356667372_n.jpg?oh=a69503c0df830e52cd9a9293def306a5&oe=5595138C&__gda__=1431014224_c7de6eff81b70e86fa4e266084a53cfb',
        'https://scontent-a-atl.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/10849818_894935413885021_4922344231295981636_n.jpg?oh=a255c2f274cdda9c7560385ccb3d8caa&oe=5550216E',
        'https://scontent-a-atl.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/10410696_894674320577797_6052146512989249727_n.jpg?oh=03dd6927b1aec5a744f44e3729e22d93&oe=55641120',
        'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10432983_892906867421209_7234709335433685861_n.jpg?oh=13134b4fedcaa037bd75641a9d5ec5b0&oe=554DD0A2&__gda__=1433081114_9f77b2b91b97537699fa3c6dc055b1f9',
        'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10405298_891395714238991_893873251851055653_n.jpg?oh=60bd56d61cc3b6a8a1898f25972df451&oe=5556D961&__gda__=1432483112_d0204f3b23b79fa9d857d636af59a446',
        'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10801667_886986434679919_5761973270468754530_n.jpg?oh=d37fac8ebd65e14742b0186afe82523d&oe=5548DC18&__gda__=1431857809_f622460a515f152fcbebbfca83bfcad4',
        'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10805796_885420044836558_5886915030200633506_n.jpg?oh=5c750165a9ac7971d35e4b0fd72a52cb&oe=554D1D6E&__gda__=1430829287_57f55dda11675995d425ac3c9ff44f55',
        'https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/10349064_880947405283822_7784115629316525591_n.jpg?oh=9d9eb2ca27f4263eb5a85e0c55918099&oe=554A6DA0&__gda__=1431589393_ffeff435b9dbcffb87270ea8f2c743e3',
        'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10169167_875574665821096_8217684799329913793_n.jpg?oh=541e35c6836293b0bfe9d065b9549657&oe=55947C5E&__gda__=1435811543_8fca284baf2583cd4569708ebdccc6e5',
        'https://scontent-b-atl.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/10460275_875568102488419_2046250435325703402_n.jpg?oh=aab8d613c9546f5d998449f942052736&oe=554EE478',
        'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/63743_875567319155164_4048580898719548407_n.jpg?oh=3b1669fe15620e77f7de746471be5234&oe=5548A08E&__gda__=1432594931_615489583418b29fec6907e3ca31b38a',
        'https://scontent-a-atl.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10805751_875560302489199_626887163786146723_n.jpg?oh=8bc37f440fae73b58d7e9ba53a807526&oe=556BF301',
        'https://scontent-a-atl.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/10427336_873378039374092_640083709720362345_n.jpg?oh=7b46493e75bb595a608aab0cd5eb7b21&oe=5558A37C',
        'https://scontent-a-atl.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/10440942_872037349508161_4778230141823637435_n.jpg?oh=f102fdb535a4788391872b475cd0508f&oe=554955D5',
        'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10420241_871014309610465_7360602778932964137_n.jpg?oh=39c7c2c80121db88cc940e80d8595d03&oe=556A7242&__gda__=1433000232_5fb87a44c9fc2ac3fe6d19761205edee',
        'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10600657_870339373011292_2866727074165977205_n.jpg?oh=183ae1e3188beffb9d7a40a55286ad39&oe=554E40D0&__gda__=1432847802_d7857b1c57e0339f969739789a293acb',
        'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10325154_820015704710326_7965385133444366753_n.jpg?oh=6d48ced9b678b95897e0021a6981cb64&oe=5549C720&__gda__=1432633674_b2e3e8b70592ab43440a0958eeb32998',
        'https://scontent-b-atl.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10353043_801236493254914_123860990715463765_n.jpg?oh=44e726f104821068872ae97b597ab71e&oe=554ABC65',
        'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10390886_801225286589368_1051241316621247118_n.jpg?oh=b63d19b23300cd6c28e9cc286e9b5866&oe=5565CA76&__gda__=1431548366_4225719b64fb5eea784e9f5e57a4490b',
        'https://scontent-a-atl.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/10517462_801213716590525_3929323038437751134_n.jpg?oh=6d42af1d1408572c27f42b4a8b2bb0b1&oe=5563D5B8',
        'https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10447611_801201146591782_8019235954364426439_n.jpg?oh=7c1a35e72b92d87a4631267a71001f23&oe=55619149&__gda__=1432274673_66979b87e0a23cd64fe5e7000ea95662',
        'https://scontent-b-atl.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10492598_801189089926321_6242033645282176818_n.jpg?oh=126b64a32ced63ba5af39cf2a7d9af9c&oe=554DDBB5',
        'https://scontent-b-atl.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/10489683_801175929927637_5976894256045025600_n.jpg?oh=bcbc3313fea77362724adc051b1a4b0e&oe=555CBB1C',
        'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10403150_801160213262542_3320070379709266880_n.jpg?oh=6366ba9608004e68a3689ab2cce40542&oe=555A9C7E&__gda__=1432689094_18ff1fd82636557e86330a7c6abdcdbb'];

        $total = count($images) - 1;

		foreach(range(1, 120) as $index)
		{
            $select = rand(0, $total);
			Image::create([
                'url' => '"'.$images[$select].'"',
                'place_id' => $faker->numberBetween(0, 50)
			]);
		}
	}

}