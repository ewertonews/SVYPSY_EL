<?php
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	
	public function view(){
		
		$images =  Array("Bike mirror-Specchietto per bici_246.jpg", "Eggs-Uova_5.jpg", "Soil-Terriccio_184.jpg", "Power cord-Cavo alimentazione_138.jpg", "Soup-Zuppa_31.jpg", "Panties-Mutande_145.jpg", "Cauliflower-Cavolfiore_97.jpg", "Apple-Mela_87.jpg", "Tights-Collant_144.jpg", "Almonds-Mandorle_13.jpg", "Tennis racket-Racchetta da tennis_234.jpg", "Cookies-Biscotti_12.jpg", "Ping pong padle-Racchetta da ping pong_230.jpg", "Wristband-Polsino_228.jpg", "Seeds-Semi_191.jpg", "Laser-Laser_127.jpg", "Egg carrier-Portabocce_238.jpg", "Olive oil-Olio d'oliva_25.jpg", "Nylon rope-Corda di nylon_203.jpg", "Shirt-Camicia_147.jpg", "Balaclava-Passamontagna_164.jpg", "Starter fluid- Accendifuoco liquido_217.jpg", "Microwave popcorn-Popcorn per microonde_69.jpg", "Skin insect repellent-Spray antizanzare_192.jpg", "Pudding-Budino_41.jpg", "Whistle-Fischietto_225.jpg", "Flower bulbs-Bulbi _188.jpg", "Goggles-Occhialini_226.jpg", "Rubber hose-Tubo di gomma_211.jpg", "Prunes-Prugne_79.jpg", "Battery-Batteria_101.jpg", "Seed oil-Olio di semi_70.jpg", "Gardening gloves-Guanti da giardiniere_186.jpg", "Grips-Manubri_243.jpg", "Pear-Pera_88.jpg", "Tea-The_53.jpg", "Yeast-Lievito_57.jpg", "Case fan-Ventola per PC_108.jpg", "Beef steak-Bistecca di manzo_99.jpg", "Fishing monofilament-Filo da pesca_239.jpg", "Barley-Orzo_56.jpg", "Chocolates-Cioccolatini_33.jpg", "Breaded fish fillets-Pesce impanato_15.jpg", "Power bar-Presa multipla_139.jpg", "Ping pong balls-Palline da ping pong_229.jpg", "Fertilizer-Fertilizzante_216.jpg", "Loop jersey-Scaldacollo_158.jpg", "Crisps-Patatine_11.jpg", "Sausages-Salsicce_40.jpeg", "Baby bodysuit-Tutina da neonato_179.jpg", "Scarf-Sciarpa_163.jpg", "Flash drive-Chiavetta USB_106.jpg", "Newborn booties-Scarpe da neonato_180.jpg", "Chocolate spread-Cioccolata spalmabile_42.jpg", "Flour-Farina_28.jpg", "Salmon steak-Trancio di salmone_100.jpg", "Orange juice- Succo d'arancia_14.jpg", "Boxer-Boxer_154.jpg", "Hot chocolate-Cioccolata in tazza_38.jpg", "Ham-Prosciutto_67.jpg", "Tomato sauce-Salsa di pomodoro_81.jpg", "Spring lock collars-Blocca pesi_260.jpg", "Black pepper-Pepe nero_8.jpeg", "Glasses cleaning cloth-Panno per occhiali_173.jpg", "Lemon-Limone_86.jpg", "Watering can-Annaffiatoio_189.jpg", "Brie-Brie_45.jpg", "Snow seat-Paletta da neve_257.jpg", "Pasta-Pasta_35.jpg", "Sardines-Sardine_19.jpg", "Asparagus-Asparagi_93.jpg", "Weight-Peso_222.jpg", "Eyes shade-Maschera per dormire_202.jpg", "Vinegar-Aceto_77.jpg", "Knit toque-Berretto_166.jpg", "USB cable-Cavo USB_104.jpg", "Muscle shirt- Canottiera_146.jpg", "Planter-Vaso_182.jpg", "Beans-Fagioli_58.jpg", "Mosquito coils-Spirali antizanzare_187.jpg", "Charcoal briquettes-Carbonella_185.jpg", "Tank-Canotta_162.jpg", "Wallet-Portafoglio_152.jpg", "CD sleeves-Buste per CD_110.jpg", "Shorts-Pantaloncini_141.jpg", "Dards-Freccette_233.jpg", "Golf balls-Palline da golf_245.jpg", "Electrical toothbrush-Spazzolino elettrico_113.jpg", "Pizza-Pizza_82.jpg", "Insoles-Suole_177.jpg", "Tennis balls-Palline da tennis_224.jpg", "Fly swatter-Acchiappamosche_183.jpg", "Mushrooms-Funghi_91.jpg", "Demin shorts-Jeans corti_171.jpg", "Peas- Piselli_22.jpg", "Swimming bra- Parte superiore del costume_176.jpg", "Squid-Calamaro_90.jpg", "Beach ball-Pallone da spiaggia_258.jpg", "Hamburger buns-Panini per hamburger_74.jpg", "Coaxial cable-Cavo coassiale_121.jpg", "Mouse pad_Tappetino per mouse_119.jpg", "Lettuce-Lattuga_46.jpg", "Hook-Amo_231.jpg", "Pine nuts-Pinoli_94.jpg", "Ketchup-Ketchup_6.jpg", "Leggings-Leggings_170.jpg", "Water-Acqua_68.jpg", "Sugar-Zucchero_24.jpg", "Bike bell-Campanello_221.jpg", "Chocolate candies-Confetti di cioccolato_50.jpg", "Mayonnaise-Maionese_52.jpeg", "Micro SD-Micro SD_125.jpg", "Bananas-Banane_83.jpg", "USB fan-Ventilatore USB_134.jpg", "Cabbage-Cavolo_95.jpg", "Strech cords-Ganci elastici_214.jpg", "Strawberries-Fragole_44.jpg", "Gloves-Guanti_153.jpg", "Tuna-Tonno_10.jpg", "Green beans-Fagiolini_17.jpg", "Snack bread-Bruschette_51.jpeg", "Onions-Cipolle_66.jpg", "Butter-Burro_48.jpg", "Mouse-Mouse_107.jpg", "Ananas-Ananas_43.jpg", "Bike pedals-Pedali per bici_242.jpg", "Beef kabob-Spiedini_49.jpg", "Potatoes-Patate_92.jpg", "Pijama-Pigiama_151.jpg", "Street hockey ball-Palla da hockey da strada_249.jpg", "Phone to stereo adapter-Adattatore telefono stereo_123.jpg", "Spreadable cheese-Formaggio spalmabile_39.jpg", "Patch kit-Kit riparazione bici_235.jpg", "Croutons-Crostini_76.jpg", "Camp towel-Asciugamano da campeggio_194.jpg", "Olives-Olive_29.jpg", "Burgers-Hamburgers_60.jpg", "Umbrella-Ombrello_149.jpg", "Pineapple chunks-Ananas sciroppato_30.jpg", "Ear plugs-Tappi per le orecchie_223.jpg", "Rake-Rastrello_193.jpg", "Water bottle-Borraccia_236.jpg", "Plant hook-Gancio per piante_198.jpg", "Brassiere-Reggiseno_160.jpg", "Hot pack-Ghiaccio secco_210.jpg", "Travel pillow-Cuscino da viaggio_201.jpg", "Flip flops-Infradito_159.jpg", "Salad-Insalata_63.jpg", "Backpack-Zaino_175.jpg", "Trowel-Trapiantatoio_181.jpg", "Yogurt-Yogurt_26.jpg", "Kiwifruits-Kiwi_89.jpg", "Bread-Pane_1.jpg", "Sweater-Felpa_148.jpg", "Whipped cream-Panna montata_20.jpg", "Lure box-Contenitore per esche_253.jpg", "Glasses strap-Cordino per occhiali_165.jpg", "Dress-Vestito_156.jpg", "Garden net-Rete da giardino_219.jpg", "Salt-Sale_7.jpeg", "Raisins-Uvetta_80.jpg", "Mackerel-Sgombro_18.jpg", "PC microphone-Microfono per PC_115.jpg", "Circuit tester-Tester per circuiti_135.jpg", "Knee highs-Gambaletti_172.jpg", "Shrub cove-Telo per arbusti_220.jpg", "Broccoli-Broccoli_96.jpg", "Touch screen pen-Penna per touch screen_131.jpg", "Calculator-Calcolatrice_102.jpg", "Pickles-Cetriolini_36.jpeg", "Ink cartridge-Cartuccia per stampante_128.jpg", "Feta-Feta_23.jpg", "Jam-Marmellata_9.jpg", "Clock-Orologio_114.jpg", "Headphones-Cuffie_111.jpg", "Snap hook-Moschettone_237.jpg", "Bulb-Lampadina_103.jpg", "Camera case-Custodia per fotocamera_132.jpg", "Tshirt-Maglietta_143.jpg", "Chicken-Pollo_61.jpg", "Tool set-Set di attrezzi_213.jpg", "Solar rocket light-Lampioncino solare_196.jpg", "Twist tie-Filo animato_206.jpg", "Barbecue spatula-Pinza per griglia_218.jpg", "Socks-Calzini_142.jpg", "Tablet sleeve-Busta per tablet_112.jpg", "Elbow pads-Gomitiere_251.jpg", "Baseball cap-Cappellino_161.jpg", "Shoe horn-Calzascarpe_150.jpg", "Skirt-Gonna_157.jpg", "Flights-Alette per freccette_244.jpg", "Soy milk-Latte di soia_71.jpg", "Carrots-Carote_64.jpg", "Keyboard-Tastiera_118.JPG", "Camera support-Supporto per telecamera_122.jpg", "Make up bag-Astuccio per trucchi_174.jpg", "Footie liners-Fantasmini_169.jpg", "Card reader-Lettore di memorie_109.jpg", "Ground beef-Macinato di manzo_62.jpg", "Lens cap-Coperchio per fotocamera_120.jpg", "Icecream-Gelato_16.jpg", "Mobile amplifier-Amplificatore per cellulare_133.JPG", "Speakers-Casse_136.jpg", "Flying disc-Frisbee_241.jpg", "Corn flakes-Cereali_47.jpg", "Pruner-Cesoie_190.jpg", "Lens filter-Filtro per fotocamera_105.jpg", "Citronella candle-Candela alla citronella_208.jpg", "Softball-Palla da softball_252.jpg", "Head band-Fascia_254.jpg", "Antenna-Antenna_124.jpg", "Blackberries-More_84.jpg", "Alluminum pegs-Picchetti di alluminio_212.jpg", "USB car adapter-Adattatore USB per automobile_126.jpg", "Table clamps-Fermatovaglia_207.jpg", "Sim card adapter_Adattatore di sim_117.jpg", "Elastics-Elastici_178.jpg", "Pedometer-Pedometro_255.jpg", "Corned beef-Carne in scatola_59.jpg", "Chicken nuggets-Crocchette di pollo_75.jpg", "Granola bars-Barrette_32.jpg", "Pressure sprayer-Nebulizzatore a pressione_199.jpg", "Rice-Riso_27.jpg", "Telephone cable-Cavo telefonico_116.jpg", "Ciller lunch cube-Mattonella refrigerante_209.jpg", "Camping shower-Doccia da campeggio_204.jpg", "Mouthguard-Paradenti_247.jpg", "Soda-Soda_72.jpg", "Emergency blanket-Coperta di emergenza_205.jpg", "Timer-Timer_137.jpg", "Croissants-Croissants_2.jpg", "Jump rope-Corda_232.jpg", "Plant marker-Cartellino per piante_197.jpg", "Bulb planter-Trapiantatore di bulbi_215.jpg", "Swim ring-Salvagente_259.jpg", "Milk-Latte_4.jpeg", "Pie-Torta_3.jpg", "Chocolate syrup-Cioccolato liquido_73.jpg", "Mustard-Senape_55.jpg", "Camera tripod-Treppiede per fotocamera_130.jpg", "Plant soucer-Sottovaso_200.jpg", "Honey-Miele_54.jpg", "Shuttle cocks-Volani_248.jpg", "Compass-Bussola_227.jpg", "Slippers-Ciabatte_155.jpg", "Tomatoes-Pomodori_65.jpg", "Bird house-Casetta per gli uccelli_195.jpg", "Beach shoes-Scarpe da mare_168.jpg", "Chips-Patate fritte_21.jpg", "Swimming cap-Cuffia_240.jpg", "Margarine-Margarina_34.jpg", "Rice cakes-Gallette di riso_78.jpg", "Soccer bag-Sacca da calcio_250.jpg", "Power screwdriver-Avvitatore elettrico_140.jpg", "Orange-Arancia_85.jpg", "Laces-Lacci_167.jpg", "Screen protector-Proteggischermo_129.jpg", "Inner tube-Copertone_256.jpg", "Crackers-Biscotti salati_37.jpg", "Garlic-Aglio_98.jpg");
		
		//$images =  Array("Bike mirror-Specchietto per bici_246.jpg", "Eggs-Uova_5.jpg", "Soil-Terriccio_184.jpg", "Power cord-Cavo alimentazione_138.jpg", "Soup-Zuppa_31.jpg", "Panties-Mutande_145.jpg", "Cauliflower-Cavolfiore_97.jpg", "Apple-Mela_87.jpg");
		shuffle($images);
		
		$shuffledImages = array();
		
		foreach ($images as $image){
			array_push($shuffledImages, $image);
		}
		
		//$data['images'] = json_encode($shuffledImages);
		
		session_start();
		
		$_SESSION['shufImages'] = json_encode($shuffledImages);	
		
		
		$this->load->view('templates/header');
		$this->load->view('pages/survey');
		$this->load->view('templates/footer');
	}
	
	function remove_by_index($list, $index){
		$new_array = array();
		$i = 0;

		while ($i < sizeof($list)){
			array_push($new_array, $list[$i]);
			$i++;
		}
		
		
		return $new_array;		
	}
	

	
	//this method will invoke the model, sending the data to it, so that the modell will store the data in the database
	public function createRecord(){
		$this->load->model('record_model');
		$this->load->model('record');
		
		$record = new Record();
		$blockNo = $this->input->get_post('blNum1');
		$record->block_number =  $blockNo;// the methord get_post receives the data that is sent by the client 
		$record->item_title = $this->input->get_post('itemTitle1');
		$record->answer_q1 = $this->input->get_post('q1_1');
		$record->answer_q2 = $this->input->get_post('q1_2');
		$record->subject_id = $this->input->get_post('sid');
		$record->ageinfo = $this->input->get_post('ageInfo');
		$record->schoolinfo = $this->input->get_post('schoolinfo');
		$record->freqgroceryshopping = $this->input->get_post('freqgroceryshopping');
		$record->livinginfo = $this->input->get_post('livinginfo');
		$record->gender = $this->input->get_post('genderinfo');
		$record->lastshop = $this->input->get_post('lastshop');
		
		
		
		
		
		
		$category = null;
		
		if ($blockNo <= 100){
			$category = "Grocery";
		}else if ($blockNo > 100 && $blockNo <= 140){
			$category = "Electronics";
		}else if ($blockNo > 140 && $blockNo <= 180){
			$category = "Clothing";
		}else if ($blockNo > 180 && $blockNo <= 220){
			$category = "Outdoor";
		}else if ($blockNo > 220 && $blockNo <= 260){
			$category = "Sport";
		}
		
		$record->category = $category;
		
		$this->record_model->insert($record);		

	}
	
	public function getLastSubjectId(){
		$this->load->model('record_model');
		$this->load->model('record');
		
		$result = $this->record_model->newSubId();
		
		$newId = json_encode($result);
		
	    echo json_encode(array("sid"=>$newId));
	}
	
	public function insertSubjectId($id){
		$this->load->model('record_model');
		$this->load->model('record');
		
		//$id = $this->input->get_post('subId');
		
		$this->record_model->newSubId($id);
	}
}
