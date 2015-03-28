<?php
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	
	public function view(){
		$this->load->view('templates/header');
		$this->load->view('pages/survey');
		$this->load->view('templates/footer');
	}
	
	public function setImages(){
		//array (vector) with the names of all images
		$images =  Array("Soil-Terriccio_184.jpg", "Power cord-Cavo alimentazione_138.jpg", "Panties-Mutande_145.jpg", "Tights-Collant_144.jpg", "Seeds-Semi_191.jpg", "Laser-Laser_127.jpg", "Nylon rope-Corda di nylon_203.jpg", "Shirt-Camicia_147.jpg", "Balaclava-Passamontagna_164.jpg", "Starter fluid- Accendifuoco liquido_217.jpg", "Hot-pack-Ghiaccio secco_210.jpg", "Skin insect repellent-Spray antizanzare_192.jpg", "Flower bulbs-Bulbi _188.jpg", "Rubber hose-Tubo di gomma_211.jpg", "Baby body suit-Tutina da neonato_179.jpg", "Battery-Batteria_101.jpg", "Gardening gloves-Guanti da giardiniere_186.jpg", "Case fan-Ventola per PC_108.jpg", "Power bar-Presa multipla_139.jpg", "Fertilizer-Fertilizzante_216.jpg", "Loop jersey-Scaldacollo_158.jpg", "Scarf-Sciarpa_163.jpg", "Flash drive-Chiavetta USB_106.jpg", "Boxer-Boxer_154.jpg", "Glasses cleaning cloth-Panno per occhiali_173.jpg", "Watering can-Annaffiatoio_189.jpg", "Eyes shade-Maschera per dormire_202.jpg", "Knit toque-Berretto_166.jpg", "USB cable-Cavo USB_104.jpg", "Booties newborn-Scarpe da neonato_180.jpg", "Muscle shirt- Canottiera_146.jpg", "Planter-Vaso_182.jpg", "Mosquito coils-Spirali antizanzare_187.jpg", "Charcoal briquettes-Carbonella_185.jpg", "Tank-Canotta_162.jpg", "Wallet-Portafoglio_152.jpg", "CD sleeves-Buste per CD_110.jpg", "Shorts-Pantaloncini_141.jpg", "Electrical toothbrush-Spazzolino elettrico_113.jpg", "Insoles-Suole_177.jpg", "Fly swatter-Acchiappamosche_183.jpg", "Demin shorts-Jeans corti_171.jpg", "Swimming bra- Parte superiore del costume_176.jpg", "Coaxial cable-Cavo coassiale_121.jpg", "Mouse pad_Tappetino per mouse_119.jpg", "Micro SD-Micro SD_125.jpg", "USB fan-Ventilatore USB_134.jpg", "Strech cords-Ganci elastici_214.jpg", "Gloves-Guanti_153.jpg", "Mouse-Mouse_107.jpg", "Pijama-Pigiama_151.jpg", "Phone to stereo adapter-Adattatore telefono stereo_123.jpg", "Camp towel-Asciugamano da campeggio_194.jpg", "Umbrella-Ombrello_149.jpg", "Rake-Rastrello_193.jpg", "Plant hook-Gancio per piante_198.jpg", "Brassiere-Reggiseno_160.jpg", "Travel pillow-Cuscino da viaggio_201.jpg", "Flip flops-Infradito_159.jpg", "Backpack-Zaino_175.jpg", "Trowel-Trapiantatoio_181.jpg", "Sweater-Felpa_148.jpg", "Glasses strap-Cordino per occhiali_165.jpg", "Dress-Vestito_156.jpg", "Garden net-Rete da giardino_219.jpg", "PC microphone-Microfono per PC_115.jpg", "Circuit tester-Tester per circuiti_135.jpg", "Shrub cove-Telo per arbusti_220.jpg", "Touch screen pen-Penna per touch screen_131.jpg", "Calculator-Calcolatrice_102.jpg", "Ink cartridge-Cartuccia per stampante_128.jpg", "Clock-Orologio_114.jpg", "Headphones-Cuffie_111.jpg", "Bulb-Lampadina_103.jpg", "Camera case-Custodia per fotocamera_132.jpg", "Tool set-Set di attrezzi_213.jpg", "Solar rocket light-Lampioncino solare_196.jpg", "Twist tie-Filo animato_206.jpg", "Knee lenght-Gambaletti_172.jpg", "Barbecue spatula-Pinza per griglia_218.jpg", "Socks-Calzini_142.jpg", "Tablet sleeve-Busta per tablet_112.jpg", "Shoe horn-Calzascarpe_150.jpg", "Skirt-Gonna_157.jpg", "Keyboard-Tastiera_118.JPG", "Camera support-Supporto per telecamera_122.jpg", "Make up bag-Astuccio per trucchi_174.jpg", "Footie liners-Fantasmini_169.jpg", "Card reader-Lettore di memorie_109.jpg", "Lens cap-Coperchio per fotocamera_120.jpg", "Mobile amplifier-Amplificatore per cellulare_133.JPG", "Speakers-Casse_136.jpg", "Pruner-Cesoie_190.jpg", "Lens filter-Filtro per fotocamera_105.jpg", "Citronella candle-Candela alla citronella_208.jpg", "Cappellino_161.jpg", "Antenna-Antenna_124.jpg", "Alluminum pegs-Picchetti di alluminio_212.jpg", "USB car adapter-Adattatore USB per automobile_126.jpg", "Table clamps-Fermatovaglia_207.jpg", "Sim card adapter_Adattatore di sim_117.jpg", "Elastics-Elastici_178.jpg", "Pressure sprayer-Nebulizzatore a pressione_199.jpg", "Telephone cable-Cavo telefonico_116.jpg", "Ciller lunch cube-Mattonella refrigerante_209.jpg", "Camping shower-Doccia da campeggio_204.jpg", "Leggings-Leggings170.jpg", "Emergency blanket-Coperta di emergenza_205.jpg", "Timer-Timer_137.jpg", "Plant marker-Cartellino per piante_197.jpg", "Bulb planter-Trapiantatore di bulbi_215.jpg", "Camera tripod-Treppiede per fotocamera_130.jpg", "Plant soucer-Sottovaso_200.jpg", "Slippers-Ciabatte_155.jpg", "Bird house-Casetta per gli uccelli_195.jpg", "Beach shoes-Scarpe da mare_168.jpg", "Power screwdriver-Avvitatore elettrico_140.jpg", "Laces-Lacci_167.jpg", "T-shirt-Maglietta_143.jpg", "Screen protector-Proteggischermo_129.jpg");
		
		//generates a random number that goes from 0 to length of the list - 1 (because of the index that starts from 0)
		$randomImg1 = rand(0, (sizeof($images)-1));
		
		$selectedImg1 = $images[$randomImg1];
		
		$randomImg2 = rand(0, (sizeof($images)-1));
		
		$selectedImg2 = $images[$randomImg2];
		
		while($randomImg2 == $randomImg1){
		
			$randomImg2 = rand(0, (sizeof($images)-1));
			$selectedImg2 = $images[$randomImg2];
		
		}
		
		echo json_encode(array('imgSrc1'=>$selectedImg1,'imgSrc2'=>$selectedImg2 ));
	
	}
	
	//this method will invoke the model, sending the data to it, so that the modell will store the data in the database
	public function createRecord(){
		$this->load->model('record_model');
		$this->load->model('record');
		
		$record = new Record();
		$record->block_number = $this->input->get_post('blNum1'); // the methord get_post receives the data that is sent by the client 
		$record->item_title = $this->input->get_post('itemTitle1');
		$record->answer_q1 = $this->input->get_post('q1_1');
		$record->answer_q2 = $this->input->get_post('q1_2');
		
		$this->record_model->insert($record);
		
		$record->block_number = $this->input->get_post('blNum2');
		$record->item_title = $this->input->get_post('itemTitle2');
		$record->answer_q1 = $this->input->get_post('q2_1');
		$record->answer_q2 = $this->input->get_post('q2_2');
		
		
		$this->record_model->insert($record);
		
		//Then we redirect to the index page again
		//redirect('login/index', 'refresh');
		
		echo "Thank you!";
	}
}
